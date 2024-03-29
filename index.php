<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendors/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/css/slick.css" type="text/css" /> 
    <link rel="stylesheet" href="vendors/css/templatemo-style.css">
<!--
    
TemplateMo 560 Astro Motion

https://templatemo.com/tm-560-astro-motion

-->
</head>
<body>
    <video autoplay muted loop id="bg-video">
        <source src="video/gfp-astro-timelapse.mp4" type="video/mp4">
    </video>
    <div class="page-container">
      <?php
      include_once 'header.php';
      ?>
      <div class="container-fluid tm-content-container">
        <div class="cd-hero-slider mb-0 py-5">
          <?php
          include_once 'main.php';
          ?>
        </ul>
    </div>
    <?php
    include_once 'footer.php';
    ?>
  </div>
  <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
  <div id="loader-wrapper">            
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>  
  <script src="vendors/js/jquery-3.5.1.min.js"></script>
  <script src="vendors/js/bootstrap.min.js"></script>
  <script src="vendors/js/slick.js"></script>
  <script src="vendors/js/templatemo-script.js"></script>
</body>
</html>