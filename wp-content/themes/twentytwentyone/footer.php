<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<style>
    .box-footer{
        margin : 10px 
    }
    .box-por {
    position: absolute;
    left: 1%;
    bottom: 18%;
}
footer.bg-black.text-white.py-4.flex.items-center.justify-center.space-x-4.relative {
    height: 41px;
}
span.text-muted-foreground.mr-2 {
    font-family : 'Calibri';
    font-size: 16px;
    letter-spacing: var(--unnamed-character-spacing-0);
    text-align: left;
    letter-spacing: 0px;
    color: #949494;
    text-transform: capitalize;
    opacity: 1;
}



.text-account:hover{
    color: #836EF9;
    text-decoration: underline;
}
a.text-account {
    color: gray;
    color: var(--unnamed-color-ffffff);
    text-align: left;
    font: normal normal normal 16px / 24px Calibri;
    letter-spacing: 0px;
    color: #FFFFFF;
    text-transform: capitalize;
}
</style>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>


<footer class="bg-black text-white py-4 flex items-center justify-center space-x-4 relative detail-page fixed-footer">
    <div class="box-por">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="Logo" class="img-logo-footer img-fluid" style="width:100px;">
    &nbsp;
  <span class="text-muted-foreground mr-2">A Project By</span>
  <a href="https://twitter.com/Zhangliu_Eth" target="_blank" class="text-account">@Zhangliu_Eth</a>
  <span class="text-muted-poin ml-2 mr-2">•</span><a href="https://twitter.com/Audi_Sneakers" target="_blank" class="text-account">@Audi_Sneakers</a>
    </div>
</footer>
<?php wp_footer(); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var menuToggle = document.getElementById('menu-toggle');
        var menu = document.getElementById('site-navigation-mobile');

        
        menuToggle.addEventListener('click', function (e) {
            e.stopPropagation(); 
            menu.classList.toggle('active');
        });

        document.addEventListener('click', function (e) {
            if (!menu.contains(e.target) && e.target !== menuToggle) {
                menu.classList.remove('active');
            }
        });
    });
</script>
<script>
    document.getElementById('search-form-mobile').addEventListener('submit', function(event) {
        event.preventDefault();
        var keyword = document.getElementById('search-input-mobile').value;
        if (keyword.trim() === "") {
            event.preventDefault(); 
            return;
        }
        var url = new URL(window.location.href);
        var baseUrl = url.origin;
        var newUrl = baseUrl + '/search?k=' + encodeURIComponent(keyword);
        window.location.href = newUrl;
    });

    document.getElementById('click-search-mobile').addEventListener('click', function(event) {
        event.preventDefault();
        var keyword = document.getElementById('search-input-mobile').value;
        if (keyword.trim() === "") {
            event.preventDefault(); 
            return;
        }
        var url = new URL(window.location.href);
        var baseUrl = url.origin;
        var newUrl = baseUrl + '/search?k=' + encodeURIComponent(keyword);
        window.location.href = newUrl;
    });
    
</script>
</body>
</html>

