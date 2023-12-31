<?php
include("../database_connection.php");
$page = (isset($_POST['page'])) ? $_POST['page'] : 1;
$limit = 30;
$limit_start = ($page - 1) * $limit;
$no = $limit_start + 1;
if (isset($_POST['search']) && $_POST['search'] == true) {

  $sql = $connect->prepare("SELECT id ,judul, gambar,tahun,status, iu, tipe, level, tanggal_update FROM anime where level =:level order by tanggal_update desc LIMIT " . $limit_start . "," . $limit) or die("Gagal mengecek user di database");
  $sql->bindParam(":level", $levelValue);
  $sql->execute();
  $sql2 = $connect->prepare("SELECT COUNT(*) AS jumlah_row  FROM anime where level =:level");
  $sql2->bindParam(":level", $levelValue);
  $sql2->execute(); // Eksekusi querynya
  $get_jumlah = $sql2->fetch();
} else {
  $sql = $connect->prepare("SELECT id ,judul, gambar,tahun,status, iu, tipe, level, tanggal_update FROM anime  order by tanggal_update desc LIMIT " . $limit_start . "," . $limit) or die("Gagal mengecek user di database");
  $sql->execute();

  // Buat query untuk menghitung semua  data
  $sql2 = $connect->prepare("SELECT COUNT(*) AS jumlah_row  FROM anime ");
  $sql2->execute(); // Eksekusi querynya
  $get_jumlah = $sql2->fetch();
}

if ($levelValue == "1") {
  $lev = "Boring";
} elseif ($levelValue == "2") {
  $lev = "Menarik";
} elseif ($levelValue == "3") {
  $lev = "Wajib di tonton";
} elseif ($levelValue == "4") {
  $lev = "Best of the best";
}

echo '<b style="    text-align: center;
color: white;
margin: auto;
position: absolute;
left: 0;
right: 0;
font-size: x-large;
border-bottom: 3px solid #035164;">' . $lev . '</b><div class="fetch-card" >';



while ($row = $sql->fetch()) {
  $sql3 = $connect->prepare("SELECT episode FROM streaming where id_judul = " . $row['id'] . " order by episode desc LIMIT 1") or die("Gagal mengecek user di database");
  $sql3->execute();
  $r = $sql3->fetch();
  $phpstatus = $row["status"];
  echo '
    <div class="card in_view" id="' . $row["id"] . '">
    <a href="#">
    <div class="img1"><img alt="' . $row["judul"] . '" src="img/img.png" data-src="' . $row["gambar"] . '" loading="lazy" onerror="this.onerror=null;this.src=\' ' . $row["gambar"] . '\';"//></div>
    <div class="title"><span>' . $row["judul"] . '</span></div>
    <div class="text"></div>
    <a href="#">
    <div class="card_tahun"><span>' . $row["tahun"] . '</span></div>';

  if ($phpstatus == "completed") {
    echo ' <div class="card_status card_status_completed" style-hover="background:green"><span>' . $row["status"] . '</span></div>';
  } else {
    echo ' <div class="card_status card_status_blue"><span>' . $row["status"] . '</span></div>';
  }


  echo ' <div class="card_tipe"><span>' . $row["tipe"] . '</span></div>
    </a>
    <a href="#">
      <div class="views bn632-hover bn18" ><span>' . $r["episode"] . '</span></div>
    </a>
  </a>
</div>


    
  ';




  $no++;
}


echo  '</div>';

