<?php $footer = 67 ?>
<?php $icon = 54 ?>

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="footer-content">
				
				<?php $the_query = new WP_Query( 'pagename=avalon' ); 
				while ( $the_query->have_posts() ) :
					$the_query->the_post(); ?>
					
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
					
					
					<?php endwhile;
					wp_reset_postdata();
					?>
					
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
				<div class="footer-link">
					<ul>
						<?php wp_nav_menu( array('menu' => 'footer-first-menu' )); ?>
					</ul>
				</div>

			</div>
			<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
			<div class="footer-link">
					<ul>
						<?php wp_nav_menu( array('menu' => 'footer-second-menu' )); ?>
					</ul>
				</div>

			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="footer-icon">
						<ul>
							<li><a href="#" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" target="blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" target="blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
							<li><a href="#" target="blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
	
	
	<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="copyright">
				
				<h6>Theme designed by <a href="https://visualhierarchy.co/shop/">Visual Hierarchy</a> and powered by <a href="https://wordpress.org/">WordPress</a></h6>
					
				</div>
			</div>
	</div>
	</div>
</div>



 
 <!-- **
 * ========================================
 * Js
 * ========================================
 * -->

 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
 
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/bootstrap.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/demo.js"></script> <!-- parralax js -->
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/modernizr.js"></script> <!-- parralax js -->
<!-- js -->

<script>
    $(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
    });
</script>

<script>
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});
</script>


<?php wp_footer(); ?>
</body>
</html>
