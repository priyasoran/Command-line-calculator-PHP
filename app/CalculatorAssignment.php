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
	
  }
  ?>