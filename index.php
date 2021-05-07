<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
    <?php 
        // nama variable
        $nama = "Saya Kick Dhani";
        $alamat = "Komplek LIPI Blok B Nomor 12 RT 001 RW 009 Pondok Rajeg Cibinong Bogor";
        $no_hape = "+62877-8602-9590";
        $hobi = "browsing";
        // cetak variable
        echo "<h1>$nama</h1>";
        echo "<h2>$alamat</h2>";
        echo "<h3>$no_hape</h3>";
        echo "<h4>$hobi</h4>";
        echo "<br>";
        echo "<br>";

        $hello ="Hello Kick Dhani";
        // echo
        echo "<h1>$hello</h1>";
        
        // print
        print "<h1>$hello</h1>";
        
        // print_r
        print_r ("<h1>$hello</h1>");
    
        // var_dump
        var_dump ("<h1>$hello</h1>");
        echo "<br>";
        echo "<br>";

        $jargon = "Tetap Santai dan Berkualitas";
        // akan menampilkan panjang variabel $jargon yaitu 28 karakter
        echo strlen($jargon); 
        echo "<br>";
        // akan menampilkan panjang string 11
        echo strlen("Halo semua!");

        echo "<br>";
        echo "<br>";
        
        $passwordasli = "b3laj@rpHP1";
        $passwordinput = "b3laj@rpHP1";
        $cocok = strcmp($passwordasli, $passwordinput);
        if ($cocok != 0)
        {
            echo "Password anda salah!";
        }
        else
        {
            echo "Password anda benar.";
        }

        echo "<br>";
        echo "<br>";

        $statement = "ini gak marah, cuman caps";
  
        // menampilkan INI GAK MARAH, CUMAN CAPS
        echo strtoupper($statement);

        echo "<br>";
        echo "<br>";

        $marah = "INI MARAH";
  
        // menampilkan ini marah
        echo strtolower($marah);
        
        echo "<br>";
        echo "<br>";

        
        $string = "Saya suka PHP";

        // akan menampilkan suka PHP
        echo substr($string, 5, 8);

        // akan menampilkan PH
        echo substr($string, -3, 2);

        echo "<br>";
        echo "<br>";

        $siswa = array("regi", "bobby", "ahmad");
        print_r($siswa);

        $trainer = ["abduh", "aghnat", "yoga"];
        print_r($trainer);

        echo "<br>";
        echo "<br>";

        $nilai = [12, 14, 19];
        // akan menampilkan 12 yang merupakan elemen array indeks ke 0
        echo $nilai[0];

        echo "<br>";
        echo "<br>";

        $siswa = array("regi", "bobby", "ahmad");
        // siswa awal sebelum ditambah
        print_r($siswa);
        $siswa[] = "putri";
        // menampilkan siswa setelah ditambah data baru "putri"
        print_r($siswa);

        echo "<br>";
        echo "<br>";

        $stack = array("orange", "banana");
        array_push($stack, "apple", "raspberry");
        print_r($stack);

        echo "<br>";
        echo "<br>";

        $keranjang = ["pisang", "apel", "mangga"];
        // menampilkan panjang array $keranjang
        echo count($keranjang);

        echo "<br>";
        echo "<br>";

        $siswa1 = [ "nama" => "abduh",
            "kelas" => "laravel",
            "nilai" => 70
          ];
        print_r($siswa1);

        // menambahkan key value baru ke array $siswa1
        $siswa1["email"] = "abduh@mail.com";

        print_r($siswa1);













    ?>
</body>
</html>