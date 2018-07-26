<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

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
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 _blog_leftsection blog-left-section">
		<div class="">
		<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
				
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 blog-post">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-1 featured-image">
					<a href="<?php echo the_permalink(); ?>"><img src="<?php echo $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>"></a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 _p_0">
					<h6><span>by</span> <?php the_author_posts_link(); ?>  <span>in</span> <a href="<?php echo the_permalink(); ?>"><?php the_category(', ') ?></a></h6>
					<h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php $content = get_the_content(); $content = strip_tags($content); echo substr($content, 0, 140);?>...</p>
					<a href="<?php echo the_permalink(); ?>"><button class="btn btn-default" type="submit">Read More</button></a>
				</div>
			</div>
			
<?php endwhile; ?>
					<!--do not delete-->
					<?php else : ?>
					Not Found
					Sorry, but you are looking for something that isn't here.
					<!--do not delete-->
					<?php endif; ?>
			
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 pagination">
			
		
			<div class="post-navigation author-navigation">
			<?php
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'prev', 'avalon' ),
				'next_text'          => __( 'Next', 'avalon' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'avalon' ) . ' </span>',
			) );?>
			</div>

			</div>

		



			
			
		</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 _blog_rightsection blog-right-section">
			<?php dynamic_sidebar("  sidebar-1 "); ?>
		</div>
		</div>
	</div>
<?php get_footer(); ?>
