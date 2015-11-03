<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contact - MIPoPS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "_/php/bootstrap.php"; ?>
</head>
<body>
  <div class="full-width"> 
    <div class="container">
    <?php include "_/php/header.php"; ?>
    <?php include "_/php/top_bar.php"; ?> 
    </div><!-- container -->
  </div><!-- full-width-->
  <section class="container">
    <div class="spacing"></div>
    <div class="row border" id="contact">
      <div class="col-lg-6 col-xs-12" id="address">
        <h3>You can contact MIPoPS by e-mailing <a href="mailto:info@mipops.org">info@mipops.org</a></h3>
        <h3>MIPoPS is located on third floor of Seattle City Hall</h3>
        <p><i>Seattle City Hall Suite 300<br />600 Fourth Ave.<br />Seattle, WA 98104</i></p>
      </div>
      <div class="col-lg-6 col-xs-12 Flexible-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10760.574681776969!2d-122.329844!3d47.603896!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad777eeba185ebef!2sSeattle+City+Hall!5e0!3m2!1sen!2sus!4v1433438329685" width="500" height="370" frameborder="0" style="border:0" id="map_iframe"></iframe>
      </div>
    </div><!-- row -->
    <?php include "_/php/footer.php"; ?>
  </section><!-- container -->
  <?php include "_/php/javascript.php"; ?>
</body>
</html>
