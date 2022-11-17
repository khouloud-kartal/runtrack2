
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>job03</title>
</head>
<body>
<main>
    <form action="" method="POST" class="argument">
        <label for="nom">Nom</label><br>
        <input type="text" name="nom" ><br>
        <label for="prenom">Prénom</label><br>
        <input type="text" name="prenom"><br>
        <label for="mail">Mail</label><br>
        <input type="text" name="mail"><br>
        <input type="submit">
    </form>
        <div class = "n_argument">
            <p><?php
                $i = 0; 
                foreach ($_POST as $j){
                    if ($j !== ""){
                        $i++;
                    }    
                }
                echo "Le nombre d’argument POST envoyé est : $i";
            ?></p>
        </div> 
    </main>
</body>
</html>