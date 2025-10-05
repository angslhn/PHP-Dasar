<!-- Variable -->

<!-- 
    - Semua variabel harus diawali tanda dolar $
    - Nama variabel harus diawali huruf atau garis bawah _
    - Hanya boleh berisi huruf (a-z, A-Z), angka (0-9), dan underscore _
    - Case-sensitive artinya huruf besar & kecil dianggap berbeda
    - Tidak boleh pakai kata yang sudah dipakai PHP (reserved words)
    - PHP bersifat dinamis tipe datanya bisa berubah tergantung isi terakhirnya

    var_dump() -> Digunakan untuk mengeluarkan informasi yang dimiliki oleh variabel
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    <?php
        $nama = "Aang Solihin";
        $umur = 20;
        $tinggi_badan = 170.5;

        echo "Nama: $nama <br>";
        echo "Umur: $umur tahun <br>";
        echo "Tinggi: $tinggi_badan cm";
    ?>
    <br>
    <?php
        var_dump($nama);
        var_dump($umur);
        var_dump($tinggi_badan);
    ?>
</body>
</html>