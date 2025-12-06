<?php
// Fungsi sanitasi
function bersihkan($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// Fungsi validasi untuk memastikan data tidak kosong
function validasi($data) {
    if (empty($data)) {
        return false; // Jika data kosong, return false
    }
    return true; // Jika data ada, return true
}

// Memeriksa apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = bersihkan($_POST['nim']);
    $nama = bersihkan($_POST['nama']);
    $umur = bersihkan($_POST['umur']);
    $tempat_lahir = bersihkan($_POST['tempat_lahir']);
    $tanggal_lahir = bersihkan($_POST['tanggal_lahir']);
    $no_hp = bersihkan($_POST['no_hp']);
    $alamat = bersihkan($_POST['alamat']);
    $email = bersihkan($_POST['email']);
    $kota = bersihkan($_POST['kota']);
    $jk = isset($_POST['jk']) ? bersihkan($_POST['jk']) : "-";
    $status = isset($_POST['status']) ? bersihkan($_POST['status']) : "-";
    
    // Validasi setiap input
    $errors = [];

    if (!validasi($nim)) {
        $errors[] = "NIM tidak boleh kosong.";
    }
    if (!validasi($nama)) {
        $errors[] = "Nama tidak boleh kosong.";
    }
    if (!preg_match("/^[a-zA-Z\s]+$/", $nama)) {
        return "Nama hanya boleh mengandung huruf dan spasi";
    }
    return true;
    if (!validasi($umur)) {
        $errors[] = "Umur tidak boleh kosong dan di isi angka.";
    }
    if (!is_numeric($umur)) {
        return "Umur harus berupa angka.";
    }
    return true;
    
    if (!validasi($tempat_lahir)) {
        $errors[] = "Tempat lahir tidak boleh kosong.";
    }
    if (!validasi($tanggal_lahir)) {
        $errors[] = "Tanggal lahir tidak boleh kosong.";
    }
    if (!validasi($no_hp)) {
        $errors[] = "Nomor HP tidak boleh kosong.";
    }
    if (!validasi($alamat)) {
        $errors[] = "Alamat tidak boleh kosong.";
    }
    if (!validasi($email)) {
        $errors[] = "Email tidak boleh kosong.";
    }
    if (!validasi($kota)) {
        $errors[] = "Kota tidak boleh kosong.";
    }

    // Jika ada kesalahan, tampilkan pesan error
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    } else {
        // Jika tidak ada kesalahan, tampilkan hasil
        echo "<h2>Hasil Input Data Mahasiswa (Metode POST)</h2>";
        echo "<p><b>NIM:</b> $nim</p>";
        echo "<p><b>Nama:</b> $nama</p>";
        echo "<p><b>Umur:</b> $umur</p>";
        echo "<p><b>Tempat Lahir:</b> $tempat_lahir</p>";
        echo "<p><b>Tanggal Lahir:</b> $tanggal_lahir</p>";
        echo "<p><b>No HP:</b> $no_hp</p>";
        echo "<p><b>Alamat:</b> $alamat</p>";
        
        // Validasi dan tampilkan kota
        echo "<p><b>Kota:</b> ";
        if ($kota == "Semarang") echo "Semarang";
        elseif ($kota == "Solo") echo "Solo";
        elseif ($kota == "Brebes") echo "Brebes";
        elseif ($kota == "Kudus") echo "Kudus";
        elseif ($kota == "Demak") echo "Demak";
        else echo "Salatiga";
        echo "</p>";

        // Tampilkan jenis kelamin
        echo "<p><b>Jenis Kelamin:</b> $jk</p>";

        // Tampilkan status kawin
        echo "<p><b>Status:</b> $status</p>";

        // Tampilkan hobi
        echo "<p><b>Hobi:</b> ";
        if (!empty($_POST['hobi'])) {
            $hobi_list = [];
            foreach ($_POST['hobi'] as $h) {
                $hobi_list[] = bersihkan($h);
            }
            echo implode(", ", $hobi_list);
        } else {
            echo "-";
        }
        echo "</p>";

        // Tampilkan email
        echo "<p><b>Email:</b> $email</p>";
    }
} else {
    echo "<p>Form belum disubmit.</p>";
}
?>
