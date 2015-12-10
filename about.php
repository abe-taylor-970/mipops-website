<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>About Us - MIPoPS</title>
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
  <div class="container">
    <div class="spacing"></div>
    <div class="row border type2" id="about">
      <h1>About Us</h1>
      <br />
      <div id="mission-in-about">
        <h3 class="inline">Mission:</h3>
        <h4 class="inline"><?php include "_/php/mission.php"; ?></h4>
      </div>
      <br />
      <p>Moving Image Preservation of Puget Sound (MIPoPS) supports video tape digitization and preservation by archives, museums, libraries, historical societies, science and art organizations, and related institutions that have analog video in their collections but have neither the resources nor expertise to address it. Because most institutions no longer possess video tape decks, they might not be able to identify the content of their tapes. MIPOPS provides guidance in identifying tape format, content and  condition and will advise on known, format-specific preservation issues. Based on this initial evaluation, MIPOPS can help determine whether use of the MIPOPS transfer station is appropriate for a collection.</p>
      <br />
      <p>MIPoPS can work with a variety of videotape formats including <sup>3</sup>&frasl;<sub>4</sub>" Umatic, VHS, Betacam (SP and Digital), MiniDV, 1", and DVCam. Using the MIPOPS video transfer station, users can create a preservation-quality digital file (ffv1 format, recognized by moving image archivists) and an access copy (mp4).  MIPoPS will advise on maintaining the original material as well as the newly created digital files. Participants will be asked to have at least one migrated video posted to the MIPoPS Internet Archive site.</p>
      <br />
    </div>
    <div class="spacing"></div>
    <div class="row border center type2">
      <h3>MIPoPS Steering Commitee:</h3>
    </div>
    <div class="spacing"></div>
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <div class="col-md-11 border members hidden-small2">
          <h2>Rachel Price</h2>
          <p><i>Executive Director</i></p>
          <p><i>MIPoPS</i></p>
          <p><a href="mailto:rachel@mipops.org">rachel@mipops.org</a></p>
          <img src="img/mipops_logo_small.jpg" alt="MIPoPS logo" class="img-responsive small-height"/>
        </div>
      </div>
      <div class="col-md-6 col-xs-12">
        <div class="col-md-11 col-md-offset-1 border members">
          <h1>Hannah Palin</h1>
          <p><i>Film Archives Specialist</i></p>
          <p><i>University of Washington Special Collections</i></p>
          <p><a href="mailto:hannah@mipops.org">hannah@mipops.org</a></p>
          <a href="http://www.lib.washington.edu/specialcollections">
            <img src="img/uw_libraries.png" alt="University of Washington Libraries" class="img-responsive"/>
          </a>
        </div>
      </div>
    </div><!-- end row -->
    <div class="spacing"></div>
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <div class="col-md-11 border members hidden-small2">
          <h1>Carol Shenk</h1>
          <p><i>County Archivist</i></p>
          <p><i>King County Archives</i></p>
          <p><a href="mailto:carol@mipops.org">carol@mipops.org</a></p>
          <a href= "http://www.kingcounty.gov/depts/records-licensing/archives.aspx">
            <img src="img/king_county.jpg" alt="King County Archives" class="img-responsive small-height"/>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-xs-12">
        <div class="col-md-11 col-md-offset-1 border members">
          <h1>Anne Frantilla</h1>
          <p><i>Deputy City Archivist</i></p>
          <p><i>Seattle Municipal Archives</i></p>
          <p><a href="mailto:anne@mipops.org">anne@mipops.org</a></p>
          <a href= "http://www.seattle.gov/cityarchives/">
            <img src="img/seattle.png" alt="Seattle Archives" class="img-responsive"/>
          </a>
        </div>
      </div>
    </div><!-- end row -->
    <?php include "_/php/footer.php"; ?>
  </div><!-- container -->
  <?php include "_/php/javascript.php"; ?>
</body>
</html>
