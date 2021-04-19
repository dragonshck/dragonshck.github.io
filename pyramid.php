<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Pyramids Print</title>
</head>
<body>
<h2>Piramida Cleopatra</h2>

    <form method="post">
    Input the Height of Pyramid : <input type="number" name="number"><br><br>
    <input type="submit" name="build" value="Build">
    <input type="submit" name="gravity" value="Flip">
    <input type="reset" value="reset"><br><br>
    
    <?php 
        if(isset($_POST['build'])) {
            $angka = $_POST['number'];

            //Piramida Normal
            for($ssg = 0; $ssg <= $angka; $ssg++) {
                for($xg = $angka; $xg > $ssg; $xg--) {
                    echo "&nbsp;";
                    echo " ";
                }
                
                for($tsm = 1; $tsm <= $ssg; $tsm++) {
                    echo ($tsm);
                    echo "&nbsp";
                    echo " ";
                }
                echo "<br>";
            }
        }

        //Piramida Terbalik
        if(isset($_POST['gravity'])) {
            $numb = $_POST['number'];

            for($i = $numb; $i >= 1; $i--) {
                for($j = $numb; $j > $i; $j--) {
                    echo "&nbsp;";
                    echo " ";
                }

                for($j = 1; $j <= $i; $j++) {
                    echo ($i+1-$j);
                    echo "&nbsp;";
                    echo " ";
                }
                echo "<br>";
            }
            return 0;
        }
    
    ?>

</body>
</html>