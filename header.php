<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo  get_template_directory_uri(); ?>/img/favicon.ico">
    <title>WED</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="sp_container">
        <div class="header_inner">
            <h1 class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo  get_template_directory_uri(); ?>/img/logo.svg" alt="WED-ウェブエンターテイメントデザイン-"></a></h1>
            <nav>
                <ul>
                    <li><a href="<?php echo get_post_type_archive_link( 'news' ); ?>">NEWS</a></li>
                    <li><a href="<?php echo home_url('#about'); ?>">ABOUT</a></li>
                    <li><a href="<?php echo home_url('#business'); ?>">BUSINESS</a></li>
                    <li><a href="<?php echo home_url('#company'); ?>">COMPANY</a></li>
                </ul>
            </nav>
        </div>
        <a class="contact_btn" href="<?php echo get_page_link( 35 ); ?>">
            <p>お問い合わせ</p>
        </a>
    </header>