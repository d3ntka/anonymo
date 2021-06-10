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

<section class="main_page">
	<span class="elem_6x--loc1"></span>
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
	<div class="row aligncenter">
	  <div class="col-auto">

			<div class="main_title d-flex  aligncenter">
				<div class="sygnet--wrapper">
					<div class="glitch_sygnet">
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/sygnet-img.png" alt=""> -->
						<div class="sygnet_bg"></div>
					</div>

				</div>
				<div class="title">
					<span>#Be</span>One
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

						<?php if ( have_rows( 'sponsors' ) ) : ?>
							<?php while ( have_rows( 'sponsors' ) ) :
								the_row(); ?>

										<?php if ( have_rows( 'sponsor1' ) ) : ?>
											<?php while ( have_rows( 'sponsor1' ) ) :
												the_row(); ?>


												<?php if ( $sponsor_link = get_sub_field( 'sponsor_link' ) ) : ?>
													<div class="col-auto">
												<a href="<?php echo esc_html( $sponsor_link ); ?>">
													<?php $sponsor_logo = get_sub_field( 'sponsor_logo' );
													if ( $sponsor_logo ) : ?>
														<img src="<?php echo esc_url( $sponsor_logo['url'] ); ?>" alt="<?php echo esc_attr( $sponsor_logo['alt'] ); ?>" />
													<?php endif; ?>
												</a>
											</div>
												<?php endif; ?>

											<?php endwhile; ?>
										<?php endif; ?>

								<?php if ( have_rows( 'sponsor2' ) ) : ?>
									<?php while ( have_rows( 'sponsor2' ) ) :
										the_row(); ?>

											<?php if ( $sponsor_link = get_sub_field( 'sponsor_link' ) ) : ?>
												<div class="col-auto">
												<a href="<?php echo esc_html( $sponsor_link ); ?>">
													<?php
													$sponsor_logo = get_sub_field( 'sponsor_logo' );
													if ( $sponsor_logo ) : ?>
														<img src="<?php echo esc_url( $sponsor_logo['url'] ); ?>" alt="<?php echo esc_attr( $sponsor_logo['alt'] ); ?>" />
													<?php endif; ?>
												</a>
											</div>
											<?php endif; ?>

									<?php endwhile; ?>
								<?php endif; ?>

								<?php if ( have_rows( 'sponsor3' ) ) : ?>
									<?php while ( have_rows( 'sponsor3' ) ) :
										the_row(); ?>

											<?php if ( $sponsor_link = get_sub_field( 'sponsor_link' ) ) : ?>
												<div class="col-auto">
												<a href="<?php echo esc_html( $sponsor_link ); ?>">
													<?php
													$sponsor_logo = get_sub_field( 'sponsor_logo' );
													if ( $sponsor_logo ) : ?>
														<img src="<?php echo esc_url( $sponsor_logo['url'] ); ?>" alt="<?php echo esc_attr( $sponsor_logo['alt'] ); ?>" />
													<?php endif; ?>
												</a>
											</div>
											<?php endif; ?>

									<?php endwhile; ?>
								<?php endif; ?>

								<?php if ( have_rows( 'sponsor4' ) ) : ?>
									<?php while ( have_rows( 'sponsor4' ) ) :
										the_row(); ?>

											<?php if ( $sponsor_link = get_sub_field( 'sponsor_link' ) ) : ?>
												<div class="col">

												<a href="<?php echo esc_html( $sponsor_link ); ?>">
													<?php
													$sponsor_logo = get_sub_field( 'sponsor_logo' );
													if ( $sponsor_logo ) : ?>
														<img src="<?php echo esc_url( $sponsor_logo['url'] ); ?>" alt="<?php echo esc_attr( $sponsor_logo['alt'] ); ?>" />
													<?php endif; ?>
												</a>
											</div>
											<?php endif; ?>

									<?php endwhile; ?>
								<?php endif; ?>



							<?php endwhile; ?>
						<?php endif; ?>

					</div>
				</div>



			</div>

	</div><!-- #content -->

</section>



