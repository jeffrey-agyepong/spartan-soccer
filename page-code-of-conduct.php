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
	<section class="player-info">
		<div class="page-header">
			<h2 class="uppercase">
				<?php the_title(); ?>
			</h2>
		</div>
		<div class="headline-section">
			<p>
				Be Your Best To Have The Best Game
			</p>
		</div>

		<div>
			<p>
				Spartan Soccer offers soccer in a recreational and competitive league with the primary goal of providing
				exercise and recreation for members of the community. Players who join the league agree to abide by the
				code of conduct and to make the safety and enjoyment of the game their first priority.
			</p>
		</div>

		<section>
			<h3>
				1.0 Code of Conduct
			</h3>
			<ol>
				<li>
					Team captains will review the code of conduct with their team prior to the first game. Team captains
					will only field players who accept and abide by the rulings of the league. Amendments to the code of
					conduct can occur at any time of the season, such will be notified to the league and it is the
					responsibility of the teams and players to review for updates.
				</li>
				<li>
					Players who cannot abide by the rulings of the league may be suspended or removed from the league.
				</li>
				<li>
					Players shall conduct themselves in an appropriate manner at all times. Complaints about behaviour
					will be directed to their team captain whom in turn informs the game official and/or the league
					executive as needed.
				</li>
				<li>
					Players shall refrain from arguing with other players, fans or the referee at all times. The referee
					shall be responsible for conduct of players on the field and will be treated respectfully at all
					times.
				</li>
				<li>
					Only team captains or their designate will approach the referee during the game. Players should not
					dispute any rulings made by the referee.
				</li>
				<li>
					Players shall abide by all local laws, by-laws, policies and/or rental agreements at all times,
					during any and all league functions, which include but are not limited to: Annual general meeting,
					games, practices, end of year gatherings, etc.
				</li>
				<li>
					You are allowed to warm up prior to games but it must be off the pitch if they are in use.
				</li>
				<li>
					You must leave the field immediately upon game completion as there are only a few minutes until the
					next match begins. Conduct the end-game cheer and handshakes off the field so that the next teams
					can enter the pitch.
				</li>
				<li>
					Aggressive players will not be tolerated in this league. Players who can keep the game clean and are
					focused upon sharing their skills with other players in a safe manner are welcome. The focus is to
					improve the quality of soccer for all. Game official has final discretion upon aggressive play.
				</li>
				<li>
					Respect each other and the game.
				</li>
			</ol>
		</section>

		<section>
			<h3>
				Obligations toward the game
			</h3>
			<p>
				A player should:
			</p>
			<ol>
				<li>
					Make every effort to develop their own sporting ability, in terms of skill, technique, tactics and
					stamina.
				</li>
				<li>
					Give maximum effort and strive for the best possible performance during a game, even if the team is
					in a position where the desired result has already been achieved.
				</li>
				<li>
					Set a positive example for others, particularly young players and supporters.
				</li>
				<li>
					Avoid all forms of gamesmanship and time-wasting.
				</li>
				<li>
					Always have regard to the best interests of the game, including where publicly expressing an opinion
					on the game and any particular aspect of it, including others involved in the game.
				</li>
				<li>
					Not use inappropriate language.
				</li>
			</ol>
		</section>
		<section>
			<h3>
				Obligations towards the team
			</h3>
			<p>
				A player should:
			</p>
			<ol>
				<li>
					Make every effort consistent with Fair Play and the Laws of the Game to help the team wins.
				</li>
				<li>
					Resist any influence that might, or might be seen to bring into question the commitment to the team
					winning.
				</li>
			</ol>
		</section>

		<section>
			<h3>
				Respect towards Opponents
			</h3>
			<p>
				A player should:
			</p>
			<ol>
				<li>
					Treat opponents with due respect at all times, irrespective of the result of the game.
				</li>
				<li>
					Safeguard the physical fitness of opponents, avoid violence and rough play and help injured
					opponents.
				</li>
			</ol>
		</section>

		<section>
			<h3>
				Respect for the Laws of the Game and Competition Rules
			</h3>
			<p>
				A player should:
			</p>
			<ol>
				<li>
					Know and abide by the Laws, rules and spirit of the game, and the competition rules.
				</li>
				<li>
					Accept success and failure, victory and defeat, equally.
				</li>
				<li>
					Resist any temptation to take banned substances or use banned techniques.
				</li>
			</ol>
		</section>


		<section>
			<h3>
				Obligations towards the Supporters
			</h3>
			<p>
				A player should:
			</p>
			<ol>
				<li>
					Show due respect to the interests of supporters.
				</li>
			</ol>
		</section>

		<section>
			<h3>
				Respect towards Team Officials
			</h3>
			<p>
				A player should:
			</p>
			<ol>
				<li>
					Abide by the instructions of their Coach and Team Officials, provided they do not contradict the
					spirit of this Code.
				</li>
				<li>
					Show due respect towards the Team Officials of the opposition.
				</li>
			</ol>
		</section>

		<section>
			<h3>
				Respect towards the Referees
			</h3>
			<p>
				A player should:
			</p>
			<ol>
				<li>
					Accept the decision of the Referee without protest.
				</li>
				<li>
					Avoid words or actions that may mislead a Referee.
				</li>
				<li>
					Show due respect towards Referee.
				</li>
			</ol>
		</section>


		<section>
			<h3>
				Code of Conduct for Coaches/Managers
			</h3>
			<p>
				A Coach/Manager must:
			</p>
			<ol>
				<li>
					Be committed to improve the performance of the players and the team physically and mentally.
				</li>
				<li>
					Provide a high quality soccer program for players with a positive environment/atmosphere.
				</li>
				<li>
					Be thoroughly acquainted with FIFA Laws of the Game and they must keep attuned to the sound
					principles of coaching.
				</li>
				<li>
					Respect all human beings i.e. players and referees. Opponents and referees must be treated with
					respect.
				</li>
				<li>
					Encourage players to win within the laws of the game.
				</li>
				<li>
					Be enthusiastic and positive. They must ensure that they are generous with praise when deserved.
				</li>
				<li>
					Maintain the high standards of personal conduct and fair play.
				</li>
				<li>
					Never be involved in any circumstances that are offensive or suggest sexual connotations.
				</li>
			</ol>
		</section>

		<section>
			<h3>
				Code of Conduct for Parents/Guardians and Spectators
			</h3>
			<p>
				Parent’s/guardians/spectator’s expectations and attitudes have a significant bearing on a child’s
				attitude towards
			</p>
			<ul>
				<li>Other Players</li>
				<li>Referees</li>
				<li>Managers</li>
				<li>Spectators</li>
			</ul>
			<p>
				This club will ensure that parents/ guardians/spectators within the club are always positive and
				encouraging towards all of the players—not just their own—and will encourage parents/
				guardians/spectators to:
			</p>
			<ul>
				<li>Applaud the opposition as well as their own team.</li>
				<li>Avoid coaching the child during the game.</li>
				<li>Not to shout and scream.</li>
				<li>Respect the referee’s decisions.</li>
				<li>Give attention to each of the children involved in soccer not just the most talented.</li>
				<li>Give encouragement to everyone to participate in soccer.</li>
			</ul>
		</section>
		<section>
			<h3>
				Code of Conduct for Referees
			</h3>
			<p>
				Referees having certain privileges through and by The Association, with respect to the game, shall
				realize and respect their responsibilities and duties to The Association and the game. The Association
				endorses The Canadian Soccer Association’s “Code of Ethics” for Referees.
				Specifically Referees shall:
			</p>
			<ul>
				<li>Conduct themselves with dignity both on and off the field of play and shall, by example, endeavor to inspire the true principles of fair play and earn the respect of those whom they serve;</li>
				<li>Not cause The Association to become involved in any controversial matters and shall abide by the rules and regulations of the jurisdiction in which they officiate;</li>
				<li>Adhere to all standards and directives;</li>
				<li>Always be neat in appearance and maintain a high level of physical and mental fitness;</li>
				<li>Study the Laws of the game and be aware of all changes, and shall enforce all said Laws and changes;</li>
				<li>Perform their designated responsibilities, including attending organized clinics and lectures, etc., and shall assist their colleagues in upgrading and improving their standards of officiating, instructing and assessing;</li>
				<li>Honour any appointments made for and accepted by them unless unable to do so by virtue of illness or personal emergency;</li>
				<li>Not publicly criticize other referees or any soccer association nor shall they make any statements to the media related to any game in which they were involved;</li>
				<li>Be subject to disciplinary action for not complying with this Code of Conduct</li>
			</ul>
		</section>
	</section>
</main><!-- #primary -->
<?php
get_sidebar();
get_footer();
