<?php get_header(); ?>

<main class="main">
    <div class="main__inner">
        <?php if ( have_posts() ) : ?>
            <div class="pagetype1">
                <section class="pagetype1-mv mv-type1">
                    <div class="mv-type1__inner">
                        <div class="mv-type1__objs">
                            <div class="mv-type1__obj1">
                                <picture>
                                    <source srcset="<?= THEMEIMG; ?>/mv-type1__obj1.svg" media="(min-width: 1025px)">
                                    <source srcset="<?= THEMEIMG; ?>/mv-type1__obj1-sp.svg" media="(max-width: 1024px)">
                                    <img src="<?= THEMEIMG; ?>/mv-type1__obj1.svg" alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="mv-type1__bg">
                            <div class="mv-type1__bg-figure">
                                <picture>
                                    <source srcset="<?php the_post_thumbnail_url('full'); ?>" media="(min-width: 1025px)">
                                    <source srcset="<?= get_field('pagefigure-sp'); ?>" media="(max-width: 1024px)">
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="mv-type1__title">
                            <p class="mv-type1__title-en"><?= get_field('pagetitle-en'); ?></p>
                            <h2 class="mv-type1__title-ja"><?= get_field('pagetitle-ja'); ?></h2>
                        </div>
                    </div>
                </section>

                <!-- ここからページコンテンツ -->
                <section class="pagetype1-content section-type1 top-business">
                    <div class="pagetype1-content__inner">
                        <div class="section-type1__box">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </section>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>