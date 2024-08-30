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

.services3 .container {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(assets/img/Rectangle\ 69.png) center center;
    background-size: cover;
    padding: 100px 60px;
    border-radius: 15px;
    overflow: hidden;
    height: 80vh;
}


.services3{
  padding:10px;
}

.services2{
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
    background-image: url('assets/img/sales-banner.png');
    background-size: cover;
    background-position: center;
}

.breadcrumbs .page-header::after {
    content: " "; /* Replace with your desired text */
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

b, strong {
    font-weight: bolder;
    color: #fab25e;
}

.section-header h3 {
    color:#f78c00;
}


.about .btn-primary {
            display: block;
            width: 200px;
            margin: 20px 0 0;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
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
          <li ><a href="index.html">Home</a></li>
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

<li><a class="dropdown-item" href="https://culturepartners.com/insights/?e-filter-01a6d46-category=thought-leadership">Thought Leadership </a></li>
                
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
    <!-- <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/sales-banner.png');">
      
      </div>
     
    </div> -->
    <!-- End Breadcrumbs -->

    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center banner-with-text">
        
      </div>
  </div>
  



    <!-- ======= About Us Section ======= -->
    <section  class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Sales Transformation</h2>
          <P class="mb-3">Popular wisdom has it that Sales is an art, rather than science. Not anymore! Sales today is marked by a blend of process, AI-generated analytics, curated to keyword marketing messages and sales pitches. A blend of art and science - with the balance finely poised from one situation to another.</p>
           <P class="mb-3">Effectus enables you to address both the science and art. </p>
        </div>
    </div>
    </section>
   

   


    

  <!-- End Stats Counter Section -->

  <section id="stats-counter " class="stats-counter">
    <div class="section-header">
        <h2>Effectus enables you to address both the science and art. </h2>
    
      </div>
    <div class="container " data-aos="fade-up">
      
      <div class="row">
        <ul>
            <li class="mb-3">
                	<b>Opportunity Management–</b> A process driven approach to enhancing the win-probability of a sale by identifying key decision making roles, results each role seeks, personal ambitions or preferences and the best way forward to curate a winning sales plan.
            </li>

            <li class="mb-3"><b>Relationship Management – </b>
               adding value to a customer’s business needs whilst delivering on some of his/her personal goals is often the key to building trusting, long term relationships.  Relationships that can, often provide early insight into emerging opportunities. 
            </li>

            <li class="mb-3"> <b> Art & science of planning and executing  client  meetings and conversations with key stakeholders & C-suite Executives -   </b> making every client meeting an event that provides a perspective to the client, provides and elicits meaningful information that advances our understanding the customer’s situation and creates interest and curiosity. </li>
             <li class="mb-3">The art and science of crafting, sequencing a through a mix of open-ended and situational questions that move the sales opportunity forward</li>
            
            <li class="mb-3"><b>Leveraging business knowledge and financial acumen to converse at par with CEOs/CXOs -  </b>This is vital to both relationship management and working with customers at a strategic level as trusted advisors. Effectus enables you to deep dive into client situations </li>
            <P class="mt-3">Real Sales transformation is about transforming the way customers perceive us.  Adopting a buyer-focused sales methodology is an essential step on the transformation journey.</p>
        </ul>
     
     

      </div>
      
  </div>

</section>


 <section id="stats-counter " class="stats-counter">
     
      <div class="container " data-aos="fade-up">

      <div class="row gy-4 align-items-center bg-clr1">

        <div class="col-lg-6">

          <div class="section-header">
               <h3> Our Core Offerings</h3> 
           
            <P class="mb-3 clr ">We offer our clients two core Interventions- <strong>Sales Essentials</strong> and <strong>Business & Financial Acumen for Sellers</strong> (or Executive Conversations, as our clients term it, since that is the deliverable they want to see imbibed into their senior sellers.) Sellers that they believe must learn to interact effectively with the C-suite.</p>
            
             
    
             
          </div>
        </div>

          <div class="col-lg-6 mt-5">
            <div class="image-box text-center">
            <img src="assets/img/Rectangle 39.png" alt="" class="img-fluid mx-auto">

          </div>
     </div>

            <div class="col-lg-6 mt-5">
            <div class="image-box text-center">
            <img src="assets/img/Rectangle 40.png" alt="" class="img-fluid mx-auto">

          </div>
     </div>

      <div class="col-lg-6">

            <div class="section-header">
              <h3> Sales Essentials </h3>
           
            <P class="mb-3 clr ">This learning intervention addresses the need for a consistent, repeatable buyer-focused sales process that becomes the gold standard for all sellers in the firm to adopt.

A one-size-fits-all sales proramme that is not aligned to individual clients’  needs would not work - so, Sales Essentials is designed to be modular and can be curated to every customer’s specific thrust areas. 
</p>
            
            
            
    
          </div>

      </div>

     

          
        </div>


        
    </div>

  </section>

 <!-- ======= About Us Section ======= -->
 <section  class="about">
     <div class="section-header">
     <h2>Business And Financial Acumen for B2B Sales</h2>
     </div>
     
    <div class="container" data-aos="fade-up">
    <div class="row gy-4 align-items-center bg-clr1">
    <div class="col-lg-6 mt-5">
        <div class="image-box text-center">
        <img src="assets/img/Rectangle 69.png" alt="" class="img-fluid mx-auto">

        </div>
     </div>

      <div class="col-lg-6">

        <P class="mb-3 clr ">The need for a well-defined  ‘Executive Conversations’ process  for top sellers - particularly in Engineering &  Tech, was a crucial gap in most Sales Excellence offerings and this is the challenge that a top Automotive & Industrial Client  brought to us - leading to the development of this unique offering.</p>

        <P class="mb-3 clr ">This is where the real differentiation occurs, and sellers get early insight into the challenges and opportunities an Executive seeks to deal with.</p>
        
        <a href="#" class="btn btn-primary">Read More</a>   
            
            
      </div>

    </div>
     
</div>
  
  </section>
  <!-- End About Us Section -->
  
  
  
  
   <section id="stats-counter " class="stats-counter">
    <div class="section-header">
        <h2>Coaching </h2>
    
      </div>
    <div class="container " data-aos="fade-up">
      
      <div class="row">
        <ul>
            <li>
                	<b>Is Training enough to drive change?</b> <br/> For our customers- the need for continual profitable revenue growth is always desirable- in fact it is the heartbeat of a company’s performance. So,it should sound like a great idea for L&D Managers to invest in sales training to up performance. Right? Not quite if one were to be mindful of extensive research in the field of training.
                	<p class="mb-3">There are estimates that companies around the world spent close to US$ 356 billion on training in 2015 alone( Source: HBR October 2016 - “Why leadership Training Fails and What to Do About it”).</p>
                	<p class="mb-3">When it comes to Sales Training, estimates vary. $ 30 billion says one estimate. What concerns us, however, is how effective is the training??</p>
            </li>

            <li><b>What are our options?</b> <br/>
               While the need for growth in profitable revenue never stops- the growth of sales people, unfortunately does! This creates a Revenue shortfall- which is generally filled up by hiring more sales people or increasing effectiveness through Sales Training- which translates into Quantity and/or Quality increments.
               
               	<p class="mb-3">Most sales organisations have their star performers- the "10s and 9s” so to speak. But a vast majority is 5s and 6s- the "solid citizens". If training could move them to 7 or 8, for instance- the money on training would be well spent- provided training were to be a "part of a process rather than a standalone event”.</p>
            </li>

            <li> <b> Suggested Roadmap </b> <br/> - Commit to a Sales Transformation journey that encompasses one or both of our programs and a reinforcement & coaching intervention to operationalise the learning.  </li>
            
            <p class="mb-3"> -Build in training into the process as an “intervention” and not a standalone event</p>
            
            <p class="mb-3"> -Adopt on-going "Reinforcement & Coaching” to develop a culture of practice and use experts to implement this</p>
            
            <p class="mb-3"> -Foster a Supportive environment</p>
            
            
            <li><b>Coaching the Coach </b> <br/> In a CSO Insights research note” <b>A Culture of Accountability </b> starts with Coaching” the role of Front line Sales Managers(FSMs) as “ Coaches” is emphasised.</li>
            <P class="mt-3">To enable FSMs to coach their teams effectively,a well developed Reinforcement process can be an important enabler. The Goal has to be to enable FSMs to become the kind of coaches who can reinforce sales processes and skills that are rolled out in training. To achieve this, it is crucial that FSMs are a part of the training themselves.</p>
            
             <P class="mt-3"> <b>Opportunity coaching – </b> Regular opportunity reviews to coach around the real-world opportunities that the sales force is dealing with</p>
             
              <P class="mt-3"><b>Skills, knowledge, and competency coaching – </b> While working with sales professionals, reviewing opportunities, additional coaching, such as situational selling skills & business acumen, Executive Engagement etc can be addresses to expand the capability of the sales force in general or individuals with specific issues.</p>
              
               <P class="mt-3"><b>Reinforcement coaching – </b>In addition to ensuring salespeople use sales content effectively and apply what they’ve learned in training, world-class FSMs look for opportunities to reinforce the lea Examples of reinforcement coaching include helping the sales professionals apply newly learned methodologies, processes, or value messaging in their daily work. This kind of coaching is focused on coaching people to embrace the only consistent element we have</p>
               
                <P class="mt-3">We have made this coaching the core of our offerings so as to achieve the twin objective of coaching FSMs and their sales team in utilising the training concepts and tools so that the FSMs can bring in the change that the organisation wants to see.</p>
                
                 <P class="mt-3">Reinforcement and Coaching allows us to address the <b>“how to do”</b> whilst the training address the “ what to do”.</p>
        </ul>
     
     

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

</body>

</html>