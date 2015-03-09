<div class="row" id="video_blog_content">
  <div class="col-lg-6 col-xs-12" id="blog">
    <h1>Rachel’s Blog </h1>
    <?php
      $request_url = "http://mipops.tumblr.com/api/read?type=post&start=0&num=1";
      $xml = simplexml_load_file($request_url);
      $title = $xml->posts->post->{'regular-title'};
      $post = $xml->posts->post->{'regular-body'};
      $link = $xml->posts->post['url'];
      $small_post = substr($post,0,320);
      echo '<h4>'.$title.'</h4>';
      echo '<p>'.$small_post.'</p>';
      echo "…";
      echo "</br><a target=frame2 href='http://mipops.tumblr.com/'>Read More</a>"; 
    ?>
  </div>
  <div class="col-lg-5 col-lg-offset-1 col-xs-12" id="video">
    <div class="col-lg-10 col-lg-offset-2">
        <iframe src="https://archive.org/embed/GhostsTrailer1" width="320" height="240" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen></iframe>
      <p>Featured Member Video: ghosts</p>
    </div>
  </div>
</div>

