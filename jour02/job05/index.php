<?php  
for($i = 1; $i <=99; $i++){
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
?>