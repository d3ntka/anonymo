<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="main-footer" id="colophon">
<span class="red-square--big"></span>

<div class="<?php echo esc_attr( $container ); ?>">

	<!-- <div class="row d-flex justify-content-center align-items-center"> -->
		<div class="col-auto main-footer__title d-flex flex-wrap justify-content-center align-items-center aligncenter">

			<span class="lil-sygnet"></span>
			<div class="title main-footer__title--paddings"><span>#Be</span>One</div>
			<img src="wp-content/uploads/2021/05/logo.png" alt="logo anonymo">

		</div><!--col end -->


		<div class="main-footer__socials">
			<span class="elem_x"></span>
				<div class="main-footer__socials--wrapper">
				<?php if ( have_rows( 'sociale' ) ) : ?>
					<?php while ( have_rows( 'sociale' ) ) :
						the_row(); ?>
						<div class="main-footer__social">
							<?php if ( $social1 = get_sub_field( 'social1' ) ) : ?>
								<a href="<?php echo esc_html( $social1 ); ?>">
									<span class="logo_fb"></span>
								</a>
							<?php endif; ?>
						</div>
						<div class="main-footer__social">
							<?php if ( $social2 = get_sub_field( 'social2' ) ) : ?>
								<a href="<?php echo esc_html( $social2 ); ?>">
									<span class="logo_twitter"></span>
								</a>
							<?php endif; ?>
						</div>
						<div class="main-footer__social">
							<?php if ( $social3 = get_sub_field( 'social3' ) ) : ?>
								<a href="<?php echo esc_html( $social3 ); ?>">
									<span class="logo_instagram"></span>
								</a>
							<?php endif; ?>
						</div>
						<div class="main-footer__social">
							<?php if ( $social4 = get_sub_field( 'social4' ) ) : ?>
								<a href="<?php echo esc_html( $social4 ); ?>">
									<span class="logo_twitch"></span>
								</a>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				</div>
			<span class="elem_x"></span>
		</div>


<div class="row main-footer__menu">
	<div class="col-auto">
		<a href="#">O nas</a>
	</div>
	<div class="col-auto">
		<a href="#">Drużyny</a>
	</div>
	<div class="col-auto">
		<a href="#">Streamerzy</a>
	</div>
	<div class="col-auto">
		<a href="#">Sklep</a>
	</div>
	<div class="col-auto d-none">
		<a href="#">Media Zone</a>
	</div>
	<div class="col-auto d-none">
		<a href="#">FAQ</a>
	</div>
	<div class="col-auto">
		<a href="#">Kontakt</a>
	</div>
</div>
<div class="row main-footer__rules">
	<div class="col-auto d-none">
		<a href="#">Polityka prywatności</a>
	</div>
	<div class="col-auto d-none">
		<a href="#">Regulamin RODO</a>
	</div>
</div>

</div><!-- container end -->

</footer><!-- #colophon -->

</div><!-- #page we need this extra closing tag here -->
<div class="" style="height:0;">
	<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
		<defs>
			<filter id="glitch" x="0" y="0">

				<feColorMatrix in="SourceGraphic" mode="matrix" values="1 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 0" result="r" />

				<feOffset in="r" result="r" dx="-5" dy="0">
					<animate attributeName="dx" attributeType="XML" values="-1; .5; 3; -2; .4; .5; 2; 1; .5; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0;" dur=".5s" repeatCount="indefinite"/>
					<animate attributeName="dy" attributeType="XML" values="16; -8; 3.2; 16; 8; 24; -4.0; 16; 8; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0;" dur="1s" repeatCount="indefinite"/>
				</feOffset>

				<feColorMatrix in="SourceGraphic" mode="matrix" values="0 0 0 0 0  0 1 0 0 0  0 0 0 0 0  0 0 0 1 0" result="g"/>

				<feOffset in="g" result="g" dx="-5" dy="0">
					<animate attributeName="dx" attributeType="XML" values="0; 0; 0; 0; 0; 0; 0; 0; 2; -1; .4; 2; 1; 3; -.5; 2; 1; 0; 0; 0; 0; 0; 0; 0; 0;" dur="1.5s" repeatCount="indefinite"/>
					<animate attributeName="dy" attributeType="XML" values="0; 0; 0; 0; 0; 0; 0; 0; -1; .5; 3; -2; .4; .5; 2; 1; -.5; 0; 0; 0; 0; 0; 0; 0; 0;" dur="1s" repeatCount="indefinite"/>
				</feOffset>

				<feColorMatrix in="SourceGraphic" mode="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 1 0 0  0 0 0 1 0" result="b"/>

				<feOffset in="b" result="b" dx="5" dy="0">
					<animate attributeName="dx" attributeType="XML" values="0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 2; -1; .4; 2; 1; 3; -.5; 2; 1;" dur="0.35s" repeatCount="indefinite"/>
					<animate attributeName="dy" attributeType="XML" values="0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; 0; -1; .5; 3; -2; .4; .5; 2; 1; -.5;" dur="0.35s" repeatCount="indefinite"/>
				</feOffset>

				<feBlend in="r" in2="g" mode="screen" result="blend" />

				<feBlend in="blend" in2="b" mode="screen" result="blend" />

			</filter>
		</defs>
	</svg>

</div>
<?php wp_footer(); ?>

</body>

</html>
