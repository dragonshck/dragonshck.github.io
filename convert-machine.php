<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Engine</title>
</head>
<body>
    <?php
        echo "Uang Anda sebesar $_POST[money]<br>";
        // $moneydata = array(100000, 75000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100, 50);
        // $nom = $_POST["money"];
        // echo "<h4> Nominal :" . $nom . "</h4>";
        //     for ($i = 0; $i < count($moneydata); $i++) {
        //         if ($nom % $moneydata[$i] <$nom) {
        //             echo floor ($nom / $moneydata[$i]) . "->" . $moneydata[$i] . "</br>";
        //             $nom = $nom % $moneydata[$i];
        //         }
        //     }

        if(isset ($_POST["calculate"])) {
            $nominal = $_POST["money"];

            $nom1 = $nominal / 100000;
            $sisa1 = $nominal % 100000;

            $nom2 = $nominal / 75000;
            $sisa2 = $sisa1 % 75000;

            $nom3 = $nominal / 50000;
            $sisa3 = $sisa2 % 20000;

            $nom4 = $nominal / 10000;
            $sisa4 = $sisa3 % 10000;

            $nom5 = $nominal / 5000;
            $sisa5 = $sisa4 % 5000;

            $nom6 = $nominal / 2000;
            $sisa6 = $sisa5 % 2000;

            $nom7 = $nominal / 1000;
            $sisa7 = $sisa6 % 1000;

            $nom8 = $nominal / 500;
            $sisa8 = $sisa7 % 500;

            $nom9 = $nominal / 200;
            $sisa9 = $sisa8 % 200;

            $nom10 = $nominal / 100;
            $sisa10 = $sisa9 % 100;

            $nom11 = $nominal / 50;
            $sisa11 = $sisa10 % 50;

            echo 'Jumlah Uang : Rp. 100000 = ' . (int) $nom1 . 'Lembar'; echo '<br>';
            echo 'Jumlah Uang : Rp. 75000 = ' . (int) $nom2 . 'Lembar'; echo '<br>';
            echo 'Jumlah Uang : Rp. 50000 = ' . (int) $nom3 . 'Lembar'; echo '<br>';
            echo 'Jumlah Uang : Rp. 20000 = ' . (int) $nom4 . 'Lembar'; echo '<br>';
            echo 'Jumlah Uang : Rp. 10000 = ' . (int) $nom5 . 'Lembar'; echo '<br>';
            echo 'Jumlah Uang : Rp. 5000 = ' . (int) $nom6 . 'Lembar'; echo '<br>';
            echo 'Jumlah Uang : Rp. 1000 = ' . (int) $nom7 . 'Lembar'; echo '<br>';
            echo 'Jumlah Uang : Rp. 500 = ' . (int) $nom8 . 'Koin'; echo '<br>';
            echo 'Jumlah Uang : Rp. 200 = ' . (int) $nom9 . 'Koin'; echo '<br>';
            echo 'Jumlah Uang : Rp. 100 = ' . (int) $nom10 . 'Koin'; echo '<br>';
            echo 'Jumlah Uang : Rp. 50 = ' . (int) $nom11 . 'Koin'; echo '<br>';
        }

    ?>
    <a href="money-convert.php"> Kembali</a>
    
</body>
</html>
