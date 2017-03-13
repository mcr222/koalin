<?php
	$data = $_POST['text'];
	$type = $_POST['type'];
	
	$fp = file('./data/data.txt');
	$index = count($fp);
	
//IMPORTANT: with the server folder data/ should be given permission to write: sudo chmod -R 777 data/
	$ret = file_put_contents('./data/data.txt', $index . ',' .  $type . ', ' . $data . "\n", FILE_APPEND | LOCK_EX);
	header('Location: index.html'); 
	exit()
?>