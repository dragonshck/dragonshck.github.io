<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemecahan Uang</title>
</head>
<body>
    <?php 
        if (isset($_POST["submit"])) {
            $uang = $_POST["uang"];

            $dataA = $_POST["uang"] % 100000;
            $A = ($_POST["uang"] - $dataA) / 100000;
            
            $dataB = $dataA % 75000;
            $B = ($dataA - $dataB) / 75000;

            $dataC = $dataB % 50000;
            $C = ($dataB - $dataC) / 50000;

            $dataD = $dataC % 20000;
            $D = ($dataC - $dataD) / 20000;

            $dataE = $dataD % 10000;
            $E = ($dataD - $dataE) / 10000;

            $dataF = $dataE % 5000;
            $F = ($dataE - $dataF) / 5000;

            $dataG = $dataF % 2000;
            $G = ($dataF - $dataG) / 2000;

            $dataH = $dataG % 1000;
            $H = ($dataG - $dataH) / 1000;

            $dataI = $dataH % 500;
            $I = ($dataH - $dataI) / 500;

            $dataJ = $dataI % 200;
            $J = ($dataI- $dataJ) / 200;

            $dataK = $dataJ % 100;
            $K = ($dataJ - $dataJ) / 100;

            $dataL = $dataJ % 50;
            $L = ($dataJ - $dataL) / 50;

            echo "Jumlah Rp. 100000 : " . (int) $A. "<br>"; //ini juga diulang
            echo "Jumlah Rp. 75000 : " . (int) $B. "<br>";
            echo "Jumlah Rp. 50000 : " . (int) $C. "<br>";
            echo "Jumlah Rp. 20000 : " . (int) $D. "<br>";
            echo "Jumlah Rp. 10000 : " . (int) $E. "<br>";
            echo "Jumlah Rp. 5000 : " . (int) $F. "<br>";
            echo "Jumlah Rp. 2000 : " . (int) $G. "<br>";
            echo "Jumlah Rp. 1000 : " . (int) $H. "<br>";
            echo "Jumlah Rp. 500 : " . (int) $I. "<br>";
            echo "Jumlah Rp. 200 : " . (int) $J. "<br>";
            echo "Jumlah Rp. 100 : " . (int) $K. "<br>";
            echo "Jumlah Rp. 50 : " . (int) $L. "<br>";
        }
    ?>

    <a href="Hasil.php">Kembali</a>
</body>
</html>