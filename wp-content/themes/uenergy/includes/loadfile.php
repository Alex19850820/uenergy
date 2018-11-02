<?php
/**
 * Created by PhpStorm.
 * User: Neo
 * Date: 28.03.2018
 * Time: 14:34
 */

global $wpdb;

if($_FILES['file_name']) {
	
	$table_name = $wpdb->prefix . 'pr_files';
	
	//Проверяем на существование таблицы
	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {

		// тут мы добавляем таблицу в базу данных
		$sql = "	CREATE TABLE " . $table_name . " (
					id int(10) unsigned NOT NULL AUTO_INCREMENT,
					file varchar(255) NOT NULL default '',
					status tinyint(3) unsigned NOT NULL default  '0',
					PRIMARY KEY  (id),
					UNIQUE KEY id (id)
				);";
	
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
//		fw_print($wpdb->last_error);
	}
	if($_POST['file_name']) {
		// Удалим все старые записи из таблицы
		$wpdb->get_results( "TRUNCATE TABLE `".$table_name."` ");
		
		//	$loadfile = $_FILES['file_name']['name']; // получаем имя загруженного файла
		
		$wpdb->insert( $table_name, ['file' => $_POST['file_name'], 'status' => 1], ['%s', '%d']);
		echo "<h3>Файл презентации изменен!</h3>";
		return true;
	}
	
	// Каталог, в который мы будем принимать файл:
	$uploaddir = get_template_directory().'/includes/uploads/';
	
	$uploadfile = $uploaddir.basename($_FILES['file_name']['name']);
	
	$uploadfile = iconv("UTF-8","WINDOWS-1251",$uploadfile);
	
	// Копируем файл из каталога для временного хранения файлов:
	if (copy($_FILES['file_name']['tmp_name'], $uploadfile))
	{
		echo "<h3>Файл успешно загружен на сервер</h3>";
	} else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }
	// Удалим все старые записи из таблицы
		$wpdb->get_results( "TRUNCATE TABLE `".$table_name."` ");
	
	//	$loadfile = $_FILES['file_name']['name']; // получаем имя загруженного файла
	
	$wpdb->insert( $table_name, ['file' => basename($_FILES['file_name']['name']), 'status' => 1], ['%s', '%d']);
}

$dir    = get_template_directory()."/includes/uploads";
$files = scandir($dir);
?>
<form method="post"  enctype="multipart/form-data">
	<label>Загрузить файл</label>
	<input type="file" name="file_name"><br>
	<label>Выберите файл</label>
	<select name="file_name">
		<option value=""  >Выберите файл</option>
		<?php foreach ($files as $file):?>
			<?php if($file != '.'&& $file != '..'):?>
			<option value="<?=$file?>"><?=$file?></option>
			<?php endif;?>
		<?php endforeach;?>
	</select>
	<input type="submit">
</form>