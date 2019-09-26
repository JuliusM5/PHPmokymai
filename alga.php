<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>document</title>
</head>
<table>

<form method="get">
    Esamas Atlyginimas
    <div>
        <input type="number" name="alga" >
    </div>
Procentai
    <div>
        <input type="number" name="procentai" >
    </div>
    Norimas Atlyginimas
    <div>
        <input type="number" name="pageidauja" >
    </div>

    <input type="submit">
</form>
    <td>
    <td>mėnesis</td>


    </td>
    <td>alga</td>

<?php if(isset($_GET['alga'])) :
$alga=$_GET['alga'];
$pageidauja=$_GET['pageidauja'];
$procentai=$_GET['procentai'];
$menesiuKiekis=0;
?>


}
?>
<table class="table"
       <tr>
       <th>Menesis</th>
<th>Atlyginimaas</th>
       <tr>
        <?php while($alga<= $pageidauja):
        $alga += $alga/100*$procentai;
        $menesiuKiekis++;
        ?>
        <tr>
        <td> <?php echo $menesiuKiekis;?></td>
        <td><?php echo $alga;?></td>
    </tr>
    <?php endwhile; ?>
</table>
<?php endif; ?>

</body>
</html>