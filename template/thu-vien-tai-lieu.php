<?php
/*
 Template Name: Thư viện tài liệu
 */
?>
<?php get_header() ?>
<div id="content">
    <div class="container">
        <div class="left-content posts-list single-post">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content() ?>
            <?php endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>
        <?php get_sidebar() ?>
    </div>
</div>
<?php get_footer() ?>
