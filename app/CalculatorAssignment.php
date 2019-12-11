<?php
namespace Calculator;

  class CalculatorAssignment {
	  /*
	  Use : To add all the values in Array
	  */
    static function sumTwo($params){
      $sum = array_sum($params);
	  echo  $sum;
    }
	
	/*
	  Use : Check If Array contaning negative Number and return value as well
	  */
	static function checkNegativeValue($params){
		$flag = 0;
		$negativeArray = array();
		foreach ($params as $value)
		{
			if ($value < 0)
			{
				//$flag = 1;
				array_push($negativeArray,$value);
			}
		}
		return implode(",",$negativeArray);;
    }
	
	
  }
  ?>