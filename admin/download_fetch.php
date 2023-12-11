<style type="text/css">
  .batas_tableme_download {
    height: 640px;
    overflow: auto;
    background: #585858;
  }

  .tableme_download {
    width: 100%;
    text-align: center;
    font-size: smaller;
  }

  .tableme_download tr {
    text-align: center;
    font-weight: bold;
    color: #cecece;
  }

  .tableme_download th {}

  .edit_download {
    padding: 2px 23px;
    width: 80%;
  }
</style>
<?php
include("../database_connection.php");

$page = (isset($_POST['page'])) ? $_POST['page'] : 1;
$limit = 24; // Jumlah data per halamannya
// Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
$limit_start = ($page - 1) * $limit;
$no = $limit_start + 1;
if (isset($_POST['search']) && $_POST['search'] == true) {
  $param = $keyword;


  $sql = $connect->prepare("SELECT *  FROM download  WHERE  id_judul = " . $param . "  order by tanggal_update desc  LIMIT " . $limit_start . "," . $limit) or die("Gagal mengecek user di database") or die("Gagal mengecek user di database");
  $sql->execute(); // Eksekusi querynya

  $sql2 = $connect->prepare("SELECT  COUNT(*)  AS jumlah_row  FROM download WHERE  id_judul = " . $param . "") or die("Gagal mengecek user di database") or die("Gagal mengecek user di database");

  $sql2->execute(); // Eksekusi querynya
  $get_jumlah = $sql2->fetch();
} else {
  $sql = $connect->prepare("SELECT * FROM download WHERE  id_judul = '' order by tanggal_update  LIMIT " . $limit_start . "," . $limit) or die("Gagal mengecek user di database");
  $sql->execute();

  // Buat query untuk menghitung semua  data
  $sql2 = $connect->prepare("SELECT COUNT(*) AS jumlah_row  id_judul = ''  FROM download ");
  $sql2->execute(); // Eksekusi querynya
  $get_jumlah = $sql2->fetch();
}


echo '<div class="batas_tableme_download"><table class="table-bordered tableme_download">
    <tr>
<th style="text-align:center">ID</th>
<th style="text-align:center">Episode</th>
<th style="text-align:center">Server</th>
<th style="text-align:center">Qualty</th>
<th style="text-align:center">Tipe</th>
<th style="text-align:center">Ket</th>
</tr>';



while ($row = $sql->fetch()) {

  echo '


<tr>
<td>' . $row["id"] . '</td>
     <td>Episode ' . $row["episode"] . '</td>
      <td>' . $row["server"] . '</td>
       <td>' . $row["quality"] . '</td>
       <td>' . $row["tipe"] . '</td>
       <td>' . $row["ket"] . '</td>
   <td style="display: flex;"> <button type="button" name="edit_download" class="btn btn-primary btn-xs edit_download" id="' . $row["id"] . '">U</button>
    <button type="button" style="background:darkred" name="delete_download" class="btn btn-primary btn-xs delete_download" id="' . $row["id"] . '">H</button>
</td>
    </tr>
  ';




  $no++;
}


echo  '</table></div>';

?>
<style type="text/css">



</style>



