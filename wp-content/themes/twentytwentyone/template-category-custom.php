<?php

/**
 * Template Name: Category
 */

// Exit if accessed directly.
if (!defined("ABSPATH")) {
   exit();
}

get_header();
?>
<style>
   img[src*="Writer.svg"] {
      filter: invert(52%) sepia(67%) saturate(1981%) hue-rotate(213deg) brightness(103%) contrast(99%);
   }

   .purple-icon {
      filter: invert(52%) sepia(67%) saturate(1981%) hue-rotate(213deg) brightness(103%) contrast(99%);
   }

   .box-por {
      display: flex;
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

   h1.text-2xl.font-bold.text-white.text-foreground {
      color: white !important;
      font-family: 'Segoe UI';
   }

   h2.name-title.ml-5.art {
      margin-left: 23px;
   }

   .ml-5 {
      margin-left: 0 !important;
   }

   /* // */
   .content-comingsoon{
      height: 50vh;
      position: relative;
   }
   .content-comingsoon h2{
   top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
   font-size: 50px;
   font-family: 'Calibri';
   color: #949494;
   }
   .box-last {
      transition: box-shadow 0.3s;
      border-radius: 10px !important;
   }
   .fixed-footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    z-index: 1000;
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

   .col-lg-2.col-md-3.relative.bg-090909 {
      width: 14%;
   }

   table td,
   table th,
   .wp-block-table td,
   .wp-block-table th {
      padding: calc(0.5* var(--global--spacing-unit));
      border: none;
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
      object-fit: cover;
   }

   .gap-05 {
      gap: 0.5rem;
      padding: 14px 20px !important;
   }

   .home-title {
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
   }

   .box-image-last {
      width: 150px;
      object-fit: cover;
      transition: all .2s ease-in-out;

   }

   .box-image-last:hover {
      transform: scale(1.2);
   }

   .color-content p,
   .color-content ul li,
   .color-content h1,
   .color-content h2,
   .color-content h3,
   .color-content h4 {
      font-size: 20px;
      color: white !important;
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
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        font-size: 1.25rem;
    }
</style>

<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>

<section class="learn">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-2 col-md-3 relative  bg-090909">
            <div class="tab-container pt-5 ">
               <?php
              
             
                $slug =  (isset($_GET['slug'])) ? sanitize_text_field($_GET['slug']) : "";
                $categoryBySlug = get_category_by_slug($slug);
               $categories = get_terms(array(
                  'taxonomy' => 'category',
                  'hide_empty' => false,
                  'orderby' => 'term_id',
                  'order' => 'ASC'
               ));
               foreach ($categories as $category) {

                  $image_url =  z_taxonomy_image_url($category->term_id);
                  $cate = get_term_by('id', $category->term_id, 'category');
                  $count_post = $cate->count;
                  $tab = $category->slug;
                  if ($image_url) {

                    echo  '<a class="tab '. ($tab == $slug ? "active" : "" ).' gap-05"  href="'.home_url('/category?slug='. $category->slug .'') .'"><img src="' . esc_url($image_url) . '" alt="" class="img-cate"><h2 class="name-title ml-5 active ml-again">' . $category->name . '</h2>
                    </a>';
                      } else {
                         echo '<a class="tab '. ($tab == $slug ? "active" : "" ).' gap-05"  href="'.home_url('/category?slug='. $category->slug .'') .'"><img src="' . get_template_directory_uri() . '/assets/images/Community-News.svg" alt=""><h2 class="name-title ml-5 ml-again">' . $category->name . '</h2> </a>';
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
         <div class="col-lg-9 col-md-9">
            <div class="tab-content mt-5">
                     <?php
                     $args = array(
                        'category' => $categoryBySlug->term_id,
                     );
                     
                     $posts = get_posts($args);
                     if (count($posts) > 1) {
                     ?>
                        <div class="container">
                           <div class="flex justify-between items-center mb-4">
                              <h1 class="text-3xl font-bold text-white d-flex"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Learn-about-monad.svg" alt=""> &nbsp; <?php echo $categoryBySlug->name ?></h1>
                              <div class="relative">
                                 <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white">
                                    <img aria-hidden="true" alt="search" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" />
                                 </span>
                                 <input type="text" placeholder="Search" id="search-input" class="bg-black text-white rounded-full pl-4 pr-10 py-2 focus:outline-none" />

                              </div>
                           </div>
                           <div class="row pb-5">
                              <?php
                              foreach ($posts as $post) {
                                 setup_postdata($post);
                                 $post_id = get_the_ID(); 

                                 $post_link = get_permalink($post_id); 
                              ?>
                                 <div class="col-lg-6 col-md-6 col-12 mb-3">
                                    <a href="<?php echo esc_url(home_url('/detail')); ?>?post_id=<?php echo $post->ID; ?>">
                                       <div class="box-last">
                                          <img src="<?php echo get_the_post_thumbnail_url($post_id) ?>" alt="Image Description" class="box-image-last">
                                          <div class="box-content-t1 ">
                                             <h2 class="home-title"><?php the_title(); ?></h2>
                                             <p class="ml-2 home-content"><?php $trimmed_content = wp_trim_words(get_the_content(), 20, '...');
                                                                        echo $trimmed_content; ?></p>

                                             <span class="text-secondary-foreground flex items-center">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Writer.svg" alt="Image Description" class="">
                                                &nbsp; Last update <?php echo esc_html(get_the_date()) ?> &nbsp; <span class="text"> <span class="by-t">by</span> &nbsp; <span class="text-primary ml-1">  <?php echo get_the_author(); ?></span></span></span>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              <?php } ?>
                           </div>
                        </div>
                        <?php } elseif (count($posts) == 1) {
                        foreach ($posts as $post) {
                           setup_postdata($post);
                           $post_id = get_the_ID(); 
                           $post_link = get_permalink($post_id); 
                        ?>
                           <div class="container pb-5 color-content">
                              <!-- <img src="<?php echo get_the_post_thumbnail_url($post_id) ?>" alt="" class="banner img-fluid mb-5"> -->
                              <h1 class="text-2xl font-bold text-white text-foreground title"><?php the_title(); ?></h1>
                              <div class="mt-4 p-content italic "><?php the_content(); ?></div>
                           </div>

                           <div class="container">
                              <h2 class="title-last-post text-white text-center p-5">
                                 - Last post -
                              </h2>
                              <div class="row pb-5">
                                 <?php
                                 $args = array(
                                    'posts_per_page' => -1,
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'orderby' => 'date',
                                    'order' => 'ASC'
                                 );

                                 $posts = get_posts($args);
                                 foreach ($posts as $post) {
                                    setup_postdata($post);
                                    $post_id = get_the_ID();

                                    $post_link = get_permalink($post_id);
                                 ?>
                                    <div class="col-lg-6 col-md-6 col-12 mb-3">
                                       <a href="<?php echo esc_url(home_url('/detail')); ?>?post_id=<?php echo $post->ID; ?>">
                                          <div class="box-last">
                                             <img src="<?php echo get_the_post_thumbnail_url($post_id) ?>" alt="Image Description" class="box-image-last">
                                             <div class="box-content-t1 ">
                                                <h2 class="home-title"><?php the_title(); ?></h2>
                                                <p class="ml-2 home-content"><?php $trimmed_content = wp_trim_words(get_the_content(), 20, '...');
                                                                           echo $trimmed_content; ?></p>

                                                <span class="text-secondary-foreground flex items-center">
                                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Writer.svg" alt="Image Description" class="">
                                                   &nbsp; Last update <?php echo esc_html(get_the_date()) ?> &nbsp; <span class="text"> <span class="by-t">by</span>&nbsp; <span class="text-primary ml-1">  <?php echo get_the_author(); ?></span></span></span>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 <?php } ?>
                              </div>
                           </div>


                        <?php }
                     } else {
                        ?>
                        <div class="container">
                           <div class="flex justify-between items-center mb-4">
                              <h1 class="text-3xl font-bold text-white d-flex"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Learn-about-monad.svg" alt=""> &nbsp; <?php echo $categoryBySlug->name ?></h1>
                              <div class="relative">
                                 <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-white">
                                    <img aria-hidden="true" alt="search" src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" />
                                 </span>
                                 <input type="text" placeholder="Search" id="search-input" class="bg-black text-white rounded-full pl-4 pr-10 py-2 focus:outline-none" />

                              </div>
                           </div>
                           <div class="row pb-5 text-center">
                              <div class="content-comingsoon">
                                 <h2 class="text-2xl ">Coming soon...</h2>

                              </div>
                           </div>
                        </div>
                        </script>
                     <?php
                     }
                     ?>
                  
            </div>
         </div>
         <!-- <div class="col-lg-1">
        
         </div> -->
      </div>
   </div>
</section>
<?php get_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-XX+q43XXb5v2nYp12xNX+PGerfIy/4mU5AXf1F8gH15i0LY0+eERn3nifds5xP/7" crossorigin="anonymous">
<script>
   $(document).ready(function() {
      $(".tab").click(function() {
         var targetId = $(this).data("target");
         $(".tab").removeClass("active");
         $(this).addClass("active");

         $(".tab-pane").removeClass("active");
         $("#" + targetId).addClass("active");
      });

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