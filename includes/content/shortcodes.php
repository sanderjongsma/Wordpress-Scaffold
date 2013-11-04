<?php

	add_shortcode( 'page_header', 'shortcode_page_header' );

	function shortcode_page_header( $atts, $content = null )
	{
		extract( shortcode_atts( array(
      		'class' 			=> 'blue',
      	), $atts ) );

		ob_start(); ?>

		<!-- page_header_wrap -->

		<div class="bg-wrap">
			<div class="container">
				<?php echo $content; ?>
			</div>
		</div>

		<!-- /page_header_wrap -->

		<?php $output = ob_get_clean(); return $output;
	}