<?php
	$data = $_POST['text'];
	$to_id = $_POST['to_id'];

	$fp = file('./data/data.txt');
	$index = count($fp);
	
//IMPORTANT: with the server folder data/ should be given permission to write: sudo chmod -R 777 data/
	$ret = file_put_contents('./data/data.txt', $index . ',' .  "reply" . ',' . $data . ',' . $to_id . "\n", FILE_APPEND | LOCK_EX);
	header('Location: index.html'); 
	exit()
?>