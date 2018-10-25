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
<section class="about-slider" id="works">
	<div class="slider-about">
		<?php foreach ( $atts['slider'] as $slider ):?>
			<div class="slider-about__item"><img src="<?=$slider['img']['url']?>" alt="" role="presentation"/>
				<div class="bgSlider">
				</div>
				<p class="slider-about__item__text">
					<?=$slider['obj']?><br><span><?=$slider['name']?></span>
				</p>
				<p class="slider-about__item__bottom-text"><?=$slider['brand']?></p>
			</div>
		<?php endforeach;?>
	</div>
</section>