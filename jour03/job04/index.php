<?php
$str = "Dans l'espace, personne ne vous entend crier";
/*$i = 0;
while (isset($str[$i]) === true){
    $i++;
}
echo $i;*/
for ($i=0; isset($str[$i]) === true; $i++){
}
echo $i;
?>
