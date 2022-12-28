<?php
/*
* Template Name: Dashboard Template
* Template Post Type: page
*
* @package CoderDojo
* @subpackage CoderDojo Sixteen
* @since CoderDojo Sixteen 1.0
*/

get_header();?>
<h1>Events</h1>
<?php
echo '<main id="main" class="wrapper blog-home">'; ?>

	<aside id="aside-sidebar" style="background-color: #f4f5f6;">
		<?php if ( is_active_sidebar( 'archive-sidebar' ) ) : ?>
			<?php dynamic_sidebar( 'archive-sidebar' ); ?>
		<?php endif; ?>
	</aside>
<article id="article-single" class="spacer">
</article>
<?php echo'</main>';

get_footer();