?>
<style type="text/css">
  .fetch-card {
    display: flex;
    flex-wrap: wrap;
    padding: 2em;
  }

  .card {
    background-clip: padding-box;
    position: relative;
    overflow: hidden;
    width: 166px;
    height: 300px;
    margin: 3% 0.9% auto;
    background-color: initial !important;
    box-shadow: rgb(0 0 0 / 40%) 0px 2px 4px, rgb(0 0 0 / 30%) 0px 7px 13px -3px, rgb(0 0 0 / 20%) 0px -3px 0px inset;
    flex: 0 18%;
  }

  .card:before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: -1;
    margin: -3px;
    border-radius: inherit;
    background: linear-gradient(135deg, rgba(42, 245, 152, 1), rgba(0, 158, 253, 1) 50%, rgba(42, 245, 152, 1));
  }

  .card .img1 {
    position: absolute;
    top: 0px;
    left: 0px;
    height: -webkit-fill-available;
    width: -webkit-fill-available;
    background-size: cover;
    background-position: left top;
    transition: all 0.5s ease-in-out;
    background-position: center;
  }



  .card .title {
    height: 18%;
    width: 100%;
    font-size: initial;
    color: #cdbe91;
    padding: 0px 9px;
    position: absolute;
    bottom: 0;
    left: 0;
    box-shadow: 0px -9px 20px 20px #1e2328;
    background: #1e2328;
    line-height: 1.2;
    font-family: tahoma;
  }

  .card .title span {
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
  }

  .card .text {
    position: absolute;
    bottom: 80px;
    height: 120px;
    padding: 15px 10px;
    text-align: center;
    font-size: 17px;
    color: #fff;
    transform: rotate(90deg);
    transform-origin: 0 100px;
    opacity: 0;
    transition: all 0.5s ease;
  }

  .card .card_tipe {
    position: absolute;
    left: 0px;
    top: 8px;
    background: #1e2328;
    padding: 2px 5px;
    font-size: 9px;
    text-align: center;
    color: #ffffff;
    border-radius: 0px 0px 10px 0px;
    transition: all 0.5s ease;
    text-shadow: -1px 1px 2px #000000cf;
    box-shadow: rgb(0 0 0 / 39%) 0px 1px 0px 0px;
    text-transform: uppercase;
  }

  .card .card_status:after {
    max-width: 100%;
    height: 20px;
    display: block;
    content: "";
    position: relative;

    bottom: 0px;
    left: -11px;
    z-index: -1;
    top: -17px;
    transform: skew(33deg, 0deg);
    padding: 0px 0px;
    box-shadow: rgb(0 0 0 / 39%) 0px 1px 0px 0px;
  }

  .card_status_blue:after {
    background: #2d94e2;
  }

  .card_status_completed:after {
    background: #159957;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #155799, #159957);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #155799, #159957);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  }

  .card .card_status {
    position: absolute;
    left: 0px;
    top: 169px;
    padding: 0px 0px;
    font-size: 10px;
    text-align: center;
    color: #ffffff;
    transition: all 0.5s ease;

    text-transform: capitalize;
    z-index: 1;
    width: 81px;
  }

  .card .card_status span {
    position: relative;
    left: -7px;
  }

  .card .card_tahun {
    position: absolute;
    right: 0px;
    background: #1e2328;
    font-weight: 600;
    top: 6px;
    padding: 2px 3px 2px 7px;
    font-size: 11px;
    text-align: center;
    color: #ffffff;
    border-radius: 10px 0px 0px 10px;
    transition: all 0.5s ease;
    /* text-shadow: 0px 1px 2px #000000d1; */
    box-shadow: rgb(0 0 0 / 39%) 0px 1px 0px 0px;
    text-transform: capitalize;
  }

  .card:hover .img1 {
    transform: scale(1.01) translate(1px, 0);
    transform-origin: 300px 300px;
    opacity: 0.5;
  }

  .card:hover .text {
    opacity: 0.8;
    transform: rotate(0deg);
  }

  .card:hover .views,
  .card:hover .card_tipe {
    transform: translate(0);
  }




  /* Button .. */
  .card .views {
    position: absolute;
    left: 10px;
    top: 131px;
    transition: all 0.5s ease 0.15s;
  }

  .bn632-hover {
    font-size: 16px;
    font-weight: 600;
    color: #c6a86b;
    cursor: pointer;
    padding: 2px 7px 1px 7px;
    text-align: center;
    border: none;
    background-size: 300% 100%;
    border-radius: 50px;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
  }

  .bn632-hover:hover {
    background-position: 100% 0;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
  }

  .bn632-hover:focus {
    outline: none;
  }

  .bn632-hover.bn18 {
    background-image: linear-gradient(to right, #1e2328, #1e2328, #3035dd, #007bab);
    border: 1px solid;

  }
</style>



<div style="text-align: center;">
  <ul class="pagination">
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
      <li><a href="javascript:void(0);" onclick="searchWithPagination(1, false, <?php echo $levelValue; ?>)">First</a></li>
      <li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $link_prev; ?>, false, <?php echo $levelValue; ?>)">&laquo;</a></li>
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
      <li<?php echo $link_active; ?>><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $i; ?>, false, <?php echo $levelValue; ?>)"><?php echo $i; ?></a></li>
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
        <li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $link_next; ?>, false, <?php echo $levelValue; ?>)">&raquo;</a></li>
        <li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $jumlah_page; ?>, false, <?php echo $levelValue; ?>)">Last</a></li>
      <?php
      }

      function DateToIndo($date)
      {
        $BulanIndo = array(
          "Januari", "Februari", "Maret", "April",
          "Mei", "Juni", "Juli", "Agustus", "September", "Oktober",
          "November", "Desember"
        );

        // memisahkan format tahun menggunakan substring
        $tahun = substr($date, 0, 4);

        // memisahkan format bulan menggunakan substring
        $bulan = substr($date, 5, 2);

        // memisahkan format tanggal menggunakan substring
        $tgl = substr($date, 8, 2);

        $result = $tgl . "-" . $BulanIndo[(int)$bulan - 1] . "-" . $tahun;

        return ($result);
      }

      ?>
  </ul>


  <div style=" font-size: 15px; font-weight: 800;margin-top: -10px; ">Total <?php echo $get_jumlah['jumlah_row']; ?> </div>

</div>