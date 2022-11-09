<?php
//task1
$word = "julius";
$key = 3;
for($i=0; $i<strlen($word); $i++){
    $symbol = ord($word[$i])+$key;
    if ($symbol > 255){
        $symbol = $symbol - 255;
    }
    $codeWord = $codeWord .chr($symbol);
}
echo  $codeWord;

