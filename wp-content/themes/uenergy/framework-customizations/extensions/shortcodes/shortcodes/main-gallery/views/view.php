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
<section class="work-section" id="work">
	<div class="container">
		<div class="work">
			<div class="work-left">
				<img class="work-left__first" src="<?=$atts['gallery_left'][0]['img'][0]['url']?>" alt="" width="364px" height="207px" role="presentation"/>
				<img class="work-left__two" src="<?=$atts['gallery_left'][0]['img'][1]['url']?>" alt="" width="364px" height="208px" role="presentation"/>
			</div>
			<div class="work-center">
				<div class="work-center-up">
					<div class="work-center-text">
						<h2 class="work-center-text__head">Наши работы<span class="js js_showImg">еще фото</span>
						</h2>
						<p>В этом разделе Вы можете увидеть некоторые готовые проекты выполненные по разным техзаданиям с использованием разных технологий - реклама, брендирование, винилография и пр. Галерея позволит получить общее впечатление о работе с пленкой и конечном результате, а возможно, поможет определиться с тем что необходимо именно Вам.
						</p>
					</div>
					<!--+e('img')(src='<?php bloginfo('template_url')?>/assets/images/works_photo_5.png', alt='', width='180px', height='135px').five-->
				</div>
				<div class="work-center-down">
					<div class="work-center-down-left">
						<img class="work-center-down-left__three" src="<?=$atts['gallery_center'][0]['img'][0]['url']?>" alt="" width="180px" height="135px" role="presentation"/>
						<img class="work-center-down-left__four" src="<?=$atts['gallery_center'][0]['img'][1]['url']?>" alt="" width="180px" height="135px" role="presentation"/>
					</div>
					<div class="work-center-down-right">
						<img class="work-center-down-right__six" src="<?=$atts['gallery_center'][0]['img'][2]['url']?>" alt="" width="355px" height="280px" role="presentation"/>
					</div>
				</div>
			</div>
			<div class="work-right">
				<img class="work-right__seven" src="<?=$atts['gallery_right'][0]['img'][0]['url']?>" alt="" width="180px" height="135px" role="presentation"/>
				<img class="work-right__eight" src="<?=$atts['gallery_right'][0]['img'][1]['url']?>" alt="" width="180px" height="135px" role="presentation"/>
				<img class="work-right__nine" src="<?=$atts['gallery_right'][0]['img'][2]['url']?>" alt="" width="180px" height="135px" role="presentation"/>
			</div>
		</div>
		<div class="work-two">
			<div class="work-left">
				<img class="work-left__first" src="<?=$atts['gallery_more_left'][0]['img'][0]['url']?>" alt="" width="364px" height="207px" role="presentation"/>
				<img class="work-left__two" src="<?=$atts['gallery_more_left'][0]['img'][1]['url']?>" alt="" width="364px" height="208px" role="presentation"/>
			</div>
			<div class="work-center">
				<div class="work-center-up">
					<img class="work-center-up__five five-two" src="<?=$atts['gallery_more_center'][0]['img'][0]['url']?>" alt="" width="268px" height="135px" role="presentation"/>
					<img class="work-center-up__five" src="<?=$atts['gallery_more_center'][0]['img'][1]['url']?>" alt="" width="267px" height="135px" role="presentation"/>
				</div>
				<div class="work-center-down">
					<div class="work-center-down-left">
						<img class="work-center-down-left__three" src="<?=$atts['gallery_more_center'][0]['img'][2]['url']?>" alt="" width="180px" height="135px" role="presentation"/>
						<img class="work-center-down-left__four" src="<?=$atts['gallery_more_center'][0]['img'][3]['url']?>" alt="" width="180px" height="135px" role="presentation"/>
					</div>
					<div class="work-center-down-right">
						<img class="work-center-down-right__six" src="<?=$atts['gallery_more_center'][0]['img'][4]['url']?>" alt="" width="355px" height="280px" role="presentation"/>
					</div>
				</div>
			</div>
			<div class="work-right">
				<img class="work-right__seven" src="<?=$atts['gallery_more_right'][0]['img'][0]['url']?>" alt="" width="180px" height="135px" role="presentation"/>
				<img class="work-right__eight" src="<?=$atts['gallery_more_right'][0]['img'][1]['url']?>" alt="" width="180px" height="135px" role="presentation"/>
				<img class="work-right__nine" src="<?=$atts['gallery_more_right'][0]['img'][2]['url']?>" alt="" width="180px" height="135px" role="presentation"/>
			</div>
		</div>
	</div>
</section>