<?php 
/*
This code was put here to keep the 404.php file clean and to separate the functions from the presentation code.
*/

function frl_get_requested_slug(){
  global $wp;
  $q = $wp->request;
  $q = preg_replace("/(\.*)(html|htm|php|asp|aspx)$/","",$q);
  $parts = explode('/', $q);
  $q = end($parts);
  return $q;
}
function frl_list_posts($posts){
  if(empty($posts))
  return '';
  $list = array();
  foreach($posts as $cpost) {
    $title = apply_filters('the_title', $cpost->post_title);
    $url = get_permalink($cpost);
    $list[] = "<li><a href='{$url}'>{$title}</a></li>"; 
  }
  return implode('', $list);
}
function frl_load_error_style(){
  if(!is_404())
  return;
  $src = get_template_directory_uri().'/css/error-style.css';
  wp_enqueue_style('error-style', $src);
}
?>
<!-- Message -->
<h2>404: Page not found</h2>
<div class="message not-found">
<p>Sorry, unfortunately, we could not find the requested page.</p>
<p>Let's find the information you need.</p>
</div>
<!-- Did you mean -->
<?php 
$q = frl_get_requested_slug();
$args = array(
  'post_type' => 'any',
  'post_status' => 'publish',
  'name' => $q,
  'posts_per_page' => 5
);
$query = new WP_Query($args); //query posts by slug
if(empty($query->posts)){ //search for posts
  $q = str_replace('-', ' ', $q);
  $args = array(
    'post_type' => 'any',
    'post_status' => 'publish',
    's' => $q,
    'posts_per_page' => 5
  );
  $query->query($args); 
}
if(!empty($query->posts)):
  ?>
  <h4>Were you looking for the one of the following pages?</h4>
  <ul class="posts-list">
  <?php echo frl_list_posts($query->posts);?>
  </ul>
<?php endif;?>
<!-- Recent content -->
<?php 
$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 5
);
$query->query($args);
if(!empty($query->posts)):
  ?>
  <h4>Why not take a look through the most recent posts?</h4>
  <ul class="posts-list">
  <?php echo frl_list_posts($query->posts);?>
  </ul>
<?php endif;?>

<!-- Search options -->
<?php $home_link = home_url(); ?>
<h4>No good?</h4>
<p>Please use the search form to try again or start browsing from the <a href='<?php echo $home_link;?>'>Homepage</a>.</p>
<?php get_search_form();?>