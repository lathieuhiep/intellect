<?php get_header() ?>

    <div id="content">
        <div class="container">
            <div class="left-content posts-list">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="post">
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium-post-thumb'); ?>

                            <a href="<?php the_permalink() ?>">
                                <img class="lazy" data-src="<?php echo $image[0] ?>" width="270" height="157" alt="" />
                            </a>

                            <h3 class="title">
                                <a href="<?php the_permalink() ?>">
                                    <?php the_title() ?>
                                </a>
                            </h3>

                            <p class="date">
                                Ngày: <?php echo get_the_date('d/m/Y'); ?> - <em class="author"><?php the_author() ?></em>
                            </p>

                            <p>
                                <?php echo get_excerpt() ?>
                            </p>
                        </div>

                    <?php
                        endwhile;
                    else :
                    ?>

                    <p>Không có bài viết</p>

                <?php endif; ?>

                <div class="clear"></div>

                <hr>

                <?php bittersweet_pagination(); ?>
            </div>

            <?php get_sidebar() ?>
        </div>
    </div>

<?php get_footer() ?>