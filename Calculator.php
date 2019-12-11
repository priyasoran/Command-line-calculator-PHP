<?php
require_once __DIR__ . '/vendor/autoload.php';

	$argvStr = isset($argv[2]) ? $argv[2] : null; //get value to perform Operation
	preg_match_all('/-?\\d+(?:\\.\\d+)?/m', $argvStr, $argvArr); // get only numeric values from string
	$argvArr = $argvArr[0];
		switch ($argv[1]) {
			//case to add 2 Numbers
			case "sum":
				if (isset($argvArr) && (sizeof($argvArr) <= 2)) {
					Calculator\CalculatorAssignment::sumTwo($argvArr);
				} else {
					echo "Please provide appropriate input. More than two values are not allowed.";
				}
				break;
				//Case to add multiple Numbers
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
?>