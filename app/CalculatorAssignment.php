<?php
namespace Calculator;
	/*
	  Use : To add all the values in Array
	  */
  class CalculatorAssignment {
    static function sumTwo($params){
      $sum = array_sum($params);
	  echo  $sum;
    }
  }
  ?>