<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fridman extends CI_Controller {

    function shifts($text, $k, $seq) {
        $res = array();


        for ($items = 1; $items <= $seq; $items++) {
            $len     = strlen($text);
            $a_count = array();
            for ($i = 0; $i <= $len - 1; $i++) {
                $a_count[$i] = $i;
            }
            $delta = 0;
            for ($index = 0; $index <= $len - 1; $index++) {
                if ($index < $len) {
                    $index2          = $index + $k;
                    $a_count[$index] = $text[$index2];
                } else {
                    $a_count[$index] = $text[$delta];
                    $delta++;
                }
            }
            $counter = 0;
            for ($inx = 0; $inx <= $len - 1; $inx++) {
                if ($text[$inx] == $a_count[$inx]) {
                    $counter++;
                }
            }

            $k++;
            $percent     = $counter * 100 / $len;
            $res[$items] = $counter;
        }

        return $res;
    }

    function index() {

        //$texting = 'dlvb p kf tvv r khpb w wyk cu qp fvfv ouh nwgeir oek';
        $texting = 'kccgv oy ppiwusc yspt grwmpv tajwii, an hivem asxawpp kg ';
        $a       = $this->shifts($texting, $k       = 1, $seq     = 20);
        var_dump($a);
    }

}

//Та же функция, только менее точная и более лаконичная


/*
  $text='dlvb p kf tvv r khpb w wyk cu qp fvfv ouh nwgeir oek';
  $a_text='';
  $res = array();
  $len = strlen($text);
  for($i=1;$i<=10;$i++) {

  for ($j = 0; $j <= $len - 1; $j++) {
  $a_text[$j] = $text[$j + $i];
  }
  //    $temp = 0;
  $count = 0;
  for ($j = 0; $j <= $len - 1; $j++)
  {
  if ($text[$j] == $a_text[$j]) {
  $count++;
  }
  //    $temp++;
  }
  $percent = $count * 100 / $len;
  $res[$i] = $percent;
  }
  var_dump($res);
 */

//$alphabet = array(
//    "a" => "8.17",
//    "b" => "1.49",
//    "c" => "2.78",
//    "d" => "4.25",
//    "e" => "12.7",
//    "f" => "2.23",
//    "g" => "2.02",
//    "h" => "6.09",
//    "i" => "6.97",
//    "j" => "0.15",
//    "k" => "0.77",
//    "l" => "4.03",
//    "m" => "2.41",
//    "n" => "6.75",
//    "o" => "7.51",
//    "p" => "1.93",
//    "q" => "0.1",
//    "r" => "5.99",
//    "s" => "6.33",
//    "t" => "9.06",
//    "u" => "2.76",
//    "v" => "0.98",
//    "w" => "2.36",
//    "x" => "0.15",
//    "y" => "1.97",
//    "z" => "0.05"
//);
