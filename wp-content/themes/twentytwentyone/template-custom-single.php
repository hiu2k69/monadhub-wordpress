<?php

/**
 * Template Name: Custom Single Post
 */

get_header();

?>
<style>
/* Default styles (for screens smaller than 1780px) */
h2.name-title.ml-5 {
    font-size: 14px; /* Adjust as needed */
    font-family  : 'seguisb.ttf';

}
.container.box-last- {
    margin-left: 18%; /* Adjust as needed */
}
.tab-content.mt-5 {
    width: 85%; /* Adjust as needed */
    margin-top: 5rem; /* Adjust as needed */
}
.col-lg-9.col-md-12 {
    margin-left: 20%;
    padding-left: 15px;
}
.gap-05 {
    gap: 0.5rem;
    padding: 5px 50px; /* Adjust as needed */
}
.col-lg-2.col-md-3 {
    position: relative;
    top: auto; /* Remove fixed positioning */
}

/* For screens between 1780px and 1919px */
@media only screen and (min-width: 1780px) and (max-width: 1919px) {
    h2.name-title.ml-5 {
        font-size: 15px;
        font-family  : 'seguisb.ttf';

    }
    .container.box-last- {
        margin-left: 21% !important;
    }
    .tab-content.mt-5 {
        width: 80%;
        margin-top: 7rem !important;
    }
    .col-lg-9.col-md-12 {
        margin-left: 24.66667%;
        padding-left: 20px;
    }
    .gap-05 {
        gap: 0.5rem;
        padding: 4px 54px !important;
    }
    .col-lg-2.col-md-3 {
        position: fixed;
        top: 8.5%;
    }
}

