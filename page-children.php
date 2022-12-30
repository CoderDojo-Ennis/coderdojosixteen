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
<h1>My Children</h1>
<?php
echo '<main id="main" class="wrapper blog-home">'; ?>

	<aside id="aside-sidebar" style="background-color: #f4f5f6;">

        <div class="is-layout-flex wp-block-buttons">
            <div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:16px"><a class="wp-block-button__link has-text-color wp-element-button" href="<?php echo home_url('/dashboard/children/add'); ?>" style="border-radius:4px;color:#73449b">Add Child</a></div>
        </div>
	</aside>
<article id="article-single" class="spacer">

</article>
<?php echo'</main>';

get_footer();
