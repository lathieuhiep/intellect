<?php get_header() ?>

    <div id="banner">
        <div class="container-fluid banner-full">
            <figure><img class="lazy img-responsive"
                         data-src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-img.png"/></figure>
        </div>
    </div>

    <div id="greeting">
        <div class="container">
            <div class="greeting-top">
                <i class="fa fa-quote-left" style="font-size:72px;color:#000; opacity: 0.1;"></i>
                <p class="greeting-para">
                    <?php
                        // query for the about page
                        $your_query = new WP_Query( 'pagename=greeting' );
                        // "loop" through query (even though it's just one page) 
                        while ( $your_query->have_posts() ) : $your_query->the_post();
                            the_content();
                        endwhile;
                        // reset post data (important!)
                        wp_reset_postdata();
                    ?>
                </p>
            </div>
            <div class="greeting-bottom">
                <!-- Get post News Query -->
                <?php $getposts = new WP_query();
                $getposts->query('post_status=publish&showposts=2&post_type=post&cat=10&meta_key=show_in_top_homepage&meta_value=1'); ?>
                <?php global $wp_query;
                $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'small-post-thumb'); ?>
                    <div class="col-md-6 no-padding-left margin-bottom-20" style="overflow: hidden;">
                        <a href="<?php the_permalink() ?>"><img class="lazy" data-src="<?php echo $image[0] ?>"
                                                                alt=""
                                                                width="128" height="191"/></a>
                        <div class="content">
                            <h2><a href="<?php the_permalink() ?>" class="content-title"><?php the_title() ?></a></h2>
                            <?php $content = wp_strip_all_tags(get_the_content()); echo mb_strimwidth($content, 0, 200, '...');?>
                            <br>
                            <a href="<?php the_permalink() ?>" class="load-more">Xem thêm</a>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>

    <div id="products">
        <div class="container">
            <h2>sản phẩm học viên</h2>
            <div class="product-list">
                <!-- Get post News Query -->
                <?php $getposts = new WP_query();
                $getposts->query('post_status=publish&showposts=10&post_type=san_pham&cat=6'); ?>
                <?php global $wp_query;
                $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <div class="product student-product">
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium-product-thumb'); ?>
                        <a href="<?php the_permalink() ?>"><img class="lazy zoom-in"
                                                                data-src="<?php echo $image[0]; ?>" width="234" height="350"/></a>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
                <!-- Get post News Query -->
            </div>
            <div class="clear"></div>
            <div>
                <p style="text-align: center"><a href="<?php echo home_url('/san-pham-hoc-vien') ?>" class="load-all">Xem tất cả</a></p>
            </div>
        </div>
    </div>

    <div id="portfolio">
        <div class="container">
            <h2>sản phẩm chúng tôi đã thực hiện</h2>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#website" aria-controls="website" role="tab"
                                                          data-toggle="tab">Website, App</a></li>
                <li role="presentation"><a href="#graphic" aria-controls="graphic" role="tab" data-toggle="tab">Graphic
                        Design</a></li>
                <li role="presentation"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">Tất cả</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="website">
                    <div class="portfolio-list">
                        <!-- Get post News Query -->
                        <?php $getposts = new WP_query();
                        $getposts->query('post_status=publish&showposts=5&post_type=san_pham&cat=8'); ?>
                        <?php global $wp_query;
                        $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium-product-thumb'); ?>
                            <div class="portfolio">
                                <a href="<?php the_permalink() ?>"><img class="lazy zoom-in"
                                                                        data-src="<?php echo $image[0]; ?>" width="234" height="350"/></a>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                        <!-- Get post News Query -->
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="graphic">
                    <div class="portfolio-list">
                        <!-- Get post News Query -->
                        <?php $getposts = new WP_query();
                        $getposts->query('post_status=publish&showposts=5&post_type=san_pham&cat=9'); ?>
                        <?php global $wp_query;
                        $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium-product-thumb'); ?>
                            <div class="portfolio">
                                <a href="<?php the_permalink() ?>"><img class="zoom-in"
                                                                        src="<?php echo $image[0]; ?>" width="234" height="350"/></a>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                        <!-- Get post News Query -->
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="all">
                    <div class="portfolio-list">
                        <!-- Get post News Query -->
                        <?php $getposts = new WP_query();
                        $getposts->query('post_status=publish&showposts=5&post_type=san_pham&cat=7'); ?>
                        <?php global $wp_query;
                        $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium-product-thumb'); ?>
                            <div class="portfolio">
                                <a href="<?php the_permalink() ?>"><img class="zoom-in"
                                                                        src="<?php echo $image[0]; ?>" width="234" height="350"/></a>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                        <!-- Get post News Query -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="news">
        <div class="container">
            <h2>Chia sẽ kinh nghiệm thực tế</h2>
            <div class="news-list">
                <!-- Get post News Query -->
                <?php $getposts = new WP_query();
                $getposts->query('post_status=publish&showposts=6&post_type=post&cat=10&meta_key=show_in_top_homepage&meta_value=0'); ?>
                <?php global $wp_query;
                $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large-post-thumb'); ?>
                    <div class="news">
                        <a href="<?php the_permalink() ?>"><img class="lazy" data-src="<?php echo $image[0]; ?>"/></a>
                        <h3 class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                        <p class="date">Ngày: <?php echo get_the_date('d/m/Y'); ?> - <em
                                    class="author"><?php the_author() ?></em></p>
                        <p><?php echo get_excerpt() ?></p>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
                <!-- Get post News Query -->
            </div>
        </div>
    </div>

<?php get_footer() ?>