<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemecahan Uang</title>
</head>
<body>
    <h1> Menghitung Pecahan Uang </h1>
    <h1>Pecahan Uang</h1>
    <p>Menghitung Pecahan Uang di PHP</p>
    <form method = "post">
    Masukan jumlah uang <input type= "text" name="uang"><br><br>
    <input type= "submit" name="submit" value= "proses">
    <input type= "reset" name="reset" value="reset"><br><br>
    </form>
    <?php 
    error_reporting(0);
    if(isset($_POST["hitung"])){
    $uang=$_POST["uang"];

    $Pecahan1=$Uang/100000;
    $Sisa1=$Uang%100000;

    $Pecahan2=$Sisa1/75000;
    $Sisa2=$Sisa1%50000;

    $Pecahan3=$Sisa2/50000;
    $Sisa3=$Sisa2%20000;

    $Pecahan4=$Sisa3/20000;
    $Sisa4=$Sisa3%10000;

    $Pecahan5=$Sisa4/10000;
    $Sisa5=$Sisa4%5000;

    $Pecahan6=$Sisa5/5000;
    $Sisa6=$Sisa5%2000;

    $Pecahan7=$Sisa6/2000;
    $Sisa7=$Sisa6%1000;

    $Pecahan8=$Sisa7/1000;
    $Sisa8=$Sisa7%500;

    $Pecahan9=$Sisa8/500;
    $Sisa9=$Sisa8%200;

    $Pecahan10=$Sisa9/200;
    $Sisa10=$Sisa9%100;

    $Pecahan11=$Sisa10/100;
    $Sisa11=$Sisa10%50;


    $Pecahan12=$Sisa11/50;
    $Sisa12=$Sisa11%25;

    echo 'Jumlah Uang:Rp.'.number_format($Uang),'<br/>';
    echo '<br/>';
    echo 'Pecahan Rp.100000 = '.(int) $Pecahan1;
    echo '<br/>';
    echo 'Pecahan Rp.75000 = '.(int) $Pecahan2;
    echo '<br/>';
    echo 'Pecahan Rp.50000 = '.(int) $Pecahan3;
    echo '<br/>';
    echo 'Pecahan Rp.20000 = '.(int) $Pecahan4;
    echo '<br/>';
    echo 'Pecahan Rp.10000 = '.(int) $Pecahan5;
    echo '<br/>';
    echo 'Pecahan Rp.5000 = '.(int) $Pecahan6;
    echo '<br/>';
    echo 'Pecahan Rp.2000 = '.(int) $Pecahan7;
    echo '<br/>';
    echo 'Pecahan Rp.10000 = '.(int) $Pecahan8;
    echo '<br/>';
    echo 'Pecahan Rp.500 = '.(int) $Pecahan9;
    echo '<br/>';
    echo 'Pecahan Rp.200 = '.(int) $Pecahan10;
    echo '<br/>';
    echo 'Pecahan Rp.100 = '.(int) $Pecahan11;
    echo '<br/>';
    echo 'Pecahan Rp.50 = '.(int) $Pecahan12;
    echo '<br/>';
    }
    ?>

</body>
</html>