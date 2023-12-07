<!DOCTYPE html>
<html lang="id">
<head>
	<!-- <link rel="icon" type="image/png" href="img/internetclan.ico"> -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta charset="utf-8">
	<title>Aliansi anime subbed</title>
	<meta name="description" content="Animeclan merupakan website streaming / menonton dan mendownload anime dengan gaya, ber-subtitle indo dan english" />

</head>

<style>
#navibaru form{     background: #404040;
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
#navibaru form input{      background: #343638;
    border: none;
    font-weight: lighter;
    height: 26px;
    font-style: italic;}
#navibaru a{ position: relative;
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
 #navibaru a:nth-child(1) {

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
.active, .btn:hover {
  background-color: #666;
  color: white;
}





.logo1{ padding: 0%;}
 .logo1 img{    width: 6%;
    float: left;
    border-radius: 50%;
    padding: 0%;
    filter: grayscale(90%);
    margin: 16px;
    box-sizing: border-box;
    box-shadow: rgb(50 229 255 / 65%) 0px 1px 4px;
}

 .header1 {    float: left;
    padding: 1%;
    font-weight: 900;
    font-family: tahoma;
    background: linear-gradient(to right, #1c77d4 0, #00c3ff 10%, #333537 20%);
    background-position: 0;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: shine 3s infinite linear;
    animation-fill-mode: forwards;
    -webkit-text-size-adjust: none;
    font-style: italic;}
@keyframes shine {
  0% {
    background-position: 0;
  }
  50% {
    background-position: 150px;
  }
  100% {
    background-position: 400px;
  }
}


body {
 
background: #333!important;
}

.topnav {
     overflow: hidden;
    border-width: 0.5px;
    border-style: solid;
    border-image: linear-gradient(to right bottom, #26b2f5, #252728);
    border-image-slice: 1;
    border-top: none;
    border-left: none;
    border-right: none;
}

.topnav a {    font-family: system-ui;
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
  background-color: #fff;
  color: #bfbfbf;
}

.topnav a.active {
  background-color: darkorange;
  color: white;
}

.topnav .icon {
  display: none;
}



#main{background: #232526;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #414345, #232526);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #414345, #232526); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

</style>





<body>


<div class="topnav" id="myTopnav">
  <a href="index.php?page=beranda" id="btn1" style="color:#e4e4e4">Home</a>
<!--   <a href="index.php?page=" id="btn2" >Season</a>
  <a href="index.php?page=about" id="btn6">Fansub</a>
  <a href="index.php?page=about" id="btn6">About</a>
  <a href="index.php?page=" id="btn2" >Join</a> -->

  <a href="javascript:void(0);" class="icon" onclick="myFunction()" style="padding: 0">
    <img src="img/menu.png" style="width: 12%;position: fixed;    top: 0px;    right: 5px; z-index: 99" />
  </a>
</div>

<div style="padding-left:16px; width:100%;    overflow: auto; background: #232526;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #414345, #232526);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #414345, #232526); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
 <!--  <center class="logo1"><img src="img/internetclan.ico"/></center> -->
  <h1 class="header1 " style="">Aliansi</h1>
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
    $page = (isset($_GET['page']))? $_GET['page'] : "main";
            switch ($page) {
              #v/
              case 'beranda' : include "beranda.php"; break; 

                case 'about' : include "about.php"; break;



             
                case 'beranda' :
                default : include 'beranda.php';  
            }
         
            ?>


</div>








	
			<footer>
				

				<div  style="text-align: center; margin:0px;padding: 0px;">
				<h5 style="color: black;color: #a27219;font-weight: 700;">© 2021</h5>
				
				</div>
			</footer>

	

</body>
</html>
