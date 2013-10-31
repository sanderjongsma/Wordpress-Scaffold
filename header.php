<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<title><?php wp_title( '|', true, 'right' ); ?> <?php if( ! defined( 'WPSEO_VERSION' ) ) bloginfo( 'name' ); ?></title>
	
	<?php wp_head(); ?>

	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>

<body <?php body_class( get_theme_mod('scaffold_sidebar') ); ?>>
	
	<!-- BEGIN #wrapper -->
	<div class="wrapper">
		
		<div class="header-wrap">
			<div class="header">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"></a>
						</div>
						<div class="col-md-8">
							<nav class="navbar" role="navigation">
				  				<!-- Brand and toggle get grouped for better mobile display -->
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

				  				<!-- Collect the nav links, forms, and other content for toggling -->
				  				<div class="collapse navbar-collapse navbar-ex1-collapse">
				    				<?php 
						
									wp_nav_menu( array(
										'theme_location'	=> 'primary',
										'container_class'	=> 'primary-menu-container menu-container',
										'container_id'		=> 'primary-menu-container',
										'items_wrap'      	=> '<ul id="%1$s" class="%2$s cleared">%3$s</ul>',
										'depth'           	=> 0,
										'walker'         	=> ''
									) ); 
									
									// OR
									// get_search_form(); 
									
									?>
				  				</div>
							</nav>
							
						</div>
					</div>
					
					
					
					
				</div>
			</div>
		</div>