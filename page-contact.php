        <?php get_header(); ?>
        <main>
            <section class="p-contact">
                <div class="c-inner">
                    <h2 class="c-title">お問い合わせ内容</h2>
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php
                            endwhile;
                        endif;
                        ?>
                </div><!-- /.c-inner -->
            </section><!-- /.p-about -->
        </main>
        <?php get_footer(); ?>
