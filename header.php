<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>

<header class="site-header" id="masterhead">
  <div class="container site-header-container">
    <div class="row site-row">
      <div class="col-lg-12">
        <div class="site-branding-wrapper">
            <?php if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title-link">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
            <?php else : ?>
                <h1 class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title-link">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
            <?php endif; 
                // site description assigning to a variable.
                $description = get_bloginfo( 'description', 'display' ); if ( $description || is_customize_preview() ) : 
            ?>
                <h5 class="site-description">
                    <?php echo $description; ?>
                </h5>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</header>
<nav class="navbar navbar-expand-lg navbar-light wpdevtheme-custom-bg shadow" role="navigation">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'navbar-nav mr-auto',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
	</div>
</nav>
<div class="container site-container">