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
    background-image: linear-gradient(231deg, rgba(233, 233, 233, 0.01) 0%, rgba(233, 233, 233, 0.01) 25%, rgba(10, 10, 10, 0.01) 25%, rgba(10, 10, 10, 0.01) 50%, rgba(237, 237, 237, 0.01) 50%, rgba(237, 237, 237, 0.01) 75%, rgba(200, 200, 200, 0.01) 75%, rgba(200, 200, 200, 0.01) 100%), linear-gradient(344deg, rgba(2, 2, 2, 0.03) 0%, rgba(2, 2, 2, 0.03) 20%, rgba(10, 10, 10, 0.03) 20%, rgba(10, 10, 10, 0.03) 40%, rgba(100, 100, 100, 0.03) 40%, rgba(100, 100, 100, 0.03) 60%, rgba(60, 60, 60, 0.03) 60%, rgba(60, 60, 60, 0.03) 80%, rgba(135, 135, 135, 0.03) 80%, rgba(135, 135, 135, 0.03) 100%), linear-gradient(148deg, rgba(150, 150, 150, 0.03) 0%, rgba(150, 150, 150, 0.03) 14.286%, rgba(15, 15, 15, 0.03) 14.286%, rgba(15, 15, 15, 0.03) 28.572%, rgba(74, 74, 74, 0.03) 28.572%, rgba(74, 74, 74, 0.03) 42.858%, rgba(175, 175, 175, 0.03) 42.858%, rgba(175, 175, 175, 0.03) 57.144%, rgba(16, 16, 16, 0.03) 57.144%, rgba(16, 16, 16, 0.03) 71.42999999999999%, rgba(83, 83, 83, 0.03) 71.43%, rgba(83, 83, 83, 0.03) 85.71600000000001%, rgba(249, 249, 249, 0.03) 85.716%, rgba(249, 249, 249, 0.03) 100.002%), linear-gradient(122deg, rgba(150, 150, 150, 0.01) 0%, rgba(150, 150, 150, 0.01) 20%, rgba(252, 252, 252, 0.01) 20%, rgba(252, 252, 252, 0.01) 40%, rgba(226, 226, 226, 0.01) 40%, rgba(226, 226, 226, 0.01) 60%, rgba(49, 49, 49, 0.01) 60%, rgba(49, 49, 49, 0.01) 80%, rgba(94, 94, 94, 0.01) 80%, rgba(94, 94, 94, 0.01) 100%), linear-gradient(295deg, rgba(207, 207, 207, 0.02) 0%, rgba(207, 207, 207, 0.02) 25%, rgba(47, 47, 47, 0.02) 25%, rgba(47, 47, 47, 0.02) 50%, rgba(142, 142, 142, 0.02) 50%, rgba(142, 142, 142, 0.02) 75%, rgba(76, 76, 76, 0.02) 75%, rgba(76, 76, 76, 0.02) 100%), linear-gradient(73deg, rgba(81, 81, 81, 0.03) 0%, rgba(81, 81, 81, 0.03) 12.5%, rgba(158, 158, 158, 0.03) 12.5%, rgba(158, 158, 158, 0.03) 25%, rgba(136, 136, 136, 0.03) 25%, rgba(136, 136, 136, 0.03) 37.5%, rgba(209, 209, 209, 0.03) 37.5%, rgba(209, 209, 209, 0.03) 50%, rgba(152, 152, 152, 0.03) 50%, rgba(152, 152, 152, 0.03) 62.5%, rgba(97, 97, 97, 0.03) 62.5%, rgba(97, 97, 97, 0.03) 75%, rgba(167, 167, 167, 0.03) 75%, rgba(167, 167, 167, 0.03) 87.5%, rgba(22, 22, 22, 0.03) 87.5%, rgba(22, 22, 22, 0.03) 100%), linear-gradient(90deg, hsl(137, 0%, 23%), hsl(137, 0%, 23%));
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



  #navibaru {
    padding-top: 1em;
  }

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

      case 'link':
        include "footer/link.php";
        break;


      case 'beranda':
      default:
        include 'anime/beranda.php';
    }
    ?>
  </div>







  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");



    .footer {
      position: relative;
      width: 100%;
      background: #1d2328;
      min-height: 100px;
      padding: 20px 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .social-icon,
    .menu {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 10px 0;
      flex-wrap: wrap;
      padding: 0;
    }

    .social-icon__item,
    .menu__item {
      list-style: none;
    }

    .social-icon__link {
      font-size: 2rem;
      color: #fff;
      margin: 0 10px;
      display: inline-block;
      transition: 0.5s;
    }

    .social-icon__link:hover {
      transform: translateY(-10px);
    }

    .menu__link {
      cursor: pointer;
      font-size: 1.2rem;
      color: #fff;
      margin: 0 10px;
      display: inline-block;
      transition: 0.5s;
      text-decoration: none;
      opacity: 0.75;
      font-weight: 300;
    }

    .menu__link:hover {
      opacity: 1;
    }

    .footer p {
      color: #fff;
      margin: 15px 0 10px 0;
      font-size: 1rem;
      font-weight: 300;
    }
  </style>
  <footer class="footer">
    <ul class="social-icon">
    </ul>
    <ul class="menu">
    </ul>

    <p><a style="color: #ffffff;" href="https://yusup-maulana.github.io/">© yusup-maulana.github.io - 2021 v1.2</a></p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<script>
  async function footer_link() {
    const option = {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      }
    };

    try {
      const response = await fetch('footer/action_link.php', option);
      const responseData = await response.json();
      const datafromServer = responseData.data;
      const menu = document.querySelector('.menu');
      datafromServer.forEach(item => {
        const li = document.createElement('li');
        const b = document.createElement('b');
        b.className = 'menu__link';
        b.textContent = item.nama;
        b.id = item.id;
        li.appendChild(b);
        menu.appendChild(li);
      });
      addclickfooter_link();
    } catch (error) {
      console.error('Error:', error);
    }
  }
  footer_link();


  async function addclickfooter_link() {
    const menu__links = document.querySelectorAll(".menu__link");
    menu__links.forEach(function(menu__link) {
      menu__link.addEventListener('click', function() {
        let id = this.id; // Pastikan ID sudah diatur pada elemen <a>
        window.location.href = "index.php?page=link&link=" + id;
      });
    });
  }




  async function footer_medsos() {
    const option = {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      }
    };

    try {
      const response = await fetch('footer/action_medsos.php', option);
      const responseData = await response.json();
      const datafromServer = responseData.data;
      const menu = document.querySelector('.social-icon');
      datafromServer.forEach(item => {
        const li = document.createElement('li');
        li.className = 'social-icon__item';
        const a = document.createElement('a');
        a.className = 'social-icon__link';
        a.innerHTML = '<ion-icon name="logo-' + item.nama + '"></ion-icon>';
        a.href = item.link;
        li.appendChild(a);
        menu.appendChild(li);
      });
    } catch (error) {
      console.error('Error:', error);
    }
  }
  footer_medsos();
</script>

</html>