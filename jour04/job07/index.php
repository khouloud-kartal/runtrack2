<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>job06</title>
</head>
<body>
<main>
    <form action="" method="GET" class="argument">
        <label for="hauteur">Hauteur</label>
        <input type="text" name="hauteur" >
        <label for="largeur">Largeur</label>
        <input type="text" name="largeur">
        <button type="submit">Submit</button>
    </form>
    <?php
        $GET['hauteur']= 0;
        $GET['largeur']= 0;
        foreach ($GET as $key => $valeur){
            for ($i = 1; $i <= ($GET['hauteur'] *2); $i++){
                if ($i =1){
                    echo " " * ($largeur/2)-1 . "/" . "\\";
                }elseif ($i <= $GET['hauteur']){
                    echo " " * ($GET['hauteur'] - $i) . "/" . "_" *$i . "\\";
                }elseif ($i >$GET['hauteur'] && $i < $GET['largeur']){
                    echo "|" . " " * $GET['largeur'] . "|";
                }elseif ($i === $GET['largeur']){
                    echo "|" . "_" * $GET['largeur'] . "|";
                }
            }
        }
    ?>
</main>
</body>
</html>
