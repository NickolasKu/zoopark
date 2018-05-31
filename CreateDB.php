<?php
	
	require_once 'connectDB.php';
	require_once 'employees.php';
	require_once 'fillTable.php';
   
    
    $empl = R::dispense('employees');
    $empl->name = 'Виталий';
    $empl->surname = 'Олегов';
    $empl->status = 'уборщик';
    R::store($empl);
    
    
    
    $aviares = R::dispense('aviares');
    $aviares->name = 'Медведи';
    $aviares->sizes = '2x3';
    $aviares->landscapetype = 'Лесной';
    R::store($aviares);
    
    
    $aviares->ownEmployees[] = $empl;
    
    $zones = R::dispense('zones');
    $zones->number = '';
    R::store($zones);
    
    $zones->ownAviares[] = $aviares;
    R::store($zones);
    
    $animals = R::dispense('animals');
    $animals->call = 'Сережа';
    $animals->type = 'Медведь';
    R::store($animals);
    
    $aviares->ownAnimals[] = $animals;
    R::store($aviares);
    
    $menu = R::dispense('menu');
    $menu->quantity = '';
    $menu->volume ='';
    R::store($menu);
	
	
	$rel = R::dispense('relations');
	$rel->ownAnimals = $animals;
	$rel->ownMenu = $menu;
    R::store($rel);
    
    
    $food = R::dispense('food');
    $food->type = 'мясо';
    $food->weight = '10';
    R::store($food);
    
    $menu->ownFood[] = $food;
    R::store($menu);
    
    
    echo 'I work';
	
	fillTable($employees);
    
    R::close(); // Закрыть соединение с базой данных
?>
