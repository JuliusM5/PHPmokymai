<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<form >

    <p>a krastine</p>
    <input type="number" name="a" placeholder="skaicius">


    <p>b krastine</p>
    <input type="number" name="b" placeholder="skaicius">
    <br>
    <p>c krastine</p>
    <input type="number" name="c" placeholder="skaicius">
    <br>
    <input type="submit" value="Skaiciuoti">
</form>

<?php
$krastine1 = "a";
$krastine2 = "b";
$krastine3 = "c";

if($_GET['a']+$_GET['b']>$_GET['c']){
    echo 'Susidaro';
    }elseif ($_GET['a']+$_GET['c']>$_GET['c']){
        echo 'Susidaro';
    }elseif ($_GET['b']+$_GET['c']>$_GET['c']){
    echo 'Susidaro';

}

?>
</body>
</html>