<div style="text-align: center;">
  <ul class="pagination_download" style="">
    <!-- LINK FIRST AND PREV -->
    <?php
    if ($page == 1) { // Jika page adalah page ke 1, maka disable link PREV
    ?>
      <li class="disabled"><a href="#">First</a></li>
      <li class="disabled"><a href="#">&laquo;</a></li>
    <?php
    } else { // Jika page bukan page ke 1
      $link_prev = ($page > 1) ? $page - 1 : 1;
    ?>
      <li><a href="javascript:void(0);" onclick="searchWithPagination_download(1, false)">First</a></li>
      <li><a href="javascript:void(0);" onclick="searchWithPagination_download(<?php echo $link_prev; ?>, false)">&laquo;</a></li>
    <?php
    }



    ?>



    <!-- LINK NUMBER -->
    <?php
    $jumlah_page = ceil($get_jumlah['jumlah_row'] / $limit); // Hitung jumlah halamannya
    $jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
    $start_number = ($page > $jumlah_number) ? $page - $jumlah_number : 1; // Untuk awal link number
    $end_number = ($page < ($jumlah_page - $jumlah_number)) ? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number

    for ($i = $start_number; $i <= $end_number; $i++) {
      $link_active = ($page == $i) ? ' class="active"' : '';
    ?>
      <li<?php echo $link_active; ?>><a href="javascript:void(0);" onclick="searchWithPagination_download(<?php echo $i; ?>, false)"><?php echo $i; ?></a></li>
      <?php
    }
      ?>

      <!-- LINK NEXT AND LAST -->
      <?php
      // Jika page sama dengan jumlah page, maka disable link NEXT nya
      // Artinya page tersebut adalah page terakhir 
      if ($page == $jumlah_page) { // Jika page terakhir
      ?>
        <li class="disabled"><a href="#">&raquo;</a></li>
        <li class="disabled"><a href="#">Last</a></li>
      <?php
      } else { // Jika Bukan page terakhir
        $link_next = ($page < $jumlah_page) ? $page + 1 : $jumlah_page;
      ?>
        <li><a href="javascript:void(0);" onclick="searchWithPagination_download(<?php echo $link_next; ?>, false)">&raquo;</a></li>
        <li><a href="javascript:void(0);" onclick="searchWithPagination_download(<?php echo $jumlah_page; ?>, false)">Last</a></li>
      <?php
      }



      ?>
  </ul>


  <div style="color: orange; font-size: 14px; float: left;">Total <?php echo $get_jumlah['jumlah_row']; ?> </div>

</div>


