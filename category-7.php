<?php get_header() ?>
<div id="content">
    <div class="container">
        <div class="left-content posts-list product-post-list">
            <div class="product-list product-list-image">
                <!-- Get post News Query -->
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=-1&post_type=san_pham&cat=7'); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <div class="product">
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large-product-thumb'); ?>
                        <a href="<?php the_permalink() ?>"><img class="lazy zoom-in" data-src="<?php echo $image[0] ?>" alt="" width="290" height="433" /></a>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
                <!-- Get post News Query -->
            </div>
        </div>
        <?php get_sidebar() ?>
    </div>
</div>
<?php get_footer() ?>