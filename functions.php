<?php

// Load stylesheets and js
function scripts()
{
	wp_register_style('style', get_template_directory_uri() . '/css/style.css', [], 1, 'all');
	wp_enqueue_style('style');

	wp_enqueue_script('jquery');

	wp_register_script('mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', [], 1, true);
	wp_enqueue_script('mobile-menu');

	wp_register_script('slider-script', get_template_directory_uri() . '/js/slider-script.js', [], 1, true);
	wp_enqueue_script('slider-script');

	wp_register_script('filter-animation', get_template_directory_uri() . '/js/filter-animation.js', [], 1, true);
	wp_enqueue_script('filter-animation');

	wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );

	wp_enqueue_script( 'true_loadcategory', get_stylesheet_directory_uri() . '/js/loadcategory.js', array('jquery') );

	wp_localize_script('true_loadcategory', 'myPlugin', array(
		'ajaxurl' => admin_url('admin-ajax.php')
	));

	wp_register_script( 'custom-script', get_stylesheet_directory_uri(). '/js/custom.js', array('jquery'), false, true );

	// Localize the script with new data
	$script_data_array = array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'security' => wp_create_nonce( 'load_more_posts' ),
	);
	wp_localize_script( 'custom-script', 'blog', $script_data_array );

	// Enqueued script with localized data.
	wp_enqueue_script( 'custom-script' );
}

add_action('wp_enqueue_scripts', 'scripts');

// Theme options

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
		'mobile-menu' => 'Mobile Menu Location',
		'footer-menu' => 'Footer Menu Location',
	)
);

// Custom Image sizes
add_image_size('blog-small', 300, 200, true);
add_image_size('blog-large', 800, 400, false);


// Custom post type and taxonomy

function my_courses_cpt()
{
	$args = array(

		'labels' => array(
			'name' => 'Курсы',
			'singular_name' => 'Курс',
		),

		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'taxonomies' => array('branches'),
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
		'show_in_rest' => true,
		'rest_base' => 'courses',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	);

	register_post_type('courses', $args);
}
add_action('init', 'my_courses_cpt');

function my_courses_taxonomy()
{
	$args = array(
		'labels' => array(
			'name' => 'branches',
			'singular_name' => 'branch',
		),

		'public' => true,
		'hierarchical' => true,
		'show_in_rest' => true,
	);

	register_taxonomy('branches', array('courses'), $args);
}
add_action('init', 'my_courses_taxonomy');


function my_campaigns_cpt()
{
	$args = array(

		'labels' => array(
			'name' => 'Акции',
			'singular_name' => 'Акция',
		),

		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-heart',
		'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
		'show_in_rest' => true,
		'rest_base' => 'campaigns',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	);

	register_post_type('campaigns', $args);
}
add_action('init', 'my_campaigns_cpt');

function my_internship_cpt()
{
	$args = array(

		'labels' => array(
			'name' => 'Практики',
			'singular_name' => 'Практика',
		),

		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-welcome-learn-more',
		'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
		'show_in_rest' => true,
		'rest_base' => 'internship',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	);

	register_post_type('internship', $args);
}
add_action('init', 'my_internship_cpt');

function my_categories_cpt()
{
	$args = array(

		'labels' => array(
			'name' => 'Категории',
			'singular_name' => 'Категория',
		),

		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-buddicons-activity',
		'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
		'show_in_rest' => true,
		'rest_base' => 'categories',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	);

	register_post_type('categories', $args);
}
add_action('init', 'my_categories_cpt');

function my_partners_cpt()
{
	$args = array(

		'labels' => array(
			'name' => 'Партнеры',
			'singular_name' => 'Партнер',
		),

		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-buddicons-activity',
		'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
		'show_in_rest' => true,
		'rest_base' => 'partners',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	);

	register_post_type('partners', $args);
}
add_action('init', 'my_partners_cpt');

function my_specializations_cpt()
{
	$args = array(

		'labels' => array(
			'name' => 'Специальности',
			'singular_name' => 'Специальность',
		),

		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-buddicons-activity',
		'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
		'show_in_rest' => true,
		'rest_base' => 'specializations',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	);

	register_post_type('specializations', $args);
}
add_action('init', 'my_specializations_cpt');

function my_skills_cpt()
{
	$args = array(

		'labels' => array(
			'name' => 'Навыки',
			'singular_name' => 'Навык',
		),

		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-buddicons-activity',
		'supports' => array('title', 'editor', 'thumbnail','custom-fields'),
		'show_in_rest' => true,
		'rest_base' => 'skills',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	);

	register_post_type('skills', $args);
}
add_action('init', 'my_skills_cpt');


// подгрузка постов на страницу

add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

function true_load_posts(){
 
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
 
	// обычно лучше использовать WP_Query, но не здесь
	query_posts( $args );
	// если посты есть
	if( have_posts() ) :
 
		// запускаем цикл
		while( have_posts() ): the_post();
 
			get_template_part('includes/section', 'courses');
 
		endwhile;
		wp_reset_postdata();
 
	endif;

	wp_die();
}


// подгрузка постов по категориям

add_action( 'wp_ajax_get_cat', 'ajax_show_posts_in_cat' );
add_action( 'wp_ajax_nopriv_get_cat', 'ajax_show_posts_in_cat' );

function ajax_show_posts_in_cat() {
	
	$link = $_POST['link'];
	
	if (!$link) {
		die( 'Рубрика не найдена' );
	}
	
	$args['post_type'] = 'courses';
	$args['paged'] = 1;
	$args['post_status'] = 'publish';
	$args['posts_per_page'] = 5;
	$args['tax_query'] = array(
		                     array(
		                     	'taxonomy' => 'branches',   // taxonomy name
					            'field' => 'term_id',
					            'terms' => $link    
		                     ));
	query_posts($args);
		

	if (have_posts()) :

        while(have_posts()) : the_post();
 
	    get_template_part('includes/section', 'courses');

	    endwhile; endif;
	    get_template_part('includes/block', 'load-button');
	    wp_reset_postdata();

    
	wp_die();
}


?>
