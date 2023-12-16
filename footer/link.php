<!-- main -->
<link rel="stylesheet" href="new asset/bootstrap.min.css" />
<link rel="stylesheet" href="new asset/plugin.css" />
<style>
    #main {
        padding: 2em;
    }
</style>
<?php
include("database_connection.php");
$sql = $connect->prepare("select * from footer where id=:id");
$sql->bindParam(':id', $_GET['link']);
$sql->execute();

if ($sql) {
    $data = $sql->fetch();
    echo $data['ket'];
} else {
    echo $_GET["link"];
}
