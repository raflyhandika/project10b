<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input GET</title>
</head>
<body>

    <h2>Data yang Dikirim dengan Metode GET</h2>

    <?php
    echo "NIM : " . $_GET['nim'] . "<br>";
    echo "Nama : " . $_GET['nama'] . "<br>";
    echo "Tempat Lahir : " . $_GET['tempat_lahir'] . "<br>";
    echo "Tanggal Lahir : " . $_GET['tanggal_lahir'] . "<br>";
    echo "Alamat : " . $_GET['alamat'] . "<br>";
    
    echo "Nomor HP : " . $_GET['no_hp'] . "<br>";
    echo "Umur : " . $_GET['umur'] . " tahun<br>";

    $kota = $_GET['kota'];
    if ($kota == "Semarang") {
        echo "Kota : Semarang<br>";
    } elseif ($kota == "Solo") {
        echo "Kota : Solo<br>";
    } elseif ($kota == "Salatiga") {
        echo "Kota : Salatiga<br>";
    } elseif ($kota == "Kudus") {
        echo "Kota : Kudus<br>";
    } else {
        echo "Kota : Pekalongan<br>";
    }

    if (isset($_GET['status'])) {
        echo "Status : " . $_GET['status'] . "<br>";
    } else {
        echo "Status : Belum dipilih<br>";
    }

    if (isset($_GET['jk'])) {
        $jk = $_GET['jk'];
        if ($jk == "Laki-laki") {
            echo "Jenis Kelamin : Laki-laki<br>";
        } else {
            echo "Jenis Kelamin : Perempuan<br>";
        }
    } else {
        echo "Jenis Kelamin : Belum dipilih<br>";
    }

    echo "Hobi : ";
    if (isset($_GET['hobi'])) {
        $hobi_list = $_GET['hobi']; 
        

        echo implode(", ", $hobi_list); 
        
    } else {
        echo "-"; 
    }
    echo "<br>";

    echo "Email : " . $_GET['email'] . "<br>";
    ?>
</body>
</html>