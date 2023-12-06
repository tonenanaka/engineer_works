<label>
    <input type="radio" name="tab-news" <?php echo $args['check']; ?>>
        <?php echo $args['title']; ?>
</label>
<div>
    <ul class="news_container">
        <?php
            $tax_name = 'news_category';
            $posttype_name = 'news';
            $terms = get_terms($tax_name);
            foreach ( $terms as $term ):

                $post_args = array(
                    'post_type' => $posttype_name,
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                        'taxonomy' => $tax_name,
                        'field'    => 'slug',
                        'terms'    => $terms[$args['array_num']]->slug,
                        ),
                    ),
                );
                $news_query = new WP_Query( $post_args );
            endforeach;
        ?>
        <?php if($news_query->have_posts()): ?>
            <?php while($news_query -> have_posts()):$news_query->the_post(); ?>
                <li class="news_item">
                    <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y-m-d') ?></time>
                    <span class="news_tag">
                        <?php $terms = get_the_terms($post->ID, 'news_category');
                            if(!empty($terms)) {
                                foreach($terms as $term):
                                echo $term->name;
                                endforeach;
                            }else {
                                echo '未分類';
                            }   
                        ?>
                    </span>
                    <p class="news_title"><?php the_title(); ?></p>

                </li>
            <?PHP endwhile; ?>
        <?php endif; ?>
    </ul>
</div>

