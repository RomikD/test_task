<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test_task
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header>
        <div class="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <p>Have any question?</p>
                    </div>
                    <div class="col-lg-4 offset-lg-6 contact-block-right">
                        <a href="mail:contact@mail.com"><i class="far fa-envelope"></i><span>contact@mail.com </span></a>
                        <a href="tel:+080 0444 333 444"><i class="fas fa-phone-volume"></i><span>+080 0444 333 444 </span></a>
                    </div>

                </div>
            </div>
        </div>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="<?php echo esc_url(home_url('/')); ?> " rel="home">
                                <img src="/wp-content/uploads/2019/10/logo.png" alt="logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-6 main-menu">
                         <nav id="site-navigation" class="main-navigation">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                ) );
                                ?>
                         </nav><!-- #site-navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header>

	<div id="content" class="site-content">
