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
	<section class="recruitment">
		<div class="page-header">
			<h2 class="uppercase">
				<?php the_title(); ?>
			</h2>
		</div>
		<div>
			<p>
				This page is for both players looking for a team to play on and teams looking for players. Complete
				whichever form applies to you and we will reach out to you to help facilitate your needs!
			</p>
		</div>
		<div class="headline-section">
			<p>

				All Things Spartan
			</p>
		</div>

		<form action="">
			<label for="player-name">Player Name:</label>
			<input type="text" id="player-name" name="player-name" required>
			<label for="player-email">Player Email:</label>
			<input type="email" id="player-email" name="player-email" required>
			<label for="player-phone">Player Phone:</label>
			<input type="tel" id="player-phone" name="player-phone" required>
			<label for="player-position">Player Position:</label>
			<select name="player-position" id="player-position" required>
				<option value="point-guard">Point Guard</option>
				<option value="shooting-guard">Shooting Guard</option>
				<option value="small-forward">Small Forward</option>
				<option value="power-forward">Power Forward</option>
				<option value="center">Center</option>
			</select>
			<label for="player-height">Player Height:</label>
			<input type="text" id="player-height" name="player-height" required>
			<label for="player-weight">Player Weight:</label>
			<input type="text" id="player-weight" name="player-weight" required>
			<label for="player-age">Player Age:</label>
			<input type="number" id="player-age" name="player-age" required>
			<label for="player-experience">Player Experience:</label>
			<select name="player-experience" id="player-experience" required>
				<option value="beginner">Beginner</option>
				<option value="intermediate">Intermediate</option>
				<option value="advanced">Advanced</option>
			</select>
			<label for="player-availability">Player Availability:</label>
			<select name="player-availability" id="player-availability" required>
				<option value="weekdays">Weekdays</option>
				<option value="weekends">Weekends</option>
				<option value="both">Both</option>
			</select>
			<label for="player-location">Player Location:</label>
			<input type="text" id="player-location" name="player-location" required>
			<label for="player-comments">Player Comments:</label>
			<textarea name="player-comments" id="player-comments" cols="30" rows="10"></textarea>
		</form>
	</section>
</main><!-- #primary -->
<?php
get_sidebar();
get_footer();
