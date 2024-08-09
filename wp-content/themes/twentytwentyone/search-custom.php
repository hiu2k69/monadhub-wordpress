<?php

/**
 * Template Name: Custom search
 */
get_header(); 

// Nếu có kết quả tìm kiếm
?>
<style>
     .main.relative{
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/detail_mobile.jpg');
        }

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
        width: 80%; /* Adjust as needed */
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

   .home-content {
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
   }


   .box-content {
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

   .content-comingsoon {
      height: 100vh;
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
   }

   .box-content h3 {
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

   .box-content p {
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


   @media (max-width: 431px) {
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


      .box-image-last:hover {
         transform: none;
      }


#result_ajaxp_search{
        padding: 10px;
      }

      .button-home{
        padding: 5px 15px;
      }

   }

   @media (max-width: 1025px) and (min-width: 431px) {

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


      #result_ajaxp_search{
        padding: 10px;
      }

   }

   .text-search{
    font-size: 1rem;
    color: #FFFFFF;
    font-weight: bold;
   }
   .text-color{
    color: #836EF9;
    font-size: 1.25rem;
   }


</style>

<?php  $keyword = isset($_GET['k']) ? sanitize_text_field($_GET['k']) : ''; ?>
<div class="main relative">
    <section class="main-content-center">
        <div class="container p-0 ">
            <div class=" text-search text-center p-2">
                Search results for keywords "<span class="fw-bold text-color"><?php echo $keyword; ?></span>"
            </div>
            
            <?php  $args = [
                        "posts_per_page" => -1,
                        "s" => $keyword
                     ];

                     $posts = get_posts($args); 
                     if(count($posts) > 0){

                         echo do_shortcode('[ajax_pagination_search post_type="post" cat="0" keyword="'. $keyword .'" posts_per_page="2" paged="1"]'); 
                     }else{
                        ?>
                        <div class="row height-100 text-center">
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
            <div style="height: 30px;">&nbsp;</div>
        </div>
    </section>
</div>

<?php

get_footer(); // Bao gồm chân trang của giao diện
?>
