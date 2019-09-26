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

    <form>
        <input type="text" name="duomenys">
        <!-- 3,5,6,7,8,9,0 -->

        <input type="submit">
    </form>
    <?php if(isset($_GET['duomenys'])) {
        $duomenys = $_GET['duomenys']; // "3,5,6,7,8,9,0"

        // Paverciame string i array
        $duomenys = explode(',', $duomenys);
		$suma = 0;


        foreach ($duomenys as $skaicius) {
            $suma += $skaicius;
        }

		$vidurkis = $suma / count($duomenys);


        echo "Skaiciu vidurkis: " . $vidurkis;


    }
    ?>
</body>
</html>