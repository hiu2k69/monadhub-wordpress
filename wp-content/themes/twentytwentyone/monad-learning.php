<?php

/**
 * Template Name: monad-learning
 */

// Exit if accessed directly.
if (!defined("ABSPATH")) {
   exit();
}

get_header();
?>
<style>
   @media only screen and (min-width: 1920px) {
      .col-lg-2.col-md-3 {
         position: fixed;
         top: 6.5%;
      }

      .gap-05 {
         gap: 0.5rem;
         padding: 8px 54px !important;
      }

      h2.name-title.ml-5 {
         font-size: 17px !important;
         font-family: 'seguisb.ttf';

      }

      /* .col-lg-9.col-md-9 {
        margin-left: 28.66667%;
        padding-left: 20px;
    } */

   }
   @media only screen and (min-width: 992px) and (max-width: 1779px) {
    h2.name-title.ml-5 {
        font-size: 13px; /* Adjust as needed */
    }
    .container.box-last- {
        margin-left: 18%; /* Adjust as needed */
    }
    .tab-content.mt-5 {
        width: 100%; /* Adjust as needed */
        margin-top: 6rem; /* Adjust as needed */
    }
    .col-lg-9.col-md-12 {
        margin-left: 22%;
        padding-left: 18px;
    }
    .gap-05 {
        gap: 0.5rem;
        padding: 8px 46px !important;;
    }
    .col-lg-2.col-md-3 {
        position: fixed;
        top: 10%;
    }
    .container.box-last- {
        margin-left: 0%;
}
    .main-navigation .menu {
    list-style: none;
    display: flex;
    gap: 4.5rem;
    margin: 0;
    padding: 0;
}


}

   @media only screen and (min-width: 1780px) and (max-width: 1919px) {
      h2.name-title.ml-5 {
         font-size: 15px;
         font-family: 'seguisb.ttf';

      }

      .container.box-last- {
         margin-left: 21% !important;
      }

      /* .col-lg-9.col-md-9 {
        margin-left: 24.66667%;
        padding-left: 20px;
    } */
      .gap-05 {
         gap: 0.5rem;
         padding: 8px 52px !important
      }

      .col-lg-2.col-md-3 {
         position: fixed;
         top: 8.5%;
      }
   }


   img[src*="Writer.svg"] {
      filter: invert(52%) sepia(67%) saturate(1981%) hue-rotate(213deg) brightness(103%) contrast(99%);
      width: 17px;
      margin-bottom: 1px;
   }

   .purple-icon {
      filter: invert(52%) sepia(67%) saturate(1981%) hue-rotate(213deg) brightness(103%) contrast(99%);
   }

   .box-por {
      display: flex;
      align-items: center;
   }

   footer.bg-black.text-white.py-4.flex.items-center.justify-center.space-x-4.relative {
      height: 41px;
   }

   .header-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 100%;
      margin: 0 auto;
      padding: 0 2rem;
      width: 100%;
      box-sizing: border-box;
   }

   nav#site-navigation {
      position: absolute;
      right: 18%;
   }

   a.see-more img {
      width: 25px !important;
   }

   box.disclaimer {
      text-align: center;
      justify-content: center;
      margin-left: 23px;
      align-content: center;
      align-self: center;
      justify-items: center;

   }

   .img-team {
        transition: transform 0.3s ease-in-out;
    }

    .img-team:hover  {
        transform: scale(1.1); 
    }

   h2.name-title.ml-5.art {
      margin-left: 23px;
      font-family: 'seguisb.ttf';

   }

   .ml-5 {
      margin-left: 0 !important;
   }

   /* // */

   .box-last {
      transition: box-shadow 0.3s;
      border-radius: 10px !important;
   }

   input#search-input {
      /* background-color: black; */
      color: white;
      /* border-radius: 9999px; */
      padding-left: 57px;
      padding-right: 40px;
      /* padding-top: 8px; */
      padding-bottom: 8px;
      outline: none;
      box-shadow: none;
   }

   .text-center.just-content-center.box-social.flex.space-x-2 {
      justify-content: center;
   }

   td.py-3.px-4 {
      border: none;

      border-bottom: 1px solid #836EF9;
   }

   td.py-3.px-4:first-child {
      border-left: 1px solid #836EF9;
   }

   td.py-3.px-4:last-child {
      border-right: 1px solid #836EF9;
   }

   th.py-3.px-4 {
      border-top: 1px solid #836EF9;
      border-bottom: 1px solid #836EF9;
      border-right: none;
   }



   table td,
   table th,
   .wp-block-table td,
   .wp-block-table th {
      padding: calc(0.5* var(--global--spacing-unit));
      border: none;
   }

   .mt-4.p-content.text-lg.text-white.italic.color-content img {
      width: 100%;
      color: white;
   }

   .mt-4.p-content.text-lg.text-white.italic.color-content h3,
   .mt-4.p-content.text-lg.text-white.italic.color-content h4,
   .mt-4.p-content.text-lg.text-white.italic.color-content h5 {
      color: #836EF9;
   }

   .mt-4.p-content.text-lg.text-white.italic.color-content li {
      line-height: 3;
      font-size: 25px;
      font-family: 'Calibri';
   }

   th.py-3.px-4:first-child {
      border-left: 1px solid #836EF9;
   }

   th.py-3.px-4:last-child {
      border-right: 1px solid #836EF9;
   }

   .box-last:hover {
      box-shadow: 0 0 20px #5A3DFF;
   }

   .box-content-t1 {
      margin-left: 10px !important;
   }

   input.bg-black.text-white.rounded-full.pl-4.pr-10.py-2.focus\:outline-none {
      width: 350px;
      border: none;
      border-radius: 20px;
   }

   .right-3 {
      right: 19.75rem;
   }

   .img-cate {
      width: 21px;
      /* height: 25px; */
      /* margin-bottom: 8px; */
      object-fit: cover;
   }

   .color-content p {
      color: #D4D4D4;
      line-height: 2;
   }

   .gap-05 {
      gap: 0.5rem;
      padding: 6px 54px;
   }


   .home-title {
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 1;
      -webkit-box-orient: vertical;
   }

   .home-title-artist {
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 1;
      -webkit-box-orient: vertical;
      font-size: 1.25rem !important;
   }

   .home-content {
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
   }

   .home-content-artist {
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      font-size: 0.875rem !important;
   }

   .box-content {
      margin: 0;
      background: #090909;
      padding: 6px;
      border-radius: 6px;
      border-left: none !important;
   }

   .box-content-artist {
      margin: 0;
      background: #090909;
      padding: 6px;
      border-radius: 6px;
      border-left: none !important;
   }

   .box-image-last {
      width: 150px;
      object-fit: cover;
      transition: all .2s ease-in-out;

   }

   .box-image-last:hover {
      transform: scale(1.2);
   }

   img.icon-title {
      width: 29px;
      margin-right: 6px;
      height: 30px;
      margin-top: 1px;
   }

   .color-content p,
   .color-content ul li,
   .color-content h1,
   .color-content h2,
   .color-content h3,
   .color-content h4 {
      font-size: 18px;
      color: white !important;
   }

   .content-comingsoon {
      height: 50vh;
      position: relative;
   }


   .box-bottom.d-flex.mt-2 img {
      width: 24px;
      margin-left: 11px;
   }

   .fixed-footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      z-index: 1000;
   }

   /* Fixed sidebar styling */
   .col-lg-2.col-md-3 {
      position: fixed;
      top: 6.5%;
      left: -1.7%;
      width: 16.66667%;
      /* Ensure this is the width of col-lg-2 (2/12 of the grid) */
      height: calc(100vh - 10.5%);
      /* Adjust height based on top position */
      display: flex;
      flex-wrap: wrap;
      align-items: baseline;
      justify-content: center;
      flex-direction: column;
      z-index: 1;
   }


   .col-lg-9.col-md-12 {
      margin-left: 16.66667%;
      /* Space for fixed sidebar */
      padding-left: 20px;
      /* Additional space between sidebar and content */
   }



   header#masthead {
      width: 100%;
      background-color: #000;
      padding: 1rem 0;
      box-sizing: border-box;
      position: fixed;
      z-index: 100;
   }

   .pt-10 {
      padding-top: 10rem;
   }

   .tabs {
      width: 100%;
      display: block;
   }

   .tab-links:after {
      display: block;
      clear: both;
      content: '';
   }

   ul.tab-links {
      margin-bottom: 30px;
   }

   .tab-links li {
      float: left;
      margin: 0 10px 0 0;
      list-style: none;
   }

   .tab-links a {
      font-family: 'Calibri';
      /* padding: 9px 15px; */
      display: inline-block;
      border-radius: 3px 3px 0 0;
      /* background: #7FB5DA; */
      font-size: 20px;
      font-weight: 600;
      color: #949494;
      transition: all linear 0.15s;
      /* border-bottom: 3px solid #836EF9; */
      font-weight: bold;
   }

   .tab-links a:hover {
      /* background: #a7cce5; */
      text-decoration: none;
   }

   /* .tab-content {
    padding: 15px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,0.15);
    background: #fff;
} */

   .tab-post {
      display: none;
   }

   .tab-post.active {
      display: block;
   }

   .tab-links li.active a {
      color: #836EF9;
      border-bottom: 3px solid #836EF9;
   }

   .box-content-main {
      transition: box-shadow 0.3s;
   }

   .box-content-main:hover {
      box-shadow: 0 0 20px #5A3DFF;
   }

   .box-content-main {
      background-color: #1b1b1b;
      overflow: hidden;
      color: #fff;
      font-family: 'mona-font', sans-serif !important;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      position: relative;
      border-radius: 10px;
      margin-bottom: 1.5rem;
   }

   .image-home {
      width: 100%;
      height: 260px !important;
      object-fit: cover;
   }

   .image-home-artist {
      width: 100%;
      height: 210px !important;
      object-fit: cover;
   }

   a.artist {
      color: #836EF9;
   }

   .box-artist {
      background-color: #00FFF2;
      padding: 0.2rem 0.5rem;
      text-align: center;
      font-size: 0.9rem;
      font-weight: bold;
      position: absolute;
      right: 10px;
      top: 220px;
      color: #836EF9;
      font-family: 'Segoe UI';
      border-radius: 20px;
      border: 3px solid #836EF9;
   }

   .box-content {
      padding: 1rem 1rem 1.25rem 1rem;
      height: 140px;
   }

   .box-content-artist {
      padding: 1rem;
      height: 140px;
   }

   .box-content h3 {
      font-size: 1.5rem;
      margin: 0;
      color: #836EF9;
      text-align: left;
      font-family: 'seguisb.ttf';
   }

   .box-content-artist h3 {
      font-size: 1.5rem;
      margin: 0;
      color: #836EF9;
      text-align: left;
      font-family: 'seguisb.ttf';
   }


   .box-content span {
      font-size: 18px;
      color: #836EF9;
      font-family: 'Calibri';
   }

   .box-content-artist span {
      font-size: 18px;
      color: #836EF9;
      font-family: 'Calibri';
   }

   .box-content p {
      margin: 0.5rem 0;
      font-size: 0.9rem;
      color: #949494;
      text-align: left;
      font: normal normal normal 19px / 26px Segoe UI;
      letter-spacing: 0px;
      font-family: 'Segoe UI';
   }

   .box-content-artist p {
      margin: 0.5rem 0;
      font-size: 0.9rem;
      color: #949494;
      text-align: left;
      font: normal normal normal 19px / 26px Segoe UI;
      letter-spacing: 0px;
      font-family: 'Segoe UI';
   }

   .box-content a:hover {
      text-decoration: underline;
   }

   a.tab.gap-05:hover img {
      filter: sepia(1) hue-rotate(203deg) saturate(8) brightness(0.9);
   }

   .tab.active img {
      filter: sepia(1) hue-rotate(203deg) saturate(8) brightness(0.9);
   }

   @media (max-width: 431px) {
      .col-lg-9.col-md-12 {
         margin: 0;
         padding: 0;
      }

      h1.text-3xl.font-bold.text-white {
         font-size: 1.6rem;
      }

      .tab-links {
         margin-left: 1.5rem;
      }

      .box-content-main {
         margin: 10px 10px;
      }

      .box-content p {
         font-size: 1rem;
         margin: 0.5rem 0;
      }

      .image-home,  .image-home-artist{
         height: 200px !important;
      }


      .box-artist {
         top: 160px;
      }

      .mt-5 {
         margin-top: 0.5rem !important;
      }

      h1.text-3xl.pl-3.font-bold.text-white.d-flex {
         margin: 0;
      }

      .flex.justify-between.items-center.mb-4 {
         margin-top: 0.5rem;
      }

      section.learn {
         padding-top: 0 !important;
      }

      .box-image-last:hover {
         transform: none;
      }

      .col-lg-3.col-md-6.col-6 {
   padding: 0;
}

.home-title-artist{
   font-size: 1rem !important;
}

.home-content-artist{
   line-height: 1.3 !important;
}

.box-content-artist{
   height: 115px !important;
}

#result_ajaxp_search{
        padding: 10px;
      }

      .labels{
         flex-direction: column;
         align-items: end !important;
         gap: 0.2rem;
      }
   }

   @media (max-width: 1025px) and (min-width: 431px) {
      .col-lg-9.col-md-12 {
         margin: 0;
         padding: 0;
      }

      h1.text-3xl.font-bold.text-white {
         font-size: 1.6rem;
      }

      .tab-links {
         margin-left: 1.5rem;
      }

      .box-content-main {
         margin: 10px 0;
      }

      .box-content p {
         font-size: 1rem;
         margin: 0.5rem 0;
      }

      .image-home,  .image-home-artist {
         height: 200px !important;
      }

      .box-artist {
         top: 160px;
      }

      .mt-5 {
         margin-top: 0.5rem !important;
      }

      h1.text-3xl.pl-3.font-bold.text-white.d-flex {
         margin: 0;
      }

      .flex.justify-between.items-center.mb-4 {
         margin-top: 0.5rem;
      }

      section.learn {
         padding-top: 0 !important;
      }

      .box-image-last:hover {
         transform: none;
      }

      .d-none-sm {
         display: none !important;
      }

      .col-lg-9.col-md-12.col-sm-12 {
         margin-top: 5rem;
      }

      .box-content h3 {
         font-size: 1.25rem;
      }

      .box-content span {
         font-size: 1rem;
      }



      #result_ajaxp {
         padding: 20px;
      }

     

      .result_ajaxp_type {
         padding: 20px;

      }


   }
   #result_ajaxp_new {
         padding: 0 20px;
      }

   .col-lg-3.col-md-4.col-6 {

      padding: 0;
   }



   @media (min-width: 992px) and (max-width: 1025px) {
      .col-lg-9 {
         width: 100%;
      }

   }

   .div-block-13 {
      text-align: center;
      border: 1px solid #000;
      border-radius: 7px;
      justify-content: flex-start;
      width: auto;
      min-width: 100px;
      height: 100%;
      min-height: 60px;
      margin: 10px 10px;
      padding: 10px 60px;
      display: block;
   }

   .container.add-margin {
      margin-top: 20px;
      margin-bottom: 20px;
   }


   .w-layout-blockcontainer {
      margin-left: auto;
      margin-right: auto;
      display: block;
   }

   .h3-purple-light.no-margin {
      margin-top: 0;
      margin-bottom: 0;
   }

   .h3-purple-light {
      color: #FFFFFF;
      font-weight: bold;
   }

   .h2-eyebrow-purple {
      color: #FFFFFF;
      margin-top: 0;
      margin-bottom: 0;
      font-size: 16px;
      font-weight: 500;
      line-height: 110%;
   }

   .collection-list-2 {
      margin-top: 20px;
   }

   .collection-item {
      text-align: left;
      margin-bottom: 40px;
   }

   .image-7 {
      max-height: 150px;
      padding: 20px 40px;
   }

   .div-block-12 {
      text-align: center;
   }

   a:active,
   a:hover {
      outline: 0;
   }

   .link-block-2 {
      border: 1.5px solid white;
      background-color: rgba(61, 36, 135, .57);
      border-radius: 7px;
     margin: 5px;
      padding-left: 40px;
      padding-right: 40px;
      text-decoration: none;
   }

   .w-inline-block {
      max-width: 100%;
      display: inline-block;
   }

   .asset-dl-text {
      color: #836EF9;
      margin-top: 5px;
      margin-bottom: 5px;
      font-size: 15px;
   }

   .div-block-13 img {

      vertical-align: middle;
      max-width: 100%;
      display: inline-block;
   }

   .labels {
    display: flex;
    align-items: center;
    position: absolute;
    top: 10px;
    right: 5px;
}

