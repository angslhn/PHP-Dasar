<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asosiatif</title>
</head>
<body>
<?php
    // 1. MEMBUAT ARRAY ASOSIATIF
    // Format: "Key" => "Value"
    $mahasiswa = [
        "nama" => "Aang Solihin",
        "umur" => 20,
        "kota" => "Sumedang",
        "aktif" => true
    ];

    echo "--- Akses Data Manual ---<br>";
    echo "Nama: " . $mahasiswa["nama"] . "<br>";
    echo "Umur: " . $mahasiswa["umur"] . " tahun<br>";
    echo "Kota: " . $mahasiswa["kota"] . "<br><br>";


    // 2. MENGUBAH DAN MENAMBAH DATA
    $mahasiswa["kota"] = "Jakarta"; // Mengubah data lama
    $mahasiswa["hobi"] = "Koding";  // Menambah data baru

    echo "--- Setelah Diubah ---<br>";
    echo "Kota baru: " . $mahasiswa["kota"] . "<br>";
    echo "Hobi baru: " . $mahasiswa["hobi"] . "<br><br>";


    // 3. LOOPING (FOREACH)
    // Mengambil Key dan Value sekaligus
    echo "--- Cetak Semua Data ---<br>";
    
    foreach ($mahasiswa as $kunci => $isi) {
        // $kunci akan berisi "nama", "umur", dll
        // $isi akan berisi "Aang", 21, dll
        echo "Key: $kunci | Value: $isi <br>";
    }
    echo "<br>";


    // 4. ARRAY MULTIDIMENSI (Array Asosiatif di dalam Array Biasa)
    // Ini format standar data dari database
    $daftar_laptop = [
        ["merk" => "Asus", "harga" => 5000000], // Index 0
        ["merk" => "Lenovo", "harga" => 6000000], // Index 1
        ["merk" => "Dell", "harga" => 7500000]  // Index 2
    ];

    echo "--- Array Multidimensi ---<br>";
    // Akses manual: Baris ke-0, Kolom 'merk'
    echo "Laptop 1: " . $daftar_laptop[0]["merk"] . "<br>"; 
    
    // Akses manual: Baris ke-1, Kolom 'harga'
    echo "Harga Laptop 2: " . $daftar_laptop[1]["harga"] . "<br>";

    // Looping semua laptop
    echo "<br>Daftar Lengkap:<br>";
    foreach ($daftar_laptop as $laptop) {
        echo "Merk: " . $laptop["merk"] . ", Harga: " . $laptop["harga"] . "<br>";
    }
?>

</body>
</html>