<?php 
// Creating the widget 
class wpb_widget2 extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'wpb_widget2', 

// Widget name will appear in UI
__('Social Icons', 'avalon'), 

// Widget description
array( 'description' => __( 'Cool sidebar social media widget', 'avalon' ), ) 
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
<?php $icon = 54 ?>
<div class="icon col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0  margin-equ">
				<ul>
					<li class="twitter"><a href="#" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li class="facebook"><a href="#" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li class="google-plus"><a href="#" target="blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
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
function wpb_load_widget2() {
	register_widget( 'wpb_widget2' );
}
add_action( 'widgets_init', 'wpb_load_widget2' );
?>