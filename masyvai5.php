<?php

$rockBands = array(
	array(
		'Beatles',
		'Love Me Do',
		'Hey Jude',
		'Hey Jude',
		'Hey Jude',
		'Helter Skelter',
	),
	array(
		'Rolling Stones',
		'Waiting on a Friend',
		'Waiting on a Friend',
		'Waiting on a Friend',
		'Angie',
		'Yesterday\'s Papers'
	),
	array(
		'Eagles',
		'Life in the Fast Lane',
		'Life in the Fast Lane',
		'Life in the Fast Lane',
		'Hotel California',
		'Best of My Love'
	)
);
?>

<table>
	<tr>
		<td> Grupe </td>
		<td> Dainos </td>
	</tr>
	<?php foreach($rockBands as $band) : ?>
	    <tr>
            <?php foreach($band as $song): ?>
                <td>
                    <?php echo $song; ?>
                </td>
            <?php endforeach; ?>
        </tr>
	<?php endforeach; ?>
</table>


