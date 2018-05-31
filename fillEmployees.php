<?php

	
	require 'employees.php';
	
	//print(var_dump($employees));

	require 'rb-mysql.php';
	R::setup( 'mysql:host=127.0.0.1;dbname=RedBeanBD','root', '' ); // подключения к базе данных в RedBeanPHP	
	if ( !R::testConnection() )
	{
		exit ('Нет соединения с базой данных');
	}
	
	foreach ($employees as $empl) {
		
		$new_empl = R::dispense('employees');
		foreach ($empl as $column => $value) {
			
			if ($column !== 'id') {
				$new_empl->$column = $value;
			}
		}
		R::store($new_empl);
	}
	
	$n = R::dispense('employees');
	$n->name = 'AAAA';
	$n->surname = 'BBBB';
	$n->status = 'CCCC';
	R::store($n);
	 
	R::close();

?>