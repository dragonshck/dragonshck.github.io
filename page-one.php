<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <h1>Reza Ananda Prissyandi / 321910024 - Part 1</h1>
    <?php
        // Block Scope
        $novalis = 90;
        if ($novalis < 80) {
            echo 'Have a good day!';
        }
        
        
        // Procedural (Function) Scope 
        function omniwrench() {
            $price = 1000;
            echo $price . 'Bolts'; //function scope
        }

        echo $price . 'Dollar';
        
        // Global Scope
        function magmablaster() {
            $harga = 750;
            global $harga;
        }

        echo $harga . 'Rupiah';
        
        // Two-page Sessions
        session_start();

        $_SESSION['username'] = 'Ratchet';
        $_SESSION['role'] = 'Heroes';

        pre_r($_SESSION);

        function pre_r($array) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
    ?>
    <a href="page-two.php">Click here for Page Two!</a>
</body>
</html>