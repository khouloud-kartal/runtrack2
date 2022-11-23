<?php
   $total_count = 0; 
   if(isset($_COOKIE['visitcount'])){
   $total_count = $_COOKIE['visitcount'];
   $total_count ++;
   }
   setcookie('visitcount', $total_count);
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
            $_COOKIE['visitcount'] = 0;
            $total_count =0;
            setcookie('visitcount', $total_count);
        }
        echo "This is your visit number ".$total_count;
    ?>
    <form method="post" action="index.php" class ="cookies">
        <button type= "submit" class= "button" name="reset">Reset</button>
</body>
</html>
