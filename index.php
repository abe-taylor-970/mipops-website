<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moving Image Preservation of Puget Sound</title>
  <?php include "_/php/bootstrap.php"; ?>
  <link rel="stylesheet" type="text/css" href="_/css/mainpage.css">
</head>

<body>
  <div class="full-width"> 
    <div class="container">
      <?php include "_/php/header.php"; ?>
    </div><!-- container -->
  </div><!-- full-width-->
  <div id="hero" class="jumbotron">
    <div id="outside-hero-container">
      <div id="hero-container" class="container">
        <p><?php include "_/php/mission_formatted.php"; ?></p>
      </div>
    </div>
  </div><!-- jumbotron -->    
  </div>
  <div class="container" id="main_container">
    <div class="spacing"></div>
    <?php include "_/php/boxes_content.php"; ?> 
    <div class="spacing"></div>
    <?php include "_/php/video_carousel.php"; ?>
    <div class="spacing"></div>
    <?php include "_/php/testimonials.php"; ?>
    <div class="spacing"></div>
    <?php include "_/php/mission_box.php"; ?>
    <div class="small_spacing"></div>
    <?php include "_/php/4culture.php"; ?>
    <?php include "_/php/footer.php"; ?>
  </div> <!-- end container -->
  <?php include "_/php/javascript.php"; ?>
</body>
</html>
