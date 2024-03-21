<?php include("conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php include ("head.php"); ?>
<body>
  <!-- Preloader -->
  <!-- ======= Header ======= --> 
  <?php include ("preloader.php"); ?>
  <?php include ("header.php"); ?>

<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">

<div class="swiper-wrapper">

  <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url('https://webdocs.pages.dev/assets/img/carousel/SM1.jpeg')">
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
                <p class="intro-title-top">
                  <br> 
                </p>
                <h1 class="intro-title mb-6 ">
                  <span class="color-b">STELLA MARY'S COLLEGE OF ENGINEERING </span> </h1>
                  <h3 class=" ">
                    <span class="">“Accredited by NAAC and NBA(Mech & CSE)"</span> </h3>
                  <p class="intro-subtitle intro-price">
                  <a href="Management.php"><span class="price-a">KNOW MORE</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-slide carousel-item-a intro-item bg-image" style='background-image: url("https://webdocs.pages.dev/assets/img/carousel/place.jpg");' >
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
                <p class="intro-title-top">
                  <br> 
                </p>
                <h1 class="intro-title mb-6 "><span class="color-b">CAREER GUIDANCE AND PLACEMENT TRAINING - TALENT ACQUISITION</span> </h1>
                  <h3 class=" "><span class="">"Charting Paths, Building Futures: Your Career Compass"</span> </h3>
                <p class="intro-subtitle intro-price">
                <a href="placement_home.php"><span class="price-a">EXPLORE CGPTC</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-slide carousel-item-a intro-item bg-image"  style='background-image: url("https://webdocs.pages.dev/assets/img/carousel/RD.jpg");'>
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
                <p class="intro-title-top">
                  <br> 
                </p>
                <h1 class="intro-title mb-6 ">
                  <span class="color-b">RESEARCH AND DEVELOPMENT
                  </span> </h1>
                  <h3 class=" ">
                    <span class="">"Let's Research Together"</span> </h3>
                <p class="intro-subtitle intro-price">
                  <a href="research_codeofethics.php"><span class="price-a">Explore More</span></a>
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-slide carousel-item-a intro-item bg-image" style='background-image: url("https://webdocs.pages.dev/assets/img/gallery/sports1.jpg");' >
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
                <p class="intro-title-top">
                  <br> 
                </p>
              </p>
              <h1 class="intro-title mb-6 ">
                <span class="color-b">Play Hard, <br>
                </span>Lead Tomorrow </h1>
                <h3 class=" "><span class="">(2020-21,2021-22,2022-23 - Anna University Zonal winners)</span></h3>
                <h3 class=" "><span class="">"We are team of talented sportsman with diginity"</span></h3>
              <p class="intro-subtitle intro-price">
                <a href="Sports.php"><span class="price-a">PLAY WITH US</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="swiper-pagination"></div>
</div><!-- End Intro Section -->


<!-- Vendor JS Files -->
<script src="https://webdocs.pages.dev/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://webdocs.pages.dev/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="https://webdocs.pages.dev/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src=https://webdocs.pages.dev/assets/js/main.js"></script>
<script>
/**
* Template Name: EstateAgency
* Updated: Sep 18 2023 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
"use strict";

/**
* Easy selector helper function
*/
const select = (el, all = false) => {
el = el.trim()
if (all) {
  return [...document.querySelectorAll(el)]
} else {
  return document.querySelector(el)
}
}

/**
* Easy event listener function
*/
const on = (type, el, listener, all = false) => {
let selectEl = select(el, all)
if (selectEl) {
  if (all) {
    selectEl.forEach(e => e.addEventListener(type, listener))
  } else {
    selectEl.addEventListener(type, listener)
  }
}
}

/**
* Easy on scroll event listener 
*/
const onscroll = (el, listener) => {
el.addEventListener('scroll', listener)
}

/**
* Toggle .navbar-reduce
*/
let selectHNavbar = select('.navbar-default')
if (selectHNavbar) {
onscroll(document, () => {
  if (window.scrollY > 100) {
    selectHNavbar.classList.add('navbar-reduce')
    selectHNavbar.classList.remove('navbar-trans')
  } else {
    selectHNavbar.classList.remove('navbar-reduce')
    selectHNavbar.classList.add('navbar-trans')
  }
})
}

/**
* Back to top button
*/
let backtotop = select('.back-to-top')
if (backtotop) {
const toggleBacktotop = () => {
  if (window.scrollY > 100) {
    backtotop.classList.add('active')
  } else {
    backtotop.classList.remove('active')
  }
}
window.addEventListener('load', toggleBacktotop)
onscroll(document, toggleBacktotop)
}

/**
* Search window open/close
*/
let body = select('body');
on('click', '.navbar-toggle-box', function(e) {
e.preventDefault()
body.classList.add('box-collapse-open')
body.classList.remove('box-collapse-closed')
})

on('click', '.close-box-collapse', function(e) {
e.preventDefault()
body.classList.remove('box-collapse-open')
body.classList.add('box-collapse-closed')
})

/**
* Intro Carousel
*/
new Swiper('.intro-carousel', {
speed: 600,
loop: true,
autoplay: {
  delay: 4000,
  disableOnInteraction: false
},
slidesPerView: 'auto',
effect: 'fade',
pagination: {
  el: '.swiper-pagination',
  type: 'bullets',
  clickable: true
}
});

/**
* Property carousel
*/
new Swiper('#property-carousel', {
speed: 600,
loop: true,
autoplay: {
  delay: 5000,
  disableOnInteraction: false
},
slidesPerView: 'auto',
pagination: {
  el: '.propery-carousel-pagination',
  type: 'bullets',
  clickable: true
},
breakpoints: {
  320: {
    slidesPerView: 1,
    spaceBetween: 20
  },

  1200: {
    slidesPerView: 3,
    spaceBetween: 20
  }
}
});

/**
* News carousel
*/
new Swiper('#news-carousel', {
speed: 600,
loop: true,
autoplay: {
  delay: 5000,
  disableOnInteraction: false
},
slidesPerView: 'auto',
pagination: {
  el: '.news-carousel-pagination',
  type: 'bullets',
  clickable: true
},
breakpoints: {
  320: {
    slidesPerView: 1,
    spaceBetween: 20
  },

  1200: {
    slidesPerView: 3,
    spaceBetween: 20
  }
}
});

/**
* Testimonial carousel
*/
new Swiper('#testimonial-carousel', {
speed: 600,
loop: true,
autoplay: {
  delay: 5000,
  disableOnInteraction: false
},
slidesPerView: 'auto',
pagination: {
  el: '.testimonial-carousel-pagination',
  type: 'bullets',
  clickable: true
}
});

/**
* Property Single carousel
*/
new Swiper('#property-single-carousel', {
speed: 600,
loop: true,
autoplay: {
  delay: 5000,
  disableOnInteraction: false
},
pagination: {
  el: '.property-single-carousel-pagination',
  type: 'bullets',
  clickable: true
}
});

})()
</script>


  <!-- ======= Hero Section ======= -->
  
  <!--<div id="divContactUsSlider" ><div class="contact-slider d-none d-flex hidden-xs open" style="top: 200px; display: flex!important;">
    <div style="border-bottom:none;margin-left: 2px;" class="slider-icon">
        <a class="slider-icon-anchor" href="https://camps.stellamaryscoe.edu.in/CAMPS/applications/application_register.jsp"><span class="contactus-slider-HES-Base position-relative py-4 px-3" style="margin-top: 1px;">Online Admission</span></a></div>
    
     </div>
     </div>-->
  <!-- End Hero --> 
  <main id="main">
    
    <!-- End Counts Section -->
    <!-- ======= Latest News & Events Section ======= -->
    <!-- Latest News & Events Section -->
