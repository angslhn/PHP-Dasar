<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php
        // Contoh 1: Lampu Lalu Lintas (String Matching)
        $warnaLampu = "kuning";

        echo "<h2>1. Cek Lampu Lalu Lintas</h2>";
        echo "Warna saat ini: <b>$warnaLampu</b> <br>Aksi: ";

        switch ($warnaLampu) {
            case "merah":
                echo "BERHENTI! Jangan jalan.";
                break; // 'break' wajib ada agar kode berhenti di sini
            case "kuning":
                echo "HATI-HATI! Siap-siap berhenti atau jalan.";
                break;
            case "hijau":
                echo "JALAN! Silakan melaju.";
                break;
            default: // Sama seperti 'else'
                echo "Warna tidak dikenal (Lampu Rusak).";
                break;
        }
        echo "<br><br>";


        // Contoh 2: Grouping Case (Menumpuk Case)
        // Kadang 2 input berbeda menghasilkan output yang sama
        $hari = "Minggu";

        echo "<h2>2. Cek Jadwal (Grouping Case)</h2>";
        echo "Hari ini: $hari <br>Status: ";

        switch ($hari) {
            case "Senin":
            case "Selasa":
            case "Rabu":
            case "Kamis":
            case "Jumat":
                // Jika hari Senin s/d Jumat, kode ini yang jalan
                echo "Masuk Kerja / Kuliah";
                break;
            
            case "Sabtu":
            case "Minggu":
                // Jika Sabtu atau Minggu
                echo "Libur Akhir Pekan!";
                break;

            default:
                echo "Nama hari salah.";
        }
        echo "<br><br>";


        // Contoh 3: PHP 8 Match Expression (Versi Modern & Lebih Pendek)
        echo "<h2>3. PHP 8 Match (Bonus)</h2>";
        
        $kodeStatus = 200; // Contoh kode HTTP

        $pesan = match ($kodeStatus) {
            200 => 'Success / OK',
            404 => 'Page Not Found',
            500 => 'Server Error',
            default => 'Unknown Status Code',
        };

        echo "Kode: $kodeStatus <br>";
        echo "Artinya: $pesan";
    ?>    
</body>
</html>