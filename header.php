<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header id="masthead" class="site-header" role="banner">
        <div class="container-fluid clearfix">
            <a class="logo" href="<?php echo home_url(); ?>"> <img
                    src="<?php bloginfo('template_directory') ?>/images/logo.png"/> </a>
            <div class="contact">
                <span> | </span>
                <i class="fa fa-phone"></i>
                <span class="phone"> +9978 8856 999 </span>
            </div>
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <ul>
                    <li><a href="#"><?php _e('Home', 'cornix'); ?></a></li>
                    <li><a href="#about"><?php _e('About', 'cornix'); ?></a></li>
                    <li><a href="#services"><?php _e('Services', 'cornix'); ?></a></li>
                    <li><a href="#news"><?php _e('News', 'cornix'); ?></a></li>
                    <li><a href="#"><?php _e('Blog', 'cornix'); ?></a></li>
                    <li><a href="#from-blog"><?php _e('Pages', 'cornix'); ?></a></li>
                    <li><a href="#contact"><?php _e('Contact us', 'cornix'); ?></a></li>
                </ul>
            </nav><!-- #site-navigation -->
        </div>



    </header><!-- #masthead -->

    <div id="content" class="site-content">
