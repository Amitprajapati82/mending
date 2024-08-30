<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- <title>Impact Bootstrap Template - Index</title> -->

  <meta content="" name="description">
  <meta content="" name="keywords">


  <title>Mending</title>
    
    <!-- <link rel="icon" type="assets/x-icon" href="favicon.ico"> -->

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
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

  <style>

    
.image-box img {
  position: relative;
  z-index: 1;
  width: 300px;
}


.bg-clr1 {
background: #3A5286;
  border-bottom-left-radius: 50px;
  border-top-left-radius: 50px;
}


.bg-clr {
  background: #3A5286;
  border-bottom-right-radius: 50px;
  border-top-right-radius: 50px;
}



.h3,  h3 {
  margin-top: 0;
  margin-bottom: .5rem;
  font-weight: 500;
  line-height: 1.2;
  color: #f78c00 !important;
}

.clr {
color:#ffffff !important;
}

/* Media query for mobile devices */
@media (max-width: 767px) {
    .carousel-inner, .carousel-item {
        height: auto !important;
    }
} 


.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
    display: flex;
    justify-content: center;
    padding: 0;
    margin-right: 15%;
    margin-bottom: 2rem;
    margin-left: 50%;
}




.section-header p {
    margin-bottom: 0;
    color: #6f6f6f;
    text-align: justify;
}



body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    /*background-color: #f4f4f4;*/
}

.cta-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    /*background: linear-gradient(to right, #ff7e5f, #feb47b);*/
    color: white;
    text-align: center;
    padding: 20px;
}

.cta-content {
    /*max-width: 600px;*/
    padding: 20px;
    background: rgb(240 248 255);
    border-radius: 10px;
    text-align: center;

}

.cta-content h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.cta-content p {
    font-size: 1.2em;
    margin-bottom: 30px;
}

.cta-button {
    font-size: 1.2em;
    color: #fff;
    background-color: #ff7e5f;
    border: none;
    padding: 15px 30px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #feb47b;
}

a {
    color: #000080;
    text-decoration: none;
}

a:hover {
    color: #000080;
    text-decoration: none;
}

