<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Manipulation</title>
</head>
<body>
    <?php
        echo "<h2>E. Konversi String <-> Array (Explode & Implode)</h2>";
        
        // 1. EXPLODE (Memecah String menjadi Array)
        // Kasus: User input hobi dipisah koma "Mancing, Tidur, Makan"
        $stringHobi = "Mancing, Tidur, Makan, Coding";
        $arrayHobi = explode(", ", $stringHobi);

        echo "1. Asal String: $stringHobi <br>";
        echo "   Hasil Explode (Jadi Array):<br>";
        echo "<pre>"; print_r($arrayHobi); echo "</pre>";

        // 2. IMPLODE (Menggabungkan Array menjadi String)
        // Kasus: Mau simpan array tagar ["#PHP", "#Coding", "#Seru"] ke database (karena database gak bisa simpan array langsung)
        $arrayTag = ["#PHP", "#WebDev", "#2024"];
        $stringTag = implode(" ", $arrayTag); // Digabung pakai spasi

        echo "2. Asal Array: "; print_r($arrayTag); echo "<br>";
        echo "   Hasil Implode (Jadi String): $stringTag <br>";


        echo "<h2>F. Tambah & Hapus Data (Stack & Queue)</h2>";
        $tumpukan = ["Buku", "Pensil"];
        
        echo "Awal: " . implode(", ", $tumpukan) . "<br>";

        // 1. Array Push (Tambah Belakang)
        array_push($tumpukan, "Penghapus");
        echo "1. Push (Tambah Belakang): " . implode(", ", $tumpukan) . "<br>";

        // 2. Array Pop (Hapus Belakang) - Mengambil elemen terakhir
        $hapusBelakang = array_pop($tumpukan);
        echo "2. Pop (Hapus Belakang): " . implode(", ", $tumpukan) . " (Yg dihapus: $hapusBelakang)<br>";

        // 3. Array Unshift (Tambah Depan)
        array_unshift($tumpukan, "Penggaris");
        echo "3. Unshift (Tambah Depan): " . implode(", ", $tumpukan) . "<br>";

        // 4. Array Shift (Hapus Depan) - Mengambil elemen pertama
        $hapusDepan = array_shift($tumpukan);
        echo "4. Shift (Hapus Depan): " . implode(", ", $tumpukan) . " (Yg dihapus: $hapusDepan)<br>";


        echo "<h2>G. Potong & Filter Array</h2>";
        $angka = [10, 20, 30, 40, 50, 20, 10]; // Ada angka duplikat

        // 1. Array Slice (Mengambil sebagian tanpa merusak aslinya)
        // Ambil dari index 1, sebanyak 3 buah
        $potongan = array_slice($angka, 1, 3); 
        echo "1. Slice (Ambil tengah): " . implode(", ", $potongan) . "<br>";

        // 2. Array Unique (Hapus Duplikat)
        $unik = array_unique($angka);
        echo "2. Unique (Hapus kembar): " . implode(", ", $unik) . "<br>";
        
        // 3. Array Sum (Total jumlah angka)
        echo "3. Sum (Total semua angka): " . array_sum($angka) . "<br>";

        // 4. Array Reverse (Balik urutan tanpa sort)
        $balik = array_reverse($angka);
        echo "4. Reverse (Dibalik posisi): " . implode(", ", $balik) . "<br>";
    ?>    
</body>
</html>