<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demonstartion</title>
</head>
<body>
    <h3>Reza Ananda Prissyandi / 321910024</h3>

    <?php 
        // String -> Interger
        $a=2;
        $b = 'kucing 6';
        $hasil = $a + (int) $b;
        echo $hasil;

        echo "<br />";

        // Interger -> String
        $x = 5;
        $y = 'Ampere';
        $convert = (string) $x;
        echo $x . $y;

        echo "<br />";

        // Operasi Boolean (AND, OR)
        $aa = 1;
        $bb = "3";
        $values = $aa and $bb;
        echo $values;
    ?>
    
</body>
</html>