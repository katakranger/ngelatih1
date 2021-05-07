<?php 
    $kata1 = "PHP is never old";
    $kata2 = "Hello PHP!";
    $kata3 = "I'm ready for the challenges";
    $hasil1 = strlen($kata1);
    $hasil2 = strlen($kata2);
    $hasil3 = strlen($kata3);
    $hasil4 = str_word_count($kata1);
    $hasil5 = str_word_count($kata2);
    $hasil6 = str_word_count($kata3);
    echo "jumlah string pada $kata1 adalah $hasil1 buah";
    echo "<br>"; 
    echo "jumlah kata pada $kata1 adalah $hasil4 kata";
    echo "<br>";

    echo "jumlah string pada $kata2 adalah $hasil2 buah";
    echo "<br>"; 
    echo "jumlah kata pada $kata2 adalah $hasil5 kata";
    echo "<br>";

    echo "jumlah string pada $kata3 adalah $hasil3 buah";
    echo "<br>"; 
    echo "jumlah kata pada $kata3 adalah $hasil6 kata";
    echo "<br>";
    echo "<hr>";

    $kata4  = "I love PHP";
    $hasil7 = substr($kata4, 1, 2);
    $hasil8 = substr($kata4, 2, 4);
    $hasil9 = substr($kata4, -3, 3);
    echo "kata pertama pada $kata4 adalah $hasil7";
    echo "<br>";
    echo "kata pertama pada $kata4 adalah $hasil8";
    echo "<br>";
    echo "kata pertama pada $kata4 adalah $hasil9";
    echo "<hr>";

    $kalimat1 = "Belajar pemrograman di malasngoding";
    echo str_replace("Belajar","Tutorial",$kalimat1);
    echo "<br>";
    $kalimat2 = "PHP is old but sexy!";
    echo str_replace("sexy","awesome",$kalimat2);
    echo "<hr>";

    $bocil = array("mike", "dustin", "willy", "lucas", "max", "eleven");
    print_r($bocil);
    echo "<br>";
    $boge = ["hopper", "nancy", "joyce", "murray", "jonathan"];
    print_r($boge);
    echo "<hr>";

    echo count($bocil);
    echo "<br>";
    echo count($boge);
    echo "<hr>";

    $siswa1 = 
            [
                "Name1" => "Will Byers",
                "Age1" => 12,
                "Aliases1" => "Will the Wise",
                "Status1" => "Alive"
            ];
    print_r($siswa1);
    echo "<br>";
    $siswa2 = 
            [
                "Name2" => "Mike Wheeler",
                "Age2" => 12,
                "Aliases2" => "Dungeon Master",
                "Status2" => "Alive" 
            ];
    print_r($siswa2);
    echo "<br>";
    $siswa3 = 
            [
                "Name3" => "Jim Hopper",
                "Age3" => 43,
                "Aliases3" => "Chief Hopper",
                "Status3" => "Deceased" 
            ];
    print_r($siswa3);
    echo "<br>";
    $siswa4 = 
            [
                "Name4" => "Eleven",
                "Age4" => 12,
                "Aliases4" => "El",
                "Status4" => "Alive" 
            ];
    print_r($siswa4);






?>