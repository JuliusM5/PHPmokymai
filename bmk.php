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
        <div>
            Skaicius 1
            <input type="number" name="m">

        </div>

        <div>
            Skaicius 2
            <input type="number" name="n">
        </div>

        <input type="submit">
    </form>

    <?php
        // patikrinu ar ivesti skaiciai
        if(isset($_GET['m']) && isset($_GET['n'])) {
            $m = $_GET['m']; // 3
            $n = $_GET['n']; // 5

            $bmk = 1;

            for($i = 0; $i % $m != 0 || $i % $n !=0; $i++) {

            }


            while($bmk % $m != 0 || $bmk % $n != 0) {
                $bmk++;
            }

            $foundBMK = false;

            while(!$foundBMK) {
                $bmk++;
                if($bmk % $m != 0 || $bmk % $n != 0) {
                    $foundBMK = true;
                }
            }


            echo "Bendras maziausias kartotinis" . $bmk;

        }
    ?>
</body>
</html>