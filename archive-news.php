<?php get_header(); ?>

<section id="news_press" class="wrapper_1000 sp_container">
    <h2 class="content_title">News & Press</h2>
    <div class="tab_news">        
        <?php
            $args = [
                'title' => 'ニュース',
                'array_num' => 0,
                'check' => 'checked'
            ];
            get_template_part('template', 'news', $args);
        ?>
        <?php
            $args = [
                'title' => 'プレスリリース',
                'array_num' => 1,
                'check' => ''
            ];
            get_template_part('template', 'news', $args);
        ?>
    </div>
</section>

<?php get_footer(); ?>