<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
        echo "<h2>A. Indexed Array (Array Biasa)</h2>";
        // Kunci (Index) otomatis dimulai dari angka 0
        
        // Cara penulisan modern (kurung siku)
        $buah = ["Apel", "Jeruk", "Mangga"]; 
        
        // Cara penulisan lama (masih sering ketemu di tutorial lama)
        $hewan = array("Kucing", "Anjing", "Burung");

        echo "1. Akses manual: Saya suka buah " . $buah[0] . " dan " . $buah[2] . "<br>";
        
        // Menambahkan isi array baru
        $buah[] = "Pisang"; // Otomatis masuk ke index terakhir [3]
        $buah[1] = "Anggur"; // Mengganti isi index [1] (Jeruk -> Anggur)

        echo "2. Debugging (Lihat semua isi):";
        echo "<pre>"; 
        print_r($buah); // print_r digunakan khusus untuk melihat struktur array
        echo "</pre>";


        echo "<h2>B. Associative Array (Array Asosiatif)</h2>";
        // Kunci (Key) didefinisikan sendiri (String), bukan angka urut.
        // Sangat mirip dengan struktur JSON atau Database Record.
        
        $mahasiswa = [
            "nama" => "Aang Solihin",  // Key => Value
            "umur" => 21,
            "jurusan" => "Teknik Informatika",
            "aktif" => true
        ];

        echo "1. Akses pakai Key: Halo, " . $mahasiswa["nama"] . "<br>";
        echo "2. Jurusan: " . $mahasiswa["jurusan"] . "<br>";

        // Menambah data baru ke array asosiatif
        $mahasiswa["kota"] = "Jakarta"; 

        echo "3. Struktur Data:";
        echo "<pre>";
        print_r($mahasiswa);
        echo "</pre>";


        echo "<h2>C. Multidimensional Array (Array di dalam Array)</h2>";
        // Seperti tabel (Baris dan Kolom)
        
        $inventory = [
            // [0] Nama Barang, [1] Stok, [2] Harga
            ["Laptop", 10, 7000000],  // Index 0
            ["Mouse", 50, 150000],    // Index 1
            ["Keyboard", 20, 300000]  // Index 2
        ];

        echo "1. Akses Baris 0, Kolom 0: " . $inventory[0][0] . "<br>"; 
        echo "2. Akses Baris 1, Kolom 2 (Harga Mouse): Rp " . $inventory[1][2] . "<br>";

        // Looping Array Multidimensi
        echo "3. Cetak Semua Barang:<br>";
        foreach($inventory as $item) {
            echo "- Produk: $item[0] | Stok: $item[1] | Harga: $item[2] <br>";
        }
        echo "<br>";


        echo "<h2>D. Fungsi-Fungsi Penting Array</h2>";
        
        $angka = [10, 5, 20, 3, 8];

        // 1. Count (Hitung jumlah item)
        echo "1. Jumlah item: " . count($angka) . "<br>";

        // 2. Sort (Mengurutkan)
        sort($angka); // Mengurutkan dari kecil ke besar (Ascending)
        echo "2. Setelah diurutkan (sort): " . implode(", ", $angka) . "<br>";

        // 3. Reverse Sort
        rsort($angka); // Besar ke kecil
        echo "3. Urut terbalik (rsort): " . implode(", ", $angka) . "<br>";

        // 4. In Array (Cek keberadaan data)
        $cari = 20;
        $hasil = in_array($cari, $angka); // Hasilnya True/False
        echo "4. Apakah angka $cari ada? " . ($hasil ? "Ya, Ada" : "Tidak Ada") . "<br>";

        // 5. Array Merge (Gabung 2 array)
        $kelasA = ["Andi", "Budi"];
        $kelasB = ["Siti", "Dewi"];
        $gabungan = array_merge($kelasA, $kelasB);
        
        echo "5. Gabungan kelas: " . implode(", ", $gabungan) . "<br>";
    ?>    
</body>
</html>