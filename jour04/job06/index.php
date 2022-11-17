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
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" >
        <button type="submit">submit</button>
    </form>
    <div class="formulaire">
        <p><?php 
                foreach ($_GET as $i){
                    if ($i !== '' && $i % 2 ===0){
                        echo "Nombre paire";
                    }else if ($i !== '' && $i % 2 !==0){
                        echo "Nombre impair";
                    }
                }
            ?>
        </p>
    <div>
</main>
</body>
</html>
