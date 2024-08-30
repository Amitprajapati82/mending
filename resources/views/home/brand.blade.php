<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mending</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Favicons -->
<link href="{{ asset('assets/favicon.ico') }}" rel="icon">
<link href="{{ asset('assets/favicon.ico') }}" rel="apple-touch-icon">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">


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

  color:#ffffff !important; 
}


.card-text {

  color:#ffffff; 
}


.services1 .container {
    background:  url(assets/img/Rectangle\ 38.png) center center;
    background-size: cover;
    padding: 100px 60px;
    border-radius: 15px;
    overflow: hidden;
    height: 80vh;
    
    
    /*border-top-left-radius: 5px;*/
    /*border-bottom-left-radius: 5px;*/
    /*border-top-right-radius: 5px;*/
    /*border-bottom-right-radius: 5px;*/
}

.services1{
  padding:10px;
}

.services {
    padding: 60px 10px;
}

.col-auto img {
  width:60%;
}

.clr  {
  text-align: justify;
}



.breadcrumbs .page-header {
    position: relative;
    width: 100%;
    height: 400px; /* Adjust as needed */
    background-image: url('assets/img/about-banner.png');
    background-size: cover;
    background-position: center;
}



.services1 {
    padding: 10px;
}

.section-header p {
    margin-bottom: 0;
    color: #6f6f6f;
    text-align: justify;
}

.section-header h3 {
    color:#f78c00;
}



.card {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    /* transition: transform 0.3s, border-color 0.3s; */
    border: 1px solid transparent;
    transition: all 200ms ease-in;
    transform: scale(1);
}

.card a {
color:#000000;
}

.card a :hover {
color:#fc0301;
}

.card:hover {
    border-color: #fc0301;
    transform: scale(1.05);
    transition: all 200ms ease-in;
}

.card i {
    font-size: 40px;
    margin-bottom: 15px;
}

.content {
    text-align: center;
}

h2 {
    margin-top: 0;
}

.inner-cards {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.inner-card {
  
    padding: 5px;
    border-radius: 10px;
    text-align: center;
    width: 120px;
}

.inner-card img {
    width: 100px;
    height: 100px;
    border-radius: 5px;
    margin-bottom: 10px;
}

p {
    margin: 0;
}




.search-box {
    display: flex;
    justify-content: center; 
    align-items: center;
    position: relative;
}

.search-box input[type="text"] {
    padding: 10px 40px 10px 10px; 
    border: 1px solid #ccc;
    border-radius: 20px;
    font-size: 16px;
    
}

  

  </style>
</head>

<body>
<!-- ======= Header ======= -->
<!-- <section id="topbar" class="topbar d-flex align-items-center">
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
</section> -->
<!-- End Top Bar -->

<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
      
        <img src="assets/images/Newlogo.png" alt="">
     
      </a>
      
      <nav id="navbar" class="navbar">
        <ul>
          <li ><a href="index.html" class="active">Home</a></li>


          <li><a href="about-us.html">About</a></li>
          
          
          <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle " href="services" role="button"
           data-bs-toggle="dropdown" aria-expanded="false">Services</a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="sales.html">Mobile Repairing</a></li>
                
                 <li><a class="dropdown-item" href="buisness.html">Laptop Repairing </a></li>
               
                
            </ul>
        </li> 
        
           <li><a href="contact.html">Contact</a></li>

        </ul>
      </nav>
      <!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
<!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center banner-with-text">
       
      </div>
    </div>

    <!-- End Breadcrumbs -->



<!-- ======= About Us Section ======= -->
<section class="about">
    <div class="container" data-aos="fade-up">
        @if ($category_id == 1)
            <div class="section-header">
                <h2>Repair Your Mobile Phone</h2>
            </div>
        @else
            <div class="section-header">
                <h2>Repair Your Laptop</h2>
            </div>
        @endif

        <!-- Search input box with icon -->
        
      <div class="search-box">
        <div class="row">
          <input type="text" id="searchInput" placeholder="Search..." autocomplete="off">
        </div>
        <div id="searchResults">

        </div>
        <!-- <select id="searchResults"  style="display: none;" ></select> -->
    </div>
          <!-- <div id="searchResults" class="dropdown-menu">
              
          </div> -->


        <div class="row gy-4 mt-3">
            @foreach ($brands as $item)
                <div class="col-md-2">
                    <div class="card">
                        <a href="{{asset('device?brand_id='.$item->id)}}">
                            <div class="content">
                                <div class="inner-cards">
                                    <div class="inner-card">
                                        <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->name }}">
                                        <p>{{ $item->name }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

  <!-- End About Us Section -->
    
    
   
 

    


</main>

  <!-- End #main -->

   <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/images/Newlogo.png" alt="">
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
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>


  <!-- Template Main JS File -->
  <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <!-- <script src="{{asset('assets/js/brand.js')}}"></script> -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script>
  AOS.init();
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
      // $('#searchInput').on('keyup', function () {
      //       var query = $(this).val();

          
      //           $.ajax({
      //               url: '/brand/search',
      //               type: 'GET',
      //               data: { search: query },
      //               success: function (data) {
      //                 var results = data.results; // Ensure this matches the structure of your response
      //                       var $searchResults = $('#searchResults');

      //                       $searchResults.empty(); // Clear previous results

      //                       if (results.length > 0) {
      //                           results.forEach(function(item) {
      //                               $searchResults.append($('<option></option>').text(item.name).val(item.name)); // Adjust based on your data
      //                           });
      //                           $searchResults.show();
      //                       } else {
      //                           $searchResults.hide();
      //                       }
      //               },
      //               error: function (xhr) {
      //                   console.error(xhr.responseText);
      //               }
      //           });
            
      //   });

        
      //   $(document).click(function (e) {
      //       if (!$(e.target).closest('.search-box').length) {
      //           $('#searchResults').hide();
      //       }
      //   });
    });
</script>


</body>

</html>