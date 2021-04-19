<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latins to Romans Conversion</title>
</head>
<body>
    <h2>Latin to Romans Conversion</h2>

    <form method="post">
    Input Your Number : <input type="number" name="number"><br><br>
    <input type="submit" name="convert" value="submit">
    <input type="reset" value="reset"><br><br>

    <?php 
    
        if(isset($_POST['convert'])) {
            $number = $_POST['number'];
            $zelda = 1;

           if (($number >= 4000) || ($number <= 0)) {
               echo 'Invalid Number';
           }

           else {
               if ($number >= 1000) {
                   $zelda = ($number / 1000);

                   for ($i = 0; $i < $zelda; $i++) {
                       echo 'M';
                   }
                   $number %= 1000;
               }

               if ($number >= 100) {
                   $zelda = ($number / 100);

                   if ($zelda == 9) {
                       echo 'CM';
                   }
                   else if ($zelda >= 5) {
                       echo 'D';

                       for ($i = 0; $i < $zelda - 5; $i++) {
                           echo 'C';
                       }
                   }
                   else if ($zelda == 4) {
                       echo "CD";
                   }
                   else if ($zelda >= 1) {
                       for ($i = 0; $i < $zelda; $i++) {
                           echo "C";
                       }
                   }
                   $number %= 100;
               }

               if ($number > 10) {
                   $zelda  = ($number / 10);

                   if ($zelda == 9) {
                       echo "XC";
                   }
                   else if ($zelda >= 5) {
                    echo 'L';

                    for ($i = 0; $i < $zelda - 5; $i++) {
                        echo 'X';
                    }
                   }

                   else if ($zelda == 4) {
                       echo "XL";
                   }
                   else if ($zelda >= 1) {
                       for ($i = 0; $i < $zelda; $i++) {
                           echo "X";
                       }
                   }
                   $number %= 10;
               }

                   if ($number >= 1) {
                       $zelda = $number;

                       if ($zelda == 9) {
                           echo "IX";
                       }
                       else if ($zelda >= 5) {
                           echo "V";

                           for ($i = 0; $i < $zelda - 5; $i++) {
                               echo 'I';
                           }
                       }
                       else if ($zelda == 4) {
                           echo "IV";
                       }
                       else if ($zelda >= 1) {
                           for ($i = 0; $i < $zelda; $i++) {
                               echo "I";
                           }
                       }
                   }
           }
        }   
    
    ?>
</body>
</html>