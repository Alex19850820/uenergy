<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
//    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
	/*'title'     => [
		'type'  => 'text',
		'value' => 'наши результаты',
		'label' => __('Заголовок', '{domain}'),
	],
	'img'     => [
		'type'  => 'upload',
		'value' => '',
		'label' => __('Добавить картинку', '{domain}'),
		'images_only' => true,
	],
	'title2'     => [
		'type'  => 'text',
		'value' => 'Наша миссия - Ваша красота',
		'label' => __('Заголовок поста', '{domain}'),
	],*/
	'gallery_left' => [
		'type' => 'addable-popup',
		'label' => __('Добавить картинки с лева', '{domain}'),
		'template' => '{{- img }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'img'     => [
				'type'  => 'multi-upload',
				'value' => '',
				'label' => __('Добавить картинки', '{domain}'),
				'images_only' => true,
				'desc'  => __('Добавьте 2-е картинки', '{domain}'),
			],
		]
	],
	'gallery_center' => [
		'type' => 'addable-popup',
		'label' => __('Добавить картинки по центру', '{domain}'),
		'template' => '{{- img }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'img'     => [
				'type'  => 'multi-upload',
				'value' => '',
				'label' => __('Добавить картинки', '{domain}'),
				'images_only' => true,
				'desc'  => __('Добавьте 3-и картинки', '{domain}'),
			],
		]
	],
	'gallery_right' => [
		'type' => 'addable-popup',
		'label' => __('Добавить картинки с права', '{domain}'),
		'template' => '{{- img }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'img'     => [
				'type'  => 'multi-upload',
				'value' => '',
				'label' => __('Добавить картинки', '{domain}'),
				'images_only' => true,
				'desc'  => __('Добавьте 3-и картинки', '{domain}'),
			],
		]
	],
	
	'gallery_more_left' => [
		'type' => 'addable-popup',
		'label' => __('Добавить картинки еще с лева', '{domain}'),
		'template' => '{{- img }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'img'     => [
				'type'  => 'multi-upload',
				'value' => '',
				'label' => __('Добавить картинки', '{domain}'),
				'images_only' => true,
				'desc'  => __('Добавьте 2-е картинки', '{domain}'),
			],
		]
	],
	'gallery_more_center' => [
		'type' => 'addable-popup',
		'label' => __('Добавить картинки еще по центру', '{domain}'),
		'template' => '{{- img }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'img'     => [
				'type'  => 'multi-upload',
				'value' => '',
				'label' => __('Добавить картинки', '{domain}'),
				'images_only' => true,
				'desc'  => __('Добавьте 5-и картинки', '{domain}'),
			],
		]
	],
	'gallery_more_right' => [
		'type' => 'addable-popup',
		'label' => __('Добавить картинки еще с права', '{domain}'),
		'template' => '{{- img }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'img'     => [
				'type'  => 'multi-upload',
				'value' => '',
				'label' => __('Добавить картинки', '{domain}'),
				'images_only' => true,
				'desc'  => __('Добавьте 3-и картинки', '{domain}'),
			],
		]
	],
	
];