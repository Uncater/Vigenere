<?php
function get_tables($alphabet, $text, $key_len)
{

    $text_len = strlen($text);
    $j = 0;
    $i = 0;
    for ($i; $i <= $text_len - 1; $i += $key_len) {
        $a_text[$j] = $text[$i];
        $j++;
    }
    $temp = array_count_values($a_text);
    foreach ($temp as &$value) {
        $value = $value * 100 / $text_len;

    }
    foreach($alphabet as $key => $value){
        foreach($temp as $temp_key => $temp_value)
        {
            if(($value/$temp_value) >= 0.9 and ($value/$temp_value) <= 1.1) $res[$temp_key]=$key;
        }
    }
    return $res;
}//Эта функция делает всякую дичь только для одного столбца. Доделай ее так, чтоб она это все делала для всех!