<section class="blog" style="position:relative"  data-scroll-index="4">
  <div class="container">
    <!-- header of section -->
    <div class="section-title" data-aos="fade-up">
      <h2>Latest News & Updates</h2>
    </div>

    <!-- Bootstrap Carousel -->
    <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php
        $qry_category = "SELECT we.event_desc e_title, YEAR(we.event_date) YEAR, event_date e_date, event_img e_img, event_detail e_detail, event_desc e_desc, we.event_link e_url, '' e_type, MONTH(event_date) mevent_date, DAY(event_date) dayevent_date, MONTHNAME(event_date), SUBSTR(MONTHNAME(event_date), 1, 3) smonth FROM documentation.website_event we WHERE we.status > 0 AND we.`event_type` = 'Event' AND NOW() BETWEEN we.doa AND we.doe ORDER BY we.order_no";
        mysqli_set_charset($dbcon, "utf8");
        $qry_category = mysqli_query($dbcon, $qry_category);
        $count = 0;

        while ($data = mysqli_fetch_assoc($qry_category)) {
          if ($count % 3 == 0) {
            // Start a new container for every 3 slides
            if ($count == 0) {
              echo '<div class="carousel-item active">';
            } else {
              echo '<div class="carousel-item">';
            }
            echo '<div class="row">';
          }
          ?>
          <!-- Slide -->
          <div class="col-md-4">
            <div class="item">
              <div class="img">
              <img src= <?php echo $data["e_img"]; ?>  class="img-fluid" alt="">  
              </div>
              <div class="info">
                <div class="date">
                  <span><?php echo $data["dayevent_date"]; ?><br><?php echo $data["smonth"]; ?></span>
                </div>

                
                <a href="<?php echo $data["e_url"]; ?>"><h5><?php echo $data["e_title"]; ?></h5></a>
                <p> <?php echo $data["e_detail"]; ?></p>
                <a href="<?php echo $data["e_url"]; ?>" class="more"><i class="fas bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <?php
          $count++;

          if ($count % 3 == 0) {
            // Close the current container after 3 slides
            echo '</div>';
            echo '</div>';
          }
        }

        // Close any remaining containers if not a multiple of 3
        while ($count % 3 != 0) {
          echo '</div>';
          echo '</div>';
          $count++;
        }
        ?>
      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</section>

