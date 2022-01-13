<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Uts</title>
</head>
<body>
    <h1>Perbedaan Variabel Dengan Array Di PHP</h1>
    Aray dapat menyimpan lebih dari 1 nilai dengan nama yang sama, sedangkan variabel biasa hanya dapat menampung 1 data saja
     Aray dapat diakses berdasarkan indexnya, sedangkan variabel langsung diakses lewat nama variabelnya
    <?php
    ?>
<hr>
    <h1> Map Dengan Array</h1>
    <?php

$Biodata=array("nama"=>"Eko Susan Riyanto",
"jurusan"=>"Teknik Informatika",
"hobi"=>"Bermain Game",
"alamat"=>"Pasar Kemis",
"nim"=>"1904030023",
"semester"=>"lima",
"umur"=>"20" );

echo $Biodata["nama"];
echo "<br>";
echo $Biodata["jurusan"];
echo "<br>";
echo $Biodata["hobi"];
echo "<br>";
echo $Biodata["alamat"];
echo "<br>";
echo $Biodata["nim"];
echo "<br>";
echo $Biodata["semester"];
echo "<br>";
echo $Biodata["umur"];
    ?>
<hr>
    <h1> Array Asosiatif </h1>
    <?php
    // membuat array asosiatif
    $biodata = [
        "Nama" => "Eko Susan Riyanto", 
        "Umur" => "20 Tahun", 
        "Jenis Kelamin" => "Laki-Laki",
        "Alamat" => "Wismamas II Kab Tangerang", 
        "TTL" => "Purworejo, 15-05-2001", 
        "Agama" => "Islam",
        "Hobi" => "Bermain Game",
    ];
    
    //mencetak isi array asosiatif
    echo "<h2>Biodata</h2>";
    echo "<p>Nama: ".$biodata["Nama"]."</br>";
    echo "<p>Umur: ".$biodata["Umur"]."</br>";
    echo "<p>Jenis Kelamin: ".$biodata["Jenis Kelamin"]."</br>";
    echo "<p>Alamat: ".$biodata["Alamat"]."</br>";
    echo "<p>TTL: ".$biodata["TTL"]."</br>";
    echo "<p>Agama: ".$biodata["Agama"]."</br>";
    echo "<p>Hobi: ".$biodata["Hobi"]."</br>";
    ?>
<hr>
    <h1> Array Multi Dimensi </h1>
    <?php
    // membuat array 2 dimensi yang berisi array asosiatif
     $sahabat = [
         [
             "Nama" => "Rio",
             "Umur" => "20 Tahun"
         ],
         [
            "Nama" => "Tasya",
            "Umur" => "19 Tahun"
        ],
        [
            "Nama" => "Farhan",
            "Umur" => "20 Tahun"
        ],
        [
            "Nama" => "Vina",
            "Umur" => "20 Tahun"
        ],

     ];
     echo "<br>";

     // menampilkan array
     foreach ($sahabat as $sahabat) {
         echo "<h2>".$sahabat["Nama"]."</h2>";
         echo "<p>".$sahabat["Umur"]."</p>";
         echo "<hr>";
     }
    
    ?>
</body>
</html>