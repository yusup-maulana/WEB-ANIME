<?php
include("../database_connection.php");

$sql = $connect->prepare("select * from medsos");
$sql->execute();

while ($row = $sql->fetch()) {
    $result['data'][] = [
        'id' => $row['id'],
        'nama' => $row['nama'],
        'link' => $row['link']
    ];
}
header('Content-Type: application/json');
echo json_encode($result);
