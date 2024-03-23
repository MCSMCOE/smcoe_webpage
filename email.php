<?php
require 'vendor/autoload.php';

use Aws\Ses\SesClient;
use Aws\Exception\AwsException;

// Replace the following with your AWS credentials and information

$region = 'ap-south-1'; // e.g., us-west-2
$senderEmail = 'website@stellamaryscoe.edu.in';
$recipientEmail = 'mediacell@stellamaryscoe.edu.in';
//$recipientEmail = ['rvnataraj@gmail.com','ponparthee@gmail.com'];
$subject = $_POST["subject"];
$bodyText = 'This is the plain text body of the email.';
$bodyHtml = $_POST["message"].'<br>'.$_POST["name"].'<br>'.$_POST["email"];

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