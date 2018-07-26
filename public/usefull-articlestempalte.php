<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 
 /* Template Name: usefull article template  */

get_header(); ?>

<?php $icon = 54 ?>

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
		<div class="col-lg-12">
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
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 _blog_leftsection blog-left-section">
		<div class="">
			<?php
						
						query_posts(array(
						'showposts' => 500,
						'category_name' => 'featured' //You can insert any category name
					));
					if (have_posts()) : while (have_posts()) : the_post();
						?> 
				
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 blog-post">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-1 featured-image">
					<img src="<?php echo $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 _p_0">
					<h6><span>by</span> <?php the_author_posts_link(); ?>  <span>in</span> <a href="<?php echo the_permalink(); ?>"><?php the_category(', ') ?></a></h6>
					<h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php $content = get_the_content(); echo substr($content, 0, 140);?>...</p>
					<a href="<?php echo the_permalink(); ?>"><button class="btn btn-default" type="submit">Read More</button></a>
				</div>
			</div>
			

			<?php
							endwhile;
							endif;

							// Reset Query
							wp_reset_query();
							?>
			





			
			
		</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 _blog_rightsection blog-right-section">
		
			<?php dynamic_sidebar("  sidebar-1 "); ?>
			
	
		</div>
		</div>
	</div>
</div>


	

<?php// get_sidebar(); ?>
<?php get_footer(); ?>