<section class="tournament-about">
	<div class="container-fluid tournament-about--wrapper" id="tournament-about">
		<span class="let-a--l2"></span>
		<span class="let-n--l3"></span>
		<span class="let-o--l3"></span>
		<span class="let-y--l2"></span>
		<div class="row d-flex justify-content-center">
			<div class="col-lg-10 col-xl-5">





		</div>


			<div class="col-lg-10 col-xl-6">
				<div class="tournament_about__text">
					<?php if ( $tournament_about_title = get_field( 'tournament_about_title' ) ) : ?>
						<h1 class="glitch" data-text="<?php echo esc_html( $tournament_about_title ); ?>"><?php echo esc_html( $tournament_about_title ); ?></h1>
					<?php endif; ?>
					<p><?php if ( $tournament_about_text = get_field( 'tournament_about_text' ) ) : ?>
							<?php echo $tournament_about_text; ?>
						<?php endif; ?></p>
					<br><br>


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






<section class="team pb-20">
	<span class="let-n--l2"></span>
	<span class="let-m--l2"></span>
	<span class="lil-sygnet--l1"></span>
	<div class="container-fluid pt-30">
		<div class="row">
			<div class="col-auto aligncenter">
				<?php if ( $tournament_teams_title = get_field( 'tournament_teams_title' ) ) : ?>
					<h1 class="glitch" data-text="Drnżyua" id="team">	<?php echo esc_html( $tournament_teams_title ); ?></h1>
				<?php endif; ?>
			</div>
		</div>
		<div class="row pb-9">
			<div class="col-12 col-md-8 aligncenter">
				<?php if ( $tournament_teams_text = get_field( 'tournament_teams_text' ) ) : ?>
					<?php echo $tournament_teams_text; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>


<!-- TEAM SLIDER -->

<!-- Slider main container -->
<?php if ( have_rows( 'tournament_teams_members' ) ) : ?>
	<div class="swiper-container">
	  <!-- Additional required wrapper -->
	  <div class="swiper-wrapper">
	    <!-- Slides -->
			<?php while ( have_rows( 'tournament_teams_members' ) ) :
				the_row(); ?>
			    <div class="swiper-slide">
						<!-- <div class="team__cont"> -->
						<div class="">
							<div class="tournament-teams__circle">
								<?php $photo = get_sub_field( 'photo' );
								if ( $photo ) : ?>
								<img src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" />
							<?php endif; ?>
						</div>
						<div class="tournament-teams__teamname">
							<?php if ( $team_name = get_sub_field( 'team_name' ) ) : ?>
								<span class="primary">Team</span><?php echo esc_html( $team_name ); ?>
							<?php endif; ?>
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
<section>
	<?php if ( $bracket_embed = get_field( 'bracket_embed' ) ) : ?>
		<?php echo $bracket_embed; ?>
	<?php endif; ?>
</section>


<section id="tournament-twitch" class="tournament-twitch">
	<div class="container-fluid">
		<div class="row about__sectionA">

			<!-- <div class="col-md-10 col-lg-8 col-xl-6"> -->
			<div class="col-md-6">
		  	<div class="tournament-twitch__sectionA--text mx-auto my-auto">
					<?php if ( $tournament_twitch_title = get_field( 'tournament_twitch_title' ) ) : ?>
						<h1 class="glitch" data-text="<?php echo esc_html( $tournament_twitch_title ); ?>"><?php echo esc_html( $tournament_twitch_title ); ?></h1>
					<?php endif; ?>
						<p><?php if ( $tournament_twitch_text = get_field( 'tournament_twitch_text' ) ) : ?>
								<?php echo $tournament_twitch_text; ?>
							<?php endif; ?></p>
						<br><br>
						<?php if ( have_rows( 'tournament_twitch_link' ) ) : ?>
							<?php while ( have_rows( 'tournament_twitch_link' ) ) :
								the_row(); ?>

								<?php if (( $link_name = get_sub_field( 'link_name' ) ) && ( $link_target = get_sub_field( 'link_target' ) ) ): ?>

									<a href="<?php echo esc_html( $link_target ); ?>" class="links"><span><?php echo esc_html( $link_name ); ?></span></a>

								<?php endif; ?>

							<?php endwhile; ?>
						<?php endif; ?>
				</div>

			</div>
			<div class="col">
				<span class="let-a--l1"></span>
				<span class="let-o--l1"></span>
				<span class="let-n--l1"></span>
				<span class="red-square--l1"></span>
				<span class="red-square--l2"></span>
				<span class="elem_6x--loc2"></span>


<?php // TODO: twitch embed ?>
				<div class="about__bg--1">

				</div>




			</div>
		</div>

	</div>
</section>



<?php
get_footer();
