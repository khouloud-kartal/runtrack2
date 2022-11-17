

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>job01</title>
</head>
<body>
<main>
    <form action="" method="GET" class="argument">
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
                foreach ($_GET as $j){
                    if ($j !== ""){
                        $i++;
                    }    
                }
                echo "Le nombre d’argument GET envoyé est : $i";
            ?></p>
        </div> 
    </main>
</body>
</html>