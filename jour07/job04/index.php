<?php
function calcule($a, $operation, $b){
if ($operation === '+'){
    $result = $a + $b;
}elseif ($operation === '-'){
    $result = $a - $b;
}elseif ($operation === '/'){
    $result = $a / $b;
}elseif ($operation === '%'){
    $result = $a % $b;
}elseif ($operation === '*'){
    $result = $a * $b;
}
return $result;
}
$a = 8;
$operation = "-";
$b = 5;
$myresult = calcule($a, $operation, $b);
echo $myresult;
?>