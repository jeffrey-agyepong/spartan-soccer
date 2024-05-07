<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
if ( is_home() ) {
	wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );
} else {
	wp_rig()->print_styles( 'wp-rig-content' );
}

?>
<main id="primary" class="site-main">
	<!-- -------HERO SECTION------- -->
	<section class="hero-banner">
		<div class="banner-overlay"></div>
		<div class="hero-text">
			<h2>
				Alberta's Premier Independent Soccer Association
			</h2>
			<p>
				Experience Soccer, Build Community.
			</p>
			<div class="flex-btn">
				<a href="" class="btn">Join The Spartan Family</a>
				<a href="" class="btn">Get In Touch</a>
			</div>
		</div>
	</section>

	<!-- -------ABOUT SECTION------- -->
	<section class="about">
		<div class="about-text">
			<h2>About Spartan Soccer</h2>
			<p>
				Founded in 2017 as a summer tournament, we exploded into a thriving co-ed soccer league,
				multiple annual tournaments, and bootcamps. In 2020 we debuted our Women’s and Men’s Open League, and
				our Youth Program. When the pandemic hit, we were able to pivot on a
				dime and offer a free outdoor soccer program as a way of giving back to the community and help people
				cope with the stress of the pandemic.  We have evolved with the times to provide cohort sports. Now with
				that behind us, we are steam rolling forward with many initiatives to build the soccer community for
				all. We hope you join our movement!
			</p>
			<a href="" class="btn">Get Involved</a>
		</div>
		<div class="about-img">
			<img src="./wp-content/uploads/2024/05/about-section-spartan.webp" alt="About Us Image" class="rounded">
		</div>
	</section>

	<!-- -------PROGRAMS------- -->
	<section class="programs">
		<h2 class="uppercase">Programs</h2>
		<div class="program-cards">
			<div class="program-card">
				<div class="header">
					<h3 class="uppercase">Adult</h3>
				</div>
				<div class="program-body">
					<p>
						We register and manage teams in external leagues in addition to our internal program. Some
						teams
						have structured training with coaches (such as our EDSA Mens). All teams are invited to coached
						sessions as a bonus.
					</p>
				</div>
				<div class="program-link">
					<a href="#">Learn More</a>
				</div>
			</div>
			<div class="program-card">
				<div class="header">
					<h3 class="uppercase">Youth</h3>
				</div>
				<div class="program-body">
					<p>
						TBA
					</p>
				</div>
				<div class="program-link">
					<a href="#">Learn More</a>
				</div>
			</div>
			<div class="program-card">
				<div class="header">
					<h3 class="uppercase">Tournaments</h3>
				</div>
				<div class="program-body">
					<p>
						We currently offer three different tournaments during the year with a theme. This will be open
						event
						for all residents of Alberta for Mens, Womens, COED, and Youth teams.  Spartan may change the
						formatting and structure depending upon number of teams registered. 
					</p>
				</div>
				<div class="program-link">
					<a href="#">Learn More</a>
				</div>
			</div>
		</div>
	</section>

	<!-- -------BACKGROUND------- -->
	<section class="bg-img">
		<h3>
			Serving Our Soccer Community Since 2017
		</h3>
		<p>
			~soccer for passion~
		</p>
	</section>

	<!-- -------Gallery------- -->
	<section class="gallery-section">
		<h2>
			Gallery
		</h2>
		<div class="gallery">
			<div class="gallery-img">
				<img src="https://via.placeholder.com/500" alt="Gallery Image">
			</div>
			<div class="gallery-img">
				<img src="https://via.placeholder.com/500" alt="Gallery Image">
			</div>
			<div class="gallery-img">
				<img src="https://via.placeholder.com/500" alt="Gallery Image">
			</div>
			<div class="gallery-img">
				<img src="https://via.placeholder.com/500" alt="Gallery Image">
			</div>
			<div class="gallery-img">
				<img src="https://via.placeholder.com/500" alt="Gallery Image">
			</div>
			<div class="gallery-img">
				<img src="https://via.placeholder.com/500" alt="Gallery Image">
			</div>
			<div class="gallery-img">
				<img src="https://via.placeholder.com/500" alt="Gallery Image">
			</div>
			<div class="gallery-img">
				<img src="https://via.placeholder.com/500" alt="Gallery Image">
			</div>

		</div>
	</section>

	<!-- -------Sponsors------- -->
	<section class="sponsors">
		<h2>
			Our Sponsors
		</h2>
		<div class="sponsor-logos">
			<div class="sponsor-logo">
				<img src="https://via.placeholder.com/100" alt="Sponsor Logo">
			</div>
			<div class="sponsor-logo">
				<img src="https://via.placeholder.com/100" alt="Sponsor Logo">
			</div>
			<div class="sponsor-logo">
				<img src="https://via.placeholder.com/100" alt="Sponsor Logo">
			</div>
			<div class="sponsor-logo">
				<img src="https://via.placeholder.com/100" alt="Sponsor Logo">
			</div>
			<div class="sponsor-logo">
				<img src="https://via.placeholder.com/100" alt="Sponsor Logo">
			</div>
			<div class="sponsor-logo">
				<img src="https://via.placeholder.com/100" alt="Sponsor Logo">
			</div>
			<div class="sponsor-logo">
				<img src="https://via.placeholder.com/100" alt="Sponsor Logo">
			</div>
			<div class="sponsor-logo">
				<img src="https://via.placeholder.com/100" alt="Sponsor Logo">
			</div>
			<div class="sponsor-logo">
				<img src="https://via.placeholder.com/100" alt="Sponsor Logo">
			</div>
			<div class="sponsor-logo">
				<img src="https://via.placeholder.com/100" alt="Sponsor Logo">
			</div>
		</div>
	</section>

	<!-- -------Newsletter------- -->
	<section class="newsletter">
		<h2>
			Subscribe to Our Newsletter
		</h2>

		<div class="newsletter-container">
			<img src="" alt="">
			<form action="">
				<input type="email" placeholder="Enter your email">
				<button>Subscribe</button>
			</form>
		</div>
	</section>
</main><!-- #primary -->
<?php
get_footer();
