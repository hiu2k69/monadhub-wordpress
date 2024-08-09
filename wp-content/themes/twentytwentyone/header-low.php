<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css')">

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="masthead" class="site-header-">
    <div class="header-container">
        <div class="site-branding">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/monad.png" alt="Logo">
            </a>
        </div>
        <nav id="site-navigation" class="main-navigation">
            <ul class="menu">
                <li><a href="<?php echo home_url(); ?>">Home11111111</a></li>
                <li><a href="<?php echo home_url('/monad-learning'); ?>">Monad Learning</a></li>
                <li><a href="<?php echo home_url('/community-culture'); ?>">Community Culture</a></li>
                <li><a href="<?php echo home_url('/news'); ?>">News</a></li>
                <li><a href="<?php echo home_url('/about-monadhub'); ?>">About MonadHub</a></li>
            </ul>
        </nav>
    </div>
</header>
<main id="main" class="site-main">