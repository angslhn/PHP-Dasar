<!-- Number -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>
    <?php
        // --- 1. INTEGER (Bilangan Bulat) ---
        $x = 5985;
        $y = 59.85; // Ini bukan integer

        echo "<b>1. Cek Integer:</b><br>";
        echo "Apakah 5985 integer? ";
        var_dump(is_int($x)); // Output: bool(true)
        echo "<br>";
        
        echo "Apakah 59.85 integer? ";
        var_dump(is_int($y)); // Output: bool(false)
        echo "<br><br>";


        // --- 2. FLOAT (Bilangan Desimal) ---
        $f = 10.365;

        echo "<b>2. Cek Float:</b><br>";
        echo "Apakah 10.365 float? ";
        var_dump(is_float($f));
        echo "<br><br>";


        // --- 3. INFINITY & NaN (Not a Number) ---
        // Infinity: Angka terlalu besar drpd memori PHP
        // NaN: Operasi matematika mustahil (misal acos(8))
        
        $inf = 1.9e411; 
        $nan = acos(8);

        echo "<b>3. Cek Infinity & NaN:</b><br>";
        echo "Nilai Infinity: ";
        var_dump($inf);
        echo "<br>";
        
        echo "Nilai NaN: ";
        var_dump($nan);
        echo "<br><br>";


        // --- 4. NUMERICAL STRINGS (Penting!) ---
        // PHP bisa tahu kalau string isinya angka
        $strAngka = "5985";
        $strTeks = "Hello";
        $strCampur = "59.85" + 100; // PHP otomatis menghitung string angka

        echo "<b>4. Cek Numerical String (is_numeric):</b><br>";
        echo "Cek string '5985': ";
        var_dump(is_numeric($strAngka)); // true
        echo "<br>";

        echo "Cek string 'Hello': ";
        var_dump(is_numeric($strTeks)); // false
        echo "<br>";

        echo "Cek hasil penjumlahan string '59.85' + 100: ";
        var_dump(is_numeric($strCampur)); // true
        echo "<br><br>";


        // --- 5. CASTING (Mengubah Tipe Data) ---
        // Memaksa Float/String menjadi Integer
        $floatAwal = 23465.768;
        $stringAwal = "23465.768";

        echo "<b>5. Casting ke Integer:</b><br>";
        echo "Float 23465.768 diubah ke int jadi: " . (int)$floatAwal . "<br>";
        echo "String '23465.768' diubah ke int jadi: " . intval($stringAwal) . "<br>";
        echo "<i>(Perhatikan: Angka dibulatkan ke bawah/koma hilang)</i>";
    ?>    
</body>
</html>