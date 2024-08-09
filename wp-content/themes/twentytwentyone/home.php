<?php

/**
 * Template Name: home
 */

// Exit if accessed directly.
if (!defined("ABSPATH")) {
    exit();
}

get_header();
?>
<style>
    .box-last-post blockquote .twitter-tweet .twitter-tweet-rendered iframe {
        width: 100% !important;
        height: 100% !important;
    }

    .box-last-post img {
        width: 100% !important;
        height: auto !important;
    }

    .box-last {
        display: flex;
        background-color: #2a2a2a;
        border-radius: 10px;
        overflow: hidden;
        color: white;
        font-family: Arial, sans-serif;
        margin: 10px;

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

    .box-image-last {
        width: 150px;
        object-fit: cover;
        transition: all .2s ease-in-out;

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
        padding: 1rem;
        height: 150px;
    }

    .box-content h3 {
        font-size: 1.5rem;
        margin: 0;
        color: #836EF9;
        text-align: left;
        font-family: 'seguisb.ttf';
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

    /* .twitter-tweet {
        color: white; 
        background-color: black; 
        padding: 10px; 
        border-radius: 8px;
    } */
    a.see-more {
        display: inline-block;
        padding: 0.5rem 3rem;
        background-color: #836EF9;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1rem;
        transition: background-color 0.3s ease;
        font-family: 'Segoe UI';
        font-weight: bolder;
        margin-bottom: 14px;
        width: 94%;
        text-align: center;
        margin-left: 14px;
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
        /* font-size: 1.25rem !important; */
    }

    .image-home {
        height: 260px !important;
        object-fit: cover;
    }

    .pd-tweet{
        padding:  1.875rem 2rem;
    }
    @media (max-width: 431px) {
       

        .image-home {
            height: 120px !important;
        }

        .box-content {
            margin: 0;
            background: none;
            border-left: none;
            padding: 1rem 0.5rem;
            height: auto;
        }

        .box-content h3 {
            font-size: 0.875rem !important;
            color: white;
            text-align: center;
            text-transform: uppercase;
        }

        .box-content-t1 h2 {
            font-size: 1.5rem;
        }

        .box-last {
            flex-direction: column;
            margin: 12px;
        }

        .box-image-last {
            width: 100%;
            object-fit: cover;
            transition: all .2s ease-in-out;
        }

        .box-content-t1 p {
            margin: 0.5rem 0;
            font-size: 1rem !important;
        }

        .home-content {
            -webkit-line-clamp: 3;
        }

        .text-secondary-foreground,
        span.text span {
            font-size: 1.175rem !important;
        }

        .box-image img:hover{
            transform: none;
        }

        .main.relative{
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/detail_mobile.jpg');
        }
        /* .main-content-center{
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/detail_mobile.jpg');
        } */

        section.second{
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/detail_mobile.jpg');
        }

        .last-post{
            background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home_mobile.jpg');
        }
        
       

      

    }

    @media (max-width: 1025px) and (min-width: 431px) {
        .image-home {
            height: 200px !important;
        }

        

        .box-content h3{
            font-size: 1.25rem;
        }

        .home-content{
            font-size: 1rem !important;
        }
    }

    

    

</style>
<div class="main relative">
    <section class="main-content-center">
        <div class="container">
            <div class="h2 title-content-main text-center p-5 d-none-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/monad.png" alt="Description" class="img-title"> - All you need is here
            </div>
            <div class="row pt-3">
                <?php
                 $categories = get_terms([
                    "taxonomy" => "category",
                    "hide_empty" => false,
                    "orderby" => "term_id",
                    "order" => "ASC",
                 ]);
                $artists = [
                    [   
                        "name" => "Hagen", 
                        "url" => "https://x.com/Hagen_web3",
                        "img" => "https://monadocs.xyz/wp-content/uploads/2024/08/homepage_monadlearn.png",
                    ],
                    [
                        "name" => "auroraxbt x empressitta", 
                        "url" => "https://x.com/empressitta",
                        'img' =>  "https://monadocs.xyz/wp-content/uploads/2024/08/homepage_monad-eco.png",
                    ],
                        
                    [
                        "name" => "",
                        "url" => "#",
                        'img' =>  get_template_directory_uri() . "/assets/images/3.png",
                    ],
                    [
                        "name" => "callmexenom",
                        "url" => "https://x.com/callmexenom",
                        'img' =>  "https://monadocs.xyz/wp-content/uploads/2024/08/homepage_Community-culture.png",
                    ],
                    [
                        "name" => "Linad",
                        "url" => "https://x.com/zhangliu_eth",
                        'img' =>  "https://monadocs.xyz/wp-content/uploads/2024/08/homepage_contribute.png",
                    ],
                    [
                        "name" => "Puichii",
                        "url" => "https://x.com/NPuichii",
                        'img' =>  "https://monadocs.xyz/wp-content/uploads/2024/08/homepage_Artists-and-Arts.png",
                    ],
                    [
                        "name" => "VU HUNG",
                        "url" => "https://x.com/vuvanhungxd9",
                        'img' =>  "https://monadocs.xyz/wp-content/uploads/2024/08/homepage_Monad-team-members.png",
                    ],
                     
                     [
                        "name" => "",
                        "url" => "#",
                        'img' =>  get_template_directory_uri() . "/assets/images/8.png",
                    ],
                    [
                        "name" => "",
                        "url" => "#",
                        'img' =>  get_template_directory_uri() . "/assets/images/9.png",
                    ],
                    [
                        "name" => "",
                        "url" => "#",
                        'img' =>  "https://monadocs.xyz/wp-content/uploads/2024/08/homepage_faq.png",
                    ],
                    ];
                for ($i = 1; $i <= count($categories); $i++) {
                    $trimmed_content = wp_trim_words($categories[$i-1]->description, 50, '...');
                     ?>
                    <div class="col-lg-4 col-md-6 col-6">
                        <a href="<?php echo esc_url(home_url("/". $categories[$i-1]->slug)); ?>">
                            <div class="box-content-main">
                                <div class="box-image">
                                    <img src="<?php echo $artists[$i-1]["img"] ?>" alt="Image Description" class="image-home">
                                </div>
                                <div class="box-artist d-none-sm <?php echo ($artists[$i-1]["name"] == "" ? "d-none" : ""); ?>">
                                    <a href="<?php echo $artists[$i-1]["url"]; ?>" target="_blank" rel="noopener noreferrer" class="artist ">Artist: <span><?php echo $artists[$i - 1]["name"]; ?></span></a>　
                                </div>
                                <div class="box-content ">
                                    <h3 class="home-title"><?php echo $categories[$i-1]->name; ?></h3>
                                    <p class="home-content d-none-sm"><?php echo $categories[$i-1]->description; ?></p>

                                </div>
                                <a href="<?php echo esc_url(home_url("/". $categories[$i-1]->slug)); ?>" class="see-more d-none-sm">
                                    <!-- <img aria-hidden="true" alt="chat-bubble" class="see" src="<?php echo get_template_directory_uri(); ?>/assets/images/Readmore icon.svg" /> -->
                                    Explore now
                                </a>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="second">
        <div class="container">
            <div  class="d-flex align-items-center justify-content-center gap-1 p-3">
            <a href="<?php echo home_url(); ?>" >
                    <img src="<?php echo get_template_directory_uri().'/assets/images/favicon.png' ?>" alt="Logo"class="favicon">
                </a>
                <h2 class="title-last-post text-white text-center fw-bold">
                 Last post 
            </h2>
            </div>
            

            <?php echo do_shortcode('[ajax_pagination_lastpost post_type="post"  posts_per_page="4" paged="1"]'); ?>
        </div>
    </section>
    <section class="last-post">
        <div class="container">
            <h2 class="title-last-post text-white text-center pd-tweet fw-bold">
                Monad hub Tweet
            </h2>
            <div class="row ">
                <div class="col-lg-3 col-md-6 col-12 ">
                    <div class="box-last-post" id="tweet-container">
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Gmonad!<a href="https://t.co/an9HNw4Ua7">https://t.co/an9HNw4Ua7</a> is coming soon…. Thank you to all the amazing artists who supported us. We will have a dedicated page for artists to showcase all their works on one screen, and you can easily access their personal Twitter page through the tag attached to the… <a href="https://t.co/8sGm9iKSTf">pic.twitter.com/8sGm9iKSTf</a></p>&mdash; Monad Hub (@Monadhub_xyz) <a href="https://twitter.com/Monadhub_xyz/status/1817737273053782329?ref_src=twsrc%5Etfw">July 29, 2024</a></blockquote>
                         <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 ">
                    <div class="box-last-post" id="tweet-container">
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr">I have been working on this UI/UX design for three weeks, and everything seems fine at the moment. The website&#39;s launch time is longer than expected, but we are trying to make it the best it can be within our capabilities. <br><br>By the way, we are looking for someone to take charge… <a href="https://t.co/vIhgAG9mVU">pic.twitter.com/vIhgAG9mVU</a></p>&mdash; ZhangLiu.eth (evm/acc) (@zhangliu_eth) <a href="https://twitter.com/zhangliu_eth/status/1817381164371595610?ref_src=twsrc%5Etfw">July 28, 2024</a></blockquote>
                         <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 ">
                    <div class="box-last-post" id="tweet-container">
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Deep in the shadows, twelve words intertwined,<br><br>Horcruxes hidden, a seed phrase designed.<br><br>Whispered secrets, each fragment’s plight,<br><br>Crack for glory, your house’s delight. <a href="https://t.co/yP6Iu3szzg">pic.twitter.com/yP6Iu3szzg</a></p>&mdash; Monad ⨀ (@monad_xyz) <a href="https://twitter.com/monad_xyz/status/1816126435129434206?ref_src=twsrc%5Etfw">July 24, 2024</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 ">
                    <div class="box-last-post" id="tweet-container">
                    <blockquote class="twitter-tweet"><p lang="en" dir="ltr"><a href="https://twitter.com/Monadhub_xyz?ref_src=twsrc%5Etfw">@Monadhub_xyz</a> <a href="https://t.co/M0alDUgHaj">https://t.co/M0alDUgHaj</a> is a small project of mine and <a href="https://twitter.com/Audi_sneakers?ref_src=twsrc%5Etfw">@Audi_sneakers</a> . It is your ultimate destination for all information related to Monad, the advanced Layer 1 blockchain, and its diverse ecosystem. At MonadHub, you can explore in-depth articles, stay updated… <a href="https://t.co/7YHaIVcQBs">https://t.co/7YHaIVcQBs</a> <a href="https://t.co/Xy8OZDunhb">pic.twitter.com/Xy8OZDunhb</a></p>&mdash; ZhangLiu.eth (evm/acc) (@zhangliu_eth) <a href="https://twitter.com/zhangliu_eth/status/1812017002892181908?ref_src=twsrc%5Etfw">July 13, 2024</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <box class="disclaimer1 d-none-sm">
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

<?php get_footer(); ?>