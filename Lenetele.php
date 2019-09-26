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

</body>
</html>

<?php for($i = 1; $i <= 12; $i++) : ?>
<div class="row">

    2x <?php echo $i; ?> = <?php echo $i *2; ?>


</div>


<?php endfor; ?>

<table>
    <?php for($i =0 ; $i <10; $i++) : ?>
<tr>
    <td>
        2
    </td>
<td>x</td>
    <td>
        <?php echo $i; ?>
    </td>
    <td>
        =
    </td>
    <td>
        <?php echo 2*$i; ?>
    </td>
</tr>
    <?php endfor; ?>

</table>

