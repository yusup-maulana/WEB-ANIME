<?php
include("session.php");
authenticate();


$error = '';
$output = '';

include("../database_connection.php");

if (isset($_POST["add"])) {
    if (empty($_POST["link"])) {
        $error = '<label class="text-danger">Link required</label>';
    } else {
        // INSERT MULTI METODE @internetclan
        $id = $_GET['idjudul'];
        $quality = $_POST['quality'];
        $eps = $_POST['eps_txt'];
        $serv =  $_POST['server_txt'];
        $lines = explode("\n", $_POST["link"]);
        foreach ($lines as $line) {
            $query = "INSERT INTO download  (id_judul,quality,episode,server,tanggal_update,tipe,link) VALUES ('" . $id . "','" . $quality . "','" . $eps . "','" . $serv . "','" . date("Y-m-d H:i:s") . "','eps','" . trim($line) . "')";
            $statement = $connect->prepare($query);
            $statement->execute();
            $eps++;
        }


        $error = ' <label class="text-success">Data Inserted Successfully</label>';
    }
}

$query = "SELECT * FROM download where id_judul = '" . $_GET['idjudul'] . "' ORDER BY episode DESC";

$statement = $connect->prepare($query);

$statement->execute();

if ($statement->rowCount() > 0) {
    $result = $statement->fetchAll();
    foreach ($result as $row) {
        $output .= '
        <tr>
            <td>' . $row["quality"] . '</td>
             <td>Episode ' . $row["episode"] . '</td>
              <td>' . $row["server"] . '</td>
        </tr>
        ';
    }
} else {
    $output .= '
        <tr>
            <td>No Data Found</td>
        </tr>
    ';
}

?>

<html>

<head>
    <title>DOWNLOAD multiple data to mysql using single textarea in PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel='stylesheet' href='../new asset/select2.min.css'>
    <script src='../new asset/select2.min.js'></script>
</head>

<body>
    <div class="container">
        <div class="row content">
            <div class="col-sm-2">
                &nbsp;
            </div>
            <div class="col-sm-8 text-left">
                <br />
                <h3 align="center">Insert Multiple <b style="color:dodgerblue">DOWNLOAD</b> Textarea By line</h3>
                <br />
                <div align="center"><?php echo $error; ?></div>
                <form method="post">

                    <div class="form-group">
                        <label>Mulai dari episode</label>
                        <input type="text" value="1" class="form-control" name="eps_txt" id="eps_txt" placeholder=" Baru" autocomplete="off" />
                    </div>

                    <div class="form-group">
                        <label>Nama Server</label>
                        <select name="server" id="server" class="form-control">
                            <option value=""></option>
                        </select> <input type="text" value="SB" name="server_txt" id="server_txt" placeholder=" Baru" autocomplete="off" />
                    </div>

                    <div class="form-group">
                        <label>Quaity</label>

                        <select name="quality" id="quality" class="form-control">
                            <option value="720p">720p</option>
                            <option value="480p">480p</option>
                            <option value="360p">360p</option>
                            <option value="1080p">1080p</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Enter Link</label>
                        <div>
                            <textarea name="link" class="form-control" rows="10" placeholder="Masukkan beberapa link di sini..."></textarea>
                        </div>
                    </div>
                    <br />
                    <div align="center">
                        <input type="submit" name="add" class="btn btn-primary" value="Add" />
                    </div>
                </form>
                <br />


                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Quality</th>
                        <th>Episode</th>
                        <th>Server</th>
                    </tr>
                    <?php
                    echo $output;
                    ?>
                </table>
            </div>
            <div class="col-sm-2">
                &nbsp;
            </div>
        </div>
    </div>
</body>

</html>









<script type="text/javascript">
    isi_cbx();
    // fungsi isi combobox 
    $("#server").change(function() {
        $("#server_txt").val($("#server").val());
    });
    $('#server').select2();

    function isi_cbx() {
        var action = 'get_data_combobox';
        $.ajax({
            url: "download_action.php",
            method: "POST",
            data: {
                action_download: action
            },
            dataType: "json",
            success: function(data) {
                $('#server').empty();
                if (data.server == null) {} else {

                    var cbxserver_var = data.server;

                    var i;
                    $('#server').prepend("<option src=''></option>");
                    for (i = 0; i < cbxserver_var.length; i++) {
                        $('#server').prepend("<option src='" + data.server[i] + "'>" + data.server[i] + "</option>");
                    }

                }

            }
        });
    }
</script>