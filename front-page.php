<?php get_header(); ?>

    <main>
        <div class="main_visual">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mainvisual.jpg" alt="社内オフィス">
        </div>
        <!-- NEWS -->
        <section id="news" class="wrapper_1000 sp_container">
            <h2 class="content_title">NEWS</h2>
            <span class="sub_title">ニュース</span>
            <ul class="news_container">
                <?php 
                $news_query = new WP_Query([
                    'post_type' => 'news',
                    'posts_per_page' => 3
                ]);
                ?>
                 <?php if($news_query->have_posts()): ?>
                     <?php while($news_query->have_posts()): $news_query->the_post(); ?>
                        <li class="news_item">
                             <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y-m-d') ?></time>
                             <span class="news_tag">
                                <?php $terms = get_the_terms($post->ID, 'news_category');
                                    if (!empty($terms)) {
                                        foreach ($terms as $term):
                                        echo $term->name;
                                        endforeach;
                                    } else {
                                        echo '未分類';
                                    }
                                ?>
                             </span>
                             <p class="news_title"><?php the_title(); ?></p>
                         </li>
                    <?PHP endwhile; ?>
                 <?php endif; ?>
            </ul>

        </section>
        <!-- ABOUT -->
        <section id="about">
            <img class="about_img" src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="会社外観">
            <div class="about_right_content sp_container">
                <h2 class="content_title">ABOUT</h2>
                <span class="sub_title">私たちについて</span>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
        </section>
        <!-- BUSINESS -->
        <section id="business" class="wrapper_1000 sp_container">
            <h2 class="content_title">BUSINESS</h2>
            <span class="sub_title">事業内容</span>
            <div class="business_contents">
                <div class="content_left">
                    <div class="business1">
                        <h3>Web制作・マーケティング</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/business1.jpg" alt="ミーティングの様子">
                    </div>
                    <div class="business2">
                        <h3>インターネットメディア事業</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/business2.jpg" alt="デスクトップの検索画面">
                    </div>
                </div>
                <div class="content_right">
                    <div class="business3">
                        <h3>プロモーション企画・制作</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/business3.jpg" alt="動画撮影器具">
                    </div>
                    <div class="business4">
                        <h3>ソーシャル企画・運営</h3>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/business4.jpg" alt="スマホのアプリ一覧画面">
                    </div>
                </div>
                <div class="content_right"></div>
            </div>
        </section>

        <!-- COMPANY -->
        <section id="company" class="wrapper_1000 sp_container">
            <div class="company_left">
                <h2 class="content_title">COMPANY</h2>
                <span class="sub_title">会社情報</span>
                <dl>
                    <dt>会社名</dt>
                    <dd>ウェブエンターテインメントデザイン株式会社</dd>
                    <dt>所在地</dt>
                    <dd>東京都渋谷区桜丘町99-9 West Building 3F</dd>
                    <dt>代表</dt>
                    <dd>ＸＸＸＸＸＸ</dd>
                    <dt>設立</dt>
                    <dd>2021年1月1日</dd>
                    <dt>資本金</dt>
                    <dd>3,000,000円</dd>
                    <dt>事業内容</dt>
                    <dd>Web制作・マーケティング<br>
                        インターネットメディア事業<br>
                        プロモーション企画・制作<br>
                        ソーシャル企画・運営</dd>
                </dl>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/company.jpg" alt="社内の様子">
        </section>

    </main>
    <?php get_footer(); ?>