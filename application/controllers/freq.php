<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Freq extends CI_Controller {

    function index() {
        $alphabet = array(
            "a" => "8.17",
            "b" => "1.49",
            "c" => "2.78",
            "d" => "4.25",
            "e" => "12.7",
            "f" => "2.23",
            "g" => "2.02",
            "h" => "6.09",
            "i" => "6.97",
            "j" => "0.15",
            "k" => "0.77",
            "l" => "4.03",
            "m" => "2.41",
            "n" => "6.75",
            "o" => "7.51",
            "p" => "1.93",
            "q" => "0.1",
            "r" => "5.99",
            "s" => "6.33",
            "t" => "9.06",
            "u" => "2.76",
            "v" => "0.98",
            "w" => "2.36",
            "x" => "0.15",
            "y" => "1.97",
            "z" => "0.05"
        );

        $text    = "IOIJWFVWWFVBKIXUESMLJUFYAFXRHRVQCFFYAIEOAOMLJUCHWJVVHWBHPVVWDWEJOCWPWBPRQKZWDMFXNTIHOVKKKIXKPGTDNSWRNQRQUCLDDOJWDSYHWFKJNCNVKZUHNWKZEZCFKAVWKGLFDGZJDHJFKZUHNPPDJRSBJCIVLOIHWGZJDHYRQUYZKFCGOCWZWBNRKRCHWTDHWZCLAOEGUSKBKINLHZNHADRQZYERSKYBJCNQKARWPSIFDWCGPVVQWAVVKFIRSGJSNWEJOOIHPVVVWAVQKFDRQHYKWRERJCIPEBUHTDIHOGVGSVRWDSRUPVVDNRFICVFVPULHOGVGEHZVPVVEHWXKPARQSOJEKFEIKFZWEGDDNURUAHPRQAFXNBWRN";
        $key_len = 4;
        $a       = $this->get_tables($alphabet, $text, $key_len);
        var_dump($a);
    }

    function get_tables($alphabet, $text, $key_len) {

        $text_len = strlen($text);
        for ($k = 0; $k < $key_len; $k++) {
            echo $k;

            for ($i = $k; $i < $text_len; $i += $key_len) {
                $a_text[$k][] = $text[$i];
            }
        }
        // $text_len = $text_len / $key_len;
        foreach ($a_text as $col) {
            $col_size   = count($col);
            $col_values = array_count_values($col);
            $sum_for_ic = 0;
            var_dump($col_values);
            foreach ($col_values as $letter) {
                $sum_for_ic += $letter * ($letter - 1);
            }
            $ic[] = $sum_for_ic / ($col_size * ($col_size - 1));
        }

        $alphabet = range('A', 'Z');
        var_dump($alphabet);
        //foreach ($a_text as $col) {
            foreach ($a_text[1] as $key => $value) {
                //var_dump($value);
                $ind = array_search($value, $alphabet);
                if ($ind != false) {
                    $keys[] = $ind;
                }
            }
             $col_values_a = array_count_values($keys);
             var_dump($col_values_a);

             $i = 8;
             foreach ($col_values_a as $key_lett=>$num_lett){
                 $new_key = $key_lett - $i;
                 if ($new_key < 0){
                      $new_key = 25 +  $new_key;
                 }
                 $new_mass[$new_key] = $num_lett;
             }

       // }

        var_dump($new_mass);

        foreach ($new_mass as $key => $value) {
               $obr[$alphabet[$key]] = $value;
            }

            var_dump($obr);


        var_dump($ic);
        // var_dump($a_text);
        // var_dump($text_len);
        // $temp = array_count_values($a_text);
        $sum = 0;
        foreach ($temp as $coun) {
            $sum += $coun * ($coun - 1);
        }
        $ic = $sum / ($text_len * ($text_len - 1));
        var_dump($ic);

        foreach ($temp as &$value) {
            $value = $value * 100 / $text_len;
        }
        var_dump($temp);
        foreach ($alphabet as $key => $value) {
            foreach ($temp as $temp_key => $temp_value) {
                if (($value / $temp_value) >= 0.9 and ( $value / $temp_value) <= 1.1)
                    $res[$temp_key] = $key;
            }
        }
        return $res;
    }

//Эта функция делает всякую дичь только для одного столбца. Доделай ее так, чтоб она это все делала для всех!
}
