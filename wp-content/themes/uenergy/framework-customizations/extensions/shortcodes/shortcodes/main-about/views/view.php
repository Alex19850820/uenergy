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
<section class="about" id="company">
	<div class="container">
		<h2 class="about-head"><?=$atts['title']?></h2>
		<?php foreach ($atts['text'] as $text):?>
			<p class="about-text">
				<?=$text['text']?>
			</p>
		<?php endforeach;?>
	</div>
</section>