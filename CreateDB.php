<?php
	
	require_once 'connectDB.php';
	require_once 'employees.php';
	require_once 'fillTable.php';
   
    
    $empl = R::dispense('employees');
    $empl->name = 'Василий';
    $empl->surname = 'Уткин';
    $empl->status = 'орнитолог';
    R::store($empl);
    
    
    
    $aviares = R::dispense('aviares');
    $aviares->name = 'Медведи';
    $aviares->sizes = '120';
    $aviares->landscapetype = 'Лесной';
    R::store($aviares);
    
    
    $aviares->ownEmployees[] = $empl;
    
    $zones = R::dispense('zones');
    $zones->type = 'Хищные млекопитающие';
    R::store($zones);
    
    $zones->ownAviares[] = $aviares;
    R::store($zones);
    
    $animals = R::dispense('animals');
    $animals->call = 'Медведь Миша';
    $animals->type = 'Хищные млекопитающие';
    R::store($animals);
    
    $aviares->ownAnimals[] = $animals;
    R::store($aviares);
    
    $menu = R::dispense('menu');
    $menu->quantity = 'Мясо';
    $menu->volume ='3';
    R::store($menu);
	
	
	$rel = R::dispense('relations');
    R::store($rel);
	
	$animals->ownRels[] = $rel;
	$menu->ownRels[] = $rel;
    R::store($animals);
    
    
    $food = R::dispense('food');
    $food->type = 'Заяц';
    $food->weight = '10';
    R::store($food);
    
    $menu->ownFood[] = $food;
    R::store($menu);
    
    R::close();
    echo 'I work';
	
	require_once 'aviares.php';
	require_once 'zones.php';
	require_once 'animals.php';
	require_once 'fillTable.php';
	
	fillTable($zones,'zones');
	fillTable($aviares,'aviares');
	fillTable($animals,'animals');
	fillTable($employees, 'employees');
    
?>