.box-new {
    background-color: #FF9900;
    padding: 0.2rem 0.5rem;
    text-align: center;
    font-size: 0.9rem;
    font-weight: bold;
    color: #FFFFFF;
    font-family: 'Segoe UI';
    border-radius: 20px;
    border: 3px solid #FFFFFF;
    margin-right: 5px;
}

.box-artist-new {
    background-color: #00FFF2;
    padding: 0.2rem 0.5rem;
    text-align: center;
    font-size: 0.9rem;
    font-weight: bold;
    color: #836EF9;
    font-family: 'Segoe UI';
    border-radius: 20px;
    border: 3px solid #836EF9;
}

@media (min-width: 1026px) and (max-width: 1550px){
	nav#site-navigation{
		right: 10%;
	}

   .col-lg-2.col-md-3{
      justify-content: start;
   }

   .tab-container{
      padding-top: 60px;
   }

}
</style>

<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>

<section class="learn">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-2 col-md-3 d-none-sm relative  bg-090909">
            <div class="tab-container ">
               <?php

               $coreteam = [
                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_keone.png",
                     'link' => "https://x.com/keoneHD"
                  ],
                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_james.png",
                     'link' => "https://x.com/_jhunsaker"
                  ],
                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_eunice.png",
                     'link' => "https://x.com/0x_eunice"
                  ],
               ];

               $communityteam = [
                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_billmonday.png",
                     'link' => " https://x.com/billmondays"
                  ],
                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_sailornini.png",
                     'link' => "https://x.com/sailorninis"
                  ],
                  [
                     'img' => get_template_directory_uri() . "/assets/images/community-team-card.png",
                     'link' => "https://x.com/opendanny"
                  ],
                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_benads.png",
                     'link' => "https://x.com/be_kindplss"
                  ],
                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_mike.png",
                     'link' => "https://x.com/mikeinweb"
                  ],
                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_kingloui.png",
                     'link' => "https://x.com/KinglouiEth"
                  ],
                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_cryptunez.png",
                     'link' => "https://x.com/cryptunez"
                  ],
                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_gizmo.png",
                     'link' => "https://x.com/gizmoatmidnight"
                  ],
                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_port.png",
                     'link' => "https://x.com/port_dev"
                  ],
                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_sungmo.png",
                     'link' => "https://x.com/sungmo_nad"
                  ],
                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_unahh.png",
                     'link' => "https://x.com/0xunahh"
                  ],

                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_chris.png",
                     'link' => "https://x.com/christiadarma"
                  ],
                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_fin.png",
                     'link' => "https://x.com/thisisfin_"
                  ],
                  [
                     'img' => get_template_directory_uri() . "/assets/images/card_john.png",
                     'link' => "https://x.com/johnwrichkid"
                  ],

               ];

               $request_uri = $_SERVER['REQUEST_URI'];
               $parsed_url = parse_url($request_uri);
               $pathname = str_replace("/", "", $parsed_url['path']);
               $categories = get_terms([
                  "taxonomy" => "category",
                  "hide_empty" => false,
                  "orderby" => "term_id",
                  "order" => "ASC",
               ]);
               foreach ($categories as $category) {
                  $image_url = z_taxonomy_image_url($category->term_id);
                  $cate = get_term_by("id", $category->term_id, "category");
                  $count_post = $cate->count;
                  $active = $category->slug == $pathname ? "active" : "";
                  $data_target = esc_attr($category->slug);

                  if ($image_url) {
                     echo '<a class="tab gap-05 ' .
                        $active .
                        '" href="' .
                        home_url("/" . $category->slug . "") .
                        '" data-target="' .
                        $data_target .
                        '"><img src="' .
                        esc_url($image_url) .
                        '" alt="" class="img-cate"><h2 class="name-title ml-5 active ml-again">' .
                        $category->name .
                        '</h2>
                   </a>';
                  } else {
                     echo '<a class="tab gap-05 ' .
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
               }

               ?>


               <box class="disclaimer p-4">
                  <div class="box-top">
                     <h1 class="title-disc text-white text-bold">Disclaimer</h1>
                     <p class="dis">
                        "No connect wallet on any site. We never provide any links that require connecting a wallet. If you see one, perhaps our site has been hacked."
                     </p>
                  </div>
                  <div class="box-bottom d-flex mt-2">
                     <img aria-hidden="true" alt="chat-bubble" src="<?php echo get_template_directory_uri(); ?>/assets/images/Contact.svg" />
                     &nbsp; &nbsp; <span class="text-right text-white">Contact Us</span>
                  </div>
               </box>
            </div>

         </div>
         <div class="col-lg-9 col-md-12 col-sm-12">
            <div class="tab-content mt-5">
                  <div class="tab-pane active ">
                     <?php
                     $category = get_category_by_slug($pathname);
                     $tab = $category->slug;
                     $keyword = isset($_GET['k']) ? sanitize_text_field($_GET['k']) : '';
                     $args = [
                        "category" => $category->term_id,
                        "posts_per_page" => -1,
                     ];

                     $posts = get_posts($args);

                     $teamMembers = (($tab == "team-members") || ($tab == "monad-media-kit") || ($tab == "artists-and-gallery")) ? "d-none" : "";
                     if((($tab != "team-members") || ($tab != "monad-media-kit") || ($tab != "artists-and-gallery")) && empty($keyword))
                     {
                     if (count($posts) >= 1) { ?>
                        <div class="container <?php echo $teamMembers;  ?> ">
                           <div class="flex justify-between items-center mb-4">
                              <h1 class="text-3xl pl-3 font-bold text-white d-flex"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" class="icon-title" alt=""><?php echo $category->name; ?></h1>
                              <div class="relative d-none-sm">
                              <form id="search-form" action="<?php echo  home_url("/" . $category->slug . "") ?>" method="get">
                                 <span id="click-search" class="absolute cursor-pointer right-3 top-1/2 transform -translate-y-1/2 text-white">
                                    <img aria-hidden="true" alt="search" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" />
                                 </span>
                                 <input type="text" placeholder="Search" id="search-input" class="bg-black text-white rounded-full pl-4 pr-10 py-2 focus:outline-none" />
                              </form>
                              </div>
                           </div>

                           <?php
                           $paged = get_query_var("paged") ? get_query_var("paged") : 1;
                           $args = [
                              "post_type" => "post",
                              "cat" => $category->term_id,
                              "posts_per_page" => 8,
                              "paged" => $paged,
                           ];
                           $query = new WP_Query($args);

                           $types = [];
                           if ($query->have_posts()) {
                              while ($query->have_posts()) {
                                 $query->the_post();
                                 $post_types = wp_get_post_terms(get_the_ID(), "type");
                                 foreach ($post_types as $post_type) {
                                    $types[$post_type->slug] = $post_type->name;
                                 }
                              }
                              wp_reset_postdata();
                           }
                           if (count($types) > 0) { ?>
                              <div class="tabs ">
                                 <ul class="tab-links">
                                    <?php
                                    $first = true;
                                    foreach ($types as $slug => $name) {
                                       echo "<li" .
                                          ($first ? ' class="active"' : "") .
                                          '><a href="#tab-' .
                                          esc_attr($slug) .
                                          '">' .
                                          esc_html($name) .
                                          "</a></li>";
                                       $first = false;
                                    }
                                    ?>
                                 </ul>

                                 <div class="tab-content">
                                    <?php
                                    $first = true;
                                    foreach ($types as $slug => $name) {
                                       echo '<div id="tab-' . esc_attr($slug) . '" class="tab-post' . ($first ? " active" : "") . '">';
                                       $first = false;


                                       echo do_shortcode('[ajax_pagination_type post_type="post" type="' . esc_attr($slug) . '" cat="' . esc_attr($category->term_id) . '" posts_per_page="6" paged="1"]');

                                       echo '</div>';
                                    }
                                    ?>
                                 </div>
                              </div>
                           <?php } else {

                              echo do_shortcode('[ajax_pagination post_type="post" cat="' . $category->term_id . '" posts_per_page="8" paged="1"]');
                           }
                           ?>
                        </div>
                     <?php } else {
                     ?>
                        <div class="container <?php echo $teamMembers;  ?>">
                           <div class="flex justify-between items-center  mb-4">
                              <h1 class="text-3xl pl-3 font-bold text-white d-flex"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" class="icon-title" alt=""> <?php echo $category->name; ?></h1>
                           </div>
                           <div class="row pb-5 text-center">
                              <div class="content-comingsoon">
                                 <img src="https://monadocs.xyz/wp-content/uploads/2024/07/banhmi-moyaki-512.gif" alt="" class="coming-soon">
                                 <br>
                                 <h3 class="text-2xl">"nothing here, but you can eat banhmi moyaki before leave"</h3>
                                 <a href="<?php echo home_url(); ?>" class="d-mobile button-home">Go to Homepage</a>
                              </div>
                           </div>
                        </div>
                     <?php
                     }
                  }
                     ?>
                     <!-- team-member -->
                      <?php if($tab == "team-members"){ ?>
                     <div class="container ">
                        <div class="flex justify-between items-center mb-4">
                           <h1 class="text-3xl pl-3 font-bold text-white d-flex"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" class="icon-title" alt=""><?php echo $category->name; ?></h1>
                        </div>
                        <div class="tabs ">
                           <ul class="tab-links">
                              <li class="active">
                                 <a href="#tab-core-team">Core team</a>
                              </li>
                              <li class="">
                                 <a href="#tab-community-team">Community team</a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div id="tab-core-team" class="tab-post active">
                                 <div class="row pb-paginate px-4">
                                    <?php for ($i = 0; $i < count($coreteam); $i++) {
                                    ?>
                                       <div class="col-lg-3 col-md-4 col-6">
                                          <a href="<?php echo $coreteam[$i]['link'] ?>" target="_blank">
                                             <img src="<?php echo $coreteam[$i]['img'] ?>" class="img-team" alt="">
                                          </a>
                                       </div>

                                    <?php } ?>
                                 </div>
                              </div>
                              <div id="tab-community-team" class="tab-post">
                                 <div class="row pb-paginate px-4">
                                    <?php for ($i = 0; $i < count($communityteam); $i++) {
                                    ?>
                                       <div class="col-lg-3 col-md-4 col-6">
                                          <a href="<?php echo $communityteam[$i]['link'] ?>" target="_blank">
                                             <img src="<?php echo $communityteam[$i]['img'] ?>" class="img-team" alt="">
                                          </a>
                                       </div>

                                    <?php } ?>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>
                     <!-- --- -->
                     <?php }
                     
                     if($tab == "monad-media-kit"){ ?>
                     <!-- monad media kit -->
                     <div class="container">
                        <div class="flex justify-between items-center mb-4">
                           <h1 class="text-3xl pl-3 font-bold text-white d-flex"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" class="icon-title" alt=""><?php echo $category->name; ?></h1>
                        </div>
                        <div class="container">
                           <div class="row">
                              <div class=" pb-5 color-content">
                                 <div class=" p-content text-lg text-white  color-content">
                                    <div class="text-2xl font-bold">Logo Guidelines</div>
                                    <div class="pt-2">To ensure the logo remains clear and legible in all uses, there is to be clear space surrounding the logo that should be kept free of text and other elements. This area is to be equivalent to the full height and width of the logomark. Always use more where possible.</div>
                                    <p class="pt-2">To maintain consistency in the logo usage, do not do any of the following with the logo:</p>
                                    <div class="pt-2">
                                       1. Do not stretch, rotate, or distort the logo<br>
                                       2. Do not use unapproved colors<br>
                                       3. Do not decrease the opacity of the logo<br>
                                       4. Do not disassemble logo<br>
                                       5. Do not use text or image effects<br>
                                       6. Do not outline the logo
                                    </div>
                                    <div class="text-2xl font-bold pt-2">Brand colors</div>
                                    <div class="container">
                                    <div class="row ">
                                       <div class="col-lg-2 col-md-4  col-6 d-flex flex-column  align-items-center">
                                          <div class="div-block-13" style="background-color: #836EF9;"></div>
                                          <div class="text-sm uppercase"> MONAD PURPLE</div>
                                          <div class="text-sm uppercase"> #836EF9</div>
                                       </div>
                                       <div class="col-lg-2 col-md-4  col-6 d-flex flex-column  align-items-center">
                                          <div class="div-block-13" style="background-color: #200052;"></div>
                                          <div class="text-sm uppercase"> MONAD BLUE</div>
                                          <div class="text-sm uppercase"> #200052</div>
                                       </div>
                                       <div class="col-lg-2 col-md-4  col-6 d-flex flex-column align-items-center">
                                          <div class="div-block-13" style="background-color: #5feddf;"></div>
                                          <div class="text-sm uppercase"> ELECTRIC ICE</div>
                                          <div class="text-sm uppercase"> #5feddf</div>
                                       </div>
                                       <div class="col-lg-2 col-md-4  col-6 d-flex flex-column  align-items-center">
                                          <div class="div-block-13" style="background-color: #a0055d;"></div>
                                          <div class="text-sm uppercase"> BERRY</div>
                                          <div class="text-sm uppercase"> #a0055d</div>
                                       </div>
                                       <div class="col-lg-2 col-md-4 col-6 d-flex flex-column justify-content-center align-items-center">
                                          <div class="div-block-13" style="background-color: #61004f;"></div>
                                          <div class="text-sm uppercase"> WINE</div>
                                          <div class="text-sm uppercase"> #61004f</div>
                                       </div>
                                       <div class="col-lg-2 col-md-4  col-6 d-flex flex-column justify-content-center align-items-center">
                                          <div class="div-block-13" style="background-color: #f7ede8;"></div>
                                          <div class="text-sm uppercase"> WHITE RABBIT</div>
                                          <div class="text-sm uppercase"> #f7ede8</div>
                                       </div>
                                    </div>
                                    </div>

                                    <div class="w-layout-blockcontainer container add-margin ">
                                       <div class="h3-purple-light no-margin text-2xl">Primary Logo </div>
                                       <div class="h2-eyebrow-purple no-hover ">HORIZONTAL</div>
                                       <div class="collection-list-wrapper-2 w-dyn-list">
                                          <div role="list" class="collection-list-2 w-dyn-items row">
                                             <div role="listitem" class="collection-item w-dyn-item col-lg-6 col-md-6 col-12">
                                                <div class="div-block-11">
                                                   <div style="background-color:#f7ede8" class="div-block-13"><img alt=""  src="https://assets-global.website-files.com/64c26cc84790d118b80c38c9/6529500570063c3be7b85987_monad-horizontal-logo-black-rgb.svg" class="image-7"></div>
                                                   <div class="div-block-12"><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/65294f94eb4436f38e597942_monad-horizontal-logo-black-rgb-1080px-w-300ppi.png" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">PNG</h2>
                                                      </a><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529500570063c3be7b85987_monad-horizontal-logo-black-rgb.svg" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">SVG</h2>
                                                      </a></div>
                                                </div>
                                             </div>
                                             <div role="listitem" class="collection-item w-dyn-item col-lg-6 col-md-6 col-12">
                                                <div class="div-block-11">
                                                   <div style="background-color:#200052" class="div-block-13"><img alt=""  src="https://assets-global.website-files.com/64c26cc84790d118b80c38c9/6529bca3516fb5b0227b6dcb_monad-horizontal-logo-white-rgb.svg" class="image-7"></div>
                                                   <div class="div-block-12"><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529bca71c34481e820aa1ed_monad-horizontal-logo-white-rgb-1080px-w-300ppi.png" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">PNG</h2>
                                                      </a><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529bca3516fb5b0227b6dcb_monad-horizontal-logo-white-rgb.svg" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">SVG</h2>
                                                      </a></div>
                                                </div>
                                             </div>
                                             <div role="listitem" class="collection-item w-dyn-item col-lg-6 col-md-6 col-12">
                                                <div class="div-block-11">
                                                   <div style="background-color:#f7ede8" class="div-block-13"><img alt=""  src="https://assets-global.website-files.com/64c26cc84790d118b80c38c9/6529bcd9516fb5b0227b9cd0_monad-horizontal-logo-full-color-rgb.svg" class="image-7"></div>
                                                   <div class="div-block-12"><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529bcddd18b14276225e974_monad-horizontal-logo-full-color-rgb-1080px-w-300ppi.png" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">PNG</h2>
                                                      </a><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529bcd9516fb5b0227b9cd0_monad-horizontal-logo-full-color-rgb.svg" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">SVG</h2>
                                                      </a></div>
                                                </div>
                                             </div>
                                             <div role="listitem" class="collection-item w-dyn-item col-lg-6 col-md-6 col-12">
                                                <div class="div-block-11">
                                                   <div style="background-color:#200052" class="div-block-13"><img alt=""  src="https://assets-global.website-files.com/64c26cc84790d118b80c38c9/6529bd4f4611e9ca1e59b7ef_monad-horizontal-logo-inverted-rgb.svg" class="image-7"></div>
                                                   <div class="div-block-12"><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529bd52022a253f20ea9574_monad-horizontal-logo-inverted-rgb-1080px-w-300ppi.png" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">PNG</h2>
                                                      </a><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529bd4f4611e9ca1e59b7ef_monad-horizontal-logo-inverted-rgb.svg" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">SVG</h2>
                                                      </a></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="w-layout-blockcontainer container add-margin ">
                                       <div class="h3-purple-light no-margin text-2xl">Primary Logo </div>
                                       <div class="h2-eyebrow-purple no-hover ">STACKED</div>
                                       <div class="w-dyn-list">
                                          <div role="list" class="collection-list-2 w-dyn-items row">
                                             <div role="listitem" class="collection-item w-dyn-item col-lg-6 col-md-6 col-12">
                                                <div class="div-block-11">
                                                   <div style="background-color:#f7ede8" class="div-block-13"><img alt=""  src="https://assets-global.website-files.com/64c26cc84790d118b80c38c9/6529c82e675e9e3c34a4e4a8_monad-stacked-logo-black-rgb.svg" class="image-7"></div>
                                                   <div class="div-block-12"><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529c831e4e95fb82fa0e08a_monad-stacked-logo-black-rgb-1080px-w-300ppi.png" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">PNG</h2>
                                                      </a><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529c82e675e9e3c34a4e4a8_monad-stacked-logo-black-rgb.svg" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">SVG</h2>
                                                      </a></div>
                                                </div>
                                             </div>
                                             <div role="listitem" class="collection-item w-dyn-item col-lg-6 col-md-6 col-12">
                                                <div class="div-block-11">
                                                   <div style="background-color:#200052" class="div-block-13"><img alt=""  src="https://assets-global.website-files.com/64c26cc84790d118b80c38c9/6529c860e3e8f97337c1d7ed_monad-stacked-logo-white-rgb.svg" class="image-7"></div>
                                                   <div class="div-block-12"><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529c863b05ba5609da4ba79_monad-stacked-logo-white-rgb-1080px-w-300ppi.png" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">PNG</h2>
                                                      </a><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529c860e3e8f97337c1d7ed_monad-stacked-logo-white-rgb.svg" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">SVG</h2>
                                                      </a></div>
                                                </div>
                                             </div>
                                             <div role="listitem" class="collection-item w-dyn-item col-lg-6 col-md-6 col-12">
                                                <div class="div-block-11">
                                                   <div style="background-color:#f7ede8" class="div-block-13"><img alt=""  src="https://assets-global.website-files.com/64c26cc84790d118b80c38c9/6529c8a0372f70ad0416a37c_monad-stacked-logo-full-color-rgb.svg" class="image-7"></div>
                                                   <div class="div-block-12"><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529c8b479cbf4ed0751ccd7_monad-stacked-logo-full-color-rgb-1080px-w-300ppi.png" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">PNG</h2>
                                                      </a><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529c8a0372f70ad0416a37c_monad-stacked-logo-full-color-rgb.svg" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">SVG</h2>
                                                      </a></div>
                                                </div>
                                             </div>
                                             <div role="listitem" class="collection-item w-dyn-item col-lg-6 col-md-6 col-12">
                                                <div class="div-block-11">
                                                   <div style="background-color:#200052" class="div-block-13"><img alt=""  src="https://assets-global.website-files.com/64c26cc84790d118b80c38c9/6529c9a9e4e95fb82fa271b0_monad-stacked-logo-inverted-rgb.svg" class="image-7"></div>
                                                   <div class="div-block-12"><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529c9ab022a253f20f7e483_monad-stacked-logo-inverted-rgb-1080px-w-300ppi.png" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">PNG</h2>
                                                      </a><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529c9a9e4e95fb82fa271b0_monad-stacked-logo-inverted-rgb.svg" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">SVG</h2>
                                                      </a></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="w-layout-blockcontainer container ">
                                       <div class="h3-purple-light no-margin text-2xl">Logomark</div>
                                       <div class="collection-list-wrapper w-dyn-list">
                                          <div role="list" class="collection-list-2 w-dyn-items row">
                                             <div role="listitem" class="collection-item w-dyn-item col-lg-4 col-md-6 col-12">
                                                <div class="div-block-11">
                                                   <div style="background-color:#200052" class="div-block-13"><img alt=""  src="https://assets-global.website-files.com/64c26cc84790d118b80c38c9/6529c7409cc925522834f61b_monad-logo-mark-white-rgb.svg" class="image-7"></div>
                                                   <div class="div-block-12"><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529c74287d36e6c66d28753_monad-logo-mark-white-rgb-1080px-w-300ppi.png" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">PNG</h2>
                                                      </a><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529c7409cc925522834f61b_monad-logo-mark-white-rgb.svg" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">SVG</h2>
                                                      </a></div>
                                                </div>
                                             </div>
                                             <div role="listitem" class="collection-item w-dyn-item  col-lg-4 col-md-6 col-12">
                                                <div class="div-block-11">
                                                   <div style="background-color:#f7ede8" class="div-block-13"><img alt=""  src="https://assets-global.website-files.com/64c26cc84790d118b80c38c9/6529c64279cbf4ed074f0c55_monad-logo-mark-black-rgb.svg" class="image-7"></div>
                                                   <div class="div-block-12"><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529c645a2320208246ef786_monad-logo-mark-black-rgb-1080px-w-300ppi.png" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">PNG</h2>
                                                      </a><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529c64279cbf4ed074f0c55_monad-logo-mark-black-rgb.svg" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">SVG</h2>
                                                      </a></div>
                                                </div>
                                             </div>
                                             <div role="listitem" class="collection-item w-dyn-item  col-lg-4 col-md-6 col-12">
                                                <div class="div-block-11">
                                                   <div style="background-color:#200052" class="div-block-13"><img alt=""  src="https://assets-global.website-files.com/64c26cc84790d118b80c38c9/6529c5fdb05ba5609da216c9_monad-logo-mark-full-color-rgb.svg" class="image-7"></div>
                                                   <div class="div-block-12"><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529c601763ab4f5236a0a27_monad-logo-mark-full-color-rgb-1080px-w-300ppi.png" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">PNG</h2>
                                                      </a><a href="https://cdn.prod.website-files.com/64c26cc84790d118b80c38c9/6529c5fdb05ba5609da216c9_monad-logo-mark-full-color-rgb.svg" target="_blank" class="link-block-2 w-inline-block">
                                                         <h2 class="asset-dl-text">SVG</h2>
                                                      </a></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- ----- -->
                        <?php }
                        if($tab == "artists-and-gallery"){ ?>
                     <!-- artist -->
                     <div class="container ">
                           <div class="flex justify-between items-center mb-4">
                              <h1 class="text-3xl pl-3 font-bold text-white d-flex"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" class="icon-title" alt=""><?php echo $category->name; ?></h1>
                              <div class="relative d-none-sm">
                              <form id="search-form" action="<?php echo  home_url("/" . $category->slug . "") ?>" method="get">
                                 <span id="click-search" class="absolute cursor-pointer right-3 top-1/2 transform -translate-y-1/2 text-white">
                                    <img aria-hidden="true" alt="search" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" />
                                 </span>
                                 <input type="text" placeholder="Search" id="search-input" class="bg-black text-white rounded-full pl-4 pr-10 py-2 focus:outline-none" />
                              </form>
                              </div>
                           </div>
                           <?php  echo do_shortcode('[ajax_pagination_artist post_type="post" cat="' . $category->term_id . '" posts_per_page="12" paged="1"]'); ?>
                     </div>
                     <!-- ----- -->
                      <?php } 
                      if($keyword != ""){?>
                        <div class="container  ">
                           <div class="flex justify-between items-center mb-4">
                              <h1 class="text-3xl pl-3 font-bold text-white d-flex"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" class="icon-title" alt=""><?php echo $category->name; ?></h1>
                              <div class="relative d-none-sm">
                              <form id="search-form" action="<?php echo  home_url("/" . $category->slug . "") ?>" method="get">
                                 <span id="click-search" class="absolute cursor-pointer right-3 top-1/2 transform -translate-y-1/2 text-white">
                                    <img aria-hidden="true" alt="search" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" />
                                 </span>
                                 <input type="text" placeholder="Search" id="search-input" value="<?php echo $keyword ?>" class="bg-black text-white rounded-full pl-4 pr-10 py-2 focus:outline-none" />
                              </form>
                              </div>
                           </div>
                           <?php $args = [
                        "category" => $category->term_id,
                        "posts_per_page" => -1,
                        "s" => $keyword
                     ];

                     $posts = get_posts($args); 
                      if(count($posts) > 0){
                           
                              echo do_shortcode('[ajax_pagination_search post_type="post" cat="' . $category->term_id . '" keyword="'. $keyword .'" posts_per_page="6" paged="1"]'); 
                        } else{
                           ?>
                           
                           <div class="row pb-5 text-center">
                              <div class="content-comingsoon">
                                 <img src="https://monadocs.xyz/wp-content/uploads/2024/07/banhmi-moyaki-512.gif" alt="" class="coming-soon">
                                 <br>
                                 <h3 class="text-2xl">"nothing here, but you can eat banhmi moyaki before leave"</h3>
                                 <a href="<?php echo home_url(); ?>" class="d-mobile button-home">Go to Homepage</a>
                              </div>
                           </div>
                       
                        
                      <?php
                      }
                      ?>
                       </div>
                       <?php
                      } ?>
                  </div>
            </div>
         </div>
         <div style="height: 41px;">&nbsp;</div>
      </div>
   </div>
</section>
<?php get_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-XX+q43XXb5v2nYp12xNX+PGerfIy/4mU5AXf1F8gH15i0LY0+eERn3nifds5xP/7" crossorigin="anonymous">
<script>
   $(document).ready(function() {

      $('#search-input').on('focus', function() {
         $('#search-label').addClass('hidden');
      }).on('blur', function() {
         if ($(this).val() === '') {
            $('#search-label').removeClass('hidden');
         }
      });
   });
</script>
<script>
    document.getElementById('search-form').addEventListener('submit', function(event) {
        event.preventDefault();
        var keyword = document.getElementById('search-input').value;
        if (keyword.trim() === "") {
            event.preventDefault(); 
            return;
        }
        var currentUrl = window.location.href.split('?')[0];
        var newUrl = currentUrl + '?k=' + encodeURIComponent(keyword);
        window.location.href = newUrl;
    });

    document.getElementById('click-search').addEventListener('click', function(event) {
        event.preventDefault();
        var keyword = document.getElementById('search-input').value;
        if (keyword.trim() === "") {
            event.preventDefault(); 
            return;
        }
        var currentUrl = window.location.href.split('?')[0];
        var newUrl = currentUrl + '?k=' + encodeURIComponent(keyword);
        window.location.href = newUrl;
    });
    
</script>
<script>
   const data = [{
         dapp: '',
         field: 'DE-fi',
         fund: '5M'
      },
      {
         dapp: '',
         field: 'Liquidity',
         fund: '5M'
      },
      {
         dapp: '',
         field: 'NFTs',
         fund: '-'
      },
      {
         dapp: '',
         field: 'Stablecoin',
         fund: '2M'
      },
      {
         dapp: '',
         field: 'NFTs',
         fund: '-'
      },
      {
         dapp: '',
         field: 'Stablecoin',
         fund: '-'
      },
      {
         dapp: '',
         field: 'DE-fi',
         fund: '-'
      },
      {
         dapp: '',
         field: 'Lending/borrow',
         fund: '-'
      },
   ];

   const tableBody = document.getElementById('table-body');

   data.forEach(row => {
      const tr = document.createElement('tr');
      tr.className = 'border-b border-zinc-700';

      tr.innerHTML = `
       <td class="py-3 px-4">${row.dapp}</td>
       <td class="py-3 px-4">${row.field}</td>
       <td class="py-3 px-4">${row.fund}</td>
       <td class="py-3 px-4  ">
       <div class="text-center just-content-center box-social flex space-x-2">
         <img aria-hidden="true" alt="globe" src="<?php echo get_template_directory_uri(); ?>/assets/images/FontAwsome (globe).svg" class="image-spacing">
         <img aria-hidden="true" alt="twitter" src="<?php echo get_template_directory_uri(); ?>/assets/images/FontAwsome (twitter).svg" class="image-spacing">
         <img aria-hidden="true" alt="discord" src="<?php echo get_template_directory_uri(); ?>/assets/images/FontAwsome (discord).svg" class="image-spacing">
         </
         </td>
     `;

      tableBody.appendChild(tr);
   });
</script>
<script>
   document.addEventListener('DOMContentLoaded', function() {
      var url = window.location.pathname;

      var segments = url.split('/');
      var tabName = segments.filter(segment => segment !== '').pop();
      var tabToActivate = document.querySelector('.tab[data-target="' + tabName + '"]');

      if (tabToActivate) {
         var allTabs = document.querySelectorAll('.tab');
         allTabs.forEach(function(tab) {
            tab.classList.remove('active');
         });
         tabToActivate.classList.add('active');
      }
      var paneToActivate = document.querySelector('.tab-pane#' + tabName);

      if (paneToActivate) {
         var allPanes = document.querySelectorAll('.tab-pane');
         allPanes.forEach(function(pane) {
            pane.classList.remove('active');
         });
         paneToActivate.classList.add('active');
      }
   });
</script>

<script>
   jQuery(document).ready(function() {
      jQuery('.tab-links a').on('click', function(e) {
         var currentAttrValue = jQuery(this).attr('href');

         // Show/Hide Tabs
         jQuery('.tab-post' + currentAttrValue).show().siblings().hide();

         // Change/remove current tab to active
         jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

         e.preventDefault();
      });
   });
</script>