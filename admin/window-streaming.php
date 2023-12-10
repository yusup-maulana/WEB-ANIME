<?php

//index.php

$error = '';
$output = '';
include("../database_connection.php");

if (isset($_POST["add"])) {
    if (empty($_POST["link"])) {
        $error = '<label class="text-danger">Link required</label>';
    } else {
        // INSERT MULTI METODE @internetclan
        $id = $_GET['idjudul'];
        $eps = $_POST['eps_txt'];
        $serv =  $_POST['streaming_server_txt'];
        $lines = explode("\n", $_POST["link"]);
        foreach ($lines as $line) {
            $query = "INSERT INTO streaming  (id_judul,episode,server,link) VALUES ('" . $id . "','" . $eps . "','" . $serv . "','" . trim($line) . "')";
            $statement = $connect->prepare($query);
            $statement->execute();
            $eps++;
        }


        // INSERT MULTI METODE 2
        // $array = explode("\r\n", $_POST["link"]);
        //$email_array = array_unique($array);
        // $query = " INSERT INTO streaming  (link)  VALUES ('".implode("'),('", $email_array)."')";
        // $statement = $connect->prepare($query);
        // $statement->execute();

        $error = ' <label class="text-success">Data Inserted Successfully</label>';
    }
}

$query = "SELECT * FROM streaming where id_judul = '" . $_GET['idjudul'] . "' ORDER BY tanggal_update DESC";

$statement = $connect->prepare($query);

$statement->execute();

if ($statement->rowCount() > 0) {
    $result = $statement->fetchAll();
    foreach ($result as $row) {
        $output .= '
        <tr>
            <td>' . $row["id_judul"] . '</td>
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
    <title>STREAMING multiple data to mysql using single textarea in PHP</title>
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
                <h3 align="center">Insert Multiple <b style="color:#21b15a">STREAMING</b> Textarea By line</h3>
                <br />
                <div align="center"><?php echo $error; ?></div>
                <form method="post">

                    <div style="display:flex">
                        <label class="col-md-3 text-right">Mulai dari</label>
                        <input type="text" value="1" class="form-control" name="eps_txt" id="eps_txt" placeholder=" Baru" autocomplete="off" />
                    </div>

                    <div style="display:flex">
                        <select name="streaming_server" id="streaming_server" class="form-control">
                            <option value=""></option>
                        </select>
                        <input type="text" value="Google Drive" name="streaming_server_txt" id="streaming_server_txt" placeholder=" Baru" autocomplete="off" />
                    </div>

                    <div class="row">
                        <label class="col-md-3 text-right">Enter Link</label>
                        <div class="col-md-9">
                            <textarea name="link" class="form-control" rows="10"></textarea>
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
                        <th>ID Judul</th>
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
    $("#streaming_server").change(function() {
        $("#streaming_server_txt").val($("#streaming_server").val());
    });
    $('#streaming_server').select2();

    function isi_cbx() {
        var action = 'get_data_combobox';
        $.ajax({
            url: "streaming_action.php",
            method: "POST",
            data: {
                action_streaming: action
            },
            dataType: "json",
            success: function(data) {
                $('#streaming_server').empty();
                if (data.server == null) {} else {

                    var cbxserver_var = data.server;

                    var i;
                    $('#streaming_server').prepend("<option src=''></option>");
                    for (i = 0; i < cbxserver_var.length; i++) {
                        $('#streaming_server').prepend("<option src='" + data.server[i] + "'>" + data.server[i] + "</option>");
                    }

                }

            }
        });
    }
</script>