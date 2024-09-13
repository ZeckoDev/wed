<?php
header('Content-Type: application/json');

$koneksi = mysqli_connect("localhost", "root", "", "komen");

if (!$koneksi) {
    die(json_encode(["error" => "Koneksi gagal: " . mysqli_connect_error()]));
}

$query = "SELECT nama, ucapan FROM komen ORDER BY id DESC LIMIT 10";
$result = mysqli_query($koneksi, $query);

$comments = [];
while ($row = mysqli_fetch_assoc($result)) {
    $comments[] = $row;
}

echo json_encode($comments);

mysqli_close($koneksi);
?>