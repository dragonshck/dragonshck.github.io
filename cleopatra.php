<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Pyramids Print</title>
</head>
<body>
    <form method="post">
    Input the Height of Pyramid : <input type="number" name="number"><br><br>
    <input type="submit" name="build" value="submit">
    <input type="reset" value="reset"><br><br>

    <?php 
        if(isset ($_POST['build'])) {
            $n = $_POST['number'];

            for ($i = $n; $i >= 1; $i--) {
                for ($j = $n; $j > $i; $j--) {
                    echo "&nbsp;";
                    echo " ";
                }

                for ($j = 1; $j <= $i; $j++) {
                    echo ($i+1-$j);
                    echo "&nbsp;";
                    echo " ";
                }
                echo "<br/>";
            }
            return 0;
        }
    ?>
</body>
</html>