<?php
namespace Calculator;

  class CalculatorAssignment {
	  /*
	  Use : To add all the values in Array
	  */
    static function sumAll($params){
      $sum = array_sum($params);
	  echo  $sum;
    }
	/*
	  Use : Check If Array contaning negative Number
	  */
	static function checkNegativeNumber($params){
		foreach ($params as $value)
		{
			if ($value < 0)
			{
				 return 0;
			}
		}
		return 1;
    }
	/*
	  Use : Check If Array contaning negative Number and return value as well
	  */
	static function checkNegativeValue($params){
		$negativeArray = array();
		foreach ($params as $value)
		{
			if ($value < 0)
			{
				
				array_push($negativeArray,$value);
			}
		}
		return implode(",",$negativeArray);;
    }
	/*
	  Use : Remove values Greater than 1000 from array
	  */
	static function removeValueAbove1000($params){
		
		foreach ($params as $key => $value)
		{
			if ($value > 1000)
			{
				//$flag = 1;
				 unset($params[$key]);
			}
		}
		return $params;
    }
	/*
	  Use : Multiple all values in string
	  */
	static function multiply($params){
      $product = array_product($params);
	  echo  $product;
    }
	
	
  }
  ?>