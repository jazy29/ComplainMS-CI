<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Homepage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
        <a href="<?= site_url('home'); ?>" class="scrollto"><img src="assets/img/logobims.png" alt="" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#howtoregister">About</a></li>
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
          
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      
      <a class="buy-tickets scrollto" href="<?= site_url('auth'); ?>"> Login </a>
      

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">Complaint <br><span>Management</span> System</h1>
      <h1>Barangay 386 |<span> Quiapo Manila </span></h1>
      <h7> Report any incidents that are troubling and that can harm the environment for a better environment.

</h7>
      <p> </p>
      <p> </p>
      
      
     
      <a href="<?= site_url('auth'); ?>" class="about-btn scrollto ">Sign In to Report <i class="fas fa-sign-in-alt"></i></a> <!-- ======= Sign-In Report ======= -->
    
    </div>
  </section><!-- End Hero Section -->
 
  <main id="main">
    

   <!-- FAQ section -->
   <div class="section-header">
          <h2>FAQ's</h2>
          <p>How can we help you?</p>
        </div>
    <div class="wrapper bg-white rounded shadow"> <div class="h3 text-primary text-center"></div>
     <div class="d-flex justify-content-center"> 
      
  
  </div> 
  <div class="accordion accordion-flush border-top border-start border-end" id="myAccordion"> <div class="accordion-item"> <h2 class="accordion-header" id="flush-headingOne">
     <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"> Who to Contact? </button>
     </h2> <div id="flush-collapseOne" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
       <div class="accordion-body p-0"> <ul class="list-unstyled m-0"> <li>
        <a href="#">For further questions regarding on your concern, you can contact our dear Secretary, </a> <h3>Mr. Sabulao Jelbie. </h3></li>  
    </ul> 
  </div>
 </div>
 </div> 
 <div class="accordion-item"> <h2 class="accordion-header" id="flush-headingOne">
   <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
     How to Register? </button> </h2> 
     <div id="flush-collapseTwo" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion"> 
      <div class="accordion-body p-0"> <ul class="list-unstyled m-0"> <li><a href="#">To register just simply follow the step provided : </a><a class="small" href="#howtoregister">Click-Here</a></li>  </ul> </div> </div> </div> <div class="accordion-item"> <h2 class="accordion-header" id="flush-headingOne">
         <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"> How to register if not a resident? </button>
         </h2> <div id="flush-collapseThree" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
           <div class="accordion-body p-0"> <ul class="list-unstyled m-0"> <li><a href="#">If you are not a resident you are not able to register in our system, if you want to register, you can ask to the nearest barangay
            to make you a resident first before you can register.
           </a></li> 
            </ul> </div> </div> </div>
            <div class="accordion-item"> <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour"> How to report? </button> </h2> <div id="flush-collapseFour" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion"> <div class="accordion-body p-0"> <ul class="list-unstyled m-0"> <li><a href="#">To report you can follow the steps provided:</a> <a href="#howtoreport">Click-Here</a></li> </ul> </div> </div> </div> <div class="accordion-item"> <h2 class="accordion-header" id="flush-headingOne">
               <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive"> Can I access this on mobile? </button> </h2> <div id="flush-collapseFive" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion"> <div class="accordion-body p-0"> <ul class="list-unstyled m-0"> <li><a href="#">Absolutely!, our website is a multi-platform and it can be access both mobile and computer.</a></li> </ul> </div> </div> </div> <div class="accordion-item"> <h2 class="accordion-header" id="flush-headingOne"> 
                <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix"> Can I only access the website using internet? </button> </h2> <div id="flush-collapseSix" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion"> <div class="accordion-body p-0"> <ul class="list-unstyled m-0"> <li><a href="#">Yes, only with access through internet can use our website.</a></li>  </ul> </div> </div> </div> </div> </div>



    <!-- ======= Register Section ======= -->
    <section id="howtoregister">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <p></p>
          <p></p>
          <p></p>
          <p></p>
          <h2>How to register?</h2>
          <p>Follow the steps in the images how to register.</p>
          <p></p>
          </div>

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/img/ins/2.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/ins/3.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/ins/4.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/ins/5.png" alt="Fourth slide">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            
        </div>
      

    </section><!-- End Register Section -->
    <section id="howtoreport">
    <div class="section-header">
          <h2>HOW TO REPORT?</h2>
          <p>Steps to follow to report.</p>
    </div>
    <div class="">
    <center> 
      <img class="d-block w-50" src="assets/img/ins/report-ins.png" alt="Fifth slide" >
      </center>
        </div>
</section>

   

    <!-- ======= Speakers Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>ORGANIZATIONAL CHART</h2>
          <p>Here are some of our beloved barangay officials</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/p-icon.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Official</a></h3>
                <p>Position</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/p-icon.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
              <h3><a href="speaker-details.html">Official</a></h3>
                <p>Position</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/p-icon.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
              <h3><a href="speaker-details.html">Official</a></h3>
                <p>Position</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/p-icon.jpg" alt="Speaker 4" class="img-fluid">
              <div class="details">
              <h3><a href="speaker-details.html">Official</a></h3>
                <p>Position</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/p-icon.jpg" alt="Speaker 5" class="img-fluid">
              <div class="details">
              <h3><a href="speaker-details.html">Official</a></h3>
                <p>Position</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/p-icon.jpg" alt="Speaker 6" class="img-fluid">
              <div class="details">
              <h3><a href="speaker-details.html">Official</a></h3>
                <p>Position</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Speakers Section -->
 
  </main><!-- End #main -->

  
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="assets/img/logobims.png" alt="">
            <p>The general objective of this study was to develop and design BIMS that would help the barangay to monitor and observe the status of 
              complained cases filed in their barangay would result in an efficient implementation of peace and order in the barangay.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Barangay 386 Zone 39 District III<br>
              Quaipo Manila<br>
              Philippines <br>
              <strong>Phone:</strong> +639 0921-3981-287<br>
              <strong>Email:</strong> brgy386@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              
              
            </div>

          </div>

        </div>
      </div>
    </div>

    
  </footer><!-- End  Footer -->
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
