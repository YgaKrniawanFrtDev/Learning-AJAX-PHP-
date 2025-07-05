<?php
header("Content-Type: application/json");
// koneksi ke database 
include "../service/config.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Nama = $_POST['Nama'] ?? NULL;
    $Alamat = $_POST['Alamat'] ?? NULL;
    $No_hp = $_POST['No_hp'] ?? NULL;


    // jika form kosong maka akan mengirimkan validasi tsb
    if (trim($Nama) === "" || trim($Alamat) === "" || trim($No_hp) === "") {
        echo json_encode(["error" => "Form tidak boleh kosong, mohon masukan data"]);
    } else {
        // jika tidak kosong maka akan menjalankan queyr berikut
        $stmt = $conn->prepare("INSERT INTO user(Nama, Alamat, No_hp) VALUES(?, ?, ?)");
        $stmt->bind_param("ssi", $Nama, $Alamat, $No_hp);


        // jika berhasil menambahkan data maka akan menjalankan validasi tsb
        if ($stmt->execute()) {
            echo json_encode(["success" => "Berhasil menambahkan data"]);
        } else {
            echo json_encode(["error" => "Gagal menambahkan data"]);
        }
    }
} else {
    echo json_encode(["error" => "tidal ada data"]);
}
