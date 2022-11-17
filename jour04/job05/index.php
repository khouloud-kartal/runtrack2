<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>job05</title>
</head>
<body>
<main>
    <form action="" method="POST" class="argument">
        <label for="nom">Username</label>
        <input type="text" name="nom" >
        <label for="mdp">Password</label>
        <input type="text" name="mdp">
        <input type="submit">
    </form>
    <div class="formulaire">
        <p><?php 
                    if ($_POST['nom'] === 'John' && $_POST['mdp'] === 'Rombo'){
                        echo "c'est pas ma guerre";
                    }else if (isset($_POST['nom']) && isset($_POST['mdp'])){
                        echo "Votre pire cauchemar";
                    }else{
                        null;
                    }
                    ?>
        </p>
    <div>
</main>
</body>
</html>
