<?php
include("database_connection.php");

if(isset($_POST['search']) && $_POST['search'] == true){ $param = $keywordsidebar;
    if ($param == "sidebar-btn-musim") {
         $sql =$connect->prepare("SELECT musim,tahun FROM anime  group by musim order by musim desc")or die("Gagal mengecek user di database");
        $sql->execute(); 

        echo '<button class="sidebar-kategori-btn-reset">Reset</button><div class="sidebar-kategori"><ul>';
        while($row = $sql->fetch()){ $memisahkanmusim = substr($row["musim"],4,7); $memisahkantahun = substr($row["musim"],0,4);
        echo ' <li class="sidebar-btn-li limusim"><input class="sidebar-cb-musim" type="checkbox" value="'.$row["musim"].'"/><span class="sidebar-btn-musim-span " id="'.$row["musim"].'">'.$memisahkanmusim.'</span><b>'.$memisahkantahun.'</b></li>';
        }
        echo  '</ul></div>';
    }

     else if ($param == "sidebar-btn-tahun") {
        $sql =$connect->prepare("SELECT tahun FROM anime group by tahun order by tahun desc")or die("Gagal mengecek user di database");
        $sql->execute(); 

        echo '<button class="sidebar-kategori-btn-reset">Reset</button><div class="sidebar-kategori"><ul>';
        while($row = $sql->fetch()){ 
        echo ' <li class="sidebar-btn-li litahun"><input class="sidebar-cb-tahun" type="checkbox" value="'.$row["tahun"].'"/><span class="sidebar-btn-tahun-span " id="'.$row["tahun"].'">'.$row["tahun"].'<span></li>';
        }
        echo  '</ul></div>';
    }

    else if ($param == "sidebar-btn-studio") {
        $sql =$connect->prepare("SELECT studio FROM anime group by studio order by studio desc")or die("Gagal mengecek user di database");
        $sql->execute(); 

        echo '<button class="sidebar-kategori-btn-reset">Reset</button><div class="sidebar-kategori"><ul>';
        while($row = $sql->fetch()){ 
        echo ' <li class="sidebar-btn-li "><input class="sidebar-cb-studio" type="checkbox" value="'.$row["studio"].'"/><span class="sidebar-btn-studio-span " id="'.$row["studio"].'">'.$row["studio"].'<span></li>';
        }
        echo  '</ul></div>';
    }

    else if ($param == "sidebar-btn-genre") {
        $sql =$connect->prepare("SELECT nama FROM genre order by nama ")or die("Gagal mengecek user di database");
        $sql->execute(); 

        echo '<button class="sidebar-kategori-btn-reset">Reset</button><div class="sidebar-kategori"><ul>';
        while($row = $sql->fetch()){ 
        echo ' <li class="sidebar-btn-li "><input class="sidebar-cb-genre" type="checkbox" value="'.$row["nama"].'"/><span class="sidebar-btn-genre-span " id="'.$row["nama"].'">'.$row["nama"].'<span></li>';
        }
        echo  '</ul></div>';
    }


    else{
       
    }
}else{
    $sql =$connect->prepare("SELECT nama FROM genre order by nama ")or die("Gagal mengecek user di database");
    $sql->execute(); 


 echo '<button class="sidebar-kategori-btn-reset">Reset</button><div class="sidebar-kategori"><ul>';
        while($row = $sql->fetch()){ 
        echo ' <li class="sidebar-btn-li "><input class="sidebar-cb-genre" type="checkbox" value="'.$row["nama"].'"/><span class="sidebar-btn-genre-span " id="'.$row["nama"].'">'.$row["nama"].'<span></li>';
        }
        echo  '</ul></div>';
}



?>



<style type="text/css">
.sidebar-kategori{color: #e4e4e4;
    width: 100%;}
.sidebar-kategori ul{    list-style: none;
    padding: 1%;
    padding: 0px;
    margin: 1%;
    text-transform: capitalize;
    width: 99%;
    display: flex;
    flex-flow: wrap;}

.sidebar-kategori ul li{      width: 32.5%;
    padding: 5px 0px 0px 3px;
    line-height: 13px;
    height: 25px;
    margin: 1px 1px 1px 1px;
    border-radius: 3px 3px 3px 3px;
 }
.sidebar-kategori ul li:nth-child(2){ width:32.5%;}
.sidebar-kategori ul li:nth-child(3){  width: 32.5%;}

.sidebar-kategori ul li input{      cursor: pointer;
    vertical-align: middle;
    position: relative;
    bottom: 4px;}

.sidebar-kategori ul li span{  transition: 0.5s;  cursor: pointer;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    text-overflow: ellipsis;
    -webkit-box-orient: vertical;
    padding: 0px 0px 0px 0px;
    overflow: hidden;
    font-size: 12px;
    position: relative;
    bottom: 17px;
    left: 18px;
    width: 92%;
    vertical-align: middle;

}
.sidebar-kategori ul li span:after {
       max-width: 92%;
    height: 1px;
    display: block;
    content: "";
    background: linear-gradient( 
-90deg
 , #252728 0%, #c6a86b 50%, #009eff 0%);
    position: relative;
    bottom: 0px;
    left: 0px;
}
.sidebar-kategori ul li:hover {
   color: #a9a9a9;
}
.sidebar-selectedbtn{    color: #c6a86b;
    font-weight: 600; }

.sidebar-kategori-btn-reset {
 display: inline-block;
    padding: 0.5em 1.7em;
    margin: 14px 0.1em 0.1em 14px;
    border: 0.16em solid rgb(4 114 181);
    background-color: rgb(30 35 40);
    border-radius: 2em;
    box-sizing: border-box;
    text-decoration: none;
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    color: #ffffff;
    text-shadow: 0 0.04em 0.04em rgb(0 0 0 / 35%);
    text-align: center;
    transition: all 0.2s;
}

.sidebar-kategori-btn-reset:hover {
  border-color: rgb(255, 255, 255);
}



/* CSS tahun
   ================================  */
.litahun{        width: 22.5%!important;
    border: 2px solid #0472b5;
    border-top: none;
    border-right: none;
    border-left: none;
    background: #1e2328;
    margin: 2px 3px 3px 2px!important;}
  .sidebar-btn-tahun-span:after{
      height: auto!important;
   background: none!important;
  }


/* CSS musim
   ================================  */
.limusim{    width: 23.5%!important;
    padding: 5px 0px 0px 2px!important;
    line-height: 35px!important;
    height: 33px!important;

    background: #4e4e4e!important;
    border: 1px solid #4e4e4e;
    border-top: none;
    border-right: none;
    border-left: none;}
.sidebar-cb-musim{    cursor: pointer;
    vertical-align: middle;
    position: relative;
    bottom: 9px!important;
    left: 4px;
    width: 21px;
    height: 31px;}
.sidebar-btn-musim-span{   
    bottom: 12px!important;
    left: 9px!important;
    width: 92%;
display:initial!important;
  overflow: hidden;}
  .sidebar-btn-musim-span:after{
      height: auto!important;
   background: none!important;
  }
.limusim b{    font-size: 10px!important;
    color: #c6a86b!important;
    font-weight: 600!important;
    position: relative;
    bottom: 36px;
    left: 30px!important;
}
  </style>



