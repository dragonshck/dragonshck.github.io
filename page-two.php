<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <h1>Reza Ananda Prissyandi / 321910024 - Part 2</h1>
    <?php 
        session_start();

        pre_r($_SESSION);

        $_SESSION['username'] = 'Clank';

        session_destroy();

        function pre_r($array) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
    ?>
    
</body>
</html>