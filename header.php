<?php
/*
  WPDEVELOPERTHEME HELP: BOOSTRAP EXAMPLE
  <div class="container"> or container-fluid
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        </div>
    </div>
  </div>
*/
wp_head();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_url')?>/img/favicon.ico" />
</head>
<body <?php echo $body_class; ?>>
<header>
  <!-- Menu Primary with Bootstrap -->
    <nav class="collapse navbar-collapse bs-navbar-collapse">
        <?php wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_id' => 'primary-menu',
            'menu_class' => 'nav navbar-nav',
            'container'       => false,
            'items_wrap'      => '<ul id="%1$s" class="%2$s nav">%3$s</ul>',
            'walker'          => new wp_bootstrap_navwalker
        ) );
        ?>
    </nav>
</header>
