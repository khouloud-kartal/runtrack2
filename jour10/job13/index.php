
<?php
    $mysqli = new mysqli("localhost", "root", "", "jour09");
    $requete = "SELECT salles.nom, etage.nom FROM salles INNER JOIN etage WHERE salles.id_etage = etage.id;";
    $resultat = $mysqli->query($requete);
    $result = $resultat->fetch_all();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>job13</title>
</head>
<body>
    <table>
    <thead>
        <tr>
            <th>Nom de salle</th>
            <th>Nom d'étage</th>
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
