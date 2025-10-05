<!-- Tipe Data -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data</title>
</head>
<body>
    <?php
        // String
        $nama = "Aang";
        echo "STRING: $nama<br>";

        // Integer
        $umur = 20;
        echo "INTEGER: $umur<br>";

        // Float
        $tinggi = 170.5;
        echo "FLOAT: $tinggi<br>";

        // Boolean
        $isOnline = true;
        echo "BOOLEAN: " . ($isOnline ? "true" : "false") . "<br>";

        // Array
        $buah = ["apel", "jeruk", "mangga"];
        echo "ARRAY: ";
        print_r($buah);

        // Object
        class Orang {
            public $nama = "Aang";
        }
        
        $obj = new Orang();
        echo "OBJECT: ";
        print_r($obj);

        // NULL
        $data = null;
        echo "NULL: ";
        var_dump($data);

        // Resource (contoh file)
        $file = fopen(__FILE__, "r"); // buka file ini sendiri
        echo "RESOURCE: ";
        var_dump($file);
        fclose($file);
    ?>
</body>
</html>