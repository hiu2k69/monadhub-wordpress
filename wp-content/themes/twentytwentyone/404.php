<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
if (!defined("ABSPATH"))
{
    exit();
}

get_header();
?>
<style>
	   section.not-found {
	background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/BG-ss1.png');
   background-size: cover;
   background-repeat: no-repeat;
   position: relative;
   z-index: 1;
   padding-top: 4rem;
   min-height: 100vh; 
   background-position: center; 
   }
   header#masthead {
    position: fixed;
    z-index: 1000;
}
   .box-notfoud {
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    width: 500px;
}

.fixed-footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      z-index: 1000;
   }
   h3.content-not {
    font-family: 'Calibri';
    line-height: 1.6;
    text-align: center;
    color: #836EF9;	
	font-size: 30px;
	font-weight:bolder;

}
img.not-found{
	width: 80%;
}
</style>

	<section class="not-found">
		<div class="box-notfoud">
   				<img src="https://monadocs.xyz/wp-content/uploads/2024/07/salmonadrub-scaled.gif" alt="" class="not-found w-80">
				<h3 class="content-not">"Oh no, you visit wrong page, you have
			to run out of this place, run! runnn"</h3>
		</div>
	</section>

<?php
get_footer();
?>