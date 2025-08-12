<?php get_header(); ?>

<main class="main">
    <div class="main__inner">
        <div class="main-content">
            <div class="main-content__inner">
                <?php if( have_posts() ): ?>
                    <?php the_post(); ?>
                    <article class="post-type1">
                        <div class="post-type1__inner standard-inner type9">
                            <div class="post-type1__header">
                            </div>
                            <div class="post-type1__content">
                                <?php the_content(); ?>
                            </div>
                            <div class="post-type1__footer">
                            </div>
                        </div>
                    </article>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
