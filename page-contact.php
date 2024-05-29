<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
<main id="primary" class="site-main">


	<section class="contact">
		<div class="page-header-2">
			<h2 class="uppercase">
				<?php the_title(); ?>
			</h2>
		</div>

		<div class="container">
			<?php the_content(); ?>
		</div>

	</section>



</main><!-- #primary -->
<?php
get_sidebar();
get_footer();
