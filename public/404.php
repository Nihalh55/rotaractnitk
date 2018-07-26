<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<?php
$type = 'banner';
$args=array(
  'post_type' => $type,
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1);

$my_query = null;
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); ?>
  <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<div class="top-header parallax" style="background-image:url(<?php echo $feat_image ?>">
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="banner-content main-page">
	<div class="title"><?php the_title(); ?></div>
	<div class="subtitle"><?php the_excerpt(); ?></div>
  </div>
	
</div>
</div>
</div>
</div>
	<?php
  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 page">
	

	
			
					
				

			
				     <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'avalon' ); ?></h1>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'avalon' ); ?></p>

					<?php get_search_form(); ?>
			


	</div>
	</div>
	</div>


<?php get_footer(); ?>
