<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$str2 = "";          
for($i = 0; isset($str[$i]); $i++){
    if (!isset($str[$i+1])){
        $str2 = $str2.$str[0];//cette ligne pour changer le dernier charactère par le premier
    }else{ 
        $str2 = $str2.$str[$i+1];
    }
}
echo $str2;
?>