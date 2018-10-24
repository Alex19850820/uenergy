<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/***
  * Верстка шорткода
  * весь контент лежит в переменной $atts
 *@var $atts array
 *
 **/

?>
<input type="hidden" name="template_url" value="<?php bloginfo('template_url')?>/">
<section class="partners">
	<div class="container">
		<h2 class="title-main text-center">Наши партнеры</h2>
		<div class="partners__slick">
			<div class="partners__slick-item"><img src="<?php bloginfo('template_url')?>/assets/images/partners1.png"/>
			</div>
			<div class="partners__slick-item"><img src="<?php bloginfo('template_url')?>/assets/images/partners2.png"/>
			</div>
			<div class="partners__slick-item"><img src="<?php bloginfo('template_url')?>/assets/images/partners3.png"/>
			</div>
			<div class="partners__slick-item"><img src="<?php bloginfo('template_url')?>/assets/images/partners4.png"/>
			</div>
			<div class="partners__slick-item"><img src="<?php bloginfo('template_url')?>/assets/images/partners1.png"/>
			</div>
			<div class="partners__slick-item"><img src="<?php bloginfo('template_url')?>/assets/images/partners2.png"/>
			</div>
			<div class="partners__slick-item"><img src="<?php bloginfo('template_url')?>/assets/images/partners3.png"/>
			</div>
		</div>
	</div>
</section>