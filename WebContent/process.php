<?php
	$data = $_POST['text'] . "\n";
	echo $data;
//IMPORTANT: with the server folder data/ should be given permission to write: sudo chmod -R 777 data/
	$ret = file_put_contents('./data/data.txt', $data, FILE_APPEND | LOCK_EX);
	header('Location: index.html'); 
	exit()
?>