<?php  
for ($i=1; $i <= 100; $i++){

    if (($i % 3) === 0 && ($i % 5) === 0){
        echo "FizzBuzz<br>";
    }else if (($i % 3) === 0){
        echo "Fizz<br>" ;
    }else if (($i % 5) === 0){ 
        echo "Buzz<br>";
    }else{
        echo "$i<br>";
    }
}
/*
$i=1;
while ($i <= 100){
    if (($i % 3) === 0 && ($i % 5) === 0){
        echo "FizzBuzz<br>";
        $i++;
    }else if (($i % 3) === 0){
        echo "Fizz<br>" ;
        $i++;
    }else if (($i % 5) === 0){ 
        echo "Buzz<br>";
        $i++;
    }else{
        echo "$i<br>";
        $i++;
    }
}
*/
?>