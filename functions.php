<?php 

	/**
	* Suas funções de enqueue vão aqui.
	*/	
	function themes_wordpress_bg_geissonmachado() 
	{
	
	/*
    |--------------------------------------------------------------------------
    | Jquery 
    |--------------------------------------------------------------------------
    |
    | Add lib jquery.
    | 
    | https://jquery.com/
    |
    */
	wp_enqueue_script('jquery');	

	/*
    |--------------------------------------------------------------------------
    | Materialize 
    |--------------------------------------------------------------------------
    |
    | Add Materialize Framework da Google.
    | 
    | http://materializecss.com/
    |
    */
	wp_enqueue_style( 'materialize_CSS', get_template_directory_uri() . '/css/materialize.css', [], '1.0.0', 'screen,projection');

	wp_enqueue_style( 'fonts-google', 'https://fonts.googleapis.com/icon?family=Material+Icons', [], '1.0.0', 'screen,projection');
	
	wp_enqueue_script( 'materialize_JS', get_template_directory_uri().'/js/materialize.js' , [], '1.0.0', true);

	/*
    |--------------------------------------------------------------------------
    | Main CSS e JavaScript 
    |--------------------------------------------------------------------------
    |
    | Add main CSS e JS da aplicacao.
    | 
    */

	// Add style padrao do theme
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', [], '1.0.0', 'screen,projection');

	// add init js do theme
    wp_enqueue_script( 'js-init', get_template_directory_uri().'/js/init.js' , [], '1.0.0', true);
	

	/*
    |--------------------------------------------------------------------------
    | Typed.js 
    |--------------------------------------------------------------------------
    |
    | lib que faz escrita em tela por jquery.
    | 
    | https://github.com/mattboldt/typed.js/
    | 
    */
	
    wp_enqueue_script( 'typed', get_template_directory_uri().'/js/typed-js/js/typed.js' , [], '1.0.0', true);

    /*
    |--------------------------------------------------------------------------
    | transit.JS 
    |--------------------------------------------------------------------------
    |
    | Plugin Jquery para fazer transicoes de tela
    | 
    | Dependencia do Jquery.
    | http://ricostacruz.com/jquery.transit/#top
    |
    */
    
	wp_enqueue_script( 'teste', 'http://ricostacruz.com/jquery.transit/jquery.transit.min.js' , [], '1.0.0', true);

    /*
    |--------------------------------------------------------------------------
    | smoothscroll.JS 
    |--------------------------------------------------------------------------
    |
    | Plugin Jquery suaviar o scroll do mouse
    | 
    | Dependencia do Jquery.
    | http://www.okler.net
    | http://headbody.com.br/scroll-suave-com-jquery/
    |
    */

    wp_enqueue_script( 'smoothscroll', get_template_directory_uri().'/js/smoothscroll.js' , [], '1.0.0', true);

    /*
    |--------------------------------------------------------------------------
    | Font Awesome 
    |--------------------------------------------------------------------------
    |
    | Plugin para icones.
    | 
    | http://fontawesome.io/
    |
    */

    wp_enqueue_script( 'font_awesome', "https://use.fontawesome.com/bf1f820617.js" , [], '1.0.0', true);



	}
	// add os scripts
	add_action( 'wp_enqueue_scripts', 'themes_wordpress_bg_geissonmachado' );


	/*
    |--------------------------------------------------------------------------
    | Wordpress 
    |--------------------------------------------------------------------------
    |
    | Add style as caixas de prev e next de paginacao dos posts.
    | 
    | 
    */

	function posts_next() 
	{
	    return 'class="red darken-2 btn z-depth-1"';
	}
	function posts_prev() 
	{
	    return 'class="red darken-2 btn z-depth-1"';
	}
	add_filter('next_posts_link_attributes', 'posts_next');
	add_filter('previous_posts_link_attributes', 'posts_prev');






	/*
    |--------------------------------------------------------------------------
    | Wigths 
    |--------------------------------------------------------------------------
    |
    | Add wight.
    |
           CONFIGURATION REGISTER_SIDEBAR
    |
    |        'name' => sprintf(__('Sidebar %d'), $i ),
    |        'id' => "sidebar-$i",
    |        'description' => '',
    |        'class' => '',
    |        'before_widget' => '<li id="%1$s" class="widget %2$s">',
    |        'after_widget' => "</li>\n",
    |        'before_title' => '<h2 class="widgettitle">',
    |        'after_title' => "</h2>\n",        
    |
    | 
    */

	if (function_exists('register_sidebar')) 
    {
        // Single page
        register_sidebar(array(
            'name'          => 'Sidebar-single-page',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '<div class="row"><div class="col-md-12">',
            'after_widget' => '</div></div>',
        ));

        // Quem sou 1 
        register_sidebar(array(
            'name'          => 'quem-sou-1',
            'before_widget' => '',
            'after_widget'  => '',
        ));

        // Quem sou 2 
        register_sidebar(array(
            'name'          => 'quem-sou-2',
            'before_widget' => '',
            'after_widget'  => '',
        ));

        // Footer Desc 
        register_sidebar(array(
            'name'          => 'footer-desc',
            'before_widget' => '',
            'after_widget'  => '',
        ));

        // Menu Desc 
        register_sidebar(array(
            'name'          => 'nav-menu',
            'before_widget' => '',
            'after_widget'  => '',
        ));
    
    }

    /*
    |--------------------------------------------------------------------------
    | Thumbnail 
    |--------------------------------------------------------------------------
    |
    | Add a adicao de thumbnails.
    | 
    | 
    */

    add_theme_support( 'post-thumbnails');



    /*
    |--------------------------------------------------------------------------
    | Midias Sociais 
    |--------------------------------------------------------------------------
    |
    | Add as midias sociais.
    | 
    */    
    function add_to_author_profile( $contactmethods ) {
        
        $contactmethods['rss_url'] = 'RSS URL';
        $contactmethods['google_profile'] = 'Google Profile URL';
        $contactmethods['twitter_profile'] = 'Twitter Profile URL';
        $contactmethods['facebook_profile'] = 'Facebook Profile URL';
        $contactmethods['linkedin_profile'] = 'Linkedin Profile URL';
        $contactmethods['github_profile'] = 'github_profile URL';
        
        return $contactmethods;
    }

    add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);
