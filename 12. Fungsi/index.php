<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>
    <?php
        echo "<h2>A. Dasar Fungsi</h2>";

        // 1. Membuat Fungsi Sederhana (Void / Tidak mengembalikan nilai)
        function sapaDunia() {
            echo "Halo Dunia!<br>";
        }

        // Memanggil fungsi
        echo "1. Panggil fungsi biasa:<br>";
        sapaDunia(); 
        sapaDunia(); // Bisa dipanggil berkali-kali
        echo "<br>";


        // 2. Fungsi dengan Parameter (Input)
        function sapaNama($nama, $waktu) {
            echo "Selamat $waktu, $nama!<br>";
        }

        echo "2. Panggil dengan parameter:<br>";
        sapaNama("Budi", "Pagi");
        sapaNama("Siti", "Sore");
        echo "<br>";


        // 3. Fungsi dengan Default Parameter (Opsional)
        // Jika parameter tidak diisi saat dipanggil, nilai default dipakai
        function setWarna($warna = "Hitam") {
            echo "Warna baju anda: $warna <br>";
        }

        echo "3. Default Parameter:<br>";
        setWarna("Merah"); // Menggunakan argumen
        setWarna();        // Menggunakan default
        echo "<br>";


        echo "<h2>B. Return Value (Nilai Kembalian)</h2>";
        // Fungsi ini TIDAK mencetak (echo) layar, tapi MENGEMBALIKAN hasil (return)
        // Hasilnya harus kita echo sendiri atau simpan di variabel.

        function tambah($angka1, $angka2) {
            $hasil = $angka1 + $angka2;
            return $hasil; // Melempar nilai keluar
        }

        echo "1. Hasil return langsung di-echo: " . tambah(5, 10) . "<br>";
        
        $total = tambah(20, 30); // Disimpan dulu ke variabel
        echo "2. Hasil return disimpan variabel: $total <br><br>";


        echo "<h2>C. Variable Scope (Lingkup Variabel)</h2>";
        // Variabel di luar fungsi (Global) TIDAK BISA dibaca di dalam fungsi secara langsung
        // Variabel di dalam fungsi (Local) hilang setelah fungsi selesai

        $teksLuar = "Saya Variabel Global";

        function cekScope() {
            // echo $teksLuar; // INI AKAN ERROR/WARNING (Undefined variable)
            
            // Solusi: Gunakan kata kunci 'global'
            global $teksLuar;

            echo "Di dalam fungsi: $teksLuar <br>";
            
            $teksDalam = "Saya Variabel Lokal";
        }

        cekScope();
        // echo $teksDalam; // INI JUGA ERROR (Variabel lokal tidak dikenal di luar)
        echo "Di luar fungsi: $teksLuar <br><br>";


        echo "<h2>D. Built-in Function (Fungsi Bawaan PHP)</h2>";
        // PHP punya ribuan fungsi siap pakai
        echo "Tanggal hari ini: " . date("d-M-Y") . "<br>";
        echo "Angka acak (1-100): " . rand(1, 100) . "<br>";
    ?>    
</body>
</html>