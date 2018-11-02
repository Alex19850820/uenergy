<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uenergy
 */
$contacts = fw_get_db_customizer_option();
global $wpdb;
$table_name = $wpdb->prefix . 'pr_files';
$file = $wpdb->get_results(" SELECT `file` FROM `".$table_name."` WHERE `id` = 1")[0]->file;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title()?></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header"><img class="image-fon" src="<?php bloginfo('template_url')?>/assets/images/header_fon.png" alt="" role="presentation"/>
		<div class="container container_flex-column">
			<div class="social">
				<a target="_blank" class="social__insta" href="<?=$contacts['instagram']?>">
					<i class="fab fa-instagram"></i>
				</a>
				<a target="_blank" class="social__facebook" href="<?=$contacts['facebook']?>">
					<i class="fab fa-facebook-f"></i>
				</a>
			</div>
			<div class="nav-menu">
				<a class="nav-menu__links" href="#company">О компании</a>
				<a class="nav-menu__links" href="#services">услуги</a>
				<a class="nav-menu__links" href="#works">наши работы</a>
				<a class="nav-menu__links" href="#contacts">контакты</a>
			</div>
			<img class="logo" src="<?php bloginfo('template_url')?>/assets/images/logo.png" alt="" role="presentation"/>
			<h1 class="logo-head">Энергия, которая Нас объединяет
			</h1>
			<a class="btn header-btn" href="<?php bloginfo('template_url')?>/includes/uploads/<?=$file?>" target="_blank">Скачать презентацию в формате PDF
			</a>
			<div class="contacts">
				<p class="contacts__phone"><?=$contacts['phone']?>
				</p>
				<p class="contacts__addr"><?=$contacts['address']?>
				</p>
			</div>
		</div>
	</header>

