<?php
    $mysqli = new mysqli("localhost", "root", "", "jour09");
    $requete = "SELECT AVG(capacite) FROM salles";
    $resultat = $mysqli->query($requete);
    $result = $resultat->fetch_all();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>job11</title>
</head>
<body>
    <table>
    <thead>
        <tr>
            <th>la capacité moyenne des salles</th>
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
