<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fullmotion
 */

?>

<!DOCTYPE HTML>
<!--
	Full Motion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html <?php language_attributes(); ?>>

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head();?>
</head>

<body id="top" <?php body_class();?>>



    <!-- Banner -->
    <!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
    <section id="banner" data-video="<?php echo get_template_directory_uri().'/images/banner';?>">
        <div class="inner">
            <header>
                <h1><?php bloginfo("name"); ?></h1>
                <p><?php bloginfo("description"); ?></p>
            </header>
            <a href="#main" class="more">Learn More</a>
        </div>
    </section>
