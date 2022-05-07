        <?php get_header(); ?>
        <main>
            <div class="p-notify">
                <div class="c-inner">
                    <h2 class="c-title"><?php the_title(); ?></h2><!-- /.c-title -->
                    <div class="p-notify__meta">
                        <div class="p-notify__time"><?php the_time( get_option( 'date_format' ) ); ?></div><!-- /.p-notify__time -->
                    </div><!-- /.p-notify__meta -->

                    <div class="p-notify__eyecatch">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'eyecatch' ); ?>
                        <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/default.png" alt="デフォルト画像">
                        <?php endif ; ?>
                    </div><!-- /.p-notify__eyecatch -->
                    <div class="p-notify__content">
                        <?php the_content(); ?>
                    </div><!-- /.p-nofity__content -->
                </div><!-- /.c-inner -->
            </div><!-- /.p-notify -->

        </main>
        <?php get_footer(); ?>
