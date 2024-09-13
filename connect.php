<?php
header('Content-Type: application/json');

$koneksi = mysqli_connect("localhost", "root", "", "komen");

if (!$koneksi) {
    die(json_encode(["error" => "Koneksi gagal: " . mysqli_connect_error()]));
}

$nama = $_POST['nama'];
$ucapan = $_POST['ucapan'];

$query = "INSERT INTO komen (nama, ucapan) VALUES (?, ?)";

$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "ss", $nama, $ucapan);

if (mysqli_stmt_execute($stmt)) {
    echo json_encode(["success" => true, "message" => "Data berhasil disimpan", "nama" => $nama, "ucapan" => $ucapan]);
} else {
    echo json_encode(["success" => false, "error" => mysqli_error($koneksi)]);
}

mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>