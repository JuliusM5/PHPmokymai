<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    tr{
        background-color: palegoldenrod;
        font-weight: bold;
        color: darkslategray;
height: 40px;
        border-color: red;
    }



</style>
<body>

</body>
</html>

<?php
echo "<table border=100 width=80%>";
//this will print the top part
echo "<tr>" ;
echo "<td> x </td>";
for ($i = 0; $i <= 12; $i++) {
    echo "<td>" . $i . "</td>";
}
echo "</tr>";


for ($i = 0; $i <= 12; $i++ ) {

    echo "<tr>";
    echo "<td>".$i."</td>";
    for ( $j = 0; $j <= 12; $j++ ) {
        echo "<td>".$i * $j."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
