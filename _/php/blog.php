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
