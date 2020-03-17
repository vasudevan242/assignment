<?php

	$ar = array();
	for($i = 1; $i < 100; $i++) {
	      
	      $ar[0] = $i % 3;
	      $ar[1] = $i % 5;
	      $ar[2] = ($i % 3 == 0) && ($i % 5 == 0);

	       switch ($ar) {
	        case ($ar[2] == 1):
	            echo sprintf("%s\n","Linianos");
	            break;
	        case ($ar[1] == 0):
	            echo sprintf("%s\n","IT");
	            break;
	        case ($ar[0] == 0):
	            echo sprintf("%s\n","Linio");
	            break;
	        default:
	            echo sprintf("%s\n", $i );
	    }
	}

?>
