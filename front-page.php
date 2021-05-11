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

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
	<div class="row aligncenter">
	  <div class="col-auto">

			<div class="main_title d-flex aligncenter">
				<div class="main_title--text">
					<span>#Be</span>One
				</div>
				<div class="sygnet_bg_white"></div>
			</div>

	  </div>
	</div>


			<div class="row d-flex justify-content-between">
				<!-- sociale -->
				<div class="col-auto">
					<div class="row">
						<div class="col-auto">
							<span>śledź nas</span>
						</div>
					</div>
					<div class="row">
						<div class="col">
							fb
						</div>
						<div class="col">
							twt
						</div>
						<div class="col">
							in
						</div>
						<div class="col">
							tch
						</div>
					</div>
				</div>

				<div class="col-auto">
					<div class="row d-flex justify-content-end">
						<div class="col-auto">
							<span>wspierają nas</span>
						</div>

					</div>
					<div class="row d-flex justify-content-end">
						<div class="col">
							kinguin
						</div>
						<div class="col">
							subway
						</div>
						<div class="col">
							sport.pl
						</div>
					</div>
				</div>



			</div>

	</div><!-- #content -->

</section>

<?php
get_footer();
