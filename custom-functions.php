<?php
/**********************************************************************
* R.One Creative Wordpress Theme
*
* File name:
*      custom_functions.php
* Brief:
*      Wordpress custom functions
* Author:
*      R.One Creative
* Author URI:
*      http://r1creative.net
* Contact:
*      info@r1creative.net

***********************************************************************/

/*=====================================================================
  Additional Functions
=====================================================================*/
function comment_validation_init() {
    if(is_single() && comments_open() ) { ?>        
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('#commentform').validate({
                    rules: {
                        author: {
                            required: true,
                            minlength: 2
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        comment: {
                            required: true,
                            minlength: 1
                        }
                    },
                    messages: {
                        author: "Please fill the required field",
                        email: "Please enter a valid email address.",
                        comment: "Please fill the required field"
                    },
                    errorElement: "div",
                        errorPlacement: function(error, element) {
                        element.after(error);
                    }
                });
            });
        </script><?php
    }
}

add_action('wp_footer', 'comment_validation_init');

function remove_menu(){
    remove_menu_page( 'edit.php' );
}
add_action('admin_menu', 'remove_menu');

add_filter( 'gform_confirmation_anchor', '__return_false' );


add_filter( 'avatar_defaults', 'wpb_new_gravatar' );
function wpb_new_gravatar ($avatar_defaults) {
    $myavatar = 'http://r1creativedev.net/project883/wp-content/uploads/2020/02/author-img.png';
    $avatar_defaults[$myavatar] = "Shiftlab Gravatar";
    return $avatar_defaults;
}

add_filter( 'get_comment_date', 'wpsites_change_comment_date_format' );
function wpsites_change_comment_date_format( $d ) {
    $d = date('M d, Y');

    return $d;
}
/**
 * Filters the next, previous and submit buttons.
 * Replaces the forms <input> buttons with <button> while maintaining attributes from original <input>.
 *
 * @param string $button Contains the <input> tag to be filtered.
 * @param object $form Contains all the properties of the current form.
 *
 * @return string The filtered button.
 */
