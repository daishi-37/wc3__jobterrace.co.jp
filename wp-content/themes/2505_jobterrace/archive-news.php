<?php
/**
 * Category Template
 *
 */
?>

<?php get_header(); ?>

<main class="main">
    <div class="main__inner">
        <div class="archive-news pagetype1">
            <section class="pagetype1-mv mv-type2">
                <div class="mv-type2__inner">
                    <div class="mv-type2__title">
                        <p class="mv-type2__title-en">NEWS</p>
                        <h2 class="mv-type2__title-ja">お知らせ</h2>
                    </div>
                </div>
            </section>
            <!-- ここからページコンテンツ -->
            <section class="pagetype1-content">
                <div class="pagetype1-content__inner standard-inner type9">
                    <?php if ( have_posts() ) : ?>
                        <div class="posts-type1">
                            <?php while (have_posts()) : ?>
                                <?php the_post(); ?>
                                <article class="posts-type1__item">
                                </article>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; wp_reset_postdata(); ?>
                    <?php my_pagination($wp_query->max_num_pages, get_query_var('paged')); ?>
                </div>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>