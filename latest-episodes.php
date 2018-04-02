<div class="container">
  <div class="row latest-episodes">

    <h2>Latest Episodes</h2>
<?php
  $args = array(
    'numberposts' => 6
  );

  function get_custom_field($field_name, $Id){
    return get_post_meta($Id, $field_name, true);
  }
?>
    
<?php
  $recent_posts = wp_get_recent_posts($args, ARRAY_A);
    foreach( $recent_posts as $recent ) {
      echo '<div class="col-md-2 col-sm-3 col-xs-4 mini-episode"><div class="latest-ep-avatar"><img src="' .get_custom_field('episode_avatar_img', $recent["ID"]).'"></div><span class="badge">' .get_custom_field('episode_number', $recent["ID"]).'</span><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </div> ';
    }
  wp_reset_query();
?>   
  </div>
  <hr class="dashed">
</div>

