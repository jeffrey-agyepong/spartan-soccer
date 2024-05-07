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
<section class="news">
<div class="page-header">
			<h2 class="uppercase">
				<?php the_title(); ?>
			</h2>
		</div>
</section>
</main><!-- #primary -->
<?php
get_sidebar();
get_footer();
