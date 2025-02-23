<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo site_icon_url() ?>">
	<title><?php wp_title(''); ?> <?php if(wp_title('',false)){echo':';} ?> <?php bloginfo('name') ?></title>
	<meta name="theme-color" content="#24273B"/>
	<meta name="msapplication-navbutton-color" content="#24273B"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=DM+Serif+Text:ital@0;1&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
	<style>
		@font-face {
    font-family: 'Butler';
    src: url('<?php echo get_template_directory_uri()?>/font/butler-free-bd-webfont.woff2') format('woff2'),
         url('<?php echo get_template_directory_uri()?>/font/butler-free-bd-webfont.woff') format('woff');
    font-weight: 700;
    font-style: normal;
}
@font-face {
    font-family: 'Butler';
    src: url('<?php echo get_template_directory_uri()?>/font/butler-free-blk-webfont.woff2') format('woff2'),
         url('<?php echo get_template_directory_uri()?>/font/butler-free-blk-webfont.woff') format('woff');
    font-weight: 800;
    font-style: normal;
}
	</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page">
		<div id="contenido" >