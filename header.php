<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

<! -- AQUI VAI A EDIÇÃO DO POST -->
<!-- verifica se é single para exbir os scripts -->
<?php if (is_single()) { ?>
<!-- chama o JS do prettyPhoto -->
<script type="text/javascript" src="<?php bloginfo(template_url);?>/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<!-- chama o CSSS do prettyPhoto -->
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/js/prettyPhoto/css/prettyPhoto.css" type="text/css"/>
<!-- script para iniciar o prettyPhoto -->
<script type="text/javascript" charset="utf-8">
 var $j = jQuery.noConflict();
 // Use jQuery com a variavel $j(...)
 $j(document).ready(function(){
    $j("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>
<?php }?>
<!-- final da verificação se é single para exbir os scripts -->
<! -- AQUI TERMINA A EDIÇÃO DO POST -->

</head>
