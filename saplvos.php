<?php
$spalvos=array('BlanchedAlmond', 'CadetBlue', 'BurlyWood',
    'DarkOliveGreen', 'HotPink', 'PapayaWhip'

);
$kodai=array( '#ffebcd',  '#5f9ea0',  '#deb887',
    '#556b2f',  '#ff69b4', '#ffefd5');


?>

<table>
    <?php foreach ($spalvos as $spalva): ?>

        <tr>

            <td style="background-color: <?php echo $spalva; ?>;">
                <?php echo $spalva; ?>
            </td>


        </tr>


    <?php endforeach; ?>
    <?php foreach ($kodai as $kodas): ?>
    <tr>

        <td style="background-color: <?php echo $kodas; ?>;">
            <?php echo $kodas; ?>
        </td>

    </tr>
    <?php endforeach; ?>
</table>

