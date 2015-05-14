<div class="row" id="video_blog_content">
  <div class="col-lg-6 col-xs-12" id="blog">
    <div class="col-xs-12" id="inside-blog">
      <h1>Rachel’s Blog </h1>
      <?php
        $request_url = "http://mipops.tumblr.com/api/read?type=post&start=0&num=1";
        $xml = simplexml_load_file($request_url);
        $title = $xml->posts->post->{'regular-title'};
        $post = $xml->posts->post->{'regular-body'};
        $link = $xml->posts->post['url'];
        $small_post = substr($post,0,500);
        echo '<h4>'.$title.'</h4>';
        echo '<p>'.$small_post.'…'.'</p>';
        echo "<a target=frame2 href='http://mipops.tumblr.com/'>Read More</a>"; 
      ?>
    </div><!-- inside blog -->
  </div><!-- blog-->
  <div class="col-lg-5 col-lg-offset-1 col-xs-12" id="video">
    <div class="col-lg-10 col-lg-offset-2">
<iframe src="https://player.vimeo.com/video/112958248" width="320" height="240" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/112958248">Kingdome Animated Logo</a> from <a href="https://vimeo.com/kcarchives">King County Archives</a>.</p>
    </div>
  </div><!-- end video-->
</div>

