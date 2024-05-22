<?php
require 'vendor/autoload.php';

use Aws\Ses\SesClient;
use Aws\Exception\AwsException;

// Retrieve AWS credentials from environment variables
//$accessKey = getenv('AWS_ACCESS_KEY_ID');
//$secretKey = getenv('AWS_SECRET_ACCESS_KEY');
$accessKey = 'AKIAXMYLEXS5T2VPBRHZ';
$secretKey = 'd/rp0F1aVbSvGNsHuwBNwNbE/PXGUL2I4o7bG5R4';
$region = 'ap-south-1'; // e.g., us-west-2

// Replace the following with your sender and recipient email addresses
$senderEmail = 'website@stellamaryscoe.edu.in';
$recipientEmail = 'mediacell@stellamaryscoe.edu.in';

// Retrieve subject, message, name, and email from POST request
$subject = substr($_POST["subject"],0,10);
$bodyText = 'This is the plain text body of the email.';
$bodyHtml = $_POST["message"] . '<br>' . $_POST["name"] . '<br>' . $_POST["email"];

// Create an SES client
$client = new SesClient([
    'version' => 'latest',
    'region'  => $region,
    'credentials' => [
        'key'    => $accessKey,
        'secret' => $secretKey,
    ],
]);

try {
    $result = $client->sendEmail([
        'Destination' => [
            'ToAddresses' => [$recipientEmail],
        ],
        'ReplyToAddresses' => [$senderEmail],
        'Source' => $senderEmail,
        'Message' => [
            'Body' => [
                'Html' => [
                    'Charset' => 'UTF-8',
                    'Data' => $bodyHtml,
                ],
                'Text' => [
                    'Charset' => 'UTF-8',
                    'Data' => $bodyText,
                ],
            ],
            'Subject' => [
                'Charset' => 'UTF-8',
                'Data' => $subject,
            ],
        ],
    ]);

    echo "Email sent! Message ID: " . $result['MessageId'] . "\n";

} catch (AwsException $e) {
    // Output error message if fails
    echo "The email was not sent. Error message: " . $e->getAwsErrorMessage() . "\n";
}
?>
