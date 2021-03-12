<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
    
  </head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="cover" style="position: fixed; height: 100%; width: 100%; top:0; left: 0; background: #fff; z-index:9999;"></div>
    <div class="page-container">
    <header>
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php
        $blog_description = get_bloginfo( 'description', 'display' );
        if ( $blog_description ) : ?>
            <p class="site-description"><?php echo $blog_description; ?></p>
        <?php endif; ?>

          <?php
            wp_nav_menu(
              array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary'
              )
            );
          ?>

        </header>