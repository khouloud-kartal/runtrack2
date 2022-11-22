<?php
function bonjour($jour){
    if($jour == true){
        echo "Bonjour";
    }else if ($jour == false){
        echo "bonsoir";
    }
}
$mybooleen = true;
bonjour($mybooleen);
?>