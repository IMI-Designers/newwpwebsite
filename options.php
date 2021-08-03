<?php

function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
} 
function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'newwpwebsite' ),
		'two' => __( 'Two', 'newwpwebsite' ),
		'three' => __( 'Three', 'newwpwebsite' ),
		'four' => __( 'Four', 'newwpwebsite' ),
		'five' => __( 'Five', 'newwpwebsite' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'newwpwebsite' ),
		'two' => __( 'Pancake', 'newwpwebsite' ),
		'three' => __( 'Omelette', 'newwpwebsite' ),
		'four' => __( 'Crepe', 'newwpwebsite' ),
		'five' => __( 'Waffle', 'newwpwebsite' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'Basic Settings', 'newwpwebsite' ),
		'type' => 'heading'
	);
    $options[] = array(
		'name' => __( 'Add Logo', 'newwpwebsite' ),
		'placeholder' => __( 'upload logo.', 'newwpwebsite' ),
		'id' => 'newwpwebsite_logo',
		'type' => 'upload'
	);

	    $options[] = array(
		'name' => __( 'Add Ratina Logo', 'newwpwebsite' ),
		'placeholder' => __( 'upload ratina logo.', 'newwpwebsite' ),
		'id' => 'ratina_logo',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Add Footer Logo', 'newwpwebsite' ),
		'placeholder' => __( 'upload Footer logo.', 'newwpwebsite' ),
		'id' => 'footer_logo',
		'type' => 'upload'
	);

		$options[] = array(
		'name' => __( 'Open Time Add', 'newwpwebsite' ),
		'placeholder' => __( 'Open Time link', 'newwpwebsite' ),
		'id' => 'time',
		'type' => 'text'
	);
	
	
	
	
	$options[] = array(
		'name' => __( 'Phone No:', 'newwpwebsite' ),
		'placeholder' => __( 'Enter Phone No.', 'newwpwebsite' ),
		'id' => 'phone',
		'std' => '+ 0406 583 082',
		'type' => 'text'
	);

	
	$options[] = array(
		'name' => __( 'Email:', 'newwpwebsite' ),
		'placeholder' => __( 'Enter Email Address.', 'newwpwebsite' ),
		'id' => 'email',
		'std' => 'azqualitycars.605belmore@gmail.com',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Address:', 'newwpwebsite' ),
		'placeholder' => __( 'Your Address.', 'newwpwebsite' ),
		'id' => 'address',
		'type' => 'textarea'
	);

		$options[] = array(
		'name' => __( 'newwpwebsite:', 'newwpwebsite' ),
		'placeholder' => __( 'newwpwebsite link.', 'newwpwebsite' ),
		'id' => 'newwpwebsite',
		'std' => '#',
		'type' => 'text'
	);

    $options[] = array(
		'name' => __( 'Facebook:', 'newwpwebsite' ),
		'placeholder' => __( 'Enter Facebook link.', 'newwpwebsite' ),
		'id' => 'facebook',
		'std' => '#',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Instagram:', 'newwpwebsite' ),
		'placeholder' => __( 'Enter instagram link', 'newwpwebsite' ),
		'id' => 'instagram',
		'std' => '#',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Youtube:', 'newwpwebsite' ),
		'placeholder' => __( 'Enter Youtube link', 'newwpwebsite' ),
		'id' => 'youtube',
		'std' => '#',
		'type' => 'text'
	);

 $options[] = array(
		'name' => __( 'Twitter:', 'newwpwebsite' ),
		'placeholder' => __( 'Enter Twitter link.', 'newwpwebsite' ),
		'id' => 'twitter',
		'std' => '#',
		'type' => 'text'
	);

  $options[] = array(
		'name' => __( 'Linkedin:', 'newwpwebsite' ),
		'placeholder' => __( 'Enter Linkedin link.', 'newwpwebsite' ),
		'id' => 'linkedin',
		'std' => '#',
		'type' => 'text'
	);

   $options[] = array(
		'name' => __( 'Youtube:', 'newwpwebsite' ),
		'placeholder' => __( 'Enter Youtube link.', 'newwpwebsite' ),
		'id' => 'youtube',
		'std' => '#',
		'type' => 'text'
	);


	$options[] = array(
		'name' => __( 'Footer Text', 'newwpwebsite' ),
		'type' => 'heading'
	);

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	$options[] = array(
		'name' => __( 'Footer About Text', 'newwpwebsite' ),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'anyar' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'footer_text',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

	return $options;
}