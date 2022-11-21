<?php
$styles = $_GET['styles'];
if ($styles == "style1"){
	$styles = "style1";
}elseif ($styles == "style2"){
    $styles = "style2";
}elseif ($styles == "style3"){
    $styles = "style3";
}else{
	$styles = "style";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="<?php echo $styles; ?>" rel="stylesheet">
    <title>job05</title>
</head>
<body>
    <header>
    <form method="get" action="index.php" >
        <div class="formulaire">
            <ul>
                <li class=list><a href= "index.php?styles=style" >style</a>
                    <ul class= "style">
                        <li><a href= "index.php?styles=style1">style1</a></li>
                        <li><a href= "index.php?styles=style2">style2</a></li>
                        <li><a href= "index.php?styles=style3">style3</a></li>
                    </ul>
                </li>
            </ul>
            <button type= "button" class= "button">submit</button>
        <div>
    </form>
    </header>
</body>
</html>
