<?php
    $mysqli = new mysqli("localhost", "root", "", "jour09");
    $requete = "SELECT COUNT(*) FROM etudiants";
    $resultat = $mysqli->query($requete);
    $result = $resultat->fetch_all();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>job06</title>
</head>
<body>
    <table>
    <thead>
        <tr>
            <th>Nombre d'étudiants</th>
        </tr>
    </thead>
    <tbody>
            <?php
            foreach ($result as $ligne){
                echo '<tr>';
                foreach ($ligne as $key =>$value){
                    echo '<td>'. $value .'</td>';
                }
                echo '</tr>';
            }
            $mysqli->close();
            ?>
    </tbody>
    </table>
</body>
</html>
