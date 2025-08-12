<?php
/**
 * Index Template
 *
 */
?>
<?php get_header(); ?>

<main class="main">
    <div class="main__inner">
        <div class="main-content">
            <div class="main-content__inner">
                <?php
                    if ( have_posts() ) :
                        the_content();
                    endif;
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
