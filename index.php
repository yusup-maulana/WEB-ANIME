<!DOCTYPE html>
<html lang="id">
<link rel="icon" type="image/x-icon" href="img/f.ico">

<head>
  <!-- <link rel="icon" type="image/png" href="img/internetclan.ico"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Aliansi anime subbed</title>
  <meta name="description" content="Animeclan merupakan website streaming / menonton dan mendownload anime dengan gaya, ber-subtitle indo dan english" />

  <script defer src="new asset/imageobserve.js"></script>
</head>

<style>
  body {
    background: #333 !important;
  }

  /* START
  NAVIGASI 1 --------------------------------------------------------------------------------------------------------------------  */
  .topnav {
    /* overflow: hidden; */
    border-width: 0.5px;
    border-style: solid;
    border-image: linear-gradient(to right bottom, #26b2f5, #252728);
    border-image-slice: 1;
    border-top: none;
    border-left: none;
    border-right: none;
  }

  .topnav a {
    font-family: system-ui;
    float: left;
    display: block;
    color: #868686;
    text-align: center;
    padding: 10px 16px;
    text-decoration: none;
    font-size: small;
    font-weight: 500;
  }

  .topnav a:hover {
    color: #bfbfbf;
    text-decoration: none;
  }

  .topnav a.active {
    background-color: darkorange;
    color: white;
  }

  .topnav .icon {
    display: none;
  }


  .main-menu1 {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
  }

  .main-menu1 li {
    position: relative;
  }

  .main-menu1 a {
    display: block;
    color: #fff;
    text-decoration: none;
  }

  .sub-menu1 {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #555;
    z-index: 2;
  }

  .sub-menu1 li {
    display: flex;
    width: 10em;
    background: #333333;
  }

  .sub-menu1 li:hover {
    background: #1e2328;
  }

  .sub-menu1 li>a:hover {
    color: #cdbe91;
  }

  .submenu:hover .sub-menu1 {
    display: block;
  }

  .sub-menu1 li>a {
    width: -webkit-fill-available;
    text-align: left;
  }

  /* END
  NAVIGASI 1 --------------------------------------------------------------------------------------------------------------------  */




  #navibaru form {
    background: #404040;
    position: relative;
    font-family: tahoma;
    display: inline-block;
    padding: 3px 3px;
    font-weight: bold;
    font-size: small;
    text-decoration: none;
    text-transform: capitalize;
    transition: 0.5s;
    letter-spacing: 0px;
    text-align: center;
    overflow: hidden;
    margin: 2px 0px -3px 0px;
    border: 1px solid;
    color: #cdbe91;
    box-shadow: inset 0 0 2px #cdbe91;
    border-image: linear-gradient(to bottom, #c8aa6d, #7a5c29);
    border-image-slice: 1;
    border-width: 1px;
  }

  #navibaru form input {
    background: #343638;
    border: none;
    font-weight: lighter;
    height: 26px;
    font-style: italic;
  }

  #navibaru a {
    position: relative;
    font-family: sans-serif;
    display: inline-block;
    padding: 7px 16px;
    font-weight: bold;
    font-size: small;
    text-decoration: none;
    text-transform: capitalize;
    border: 1px solid;
    transition: 0.5s;
    letter-spacing: 0px;
    text-align: center;
    overflow: hidden;
    margin: 2px -1px -3px 0px;
    background: #1e2328;
    color: #cdbe91;
    box-shadow: inset 0 0 2px #cdbe91;
    border-image: linear-gradient(to bottom, #c8aa6d, #7a5c29);
    border-image-slice: 1;
    border-width: 1px;
  }


  #navibaru a span {
    position: absolute;
    display: block;
  }


  #navibaru a span:nth-child(2) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #ffac12);
    animation: navibaru_animate1 2s linear infinite;
    animation-delay: 0.75s;
  }

  @keyframes navibaru_animate1 {
    0% {
      bottom: -100%;
    }

    50%,
    100% {
      bottom: 100%;
    }
  }



  #navibaru a:hover {
    background-color: #383c40;
  }


  #navibaru a.active {
    background-color: #797979;
    color: white;

  }

  .active,
  .btn:hover {
    background-color: #666;
    color: white;
  }



  .logo1 {
    padding: 0%;
  }

  .logo1 img {
    width: 6%;
    float: left;
    border-radius: 50%;
    padding: 0%;
    filter: grayscale(90%);
    margin: 16px;
    box-sizing: border-box;
    box-shadow: rgb(50 229 255 / 65%) 0px 1px 4px;
  }

  #main {
    background: #232526;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #414345, #232526);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #414345, #232526);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  }

  footer div {
    text-align: center;
    margin: 0px;
    padding: 0px;
  }

  footer div h5 {
    color: black;
    color: #a27219;
    font-weight: 700;
  }





  .card .img1 {
    background: linear-gradient(136deg, #36383a, #1d2328, #36383a);
    background-size: 600% 600% !important;
    -webkit-animation: Animationimgsplash 2s ease infinite;
    -moz-animation: Animationimgsplash 2s ease infinite;
    animation: Animationimgsplash 2s ease infinite;
  }

  .img1 img {
    object-fit: cover;
    filter: blur(20px);
    transition: all 3s;
  }

  @-webkit-keyframes Animationimgsplash {
    0% {
      background-position: 0% 55%
    }

    50% {
      background-position: 100% 46%
    }

    100% {
      background-position: 0% 55%
    }
  }

  @-moz-keyframes Animationimgsplash {
    0% {
      background-position: 0% 55%
    }

    50% {
      background-position: 100% 46%
    }

    100% {
      background-position: 0% 55%
    }
  }

  @keyframes Animationimgsplash {
    0% {
      background-position: 0% 55%
    }

    50% {
      background-position: 100% 46%
    }

    100% {
      background-position: 0% 55%
    }
  }
</style>





<body>
  <nav class="topnav" id="myTopnav">
    <ul class="main-menu1">
      <li><a href="index.php?page=beranda">Home</a></li>
      <li class="submenu">
        <a href="#">Level</a>
        <ul class="sub-menu1">
          <li><a href="index.php?page=level&level=1">Boring</a></li>
          <li><a href="index.php?page=level&level=2">Menarik</a></li>
          <li><a href="index.php?page=level&level=3">Wajib Tonton</a></li>
          <li><a href="index.php?page=level&level=4">Best Of The Best</a></li>
          <!-- Tambahkan submenu lainnya sesuai kebutuhan -->
        </ul>
      </li>
      <li class="submenu">
        <a href="#">Type</a>
        <ul class="sub-menu1">
          <li><a href="index.php?page=tipe&tipe=movie">Movie</a></li>
          <li><a href="index.php?page=tipe&tipe=tv">TV</a></li>
          <li><a href="index.php?page=tipe&tipe=ona">ONA</a></li>
          <li><a href="index.php?page=tipe&tipe=ova">OVA</a></li>
          <li><a href="index.php?page=tipe&tipe=bd">TV BD</a></li>
          <li><a href="index.php?page=tipe&tipe=movie bd">Movie BD</a></li>
          <li><a href="index.php?page=tipe&tipe=special">Special</a></li>
          <!-- Tambahkan submenu lainnya sesuai kebutuhan -->
        </ul>
      </li>
      <li><a href="admin/admin_utama.php">Admin</a></li>
    </ul>
  </nav>

  <div style="padding-left:16px; width:100%;    overflow: auto; background: #232526;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #414345, #232526);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #414345, #232526); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <!--  <center class="logo1"><img src="img/internetclan.ico"/></center> -->
    <br />
  </div>

  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>









  <div id="main">
    <?php
    $page = (isset($_GET['page'])) ? $_GET['page'] : "main";
    switch ($page) {
      case 'beranda':
        include "anime/beranda.php";
        break;

      case 'level':
        include "level/beranda.php";
        break;

      case 'tipe':
        include "tipe/beranda.php";
        break;



      case 'beranda':
      default:
        include 'anime/beranda.php';
    }
    ?>
  </div>









  <footer>
    <div>
      <h5><a href="https://yusup-maulana.github.io/">© yusup-maulana.github.io - 2021 v1.2</a></h5>
    </div>
  </footer>
  <!-- Tambahkan skrip ini di bagian bawah body atau di akhir file HTML -->
  <script>

  </script>
</body>

</html>