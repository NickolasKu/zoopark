<?php

	
	function fillTable($tableArray) {
		
		foreach ($tableArray as $empl) {
			
			$new_empl = R::dispense('employees');
			foreach ($empl as $column => $value) {
				
				if ($column !== 'id') {
					$new_empl->$column = $value;
				}
			}
			R::store($new_empl);
		}
	}

?>