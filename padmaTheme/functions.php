<?php


	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );

    
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );


    register_sidebar(array(
        'name'=>'Top right logo',
        'id'=>'bdlogo',
        'before_widget'  => '',
		'after_widget'   => "",

    ));
    register_sidebar(array(
        'name'=>'HeroTop',
        'id'=>'herotop',
        'before_widget'  => '<div id="%1$s" class="widget %2$s hbimg1">',
		'after_widget'   => "</div>\n",

    ));
    register_sidebar(array(
        'name'=>'HeroBottomImage 1',
        'id'=>'hbimg',
        'before_widget'  => '',
		'after_widget'   => "",

    ));
    register_sidebar(array(
        'name'=>'HeroBottomBody 1',
        'id'=>'hbbody',
        'before_widget'  => '',
		'after_widget'   => "",

    ));

    register_sidebar(array(
        'name'=>'HeroBottomImage 2',
        'id'=>'hbimg2',
        'before_widget'  => '',
		'after_widget'   => "",

    ));
    register_sidebar(array(
        'name'=>'HeroBottomBody 2',
        'id'=>'hbbody2',
        'before_widget'  => '',
		'after_widget'   => "",

    ));
    register_sidebar(array(
        'name'=>'HeroBottomImage 3',
        'id'=>'hbimg3',
        'before_widget'  => '',
		'after_widget'   => "",

    ));
    register_sidebar(array(
        'name'=>'HeroBottomBody 3',
        'id'=>'hbbody3',
        'before_widget'  => '',
		'after_widget'   => "",

    ));

    register_sidebar(array(
        'name'=>'Photo image 1',
        'id'=>'pimg1',
        'before_widget'  => '',
		'after_widget'   => "",

    ));
    register_sidebar(array(
        'name'=>'Photo body 1',
        'id'=>'pbody1',
        'before_widget'  => '',
		'after_widget'   => "",

    ));


    
    register_sidebar(array(
        'name'=>'Photo image 2',
        'id'=>'pimg2',
        'before_widget'  => '',
		'after_widget'   => "",

    ));
    register_sidebar(array(
        'name'=>'Photo body 2',
        'id'=>'pbody2',
        'before_widget'  => '',
		'after_widget'   => "",

    ));


    register_sidebar(array(
        'name'=>'Photo image 3',
        'id'=>'pimg3',
        'before_widget'  => '',
		'after_widget'   => "",

    ));
    register_sidebar(array(
        'name'=>'Photo body 3',
        'id'=>'pbody3',
        'before_widget'  => '',
		'after_widget'   => "",

    ));


    
    register_sidebar(array(
        'name'=>'Photo image 4',
        'id'=>'pimg4',
        'before_widget'  => '',
		'after_widget'   => "",

    ));
    register_sidebar(array(
        'name'=>'Photo body 4',
        'id'=>'pbody4',
        'before_widget'  => '',
		'after_widget'   => "",

    ));

    

    register_nav_menus(array(
        'TM' => 'primary',
    ));


?>