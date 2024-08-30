<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Effectus</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/favicon.ico" rel="icon">
  <link href="assets/favicon.ico" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    .section-header {
    text-align: center;
    padding-bottom: 0px;
}

.card-body {
    flex: 1 1 auto;
    padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
     background: #3A5286;

}

.card-title {

  color:#ffffff;
}


.card-text {

  color:#ffffff; 
}


.services2 .container {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(assets/img/Rectangle\ 51.png) center center;
    background-size: cover;
    padding: 100px 60px;
    border-radius: 15px;
    overflow: hidden;
    height: 80vh;
}

.services4 .container {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(assets/img/Rectangle\ 52.png) center center;
    background-size: cover;
    padding: 100px 60px;
    border-radius: 15px;
    overflow: hidden;
    height: 80vh;
}



.services4 {
  padding:10px;
}

.section-header  p  {
    text-align: justify;
}


.stats-counter {
    padding: 20px 0;
}


.breadcrumbs .page-header {
    position: relative;
    width: 100%;
    height: 400px; /* Adjust as needed */
    background-image: url('assets/img/culture-banner.png');
    background-size: cover;
    background-position: center;
}

.breadcrumbs .page-header::after {
    content: "Culture Consulting"; /* Replace with your desired text */
    position: absolute;
    bottom: 40px; /* Adjust the distance from the bottom */
    left: 50%;
    transform: translateX(-50%);
    color: white; /* Text color */
    background-color: rgba(0, 0, 0, 0.5); /* Optional: Background color with transparency */
    padding: 10px 20px; /* Optional: Padding around the text */
    font-size: 30px; /* Adjust text size as needed */
    text-align: center;
    border-radius: 5px; /* Optional: Rounded corners for the background */
}


.section-header h3 {
    color:#f78c00;
}



        /*body {*/
        /*    font-family: Arial, sans-serif;*/
        /*    background-color: #000080;*/
        /*    color: #ffffff;*/
        /*}*/
        .content-section {
            padding: 50px;
            display: flex;
            align-items: center;
            /* background-color: #0a0a54; */
            background-image: url('background-pattern.png'); /* Add a background pattern if needed */
            background-size: cover;
            border-radius: 15px;
        }
        .heading-title {
            padding: 0;
            margin: 0;
            line-height: 1.2;
        }
        .heading-medium {
            font-size: 16px;
            color: #b3b3ff;
        }
        .heading-large {
            font-size: 29px;
        }
        .heading-xl {
            font-size: 39px;
        }
        .heading-xxl {
            font-size: 59px;
                color: #ffffff;

        }
        .text-editor {
            font-size: 16px;
            line-height: 1.5;
            margin: 10px 0;
        }
        .text-editor p {
            margin: 0;
                color: #ffffff;
                font-size: 20px;

        }
        .video-overlay {
            position: relative;
            cursor: pointer;
            text-align: center;
            background-size: cover;
            border-radius: 15px;
            overflow: hidden;
        }
        .video-overlay img {
            width: 100%;
            height: auto;
            border-radius: 15px;
        }
        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            padding: 10px;
        }
        .play-button svg {
            fill: #0a0a54;
            width: 50px;
            height: 50px;
        }
        .video-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .video-container iframe {
            width: 80%;
            height: 80%;
            border: none;
        }
        .close-button {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.8);
            border: none;
            border-radius: 50%;
            padding: 10px;
            cursor: pointer;
        }
        .close-button svg {
            fill: #0a0a54;
            width: 30px;
            height: 30px;
        }


        .video-container {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
    z-index: 1000; /* Ensure it's on top */
}

.close-button {
    position: absolute;
    top: 20px;
    right: 20px;
    background: rgba(238, 5, 5, 0.8);
    border: none;
    border-radius: 50%;
    padding: 10px;
    cursor: pointer;
    z-index: 1001; /* Ensure it's on top of the modal content */
}


