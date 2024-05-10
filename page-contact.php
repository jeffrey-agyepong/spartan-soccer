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

<div class="container">
<section class="contact">
		<div class="page-header">
			<h2 class="uppercase">
				<?php the_title(); ?>
			</h2>
		</div>
		<div class="contact-card">
			<h3>
				Email
			</h3>
			<p>
				<a href="mailto:info@spartan.soccer">
					info@spartan.soccer
				</a>
			</p>
		</div>
		<div class="contact-card">
			<h3>
				Social Media
			</h3>

		</div>
		<div class="contact-card">
			<h3>
				Spartan Soccer PO Box
			</h3>
			<p>
				PO Box 23043 Citadel <br>
				St. Albert, AB <br>
				T8N 6Z9
			</p>
		</div>

	</section>
</div>


</main><!-- #primary -->
<?php
get_sidebar();
get_footer();
