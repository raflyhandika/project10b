<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input POST</title>
</head>
<body>

    <h2>Data yang Dikirim dengan Metode POST</h2>

    <?php
    echo "NIM : " . $_POST['nim'] . "<br>";
    echo "Nama : " . $_POST['nama'] . "<br>";
    echo "Tempat Lahir : " . $_POST['tempat_lahir'] . "<br>";
    echo "Tanggal Lahir : " . $_POST['tanggal_lahir'] . "<br>";
    echo "Alamat : " . $_POST['alamat'] . "<br>";
    
    echo "Nomor HP : " . $_POST['no_hp'] . "<br>";
    echo "Umur : " . $_POST['umur'] . " tahun<br>";

    $kota = $_POST['kota'];
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

    if (isset($_POST['status'])) {
        echo "Status : " . $_POST['status'] . "<br>";
    } else {
        echo "Status : Belum dipilih<br>";
    }

    if (isset($_POST['jk'])) {
        $jk = $_POST['jk'];
        if ($jk == "Laki-laki") {
            echo "Jenis Kelamin : Laki-laki<br>";
        } else {
            echo "Jenis Kelamin : Perempuan<br>";
        }
    } else {
        echo "Jenis Kelamin : Belum dipilih<br>";
    }

    echo "Hobi : ";
    if (isset($_POST['hobi'])) {
        $hobi_list = $_POST['hobi']; 
        

        echo implode(", ", $hobi_list); 
        
    } else {
        echo "-"; 
    }
    echo "<br>";

    echo "Email : " . $_POST['email'] . "<br>";
    ?>
</body>
</html>