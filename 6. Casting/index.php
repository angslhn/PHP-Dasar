<!-- Casting -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting</title>
</head>
<body>
    <?php
        // --- 1. CASTING KE INTEGER (int) ---
        // Mengubah float atau string menjadi bilangan bulat
        
        $a = 12.99;       // Float
        $b = "500 Mobil"; // String (angka di depan)
        $c = "Mobil 500"; // String (huruf di depan)

        echo "<b>1. Cast to Integer:</b><br>";
        echo "12.99 jadi int: " . (int)$a . " (Dibulatkan ke bawah)<br>";
        echo "'500 Mobil' jadi int: " . (int)$b . " (Ambil angka depan)<br>";
        echo "'Mobil 500' jadi int: " . (int)$c . " (Gagal jadi 0)<br><br>";


        // --- 2. CASTING KE STRING (string) ---
        // Mengubah angka atau boolean jadi teks
        
        $angka = 55;
        $boolTrue = true;
        $boolFalse = false;

        echo "<b>2. Cast to String:</b><br>";
        echo "Angka 55 jadi string: " . (string)$angka . "<br>";
        
        // Perhatikan hasil boolean ini!
        echo "True jadi string: '" . (string)$boolTrue . "' (Jadi angka 1)<br>";
        echo "False jadi string: '" . (string)$boolFalse . "' (Jadi kosong/null)<br><br>";


        // --- 3. CASTING KE FLOAT (float) ---
        
        $str = "15.75 meter";
        
        echo "<b>3. Cast to Float:</b><br>";
        echo "'15.75 meter' jadi float: ";
        var_dump((float)$str); 
        echo "<br><br>";


        // --- 4. CASTING KE BOOLEAN (bool) ---
        // PENTING: Menentukan mana yang dianggap BENAR atau SALAH
        // Yang dianggap FALSE: 0, 0.0, "0", "", NULL, [] (array kosong)
        // Sisanya dianggap TRUE
        
        $n1 = 0;
        $n2 = "Hello";
        $n3 = "";       // String kosong
        $n4 = "0";      // String nol
        $n5 = -100;     // Angka negatif (tetap true)

        echo "<b>4. Cast to Boolean (Cek True/False):</b><br>";
        echo "Angka 0: "; var_dump((bool)$n1); echo "<br>";
        echo "Teks 'Hello': "; var_dump((bool)$n2); echo "<br>";
        echo "Teks Kosong: "; var_dump((bool)$n3); echo "<br>";
        echo "Teks '0': "; var_dump((bool)$n4); echo " (Hati-hati, ini False)<br>";
        echo "Angka -100: "; var_dump((bool)$n5); echo "<br><br>";


        // --- 5. CASTING KE ARRAY (array) ---
        // Mengubah data tunggal menjadi array
        
        $nama = "Aang";
        $arr = (array)$nama;

        echo "<b>5. Cast to Array:</b><pre>";
        print_r($arr);
        echo "</pre>";


        // --- 6. CASTING KE OBJECT (object) ---
        // Mengubah Array menjadi Object (biar bisa dipanggil pakai tanda panah ->)
        
        $dataUser = ["nama" => "Aang", "umur" => 25];
        $objUser = (object)$dataUser;

        echo "<b>6. Cast to Object:</b><br>";
        echo "Panggil nama dari object: " . $objUser->nama . "<br>";
        echo "Panggil umur dari object: " . $objUser->umur . "<br>";
    ?>    
</body>
</html>