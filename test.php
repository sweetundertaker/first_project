<?php
//     Циклы
/*
$testResults = [10, 34, 50, 70, 90, 20, ];

$candidatesNum =  count($testResults);

for ($i=0; $i < $candidatesNum; $i++){
    if ($testResults[$i] > 70){
        echo "Кандидат с номером {$i} набрал более 70 балов\n ";
    }
}
*/
/*
for ($i = 200; $i > 0; $i--){
    if ($i % 5 === 0){
        echo "Число {$i} делиться на 5\n";
    }
}
*/
/*
$testResults = ['Иванов Иван' => 40,'Петр Петрович' => 50, 'Денис Денисович' => 90, 'Василий Васильев' => 100, 'Михаил Михалыч' => 60, ];
foreach ($testResults as $key => $testResult) {
    if ($testResult > 70) {
        echo "Кандидат с неймам {$key} набрал больше 70 балов \n";
    }
}
*/
/*
$testArray = [1, 2, 3,];

    foreach ($testArray as &$value) {
        $value = 0;
    }
print_r($testArray);
*/
/*
    while (false){
        echo  "Я цикл while";
    }

    do {
        echo  "Я цикл ... while";
    }while (false);
    */
/*
stream_set_blocking(STDIN, false);
do {
    echo rand(10000, 99999);
    $key = ord(fgetc(STDIN));
}while ($key != 10);
 */
/*
$exampleStr = 'abracadabra';
$exampleStrLen = strlen($exampleStr);

for ($i = 0; $i < $exampleStrLen; $i++){
    if ($exampleStr[$i] === 'b'){
    $position = $i;
    break;

    }
}
echo $i + 1;
*/
/*
$numbers = [5, 10, 20, 4, 3, 1, 74, ];
$sum = 0;

foreach ($numbers as $number){
    if ($number % 5 !==0 ){
        continue;
    }
    $sum += $number;
}
    echo $sum;
*/