/* For screens wider than 1920px */
@media only screen and (min-width: 1920px) {
    .col-lg-2.col-md-3 {
        position: fixed;
        top: 6.5%;
    }
    .gap-05 {
        gap: 0.5rem;
        padding: 4px 54px !important;
    }
    h2.name-title.ml-5 {
        font-size: 17px !important;
        font-family  : 'seguisb.ttf';

    }
    .col-lg-9.col-md-12 {
        margin-left: 28.66667%;
        padding-left: 20px;
    }
    .tab-content.mt-5 {
        width: 73% !important;
        margin-top: 7rem !important;
    }
}
@media only screen and (min-width: 992px) and (max-width: 1779px) {
    h2.name-title.ml-5 {
        font-size: 13px; /* Adjust as needed */
    }
    .container.box-last- {
        margin-left: 18% !important;
        width: auto; /* Adjust as needed */
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

    .main-navigation .menu {
    list-style: none;
    display: flex;
    gap: 4.5rem;
    margin: 0;
    padding: 0;
}


}




.box-bottom.d-flex.mt-2 {
    /* background: red; */
    box-shadow: 0px 3px 6px #00000059;
    border-radius: 7px;
    padding: 0.5rem 1rem;
    box-shadow: 0px 3px 6px #00000059;
    border-radius: 10px;
    position: relative;
    z-index: 1;
}
    .box-last-post blockquote .twitter-tweet .twitter-tweet-rendered iframe {
        width: 100% !important;
        height: 100% !important;
    }

    .mt-4.p-content.text-lg.text-white.italic.color-content img {
        width: 100%;
        color: white;
    }

    .mt-4.p-content.text-lg.text-white.italic.color-content h3, .mt-4.p-content.text-lg.text-white.italic.color-content h4, .mt-4.p-content.text-lg.text-white.italic.color-content h5 {
        color: #836EF9;
        font-weight: bolder;
        line-height : 1.5;
    }


    .mt-4.p-content.text-lg.text-white.italic.color-content li {
    font-family: 'Calibri';
    font-size: 20px;
    font-weight: 400;
    line-height: 1.8;
    color: #D4D4D4 !important;
    list-style: unset !important;
}
    
    .box-last-post img {
        width: 100% !important;
        height: auto !important;
    }


    .box-last {
        transition: box-shadow 0.3s;
    }

    .box-last:hover {
        box-shadow: 0 0 20px #5A3DFF;
    }

    .relative {
        position: relative;
    }

    box.disclaimer1 {
        position: fixed;
        left: 2%;
        bottom: 10%;
        z-index: 3;
    }


    .box-content-t {
        padding: 10px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    h2.title-last-post.text-white.text-center.p-5 {
        font-weight: revert;
        font-size: 47px;
        font-family: 'Segoe UI';
        letter-spacing: var(--unnamed-character-spacing-0);
        color: var(--unnamed-color-ffffff);
        text-align: center;
        font: normal normal bold 47px / 63px Segoe UI;
        letter-spacing: 0px;
        color: #FFFFFF;
    }

    .box-content-t h2 {
        font-size: 24px;
        margin: 0;
        color: #836EF9;
    }

    .box-content-t p {
        flex-grow: 1;
        margin: 10px 0;
        font-size: 20px;
        color: #E4ECF2;
        text-align: left;
        font: normal normal normal 17px / 27px Segoe UI;
        letter-spacing: 0px;
    }

    .box-content-t span {
        font-size: 18px;
        color: #00FFF2;
        font-family: 'Segoe UI';


    }

    .fixed-footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        z-index: 1000;
    }

    .content-comingsoon {
        height: 50vh;
        position: relative;
    }

    .content-comingsoon h2 {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
        font-size: 50px;
        font-family: 'Calibri';
        color: #949494;
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


    .box-image {
        overflow: hidden;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .box-image img {
        width: 100%;
        height: auto;
        display: block;
        transition: all .2s ease-in-out;
    }

    .box-image img:hover {
        transform: scale(1.2);
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
        top: 10px;
        color: #836EF9;
        font-family: 'Segoe UI';
        border-radius: 20px;
        border: 3px solid #836EF9;
    }



    .box-content {
        padding: 1.5rem;
    }

    .box-content h3 {
        font-size: 1.5rem;
        margin: 0;
        color: #836EF9;
        text-align: left;
        font-family: 'seguisb.ttf';
    }

    .gap-05 {
      gap: 0.5rem;
      padding: 7px 54px;
   }
    .box-bottom.d-flex.mt-2 img {
    width: 24px;
    margin-left: 11px;

}
    .box-content p {
        margin: 0.2rem 0 1rem 0;
        font-size: 0.9rem;
        color: #E4ECF2;
        text-align: left;
        font: normal normal normal 19px / 26px Segoe UI;
        letter-spacing: 0px;
        color: #E4ECF2;
        font-family: 'Segoe UI';
    }

    .box-content a:hover {
        text-decoration: underline;
    }

    a.see-more {
        display: inline-block;
        padding: 0.5rem 1rem;
        background-color: #836EF9;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1rem;
        transition: background-color 0.3s ease;
        font-family: 'Segoe UI';
        font-weight: bolder;
    }

    a.see-more:hover {
        background-color: #00FFF2;
        color: #2F2F37;
    }

    img.see {
        transition: filter 0.3s ease;

    }

    a.see-more:hover img.see {
        filter: brightness(50%);

    }


    @keyframes rotation_481 {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .title {
        font-size: 3rem;
        text-align: center;
        color: #836EF9;
    }

    .bg-none {
        background-color: none !important;
    }

    .post-content p {
        font-size: 1.5rem;
        text-align: left !important;
    }

    .color-content p {
        color: #D4D4D4 !important;
        line-height: 2;
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

    .d-flex {
        display: flex;
        justify-content: space-between;

    }

    .img-cate {
        width: 21px;
        /* height: 25px; */
        object-fit: cover;
      margin-bottom: 8px;

    }

    box.disclaimer {
    text-align: center;
    justify-content: center;
    margin-left: 23px;
    align-content: center;
    align-self: center;
    justify-items: center;
}
    /* .tab-container {
    top: 10.5%;
    left: 0;
    display: flex;
    flex-wrap: wrap;
    position: fixed;
    align-items: baseline;
    justify-content: center;
    align-content: stretch;
    flex-direction: column;
} */
    .detail-post {
        background: #101016;
        position: relative;
        z-index: 1;
    }
    .box-content-t1 span {
    font-size: 16px;
    color: #836EF9;
    font-family: 'Calibri';
    display: flex;
}
 
    .mr-2 {
    margin-right: 0.5rem;
}

.ml-2 {
    margin-left: 0.5rem;
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
   .container.box-last- {
    margin-left: 23%;
}.gallery-columns-4 .gallery-item {
    max-width: 23%;
    margin: 6px;
}
.box-top {
    width: 167px;
    height: 230px;
    background: var(--unnamed-color-836ef9) 0% 0% no-repeat padding-box;
    background: #836EF9 0% 0% no-repeat padding-box;
    box-shadow: 0px 3px 6px #00000059;
    border-radius: 7px;
    opacity: 1;
    padding: 5px;
}
    
    header#masthead {
        width: 100%;
        background-color: #000;
        padding: 1rem 0;
        box-sizing: border-box;
        position: fixed;
        z-index: 100;

    }

    a.tab.gap-05:hover img {
   filter: sepia(1) hue-rotate(203deg) saturate(8) brightness(0.9);
}

.mt-4.p-content.text-lg.text-white.italic.color-content{
    font-family: 'Calibri';
}

.set-position{
    justify-content: start;
}

h1.text-2xl.font-bold.text-foreground{
    line-height: 1.3;
}
@media (max-width: 431px){
      .col-lg-9.col-md-12{
         margin: 0;
         padding: 0;
      }

      .tab-content{
        width: 100% !important;
      }

      .tab-content.mt-5{
        margin-top: 0 !important;
      }

      .container.box-last-{
        margin-left: 0;
        padding: 0;
      }
      h1.text-2xl.font-bold.text-foreground{
        margin-bottom: 0;
        margin-top: 1rem;
        font-size: 28px;
      }

      .tab-content.mt-5 .container{
        padding: 0 30px;
      }
    
      
      .set-position{
        justify-content: center;
      }
  
      
    }

    @media (max-width: 1025px) and (min-width: 431px){
      .col-lg-9.col-md-12{
         margin:  0;
         padding: 0;
      }

      .tab-content{
        width: 100% !important;
      }

      .tab-content.mt-5{
        margin-top: 5rem !important;
      }

      .container.box-last-{
        margin-left: 0;
        padding: 0;
      }
      h1.text-2xl.font-bold.text-foreground{
        margin-bottom: 0;
        margin-top: 1rem;
        font-size: 28px;
      }

      .tab-content.mt-5 .container{
        padding: 0 30px;
      }

      
      .d-none-sm{
        display: none !important;
      }
  
      .col-lg-6.col-md-6.col-12 {
      padding: 0;
      }

      #result_ajaxp_last{
        padding: 0 15px;
      }
      
    }

    .share-button {
    position: fixed;
    bottom: 80px;
    right: 20px;
    background-color: #836EF9;
    color: white;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: background-color 0.3s ease;
    z-index: 10001;
}
a.share-button:hover{
    color: white;
}

.share-button i {
    font-size: 24px;
}

.detail-title{
    color: #FFFFFF !important;
}

.table-of-contents {
    padding: 20px;
    position: fixed;
    right: 20px;
    top: 10.5%;
    width: 250px;
    color: white;
    z-index: 90;
}
.table-of-contents h2 {
    margin-top: 0;
    font-size: 18px;
    font-weight: bold;
    color: #836EF9;
}
.table-of-contents ul {
    list-style: none;
    padding-left: 0;
}
.table-of-contents li {
    margin-bottom: 5px;
    line-height: 1.2 !important;
    font-size: 20px !important;

}
.table-of-contents.d-none-sm a {
    font-size: 16px;
    font-family: 'Calibri';
    font-weight: bolder;
}
i.fa-solid.fa-chevron-right {
    display: none;
}
.table-of-contents a {
    text-decoration: none;
    color: #949494 !important;
    font-weight: normal !important;
}
.table-of-contents a:hover {
    text-decoration: underline;
}

.mt-4.p-content.text-lg.text-white.italic.color-content a {
    color: #2F9BEE ;
}

.toc-title {
    position: relative;
    padding-top: 80px; 
    margin-top: -80px; 
}

figure.wp-caption.alignnone {
    max-width: 100% !important;
}

.table-of-contents a.active {
    color: #836EF9 !important;
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

   .pb-5.color-content{
    margin-top: 3rem;
   }

   .table-of-contents{
    top: 90px;
   }
}
tbody td {
    border-left: 1px solid;
}
table  {
    border : 1px solid;
}
table tr {
    border : 1px solid;
}

</style>
<section class="detail-post">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-2 col-md-3 relative d-none-sm  bg-090909">
            <div class="tab-container ">
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
            foreach ($categories as $category) {
               $image_url = z_taxonomy_image_url($category->term_id);
               $cate = get_term_by("id", $category->term_id, "category");
               $count_post = $cate->count;
               $active = $category->slug == $current_page_path ? "active" : "";
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
        <div class="col-lg-9 col-md-12 ">
                <div class="tab-content mt-5">
                    <?php

                    global $wp_query;
                    $post_slug = $wp_query->query_vars['custom_post_slug'];

                    $post = get_page_by_path($post_slug, OBJECT, 'post');

                    if ($post) {
                        setup_postdata($post);
                        $content = get_the_content(); 
                        $content_without_shortcodes = strip_shortcodes($content);
                        $clean_content = wp_strip_all_tags($content_without_shortcodes);
                        $trimmed_content = wp_trim_words($clean_content, 20, '...');
                        $desc = get_the_title();

                        $desc .= "\n ". $trimmed_content;
                    ?>

                        <div class="container">
                            <div class="row">
                                <div class=" pb-5 color-content">
                                    <!-- <img src="<?php echo get_the_post_thumbnail_url($post_id) ?>" alt="" class="banner img-fluid mb-5"> -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h1 class="text-2xl font-bold text-foreground title "><?php the_title(); ?></h1>
                                    </div>
                                    <div class="mt-4 p-content text-lg text-white italic color-content"><?php the_content(); ?></div>
                                </div>
                            </div>
                            <a class="share-button" target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(esc_url(home_url('/detail/')) . $post_slug); ?>&text=<?php echo urlencode($desc) ?>">
                                <i class="fa-solid fa-share"></i>
                            </a>
                        </div>
                    <?php
                        wp_reset_postdata();
                    } else {
                        ?>
                    <div class="container">
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
                    ?>
                   
                </div>
                
        </div>

        </div>
        <div class="container box-last-">
        <div  class="d-flex align-items-center set-position fw-bold gap-1 p-3">
            <a href="<?php echo home_url(); ?>" >
                    <img src="<?php echo get_template_directory_uri().'/assets/images/favicon.png' ?>" alt="Logo" class="favicon">
                </a>
                <h2 class="title-last-post text-white text-center">
                 Last post 
            </h2>
            </div>
   
    <?php echo do_shortcode('[ajax_pagination_lastpost post_type="post"  posts_per_page="4" paged="1"]'); ?>
   <div style="height: 41px;">&nbsp;</div>
</div>

    </div>
</section>
<?php get_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-XX+q43XXb5v2nYp12xNX+PGerfIy/4mU5AXf1F8gH15i0LY0+eERn3nifds5xP/7" crossorigin="anonymous">
<script>
document.addEventListener("DOMContentLoaded", function() {
    const tocLinks = document.querySelectorAll(".toc-link");

    tocLinks.forEach(link => {
        link.addEventListener("click", function(e) {
            tocLinks.forEach(link => link.classList.remove("active"));
            this.classList.add("active");
        });
    });

});
</script>