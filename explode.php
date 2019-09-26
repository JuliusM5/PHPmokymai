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
    <input type="text" name="duomenys">

    <input type="submit">
</form>
<?php if(isset($_GET['duomenys'])) {
    $duomenys=$_GET['duomenys'];
    $vidurkis=explode(',',$duomenys);
    var_dump($duomenys);
    $suma=0;
    $vidurkis=0;
foreach ($duomenys as $skaicius) {
    $suma += $skaicius;
}
$vidurkis=$suma/count($duomenys);

echo "skaicius vidurkis: ".$vidurkis;
}
?>

</body>
</html>