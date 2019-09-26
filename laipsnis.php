<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>document</title>
</head>
<body>

<form method="get">
    <div>
        <input type="number" name="skaicius" placeholder="Iveskite skaiciu">
    </div>

    <div>
        <input type="number" name="laipsnis" placeholder="Iveskite laipsni">
    </div>

    <input type="submit">

    <?php if (isset($_GET["skaicius"]) && isset($_GET["laipsnis"])) :

        $skaicius = $_GET["skaicius"];
        $laipsnis = $_GET["laipsnis"];

        $rezultatas = $skaicius;

        for ($i = 1; $i < $laipsnis; $i++) {
            $rezultatas *= $skaicius;
        }

        ?>

        <h1>Rezultatas: <?php echo $rezultatas ?> </h1>

    <?php endif; ?>
</form>

</body>
</html>
