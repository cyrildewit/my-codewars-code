<?php

// IN PROGRESS
// https://www.codewars.com/kata/546f922b54af40e1e90001da/train/php

function alphabet_position(string $s): string {

//   $alpabet = "abcdefghijklmnopqrstuvwxyz";
//   $s = $alpabet;
//   $result = array_map(function ($letter) {
//     $code = ord(strtoupper($letter)) -  ord('A') + 1;
    
//     if () {return '';}
//      return $code;
//   }, str_split($s));

  $result = array_reduce(str_split($s), function ($carry, $currentValue) {
    $code = ord(strtoupper($currentValue)) -  ord('A') + 1;
    return ($code >= 1 && $code <= 26) ? $carry + $code : $carry;
  }, '');

//   print_r($s);
//   print_r($result);
  
  return $result;
}

// function alphabet_position(string $s): string {
//   $s = preg_replace("/[^a-zA-Z0-9]+/", "", $s);
  
//   print_r($s);
  
//   $result = array_map(function ($letter) {
//      return ord(strtoupper($letter)) -  ord('A') + 1;
//     }, str_split($s));

//   return implode(" ", $result);
// }