<?php
	
	require_once 'connectDB.php';
	require_once 'employees.php';
	require_once 'aviares.php';
	require_once 'zones.php';
	require_once 'animals.php';
	require_once 'fillTable.php';
	
	fillTable($zones,'zones');
	fillTable($aviares,'aviares');
	fillTable($animals,'animals');
	fillTable($employees,'employees');
	
	R::close(); // Закрыть соединение с базой данных
	
	$msg = 'Tables aviare,zones,animals now is already filled';
	echo $msg;
	print($msg);
?>