<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>MIPoPS website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "_/php/bootstrap.php"; ?>
</head>

<body>
  <div class="container-fluid" id="top_container_fluid">
    <?php include "_/php/header.php"; ?>
    <?php include "_/php/top_bar.php"; ?> 
  </div>

  <div class="container-fluid" id="non_profit_text">
    <div class="container">
      <p>Moving Image Preservation of Puget Sound is a non-profit 501-3© corporation formed to help preserve our cultural heritage by assisting archives, libraries, and other organizations and individuals with conversion of analog video recordings to digital format according to archival best practices.</p>
    </div><!-- container -->
  </div><!-- container-fluid-->
  <div class="container" id="main_container">
    <div class="spacing"></div>
    <?php include "_/php/boxes_content.php"; ?> 
    <?php include "_/php/video_blog_content.php"; ?>
    <div class="spacing"></div>
    <?php include "_/php/members_content.php"; ?>
    <div class="row">
      <div class="col-xs-12">
        <img src="img/website_under_construction1.png" alt="Website Under Construction" class="img-responsive">
      </div>
    </div>
    <?php include "_/php/footer.php"; ?>
  </div> <!-- end container -->
  <?php include "_/php/javascript.php"; ?>
</body>
</html>
