<?php
function occurrences($str, $char){
    $n_char =0;
    for ($i=0; isset($str[$i]); $i++) { 
        if ($str[$i] === $char) {
            $n_char++;
        }
    }
    return $n_char;
}
$str = 'Bonjourdftehskj';
$char = 'o';
$n_char = occurrences($str, $char);
echo $str . '.' .'<br>';
echo 'il ya '. $n_char. ' ' .$char . ' dans la phrase.';
?>