.carousel-caption h2 {
  background: rgba(0, 0, 0, 0.5); 
  display: inline;
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

.service-itemone {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, border-color 0.3s;
    border: 1px solid transparent;
  
}

.service-itemone:hover {
    border-color: red;
    transform: scale(1.05);
}

.iconone {
    margin-right: 20px;
}

.iconone img {
    width: 50px;
    height: 50px;
}

.text-content h3 {
    margin-top: 0;
    margin-bottom: 10px;
    font-size: 1.4rem;
}


.text-content p {
    margin: 0;
}


.funfact-section {
    padding: 50px 0;
    text-align: center;
    background-image: url('assets/images/home-service.webp');
    background-size: cover;
    background-position: center;
    color: black;
    position: relative;
}

/* .funfact-section {
    padding: 50px 0;
    text-align: center;
    background-color: #ffffff;
    color: black;
} */


    .big-text {
    font-size: 2em;
    margin-bottom: 20px;
    color: #ffffff;
}


.auto-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.counter-block {
    flex: 1 1 30%;
    margin: 15px;
    min-width: 250px; 
}

.counter-block-one {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.count-outer {
    font-size: 2em;
    margin-bottom: 10px;
}

.icon-box {
  
    padding: 20px; 
    border-radius: 10px; 
    display: inline-block; 
    margin-top: 10px;
}

.icon-box img {
    max-width: 100px;
}


.clients-slider {
    padding: 50px 0;
}

.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}

.swiper-slide img {
   
    /* object-fit: contain;  */
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 0 0 10px white; /* White box shadow */
    transition: transform 0.3s ease;
}

.swiper-slide  img {
  width: 180px !important;
  margin-right: 10px !important;
}

.swiper-slide img:hover {
    transform: scale(1.05);
}


.contact-info li {

  list-style: none;
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
          <a href="tel:+912267000868"><span>+912267000868</span></a>
        </i>
        
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
     
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>  
    </div>
  </section> -->
  <!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{asset('/')}}" class="logo d-flex align-items-center">
      
        <img src="{{asset('assets/images/Newlogo.png')}}" alt="">
     
      </a>
      
      <nav id="navbar" class="navbar">
        <ul>
          <li ><a href="{{asset('/')}}" class="active">Home</a></li>


          <li><a href="{{asset('about_us')}}">About</a></li>
          
          
          <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle " href="services" role="button"
           data-bs-toggle="dropdown" aria-expanded="false">Services</a>

            <ul class="dropdown-menu">
              @foreach ($pageContents as $item)
              
              <li><a class="dropdown-item" href="{{asset('page?id='.$item->id)}}">{{$item->page_name}}</a></li>
              @endforeach
                
                 <!-- <li><a class="dropdown-item" href="buisness.html">Laptop Repairing </a></li> -->
               
                
            </ul>
        </li> 
        
           <li><a href="{{asset('contact')}}">Contact</a></li>

        </ul>
      </nav>
      <!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
  <!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="hero"> -->

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators d-none d-md-block">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="{{asset('assets/images/web banner 1.jpg')}}" class="d-block w-100" alt="...">
          
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="assets/images/web banner 2.jpg" class="d-block w-100" alt="...">
       
        </div>
        <div class="carousel-item">
          <img src="assets/images/web banner 3.jpg" class="d-block w-100" alt="...">
          <!--<div class="carousel-caption d-none d-md-block">-->
          <!--  <h5>Third slide label</h5>-->
          <!--  <p>Some representative placeholder content for the third slide.</p>-->
          <!--</div>-->
        </div>
      </div>
      <button class="carousel-control-prev d-none d-md-block" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next d-none d-md-block" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
   
    
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section  class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Repair iphone & Android devices at your doorstep</h2>
          <h5>Doorstep iPhone and android Repair Mending offers quality iPhone and android repair Mumbai and Maharashtra service for any shop, office or home location. Our iPhone and android technicians reach any location in the Mumbai and Maharashtra anytime you need for quick repair.</h5>
         </div> 
         
         <div class="row justify-content-center gy-4 mt-3">
          <div class="col-md-3">
            <div class="card">

            <a href="{{asset('brand?category_id=1')}}"> 
             
                <div class="content">
                    <div class="inner-cards">
                          <div class="inner-card">
                              <img src="assets/images/mobile-repair.png" alt="Placeholder Image">
                              <p>Mobile Repair</p>
                          </div>
                      </div>
                  </div>
              </div>
            </a>
          </div>
          <div class="col-md-3">
              <div class="card">
                <a href="{{asset('brand?category_id=2')}}"> 
                <div class="content">
                     <div class="inner-cards">
                          <div class="inner-card">
                              <img src="{{asset('assets/images/laptop-repair.png')}}" alt="Placeholder Image">
                              <p>Laptop Repair</p>
                          </div>
                      </div>
                  </div>
              </div>
            </a>
          </div>
      </div>

      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Our Services Section ======= -->

    <section  class="services ">
      <div class="section-header">
        <h2>OUR PROCESS</h2>
        <h3>Mobile repairing at home in just 3 easy steps</h3>
       

        
      </div>


      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
              <img src="assets/images/appointment-book (1).png"  alt="">
              </div>
              <h3>Book Appointment</h3>
              <p>Secure your spot with just a click—book your appointment now and let us handle the rest! </p>
              
            </div>
          </div>

          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
            <img src="assets/images/tag.png"  alt="">
              </div>
              <h3>Check Price</h3>
              <p>Curious about our prices? Discover the perfect fit for your budget with a quick price check!.</p>
            
            </div>
          </div>

          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="assets/images/sit-relax.png"  alt="">
              </div>
              <h3>Sit Back & Relax</h3>
              <p> You've done the hard work—now sit back, relax, and enjoy the results. We've got you covered!  </p>
             
            </div>
          </div>
          
          <!-- End Service Item -->

    </div>

      </div>
    </section>
    
    <!-- End Our Services Section -->

     <!-- ======= Our Services Section ======= -->

     <section  class="services1 ">
      <div class="section-header">
        <h2>Why Choose MENDING ?</h2>
        <h3>Premium out-of-warranty iPhone and Android Service Center in Maharashtra</h3>
      </div>


      <div class="container" data-aos="fade-up">
        
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
         
         
          
                <div class="col-lg-4 col-md-6">
                    <div class="service-itemone">
                        <div class="iconone">
                            <img src="assets/images/quality.png" class="img-fluid mb-3" alt="Book Appointment Icon">
                        </div>
                        <div class="text-content">
                            <h3>Original(OEM) Quality Parts</h3>
                            <p>We repair your cell phones with the premium quality parts so our Customers never face any problem in fixed cell phones. We only use the <b>OEM  screen </b> and <b> OEM stands </b> for Original Equipment Manufacturer and is typically used to indicate that the parts are from the same original manufacturers. For Mending Quality Comes First.</p>

                            <br/>
                            <br/>
                        </div>
                    </div>
                </div>
           
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-itemone ">
              <div class="iconone">
            <img src="assets/images/warranty.png" class="img-fluid mb-3" alt="">
              </div>
              <div class="text-content">
              <h3>Certified Warranty</h3>
              <p><b>MENDING </b> offers limited 12 Months Warranty to our customers on most of the repairs performed at Mending. We value our customers, their time, money and their precious devices, so we came up with limited 2 Months warranty1 to provide complete satisfaction with peace of mind. We request you to take a moment to read and understand all the terms and conditions comes under this limited 12 Months warranty. </p>
            </div>
            </div>
          </div>   

          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-itemone">
              <div class="iconone">
                <img src="assets/images/repair (1).png" class="img-fluid mb-3" alt="">
              </div>
              <div class="text-content">
              <h3>Quick repair Service</h3>
              <p> We can do most of the repairs on the
                same day. For example, iPhone screens
                can be replaced in under 30 minutes,
                while we can do iPad screens replacements
                in a couple of hours. </p>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
            </div>
            </div>
          </div>
          
          <!-- End Service Item -->


          <!-- <div class="row gy-4" data-aos="fade-up" data-aos-delay="100"> -->
            <div class="col-lg-4 col-md-6">
              <div class="service-itemone ">
                <div class="iconone">
                <img src="assets/images/technician.png" class="img-fluid mb-3"  alt="">
                </div>
                <div class="text-content">
                <h3>Skilled Technicians</h3>
                <p>We have a team of specialized technicians who
                  are highly trained at chip-level repairs.
                  Hence, we can fix just about any damage
                  to your device motherboard. </p>
              </div>
              </div>
            </div>
  
            <!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6">
              <div class="service-itemone">
                <div class="iconone">
              <img src="assets/images/satisfaction.png"  class="img-fluid mb-3"  alt="">
                </div>
                <div class="text-content">
                <h3>100% Satisfaction</h3>
                <p>Experience 100% satisfaction with our service. Enjoy free and hassle-free re-service for any issues within 90 days!.</p>
                <br/>
                
              </div>
              </div>
            </div>
  
            <!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6">
              <div class="service-itemone">
                <div class="iconone">
                  <img src="assets/images/guaranteed.png"  class="img-fluid mb-3" alt="">
                </div>
                <div class="text-content">
                <h3>Guaranteed Safety</h3>
                <p>We never compromise on the quality of
                  parts and workmanship. Hence, Most of our
                  repairs come with up to
                  1-year hassle-free warranty. </p>
              </div>
              </div>
            </div>
            
            <!-- End Service Item -->

    </div>
    </div>

      </div>
   
    </section>
    
    <!-- End Our Services Section -->

   





  

  <section class="funfact-section centred green-bg">
    <span class="big-text">Our Happy Customers!</span>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                <div class="counter-block-one">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="assets/images/repair (2).png" alt="">
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-start="0" data-stop="5000">0</span><sup>+</sup>
                        </div>
                        <h5>DEVICE REPAIRED</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                <div class="counter-block-one">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="assets/images/repair-services.png" alt="">
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-start="0" data-stop="10000">0</span><sup>+</sup>
                        </div>
                        <h5>SCREEN REPAIRED</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 counter-block">
                <div class="counter-block-one">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="assets/images/battery-level.png" alt="">
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-start="0" data-stop="5000">0</span><sup>+</sup>
                        </div>
                        <h5>BATTERY REPAIRED</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="stats-counter" class="stats-counter">
  <div class="section-header">
      <h2>Mending Repair Advantage </h2>
  
    </div>
  <div class="container" data-aos="fade-up">
    
    <div class="row">
      <ul>
        <li class="mb-3">
          <b>MENDING Services is the No.1 Repairing and Servicing Center for all Models of Phones And Laptops in Mumbai Maharashtra. We repair all Models of Phones and Laptop's in Maharashtra. </b>
        </li>
        <li class="mb-3">
            <b> We give fast Phone and Laptop repair service in Maharashtra at affordable rates.Our experienced Phone and Laptop repair Technicians have the skills to complete that repair in a cost effective manner. We also have the spare parts required for any service /repair of your Phone, Laptops like cracked screens, LCD problems, cover damage, and water damage or software glitches. With years of experience in the field we are termed as the Best Phone repair/ service center in Mumbai Maharashtra. with Technicians integrated service model, we always achieve the highest level of customer satisfaction.  
            </b>
        </li>
 
        <li class="mb-3">
          <b>Most of the Phone and Laptops repairs are done at your doorstep in less than 60 mins. Whether it is an Phone or Laptop screen replacement or Phone or Laptop Battery replacement, our technicians are equipped with all the tools including ESD kits to service your Gadgets Or Phone or Laptop at a place and time of your choice.   
          </b>
        </li>

        <li class="mb-3"><b>
            Saves Money. Mobile phone repair is more affordable than a new phone purchase.
          </b>
        </li>

        <li class="mb-3"><b>
            By repairing mobile devices, users can extend their lifespan and get more value out of their investments.
          </b> 
        </li>

        <li class="mb-3"><b> 
            Environmental Protection.
          </b>
        </li>
          
        <li class="mb-3"><b>
            Need To Use New Software.
          </b>
        </li>

        <li class="mb-3"><b>
            Do Not Need To Switch Data To A New Phone.
          </b> 
        </li>

        <li class="mb-3"><b>
            Enjoy Warranty On Their Services.
          </b>
        </li>

      </ul>
   
    </div>
    
</div>

</section>

<section class="cta">
  <div class="cta-content">
<div class="container">
  
  <div class="row align-items-md-center">
    <div class="col-12 col-md-8">
      <h2 class="text-uppercase font-weight-bold">Mending<br>24/ 7 Help-line</h2>
      <p>Technology Services - WE NEVER BACK DOWN</p>
    </div>
    <div class="col-12 col-md-4 text-md-right">
      <a href="tel:+917304776477" class="btn btnTheme btnThemeWhiteInverse fontRoboto btnRoudedLarge" data-hover="+91 7304776477">
        <span class="btnText d-block">
          <i class="bi bi-telephone"></i>
          <!-- <i class="ei_icon_phone btnIcn"><span class="sr-only">icon</span></i> -->
          <span>+91 7304776477</span>
        </span>
      </a>
    </div>
  </div>
 
  </div> 
</div>
</section>

     <!-- ======= Clients Section ======= -->
     <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="section-header">
          <h2>Top  Brands Repaired</h2>
        
        </div>


        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide"><img src="{{ asset('assets/images/apple-1.png') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/images/brands/samsung.jpeg') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/images/brands/milogo.jpeg') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/images/oppo.jpg') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/images/brands/oneplus.jpeg') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/images/brands/vivo.jpeg') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/images/brands/realme.jpeg') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/images/Asus.jpg') }}" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/images/brands/Micromax.jpg') }}" class="img-fluid" alt=""></div> 
          </div>
      </div>


      </div>
    </section>

    <!-- End Clients Section -->



     <!-- ======= Clients Section ======= -->
     <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="section-header">
          <h2>Services Available</h2>
        
        </div>


        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <figure>
                <img src="assets/images/screen-repair.png" class="img-fluid" alt="">
                <figcaption style="text-align: center; margin-top: 15px;">Sereen Damage</figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="assets/images/smartphone.png" class="img-fluid" alt="">
                <figcaption style="text-align: center; margin-top: 15px;">Battery Issue</figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="assets/images/power-button.png" class="img-fluid" alt="">
                <figcaption style="text-align: center; margin-top: 15px;">Not Turning On</figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="assets/images/sound.png" class="img-fluid" alt="">
                <figcaption style="text-align: center; margin-top: 15px;">Speaker Issue</figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="assets/images/smartphone (1).png" class="img-fluid" alt="">
                <figcaption style="text-align: center; margin-top: 15px;">Charging Issue</figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="assets/images/motherboard.png" class="img-fluid" alt="">
                <figcaption style="text-align: center; margin-top: 15px;">Motherboard Repair</figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="assets/images/water-damage.png" class="img-fluid" alt="">
                <figcaption style="text-align: center; margin-top: 15px;">Water Damage</figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="assets/images/mobile-network.png" class="img-fluid" alt="">
                <figcaption style="text-align: center; margin-top: 15px;">Network Issue</figcaption>
              </figure>
            </div>

            <div class="swiper-slide">
              <figure>
                <img src="assets/images/keyboard.png" class="img-fluid" alt="">
                <figcaption style="text-align: center; margin-top: 15px;">Keyboard Issue</figcaption>
              </figure>
            </div>

            <!-- <div class="swiper-slide">
              <figure>
                <img src="assets/images/" class="img-fluid" alt="">
                <figcaption style="text-align: center; margin-top: 15px;"></figcaption>
              </figure>
            </div>
             -->
            
            
            
           
          </div>
        </div>

      </div>
    </section>


 
    <!-- End Clients Section -->

    </main>

  <!-- End #main -->
  <hr>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    
    <div class="container">
      <div class="row gy-4">
        


        <div class="col-lg-3 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/images/Newlogo.png" alt="Company Logo">
          </a>
        
          
          <ul class="contact-info">
              <li>
                  <i class="bi bi-geo-alt"></i> <!-- Location Icon -->
                  1905 Building NO. 04 Acme Mmrda Near Acme Ozone Bhavani Nagar, Chitalsar Manpada Ghodbunder Road. Thane West Pin.400607
              </li>
              <li>
                  <i class="bi bi-telephone"></i> <!-- Phone Icon -->
                  <a href="tel:+1234567890">+1 234 567 890</a>
              </li>
              <li>
                  <i class="bi bi-envelope"></i> <!-- Mail Icon -->
                  <a href="mailto:info@yourcompany.com">info@yourcompany.com</a>
              </li>
          </ul>
      
          <div class="social-links d-flex mt-4">
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
      </div>
      

        <div class="col-lg-3 col-6 footer-links">
          <h4>Information</h4>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about-us.html">About us</a></li>
            
            <!-- <li><a href="resource.html">Resources</a></li> -->
            <li><a href="contact.html">Contact us</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-6 footer-links">
          <h4>Quick Support</h4>
          <ul>
            <li><a href="sales.html">Mobile Repair </a></li>
            <li><a href="buisness.html">Laptop Repair</a></li>
            <!-- <li><a href="culture.html">Culture Consulting </a></li> -->
           
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Social Links</h4>
          <div class="social-links d-flex mt-4">
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
        </div>

      </div>
    </div>
    <hr>
    <div class="footer-bottom">
      <div class="container">
        <div class="row align-items-center fb-inner spno">
          <div class="col-lg-6 col-md-12 text-center text-lg-start">

            
            <span class="copyright-text">Copyright © 2024
              <a href="#" class="text-primary" target="_blank"><b>Mending</b></a>
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
  
    

  </footer>
  <!-- End Footer -->

   <a href="#" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
   </a>

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
  <script src="{{'assets/js/main.js'}}"></script>
  <script>
  AOS.init();
</script>
  <script>

document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.count-text');

    const animateCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const speed = parseInt(counter.getAttribute('data-speed'));
                const start = parseInt(counter.getAttribute('data-start'));
                const stop = parseInt(counter.getAttribute('data-stop'));
                const increment = stop / speed;

                const current = parseInt(counter.innerText.replace(/,/g, ''));

                if (current < stop) {
                    counter.innerText = Math.ceil(current + increment).toLocaleString();
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = stop.toLocaleString();
                }
            };

            updateCount();
        });
    };

    animateCounters();
});



document.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper('.swiper', {
        slidesPerView: 6,
        spaceBetween: 60,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});

        </script>

</body>

</html>