<?php
/*
* Template Name: Dashboard Template
* Template Post Type: page
*
* @package CoderDojo
* @subpackage CoderDojo Sixteen
* @since CoderDojo Sixteen 1.0
*/

get_header();

echo '<main id="main" class="wrapper">'; ?>
<h1>My Dojos</h1>
    <div class="is-layout-flex wp-block-buttons">
        <div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:16px"><a class="wp-block-button__link has-text-color wp-element-button" href="<?php echo home_url('/dashboard/my-dojos/users'); ?>" style="border-radius:4px;color:#73449b">Manage Users</a></div>
    </div>
    <div class="is-layout-flex wp-block-buttons">
        <div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:16px"><a class="wp-block-button__link has-text-color wp-element-button" href="<?php echo home_url('/dashboard/my-dojos/events'); ?>" style="border-radius:4px;color:#73449b">Manage Events</a></div>
    </div>
    https://zen.coderdojo.com/dojo/acffc45d-4d4f-4b86-9a9e-e0a2007ed3db
    https://zen.coderdojo.com/dashboard/edit-dojo/acffc45d-4d4f-4b86-9a9e-e0a2007ed3db
<?php echo'</main>';

get_footer();
