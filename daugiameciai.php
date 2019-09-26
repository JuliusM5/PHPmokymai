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
<?php
$rockBands = array(
    array('Beatles', 'Love Me Do', 'Hey Jude', 'Helter Skelter'),
    array('Rolling Stones' , 'Waiting on a Friend', 'Angie',
        'Yesterday\'s Papers'),
    array('Eagles',  'Life in the Fast Lane', 'Hotel California',
        'Best of My Love'));

?>
<table>
    <tr>
        <td>Grupe</td>
        <td>Daina</td>
    </tr>
    <?php
    foreach ($rockBands as $grupe ) {
        echo "<tr>";
        echo "<td>";
        echo $grupe[0];
        echo "</td>";
        echo "<td>";
        foreach ($grupe as $daina){
            echo    $daina;
            echo "<td>";
        }
        echo "</tr>";



    }

    ?>

</table>

</body>
</html>