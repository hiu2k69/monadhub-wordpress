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
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <?php

  // Default values
  $default_description = 'Welcome to Monadhub.xyz. At MonadHub, you can explore in-depth articles, stay updated with the latest news, and discover exciting projects within the Monad community.';
  $default_image = get_template_directory_uri() . '/assets/images/favicon.png';
  $site_name = get_bloginfo('name');
  
  // Initialize variables for meta tag values
  $meta_title = $site_name;
  $meta_description = $default_description;
  $meta_url = home_url();
  $meta_image = $default_image;
    $title = "Home";

    $current_page_url = get_permalink();
    $current_page_path = str_replace(
        "/",
        "",
        parse_url($current_page_url, PHP_URL_PATH)
    );
    $category = get_category_by_slug($current_page_path);

    $cat_title = null;
    $image = null;
    $desc_cat = null;
    $img_cat = [
            "monad-learning" => "https://monadocs.xyz/wp-content/uploads/2024/08/homepage_monadlearn.png",
            'monad-ecosystem' =>  "https://monadocs.xyz/wp-content/uploads/2024/08/homepage_monad-eco.png",
            'community-news' =>  get_template_directory_uri() . "/assets/images/3.png",
            'community-culture' =>  "https://monadocs.xyz/wp-content/uploads/2024/08/homepage_Community-culture.png",
            'how-to-contribute' =>  "https://monadocs.xyz/wp-content/uploads/2024/08/homepage_contribute.png",
            'artists-and-gallery' =>  "https://monadocs.xyz/wp-content/uploads/2024/08/homepage_Artists-and-Arts.png",
            'team-members' =>  "https://monadocs.xyz/wp-content/uploads/2024/08/homepage_Monad-team-members.png",
            'monacomics' =>  get_template_directory_uri() . "/assets/images/8.png",
            'monad-media-kit' =>  get_template_directory_uri() . "/assets/images/9.png",
            'faqs' =>  "https://monadocs.xyz/wp-content/uploads/2024/08/homepage_faq.png",
        ];
if ($category) {
    $title = $category->name;
    $cat_title = $title;
    $image = $img_cat[$category->slug];
    $desc_cat = $category->description;
}
    global $wp_query;
    $post_slug = $wp_query->query_vars['custom_post_slug'];

    $post = get_page_by_path($post_slug, OBJECT, 'post');

    if ($post) {
        $post_slug = get_post_field('post_name', get_the_ID());
        $meta_title = get_the_title();
        $meta_description = wp_trim_words(get_the_excerpt(), 55) ?: $default_description;
        $meta_url = esc_url(home_url('/detail/')).$post_slug;
        $meta_image = get_the_post_thumbnail_url(get_the_ID()) ?: $default_image;
      }
  ?>

  <title><?php echo $title ?> - <?php bloginfo('name'); ?></title>

  <!-- Open Graph meta tags -->
  <meta property="og:title" content="<?php echo ($cat_title) ? $cat_title : esc_attr($meta_title); ?>" />
  <meta property="og:description" content="<?php echo $desc_cat ? $desc_cat : esc_attr($meta_description); ?>" />
  <meta property="og:image" content="<?php echo $image ? $image : esc_url($meta_image); ?>" />
  <meta property="og:url" content="<?php echo esc_url($meta_url); ?>" />
  <meta property="og:type" content="article" />

  <!-- Twitter Card meta tags -->
  <meta name="twitter:title" content="<?php echo ($cat_title) ? $cat_title : esc_attr($meta_title); ?>" />
  <meta name="twitter:description" content="<?php echo $desc_cat ? $desc_cat : esc_attr($meta_description); ?>" />
  <meta name="twitter:image" content="<?php echo $image ? $image : esc_url($meta_image); ?>" />
  <meta name="twitter:card" content="summary_large_image" />

  <!-- Favicon -->
  <link rel="icon" href="<?php echo esc_url($default_image); ?>">

  <?php wp_head(); ?>
</head>




<style>
    .main-navigation .menu li a:hover {
        color: #836EF9;
        text-decoration: underline !important;
    }


    .main-navigation .menu li a.active {
        color: #836EF9;
    }
    html,body{
        overflow-x: hidden;
    }
</style>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="masthead" class="site-header-">
        <div class="header-container">
            <div class="site-branding">
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/monad.png" alt="Logo">
                </a>
            </div>
            <span id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa-solid fa-bars"></i></span>
            <nav id="site-navigation" class="main-navigation">
                <ul  class="menu">
                    <li><a href="<?php echo home_url(); ?>" class="item-nav active">Home</a></li>
                    <li><a href="<?php echo home_url('/monad-learning'); ?>" class="item-nav">Monad Learning</a></li>
                    <li><a href="<?php echo home_url('/community-culture'); ?>" class="item-nav">Community Culture</a></li>
                    <li><a href="<?php echo home_url('/news'); ?>" class="item-nav">News</a></li>
                    <li><a href="<?php echo home_url('/about-monadhub'); ?>" class="item-nav">About MonadHub</a></li>
                </ul>
            </nav>
            <nav id="site-navigation-mobile" class="main-navigation-mobile">
                <ul id="primary-menu" class="menu-mobile">
                    <div class="position-relative px-3 my-3">
                        <form id="search-form-mobile" action="<?php echo  home_url("/") ?>" method="get">
                                 <span id="click-search-mobile" class="position-absolute cursor-pointer left-mobile-2 top-1/2 transform -translate-y-1/2 text-white">
                                    <img aria-hidden="true" alt="search" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" class="icon" />
                                 </span>
                                 <input type="text" placeholder="Search" id="search-input-mobile" class="focus:outline-none" />
                        </form>
                    </div>
                    <?php 
                    $current_page_url = get_permalink();
                    $current_page_path = str_replace(
                       "/",
                       "",
                       parse_url($current_page_url, PHP_URL_PATH)
                    );
                    $categories = get_terms([
                  "taxonomy" => "category",
                  "hide_empty" => false,
                  "orderby" => "term_id",
                  "order" => "ASC",
               ]);
               foreach($categories as $category){
                $image_url = z_taxonomy_image_url($category->term_id);
                $cate = get_term_by("id", $category->term_id, "category");
                $count_post = $cate->count;
                $active = $category->slug == $current_page_path ? "active" : "";
                $data_target = esc_attr($category->slug);

                if ($image_url) {
                   echo '<a class=" gap-05 ' .
                      $active .
                      '" href="' .
                      home_url("/" . $category->slug . "") .
                      '" data-target="' .
                      $data_target .
                      '"><img src="' .
                      esc_url($image_url) .
                      '" alt="" class="img-cate"><h2 class="name-title active ml-again">' .
                      $category->name .
                      '</h2>
                 </a>';
                } else {
                   echo '<a class=" gap-05 ' .
                      $active .
                      '" href="' .
                      home_url("/" . $category->slug . "") .
                      '" data-target="' .
                      $data_target .
                      '"><img src="' .
                      get_template_directory_uri() .
                      '/assets/images/Community-News.svg" alt=""><h2 class="name-title ml-5 ml-again">' .
                      $category->name .
                      "</h2></a>";
                }
               } ?>
                </ul>
            </nav>
        </div>
    </header>
    <main id="main" class="site-main">