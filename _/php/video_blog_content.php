<div class="row" id="video_blog_content">
  <div class="col-lg-6 col-xs-12">
    <h1>Rachel’s Blog </h1>
    <?php
      $request_url = "http://mipops.tumblr.com/api/read?type=post&start=0&num=1";
      $xml = simplexml_load_file($request_url);
      $title = $xml->posts->post->{'regular-title'};
      $post = $xml->posts->post->{'regular-body'};
      $link = $xml->posts->post['url'];
      $small_post = substr($post,0,320);
      echo '<h1>'.$title.'</h1>';
      echo '<p>'.$small_post.'</p>';
      echo "…";
      echo "</br><a target=frame2 href='http://mipops.tumblr.com/'>Read More</a>"; 
    ?>
  </div>
  <div class="col-lg-6 col-xs-12">

    <iframe style="border: 4px solid #000000;" src="https://archive.org/embed/GhostsTrailer1" width="320" height="240" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen></iframe>
  </div>
</div>

