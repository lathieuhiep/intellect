<?php
global $intellect_options;

$logo = $intellect_options['intellect_opt_logo_image']['url'];
$linkFollow = $intellect_options['intellect_opt_header_follow'] ?? '';

if ( empty( $logo ) ) :
    $logo = get_theme_file_uri('/assets/images/logo.png');
endif;
?>

<nav class="navbar navbar-expand-lg navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo home_url() ?>">
                <img src="<?php echo esc_url( $logo ); ?>" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-menu">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu',
                    'menu' => 'main-menu',
                    'container' => 'ul',
                    'menu_class' => 'nav navbar-nav navbar-custom flex-grow-1'
                )
            );

            if ( $linkFollow ) :
            ?>

            <div class="nav navbar-nav navbar-right">
                <p class="subcribe">
                    <?php esc_html_e( 'Theo dõi tôi trên', 'intellect' ); ?>
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