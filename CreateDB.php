<?php
	require 'rb-mysql.php';
	
	R::addDatabase('ReadBeanDB2', 'mysql:host=127.0.0.1;dbname=RedBeanBD2', 'root', '', $frozen);
	
	R::setup('mysql:host=127.0.0.1;dbname=RedBeanBD2','root', '' ); // подключения к базе данных в RedBeanPHP	
	if ( !R::testConnection() )
	{
			exit ('Нет соединения с базой данных');
	}
	
	 $empl = R::dispense('employees');
	 $empl->id = '1';
	 $empl->name = 'Виталий';
	 $empl->surname = 'Олегов';
	 $empl->status = 'уборщик';
	 R::store($empl);
	 
	
	
	 $aviares = R::dispense('aviares');
	 $aviares->id = '1';
	 $aviares->name = 'Медведи';
	 $aviares->sizes = '2x3';
	 $aviares->landscapetype = 'Лесной';
	 R::store($aviares);
	 
	
	 $aviares->ownEmployees[] = $empl;
	 
	 $zones = R::dispense('zones');
	 $zones->id = '1';
	 $zones->number = '';
	 R::store($zones);
	 
	 $zones->ownAviares[] = $aviares;
	 R::store($zones);
	 
	 $animals = R::dispense('animals');
	 $animals->id = '1';
	 $animals->call = 'Сережа';
	 $animals->type = 'Медведь';
	 R::store($animals);
	 
	 $aviares->ownAnimals[] = $animals;
	 R::store($aviares);
	 
	 $menu = R::dispense('menu');
	 $menu->id = '1';
	 $menu->day = '';
	 $menu->time_ = '';
	 $menu->id_animal = '';
	 $menu->id_food = '';
	 $menu->volume ='';
	 R::store($menu);
	
	 $animals->ownMenu[] = $menu;
	 R::store($animals);
	 
	
	 $food = R::dispense('food');
	 $food->id = '1';
	 $food->type = 'мясо';
	 $food->weight = '10';
	 R::store($food);
	 
	 $menu->ownFood[] = $food;
	 R::store($menu);
	 
	 
	
	
	
	R::close(); // Закрыть соединение с базой данных
	
	echo 'I work';
?>
