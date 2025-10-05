<!-- String -->

<!-- kumpulan karakter (huruf, angka, simbol, spasi) yang diapit oleh tanda kutip. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <?php
        $nama = "Aang Solihin";

        // Method string
        echo "1. Panjang string: " . strlen($nama) . "<br>";
        echo "2. Huruf besar semua: " . strtoupper($nama) . "<br>";
        echo "3. Huruf kecil semua: " . strtolower($nama) . "<br>";
        echo "4. Huruf pertama besar: " . ucfirst("aang") . "<br>";
        echo "5. Huruf pertama tiap kata besar: " . ucwords("aang solihin") . "<br>";
        echo "6. Ganti teks: " . str_replace("Aang", "Budi", $nama) . "<br>";
        echo "7. Ambil sebagian string: " . substr($nama, 0, 4) . "<br>";
        echo "8. Posisi kata 'Solihin': " . strpos($nama, "Solihin") . "<br>";
        echo "9. Trim spasi: " . trim("   Halo Dunia   ") . "<br>";
        echo "10. Pisah string jadi array:\n";
        print_r(explode(" ", $nama));
        echo "<br>11. Gabung array jadi string: " . implode("-", ["Halo", "Dunia"]) . "<br>";

        // Interpolasi variabel dalam string
        echo "1. Halo $nama, umur kamu $umur tahun.\n";
        echo "2. Halo {$nama}, semangat belajar PHP!\n";

        // Perbedaan kutip ganda dan tunggal
        echo "3. Kutip ganda: Halo $nama\n";
        echo '4. Kutip tunggal: Halo $nama\n';
        echo "\n";

        // Escape sequence demo
        echo "5. Baris pertama\nBaris kedua\n";
        echo "6. Kolom1\tKolom2\tKolom3\n";
        echo "7. Menampilkan tanda kutip: \"PHP\" itu keren!\n";
        echo '8. Menampilkan tanda kutip tunggal: \'Belajar\' PHP' . "\n";
        echo "9. Tanda dolar literal: \$100\n";
        echo "10. Tanda backslash: C:\\xampp\\htdocs\n"
    ?>    
</body>
</html>