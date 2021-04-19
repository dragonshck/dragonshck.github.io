<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo - Konversi Tipe Data</title>
</head>
<body>
    <h3>Reza Ananda Prissyandi / 321910024</h3>
    
    <?php
    
        echo "Hello!";
        
        echo "<br />";
        
        $a=2;
        $b='kucing 6'; // tuker tempat angka + huruf e
        $hasil = $a + intval($b); // string -> int (Implisit)
        echo $hasil;

        echo "<br />";
        $c = '3 buah';
        $g = $a or $c; // with boolean operand
        echo $g;
        
        echo "<br />";

        $FXX = '10 mobil';
        $FXX = (int) $FXX; // string -> int (Explicit)
        echo $FXX;

        echo "<br />";
        
        $FXX_S = intval($FXX); // string -> int alt & jelaskan tipe data
        echo $FXX_S;
        
        echo "<br />";

        $z=3;
        $zx = $z . "beds"; // int -> string
        echo $zx;

        echo "<br />";

        $items = strval($z); // int -> string alt
        echo 'I like {$items} stack of pancake.';


    ?>

</body>
</html>