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
	<section class="programs">
		<div class="page-header">
			<h2 class="uppercase">
				<?php the_title(); ?>
			</h2>
		</div>
		<div class="container">
			<div class="program-content">
				<div class="headline-section">
					<p>
						Keep your teams together - Registration is open!
					</p>
				</div>
				<div class="row">
					<p>
						A year full of soccer with Spartan. Join the fam as we have everything to suit your needs: COED
						programs running through the week, Mens, Womens,and Masters teams in EDSA, VMSL, SAMMRL, and
						SASA.
						Launching Youth club & Community in 2023 fall. Always adding more and pushing the norm. Read
						more
						about them below.
					</p>
				</div>
			</div>
			<ul class="programs-list">
				<li>More games per season than elsewhere</li>
				<li>Season finals, trophy, medals, standings</li>
				<li>Annual Spartan Championship in September</li>
				<li>Annual Game of Trophies (GoT) in December</li>
				<li>You can sub as requested for other teams without restrictions</li>
				<li>Payment plans are offered</li>
				<li>Team managers get fully enabled team management software</li>

			</ul>
			<div class="cta">
				<p>
					Want to improve? Check out our Adult, Youth, and Goalkeeper Training Programs
				</p>
				<a href="" class="btn">Register</a>
			</div>
			<br>
			<br>

			<!-- ----- SCHEDULES ----- -->
			<div class="responsive-table">
				<section class="day-section-sunday">
					<h3 class="day-content head">Sunday</h3>
					<p class="day-content recipe">Adult Training Camps</p>
					<p class="day-content url">Yes Footie Adults</p>
					<p class="day-content notes">SAMMRL: Mens 35+</p>
					<p class="day-content notes">SASA COED</p>
				</section>

				<section class="day-section-monday">
					<h3 class="day-content head">Monday</h3>
					<p class="day-content recipe">EDSA Womens</p>
					<p class="day-content url">Yes Footie Adults</p>
					<p class="day-content notes">Coached Team Training</p>
				</section>

				<section class="day-section-tuesday">
					<h3 class="day-content head">Tuesday</h3>
					<p class="day-content recipe">VMSL 35 Premier (no boards)</p>
				</section>

				<section class="day-section-wednesday">
					<h3 class="day-content head">Wednesday</h3>
					<p class="day-content recipe">Spartan Adult COED</p>
					<p class="day-content url">EDSA Mens</p>
				</section>

				<section class="day-section-thursday">
					<h3 class="day-content head">Thursday</h3>
					<p class="day-content recipe">EDSA Mens</p>
					<p class="day-content url">VMSL 45 & 55 (no boards)</p>
				</section>

				<section class="day-section-friday">
					<h3 class="day-content head">Friday</h3>
					<p class="day-content recipe">EDSA 35+ Masters</p>
					<p class="day-content url">VMSL 45 & 55 (no boards)</p>
				</section>

				<section class="day-section-saturday">
					<h3 class="day-content head">Saturday</h3>
					<p class="day-content recipe">Training Camps</p>
					<p class="day-content url">Yes Footie Adults</p>
				</section>
			</div>
		</div>
	</section>
</main><!-- #primary -->
<?php
get_sidebar();
get_footer();
