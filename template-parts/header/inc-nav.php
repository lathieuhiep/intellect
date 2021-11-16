<?php
global $intellect_options;

$logo = $intellect_options['intellect_opt_logo_image']['url'];
$textFollow = $intellect_options['intellect_opt_header_text_follow'] ?? '';
$linkFollow = $intellect_options['intellect_opt_header_follow'] ?? '';

if ( empty( $logo ) ) :
    $logo = get_theme_file_uri('/assets/images/logo.png');
endif;
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?php echo home_url() ?>">
                <img src="<?php echo esc_url( $logo ); ?>" alt="">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu',
                    'menu' => 'main-menu',
                    'container' => 'ul',
                    'menu_class' => 'nav navbar-nav navbar-custom'
                )
            );

            if ( $linkFollow ) :
            ?>

            <div class="nav navbar-nav navbar-right">
                <p class="subcribe">
                    <?php echo esc_html( $textFollow ); ?>
                </p>

                <div class="subcribe-image">
                    <a href="<?php echo esc_url( $linkFollow ) ?>" target="_blank">
                        <img src="<?php echo esc_url( get_theme_file_uri('/assets/images/subcribe.png') ); ?>" alt="">
                    </a>
                </div>
            </div>

            <?php endif; ?>
        </div>
    </div>
</nav>