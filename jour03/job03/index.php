<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
for ($i=0; isset($str[$i]) === true; $i++){
    $voyelles = "aeiouyI";
    for ($a=0; isset($voyelles[$a]) === true; $a++){
        if ($str[$i] === $voyelles[$a]){
            echo "$str[$i]";
        }else{
            echo null;
        }
    }
}
?>

