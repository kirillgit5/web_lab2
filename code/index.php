<?php

function printArr(array  $arr): void {
    for ($i = 0; $i < count($arr); $i++) {
        echo nl2br("\n"  . $arr[$i]);
    }
}

// 1
$very_bad_unclear_name = "15 chicken wings";
$order = & $very_bad_unclear_name;

echo nl2br("\nYour order is: $very_bad_unclear_name.");

// 2
$ch1 = 1;
echo nl2br("\n $ch1");

$ch2 = 2;
echo nl2br("\n $ch2");

$doubleCh = 1.2;
echo nl2br("\n $doubleCh");

$sum = 12 - 2;
echo nl2br("\n $sum");

$last_month = 1187.23;
$this_month = 1089.98;
$diff = $this_month - $last_month;
echo nl2br("\n $diff");

// 11
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo nl2br("\n $days_per_language");

// 12
$res = 8**2;
echo nl2br("\n $res");

// 13
$my_num = 1;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;

echo nl2br("\n $answer");

// 14
$a = 10;
$b = 3;
$res = $a % $b;
echo nl2br("\n $res");

$a = 36;
$b = 2;

$ost = $a % $b;

if ($ost === 0) {
    echo nl2br("\n Делится");
} else {
    echo nl2br("\n Делится с остатком $ost");
}

$st = pow(2, 10);
echo nl2br("\n $st");
echo nl2br(sqrt(245));

$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $item) {
    $sum += pow($item,2);
}
$result = sqrt($sum);
echo nl2br("\n $result");

echo nl2br("\n" . round(sqrt(379)) . " ");
echo nl2br("\n" . round(sqrt(379), 1) . " ");
echo nl2br("\n" . round(sqrt(379), 2) . " ");

$dict = ['floor' => floor(sqrt(587)), 'ceil' => ceil(sqrt(587))];
echo '<pre>';
print_r($dict);
echo '</pre>';
$arr = [4, -2, 5, 19, -130, 0, 10];

echo nl2br("\n" . min($arr));
echo nl2br("\n" . max($arr));
echo nl2br("\n" .rand(1, 100));;

$randomArray = [];
for ($i = 0; $i < 10; $i++) {
    $randomArray[$i] = rand();
}

echo nl2br("\n" . printArr($randomArray));

$a = 12313;
$b = -4832;
echo nl2br("\n" . abs($a-$b));

$absArrray = [1, 2, -1, -2, 3, -3];
for ($i = 0; $i < count($absArrray); $i++) {
    $absArrray[$i] = abs($absArrray[$i]);
}

echo nl2br("\n" . printArr($absArrray));

$num = 62;
$divArr = [];

for ($i = 1; $i <= ($num); $i++) {
    if ($num % $i === 0) {
        $divArr[] = $i;
    }
}

$testArr = [1, 2, 3, 4];
$sum = 0;
$count = 0;

while ($sum < 10) {
    $sum += $testArr[$count];
    $count++;
}

echo nl2br("\n" . $count);

// 16

function printStringReturnNumber(): int {
    echo "1";
    return (int)"1";
}

$my_num = printStringReturnNumber();
echo nl2br("\n" . $my_num);

function increaseEnthusiasm(string $str): string {
    return $str . '!';
}

echo nl2br("\n" . increaseEnthusiasm('Hello'));

function repeatThreeTimes(string $str): string {
    return $str . $str . $str;
}

echo nl2br("\n" .repeatThreeTimes('Hello'));

echo nl2br("\n" .increaseEnthusiasm(repeatThreeTimes('Hello')));

function cut(string $str, int $num = 10): string {
    return substr($str, 0, $num);
}

function printRecArr(array $arr, int $i): void {
    if ($i < count($arr)) {
         echo nl2br("\n" .$arr[$i]);
         printRecArr($arr, $i + 1);
    }
}

$arr = [1, 2, 3, 4,5 ,6, 7, 8, 9];
printRecArr($arr, count($arr));

function sumDig(int $num): int {
    $sumOfCh = 0;
    while($num > 0) {
        $sumOfCh += $num % 10;
        $num = (int)($num / 10);
    }

    if ($sumOfCh <= 9) {
        return $sumOfCh;
    } else {
        return sumDig($sumOfCh);
    }
}

$array = [];
$index = 12;
for ($i = 0; $i < $index ; $i++) {
    $array[$i] = '';
    for ($j = 0; $j <= $i; $j++) {
        $array[$i] .= 'x';
    }
}

echo nl2br("\n" . printArr($array));

function arrayFill(string $str, int $num): array {
    $arr = [];
    for ($i = 0; $i < $num; $i++) {
        $arr[$i] = $str;
    }
    return $arr;
}

echo nl2br("\n" . arrayFill('-', 10));

$arr = [[1, 2, 3], [4, 5], [6]];

$sum = 0;

foreach ($arr as $item) {
    foreach ($item as $sItem) {
        $sum += $sItem;
    }
}

echo nl2br("\n" . $sum);

$arr = [1, 2, 5, 10];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo nl2br("\n" . $result);

$user = ['name' => 'Kirill', 'surname' => 'Kramar', 'patronymic' => 'Valilev'];
echo nl2br("\n" .$user['name']  . $user['surname'] . $user['patronymic']);

$date = ['year' => date('Y'), 'month' => date('m'), 'day' => date('d')];
echo nl2br("\n" .$date['year'] . '-' . $date['month'] . '-' . $date['day']);

$arr = ['a', 'b', 'c', 'd', 'e'];
echo nl2br("\n" .count($arr));
echo nl2br("\n" .$array[count($arr) -1]);
echo nl2br("\n" .$array[count($arr) -2]);

function greater(int $ch1, int $ch2): bool {
    if ($ch2 + $ch1 > 10) {
        return  true;
    } else {
        return false;
    }
}

function isEqual(int $ch1, int $ch2): bool {
    return $ch1 === $ch2;
}

echo "\n";
$test = 0;
echo $test == 0 ? 'верно' : 'неверно';

$age = 45;
if ($age < 10 || $age > 99) {
    echo nl2br("\n" .'Less than 10 or greater than 99');
} else {
    $sum = 0;
    while ($age > 0) {
        $sum += $age % 10;
        $age = (int)($age / 10);
    }

    if ($sum <= 9) {
        echo nl2br("\n" .'Single digit');
    } else {
        echo nl2br("\n" . 'Two digit');
    }
}

$arr = [3, 1, 3, 5];
if (count($arr) === 3) {
    echo nl2br("\n" . array_sum($arr));
}

// 19
$array = [];
for ($i = 0; $i < 20 ; $i++) {
    $array[$i] = '';
    for ($j = 0; $j <= $i; $j++) {
        $array[$i] .= 'x';
    }
}

echo nl2br("\n" . printArr($array));


$array = [1,2,3,4,5,6,7,8];
$mid = array_sum($array) / count($arr);

echo nl2br("\n" . $mid);

function sumRec(int $num): int {
    if ($num === 1) {
        return  1;
    } else {
        return  $num + sumRec($num - 1);
    }
}

echo nl2br("\n" .sumRec(100));

$arr = [1, 2, 3, 4, 5];
$result = array_map('sqrt', $arr);
echo nl2br("\n" . printArr($arr));

$keys = range('a', 'z');
$el = range(1, 26);
$arr = array_combine($keys, $el);

echo nl2br("\n" .printArr($arr));

$str = '1234567890';
$arr = str_split($str, 2);
$result = array_sum($arr);
echo nl2br("\n" .$result);