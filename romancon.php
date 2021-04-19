<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Roman</title>
</head>
<body>

    <h2>Decimal to Roman Converter</h2>

    <form method="post">
    Input Your Number: <input type="number" name="number"><br><br>
    <input type="submit" name="convert" value="submit">
    <input type="reset" value="reset"><br><br>
    </form>

    <?php 

        if(isset($_POST['convert'])) {
            $angka = $_POST['number'];

            // M = 1000
            // D = 500
            // C = 100
            // L = 50
            // X = 10
            // V = 5
            // I = 1

            function DecToRoman($angka) {
                $lycan = " ";
                if($angka < 1 || $angka > 5000) {
                    $lycan = "Batas angka 1 s/d 5000";
                } else {
                    while ($angka >= 1000) {
                        $lycan .= "M";
                        $angka -= 1000;
                    }
                }

                if($angka >= 500) {
                    if($angka >= 900) {
                        $lycan .= "CM";
                        $angka -= 900;
                    } else {
                        $lycan .= "D";
                        $angka -= 500;
                    }
                }

                while($angka >= 100) {
                    if($angka >= 400) {
                        $lycan .= "CD";
                        $angka -= 400;
                    } else {
                        $lycan .= "C";
                        $angka -= 100;
                    }
                }

                if ($angka >= 50) {
                    if($angka >= 90) {
                        $lycan .= "XC";
                        $angka -= 90;
                    } else {
                        $lycan .= "L";
                        $angka -= 50;
                    }
                }

                while ($angka >= 10) {
                    if($angka >= 40) {
                        $lycan .= "XL";
                        $angka -= 40;
                    } else {
                        $lycan .= "X";
                        $angka -= 10;
                    }
                }

                if ($angka >= 5) {
                    if($angka >= 9) {
                        $lycan .= "IX";
                        $angka -= 9;
                    } else {
                        $lycan .= "V";
                        $angka -= 5;
                    }
                }

                while($angka >= 1) {
                    if($angka >= 4) {
                        $lycan .= "IV";
                        $angka -= 4;
                    } else {
                        $lycan .= "I";
                        $angka -= 1;
                    }
                }

                return($lycan);
            }
            echo DecToRoman($angka);

        }
    
    ?>
    
</body>
</html>