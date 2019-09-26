<?php ?>
<table>
<td>
    <td>
    <td>col.</td>

    <?php  for ($i = 1; $i <= 9; $i++) : ?>
   <td><?php echo $i?></td>

</td>
<td>cm.</td>
<?php
$cm = 2.54;


?>
    <td></td>


    <td>cm.
        <?php  for ($j = 1; $j <= 9; $j++)
            echo "<td>".$j."</td>";
        ?>
    </td>
    <td>col.</td>
</tr>


</table>
