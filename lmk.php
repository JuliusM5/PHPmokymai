<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form>

<div>
    skaicius1
    <div>
        <input type="number" name="m">
    </div>
skaicius2
    <div>
        <input type="number" name="n" >
    </div>

    <input type="submit"


</div>

</form>

<?php

if(isset($_GET['m'])&&isset($_GET['n'])){
    $m=$_GET['m'];
    $m=$_GET['m'];
    $n=$_GET['n'];
$bmk=1;
while ($bmk%$m !=0 || $bmk % $n !=0){

    $bmk++;
}

echo "Bendras maziausias kartotinis" ." ". $bmk;
}
?>



</body>
</html>