<?php
/*
* Template Name: Profile Template
* Template Post Type: page
*
* @package CoderDojo
* @subpackage CoderDojo Sixteen
* @since CoderDojo Sixteen 1.0
*/

get_header();?>



<main id="main" class="wrapper">
	<h1>Event</h1>
    <div class="is-layout-flex wp-block-buttons">
        <div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:16px"><?php edit_post_link( __( 'Edit Event', 'textdomain' ), '<a>', '</a>', null, 'wp-block-button__link has-text-color wp-element-button' );?></div>
        <div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:16px"><a class="wp-block-button__link has-text-color wp-element-button" href="<?php echo home_url('/dashboard/children/add'); ?>" style="border-radius:4px;color:#73449b">Export to CSV</a></div>
        <div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:16px"><a class="wp-block-button__link has-text-color wp-element-button" href="<?php echo home_url('/dashboard/children/add'); ?>" style="border-radius:4px;color:#73449b">New Applicant</a></div>
    </div>
    <table>
        <tr>
            <th>Attendee Name</th>
            <th>Ticket Name</th>
            <th>Ticket Type</th>
            <th>Application Date</th>
            <th>Age</th>
            <th>Parents/guardians</th>
            <th>Notes</th>
            <th>Approve</th>
            <th>Check In</th>
            <th>Delete</th>
        </tr>
        <tr>
            <td>Anthony Nolan</td>
            <td>Mentor</td>
            <td>Mentor</td>
            <td>13th December 2022</td>
            <td>34</td>
            <td></td>
            <td></td>
            <td><input type="checkbox" id="approve" name="approve" value="approved" /></td>
            <td><input type="checkbox" id="check-in" name="check-in" value="checked-in" /></td>
            <td><div class="is-layout-flex wp-block-buttons">
                    <div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:16px"><a class="wp-block-button__link has-text-color wp-element-button" href="<?php echo home_url('/dashboard/children/add'); ?>" style="border-radius:4px;color:#73449b">Delete</a></div>
                </div></td>
        </tr>
    </table>
    <div class="is-layout-flex wp-block-buttons">
        <div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:16px"><a class="wp-block-button__link has-text-color wp-element-button" href="<?php echo home_url('/dashboard/children/add'); ?>" style="border-radius:4px;color:#73449b">Cancel Event</a></div>
    </div>
</main>

<?php get_footer();
