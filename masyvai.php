<?php

$m = [ 5, 6, 7, 8 ];

$n = array( 5, 6, 7, 8 );

$i = array( 1 => 5, 3 => 6, 5 => 7, 7 => 8, 9 => 2 );


foreach($i as $key => $value) {
    echo "<br>";
    echo $key;
    echo " => ";
    echo $value;
}


$color = array('white', 'green', 'red', 'blue', 'black');

?>
<p>
    The memory of that scene for me is like a frame of film forever frozen at that moment: the <?php echo $color[2]?>
    carpet, the <strong><?php echo $color[1]; ?></strong> lawn, the <?php echo $color[0]; ?> house, the leaden sky.
</p>
