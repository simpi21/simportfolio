<?php
/**
 * The template for displaying full screen pages.
 *
 * Template Name: Sim Portfolio
 *
 * @package shapla
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <div id="stackonet-app"></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>