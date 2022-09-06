<?php 

add_action( 'cmb2_admin_init', 'villa_fields' );
add_action( 'cmb2_admin_init', 'restaurant_fields' );
add_action( 'cmb2_admin_init', 'experience_fields' );
add_action( 'cmb2_admin_init', 'offer_fields' );

add_action( 'cmb2_admin_init', 'faq_fields' );
add_action( 'cmb2_admin_init', 'downloads_fields' );

add_action( 'cmb2_admin_init', 'home_fields' );
add_action( 'cmb2_admin_init', 'page_fields' );
add_action( 'cmb2_admin_init', 'aboutPage_fields' );

add_action( 'cmb2_admin_init', 'perVilla_fields' );
add_action( 'cmb2_admin_init', 'indirestaurant_fields' );

add_action( 'cmb2_admin_init', 'artist_fields');
add_action( 'cmb2_admin_init', 'art_fields');

add_action( 'cmb2_admin_init', 'gallery_fields');


function villa_fields() {
	$cmb = new_cmb2_box( array(
		'id'            => 'rooms_metabox',
		'title'         => __( 'Details', 'cmb2' ),
		'object_types'  => array( 'villa',  ), // Post type
		'context'       => 'normal', 
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$cmb->add_field( array(
		'name'       => __( 'Description', 'cmb2' ),
		'id'         => 'description',
		'type'       => 'textarea',

	) );

	$cmb->add_field( array(
		'name' => __( 'Booking Url', 'cmb2' ),
		'id'   => 'booking_url',
		'type' => 'text_url',
	) );


    $cmb->add_field( array(
        'name'    => 'Floor plan Url',
        'id'      => 'button_url',
        'type'    => 'text_url',

        
    ) );

    $cmb->add_field( array(
		'name' => __( 'Learn More', 'cmb2' ),
		'id'   => 'more',
		'type' => 'text_url',
	) );

}

function restaurant_fields() {
	$cmb = new_cmb2_box( array(
		'id'            => 'restaurant_metabox',
		'title'         => __( 'Details', 'cmb2' ),
		'object_types'  => array('food' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

    $cmb->add_field( array(
		'name' => __( 'Sub heading', 'cmb2' ),
		'id'   => 'subheading',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name'       => __( 'Description', 'cmb2' ),
		'id'         => 'description',
		'type'       => 'textarea',
	) );


    $cmb->add_field( array(
        'name'    => 'Menu Url',
        'id'      => 'button_url',
        'type'    => 'text_url',
   
    ) );

}

function experience_fields() {
	$cmb = new_cmb2_box( array(
		'id'            => 'experience_metabox',
		'title'         => __( 'Details', 'cmb2' ),
		'object_types'  => array('experience' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );



	$cmb->add_field( array(
		'name'       => __( 'Description', 'cmb2' ),
		'id'         => 'description',
		'type'       => 'textarea',
	) );

    $cmb->add_field( array(
		'name'      => __( 'Button Text', 'cmb2' ),
		'id'        => 'button_text',
        'default'   => 'Learn more',
		'type'      => 'text_medium',
	) );

    $cmb->add_field( array(
        'name'    => 'Menu Url',
        'id'      => 'button_url',
        'type'    => 'text_url',

        
    ) );

}

function offer_fields() {
	$cmb = new_cmb2_box( array(
		'id'            => 'offer_metabox',
		'title'         => __( 'Details', 'cmb2' ),
		'object_types'  => array('offers' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

    $cmb->add_field( array(
		'name'       => __( 'Short description', 'cmb2' ),
		'id'         => 'description_short',
		'type'       => 'textarea_small',
	) );

	$cmb->add_field( array(
		'name'       => __( 'Description', 'cmb2' ),
		'id'         => 'description',
		'type'       => 'textarea',
	) );

    $cmb->add_field( array(
		'name'      => __( 'Button Text', 'cmb2' ),
		'id'        => 'button_text',
        'default'   => 'Book Now',
		'type'      => 'text_medium',
	) );

    $cmb->add_field( array(
        'name'    => 'Booking Url',
        'id'      => 'button_url',
        'type'    => 'text_url',

        
    ) );

    $cmb->add_field( array(
        'name'    => 'Inclusions',
        'id'      => 'inclusions',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, // use wpautop?
            'media_buttons' => false, // show insert/upload button(s)
            'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
            'teeny' => true, // output the minimal editor config used in Press This
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => false // load Quicktags, can be used to pass settings directly to Quicktags using an array()
        ),
        
    ) );

    $cmb->add_field( array(
        'name'    => 'Terms & Conditions',
        'id'      => 'terms',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, // use wpautop?
            'media_buttons' => false, // show insert/upload button(s)
            'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
            'teeny' => true, // output the minimal editor config used in Press This
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => false // load Quicktags, can be used to pass settings directly to Quicktags using an array()
        ),
        
    ) );

}

function page_fields() {
	$cmb = new_cmb2_box( array(
		'id'            => 'page_metabox',
		'title'         => __( 'Page Details', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$cmb->add_field( array(
		'name'       => __( 'Headline ', 'cmb2' ),
		'id'         => 'headline',
		'type'       => 'text',
	) );

    $cmb->add_field( array(
        'name'    => 'Button Text',
        'id'      => 'button_text',
        'type'    => 'text_medium',

        
    ) );

    $cmb->add_field( array(
		'name' => __( '(CTA) Button url', 'cmb2' ),
		'id'   => 'button_url',
		'type' => 'text_url',
	) );

    $cmb->add_field( array(
		'name' => __( 'Modal content?', 'cmb2' ),
		'id'   => 'is_modal',
		'type' => 'checkbox',
        'default' => false,
	) );

    // Hero section
    $cmb = new_cmb2_box( array(
		'id'            => 'page_hero',
		'title'         => __( 'Page Hero', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$cmb->add_field( array(
		'name'       => __( 'Enabled ', 'cmb2' ),
        'desc' => 'Enable hero image on this page',
		'id'         => 'hero_check',
		'type'       => 'checkbox',
	) );

    $cmb->add_field( array(
		'name'       => __( 'Enabled ', 'cmb2' ),
        'desc' => 'minimum 1920x1080',
		'id'         => 'hero_image',
		'type'       => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'query_args' => array(
            'type' => array(
                'image/jpeg',
                'image/jpg',
                'image/webp',
            ),
        ),
        'preview_size' => 'medium', // Image size to use when previewing in the admin.
	) );

}

// about page
function aboutPage_fields() {
	$cmb = new_cmb2_box( array(
		'id'            => 'why_nova_metabox',
		'title'         => __( 'Nova Hallmarks', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-about.php' ),		
        'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

    

	$why_nova = $cmb->add_field( array(
        'id'          => 'why_nova_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Entry', 'cmb2' ),
            'remove_button'     => __( 'Remove Entry', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    
    $cmb->add_group_field( $why_nova, array(
        'name' => 'Title',
        'id'   => 'title',
        'type' => 'text',
    ) );
    
    $cmb->add_group_field( $why_nova, array(
        'name' => 'Description',
        'id'   => 'description',
        'type' => 'textarea_small',
    ) );
    
    $cmb->add_group_field( $why_nova, array(
        'name' => 'Entry Image',
        'id'   => 'image',
        'type' => 'file',
    ) );


    $cmb = new_cmb2_box( array(
		'id'            => 'usp_nova_metabox',
		'title'         => __( 'Why Nova', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-about.php' ),		
        'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

    $cmb->add_field( array(
        'name'    => 'Enable Section',
        'id'      => 'nova_section_check',
        'type'    => 'checkbox',
        'default' => true,

    ) );

    $cmb->add_field( array(
        'name'    => 'Section title',
        'id'      => 'section_title',
        'type'    => 'text',
        'default' => 'Why Nova',

        
    ) );

	$nova_usp = $cmb->add_field( array(
        'id'          => 'nova_usp_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Entry', 'cmb2' ),
            'remove_button'     => __( 'Remove Entry', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    
    
    $cmb->add_group_field( $nova_usp, array(
        'name' => 'Title',
        'id'   => 'title',
        'type' => 'text',
    ) );
    
    $cmb->add_group_field( $nova_usp, array(
        'name' => 'Description',
        'id'   => 'description',
        'type' => 'textarea_small',
    ) );
    
    $cmb->add_group_field( $nova_usp, array(
        'name' => 'Entry Image',
        'id'   => 'image',
        'type' => 'file',
    ) );

    $cmb->add_group_field( $nova_usp, array(
        'name' => 'Button Text',
        'default' => 'Learn More',
        'id'   => 'button',
        'type' => 'text_medium',
    ) );

    $cmb->add_group_field( $nova_usp, array(
        'name' => 'Button Url',
        'id'   => 'button_url',
        'type' => 'text',
    ) );
    

}

//faq 
function faq_fields() {
	$cmb = new_cmb2_box( array(
		'id'            => 'faq_metabox',
		'title'         => __( 'Questions', 'cmb2' ),
		'object_types'  => array( 'page' ), 
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-faq.php' ),

		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$group_field_id = $cmb->add_field( array(
        'id'          => 'faq_group',
        'type'        => 'group',
        'description' => __( 'FAQ Questions & Answers', 'cmb2' ),
        'options'     => array(
            'group_title'       => __( 'FAQ {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another FAQ', 'cmb2' ),
            'remove_button'     => __( 'Remove FAQ', 'cmb2' ),
            'sortable'          => true,
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Question',
        'id'   => 'question',
        'type' => 'text',
    ) );
    
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Answer',
        'id'   => 'answer',
        'type' => 'textarea_small',
    ) );
    
}

// downloads
function downloads_fields() {
	$cmb = new_cmb2_box( array(
		'id'            => 'downloads_metabox',
		'title'         => __( 'Downloads', 'cmb2' ),
		'object_types'  => array( 'downloads' ), 

		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$group_field_id = $cmb->add_field( array(
        'id'          => 'download_group',
        'type'        => 'group',
        'description' => __( 'Download groups', 'cmb2' ),
        'options'     => array(
            'group_title'       => __( 'Group {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Group', 'cmb2' ),
            'remove_button'     => __( 'Remove Group', 'cmb2' ),
            'sortable'          => true,
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Name',
        'id'   => 'name',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Thumbnail',
        'id'   => 'preview',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'query_args' => array(
            'type' => array(
                	'image/gif',
                	'image/jpeg',
                	'image/png',
                ),
        ),
        'preview_size' => 'thumbnail',
    ) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => 'File url',
        'id'   => 'file',
        'type' => 'text',
    ) );

}

function home_fields() {
	$cmb = new_cmb2_box( array(
        'id'           => 'hero-section',
        'title'        => 'Hero Section',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => 'Hero Image (desktop)',
        'id'   => 'site_hero',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Hero Image (mobile)',
        'id'   => 'site_hero_mobile',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );





    // section one
	$cmb = new_cmb2_box( array(
        'id'           => 'section-one',
        'title'        => 'Section 1 - About Nova',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => '1_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => '1_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Button Text',
        'id'   => '1_button',
        'type' => 'text_medium',
    ) );

    $cmb->add_field( array(
        'name' => 'Button Url',
        'id'   => '1_button_url',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => 'Photo',
        'id'   => '1_image',
        'type' => 'file',
    ) );

    // section two
	$cmb = new_cmb2_box( array(
        'id'           => 'section-two',
        'title'        => 'Section 2 - Experiences',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => '2_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => '2_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Button Text',
        'id'   => '2_button',
        'type' => 'text_medium',
    ) );

    $cmb->add_field( array(
        'name' => 'Button Url',
        'id'   => '2_button_url',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => 'Photo 1',
        'id'   => '2_image_left',
        'type' => 'file',
    ) );

    $cmb->add_field( array(
        'name' => 'Photo 2',
        'id'   => '2_image_right',
        'type' => 'file',
    ) );


    // section food
	$cmb = new_cmb2_box( array(
        'id'           => 'section-three',
        'title'        => 'Section 3 - Food',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );


    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => '3_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => '3_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Button Text',
        'id'   => '3_button',
        'type' => 'text_medium',
    ) );

    $cmb->add_field( array(
        'name' => 'Button Url',
        'id'   => '3_button_url',
        'type' => 'text',
    ) );

    // section three : villas
	$cmb = new_cmb2_box( array(
        'id'           => 'section-four',
        'title'        => 'Section 4 - Villas',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => '4_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => '4_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Button Text',
        'id'   => '4_button',
        'type' => 'text_medium',
    ) );

    $cmb->add_field( array(
        'name' => 'Button Url',
        'id'   => '4_button_url',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => 'Photo 1',
        'id'   => '4_image_left',
        'type' => 'file',
    ) );

    $cmb->add_field( array(
        'name' => 'Photo 2',
        'id'   => '4_image_right',
        'type' => 'file',
    ) );


    // section five : offers
	$cmb = new_cmb2_box( array(
        'id'           => 'section-five',
        'title'        => 'Section 5 - Offers',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => '5_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => '5_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Button Text',
        'id'   => '5_button',
        'type' => 'text_medium',
    ) );

    $cmb->add_field( array(
        'name' => 'Button Url',
        'id'   => '5_button_url',
        'type' => 'text',
    ) );


    // section six : faq
	$cmb = new_cmb2_box( array(
        'id'           => 'section-six',
        'title'        => 'Section 6 - FAQ',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => '6_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => '6_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Button 1 Text',
        'id'   => '6_button1',
        'type' => 'text_medium',
    ) );

    $cmb->add_field( array(
        'name' => 'Button 1 Url',
        'id'   => '6_button1_url',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => 'Button 2 Text',
        'id'   => '6_button2',
        'type' => 'text_medium',
    ) );

    $cmb->add_field( array(
        'name' => 'Button 2 Url',
        'id'   => '6_button2_url',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => 'Photo',
        'id'   => '6_image',
        'type' => 'file',
    ) );

}


function perVilla_fields(){

    $cmb = new_cmb2_box( array(
		'id'            => 'villa_metabox',
		'title'         => __( 'villa Hallmarks', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-villa.php' ),		
        'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );


    //Button Add
    $villa = $cmb->add_field( array(
        'id'          => 'villa_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Menu', 'cmb2' ),
            'remove_button'     => __( 'Remove Menu', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    
    $cmb->add_group_field( $villa, array(
        'name' => 'Button Text',
        'id'   => 'menu',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $villa, array(
        'name' => __( 'URL' ),
        'id'   => 'Url',
        'type' => 'text',
    ) );

    
    //Image Gallery Carousel
    $cmb = new_cmb2_box( array(
		'id'            => 'villas_nova_metabox',
		'title'         => __( 'Villa Gallery', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-villa.php' ),		
        'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$nova_villas = $cmb->add_field( array(
        'id'          => 'nova_villas_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Entry', 'cmb2' ),
            'remove_button'     => __( 'Remove Entry', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    
    $cmb->add_group_field( $nova_villas, array(
        'name' => 'Entry Image',
        'id'   => 'image',
        'type' => 'file',
    ) );


    //Features
    $cmb = new_cmb2_box( array(
		'id'            => 'villas_feature_metabox',
		'title'         => __( 'Villa Fatures', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-villa.php' ),		
        'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

    $cmb->add_field( array(
        'name' => 'CHECKIN',
        'id'   => 'in',
        'type' => 'text_medium',
    ) );

    $cmb->add_field( array(
        'name' => 'CHECKOUT',
        'id'   => 'out',
        'type' => 'text_medium',
    ) );

    $cmb->add_field( array(
        'name' => 'OCCUPANCY',
        'id'   => 'occ',
        'type' => 'text_medium',
    ) );

    $cmb->add_field( array(
        'name' => 'SIZE',
        'id'   => 'size',
        'type' => 'text_medium',
    ) );

    //Feature Details
    $cmb = new_cmb2_box( array(
		'id'            => 'villas_details_metabox',
		'title'         => __( 'Villa Details', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-villa.php' ),		
        'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => 'title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Feature',
        'id'      => 'feature',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, // use wpautop?
            'media_buttons' => false, // show insert/upload button(s)
            'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
            'teeny' => true, // output the minimal editor config used in Press This
            'tinymce' => true, // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
            'quicktags' => false // load Quicktags, can be used to pass settings directly to Quicktags using an array()
        ),
        
    ) );


}


function indirestaurant_fields(){

    $cmb = new_cmb2_box( array(
		'id'            => 'restaurant_nova_metabox',
		'title'         => __( 'Restaurant Hallmarks', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-restaurant.php' ),		
        'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

    //Button Add
    $nova_desc = $cmb->add_field( array(
        'id'          => 'nova_desc_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Menu', 'cmb2' ),
            'remove_button'     => __( 'Remove Menu', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    
    $cmb->add_group_field( $nova_desc, array(
        'name' => 'Button Text',
        'id'   => 'btn',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $nova_desc, array(
        'name' => __( 'URL' ),
        'id'   => 'link',
        'type' => 'text',
    ) );

    //Image Gallery Carousel
   $cmb = new_cmb2_box( array(
		'id'            => 'restaurant_desc_metabox',
		'title'         => __( 'Restaurant Gallery', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-restaurant.php' ),		
        'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$restaurant_desc = $cmb->add_field( array(
        'id'          => 'restaurant_desc_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Entry', 'cmb2' ),
            'remove_button'     => __( 'Remove Entry', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    
    $cmb->add_group_field( $restaurant_desc, array(
        'name' => 'Entry Image',
        'id'   => 'img',
        'type' => 'file',
    ) );



}

//Art Community
function artist_fields(){

    $cmb = new_cmb2_box( array(
		'id'            => 'arts_metabox',
		'title'         => __( 'Details', 'cmb2' ),
		'object_types'  => array( 'art',  ), // Post type
		'context'       => 'normal', 
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );


    $cmb->add_field( array(
        'name' => 'Description',
        'id'   => 'description',
        'type' => 'textarea_small',
    ) );

    $cmb->add_field( array(
        'name'    => 'Watch More',
        'id'      => 'button_url',
        'type'    => 'text_url',

        
    ) );
}


function art_fields(){
    $cmb = new_cmb2_box( array(
		'id'            => 'nova_art_metabox',
		'title'         => __( 'Artist Details', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-art.php' ),		
        'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

    $nova_arti = $cmb->add_field( array(
        'id'          => 'nova_arti_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        
    ) );

    $cmb->add_group_field( $nova_arti, array(
        'name' => 'Main Images',
        'id'   => 'artimage',
        'type' => 'file',
    ) );

    $cmb = new_cmb2_box( array(
		'id'            => 'nova_art_metabox',
		'title'         => __( 'Art Gallery', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-art.php' ),		
        'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

    $nova_art = $cmb->add_field( array(
        'id'          => 'nova_art_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Entry', 'cmb2' ),
            'remove_button'     => __( 'Remove Entry', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $cmb->add_group_field( $nova_art, array(
        'name' => 'Title',
        'id'   => 'title',
        'type' => 'text',
    ) );

    
    $cmb->add_group_field( $nova_art, array(
        'name' => 'Images',
        'id'   => 'image',
        'type' => 'file',
    ) );

}




function gallery_fields(){
    $cmb = new_cmb2_box( array(
		'id'            => 'nova_gallery_metabox',
		'title'         => __( 'Gallery Details', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-gallery.php' ),		
        'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

    $nova_gal = $cmb->add_field( array(
        'id'          => 'nova_gal_group',
        'type'        => 'group',
        //'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Entry', 'cmb2' ),
            'remove_button'     => __( 'Remove Entry', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
        
    ) );

    $cmb->add_group_field( $nova_gal, array(
        'name' => 'Main Images',
        'id'   => 'artimage',
        'type' => 'file',
    ) );

    $cmb->add_group_field( $nova_gal, array(
        'name' => 'Image Caption',
        'id'   => 'cap',
        'type' => 'textarea_small',
    ) );


}


add_action( 'cmb2_admin_init', 'nova_register_theme_options_metabox' );
/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function nova_register_theme_options_metabox() {

	/**
	 * Registers options page menu item and form.
	 */
	$cmb_options = new_cmb2_box( array(
		'id'           => 'nova_option_metabox',
		'title'        => esc_html__( 'Nova Settings', 'myprefix' ),
		'object_types' => array( 'options-page' ),

		/*
		 * The following parameters are specific to the options-page box
		 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
		 */

		'option_key'      => 'nova_settings', // The option key and admin menu page slug.
		// 'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
		// 'menu_title'      => esc_html__( 'Options', 'myprefix' ), // Falls back to 'title' (above).
		// 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
		// 'capability'      => 'manage_options', // Cap required to view options-page.
		// 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
		// 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
		// 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
		//'save_button'     => esc_html__( 'Save Theme Options', '' ), // The text for the options-page save button. Defaults to 'Save'.
	) );

	/*
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */

	$cmb_options->add_field( array(
		'name' => __( 'Book Direct Benefits', '' ),
		'desc' => __( 'Appears on booking modal and offers page', '' ),
		'id'   => 'booking_benefits',
		'type'    => 'textarea_code',
        
		'default' => '<li> Best Price Guaranteed</li>
        <li> 2 Children Stay Free</li>
        <li> Free Upgrade from Breakfast to Half Board</li>
        <li> Free Upgrade on selected room categories</li>
        <li> 24 Hour Check-in/Check-Out</li>
        <li> Special benefits for Honeymooners</li>',
	) );

	// $cmb_options->add_field( array(
	// 	'name'    => __( 'Test Color Picker', '' ),
	// 	'desc'    => __( 'field description (optional)', '' ),
	// 	'id'      => 'test_colorpicker',
	// 	'type'    => 'colorpicker',
	// 	'default' => '#bada55',
	// ) );

}