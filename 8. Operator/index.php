<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 3;
        $c = "10"; // String angka untuk tes perbandingan

        echo "<b>A. Operator Aritmatika (Matematika)</b><br>";
        echo "Nilai A = $a, Nilai B = $b <br>";
        echo "1. Penjumlahan ($a + $b): " . ($a + $b) . "<br>";
        echo "2. Pengurangan ($a - $b): " . ($a - $b) . "<br>";
        echo "3. Perkalian ($a * $b): " . ($a * $b) . "<br>";
        echo "4. Pembagian ($a / $b): " . ($a / $b) . "<br>";
        echo "5. Modulus/Sisa Bagi ($a % $b): " . ($a % $b) . "<br>"; // 10 dibagi 3 sisa 1
        echo "6. Pangkat ($a ** $b): " . ($a ** $b) . "<br><br>";

        echo "<b>B. Operator Perbandingan</b><br>";
        // Menggunakan ternary (? 'True' : 'False') agar hasil boolean terlihat di layar
        echo "1. Sama dengan ($a == $c): " . ($a == $c ? 'True' : 'False') . " (Cek nilai saja)<br>";
        echo "2. Identik ($a === $c): " . ($a === $c ? 'True' : 'False') . " (Cek nilai DAN tipe data)<br>";
        echo "3. Tidak sama ($a != $b): " . ($a != $b ? 'True' : 'False') . "<br>";
        echo "4. Lebih besar ($a > $b): " . ($a > $b ? 'True' : 'False') . "<br>";
        echo "5. Spaceship ($a <=> $b): " . ($a <=> $b) . " (1 jika lebih besar, 0 jika sama, -1 jika kecil)<br><br>";

        echo "<b>C. Operator Increment/Decrement</b><br>";
        $x = 5;
        echo "Awal X = $x <br>";
        echo "1. Post-increment (x++): " . $x++ . " (Cetak dulu, baru tambah)<br>";
        echo "   Nilai X sekarang: " . $x . "<br>";
        
        $y = 5;
        echo "Awal Y = $y <br>";
        echo "2. Pre-increment (++y): " . ++$y . " (Tambah dulu, baru cetak)<br><br>";

        echo "<b>D. Operator Logika</b><br>";
        $benar = true;
        $salah = false;
        
        echo "1. AND ($benar && $salah): " . ($benar && $salah ? 'True' : 'False') . "<br>";
        echo "2. OR ($benar || $salah): " . ($benar || $salah ? 'True' : 'False') . "<br>";
        echo "3. NOT (!$benar): " . (!$benar ? 'True' : 'False') . "<br><br>";

        echo "<b>E. Operator Penugasan (Assignment)</b><br>";
        $nilai = 100;
        echo "Awal: $nilai <br>";
        $nilai += 50; // Sama dengan $nilai = $nilai + 50
        echo "1. Ditambah 50 (+=): $nilai <br>"; 
        $nilai .= " Rupiah"; // Concatenate string (Gabung)
        echo "2. Gabung string (.=): $nilai <br>";
    ?>    
</body>
</html>