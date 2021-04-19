<?php 
        if(isset ($_GET["calculate"])) {
            $i = $_POST['number'];

            for ($i = ['number']; $i <=1; $i--) {
                for ($j = $i; $j >=1; $j--) {
                    echo $j . " ";
                    if ($j == 1) {
                        echo " ";
                        echo "<br />";
                    }
                }
            }
        }
    ?>