<?php $size = 10; $no = array(0,1,2,3,4,5,6,7,8,9,2,4,6,8); ?>
<table border="3" width="50% ">
    <?php for ($i = 0; $i < $size; $i++){ ?>

        <tr>
            <?php for ($b = 0; $b < $size ;$b++) { ?>
                <td><?php echo $no[array_rand($no)]; ?></td>
            <?php } ?>
        </tr>

    <?php }
    ?>

</table>