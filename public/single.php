<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php $icon = 54 ?>

	
  <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

	<div class="top-header parallax top-header-post" style="background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-position:top;background-image: url(<?php echo $feat_image ?>);">
	<div class="overlaybg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				  <div class="banner-content">
					<h2 style="opacity:0.7"><?php the_category(', ') ?> </h2>
					<h1><?php the_title(); ?></h1>
					

				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
	

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 _blog_leftsection blog-left-section">
		<div class="">
			<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
				
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 blog-post singlepost">
				
				
			<?php the_content(); ?>
			<br /><br />
			Written by: <strong><?php the_author(); ?></strong>
			
			</div>
			

				<?php endwhile; ?>
				<!--do not delete-->
				<?php else : ?>
				Not Found
				Sorry, but you are looking for something that isn't here.
				<!--do not delete-->
		<?php endif; ?>
			
			
		</div>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 post-share">
		    
			<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
		
		      <span class="tags-post">
		       <?php the_tags( ' ', '', '' ); ?> 
			   </span>
				
		    <?php endwhile; ?>
				<!--do not delete-->
				<?php else : ?>
				Not Found
				Sorry, but you are looking for something that isn't here.
				<!--do not delete-->
		<?php endif; ?>
				
				
    
       <span class="share-right">
                <a href="http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>" title="Share on Twitter" rel="nofollow" target="_blank"> <button type="button" class="btn btn-info"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</button></a>

                <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><button type="button" class="btn btn-warning"><i class="fa fa-facebook" aria-hidden="true"></i> Share</button></a>
			
			</div>
		</span>	
			
			
			<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					
					<?php
			
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			
			?>
			
			
			 <?php endwhile; ?>
				<!--do not delete-->
				<?php else : ?>
				Not Found
				Sorry, but you are looking for something that isn't here.
				<!--do not delete-->
		<?php endif; ?>
			
		
		
		
		</div>
		
		
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 _blog_rightsection blog-right-section">
			<?php dynamic_sidebar("  sidebar-1 "); ?>
		</div>
			
		</div>
		</div>
		
		
		


<?php get_footer(); ?>