.web_footer_content {
    background-color: #000080;
    background-image: url(https://culturepartners.com/wp-content/uploads/2024/02/products-graphic.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
  
  .content-section1 {
            padding: 50px;
            display: flex;
            align-items: center;
            background-color: #0a0a54;
            background-image: url('https://culturepartners.com/wp-content/uploads/2024/02/background-05-primary-dark-1.png'); /* Add a background pattern if needed */
            background-size: cover;
            border-radius: 15px;
        }
        
        
        .section-header h2  a {
            color:#000080;
        }
        
          .section-header  p a {
            color:#000080;
        }


         .about .btn-primary {
            display: block;
            width: 200px;
            margin: 20px auto 0;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
        }
        
  </style>
</head>

<body>
<!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:jp.singh@culture.io">jp.singh@culture.io</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4">
          <a href="tel:+912267000868"><span>+91 22 6700 0868</span></a>
        </i>
        
      </div>
    <div class="social-links d-none d-md-flex align-items-center">
      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>
  </div>
</section><!-- End Top Bar -->

<header id="header" class="header d-flex align-items-center">

  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="assets/img/logo.png" alt="">
      <!-- <h1>Impact<span>.</span></h1> -->
    </a>
     <nav id="navbar" class="navbar">
        <ul>
          <li ><a href="index.html" >Home</a></li>
          <!--<li><a href="about-us.html">About</a></li>-->
          <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle " href="about-us" role="button"
         data-bs-toggle="dropdown" aria-expanded="false">About</a>

          <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="about-us.html">Who We Are</a></li>
        <li><a class="dropdown-item" href="people.html">People and Values</a></li>
              
          </ul>
      </li> 
        
          
          <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle " href="services" role="button"
           data-bs-toggle="dropdown" aria-expanded="false">Services</a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="sales.html">Sales Transformation & Coaching</a></li>
                
                 <li><a class="dropdown-item" href="buisness.html">Business Acumen </a></li>
                <li><a class="dropdown-item" href="culture.html">Culture Consulting </a></li>
                
            </ul>
        </li> 
          

         
       <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle " href="Resources" role="button"
           data-bs-toggle="dropdown" aria-expanded="false">Resources</a>

            <ul class="dropdown-menu">
    <!--<li><a class="dropdown-item" href="sales.html"></a></li>-->
                
<li><a class="dropdown-item" href="https://culturepartners.com/insights/?e-filter-01a6d46-category=case-studies" >Case Studies </a></li>

<li><a class="dropdown-item" href="https://culturepartners.com/insights/?e-filter-01a6d46-category=thought-leadership"  >Thought Leadership </a></li>
                
            </ul>
        </li> 
        
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    <!-- .navbar -->

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

  </div>
</header><!-- End Header -->
<!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!--<div class="breadcrumbs">-->
      <!--<div class="page-header d-flex align-items-center" >-->
      
      <!--</div>-->
     
    <!--</div>-->
     <!--End Breadcrumbs -->

 <section class="web_footer_content">
     <div class="breadcrumbs">
    <div class="container">
        <div class="row content-section">
            <div class="col-md-6">
               
                <h1 class="heading-title heading-xxl">35 Years Of ​ <span style="color:#00E3FF;"><i>Culture-Building </i></span><span style="color:#00E3FF;"><i>History</i></span></h1>
                <div class="text-editor">
                    <p>
                        Culture Partners, formerly Partners In Leadership,<br/> was founded in 1989 by authors of the NY Times <br/> best-selling books The Oz Principle and Change <br/> the Culture, Change the Game.</p>
                </div>
                <!-- <div class="text-editor">
                    <p>Source: Culture Partners and Stanford Research 2023</p>
                </div> -->
            </div>
            <div class="col-md-6">
                <div class="video-overlay" onclick="openVideoModal()">
                    <img src="assets/img/ozposter.jpg" alt="Video Thumbnail">
                    <div class="play-button">
                        <svg aria-hidden="true" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                            <path d="M838 162C746 71 633 25 500 25 371 25 258 71 163 162 71 254 25 367 25 500 25 633 71 746 163 837 254 929 367 979 500 979 633 979 746 933 838 837 929 746 975 633 975 500 975 367 929 254 838 162M808 192C892 279 933 379 933 500 933 621 892 725 808 808 725 892 621 938 500 938 379 938 279 896 196 808 113 725 67 621 67 500 67 379 108 279 196 192 279 108 383 62 500 62 621 62 721 108 808 192M438 392V642L642 517 438 392Z"></path>
                        </svg>
                    </div>
                </div>
                <div class="video-container" id="videoContainer">
                    <button class="close-button" onclick="closeVideoModal()">
                        <svg aria-hidden="true" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <iframe id="videoIframe" src="" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

    <!-- ======= About Us Section ======= -->

    <section  class="about">
      
<div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><a href="https://culturepartners.com"  target="_blank">A Key differentiator of our Consulting work is Culture Consulting</a> </h2>
          <P class="mb-3">Our Culture Consulting offerings emanate from our Partnership with Culture
Partners.</p>
           <P class="mb-3">Whilst most leaders look to enhance business outcomes and team results by working on strategy,  results may sometimes   fall short of expectations.</p>
           
           <P class="mb-3">What if we could amplify results by moving with greater agility and pace—with culture supercharging the effort?</p>
           <P class="mb-3"><a href="https://culturepartners.com"  target="_blank">With Culture Partners at your side, you can.</a></p>
           
           <P class="mb-3">Your business can see amazing outcomes by applying structure and accountability to fully operationalize culture in the service of your purpose, business goals, and strategy.</p>
           
           <P class="mb-3">The Accountability workshop- a key part of the offerings is a foundational leadership development programme for senior leaders. Particularly those who are on the threshold of taking up larger business responsibilities</p>
           
                       <a href="https://culturepartners.com/approach" class="btn btn-primary" target="_blank">See All Approach</a>

        </div>
    </div>
      
    </section>

    <!-- End About Us Section -->

    <section class="web_footer_content" >
    
      <!--<div class="container" data-aos="fade-up">-->
      <!--</div>-->
 <div class="container mt-5">
        <div class="row content-section1">
            <div class="col-md-6">
             
                <h1 class="heading-title heading-xxl">Accountability Journey</h1>
                <div class="text-editor">
                    <p>What began as a <em>New York Times</em> best-selling book, <em>The Oz Principle</em>, then later developed into a full-day interactive workshop, is now a comprehensive multi-year program.</p>
                </div>
                <div class="text-editor">
                    <p>The Accountability Journey is a strategic schedule of learning, application, expert consulting, and periodic review designed to embed positive accountability throughout your organization.</p>
                </div>
                <div class="text-editor">
                    <p>Drive Better Results Through Accountability</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="video-overlay" onclick="openVideoModalone()">
                    <img src="https://culturepartners.com/wp-content/uploads/2024/03/accountabilityposter.jpg" alt="Video Thumbnail">
                    <div class="play-button">
                        <svg aria-hidden="true" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                            <path d="M838 162C746 71 633 25 500 25 371 25 258 71 163 162 71 254 25 367 25 500 25 633 71 746 163 837 254 929 367 979 500 979 633 979 746 933 838 837 929 746 975 633 975 500 975 367 929 254 838 162M808 192C892 279 933 379 933 500 933 621 892 725 808 808 725 892 621 938 500 938 379 938 279 896 196 808 113 725 67 621 67 500 67 379 108 279 196 192 279 108 383 62 500 62 621 62 721 108 808 192M438 392V642L642 517 438 392Z"></path>
                        </svg>
                    </div>
                </div>
                <div class="video-container" id="videoContainer">
                    <button class="close-button" onclick="closeVideoModalone()">
                        <svg aria-hidden="true" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <iframe id="videoIframe" src="" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    </section>

   
  <!-- End Stats Counter Section -->

  <section id="stats-counter " class="stats-counter">
    
    <div class="container " data-aos="fade-up">
        <div class="section-header">
        <h2>Our Narrative</h2>
    
      </div>
      
      <div class="row">
      <P class="mb-3">We understand that the language of senior leaders and C-suiters is shareholder returns, and while many of them understand the importance of culture, they don’t know how to operationalize it to move the needle for their stakeholders.</p>
           <P class="mb-3">This is where Culture Partners comes in.</p>
           
            <P class="mb-3">We co-create programs with you to build a culture with greater accountability, sustained behaviour changes, and most importantly—long-term financial results.</p>
           <P class="mb-3">We’ve been doing this work for decades, and our Senior Partners have close to three centuries of experience in shaping cultures for top organizations worldwide as well as in India (albeit in the early stages of roll out of our offerings in India).</p>
               
     
    </div>
      
  </div>

</section>


   

</main>

<!-- End #main -->

   <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
          </a>
          <p>Join millions of people who build a fully integrated sales and maketing solution.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about-us.html">About us</a></li>
            
            <li><a href="resource.html">Resources</a></li>
            <li><a href="contact.html">Contact us</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="sales.html">Sales Transformation & Coaching </a></li>
            <li><a href="buisness.html"> Business Acumen</a></li>
            <li><a href="culture.html">Culture Consulting </a></li>
           
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            <strong>Location:</strong> Regus business centre, Level 11, Platina Building
            Bandra Kurla complex Mumbai,
            Maharashtra - 400051<br>
             
            <strong>Phone:</strong> <a href="tel:+912268841531">+912268841531</a><br>
            
            <strong>Phone:</strong> <a href="tel:+919821024066">+919821024066</a><br>
            
            <strong>Email:</strong> <a href="mailto:jp.singh@culture.io">jp.singh@culture.io</a><br>
            
             <strong>Email:</strong> <a href="mailto:jp.singh@effectus.in">jp.singh@effectus.in</a><br>
             
           
          </p>

        </div>

      </div>
    </div>
    <hr>
    <div class="footer-bottom">
      <div class="container">
        <div class="row align-items-center fb-inner spno">
          <div class="col-lg-6 col-md-12 text-center text-lg-start">

            
            <span class="copyright-text">Copyright © 2024
              <a href="#" class="text-primary" target="_blank"><b>Effectus</b></a>
              All rights reserved.</span>
          </div>
          <div class="col-lg-6 col-md-12 text-center text-lg-end  mt-3">
            <ul class="footer-link d-inline-block">
             

              <span class="copyright-text">Powered by
                <a href="https://ideatore.in/" class="text-primary" target="_blank"><b>Ideatore</b></a></span>
            </ul>
          </div>
        </div>
      </div>
    </div>
  
    

  </footer><!-- End Footer -->
  <!-- End Footer -->
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!--<div id="preloader"></div>-->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
   <script>
        function openVideoModal() {
            const videoContainer = document.getElementById('videoContainer');
            const videoIframe = document.getElementById('videoIframe');
            videoContainer.style.display = 'flex';
            videoIframe.src = 'https://player.vimeo.com/video/969826420?autoplay=1&muted=1&title=0&portrait=1&byline=0';
        }
        function closeVideoModal() {
            const videoContainer = document.getElementById('videoContainer');
            const videoIframe = document.getElementById('videoIframe');
            videoContainer.style.display = 'none';
            videoIframe.src = '';
        }
    </script>
    
     <script>
        function openVideoModalone() {
            const videoContainer = document.getElementById('videoContainer');
            const videoIframe = document.getElementById('videoIframe');
            videoContainer.style.display = 'flex';
            videoIframe.src = 'https://player.vimeo.com/video/894673216?autoplay=1&muted=1&title=0&portrait=1&byline=0';
        }

        function closeVideoModalone() {
            const videoContainer = document.getElementById('videoContainer');
            const videoIframe = document.getElementById('videoIframe');
            videoContainer.style.display = 'none';
            videoIframe.src = '';
        }
    </script>

</body>

</html>