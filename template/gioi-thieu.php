<?php
/*
 Template Name: Giới thiệu
 */
?>
<?php get_header() ?>
<div id="content">
    <div class="container">
        <div class="left-content posts-list single-post">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="title"><?php the_title() ?></h1>
                <p class="date">Ngày: <?php echo get_the_date('d/m/Y'); ?> - <em
                            class="author"><?php the_author() ?></em></p>
                <?php the_content() ?>
            <?php endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
            <?php echo do_shortcode('[gs-fb-comments]'); ?>
        </div>
        <?php get_sidebar() ?>
    </div>
</div>
<?php get_footer() ?>
