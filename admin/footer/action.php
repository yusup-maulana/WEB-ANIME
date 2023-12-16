<?php
include("../../database_connection.php");
if (isset($_POST["action"])) {

    if ($_POST["action"] == "fetch") {
        $page = isset($_POST["page"]) ? intval($_POST["page"]) : 1; // Parameter halaman, jika tidak ada, maka default 1
        $itemsPerPage = isset($_POST["itemsPerPage"]) ? intval($_POST["itemsPerPage"]) : 10; // Jumlah item per halaman, jika tidak ada, maka default 10
        $startIndex = ($page - 1) * $itemsPerPage;


        $page_number = $_POST['page'];
        $search = $_POST['search'];

        // Logika untuk menentukan query berdasarkan nilai $_POST['search']
        if (isset($_POST['search']) && $_POST['search'] == true) {
            $cari = '%' . $_POST['search'] . '%'; // Menambahkan "%" di depan dan belakang nilai pencarian
            $sql = $connect->prepare("SELECT * FROM footer WHERE nama LIKE :nama ORDER BY id DESC LIMIT :start, :limit");
            $sql->bindParam(':nama', $cari, PDO::PARAM_STR);
            $sql2 = $connect->prepare("SELECT count(*) as totalitem FROM footer WHERE nama LIKE :nama");
            $sql2->bindParam(':nama', $cari, PDO::PARAM_STR);
        } else {
            $sql = $connect->prepare("SELECT * FROM footer ORDER BY id DESC LIMIT :start, :limit");
            $sql2 = $connect->prepare("SELECT count(*) as totalitem FROM footer");
        }
        $sql->bindParam(':start', $startIndex, PDO::PARAM_INT);
        $sql->bindParam(':limit', $itemsPerPage, PDO::PARAM_INT);
        $sql->execute();

        $sql2->execute();
        $row2 = $sql2->fetch();
        $result = [
            'hasil' => []
        ];

        // Mengambil semua baris hasil dari database
        while ($row = $sql->fetch()) {
            // Menambahkan hasil untuk setiap baris ke dalam array hasil
            $result['hasil'][] = [
                'id' => $row["id"],
                'nama' => $row["nama"],
                'ket' => $row["ket"]
            ];
        }
        $result['totalitem'][] = [
            'totalitem' => $row2["totalitem"]
        ];
        // Mengembalikan data dalam format JSON
        header('Content-Type: application/json');
        echo json_encode($result);
    }




    if ($_POST["action"] == "insert") {
        $nama = $_POST['nama'];
        $ket = $_POST['ket'];
        $sql = $connect->prepare("INSERT INTO footer (nama, ket) VALUES (:nama, :ket)");
        $sql->bindParam(':nama', $nama, PDO::PARAM_STR);
        $sql->bindParam(':ket', $ket, PDO::PARAM_STR);
        $success = $sql->execute();
        $result = [
            'icon' => ($success ? 'success' : 'error'),
            'title' => ($success ? 'Berhasil' : 'Gagal'),
        ];
        header('Content-Type: application/json');
        echo json_encode($result);
    }



    if ($_POST["action"] == "hapus") {
        $id = $_POST['id'];
        $sql = $connect->prepare("DELETE FROM footer where id=:id");
        $sql->bindParam(':id', $id, PDO::PARAM_STR);
        $success = $sql->execute();
        $result = [
            'icon' => ($success ? 'success' : 'error'),
            'title' => ($success ? 'Berhasil' : 'Gagal'),
        ];
        header('Content-Type: application/json');
        echo json_encode($result);
    }


    if ($_POST["action"] == "data") {
        $id = $_POST['id'];
        $sql = $connect->prepare("select * from footer where id=:id");
        $sql->bindParam(':id', $id, PDO::PARAM_STR);
        $sql->execute();
        while ($row = $sql->fetch()) {
            $result['data'] = [
                'id' => $row['id'],
                'nama' => $row['nama'],
                'ket' => $row['ket']
            ];
        }
        header('Content-Type: application/json');
        echo json_encode($result);
    }


    if ($_POST["action"] == "update") {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $ket = $_POST['ket'];
        $sql = $connect->prepare("UPDATE footer SET nama=:nama, ket=:ket WHERE id=:id");
        $sql->bindParam(':id', $id, PDO::PARAM_STR);
        $sql->bindParam(':nama', $nama, PDO::PARAM_STR);
        $sql->bindParam(':ket', $ket, PDO::PARAM_STR);
        $success = $sql->execute();
        $result = [
            'icon' => ($success ? 'success' : 'error'),
            'title' => ($success ? 'Berhasil' : 'Gagal'),
        ];
        header('Content-Type: application/json');
        echo json_encode($result);
    }
}
