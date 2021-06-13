<?php
/**
 * The main template file
 *
 * Template Name: Front-page
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






<section id="about" class="about">
	<div class="container-fluid">
		<div class="row about__sectionA">

			<!-- <div class="col-md-10 col-lg-8 col-xl-6"> -->
			<div class="col-md-6">
		  	<div class="about__sectionA--text mx-auto my-auto">
					<?php if ( $about_title = get_field( 'about_title' ) ) : ?>
						<h1 class="glitch" data-text="<?php echo esc_html( $about_title ); ?>"><?php echo esc_html( $about_title ); ?></h1>
					<?php endif; ?>
						<p><?php if ( $about_text_1 = get_field( 'about_text_1' ) ) : ?>
								<?php echo $about_text_1; ?>
							<?php endif; ?></p>
						<br><br>
						<?php if ( have_rows( 'about_link_1' ) ) : ?>
							<?php while ( have_rows( 'about_link_1' ) ) :
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

				<div class="about__bg--1">

				</div>
			</div>
		</div>
		<div class="about__sectionB">

		<div class="row ">


			<div class="col-md-6 d-none d-md-block">
				<span class="red-square--smol"></span>
				<div class="about__bg--2">
					<span class="let-m--l1"></span>
					<span class="let-o--l2"></span>
					<span class="let-y--l1"></span>
					<span class="elem_6x--loc3"></span>

				</div>
			</div>
			<div class="col-md-6">
				<div class="about__sectionB--text">
					<p><?php if ( $about_text_2 = get_field( 'about_text_2' ) ) : ?>
							<?php echo $about_text_2; ?>
						<?php endif; ?></p>
					<br><br>

					<?php if ( have_rows( 'about_link_2' ) ) : ?>
						<?php while ( have_rows( 'about_link_2' ) ) :
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

	</div>
</section>

<section class="team pb-20">
	<span class="let-n--l2"></span>
	<span class="let-m--l2"></span>
	<span class="lil-sygnet--l1"></span>
	<div class="container-fluid pt-30">
		<div class="row">
			<div class="col-auto aligncenter">
				<h1 class="glitch" data-text="Drnżyua" id="team">Drużyna</h1>
			</div>
		</div>
		<div class="row pb-9">
			<div class="col-12 col-md-8 aligncenter">
				<p>Ci wspaniali gracze tworzą trzon naszej organizacji. To właśnie z nimi przeżywacie największe esportowe emocje. Poznajcie ich dokładniej i koniecznie wpadnijcie na przypięte social media!</p>
			</div>
		</div>
	</div>


<!-- TEAM SLIDER -->

<!-- Slider main container -->
<?php if ( have_rows( 'member' ) ) : ?>
	<div class="swiper-container">
	  <!-- Additional required wrapper -->
	  <div class="swiper-wrapper">
	    <!-- Slides -->
			<?php while ( have_rows( 'member' ) ) :
				the_row(); ?>
			    <div class="swiper-slide">
						<div class="team__cont">


							<?php $zdjecie = get_sub_field( 'zdjecie' );
							if ( $zdjecie ) : ?>
								<img class="team__photo" src="<?php echo esc_url( $zdjecie['url'] ); ?>" alt="<?php echo esc_attr( $zdjecie['alt'] ); ?>" />
							<?php endif; ?>

							<?php if ( $social_a = get_sub_field( 'social_a' ) ) : ?>
								<a href="<?php echo esc_html( $social_a ); ?>">
									<span class="team__social1"></span>
								</a>
							<?php endif; ?>

							<?php if ( $social_b = get_sub_field( 'social_b' ) ) : ?>
								<a href="<?php echo esc_html( $social_b ); ?>">
									<span class="team__social2"></span>
								</a>
							<?php endif; ?>

							<?php if ( $nick = get_sub_field( 'nick' ) ) : ?>
								<span class="team__name"><?php echo esc_html( $nick ); ?></span>
							<?php endif; ?>

						</div>
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
					<?php if ( $streamers_title = get_field( 'streamers_title' ) ) : ?>
						<h1 class="glitch" data-text="<?php echo esc_html( $streamers_title ); ?>"><?php echo esc_html( $streamers_title ); ?></h1>
					<?php endif; ?>
					<p><?php if ( $streamers_text = get_field( 'streamers_text' ) ) : ?>
							<?php echo $streamers_text; ?>
						<?php endif; ?></p>
					<br><br>


					<?php if ( have_rows( 'streamers_link' ) ) : ?>
						<?php while ( have_rows( 'streamers_link' ) ) :
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


<section class="shop-section pt-10">
	<div class="container-fluid shop">
		<div class="row d-flex justify-content-center align-items-center">
			<div class="col-md-6 mx-auto">
				<div class="shop__content">
					<?php if ( $shop_title = get_field( 'shop_title' ) ) : ?>
						<h1 class="glitch" data-text="<?php echo esc_html( $shop_title ); ?>"><?php echo esc_html( $shop_title ); ?></h1>
					<?php endif; ?>
					<p>
						<?php if ( $shop_text = get_field( 'shop_text' ) ) : ?>
							<?php echo $shop_text; ?>
						<?php endif; ?>
					</p>
					<br><br>



					<?php if ( have_rows( 'shop_link' ) ) : ?>
					<?php while ( have_rows( 'shop_link' ) ) :
						the_row(); ?>

						<?php if ( $link_name = get_sub_field( 'link_name' ) ) : ?>

							<a href="<?php the_field('shop_address', 'option'); ?>" class="links"><span><?php echo esc_html( $link_name ); ?></span></a>

						<?php endif; ?>

					<?php endwhile; ?>
				<?php endif; ?>


				</div>
			</div>
		</div>
		<span class="let-n--l4"></span>
		<span class="let-o--l4"></span>
		<span class="let-y--l3"></span>
		<span class="lil-sygnet--l2"></span>
		<span class="elem_6x--lshop"></span>
		<span class="red-square--lshop"></span>
		<span class="red-square--smolshop"></span>
	</div>

</section>

<?php
get_footer();
