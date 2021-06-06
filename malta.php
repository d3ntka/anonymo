<?php
/**
 * The main template file
 *
 * Template Name: Malta
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
				<div class="title--malta">
					<span>#Projekt</span>Malta
				</div>

			</div>

	  </div>
	</div>

			<div class="row d-flex justify-content-between">
				<!-- sociale -->
				<div class="col-auto socials">
					<div class="row pb-3">
						<div class="col-auto">
							<h3 class="socials__title"><span>śledź nas</span></h3>
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
							<h3 class="sponsors__title"><span>wspierają nas</span></h3>
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






<section id="about" class="about">
	<div class="container-fluid">
		<div class="row about__sectionA">

			<!-- <div class="col-md-10 col-lg-8 col-xl-6"> -->
			<div class="col-md-6">
		  	<div class="about__sectionA--text mx-auto my-auto">
					<?php if ( have_rows( 'malta_about' ) ) : ?>
						<?php while ( have_rows( 'malta_about' ) ) :
							the_row(); ?>

							<?php if ( $title = get_sub_field( 'title' ) ) : ?>
								<h1 class="glitch" data-text="<?php echo esc_html( $title ); ?>"><?php echo esc_html( $title ); ?></h1>
							<?php endif; ?>

							<?php if ( $opis = get_sub_field( 'opis' ) ) : ?>
								<p><?php echo $opis; ?></p>
							<?php endif; ?>

							<?php if (( $link_text = get_sub_field( 'link_text' ) ) && ( $link_target = get_sub_field( 'link_target' ) )): ?>
								<br><br>
								<a href="<?php echo esc_html( $link_target ); ?>" class="links"><span><?php echo esc_html( $link_text ); ?></span></a>
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
				<span class="let-m--l1--malta"></span>

				<div class="about__bg--1-malta">

				</div>
			</div>
		</div>
	</div>
</section>


<section id="calendar" class="calendar__section pb-10">

<div class="container-fluid calendar">

<div class="calendar__head">

	<div class="calendar__head--bgShadow"></div>
	<div class="calendar__head--bg">
		<span class="calendar__head--el1"></span>
		<span class="calendar__head--el2"></span>
		<span class="calendar__title">Kalendarz streamów</span>
	</div>
	</div>
	<div class="calendar-content">
		<div class="row">
			<!-- =================  Calendar repeater card   ======================= -->
			<?php if ( have_rows( 'calendar_group' ) ) : ?>
				<?php while ( have_rows( 'calendar_group' ) ) :
					the_row(); ?>
					<!-- <div class="calendar-item"> -->
					<div class="col-12 col-md calendar-item">
							<?php if ( $date = get_sub_field( 'date' ) ) : ?>
								<div class="calendar-item__date"><?php echo esc_html( $date ); ?></div>
							<?php endif; ?>
							<?php if ( $day = get_sub_field( 'day' ) ) : ?>
								<div class="calendar-item__day"><?php echo esc_html( $day ); ?></div>
							<?php endif; ?>
							<?php if ( have_rows( 'akcja' ) ) : ?>
								<?php while ( have_rows( 'akcja' ) ) :
									the_row(); ?>
										<div class="calendar-item__action">
											<div class="calendar-item__action--wrap">
												<?php if (( $godzina = get_sub_field( 'godzina' ) ) && ( $minuty = get_sub_field( 'minuty' ) )) : ?>
													<div class="calendar-item__hours"><?php echo $godzina; ?><sup><?php echo $minuty; ?></sup></div>
												<?php endif; ?>
												<div class="calendar-item__streamer">
													<?php	$streamer_photo = get_sub_field( 'streamer_photo' );
													if ( $streamer_photo ) : ?>
														<img class="calendar-item__img" src="<?php echo esc_url( $streamer_photo['url'] ); ?>" alt="<?php echo esc_attr( $streamer_photo['alt'] ); ?>" />
													<?php endif; ?>
													<?php if ( $streamer_nick = get_sub_field( 'streamer_nick' ) ) : ?>
														<div class="calendar-item__nick">
															<?php echo esc_html( $streamer_nick ); ?>
														</div>
													<?php endif; ?>
												</div>
												<?php if ( $stream_link = get_sub_field( 'stream_link' ) ) : ?>
													<a href="<?php echo esc_html( $stream_link ); ?>" class="calendar-item__btn--watch"><span>OGLĄDAJ</span></a>
												<?php else:
													echo '<div class="calendar-item__btn--soon">
													<svg class="spinner"><circle cx="10" cy="10" r="8"></circle></svg><span>WKRÓTCE</span></div>' ;?>
												<?php endif; ?>
											</div>
											<?php if ( $description = get_sub_field( 'description' ) ) : ?>
												<div class="calendar-item__desc"><?php echo esc_html( $description ); ?></div>
											<?php endif; ?>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
						<!-- </div> -->
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<!-- ================  / Calendar repeater card   ======================= -->

		</div>
	</div>
<!-- </div> -->

</div>

</section>










<section class="streamers">
	<div class="container-fluid streamers--wrapper" id="streamers" >
		<span class="let-a--l2"></span>
		<span class="let-n--l3"></span>
		<span class="let-o--l3"></span>
		<span class="let-y--l2"></span>
		<div class="row d-flex justify-content-center">
			<div class="col-lg-10 col-xl-5">
				<div class="streamers__circles-cont">
					<?php if ( have_rows( 'streamers_photos' ) ) : ?>
						<?php while ( have_rows( 'streamers_photos' ) ) :
							the_row(); ?>

							<?php
							$streamers_photos_1 = get_sub_field( 'streamers_photos_1' );
							if ( $streamers_photos_1 ) : ?>
								<img class="streamers__circle--1" src="<?php echo esc_url( $streamers_photos_1['url'] ); ?>" alt="<?php echo esc_attr( $streamers_photos_1['alt'] ); ?>" />
							<?php endif; ?>

							<?php
							$streamers_photos_2 = get_sub_field( 'streamers_photos_2' );
							if ( $streamers_photos_2 ) : ?>
								<img class="streamers__circle--2" src="<?php echo esc_url( $streamers_photos_2['url'] ); ?>" alt="<?php echo esc_attr( $streamers_photos_2['alt'] ); ?>" />
							<?php endif; ?>

							<?php
							$streamers_photos_3 = get_sub_field( 'streamers_photos_3' );
							if ( $streamers_photos_3 ) : ?>
								<img class="streamers__circle--3" src="<?php echo esc_url( $streamers_photos_3['url'] ); ?>" alt="<?php echo esc_attr( $streamers_photos_3['alt'] ); ?>" />
							<?php endif; ?>

							<?php
							$streamers_photos_4 = get_sub_field( 'streamers_photos_4' );
							if ( $streamers_photos_4 ) : ?>
								<img class="streamers__circle--4" src="<?php echo esc_url( $streamers_photos_4['url'] ); ?>" alt="<?php echo esc_attr( $streamers_photos_4['alt'] ); ?>" />
							<?php endif; ?>

							<?php
							$streamers_photos_5 = get_sub_field( 'streamers_photos_5' );
							if ( $streamers_photos_5 ) : ?>
								<img class="streamers__circle--5" src="<?php echo esc_url( $streamers_photos_5['url'] ); ?>" alt="<?php echo esc_attr( $streamers_photos_5['alt'] ); ?>" />
							<?php endif; ?>

							<?php
							$streamers_photos_6 = get_sub_field( 'streamers_photos_6' );
							if ( $streamers_photos_6 ) : ?>
								<img class="streamers__circle--6" src="<?php echo esc_url( $streamers_photos_6['url'] ); ?>" alt="<?php echo esc_attr( $streamers_photos_6['alt'] ); ?>" />
							<?php endif; ?>

							<?php
							$streamers_photos_7 = get_sub_field( 'streamers_photos_7' );
							if ( $streamers_photos_7 ) : ?>
								<img class="streamers__circle--7" src="<?php echo esc_url( $streamers_photos_7['url'] ); ?>" alt="<?php echo esc_attr( $streamers_photos_7['alt'] ); ?>" />
							<?php endif; ?>

							<?php
							$streamers_photos_8 = get_sub_field( 'streamers_photos_8' );
							if ( $streamers_photos_8 ) : ?>
								<img class="streamers__circle--8" src="<?php echo esc_url( $streamers_photos_8['url'] ); ?>" alt="<?php echo esc_attr( $streamers_photos_8['alt'] ); ?>" />
							<?php endif; ?>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>
			<div class="col-lg-10 col-xl-6">
				<div class="streamers__text">
					<h1 class="glitch" data-text="STRAEMREZY">STREAMERZY</h1>
					<p>Światła, kamera, akcja! Drużyna pozytywnie zakręconych influencerów znakomicie dopełnia obraz naszej organizacji. Bez nich nie mogłoby powstać wiele ciekawych, a czasem nawet szalonych projektów. Mamy nadzieję, że wszystkich już od dawna obserwujesz. A jeśli nie to nic straconego, wszystkie ich sociale znajdziesz poniżej!</p>
					<br><br>
					<a class="links" href="https://www.twitch.tv/team/anonymoesports"><span>zobacz więcej</span></a>
				</div>
			</div>
		</div>
	</div>
</section>



<?php
get_footer();
