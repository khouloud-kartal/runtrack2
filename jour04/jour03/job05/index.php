<style><?php include "style.css"; ?></style>
<?php
$str ="On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = ["consonnes" => 0,
        "voyelles" => 0,];
$consonnes = ["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z","B","C","D","F","G","H","J","K","L","M","N","P","Q","R","S","T","V","W","X","Z"];
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
for ($i=0; isset($str[$i]); $i++){
        foreach ($consonnes as $consonne){
            if ($consonne === $str[$i]){
                $dic["consonnes"]++;
            }
        }
        foreach ($voyelles as $voyelle){
            if ($voyelle === $str[$i]){
                $dic["voyelles"]++;
            }
        }
}
?>
<table>
    <thead>
        <tr>
            <th>Consonnes</th>
            <th>Voyelles</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $dic["consonnes"]; ?></td>
            <td><?php echo $dic["voyelles"]; ?></td>
        </tr>
    </tbody>
</table>