<?php  
for($i = 0; $i <=1000; $i++){
$x = 0;
    for ($j = 2; $j <= $i/2; $j++){
        if($i%$j == 0){
        $x++;
        break;
        }
    }
        if( $x == 0 && $i != 1 ){
        echo "$i<br>";
        }
}

/*
$i = 0;
while ($i <= 1000) {
    if ($i == 1 || $i == 0) {
        $i++;
        continue;
    }
    $a = 1;
    $j = 2;
    while ($j < ($i / 2) + 1) {
        if ($i % $j == 0) {
            $a = 0;
            break;
        }
        $j++;
    }
    if ($a == 1)
        echo "$i<br>";
        $i++;
}
*/
?>