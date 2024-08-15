<?php

/**
 * Template Name: Custom about monad
 */

get_header();

?>
<style>

.content-about{
    background-image: url(<?php echo get_template_directory_uri().'/assets/images/BG-ss1.png' ?>);
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    z-index: 1;
}
</style>
<section class="content-about">
    <div class="container py-5">
        <div class="row">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/about-monadhub.jpg" ?>" alt="">

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