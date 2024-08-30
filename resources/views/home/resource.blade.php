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



.services4 .container {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(assets/img/Rectangle\ 52.png) center center;
    background-size: cover;
    padding: 100px 60px;
    border-radius: 15px;
    overflow: hidden;
    height: 80vh;
}



.services4 {
  padding:0px;
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
    height: 400px; 
    background-image: url('assets/img/resourse-banner.png');
    background-size: cover;
    background-position: center;
}

.breadcrumbs .page-header::after {
    content: "Resources"; 
    position: absolute;
    bottom: 40px; 
    left: 50%;
    transform: translateX(-50%);
    color: white; 
    background-color: rgba(0, 0, 0, 0.5); 
    padding: 10px 20px; 
    font-size: 30px; 
    text-align: center;
    border-radius: 5px; 
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
     
      <img src="assets/img/logo.png" alt="">
      <!-- <h1>Impact<span>.</span></h1> -->
    </a>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="index.html">Home</a></li>
        <!--<li><a href="about-us.html" >About</a></li>-->
        <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle " href="about-us" role="button"
         data-bs-toggle="dropdown" aria-expanded="false">About</a>

          <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="about-us.html">Who We Are</a></li>
        <li><a class="dropdown-item" href="people.html">People and Values</a></li>
              
          </ul>
      </li> 
        
        
        <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle  " href="services"   role="button"
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
                
<li><a class="dropdown-item" href="https://culturepartners.com/insights/?e-filter-01a6d46-category=case-studies" target="_blank">Case Studies </a></li>

<li><a class="dropdown-item" href="https://culturepartners.com/insights/?e-filter-01a6d46-category=thought-leadership" target="_blank"  >Thought Leadership </a></li>
                
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
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center banner-with-text" >
      
      </div>
     
    </div><!-- End Breadcrumbs -->

      <!-- ======= Recent Blog Posts Section ======= -->
      <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Resources</h2>
  <p class="mb-5">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
    corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa 
    qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita 
                                      distinctio Ut enim ad minima veniam, quis nostrum exercitationem ullam.</p>
          </div>
  
          <div class="row gy-4">
  
            <div class="col-xl-4 col-md-6">
              <article>
  
                <div class="post-img">
                  <img src="assets/img/Rectangle 14.png" alt="" class="img-fluid">
                </div>
  
                
                <h2 class="title">
                  <a href="#">The Power of the Results Pyramid (blog)</a>
                </h2>
  
                <div class="d-flex align-items-center"> 
                  
                  <div class="post-meta">
                    <p class="post-author">The Power of The Results
                      Pyramid: Achieving Sustainable
                      Culture Change</p>
  
                    
  
                      <div class="section-head style-1 text-center">
  
                        <button class="btn shadow-primary btn-primary mt-3 mb-3"><a  href="resource-details.html" >Read More</a></button>
                      
                        
                      </div>
                    
                  </div>
                </div>
              </article>
            </div>
            
            <!-- End post list item -->
  
           
            <div class="col-xl-4 col-md-6">
              <article>
  
                <div class="post-img">
                  <img src="assets/img/Rectangle 15.png " alt="" class="img-fluid">
                </div>
  
                
                <h2 class="title">
                  <a href="#">Digital Transformation eBook</a>
                </h2>
  
                <div class="d-flex align-items-center">
                 
                  <div class="post-meta">
                    <p class="post-author">Leveraging Culture to Accelerate
                      Digital Transformation (eBook)</p>
  
                    
  
                      <div class="section-head style-1 text-center">
  
                        <button class="btn shadow-primary btn-primary mt-3 mb-3"><a  href="resource-details.html" >Read More</a></button>
                      
                        
                      </div>
                    
                  </div>
                </div>
              </article>
            </div>
            
            <!-- End post list item -->
  
            
            <div class="col-xl-4 col-md-6">
              <article>
  
                <div class="post-img">
                  <img src="assets/img/Rectangle 16.png" alt="" class="img-fluid">
                </div>
  
                
                <h2 class="title">
                  <a href="#">ROI of Culture (blog)</a>
                </h2>
  
                <div class="d-flex align-items-center">
                  <!-- <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0"> -->
                  <div class="post-meta">
                    <p class="post-author">The ROI of a Results-driven 
                      Culture</p>
  
                    
  
                      <div class="section-head style-1 text-center">
  
                        <button class="btn shadow-primary btn-primary mt-3 mb-3"><a  href="resource-details.html" >Read More</a></button>
                      
                        
                      </div>
                    
                  </div>
                </div>
              </article>
            </div>
            
            <!-- End post list item -->
  
          </div>
          
          <!-- End recent posts list -->
  
        </div>
      </section>
      
      <!-- End Recent Blog Posts Section -->
  


 
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

</body>

</html>