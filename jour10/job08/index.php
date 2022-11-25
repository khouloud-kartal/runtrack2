<?php
    $mysqli = new mysqli("localhost", "root", "", "jour09");
    $requete = "SELECT SUM(capacite) FROM salles";
    $resultat = $mysqli->query($requete);
    $result = $resultat->fetch_all();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>job08</title>
</head>
<body>
    <table>
    <thead>
        <tr>
            <th>la superficie totale des étages</th>
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
