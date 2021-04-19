<?php 

if(isset ($_POST['count'])) {
    $words = $_POST['words'];

    //Jumlah Kata

    $textstr = trim($words);
    $textmod = strtolower($textstr);
    $textspace = str_replace(" ", "", $textmod);
    $textcount = strlen($textspace);

    // Huruf Vokal 

    $count = 0;
    $vowels = array('a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0);

    for ($i = 0; $i < strlen($words); $i++) {
        if($textmod[$i] == 'a') {
            $count++;
            $vowels['a']++;
        }

        if($textmod[$i] == 'e') {
            $count++;
            $vowels['e']++;
        }

        if($textmod[$i] == 'i') {
            $count++;
            $vowels['i']++;
        }

        if($textmod[$i] == 'o') {
            $count++;
            $vowels['o']++;
        }

        if($textmod[$i] == 'u') {
            $count++;
            $vowels['u']++;
        }
    }

    // Huruf Konsonan

    function count_consonant($words) {
        $str = strtoupper($words);

        return !($str == 'A' || $str == 'E' || $str == 'I' || $str == 'O' ||
        $str == 'U') && ord ($str) >= 65 && ord($str) <= 90;
    }

    function total_consonant($str) {
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++)
        if (count_consonant($str[$i]))
        $count++;
        return $count;
    }

    $str = $_POST['words'];

    // Hitung Baris

    function count_lines($countlines) {
        $countlines = substr_count($_POST['words'], "\n") + 1;
        echo "Total Number of Lines : " . $countlines . "<br>";
    }

    $countlines = $_POST['words'];

    echo "Character Total = $textcount . <br> <br>";

    echo "Total Number of Vowels Found : " . $count . "<br>";
    echo "Occurence of 'A' = " . $vowels['a'] . "<br>";
    echo "Occurence of 'E' = " . $vowels['e'] . "<br>";
    echo "Occurence of 'I' = " . $vowels['i'] . "<br>";
    echo "Occurence of 'O' = " . $vowels['o'] . "<br>";
    echo "Occurence of 'U' = " . $vowels['u'] . "<br> <br>";

    echo "Total Number of Consonant Found : " . total_consonant($str) . "<br> <br>";
    echo count_lines($countlines) . "<br>";

    return 0;

}

?>