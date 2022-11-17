
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>job02</title>
</head>
<body>
<main>
    <form action="" method="GET" class="argument">
        <label for="nom">Nom</label>
        <input type="text" name="nom" >
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom">
        <input type="submit">
    </form>
    <table>
            <thead>
                <tr>
                    <th>Argument</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>    
                <tr>
                    <th>Nom</th>
                    <td><?php if (isset($_GET['nom'])) {
                        echo $_GET['nom'];
                    }?></td>
                </tr>
                <tr>
                    <th>Prénom</th>
                    <td><?php if (isset($_GET['prenom'])) {
                        echo $_GET['prenom'];
                    }?></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>
