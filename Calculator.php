<?php
require_once __DIR__ . '/vendor/autoload.php';

	$argvStr = isset($argv[2]) ? $argv[2] : null;
	$argvArr = explode(',', $argvStr);
	$isIntegerArray = Calculator\CalculatorAssignment::checkNonInteger($argvArr);
	if($isIntegerArray){
		switch ($argv[1]) {
			case "sum":
				if (isset($argvArr) && (sizeof($argvArr) <= 2)) {
					Calculator\CalculatorAssignment::sumTwo($argvArr);
				} else {
					echo "Please provide appropriate input. More than two values are not allowed.";
				}
				break;
			case "add":
				if (isset($argvArr)) {
					Calculator\CalculatorAssignment::sumTwo($argvArr);
				} else {
					echo "Please provide appropriate input.";
				}
				break;
			default:
				echo "You are not using the appropriate operation!";
		}
	}else{
		echo "Please provide appropriate input. Non-integer values are not allowed.";
	}
?>