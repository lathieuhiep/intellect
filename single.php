<?php get_header() ?>
    <div id="content">
        <div class="container">
            <div class="left-content posts-list single-post">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h1 class="title"><?php the_title() ?></h1>
                    <p class="date">Ngày: <?php echo get_the_date('d/m/Y'); ?> - <em
                                class="author"><?php the_author() ?></em></p>
                    <?php the_content() ?>
                    <?php $postcat = get_the_category( $post->ID ); ?>
                    <?php if($postcat[0]->term_id == 4){ ?>
<!--                     <hr> -->
<!--                         <h3 class="teacher-head">GIẢNG DẠY</h3> -->
<!--                         <img class="teacher_image" src="<?php echo get_field('teacher_image', $post->ID) ?>" /> -->
<!--                         <div class="teacher-info"> -->
<!--                             <h4 class="teacher-name"><?php echo get_field('teacher_name', $post->ID) ?></h4> -->
<!--                             <p class="teacher-position"><?php echo get_field('teacher_position', $post->ID) ?></p> -->
<!--                             <p class="teacher-description"><?php echo get_field('teacher_description', $post->ID) ?></p> -->
<!--                         </div> -->
<!--                         <div class="clear"></div> -->
                        <hr>
                        <div class=register-post>
                            <h3 class="register-head">ĐĂNG KÝ HỌC</h3>
                            <?php echo get_field('dang_ky_hoc', $post->ID) ?>
                        </div>
                    <?php }?>
                    
                <?php endwhile; endif; ?>
                <hr>
                <div class="post-release">
                    <?php $postcat = get_the_category( $post->ID ); ?>
                    <?php if($postcat[0]->term_id == 4){
                        echo '<h3>Khóa học khác</h3>';
                    }else{
                        echo '<h3>Một số chia sẻ khác</h3>';
                    } ?>
                    
                    <ul>
                        <?php
                        $categories = get_the_category($post->ID);
                        if ($categories) {
                            $category_ids = array();
                            foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;

                            $args = array('category__in' => $category_ids, 'post__not_in' => array($post->ID), 'showposts' => 5, 'caller_get_posts' => 1);
                            $my_query = new wp_query($args);
                            if ($my_query->have_posts()) {
                                while ($my_query->have_posts()) {
                                    $my_query->the_post();
                                    ?>
                                    <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </ul>
                </div>
                <?php echo do_shortcode( '[gs-fb-comments]' );?>
            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
<?php get_footer() ?>