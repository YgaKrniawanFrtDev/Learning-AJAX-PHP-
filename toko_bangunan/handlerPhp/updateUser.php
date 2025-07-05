<?php
header("Content-Type: application/json");
include "../service/config.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Id_user = $_POST['Edit-id'] ?? NULL;
    $Nama = $_POST['Edit-nama'] ?? NULL;
    $Alamat = $_POST['Edit-alamat'] ?? NULL;
    $No_hp = $_POST['Edit-no-hp'] ?? NULL; // Perbaiki kesalahan dari 'Np_hp' ke 'No_hp'

        // Perbaiki Query SQL
        $stmt = $conn->prepare("UPDATE user SET Nama = ?, Alamat = ?, No_hp = ? WHERE Id_user = ?");
        $stmt->bind_param("ssii", $Nama, $Alamat, $No_hp, $Id_user); // Perbaiki "ssii" menjadi "sssi"

        if ($stmt->execute()) {
            echo json_encode(["success" => "Berhasil Update Data"]);
        } else {
            echo json_encode(["error" => "Gagal Update Data"]);
        }
        $stmt->close(); // Tutup statement
    } else {
    echo json_encode(["error" => "Metode request tidak valid"]);
}

$conn->close(); // Tutup koneksi database
?>
