<?php
//task1


$word = "julius";
$key = 3;
$codeWord = ' ';
$discodeWord = ' ';
for ($i = 0; $i < strlen($word); $i++) {
    $symbol = ord($word[$i]) + $key;
    if ($symbol > 255) {
        $symbol = $symbol - 255;
    }
    $codeWord = $codeWord . chr($symbol);
}
echo $codeWord;

for ($i = 0; $i < strlen($codeWord); $i++) {
    $symbol = ord($codeWord[$i]) - $key;
    if ($symbol < 255) {
        $symbol = 255 - $symbol;
    }
    $discodeWord = $discodeWord . chr($symbol);
}
echo $discodeWord;

