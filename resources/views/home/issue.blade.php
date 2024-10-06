<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Mending</title>
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
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

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
    width: 60px;
    height: 60px;
    border-radius: 5px;
    margin-bottom: 10px;
}

p {
    margin: 0;
}


.about .content p:last-child {
    margin-bottom: 0;
    font-size: 14px;
}


.search-box {
    display: flex;
    justify-content: center; /* Center the input box */
    align-items: center;
    position: relative;
}

.search-box input[type="text"] {
    padding: 10px 40px 10px 10px; /* Add padding to the right for the icon */
    border: 1px solid #ccc;
    border-radius: 20px;
    font-size: 16px;
    
}
#home-enquiry-form .phometo-booking-form {
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
}

.no-margin {
    margin: 0px !important;
}

.booking-form-input {
    border: none;
    border-bottom: 1px solid #ccc;
    width: 100%;
    line-height: 29px;
    font-family: poppins;
    outline: none;
    background: #fff;
}

.booking-form-input {
    border: none;
    border-bottom: 1px solid #ccc;
    width: 100%;
    line-height: 29px;
    font-family: poppins;
    outline: none;
    background: #fff;
}

.booking-form-cta {
    width: 100%;
    background: #ffb000;
    color: #fff;
    border: none;
    padding: 15px;
    font-size: 20px;
    font-weight: bold;
    font-family: poppins;
    text-transform: uppercase;
    border-radius: 5px;
    cursor: pointer;
}
.booking-form-element {
    margin-bottom: 20px;
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
<section  class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Repair iphone & Android devices at your doorstep</h2>
      
       </div> 
       
       <div class="row gy-4 mt-3">

        <!-- <div class="col-md-3">
            <div class="card">
              <a href="laptop-repair.html"> 
              <div class="content">
                   <div class="inner-cards">
                        <div class="inner-card">
                            <img src="assets/images/screen-repair.png" alt="Placeholder Image">
                            <p>Screen Damage</p>
                        </div>
                    </div>
                </div>
            </div>
          </a>
        </div> -->

        @foreach ($issues as $issue)

            <div class="col-md-3">
                <div class="card">
                    <a href="" class="issueId" id="issue" data-id="{{$issue->id}}" data-bs-toggle="modal" data-bs-target="#formModal">
                        <div class="content">
                            <div class="inner-cards">
                                <div class="inner-card">
                                    <img src="{{asset('storage/'.$issue->image)}}" alt="Placeholder Image">
                                    <p>{{$issue->name}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
        @endforeach
        

        <!-- <div class="col-md-3">
            <div class="card">
              <a href="laptop-repair.html"> 
              <div class="content">
                   <div class="inner-cards">
                        <div class="inner-card">
                            <img src="assets/images/re" alt="Placeholder Image">
                            <p> Back Pannel & Replacement </p>
                        </div>
                    </div>
                </div>
            </div>
          </a>
        </div>


        <div class="col-md-3">
            <div class="card">
              <a href="laptop-repair.html"> 
              <div class="content">
                   <div class="inner-cards">
                        <div class="inner-card">
                            <img src="assets/images/model-iphone/apple-iphone-11-pro.jpg" alt="Placeholder Image">
                            <p>Apple iphone 11 pro </p>
                        </div>
                    </div>
                </div>
            </div>
          </a>
        </div>


        <div class="col-md-3">
            <div class="card">
              <a href="laptop-repair.html"> 
              <div class="content">
                   <div class="inner-cards">
                        <div class="inner-card">
                            <img src="assets/images/model-iphone/apple-iphone-11-pro-max-.jpg" alt="Placeholder Image">
                            <p>Apple iphone 11 pro max</p>
                        </div>
                    </div>
                </div>
            </div>
          </a>
        </div>



        <div class="col-md-3">
            <div class="card">
              <a href="laptop-repair.html"> 
              <div class="content">
                   <div class="inner-cards">
                        <div class="inner-card">
                            <img src="assets/images/model-iphone/apple-iphone-se-2020.jpg" alt="Placeholder Image">
                            <p>Apple iphone se 2020</p>
                        </div>
                    </div>
                </div>
            </div>
          </a>
        </div>

        <div class="col-md-3">
            <div class="card">
              <a href="laptop-repair.html"> 
              <div class="content">
                   <div class="inner-cards">
                        <div class="inner-card">
                            <img src="assets/images/model-iphone/apple-iphone-se-2022.jpg" alt="Placeholder Image">
                            <p>Apple iphone se 2022</p>
                        </div>
                    </div>
                </div>
            </div>
          </a>
        </div>

        <div class="col-md-3">
            <div class="card">
              <a href="laptop-repair.html"> 
              <div class="content">
                   <div class="inner-cards">
                        <div class="inner-card">
                            <img src="assets/images/model-iphone/apple-iphone-x.jpg" alt="Placeholder Image">
                            <p>Apple iphone x</p>
                        </div>
                    </div>
                </div>
            </div>
          </a>
        </div>

        <div class="col-md-3">
            <div class="card">
              <a href="laptop-repair.html"> 
              <div class="content">
                   <div class="inner-cards">
                        <div class="inner-card">
                            <img src="assets/images/model-iphone/apple-iphone-xr-new.jpg" alt="Placeholder Image">
                            <p>Apple iphone xr</p>
                        </div>
                    </div>
                </div>
            </div>
          </a>
        </div>

        <div class="col-md-3">
            <div class="card">
              <a href="laptop-repair.html"> 
              <div class="content">
                   <div class="inner-cards">
                        <div class="inner-card">
                            <img src="assets/images/model-iphone/apple-iphone-xs-max-new1.jpg" alt="Placeholder Image">
                            <p>Apple iphone xs max</p>
                        </div>
                    </div>
                </div>
            </div>
          </a>
        </div>

        <div class="col-md-3">
            <div class="card">
              <a href="laptop-repair.html"> 
              <div class="content">
                   <div class="inner-cards">
                        <div class="inner-card">
                            <img src="assets/images/model-iphone/apple-iphone-xs-new.jpg" alt="Placeholder Image">
                            <p>Apple iphone xs new</p>
                        </div>
                    </div>
                </div>
            </div>
          </a>
        </div> -->




        
       

     
        
        

    </div>

    </div>
  </section>
  <!-- End About Us Section -->
    
    
   
 <!-- Modal -->
 <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Screen Damage Repair</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      
      <!-- Modal Body -->
      <div class="modal-body p-3">
        <div class="banner-right-form">
          <div data-aos="zoom-in" class="phometo-booking-form aos-init aos-animate">
            <form action="" method="POST" id="appointmentForm"  class="no-margin p-2">
              <h3>Customer Details</h3>
               <!-- Brand -->
               <div class="booking-form-element">
                <select class="booking-form-input" name="brand_id" id="brand_id" onchange="loadDevices(this.value);" required="">
                  @foreach ($device as $item)
                  <option value="{{$item->brand_id}}">{{$item->brand_name}}</option>
                 
                 @endforeach
                  <!-- Add other brands as needed -->
                </select>
              </div>
              
              <!-- Device -->
              <div class="booking-form-element">
                <select class="booking-form-input" name="device_id" id="device-id" onchange="loadIssues(this.value);" required="">
                  @foreach ($device as $item )
                    <option value="{{$item->id}}">{{$item->device_name}}</option>
                  @endforeach
                  <!-- Device options will be dynamically loaded based on selected brand -->
                </select>
              </div>
              
              <!-- Issue -->
              <div class="booking-form-element">
                <select class="booking-form-input" name="issue_id" id="issue_id" required="">
                  <option value="">Issue</option>
                  <!-- Issue options will be dynamically loaded based on selected device -->
                </select>
              </div>
              <!-- Customer Name -->
              <div class="booking-form-element">
                <input class="booking-form-input" type="text" name="name" placeholder="Your Name" minlength="4" maxlength="30" required="">
              </div>
              
              <!-- Mobile Number -->
              <div class="booking-form-element">
                <input class="booking-form-input" type="number" name="mobile" id="mobile-number" placeholder="Mobile Number" min="1000000000" max="9999999999" required="">
              </div>
              
              <!-- Email -->
              <div class="booking-form-element">
                <input class="booking-form-input" type="email" name="email" placeholder="Enter Your Email" minlength="5" maxlength="100" required="">
              </div>
              
              <!-- Pincode and City -->
              <div class="booking-form-element">
                <input class="booking-form-input" style="width: 45%; margin-right: 2%;" type="text" name="pincode" id="pincode-id" autocomplete="off" placeholder="Enter Pincode" minlength="6" maxlength="6" onkeyup="validate_pincode($(this).val());" required="">
                
                <select class="booking-form-input" style="width:50%; height: 31px;" name="city_id" id="city-id" onchange="validate_city_pincode(false);" required="">
                  <option>Select Your City</option>
                  <option value="45">Pune</option>
                  <option value="46" selected="selected">Mumbai</option>
                  <option value="48">Bengaluru</option>
                </select>
                <div class="clear"></div>
                <br>
                <span class="set-location-span" onclick="set_user_location();">Detect My Pincode</span>
                <div id="set-location-error-block" style="font-size:12px; color:red;"></div>
              </div>
              
              <div id="pincode-error-message"></div>
              
             
              
              <!-- Preferred Date and Time Slot -->
              <div class="booking-form-element">
                <input class="booking-form-input" style="width: 45%; margin-right: 2%;" name="service_date" autocomplete="off" placeholder="Select Preferred Date" required="" id="datepicker">
                
                <select class="booking-form-input" style="width:50%; height: 31px;" name="time_slot" required="">
                  <option value="">Select Time Slot</option>
                  <option value="9AM - 12PM">9AM - 12PM</option>
                  <option value="1PM - 3PM">1PM - 3PM</option>
                  <option value="4PM - 7PM">4PM - 7PM</option>
                  <option value="8PM - 10PM">8PM - 10PM</option>
                </select>
              </div>
              
              <!-- Submit Button -->
              <div class="booking-form-element no-margin">
                <button type="button" id="bookingForm" class="booking-form-cta" name="submit_booking">Get Call Back</button>

              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    


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
  <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script>
  AOS.init();
  $(document).ready(function() {
            $("#service_date").datepicker({
                dateFormat: 'yy-mm-dd',  // Format for the date
                minDate: 0               // Disable past dates
            });

            $('.issueId').on('click',function () {
        
                var issue_id = $(this).data('id');
                
                $.ajax({
                  url:'/issueData',
                  method:'GET',
                  data:{
                    id:issue_id
                  },
                  success:function(data){
                    
                    var $issueSelect = $('#issue_id');
                    // $issueSelect.html('<option value="">Select an Issue</option>');
                
                      
                    $issueSelect.append('<option selected value="' + data.id + '">' + data.name + '</option>');
                      
                    }
                })
                
            })
        });

        $('#bookingForm').on('click', function(e) {
        e.preventDefault(); 
        
        var formData = $('#appointmentForm').serialize(); 
        console.log(formData);

        $.ajax({
            url: '/saveBooking',  
            method: 'POST',       
            data: formData, 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Ensure CSRF token is included
            },      
            success: function(response) {
              // $('#formModal').modal('hide');
              // location.reload();
                // alert('Booking submitted successfully!');
            },
            error: function(xhr, status, error) {
                // Handle error (e.g., show an error message)
                alert('An error occurred: ' + error);
            }
        });
    });

        function validate_pincode(pincode) {
            // Add your pincode validation logic here
            // Example:
            if (pincode.length === 6) {
                $("#pincode-error-message").text("");  // Clear any error message
            } else {
                $("#pincode-error-message").text("Please enter a valid pincode.");
            }
        }

        function validate_city_pincode(showMessage) {
            // Add your city and pincode validation logic here
            return true;  // Return true if valid, otherwise return false
        }

        function set_user_location() {
            // Add your logic to set user location
            alert("Setting user location...");
        }
        
        $("#datepicker").datepicker({
            dateFormat: 'yy-mm-dd', 
            minDate: 0,             
               
            showAnim: "slideDown", 
            changeMonth: true,      
            changeYear: true,     
        });
        
        
        
</script>
<!-- jQuery and jQuery UI Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<!-- jQuery UI CSS (optional for styling the datepicker) -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</body>

</html>