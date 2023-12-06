<?php 
    function wed_setup(){
        add_theme_support('title-tag'); 
        add_theme_support('html5',['style','script']);

        //style.cssの読み込み
        wp_enqueue_style(
            'wed-css',
            get_template_directory_uri().'/style.css',
            '[]',
            filemtime(get_theme_file_path('/style.css'))
        );

        //reset.cssの読み込み
        wp_enqueue_style(
            'wed-reset',
            get_template_directory_uri().'/css/ress.css',
            '[]',
            filemtime(get_theme_file_path('/css/ress.css')),
        );

        //newsページ
        if(is_post_type_archive('news')){
            //news.cssの読み込み
            wp_enqueue_style(
                'wed-news',
                get_template_directory_uri().'/css/news.css',
                '[]',
                filemtime(get_theme_file_path('/css/news.css')),
            );
        }

        //contactページ
        if(is_page('contact')){
            //contact.cssの読み込み
            wp_enqueue_style(
                'wed-contact',
                get_template_directory_uri().'/css/contact.css',
                '[]',
                filemtime(get_theme_file_path('/css/contact.css')),
            );
        }

    }

    add_action( 'wp_enqueue_scripts', 'wed_setup' );

    //svg画像の読み込み
    function wed_svg($file_types){
        $file_types['svg'] = 'image/svg+xml';
        return $file_types;
    }

    add_action('upload_mimes','wed_svg');


