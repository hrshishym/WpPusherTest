        <?php get_header(); ?>
        <main>
            <section class="p-blog">
                <div class="c-inner">

                    <h2 class="c-title">お知らせ</h2><!-- /.c-title -->
                    <div class="p-blog__list">
                        <?php
                            $paged = (int) get_query_var( 'paged' );
                            $article_list = new WP_Query(
                                array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                    'paged' => $paged,
                                )
                            );
                        ?>
                        <?php if ( $article_list->have_posts() ) : ?>
                        <?php while ( $article_list->have_posts() ) : $article_list->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="p-blog__item">
                                <div class="p-blog__content">
                                    <figure class="p-blog__img">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'eyecatch' ); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/default.png" alt="デフォルト画像">
                                    <?php endif ; ?>
                                    </figure><!-- /.p-blog__title -->
                                    <h3 class="p-blog__text"><?php the_title(); ?></h3><!-- /.p-blog__text -->
                                    <div class="p-blog__meta">
                                        <div class="p-blog__category">
                                        <!-- <?php
                                            $category = get_the_category();
                                            if ( $category[0] ) {
                                                echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
                                            }
                                        ?> -->
                                        </div><!-- /.p-blog__category -->
                                        <div class="p-blog__time"><?php the_time( get_option( 'date_format' ) ); ?></div><!-- /.p-blog__time -->
                                    </div><!-- /.p-blog__meta -->
                                </div><!-- /.p-blog__item -->
                            </a><!-- /.p-blog__item -->
                        <?php
                            endwhile;
                        endif;
                        ?>
                        <?php wp_reset_postdata(); ?>
                    </div><!-- /.p-blog__list -->
                    <div class="p-blog__pagenavi">
                    <?php 
                        if( function_exists( 'wp_pagenavi' ) ) {
                            wp_pagenavi( array( 'query'=>$article_list ) );
                        }
                    ?>
                    <?php wp_reset_postdata(); ?>
                    </div><!-- /.p-blog__pagenavi -->
                </div><!-- /.c-inner -->
            </section><!-- /.p-blog -->
        </main>
        <?php get_footer(); ?>
