<?php

class VigenereCipher extends CI_Controller {

            function __construct() {
        parent::__construct();
        $this->InitTable();
    }

    public function Encrypt($plainText, $key) { // шифрование
        $textLenght   = strlen($plainText);
        $stretchedKey = $this->StretchKey($key, $textLenght);
        var_dump($stretchedKey);
        $cipherText ='';
        for ($i = 0; $i < $textLenght; $i++) {
            $keyChar  = $stretchedKey[$i];
            $textChar = $plainText[$i];
            $cipherText .= $this->charsTable[$keyChar][$textChar];
        }

        return $cipherText;
    }

    public function Decrypt($cipherText, $key) { // расшифрование
        $cipherLenght = strlen($cipherText);
        $stretchedKey = $this->StretchKey($key, $cipherLenght);
        $plainText ='';
        for ($i = 0; $i < $cipherLenght; $i++) {
            $keyChar    = $stretchedKey[$i];
            $cipherChar = $cipherText[$i];
            $plainText .= array_search($cipherChar, $this->charsTable[$keyChar]);
        }

        return $plainText;
    }

    private $charsTable; // Квадрат Виженера

    private function InitTable() { // создание квадрат Виженера
        $this->charsTable = [];
        for ($i = 65; $i < 91; $i++) {
            $tmp   = $i;
            $chars = [];
            for ($j = 65; $j < 91; $j++) {
                if ($tmp >= 91) {
                    $tmp = 65;
                }
                $chars[chr($j)] = chr($tmp);
                $tmp++;
            }
            $this->charsTable[chr($i)] = $chars;
        }


    }

    private function StretchKey($key, $lenght) { // растягивание ключа до длины строки
        $stretchedKey   = '';
        $keyLenght      = strlen($key);
        $keyEndingCount = $lenght % $keyLenght;
        $keyCount       = ($lenght - $keyEndingCount) / $keyLenght;

        for ($i = 0; $i < $keyCount; $i++) {
            $stretchedKey.=$key;
        }

        if ($keyEndingCount > 0) {
            $stretchedKey.= substr($key, 0, $keyEndingCount);
        }

        return $stretchedKey;
    }

    function index(){
        $text = 'MARGARETAREYOUGRIEVINGOVERGOLDENGROVEUNLEAVINGLEAVESLIKETHETHINGSOFMANYOUWITHYOURFRESHTHOUGHTSCAREFORCANYOUAHASTHEHEARTGROWSOLDERITWILLCOMETOSUCHSIGHTSCOLDERBYANDBYNORSPAREASIGHTHOUGHWORLDSOFWANWOODLEAFMEALLIEANDYETYOUWILLWEEPANDKNOWWHYNOWNOMATTERCHILDTHENAMESORROWSSPRINGSARETHESAMENORMOUTHHADNONORMINDEXPRESSEDWHATHEARTHEARDOFGHOSTGUESSEDITISTHEBLIGHTMANWASBORNFORITISMARGARETYOUMOURNFOR';
        $key = 'WORD';
        echo $text;
       $shifr =  $this->Encrypt($text, $key);
       var_dump($shifr);
       $rashifr = $this->Decrypt($shifr, $key);
       var_dump($rashifr);

    }

}


