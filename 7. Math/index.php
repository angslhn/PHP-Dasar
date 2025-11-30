<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<body>
    <?php
        // --- 1. PI (Nilai Phi) ---
        // Mengembalikan nilai 3.14159...
        echo "<b>1. Nilai PI:</b><br>";
        echo pi(); 
        echo "<br><br>";


        // --- 2. MIN & MAX (Nilai Terendah & Tertinggi) ---
        // Mencari angka paling kecil/besar dari sekumpulan argumen
        
        echo "<b>2. Min & Max:</b><br>";
        echo "Nilai terendah dari (0, 150, 30, 20, -8, -200) adalah: ";
        echo min(0, 150, 30, 20, -8, -200); // Output: -200
        echo "<br>";

        echo "Nilai tertinggi dari (0, 150, 30, 20, -8, -200) adalah: ";
        echo max(0, 150, 30, 20, -8, -200); // Output: 150
        echo "<br><br>";


        // --- 3. ABS (Absolute / Mutlak) ---
        // Mengubah angka negatif menjadi positif (selalu positif)
        // Berguna untuk menghitung selisih jarak atau uang
        
        $hutang = -50000;
        
        echo "<b>3. Absolute (Positifkan Angka):</b><br>";
        echo "Absolut dari -6.7 adalah: " . abs(-6.7) . "<br>";
        echo "Besar hutang (tanpa minus): " . abs($hutang); 
        echo "<br><br>";


        // --- 4. SQRT (Square Root / Akar Kuadrat) ---
        
        echo "<b>4. Akar Kuadrat:</b><br>";
        echo "Akar dari 64 adalah: " . sqrt(64) . "<br>"; // 8
        echo "Akar dari 9 adalah: " . sqrt(9);   // 3
        echo "<br><br>";


        // --- 5. ROUNDING (Pembulatan) ---
        // round() = Pembulatan terdekat (0.5 ke atas, 0.4 ke bawah)
        // ceil()  = Selalu bulatkan KE ATAS (Ceiling/Langit-langit)
        // floor() = Selalu bulatkan KE BAWAH (Floor/Lantai)
        
        $angka = 5.3;
        $angka2 = 5.8;

        echo "<b>5. Pembulatan (Round vs Ceil vs Floor):</b><br>";
        echo "Round 0.60 (Terdekat): " . round(0.60) . "<br>";
        echo "Round 0.49 (Terdekat): " . round(0.49) . "<br>";
        echo "<hr>";
        echo "Angka Asli: 5.3 <br>";
        echo "Round (Terdekat): " . round(5.3) . "<br>";
        echo "Ceil (Ke Atas): " . ceil(5.3) . " (Dipaksa naik)<br>";
        echo "Floor (Ke Bawah): " . floor(5.3) . "<br>";
        echo "<br>";


        // --- 6. RAND (Random Number) ---
        // Membuat angka acak. Sangat berguna untuk kode OTP, token, atau game.
        
        echo "<b>6. Random Number:</b><br>";
        echo "Acak bebas: " . rand() . "<br>";
        echo "Acak antara 10 sampai 100: " . rand(10, 100);
        echo "<br><br>";
    ?>    
</body>
</html>