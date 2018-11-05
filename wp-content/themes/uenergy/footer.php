<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
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
<div class="map" id="contacts"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2865.64884131199!2d37.64121031817786!3d55.76705049155243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a64754707ab%3A0x5b5b601539d9f296!2z0JDRgNCz0L4g0JTQstC10YDQuA!5e1!3m2!1sru!2sua!4v1540370124980" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<footer class="footer">
	<div class="container">
		<div class="footer-wrap">
			<div class="footer__item">
				<div class="footer__menu"><a class="footer__menu-item" href="#company">О компании</a><a class="footer__menu-item" href="#services">Услуги</a><a class="footer__menu-item" href="#works">Наши работы</a><a class="footer__menu-item" href="#contacts">Контакты</a>
				</div>
				<div class="footer__logo">
					<img src="<?php bloginfo('template_url')?>/assets/images/logo.png"/>
				</div>
			</div>
			<div class="footer__item footer__center">
				<a class="btn" href="<?php bloginfo('template_url')?>/includes/uploads/<?=$file?>" target="_blank">
					Скачать презентацию в формате PDF
				</a>
				<a href="tel:<?=$contacts['phone']?>" style="color: #ffffff; text-decoration: none" class="contacts__phone">
					<?=$contacts['phone']?>
				</a>
				<span class="footer__address"><?=$contacts['address']?></span>
				<div class="footer__social">
					<span>Мы в соц. сетях:</span>
					<a target="_blank" class="footer__social-item" href="<?=$contacts['instagram']?>">
						<i class="fab fa-instagram"></i>
					</a>
					<a target="_blank" class="footer__social-item" href="<?=$contacts['facebook']?>">
						<i class="fab fa-facebook-f"></i>
					</a>
				</div>
			</div>
			<form class="footer__item">
				<span class="footer__form-title">Заказать расчет сметы</span>
				<input class="footer__input" name="name" placeholder="Ваше имя" type="text"/>
				<input class="footer__input" name="phone" placeholder="Ваш телефон" type="text"/>
				<textarea class="footer__textarea" name="text" placeholder="Ваш комментарий"></textarea>
				<button class="footer__btn btn" type="submit">Заказать расчет
				</button>
			</form>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
