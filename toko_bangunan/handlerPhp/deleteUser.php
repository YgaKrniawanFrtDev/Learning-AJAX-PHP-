<?php
header("Content-Type: application/json");// mendefiniskan jika halaman ini adalah json
include "../service/config.php";


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $Id_user = $_POST['Id_user'] ?? NULL;


    // jika id kosong
    if(empty($Id_user)){
        echo json_encode(["error" => "Data tidak boleh kosong"]);
        exit();
    }else{
    $stmt = $conn->prepare("DELETE FROM user WHERE Id_user = ?");
    $stmt->bind_param("i", $Id_user);
    

    if($stmt->execute()){
        echo json_encode(["success" => "Data berhasil di hapus"]);
    }else {
        echo json_encode(["error" => "Data gagal di hapus"]);
    }



    }

}else {
    echo json_encode(["error" => "Data gagal ditemukan"]);
}



?>