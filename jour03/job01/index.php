
<?php
$tableau = [200, 204, 173, 98, 171, 404, 459];
    foreach ($tableau as $key){
        if ($key % 2 === 0){
            echo "$key est paire<br>";
        }else{
            echo "$key est impaire<br>";
        }
    }
?>