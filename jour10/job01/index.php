<?php
    $mysqli = new mysqli("localhost", "root", "", "jour09");
    $requete = "SELECT * FROM etudiants";
    $resultat = $mysqli->query($requete);
    $result= $resultat->fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>job01</title>
</head>
<body>
    <table>
    <thead>
        <tr>
        <?php 
            foreach ($result as $key => $value){
                    echo '<th>' . $key . '</th>';
            }
        ?>
        </tr>
    </thead>
    <tbody>
            <?php
            while ($result !=NULL){
                echo '<tr>';
                foreach ($result as $key =>$value){
                    echo '<td>'. $value .'</td>';
                }
                $result = $resultat->fetch_array(MYSQLI_ASSOC);
                echo '</tr>';
            }
            ?>
    </tbody>
    </table>
</body>
</html>
