<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $jumlah = $_POST["jumlah"];
    $tanggal = $_POST["tanggal"];
    $alamat = $_POST["alamat"];

    $data = "$nama, $jumlah, $tanggal, $alamat\n";

    // Menambahkan data ke file data.txt
    file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);

    // Redirect kembali ke halaman admin setelah menambahkan data
    header("Location: admin.html");
    exit();
}
?>
