<?php
include("../database_connection.php");

$sql = $connect->prepare("select * from footer");
$sql->execute();

while ($row = $sql->fetch()) {
    $result['data'][] = [
        'id' => $row['id'],
        'nama' => $row['nama']
    ];
}
header('Content-Type: application/json');
echo json_encode($result);
