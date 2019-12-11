<?php
namespace Calculator;

  class CalculatorAssignment {
    static function sumTwo($params){
      $sum = array_sum($params);
	  echo  $sum;
    }
	static function checkNonInteger($params){
		foreach ($params as $value)
		{
			if (!is_numeric($value))
			{
				 return false;
			}
		}
		return true;
    }
  }
  ?>