<?php
/*
 Template Name: Dịch vụ thiết kế
 */
?>
<?php get_header() ?>
<div id="content">
    <div class="container">
        <div class="left-content posts-list single-post">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1 class="title"><?php the_title() ?></h1>
            <p class="date">Ngày: <?php echo get_the_date('d/m/Y'); ?> - <em class="author"><?php the_author() ?></em></p>
            <?php the_content() ?>
            <?php endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>

            <hr>
            <div class="product-related">
                <h2>Sản phẩm chúng tôi đã hoàn thành</h2>
                <br>
                <div class="product-list product-service">
                    <!-- Get post News Query -->
                    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=5&post_type=san_pham&cat=7'); ?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <div class="product service">
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'small-product-thumb'); ?>
                            <a href="<?php the_permalink() ?>"><img class="lazy zoom-in" data-src="<?php echo $image[0]?>" alt="" width="174" height="261" /></a>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <!-- Get post News Query -->
                </div>
                <p class="service-info"><strong>Bạn cần sử dụng dịch vụ? Hãy liên hệ với chúng tôi qua thông tin Hotline </strong><span>0942.84.0880</span>,  hoặc nhấp vào địa chỉ bên dưới:</p>
                <a class="service-link" href="https://www.facebook.com/huonguiux">https://www.facebook.com/huonguiux</a>
            </div>
        </div>
        <?php get_sidebar() ?>
    </div>
</div>
<?php get_footer() ?>
