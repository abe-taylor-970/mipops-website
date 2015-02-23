<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>MIPOPS website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "_/php/bootstrap.php"; ?>
</head>

<body>
  <div class="container">
     
    <?php include "_/php/header.php"; ?>
    <p> Moving Image Preservation of Puget Sound is a non-profit 501-3© corporation formed to help preserve our cultural
      heritage by assisting archives, libraries, and other organizations and individuals with conversion of analog video re-
      cordings to digital format according to archival best practices.</p>

    <?php include "_/php/boxes_content.php"; ?> 
    <iframe src="https://archive.org/embed/GhostsTrailer1" width="640" height="480" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen></iframe>
    <?php include "_/php/members_content.php"; ?>
    <?php include "_/php/footer.php"; ?>
  </div> <!-- end container -->

  <?php include "_/php/javascript.php"; ?>
</body>
</html>
