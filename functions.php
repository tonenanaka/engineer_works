<?php
    function wed_setup(){
        add_theme_support('title-tag'); 
        add_theme_support('html5', ['style','script']);

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
        if (is_post_type_archive('news')) {
            //news.cssの読み込み
            wp_enqueue_style(
                'wed-news',
                get_template_directory_uri().'/css/news.css',
                '[]',
                filemtime(get_theme_file_path('/css/news.css')),
            );
        }

        //contactページ
        if (is_page('contact')) {
            //contact.cssの読み込み
            wp_enqueue_style(
                'wed-contact',
                get_template_directory_uri().'/css/contact.css',
                '[]',
                filemtime(get_theme_file_path('/css/contact.css')),
            );
        }

    }

    add_action('wp_enqueue_scripts', 'wed_setup');

    //svg画像の読み込み
    function wed_svg($file_types){
        $file_types['svg'] = 'image/svg+xml';
        return $file_types;
    }

    add_action('upload_mimes', 'wed_svg');

    //管理画面
    function remove_menus () {
        remove_menu_page( 'edit.php' ); 
    }
    add_action('admin_menu', 'remove_menus');

    function custom_menu_order($menu_ord) {
        if(!$menu_ord) return true;
    
        return array(
                'index.php', //ダッシュボード
                'edit.php?post_type=news', //カスタム投稿タイプ名 'news'			
                'upload.php', //メディア
                'edit.php?post_type=page', //固定ページ
                'edit.php?post_type=mw-wp-form', //mw-wp-form
                'themes.php',//外観
                'plugins.php',//プラグイン
                'users.php',//ユーザー
                'tools.php',//ツール
                'options-general.php',//設定
        );
    }
    add_filter('custom_menu_order', 'custom_menu_order'); 
    add_filter('menu_order', 'custom_menu_order');