<?php

	
	function fillTable($tableArray, $tableName) {
		
		require_once 'connectDB.php';
		
		foreach ($tableArray as $empl) {
			
			$new_empl = R::dispense($tableName);
			foreach ($empl as $column => $value) {
				
				if ($column !== 'id') {
					$new_empl->$column = $value;
				}
			}
			R::store($new_empl);
		}
		
		R::close();
	}

?>