<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h1>Atlyginimas</h1>
    <form>
        <div>
            <label>Atlyginimas</label>
            <input type="text" name="atlyginimas" class="form-control">
        </div>

        <div>
            <label>Norimas Atlyginimas</label>
            <input type="text" name="norimas_atlyginimas" class="form-control">
        </div>

        <div>
            <label>Priedas kas menesi (%)</label>
            <input type="text" name="priedas" class="form-control">
        </div>

        <input type="submit" class="btn btn-success mt-3">

    </form>

    <div class="row">
        <div class="col-sm-6">
			<?php if ( isset( $_GET['atlyginimas'] ) ) :
				$atlyginimas = $_GET['atlyginimas']; // 110
				$norimasAtlyginimas = $_GET['norimas_atlyginimas']; // 200
				$priedas = $_GET['priedas']; // 10
				$menesiuKiekis = 0;
				?>


                <table class="table mt-3">
                    <tr>
                        <th>Menesis</th>
                        <th>Atlyginimas</th>
                    </tr>

					<?php

					while ( $atlyginimas <= $norimasAtlyginimas ) :
						$atlyginimas += $atlyginimas / 100 * $priedas;
						$menesiuKiekis ++;
						?>
                        <tr>
                            <td><?php echo $menesiuKiekis; ?></td>
                            <td><?php echo $atlyginimas; ?> €</td>
                        </tr>
					<?php endwhile; ?>
                </table>

			<?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>