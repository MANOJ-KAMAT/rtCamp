<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="slider">
				<div class="slider-text"><p>Gearing up the ideas</p></div>
				<div class="slider-arrow1">
					<img src="https://i.ibb.co/b6PCSDm/pagination-arrow.png" alt="">
				</div>
				<div class="slider-arrow2">
					<img src="https://i.ibb.co/b6PCSDm/pagination-arrow.png" alt="">
				</div>
				<div class="slider-text2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eaque et iusto natus nostrum omnis quia quo.</div>
			</div>
			<?php get_template_part( 'template-parts/feature-strip', get_post_type() ); ?>
			<div class="container">
				<div>
					<p class="headliner-text">D'SIGN IS THE SOUL</p>
					<button class="headliner-button">view more</button>
				</div>
				<hr style="border: 1px solid #62585f">
				<div class="grid-container">
					<img src="https://i.ibb.co/QKp0WGM/image-1.png">
					<img src="https://i.ibb.co/Jk0yx7Q/image-2.png">
					<img src="https://i.ibb.co/k96XndL/image-3.png">
					<img src="https://i.ibb.co/B2f5zzR/image-4.png">
					<img src="https://i.ibb.co/QMJsBsp/image-5.png">
					<img src="https://i.ibb.co/6BRr8L7/image-6.png">
				</div>


			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();