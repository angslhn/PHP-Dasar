<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If, Else If, Else</title>
</head>
<body>
    <?php
        $nilai = 75;
        $absen = 90;

        echo "<h2>Data Mahasiswa</h2>";
        echo "Nilai Ujian: $nilai <br>";
        echo "Persentase Absen: $absen% <br><br>";

        // 1. IF Tunggal (Hanya dijalankan jika TRUE)
        echo "<b>1. If Tunggal:</b><br>";
        if ($nilai >= 70) {
            echo "Selamat! Anda Lulus ujian (Kondisi True).<br>";
        }
        echo "<br>";

        // 2. IF - ELSE (Pilihan Ganda: Jika A salah, lakukan B)
        echo "<b>2. If - Else:</b><br>";
        $kkum = 75;
        if ($nilai < $kkum) {
            echo "Maaf, Anda harus remedial.";
        } else {
            echo "Anda lolos KKM (Nilai di atas atau sama dengan 75).";
        }
        echo "<br><br>";

        // 3. IF - ELSE IF - ELSE (Banyak Kondisi / Grade)
        echo "<b>3. If - Else If - Else (Cek Grade):</b><br>";
        if ($nilai >= 90) {
            echo "Grade A (Sempurna)";
        } elseif ($nilai >= 80) {
            echo "Grade B (Baik)";
        } elseif ($nilai >= 70) {
            echo "Grade C (Cukup)"; // Ini yang akan dieksekusi karena nilai 75
        } elseif ($nilai >= 60) {
            echo "Grade D (Kurang)";
        } else {
            echo "Grade E (Gagal)"; // Dijalankan jika semua kondisi di atas False
        }
        echo "<br><br>";

        // 4. NESTED IF (If di dalam If / Percabangan Bersarang)
        echo "<b>4. Nested If (Syarat Bertingkat):</b><br>";

        if ($nilai >= 70) {
            // Masuk gerbang pertama
            if ($absen >= 80) {
                // Masuk gerbang kedua
                echo "Status: <b>LULUS SEPENUHNYA</b> (Nilai & Absen aman)";
            } else {
                echo "Status: <b>DITUNDA</b> (Nilai bagus, tapi jarang masuk)";
            }
        } else {
            echo "Status: <b>TIDAK LULUS</b> (Nilai kurang)";
        }
        echo "<br><br>";

        // 5. TERNARY OPERATOR (If Else satu baris)
        // Format: (Kondisi) ? "Benar" : "Salah";
        echo "<b>5. Ternary Operator (Shorthand):</b><br>";
        echo ($nilai > 50) ? "Masih ada harapan" : "Perlu belajar keras";
    ?>    
</body>
</html>