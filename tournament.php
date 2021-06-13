<?php
/**
 * The main template file
 *
 * Template Name: Tournament
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<span id="top"></span>

<section class="tournament-hero">
	<span class="elem_6x--loc1"></span>
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
	<div class="row aligncenter">
	  <div class="col-auto">

			<div class="main_title d-flex  aligncenter">
				<div class="sygnet--wrapper">
					<div class="glitch_sygnet">
						<?php
							$postaci_bg = get_field( 'postaci_bg' );
							if ( $postaci_bg ) : ?>
							<div class="tournament-hero__charactersBG" style="background-image:url('<?php echo esc_url( $postaci_bg['url'] ); ?>');"></div>
						<?php endif; ?>
					</div>

				</div>
				<div class="title">
					<?php
					$logo = get_field( 'logo' );
					if ( $logo ) : ?>
						<img meta property="og:image" src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
					<?php endif; ?>
				</div>

			</div>

	  </div>
	</div>




			<div class="row d-flex justify-content-between">
				<!-- sociale -->
				<div class="col-auto socials">
					<div class="row pb-3">
						<div class="col-auto">
							<h3 class="socials__title">
								<span>
									<?php if ( $socials_title = get_field( 'socials_title' ) ) : ?>
										<?php echo esc_html( $socials_title ); ?>
									<?php endif; ?>
								</span></h3>
						</div>
					</div>
					<div class="row d-flex justify-content-start align-items-center">
						<div class="col">
								<a href="<?php the_field('social1', 'option'); ?>">
									<span class="logo_fb"></span>
								</a>
						</div>
						<div class="col">
								<a href="<?php the_field('social2', 'option'); ?>">
									<span class="logo_twitter"></span>
								</a>
						</div>
						<div class="col">
							<a href="<?php the_field('social3', 'option'); ?>">
									<span class="logo_instagram"></span>
								</a>
						</div>
						<div class="col">
							<a href="<?php the_field('social4', 'option'); ?>">
									<span class="logo_twitch"></span>
								</a>
						</div>
					</div>
				</div>



				<?php if ( have_rows( 'sponsors' ) ) : ?>
				<div class="col-auto sponsors">
					<div class="row d-flex justify-content-end">
						<div class="col-auto">
							<h3 class="sponsors__title">
								<span>
									<?php if ( $sponsors_title = get_field( 'sponsors_title' ) ) : ?>
										<?php echo esc_html( $sponsors_title ); ?>
									<?php endif; ?>
								</span></h3>
						</div>

					</div>
					<div class="row d-flex justify-content-end align-items-center">
							<?php while ( have_rows( 'sponsors' ) ) :
								the_row(); ?>

								<?php	$sponsor_logo = get_sub_field( 'sponsor_logo' );
								if ( $sponsor_logo ) : ?>
								<div class="col-auto">
									<?php if ( $sponsor_link = get_sub_field( 'sponsor_link' ) ) : ?>
									<a href="<?php echo esc_html( $sponsor_link ); ?>"><img src="<?php echo esc_url( $sponsor_logo['url'] ); ?>" alt="<?php echo esc_attr( $sponsor_logo['alt'] ); ?>" /></a>

									<?php else: ?>
										<img src="<?php echo esc_url( $sponsor_logo['url'] ); ?>" alt="<?php echo esc_attr( $sponsor_logo['alt'] ); ?>" />
									<?php endif; ?>
								</div>

								<?php endif; ?>

							<?php endwhile; ?>


					</div>
				</div>
			<?php endif; ?>



			</div>

	</div><!-- #content -->

</section>



<section class="tournament-about">
	<div class="container-fluid tournament-about--wrapper" id="tournament-about">
		<span class="let-a--l2"></span>
		<!-- <span class="let-n--l3"></span> -->
		<span class="let-o--l3"></span>
		<span class="let-y--l2"></span>
		<div class="row d-flex justify-content-between align-items-center">
			<?php if ( have_rows( 'prizes' ) ) : ?>
				<div class="col-lg-10 col-xl-7">
					<div class="tournament-about__prizes">
							<?php while ( have_rows( 'prizes' ) ) :
								the_row(); ?>
								<div class="tournament-about__prizes--2nd-3rd">
									<h1 class="glitch" data-text="II">II</h1>
									<div class="tournament-about__prizes--place">Miejsce</div>
									<div class="tournament-about__prizes--amount">
										<?php if ( $place2 = get_sub_field( 'place2' ) ) : ?>
											<?php echo esc_html( $place2 ); ?><span>PLN</span>
										<?php endif; ?>
									</div>
								</div>
								<div class="tournament-about__prizes--1st">
									<h1 class="glitch" data-text="I">I</h1>
									<div class="tournament-about__prizes--place">Miejsce</div>
									<div class="tournament-about__prizes--amount1st">
										<?php if ( $place1 = get_sub_field( 'place1' ) ) : ?>
											<?php echo esc_html( $place1 ); ?><span>PLN</span>
										<?php endif; ?>
									</div>
								</div>
								<div class="tournament-about__prizes--2nd-3rd">
									<h1 class="glitch" data-text="III">III</h1>
									<div class="tournament-about__prizes--place">Miejsce</div>
									<div class="tournament-about__prizes--amount">
										<?php if ( $place3 = get_sub_field( 'place3' ) ) : ?>
											<?php echo esc_html( $place3 ); ?><span>PLN</span>
										<?php endif; ?>
									</div>
								</div>
							<?php endwhile; ?>
					</div>
			</div>
		<?php endif; ?>


			<div class="col-lg-10 col-xl-4 pb">
				<div class="tournament-about__text">
					<?php if ( $tournament_about_title = get_field( 'tournament_about_title' ) ) : ?>
						<h1 class="glitch" data-text="<?php echo esc_html( $tournament_about_title ); ?>"><?php echo esc_html( $tournament_about_title ); ?></h1>
					<?php endif; ?>
					<p><?php if ( $tournament_about_text = get_field( 'tournament_about_text' ) ) : ?>
							<?php echo $tournament_about_text; ?>
						<?php endif; ?></p>


					<?php if ( have_rows( 'tournament_about_link' ) ) : ?>
						<?php while ( have_rows( 'tournament_about_link' ) ) :
							the_row(); ?>

							<?php if (( $link_name = get_sub_field( 'link_name' ) ) && ( $link_target = get_sub_field( 'link_target' ) ) ): ?>

								<a href="<?php echo esc_html( $link_target ); ?>" class="links"><span><?php echo esc_html( $link_name ); ?></span></a>

							<?php endif; ?>

						<?php endwhile; ?>
					<?php endif; ?>



				</div>
			</div>
		</div>
	</div>
</section>






<section class="team pb-10">
	<span class="let-n--l2"></span>
	<span class="let-m--l2"></span>
	<span class="lil-sygnet--l1"></span>
	<div class="container-fluid">
		<div class="row">
			<div class="col-auto aligncenter">
				<?php if ( $tournament_teams_title = get_field( 'tournament_teams_title' ) ) : ?>
					<h1 class="glitch" data-text="<?php echo esc_html( $tournament_teams_title ); ?>" id="team"><?php echo esc_html( $tournament_teams_title ); ?></h1>
				<?php endif; ?>
			</div>
		</div>
		<div class="row pb-9">
			<div class="col-12 col-md-8 aligncenter">
				<p>
					<?php if ( $tournament_teams_text = get_field( 'tournament_teams_text' ) ) : ?>
						<?php echo $tournament_teams_text; ?>
					<?php endif; ?>
				</p>
			</div>
		</div>
	</div>


<!-- TEAM SLIDER -->

<!-- Slider main container -->
<?php if ( have_rows( 'tournament_teams_members' ) ) : ?>
	<div class="swiper-container_tournament">
	  <!-- Additional required wrapper -->
	  <div class="swiper-wrapper">
	    <!-- Slides -->
			<?php while ( have_rows( 'tournament_teams_members' ) ) :
				the_row(); ?>
			    <div class="swiper-slide">
						<!-- <div class="team__cont"> -->
						<div class="tournament-teams">
							<div class="tournament-teams__circle">
								<?php $photo = get_sub_field( 'photo' );
								if ( $photo ) : ?>
								<img src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" />
							<?php endif; ?>
						</div>
						<div class="tournament-teams__teamname">
							<div class="tournament-teams__teamname--team">Team</div>
							<div class="tournament-teams__teamname--name">
								<?php if ( $team_name = get_sub_field( 'team_name' ) ) : ?>
									<?php echo esc_html( $team_name ); ?>
								<?php endif; ?>
							</div>
						</div>
					</div>



						<!-- </div> -->
					</div>
				<?php endwhile; ?>

	  </div>
	  <!-- If we need pagination -->
	  <div class="swiper-pagination"></div>

	  <!-- If we need navigation buttons -->
	  <div class="swiper-button-prev"></div>
	  <div class="swiper-button-next"></div>

	  <!-- If we need scrollbar -->
	  <div class="swiper-scrollbar"></div>
	</div>
<?php endif; ?>

</section>

<!-- TOURNAMENT BRACKET -->
<section class="d-none">
	<?php if ( $bracket_embed = get_field( 'bracket_embed' ) ) : ?>
		<?php echo $bracket_embed; ?>
	<?php endif; ?>
</section>


<section id="tournament-twitch" class="tournament-twitch">
	<div class="container-fluid">
		<div class="row about__info">

			<!-- <div class="col-md-10 col-lg-8 col-xl-6"> -->
			<div class="col-12 col-xl-5 align-items-center justify-content-between">
		  	<div class="tournament-twitch__info--text mx-auto my-auto">
					<?php if ( $tournament_twitch_title = get_field( 'tournament_twitch_title' ) ) : ?>
						<h1 class="glitch" data-text="<?php echo esc_html( $tournament_twitch_title ); ?>"><?php echo esc_html( $tournament_twitch_title ); ?></h1>
					<?php endif; ?>
						<p><?php if ( $tournament_twitch_text = get_field( 'tournament_twitch_text' ) ) : ?>
								<?php echo $tournament_twitch_text; ?>
							<?php endif; ?></p>
						<?php if ( have_rows( 'tournament_twitch_link' ) ) : ?>
							<?php while ( have_rows( 'tournament_twitch_link' ) ) :
								the_row(); ?>

								<?php if (( $link_name = get_sub_field( 'link_name' ) ) && ( $link_target = get_sub_field( 'link_target' ) ) ): ?>


									<?php $icon = get_sub_field( 'icon' );
									if ( $icon ) : ?>
										<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
									<?php endif; ?>
									<a href="<?php echo esc_html( $link_target ); ?>" class="tournament-twitch__info--link"><span><?php echo esc_html( $link_name ); ?></span></a>

								<?php endif; ?>

							<?php endwhile; ?>
						<?php endif; ?>
				</div>

			</div>
			<div class="col-12 col-xl-7">
				<!-- <span class="let-a--l1"></span>
				<span class="let-o--l1"></span>
				<span class="let-n--l1"></span> -->
				<span class="red-square--l1"></span>
				<!-- <span class="red-square--l2"></span> -->
				<span class="elem_6x--loc2-tourn"></span>

				<div class="tournament-twitch__info--twitch-embed-cont">
				<div class="tournament-twitch__info--twitch-embed" id="twitch-embed"></div>
				</div>
				<!-- Load the Twitch embed JavaScript file -->
		    <script src="https://embed.twitch.tv/embed/v1.js"></script>

		    <!-- Create a Twitch.Embed object that will render within the "twitch-embed" element -->
				<?php if ( $tournament_twitch_channel = get_field( 'tournament_twitch_channel' ) ) : ?>

		    <script type="text/javascript">
		      new Twitch.Embed("twitch-embed", {
		        width: "100%",
		        height: "100%",
		        channel: "<?php echo esc_html( $tournament_twitch_channel ); ?>",
						layout: "video",
		      });
		    </script>
			<?php endif; ?>


			</div>
		</div>

	</div>
</section>



<?php
get_footer();
