<?php 
// Creating the widget 
class wpb_widget3 extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'wpb_widget3', 

// Widget name will appear in UI
__('Featured Articles', 'avalon'), 

// Widget description
array( 'description' => __( 'Featured articles widget', 'avalon' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
?>



<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 future-articles hr margin-equ">
			
			  
			
					<?php
						
						query_posts(array(
						'showposts' => 2,
						'category_name' => 'featured' //You can insert any category name
					));
					if (have_posts()) : while (have_posts()) : the_post();
						?> 
						
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-more">
				<div id="effect-1" class="effects clearfix">
				<div class="img">
				
				<center><a href="<?php echo the_permalink(); ?>"><img src="<?php echo $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>"></a></center>
				</div>
				</div>
				<h4><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<h6><?php the_time( get_option( 'date_format' ) ); ?></h6>
				</div>
			    <div class="col-lg-12 post-hr">
				<hr>
			</div>
				
				<?php
							endwhile;
							endif;

							// Reset Query
							wp_reset_query();
							?>

			
			
					
			</div>



<?php

echo __( '', 'avalon' );
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'avalon' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget3() {
	register_widget( 'wpb_widget3' );
}
add_action( 'widgets_init', 'wpb_load_widget3' );
?>