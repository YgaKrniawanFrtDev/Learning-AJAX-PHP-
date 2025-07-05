<?php
header("Content-Type: application/json");
include "../service/config.php";

$stmt = $conn->prepare("SELECT * FROM user ORDER BY Id_user DESC");
$stmt->execute();
$result = $stmt->get_result();

$resultUser = [];
while ($row = $result->fetch_assoc()) {
    $resultUser[] = $row;
}

echo json_encode($resultUser);
?>