add_filter( 'gform_next_button', 'input_to_button', 10, 2 );
add_filter( 'gform_previous_button', 'input_to_button', 10, 2 );
add_filter( 'gform_submit_button', 'input_to_button', 10, 2 );
function input_to_button( $button, $form ) {
    $dom = new DOMDocument();
    $dom->loadHTML( $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $new_button = $dom->createElement( 'button' );
    $new_button_span = $dom->createElement( 'span' );
    $new_button_span->appendChild( $dom->createTextNode( $input->getAttribute( 'value' ) ) );
    $new_button->appendChild( $new_button_span );
    $input->removeAttribute( 'value' );
    foreach( $input->attributes as $attribute ) {
        $new_button->setAttribute( $attribute->name, $attribute->value );
    }
    $input->parentNode->replaceChild( $new_button, $input );
 
    return $dom->saveHtml( $new_button );
}

/**
 * Proper way to enqueue scripts and styles
 */

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

function _remove_script_version( $src ){ 
    $parts = explode( '?', $src ); 	
    return $parts[0]; 
} 

// add_filter( 'script_loader_src', '_remove_script_version', 15, 1 ); 
// add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );


function mastertheme_styles_scripts() {
    wp_enqueue_style( 'r1-animate', get_template_directory_uri().'/assets/css/animate.css', array(), '', false );
    wp_enqueue_style( 'r1-app', get_template_directory_uri().'/assets/css/app.css', array(), time(), false );

    wp_enqueue_script( 'r1-wow-script', get_template_directory_uri() .'/assets/js/wow.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'r1-slick-script', get_template_directory_uri() .'/assets/js/slick.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'r1-vivus-script', get_template_directory_uri() .'/assets/js/vivus.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'r1-skrollr-script', get_template_directory_uri() . '/assets/js/skrollr.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'r1-infinite-scroll-script', get_template_directory_uri() . '/assets/js/infinite-scroll.min.js', array('jquery'), '', true );

    if ( is_singular()) { 
        wp_enqueue_script( 'comment-reply' ); 
    }

    wp_enqueue_script( 'r1-tweenmax-script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js', array(), '', true );
    wp_enqueue_script( 'r1-scrollmagic-script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', array(), '', true );
    wp_enqueue_script( 'r1-scrollmagic-tweenmax--script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array(), '', true );
    wp_enqueue_script( 'r1-scrollmagic-indicator-script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'mastertheme_styles_scripts' );

/**
 * Enable vCard Upload 
 *
 */
function be_enable_vcard_upload( $mime_types ){
    $mime_types['vcf'] = 'text/x-vcard';
    return $mime_types;
}

add_filter('upload_mimes', 'be_enable_vcard_upload' );
  

function my_acf_load_value( $value, $post_id, $field )
{
    // run the_content filter on all textarea values
    $value = apply_filters('the_content',$value); 
    $value = str_replace("<!--more-->", '<span id="more-'. $post_id .'"></span>', $value);

    return $value;
}

add_filter('acf/load_value/type=wysiwyg', 'my_acf_load_value', 10, 3);

add_image_size('team_member_photo', 345, 292, 1);
add_image_size('member_logo', 406, 104, 1);
add_image_size('facebook_share', 600, 315, 1);
add_image_size('facebook_share_large', 1200, 630, 1);

// function filter_blog_posts($query){
//     if(!is_admin() && $query->is_main_query()){
//         if(is_post_type_archive('blog')){
//             $query->set( 'posts_per_page', 3 );
//             return;
//         }
//     }
// }

// add_action('pre_get_posts', 'filter_blog_posts');

function create_slug($string){
    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
    return $slug;
}

add_filter( 'gform_confirmation_anchor', '__return_false' );


// add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
// function form_submit_button( $button, $form ) {
//     return "<button class='button gform_button' id='gform_submit_button_{$form['1']}'><span>Submit</span></button>";
// }


if( function_exists('acf_add_options_page') ) {

    // add parent
	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title' 	=> 'Theme Settings',
		'redirect' 		=> false
	));
	
	// add sub page
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Banner Settings',
	// 	'menu_title' 	=> 'Banner Settings',
	// 	'parent_slug' 	=> $parent['menu_slug'],
	// ));
}

add_action('admin_head', 'mastertheme_custom_styles');

function mastertheme_custom_styles() {
  echo '<link rel="stylesheet" href="'.get_stylesheet_directory_uri().'/engine/asset/css/module_styles.css" type="text/css" media="all" />';
}

function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}






/*=====================================================================
  End of Additional Functions
=====================================================================*/

add_action( 'after_setup_theme', 'r1mastertheme_setup' );

if(!function_exists( 'r1mastertheme_setup' )):
	function r1mastertheme_setup(){
        # Enable the theme for mobile view
        r1()->_isMobile = true;

        # Enable debugging...
        r1()->_enableDebug = false;

        # Enable modernizr
        r1()->enableModule('modernizr');

        # Register navigations for menu
        r1ts()->registerNavMenu(
            array(
                'primary-menu' => 'Primary Menu',
                'hamburger-menu' => 'Hamburger Menu',
                'quick-links-menu' => 'Quick Links Menu',
                'shiftlab-solutions-menu' => 'Shiftlab Solutions Menu'
            )
        );

        # Enable dashboard welcome contents
        r1()->enableModule('dashboard-welcome-contents');

		# Enable featured post for the theme
		r1ts()->enableFeaturedPost();
        
        add_theme_support( 'html5', ['gallery', 'caption']);
        add_theme_support( 'title-tag' );

		# Fix some default security issue
		# r1ts()->do_security_checking();

		# Rander Assets
		# Usually when a module randered, it renders both style and script of that module.
		# So module name can be passed through the rander function and those module
		# will be consider for exclusion.

		r1()->randerCss();
		r1()->randerJs();
	}






/*===============================
    Custom Post Type
=================================*/

// Register Post Type Team Member

    // Register Post Type Testimonial
    $labels = array(
        'name' => 'Testimonial',
        'singular_name' => 'Testimonial',
        'add_new' => 'Add New Testimonial',
        'add_new_item' => 'Add New Testimonial',
        'edit_item' => 'Edit Testimonial',
        'new_item' => 'New Testimonial',
        'all_items' => 'All Testimonials',
        'view_item' => 'View Testimonial',
        'search_items' => 'Search Testimonial',
        'not_found' =>  'No Testimonial found',
        'not_found_in_trash' => 'No Testimonial found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Testimonial'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'testimonial' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title','editor'),
    );
    r1ts()->registerPostType(__('testimonial', 'r1'), $labels, $args);


    // Register Post Type Solutions
    $labels = array(
        'name' => 'Solutions',
        'singular_name' => 'Solutions',
        'add_new' => 'Add New Solutions',
        'add_new_item' => 'Add New Solutions',
        'edit_item' => 'Edit Solutions',
        'new_item' => 'New Solutions',
        'all_items' => 'All Solutions',
        'view_item' => 'View Solutions',
        'search_items' => 'Search Solutions',
        'not_found' =>  'No Solutions found',
        'not_found_in_trash' => 'No Solutions found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Solutions'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'solutions' ),
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => true,
        'menu_position' => null,
        'supports' => array( 'title','editor','thumbnail'),
    );
    r1ts()->registerPostType(__('solutions', 'r1'), $labels, $args);


    $labels = array(
        'name' => 'Blog',
        'singular_name' => 'Blog',
        'add_new' => 'Add New Blog',
        'add_new_item' => 'Add New Blog',
        'edit_item' => 'Edit Blog',
        'new_item' => 'New Blog',
        'all_items' => 'All Blog',
        'view_item' => 'View Blog',
        'search_items' => 'Search Blog',
        'not_found' =>  'No Blog found',
        'not_found_in_trash' => 'No Blog found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Blog'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'blog' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title','editor','excerpt','thumbnail','author','comments'),
    );
    r1ts()->registerPostType(__('blog', 'r1'), $labels, $args);


    add_action( 'init', 'create_taxonomies' );

    function create_taxonomies() {
        register_taxonomy(
            'blog-category',
            'blog',
            array(
                'label' => __( 'Blog Category' ),
                'rewrite' => array( 'slug' => 'blog-category' ),
                'hierarchical' => true,
            )
        );
    }
endif;
