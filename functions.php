<?php
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/template-parts/navbar.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



function tema1_agregar_css_js() {

    //AGREGANDO CSS
    wp_enqueue_style( 'style', get_stylesheet_uri() );
   
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    //AGREGANDO JS    
       
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array ( 'jquery' ), 1.16, true);

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'popper' ), 4.5, true);

    //JS PERSONALIZADO
    wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array ( 'bootstrap' ), 1.0, true);

  }
  //EJECUTAMOS LA FUNCION ANTERIOR
  add_action( 'wp_enqueue_scripts', 'tema1_agregar_css_js' );



  

 //SIDEBAR
 function tema1_widgets_init() {
  register_sidebar( array(
      'name'          => __( 'Sidebar Primario', 'theme_name' ),
      'id'            => 'sidebar-1',
      'description'   => __( 'Arrastra lo que quieras.' ),
      'before_widget' => '<div class="card-body bluu_wi">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4> <hr>',
  ) );

   
}

add_action( 'widgets_init', 'tema1_widgets_init' );


//REGISTRAR MENUS
function tema1_register_my_menus() {
  register_nav_menus(
    array(
      'menu-principal' => __( 'Menu Principal' )
     )
   );
 }
 add_action( 'init', 'tema1_register_my_menus' );

function tema1_setup(){
  //IMAGENES DESTACADAS
  if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
 }

 add_theme_support('title-tag');

}
 add_action( 'after_setup_theme', 'tema1_setup' );