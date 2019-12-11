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
  }
  ?>