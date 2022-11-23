<?php
    session_start();
    if (isset($_SESSION['visitcount'])){
        $_SESSION['visitcount']++;
    }else{
        $_SESSION['visitcount'] = 1;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>job01</title>
</head>
<body>
    <h1>Visitors Account in the page</h1>
    <?php 
        if (isset($_POST['reset'])){
            $_SESSION['visitcount'] = 0;
        }
        echo "The visitors acount is: " . $_SESSION['visitcount'];
    ?>
    <form method="post" action="index.php" class ="session">
        <button type= "submit" class= "button" name="reset">Reset</button>
</body>
</html>
