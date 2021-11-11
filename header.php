<!DOCTYPE html>
<html lang="en">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128215252-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128215252-1');
</script>	
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SVGJFP6QTH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SVGJFP6QTH');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="0lswIzkhIQ4ztwIjrAShbN_qsdfnQQ3UeeSouRglvv0" />
    <link rel="shortcut icon" href="<?php echo esc_url( get_theme_file_uri('/assets/images/favicon.png' ) ) ?>" type="image/x-icon" sizes="16x16">
    <title><?php wp_title() ?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo home_url() ?>">
                <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/logo.png' ) ); ?>" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
            wp_nav_menu(array('theme_location' => 'main-menu', 'menu' => 'main-menu', 'container' => 'ul', 'menu_class' => 'nav navbar-nav navbar-custom',));
            ?>
            <div class="nav navbar-nav navbar-right">
                <p class="subcribe">Theo dõi tôi trên</p>
                <div class="subcribe-image">
                    <?php $subcribe = get_field( "theo_doi_toi_tren", 203 ) ?>
                    <a href="<?php echo $subcribe ?>" target="_blank">
                        <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/subcribe.png' ) ) ?>" alt="">
                    </a>
                </div>
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
<?php if(!is_home()){ ?>
<div id="breadcrumbs">
    <div class="container text-center">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<ul style="display: inline-block; text-align: initial; padding-left: 0">','</ul>' );
        }
        ?>
    </div>
</div>
<?php } ?>