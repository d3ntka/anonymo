<?php
/**
 * The main template file
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

			<div class="main_title d-flex aligncenter">
				<div class="main_title--text">
					<span>#Be</span>One
				</div>
				<div class="sygnet_bg_red"></div>
				<div class="sygnet_bg_cyan"></div>
				<div class="sygnet_bg_white"></div>

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
						<?php if ( have_rows( 'sociale' ) ) : ?>
							<?php while ( have_rows( 'sociale' ) ) :
								the_row(); ?>
								<div class="col">
									<?php if ( $social1 = get_sub_field( 'social1' ) ) : ?>
										<a href="<?php echo esc_html( $social1 ); ?>">
											<span class="logo_fb"></span>
										</a>
									<?php endif; ?>
								</div>
								<div class="col">
									<?php if ( $social2 = get_sub_field( 'social2' ) ) : ?>
										<a href="<?php echo esc_html( $social2 ); ?>">
											<span class="logo_twitter"></span>
										</a>
									<?php endif; ?>
								</div>
								<div class="col">
									<?php if ( $social3 = get_sub_field( 'social3' ) ) : ?>
										<a href="<?php echo esc_html( $social3 ); ?>">
											<span class="logo_instagram"></span>
										</a>
									<?php endif; ?>
								</div>
								<div class="col">
									<?php if ( $social4 = get_sub_field( 'social4' ) ) : ?>
										<a href="<?php echo esc_html( $social4 ); ?>">
											<span class="logo_twitch"></span>
										</a>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
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
<section>
	<div class="container-fluid">
		<div class="row about__sectionA">
			<div class="col-md-6">
		  	<div class="about__sectionA--text">
					<h1 class="glitch" data-text="O ANS">O Nas</h1>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
					</div>
			</div>
			<div class="col-md-6 ">
				<div class="about__bg--1">

				</div>
			</div>
		</div>
		<div class="about__sectionB">
		<div class="row ">


			<div class="col-md-6">
				<div class="about__bg--2">

				</div>
			</div>
			<div class="col-md-6">
				<div class="about__sectionB--text">
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
					<br><br>
					<a href="#team" class="links"><span>Nasz Team</span></a>
				</div>
			</div>
			</div>
		</div>

	</div>
</section>

<section class="team" id="team">
	<div class="container-fluid mt-30">
		<div class="row">
			<div class="col-auto aligncenter">
				<h1 class="glitch" data-text="Drnżyua">Drużyna</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-8 aligncenter">
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
			</div>
		</div>

		<div class="row d-flex justify-content-center">
			<div class="col-auto">
				<div class="team__cont">
					<a href="#">
						<span class="team__social1"></span>
					</a>
					<a href="#">
						<span class="team__social2"></span>
					</a>
					<img class="team__photo" src="<?php echo get_template_directory_uri(); ?>/img/innocent.png" class="img-fluid " alt="team member photo">
					<span class="team__name">innocent</span>
				</div>
			</div>
			<div class="col-auto">
				<div class="team__cont">
					<a href="#">
						<span class="team__social1"></span>
					</a>
					<a href="#">
						<span class="team__social2"></span>
					</a>
					<img class="team__photo" src="<?php echo get_template_directory_uri(); ?>/img/kei.png" class="img-fluid " alt="team member photo">
					<span class="team__name">KEi</span>
				</div>
			</div>
			<div class="col-auto">
				<div class="team__cont">
					<a href="#">
						<span class="team__social1"></span>
					</a>
					<a href="#">
						<span class="team__social2"></span>
					</a>
					<img class="team__photo" src="<?php echo get_template_directory_uri(); ?>/img/kei.png" class="img-fluid " alt="team member photo">
					<span class="team__name">KEi</span>
				</div>
			</div>
			<div class="col-auto">
				<div class="team__cont">
					<a href="#">
						<span class="team__social1"></span>
					</a>
					<a href="#">
						<span class="team__social2"></span>
					</a>
					<img class="team__photo" src="<?php echo get_template_directory_uri(); ?>/img/kei.png" class="img-fluid " alt="team member photo">
					<span class="team__name">KEi</span>
				</div>
			</div>
			<div class="col-auto">
				<div class="team__cont">
					<a href="#">
						<span class="team__social1"></span>
					</a>
					<a href="#">
						<span class="team__social2"></span>
					</a>
					<img class="team__photo" src="<?php echo get_template_directory_uri(); ?>/img/kei.png" class="img-fluid " alt="team member photo">
					<span class="team__name">KEi</span>
				</div>
			</div>
		</div>





	</div>
</section>




<?php
get_footer();