<script>
  // Auto-slide the carousel every 2 seconds
  $(document).ready(function(){
      $('#blogCarousel').carousel({
          interval: 2000
      });
  });
</script>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>STELLA MARY'S COLLEGE OF ENGINEERING</h2>
          <p>EXPERIENCE EXECLLENCE</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-12 ">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble" ></i></div>
              <h4 class="title"><a href="">VISION</a></h4>
              <p class="description text-justify">To be a beacon of academic excellence, empowering future innovators with technical mastery to harness technology for positive global change. </p>
            </div>
          </div>
<ol></ol>
          <div class="col-md-6 col-lg-12 ">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">MISSION</a></h4>
              <li class="text-justify">To Cultivate a vibrant learning environment where students delve into the frontiers of technical knowledge, hone their problem-solving skills, and embrace innovation to transform ideas into solutions that address global challenges.</li>
              <li class="text-justify">To bridge the gap between technical brilliance and real-world impact by forging strong industry partnerships, fostering cutting-edge research, and nurturing entrepreneurial drive in our students, empowering them to build a better future through technology.</li>
              <li class="text-justify">To ignite the spark of intellectual curiosity within every student, equip them with the tools and knowledge to become pioneers in their chosen fields, and guide them towards ethical and responsible use of technology for the betterment of humanity.</li>
            </div>
          </div>

          <!--<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="Management.php">MANAGEMENT</a></h4>
              <p class="description text-justify">The college is run by Nova Educational Trust established in the year 2007, to provide high quality technical education and research facilities to the students across the country.</p>
            </div>
          </div>-->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= More Services Section ======= -->
   <!-- <section id="more-services" class="more-services">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2><a href=""></a>DEPARTMENTS</h2>
        </div>
        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("https://webdocs.pages.dev/assets/img/CIVIL/civil.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="civil.php">Civil Engineering</a></h5>
                <p class="card-text text-justify">Department specializes in the design, construction, and maintenance of physical structures and infrastructure, such as buildings, bridges, roads, and water supply systems</p>
                <div class="view-more"><a href="civil.php"><i class="bi bi-arrow-right"></i> View More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("https://webdocs.pages.dev/assets/img/CSE/cse.jpg");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="cse.php">Computer Science and Engineering</a></h5>
                <p class="card-text text-justify">Department focuses on the study and application of computing technologies, algorithms, and software systems to solve complex problems and drive technological innovation.</p>
                <div class="view-more"><a href="cse.php"><i class="bi bi-arrow-right"></i> View More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("https://webdocs.pages.dev/assets/img/ece/ece.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="ece.php">Electronics and Communication Engineering</a></h5>
                <p class="card-text text-justify">Department specializes in the design, development, and implementation of electronic systems, communication networks, and signal processing technologies to enable efficient information transmission and exchange.</p>
                <div class="view-more"><a href="ece.php"><i class="bi bi-arrow-right"></i> View More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("https://webdocs.pages.dev/assets/img/eee/eee.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="eee.php">Electrical and Electronics Engineering</a></h5>
                <p class="card-text text-justify">Department focuses on the study and application of electrical principles, systems, and devices to design, develop, and optimize power generation, distribution, and electronic systems for various industries and applications.</p>
                <div class="view-more"><a href="eee.php"><i class="bi bi-arrow-right"></i> View More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("https://webdocs.pages.dev/assets/img/mech/mech.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="mech.php">Mechanical Engineering</a></h5>
                <p class="card-text text-justify">Department encompasses the design, analysis, and manufacturing of mechanical systems and devices, including engines, machines, and structures, to address diverse engineering challenges and improve efficiency and functionality.</p>
                <div class="view-more"><a href="mech.php"><i class="bi bi-arrow-right"></i> View More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("https://webdocs.pages.dev/assets/img/aids/AIDS.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="aids.php">Artifical Intelligence and Data Science</a></h5>
                <p class="card-text text-justify">The Department of Artificial Intelligence and Data Science pioneers cutting-edge algorithms and technologies to extract valuable insights from complex data, driving innovation across various industries.</p>
                <div class="view-more"><a href="aids.php"><i class="bi bi-arrow-right"></i> View More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("https://webdocs.pages.dev/assets/img/sh/sh.png");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="sh.php">Science and Humanities</a></h5>
                <p class="card-text text-justify">The Department of Science and Humanities fosters a strong foundation in fundamental sciences and liberal arts, nurturing well-rounded individuals equipped with both scientific knowledge and critical thinking skills.</p>
                <div class="view-more"><a href="sh.php"><i class="bi bi-arrow-right"></i> View More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("https://webdocs.pages.dev/assets/img/mba/mba.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="mba.php">Master of Business Administration</a></h5>
                <p class="card-text text-justify">Department provides comprehensive business education, equipping students with leadership skills and strategic management knowledge to excel in a variety of corporate and entrepreneurial roles.</p>
                <div class="view-more"><a href="mba.php"><i class="bi bi-arrow-right"></i> View More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("https://webdocs.pages.dev/assets/img/meis/is.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="meise.php">M.E Industrial Safety Engineering</a></h5>
                <p class="card-text text-justify">Department equips students with advanced knowledge and skills in risk assessment, safety management, and regulatory compliance to effectively address and mitigate workplace hazards, ensuring the overall safety and well-being of personnel and the environment.</p>
                <div class="view-more"><a href="meise.php"><i class="bi bi-arrow-right"></i> View More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("https://webdocs.pages.dev/assets/img/mecse/mecse.jpeg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="mecse.php">M.E Computer Science and Engineering</a></h5>
                <p class="card-text text-justify">Department offers an advanced curriculum that combines computer science theory and engineering principles, empowering students to innovate, design, and develop cutting-edge software and hardware solutions for complex technological challenges.</p>
                <div class="view-more"><a href="mecse.php"><i class="bi bi-arrow-right"></i> View More</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>--><!-- End More Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Features</h2>
          <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #ffbb2c;"></i>
              <h3><a href="facilities.php">ICT Class Room</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #5578ff;"></i>
              <h3><a href="facilities.php">Library</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #e80368;"></i>
              <h3><a href="facilities.php">BigData Laboratory</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #e361ff;"></i>
              <h3><a href="facilities.php">Conference Hall</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #47aeff;"></i>
              <h3><a href="facilities.php">Seminar Hall</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #ffa76e;"></i>
              <h3><a href="facilities.php">Boys Hostel</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #11dbcf;"></i>
              <h3><a href="facilities.php">Girls Hostel</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #4233ff;"></i>
              <h3><a href="facilities.php">Transport</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #b2904f;"></i>
              <h3><a href="facilities.php">Cafeteria</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #b20969;"></i>
              <h3><a href="facilities.php">Sports</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #ff5828;"></i>
              <h3><a href="facilities.php">Campus Activities</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-check-double-line" style="color: #29cc61;"></i>
              <h3><a href="facilities.php">Student Zone</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section>
    
    
    
    
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">
      <div class="section-title" data-aos="fade-up">
              <h2>PLACEMENT PARTNERS</h2>
              <p>Places where our alumins showing their skills</p>
            </div>
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="https://webdocs.pages.dev/assets/img/cr/Hexaware.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <div class="client-logo">
              <img src="https://webdocs.pages.dev/assets/img/cr/tcs.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://webdocs.pages.dev/assets/img/cr/yamaha.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://webdocs.pages.dev/assets/img/cr/al.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://webdocs.pages.dev/assets/img/cr/exbt.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://webdocs.pages.dev/assets/img/cr/INBOX.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://webdocs.pages.dev/assets/img/cr/entelyst.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://webdocs.pages.dev/assets/img/cr/wipro.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://webdocs.pages.dev/assets/img/cr/lt.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://webdocs.pages.dev/assets/img/cr/cts.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://webdocs.pages.dev/assets/img/cr/shail.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://webdocs.pages.dev/assets/img/cr/techm.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section>
    
    
    
    
        <section id="counts" class="counts">
      <div class="container">
        <div class="row">
          <div class="image col-xl-4 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="https://28b82662.webdocs.pages.dev/hero-img.png" alt="" class="img-fluid animated">
          </div>
          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1290" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Budding Engineers</strong> - Empowering education, inspiring faculty, supportive community</p>
                  </div>
                </div>
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="90" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Working Days</strong> Productivity, collaboration, growth - making the most of working days!</p>
                  </div>
                </div>
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="1334" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Proud Alumni</strong> Accomplished, successful, impactful - our proud alumni make a difference!</p>
                  </div>
                </div>
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="93" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Staff</strong> Dedicated, talented, valued - our staff drives excellence and success!</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>
      </div>
    </section>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container ">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
          <p>Words from eminent personalities</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="https://webdocs.pages.dev/assets/img/testimonials/Vaishnavi.jpeg" class="testimonial-img" alt="">
                  <h3>Vaishnavi M J</h3>
                  <h4>ECE - Alumni 2019-23 &amp; Software Developer @ Agile Cyber Solutions</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left text-justify"></i>
                    infrastructure provided by our institution Stella Mary's College of Engineering and the unwavering support of my teachers have been instrumental in facilitating my achievement. The constant guidance and insightful feedback they have imparted have enriched my learning experience and empowered me to reach new heights. I am forever thankful..
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
          <div class="container">
    
            <div class="section-title" data-aos="fade-up">
              <h2>Gallery</h2>
              <p>Shades of Stella Mary's College of Engineering</p>
            </div>
    
            <div class="row" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-app">YUKTI</li>
                  <li data-filter=".filter-card">SPORTS</li>
                  <li data-filter=".filter-web">EVENTS</li>
                </ul>
              </div>
            </div>
    
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="https://fddc589a.webdocs.pages.dev/assets/img/gallery/yuk1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>YUKTI 2023</h4>
                    <p></p>
                    <div class="portfolio-links">
                      <a href="https://fddc589a.webdocs.pages.dev/assets/img/gallery/yuk1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="YUKTI 2023"><i class="bx bx-plus"></i></a>
                      <a href="https://drive.google.com/drive/folders/1_jz8fw3gMw_woMkVwevUvM1KX2MyOOug?usp=drive_link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="https://fddc589a.webdocs.pages.dev/assets/img/gallery/gra1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>GRADUATION DAY 2022</h4>
                    <p>4th Graduation Day</p>
                    <div class="portfolio-links">
                      <a href="https://fddc589a.webdocs.pages.dev/assets/img/gallery/gra1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Graduation Day 2022"><i class="bx bx-plus"></i></a>
                      <a href="" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="https://fddc589a.webdocs.pages.dev/assets/img/gallery/yuk2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>YUKTI 2022</h4>
                    <p></p>
                    <div class="portfolio-links">
                      <a href="https://fddc589a.webdocs.pages.dev/assets/img/gallery/yuk2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="YUKTI 2022"><i class="bx bx-plus"></i></a>
                      <a href="https://drive.google.com/drive/folders/1_jz8fw3gMw_woMkVwevUvM1KX2MyOOug?usp=drive_link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="https://fddc589a.webdocs.pages.dev/assets/img/gallery/sports2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>SPORTS DAY 2022</h4>
                    <p></p>
                    <div class="portfolio-links">
                      <a href="https://fddc589a.webdocs.pages.dev/assets/img/gallery/sports2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SPORTS DAY 2023"><i class="bx bx-plus"></i></a>
                      <a href="https://drive.google.com/drive/folders/1_jz8fw3gMw_woMkVwevUvM1KX2MyOOug?usp=drive_link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="https://fddc589a.webdocs.pages.dev/assets/img/gallery/fre1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>FRESHERS DAY 2022</h4>
                    <p></p>
                    <div class="portfolio-links">
                      <a href="https://fddc589a.webdocs.pages.dev/assets/img/gallery/fre1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="FRESHERS DAY 2022"><i class="bx bx-plus"></i></a>
                      <a href="" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="https://fddc589a.webdocs.pages.dev/assets/img/gallery/yuk3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>YUKTI 2021</h4>
                    <p></p>
                    <div class="portfolio-links">
                      <a href="https://fddc589a.webdocs.pages.dev/assets/img/gallery/yuk3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="YUKTI 2021"><i class="bx bx-plus"></i></a>
                      <a href="https://drive.google.com/drive/folders/1_jz8fw3gMw_woMkVwevUvM1KX2MyOOug?usp=drive_link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="https://fddc589a.webdocs.pages.dev/assets/img/gallery/sports1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>SPORTS DAY 2023</h4>
                    <p></p>
                    <div class="portfolio-links">
                      <a href="https://fddc589a.webdocs.pages.dev/assets/img/gallery/sports1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SPORTS DAY 2023"><i class="bx bx-plus"></i></a>
                      <a href="https://drive.google.com/drive/folders/1_jz8fw3gMw_woMkVwevUvM1KX2MyOOug?usp=drive_link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="https://fddc589a.webdocs.pages.dev/assets/img/gallery/sports3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>SPORTS DAY 2021</h4>
                    <p></p>
                    <div class="portfolio-links">
                      <a href="https://fddc589a.webdocs.pages.dev/assets/img/gallery/sports3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SPORTS DAY 2021"><i class="bx bx-plus"></i></a>
                      <a href="https://drive.google.com/drive/folders/1_jz8fw3gMw_woMkVwevUvM1KX2MyOOug?usp=drive_link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="https://fddc589a.webdocs.pages.dev/assets/img/gallery/other1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>TEAKWANDO 2023</h4>
                    <p></p>
                    <div class="portfolio-links">
                      <a href="https://fddc589a.webdocs.pages.dev/assets/img/gallery/other1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="TEAKWANDO 2023"><i class="bx bx-plus"></i></a>
                      <a href="" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
    
          </div>
        <!-- End Portfolio Section -->


  
        
    

    <!-- ======= Contact Section ======= -->
    
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>STELLA MARY'S COLLEGE OF ENGINEERING</h3>
              <!--<p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>-->
              <div class="social-links">
               <!--<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>-->
                <a href="https://www.facebook.com/smcenagercoil" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/smcecoe/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/school/27064770/admin/feed/posts/" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                <p>Aruthenganvilai, Kallukatti Junction<br>Azhikal Post, Kanyakumari 629 202</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p>info@stellamaryscoe.edu.in</p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p>04651 239122, +91 74027 07773</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
          <form action="contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" maxlength ="25" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" maxlength ="50" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" maxlength ="200" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Submit Feedback</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    </section>
  </main><!-- End #main -->



  <!-- ======= Footer ======= -->
  <?php require 'footer.php'; ?> 
</body>

</html>