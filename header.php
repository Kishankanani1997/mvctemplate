<?php
  $mainurl="http://localhost/kishan/Module_4/Advancephp8/mvc-app/Logis/";
  $baseurl="http://localhost/kishan/Module_4/Advancephp8/mvc-app/Logis/assets/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kishan MVC Template Integration</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $baseurl; ?>img/favicon1.png" rel="icon">
  <link href="<?php echo $baseurl; ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo $baseurl; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl; ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo $baseurl; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl; ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl; ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl; ?>vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo $baseurl; ?>css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?php echo $mainurl;?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Logis</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo $mainurl; ?>" class="active">Home</a></li>
          <li><a href="<?php echo $mainurl; ?>About-Us">About</a></li>
          <li><a href="<?php echo $mainurl; ?>Our-Services">Services</a></li>
          <li><a href="<?php echo $mainurl; ?>Our-Pricing">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="<?php $mainurl; ?>Contact-Us">Contact</a></li>
          <li><a class="get-a-quote" href="<?php echo $mainurl; ?>Get-A-Quote">Get a Quote</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
   <a href="" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo $baseurl; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $baseurl; ?>vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo $baseurl; ?>vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo $baseurl; ?>vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo $baseurl; ?>vendor/aos/aos.js"></script>
  <script src="<?php echo $baseurl; ?>vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo $baseurl; ?>js/main.js"></script>

</body>
</html>
