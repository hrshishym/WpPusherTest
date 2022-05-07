        <?php get_header(); ?>
        <main>
            <div class="p-fv">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-fv__slide p-fv__slide1">
                        </div><!-- /.swiper-slide p-fv__slide1 -->
                        <div class="swiper-slide p-fv__slide p-fv__slide2">
                        </div><!-- /.swiper-slide p-fv__slide1 -->
                        <div class="swiper-slide p-fv__slide p-fv__slide3">
                        </div><!-- /.swiper-slide p-fv__slide1 -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.swiper -->

            </div><!-- /.p-fv -->
            <section class="p-message">
                <div class="c-inner">
                    <h2 class="c-title">私達が大事にしていること</h2>
                    <p>私達はコーディングという作業をとおして、<br>
                        お客様の価値創造活動をお手伝いしたいと考えています。</p>
                </div><!-- /.c-inner -->
            </section><!-- /.p-message -->

            <section class="p-blog">
                <div class="c-inner">

                    <h2 class="c-title">ブログ/お知らせ</h2><!-- /.c-title -->
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
                </div><!-- /.c-inner -->
            </section><!-- /.p-blog -->
        </main>
        <?php get_footer(); ?>
