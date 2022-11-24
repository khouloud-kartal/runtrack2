<?php
    session_start();
    if (isset($_POST['prenom'])) {
        $_SESSION['prenom'][] = $_POST['prenom']; 
    }
    if (isset($_POST['reset'])) {
        unset($_SESSION['prenom']);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>job03</title>
</head>
<body>
    <form method="post" action="index.php" class ="session">
        <label for="prenom"></label>
        <input type="text" name="prenom" >
        <button type= "submit" class= "button" name="submit">submit</button>
        <button type="submit" class= "button" name="reset">Reset</button><br>
    <ul>
    <?php
    if (isset($_SESSION['prenom'])){
        foreach($_SESSION['prenom'] as $prenom) {
            echo '<li>' . $prenom . '</li>';
        }
    }
    ?>
    </ul>
</body>
</html>
