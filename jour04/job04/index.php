<style><?php include "style.css"; ?></style>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>job04</title>
</head>
<body>
<main>
    <form action="" method="POST" class="argument">
        <label for="nom">Nom</label>
        <input type="text" name="nom" >
        <label for="prenom">Prénom</label>
        <input type="prenom" name="prenom">
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
                    <td><?php if (isset($_POST['nom'])) {
                        echo $_POST['nom'];
                    }?></td>
                </tr>
                <tr>
                    <th>Prénom</th>
                    <td><?php if (isset($_POST['prenom'])) {
                        echo $_POST['prenom'];
                    }?></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>
