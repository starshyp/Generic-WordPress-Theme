<?php 

//adding css and js files

function gt_setup() {
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab'); 
  wp_enqueue_style('font-awesome', '//kit.fontawesome.com/d9c5edd342.js');
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'gt_setup');

//adding theme support

function gt_init() {
  //featured image post
  add_theme_support('post-thumbnails');
  //dynamic title
  add_theme_support('title-tag');
  //add HTML5
  add_theme_support('html5',
    array('commet-list', 'comment-form', 'search-form')
  );
}

add_action('after_setup_theme', 'gt_init');

//projects post type
function gt_custom_post_type() {
  register_post_type('project',
    array(
      'rewrite' => array('slug' => 'projects'),
        'labels' => array(
          'name' => 'Projects',
          'singular_name' => 'Project',
          'add_new_item' => 'Add New Project',
          'edit_item' => 'Edit Project'
        ),
      'menu-icon' => 'dashicons-clipboard',
      'public' => true,
      'has_archive' => true,
      'supports' => array(
        'title', 'thumbnail', 'editor', 'excerpt', 'comments'
      )
    )
  );
}

add_action('init', 'gt_custom_post_type');

//sidebar

function gt_widgets() {
  register_sidebar(
    array(
      'name' => 'Main Sidebar',
      'id' => 'main_sidebar',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    )
  );
}

add_action('widgets_init', 'gt_widgets');

//filters

function search_filter($query) {
  if($query->is_search()) {
    $query->set('post_type', array('post', 'project'));
  }
}

add_filter('pre_get_posts', 'search_filter');