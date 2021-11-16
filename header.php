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
    <title><?php wp_title() ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

<?php
get_template_part('template-parts/header/inc','nav');

if( !is_home() ) :
?>

<div id="breadcrumbs">
    <div class="container text-center">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<ul style="display: inline-block; text-align: initial; padding-left: 0">','</ul>' );
        }
        ?>
    </div>
</div>

<?php endif; ?>