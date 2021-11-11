<div class="right-sidebar">
    <div class="courses">
        <h3 class="title">Khóa học thực chiến</h3>
        <?php
        wp_nav_menu(array('theme_location' => 'sidebar-menu-top', 'menu' => 'sidebar-menu-top', 'container' => 'ul'));
        ?>
    </div>
    <div class="courses refer">
        <h3 class="title">Tham khảo</h3>
        <?php
        wp_nav_menu(array('theme_location' => 'sidebar-menu-bottom', 'menu' => 'sidebar-menu-bottom', 'container' => 'ul'));
        ?>
    </div>
    <div class="courses share">
        <h3 class="title">Chia sẻ kinh nghiệm thiết kế <br>
            Layout Website</h3>
        <div class="share-list">
            <!-- Get post News Query -->
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=post&cat=1'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'xsmall-post-thumb'); ?>
                <div class="share-post">
                    <a href="<?php the_permalink() ?>"><img src="<?php echo $image[0] ?>" alt="" width="105" height="61"></a>
                    <a href="<?php the_permalink() ?>" class="title"><?php the_title() ?></a>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- Get post News Query -->
        </div>
    </div>

    <div class="courses share">
        <h3 class="title">Chia sẻ kinh nghiệm thiết kế <br>
            App Mobile</h3>
        <div class="share-list">
            <!-- Get post News Query -->
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=post&cat=3'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'xsmall-post-thumb'); ?>
                <div class="share-post">
                    <a href="<?php the_permalink() ?>"><img src="<?php echo $image[0] ?>" alt="" width="105" height="61"></a>
                    <a href="<?php the_permalink() ?>" class="title"><?php the_title() ?></a>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- Get post News Query -->

        </div>
    </div>
</div>