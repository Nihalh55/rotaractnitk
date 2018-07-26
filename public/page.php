<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>


  <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<div class="top-header parallax" style="background-image:url(<?php echo $feat_image ?>">
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="banner-content page-banner">
	<h1><?php the_title(); ?></h1>
  </div>
	
</div>
</div>
</div>
</div>


	<?php endwhile; ?>
				<!--do not delete-->
				<?php else : ?>
				Not Found
				Sorry, but you are looking for something that isn't here.
				<!--do not delete-->
		<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 _blog_leftsection blog-left-section page">

	<?php if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 blog-post singlepost">
	
		<?php the_content(); ?>
		
	</div>
	   
   <?php endwhile;
	endif;?>
	
		</div>
		
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 _blog_rightsection blog-right-section">
			<?php dynamic_sidebar("  sidebar-1 "); ?>
		</div>
		
	</div>
</div>

	



<?php// get_sidebar(); ?>
<?php get_footer(); ?>