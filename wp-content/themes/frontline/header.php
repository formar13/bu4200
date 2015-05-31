<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.css">
	<?php wp_head(); ?>
</head>
<body>
<header class="navbar-inverse">
    <div class="container">

        <nav class="navbar-static">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo get_option('home'); ?>">
                        <img alt="Frontline Academy" src="<?php bloginfo('template_url'); ?>/images/logo.png" height="50px">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <?php /* Primary navigation */
                    wp_nav_menu( array(
                            'menu' => 'top_menu',
                            'depth' => 2,
                            'container' => false,
                            'menu_class' => 'nav navbar-nav',
                            //Process nav menu using our custom nav walker
                            'walker' => new wp_bootstrap_navwalker())
                    );
                    ?>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</header>