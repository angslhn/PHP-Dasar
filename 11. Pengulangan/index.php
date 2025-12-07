<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops & Control</title>
</head>
<body>
    <?php
        echo "<h2>A. Jenis-Jenis Loop Dasar</h2>";

        // 1. FOR LOOP
        echo "<b>1. For Loop (Hitung 1 sampai 5):</b><br>";

        for ($i = 1; $i <= 5; $i++) {
            echo "Angka ke-$i <br>";
        }

        echo "<br>";

        // 2. WHILE LOOP
        echo "<b>2. While Loop (Isi bensin sampai penuh):</b><br>";
       
        $liter = 0;

        while ($liter < 3) {
          echo "Isi bensin... ($liter liter) <br>";
          $liter++;
        }

        echo "Tangki Penuh.<br><br>";

        // 3. DO WHILE LOOP
        echo "<b>3. Do While (Jalan dulu minimal sekali):</b><br>";

        $x = 100; // Kondisi sudah salah dari awal (karena syaratnya <= 5)

        do {
            echo "Ini tetap dicetak satu kali meskipun x = $x <br>";
            $x++;
        } while ($x <= 5);
        echo "<br>";

        // 4. FOREACH LOOP
        echo "<b>4. Foreach (Daftar Menu):</b><br>";

        $menu = ["Nasi Goreng", "Mie Ayam", "Bakso"];
        
        foreach ($menu as $makanan) {
            echo "- $makanan <br>";
        }
        
        echo "<hr>"; // Garis pemisah

        echo "<h2>B. Control: Break & Continue</h2>";
        
        echo "Mulai Loop 1 sampai 10:<br>";

        for ($nomor = 1; $nomor <= 10; $nomor++) {
            
            // Contoh CONTINUE
            if ($nomor == 4) {
                echo "<i>(Angka $nomor dilewati/skip)</i><br>";
                continue; // Langsung loncat ke iterasi berikutnya ($nomor jadi 5)
            }

            // Contoh BREAK
            if ($nomor == 8) {
                echo "<b>STOP! Ditemukan angka 8. Loop dimatikan paksa.</b><br>";
                break; // Keluar total dari kurung kurawal loop
            }

            echo "Nomor: $nomor <br>";
        }

        echo "<br>Selesai. Kode di bawah loop tetap jalan.";
    ?>    
</body>
</html>