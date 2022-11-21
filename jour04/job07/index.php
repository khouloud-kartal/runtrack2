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
    <pre>
    <?php
        if ($_GET["hauteur"] != "" && $_GET["largeur"] != "" ){
            for($i = 0; $i <= $_GET["hauteur"] - 1; $i++){    
                if($i == 0){                           
                    for($a = 0; $a <= $_GET["hauteur"] - 4; $a++){
                        echo '&nbsp';
                    }
                    echo '/' . '\\' . "<br>";
                }elseif($i <= $_GET["hauteur"]){                                  
                    for($a = 0; $a <= $_GET["hauteur"] - $i; $a++){
                        echo '&nbsp';
                    }
                    echo '/';
                    for($a = 1; $a <= $i * 2; $a++){
                        echo '_';
                    }
                    echo '\\' . "<br>";
                }
            }
            for($i = 0; $i <= $_GET["hauteur"] - 1; $i++){
                for($a = 0; $a <= $_GET["largeur"] % 2 +1; $a++){
                    echo '&nbsp';
                }
                if($i == $_GET["hauteur"] - 1){
                    echo "|";
                    for($a = 1; $a <= $_GET["largeur"] - 2; $a++){
                        echo '_';
                    }
                    echo "|" . "<br>";
                }else{
                    echo "|";
                    for($a = 1; $a <= $_GET["largeur"] - 2; $a++){
                        echo '&nbsp';
                    }
                    echo "|" . "<br>";
                }
            }
        }else{
            echo "Veuillez entrer une hauteur et une hauteur";
        } 
    ?>
    </pre>
</main>
</body>
</html>
