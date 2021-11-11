<?php get_header() ?>
    <div id="content">
        <div class="container">
            <div class="left-content posts-list post-detail">
                <div class="product-list">
                    <div class="product product-single post-detail">
                        <a href="<?php echo get_field('anh_san_pham') ?>" class="fancybox">
                            <img src="<?php echo get_field('anh_san_pham') ?>" alt="" width="870" height="auto">
                        </a>
                        
                    </div>
                    <div class="clear"></div>
                    <?php if (in_category(6)) : ?>
                        <div class="product-detail">
                            <h3><?php echo get_field('ten_hoc_vien') ?></h3>
                            <p><span>Lĩnh vực:</span> <?php echo get_field('linh_vuc') ?></p>
                            <p><span>Màu chủ đạo:</span> <?php echo get_field('mau_chu_dao') ?></p>
                            <p><span>Font chữ:</span> <?php echo get_field('font_chu') ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="product-related">
                    <?php if (in_category(6)) : ?>
                        <h2>Sản phẩm học viên khác</h2>
                    <?php endif; ?>
                    <?php if (in_category(7)) : ?>
                        <h2>Sản phẩm chúng tôi đã hoàn thành</h2>
                    <?php endif; ?>
                    <div class="product-list">
                        <?php
                        $categories = get_the_category($post->ID);
                        if ($categories) {
                            $category_ids = array();
                            foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;

                            $args = array('category__in' => $category_ids, 'post__not_in' => array($post->ID), 'showposts' => 3, 'caller_get_posts' => 1, 'post_type' => 'san_pham');
                            $my_query = new wp_query($args);
                            if ($my_query->have_posts()) {
                                while ($my_query->have_posts()) {
                                    $my_query->the_post();
                                    ?>
                                    <div class="product">
                                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large-product-thumb'); ?>
                                        <a href="<?php the_permalink() ?>"><img src="<?php echo $image[0] ?>"
                                                                                class="zoom-in" width="290" height="433"></a>
                                    </div>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
<?php get_footer() ?>