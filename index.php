<?php
    $text="Lorem ipsum dolor sit amet consectetur adipisicing elit."." ".$_GET['word'];
    $text2 = str_replace($_GET['word'],"***",$text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Il paragrafo è:</h1>
    <p><?php echo "'". $text . "'"?></p>
    <h2>La sua lunghezza è:</h2>
    <p><?php echo strlen($text)?></p>

    <h2>Il paragrafo ora è:</h2>
    <p><?php echo "'".$text2 ?></p>
    <h2>La sua nuova lunghezza è:</h2>
    <p><?php echo strlen($text2)?></p>
</body>
</html>