<style type="text/css">
  .pagination_download {
    display: inline-block;
    padding-left: 0;
    margin: 0px 0px 10px 0px;
    border-radius: 4px
  }

  .pagination_download>li {
    display: inline
  }

  .pagination_download>li>a,
  .pagination_download>li>span {
    position: relative;
    float: left;
    padding: 3px 6px;
    line-height: 1.42857143;
    text-decoration: none;
    color: #428bca;
    background-color: #fff;
    border: 1px solid #ddd;
    margin-left: -1px
  }

  .pagination_download>li:first-child>a,
  .pagination_download>li:first-child>span {
    margin-left: 0;
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px
  }

  .pagination_download>li:last-child>a,
  .pagination_download>li:last-child>span {
    border-bottom-right-radius: 4px;
    border-top-right-radius: 4px
  }

  .pagination_download>li>a:hover,
  .pagination_download>li>span:hover,
  .pagination_download>li>a:focus,
  .pagination_download>li>span:focus {
    color: #2a6496;
    background-color: #eee;
    border-color: #ddd
  }

  .pagination_download>.active>a,
  .pagination_download>.active>span,
  .pagination_download>.active>a:hover,
  .pagination_download>.active>span:hover,
  .pagination_download>.active>a:focus,
  .pagination_download>.active>span:focus {
    z-index: 2;
    color: #fff;
    background-color: #428bca;
    border-color: #428bca;
    cursor: default
  }

  .pagination_download>.disabled>span,
  .pagination_download>.disabled>span:hover,
  .pagination_download>.disabled>span:focus,
  .pagination_download>.disabled>a,
  .pagination_download>.disabled>a:hover,
  .pagination_download>.disabled>a:focus {
    color: #999;
    background-color: #fff;
    border-color: #ddd;
    cursor: not-allowed
  }

  .pagination_download-lg>li>a,
  .pagination_download-lg>li>span {
    padding: 10px 16px;
    font-size: 18px
  }

  .pagination_download-lg>li:first-child>a,
  .pagination_download-lg>li:first-child>span {
    border-bottom-left-radius: 6px;
    border-top-left-radius: 6px
  }

  .pagination_download-lg>li:last-child>a,
  .pagination_download-lg>li:last-child>span {
    border-bottom-right-radius: 6px;
    border-top-right-radius: 6px
  }

  .pagination_download-sm>li>a,
  .pagination_download-sm>li>span {
    padding: 5px 5px;
    font-size: 10px
  }

  .pagination_download-sm>li:first-child>a,
  .pagination_download-sm>li:first-child>span {
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px
  }

  .pagination_download-sm>li:last-child>a,
  .pagination_download-sm>li:last-child>span {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px
  }

  .page22r {
    padding-left: 0;
    margin: 20px 0;
    list-style: none;
    text-align: center
  }

  .page22r li {
    display: inline
  }

  .page22r li>a,
  .page22r li>span {
    display: inline-block;
    padding: 5px 10px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 15px
  }

  .page22r li>a:hover,
  .page22r li>a:focus {
    text-decoration: none;
    background-color: #eee
  }

  .page22r .next>a,
  .page22r .next>span {
    float: right
  }

  .page22r .previous>a,
  .page22r .previous>span {
    float: left
  }

  .page22r .disabled>a,
  .page22r .disabled>a:hover,
  .page22r .disabled>a:focus,
  .page22r .disabled>span {
    color: #999;
    background-color: #fff;
    cursor: not-allowed
  }

  .label {
    display: inline;
    padding: .2em .4em .3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em
  }

  .label[href]:hover,
  .label[href]:focus {
    color: #fff;
    text-decoration: none;
    cursor: pointer
  }

  .label:empty {
    display: none
  }

  .btn .label {
    position: relative;
    top: -1px
  }

  .label-default {
    background-color: #999
  }

  .label-default[href]:hover,
  .label-default[href]:focus {
    background-color: gray
  }

  .label-primary {
    background-color: #428bca
  }

  .label-primary[href]:hover,
  .label-primary[href]:focus {
    background-color: #3071a9
  }

  .label-success {
    background-color: #5cb85c
  }

  .label-success[href]:hover,
  .label-success[href]:focus {
    background-color: #449d44
  }

  .label-info {
    background-color: #5bc0de
  }

  .label-info[href]:hover,
  .label-info[href]:focus {
    background-color: #31b0d5
  }

  .label-warning {
    background-color: #f0ad4e
  }

  .label-warning[href]:hover,
  .label-warning[href]:focus {
    background-color: #ec971f
  }

  .label-danger {
    background-color: #d9534f
  }

  .label-danger[href]:hover,
  .label-danger[href]:focus {
    background-color: #c9302c
  }

  .badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 700;
    color: #fff;
    line-height: 1;
    vertical-align: baseline;
    white-space: nowrap;
    text-align: center;
    background-color: #999;
    border-radius: 10px
  }

  .badge:empty {
    display: none
  }

  .btn .badge {
    position: relative;
    top: -1px
  }

  .btn-xs .badge {
    top: 0;
    padding: 1px 5px
  }

  a.badge:hover,
  a.badge:focus {
    color: #fff;
    text-decoration: none;
    cursor: pointer
  }

  a.list-group-item.active>.badge,
  .nav-pills>.active>a>.badge {
    color: #428bca;
    background-color: #fff
  }

  .nav-pills>li>a>.badge {
    margin-left: 3px
  }

  .jumbotron {
    padding: 30px;
    margin-bottom: 30px;
    color: inherit;
    background-color: #eee
  }

  .jumbotron h1,
  .jumbotron .h1 {
    color: inherit
  }

  .jumbotron p {
    margin-bottom: 15px;
    font-size: 21px;
    font-weight: 200
  }

  .container .jumbotron {
    border-radius: 6px
  }

  .jumbotron .container {
    max-width: 100%
  }

  @media screen and (min-width:768px) {
    .jumbotron {
      padding-top: 48px;
      padding-bottom: 48px
    }

    .container .jumbotron {
      padding-left: 60px;
      padding-right: 60px
    }

    .jumbotron h1,
    .jumbotron .h1 {
      font-size: 63px
    }
  }

  .thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
</style>