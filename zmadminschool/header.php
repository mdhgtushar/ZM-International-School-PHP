<?php 
include "data/config.php";
include "data/Database.php";
include "data/Session.php";
session::checkSession();
$db = new Database();
?>
<html>
    <head>
        <link rel="icon" href="https://scontent.fdac24-1.fna.fbcdn.net/v/t1.15752-9/116341489_326979905136710_7709470591531769969_n.jpg?_nc_cat=102&_nc_sid=b96e70&_nc_eui2=AeHsf-vKeVDjSHzSzUNJftfNuTico8y4JIm5OJyjzLgkibbDBAcEWwSLKX-XEiv_FCQhxanAHQHoc4Zgw2OZ8bKO&_nc_ohc=rdGGUK0gg2cAX-S-Vd5&_nc_ht=scontent.fdac24-1.fna&oh=4bf4a1cde516ef8d676c7ccfc7754d28&oe=5F4F68F1">
        <title>Z.M.INTERNATIONAL SCHOOL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Merriweather:300,300i,400,400i,700,700i,900,900i|Noto+Sans:400,400i,700,700i&display=swap">
<style>
	.edit{color:red!important;}
body{background-color: #fff;color:#000;}
*{margin: 0;padding: 0; text-decoration: none;font-family:'Noto Sans Bengali UI', Roboto, sans-serif !important;}
.container{max-width: 1200px;margin: 0 auto;}
.wdlf{width: 75%;float: left;}
.wdhlf{width: 50%;float: left;}
.wdrg{width: 25%;float: right;}
.bgcolor{background-color: #e6f7e5}
.nav1{box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1), 0 3px 6px rgba(0, 0, 0, 0);margin-bottom: 1px;overflow: hidden;color: black;font-weight: old;margin: 0px 5px;}
.nav1left{float: left;}
.nav1left p{padding: 10px;}
.nav1right{float: right;}
.nav1right a, p{padding: 10px;display: block;}
.nav2{overflow: hidden; background-color:white;color: black;box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1), 0 3px 6px rgba(0, 0, 0, 0);margin:0 5px;margin-bottom: 4px;}
.nav3{z-index: 1000; overflow: hidden; color: black;font-weight: bold;box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1), 0 3px 6px rgba(0, 0, 0, 0);margin: 0px 5px;margin-bottom: 5px;}
.fl-l{float: left;}
.fl-r{float: right;}
.logoimg{padding: 10px;float: left;}
.logoimg img{height: 60px;border-radius: 50%}
.logotitle{padding: 11px 0;}
.logotitle h2{font-size: 20px;margin-top: 7px}
.menu{}
.menu a {display: inline-block;padding: 10px;color: black;}
.sidebar{overflow: hidden; margin: 5px;box-shadow: 0px 0px 20px -20px rgba(0, 0, 0, 0.3), 0 0 3px 2px rgba(0, 0, 0, 0.06);}
.noticebord h2{padding: 13px; border-bottom: 2px solid #f1f1f1;background-color: #e6f7e5;}
.noticebord p{padding: 10px; border-bottom: 1px solid #f1f1f1;}
.headteacher{overflow: hidden; margin: 5px;box-shadow: 0px 0px 20px -20px rgba(0, 0, 0, 0.3), 0 0 3px 2px rgba(0, 0, 0, 0.06);padding-bottom:10px ;}
.headteacher img{height:;width: 100%;padding: 2px;border: 1px solid #999;}
.teacherdescplft{width: 30%; text-align: center;float: left;}
.teacherdescplft h2{margin-top: 5px;}
.teacherdescprgt{width: 70%; text-align: center;float: left;}
.teacherdescplft h2{margin-top: 5px;}
.wd3{width: 25%;float: left;}
.wd6{width: 50%;float: left;}
.footermenu{display: block;padding: 3px;padding-left: 10px;color: #666}
a:hover{color: red;transition: .5s;}
.btn{padding: 3px 10px;display: block;background: #e6f7e5;border: 1px solid #666;border-radius: 3px;text-align: center;color: black;}
.smwd70 h2{padding-bottom: 4px}
.sticky {  position: fixed;  top: 0;  width: 1190px;}
.sticky + .content {  padding-top: 102px;}
.smwd40{    width: 40%;    float:left;  }
.smwd70{    width: 60%;    float:left;  }
@media only screen and (min-width:801px) {
.xnone{display: none;}
}
@media only screen and (max-width:800px) {
  .teacherdescplft,.teacherdescprgt,.wdlf,.wdrg,.wd6,.wdhlf{width: 100%;}  .wd3{width: 50%;}  .smnone{display: none;  }  h4{font-size: 15px;}  h2,h3{font-size: 18px}  a{font-size: 15px; }  p{font-size: 14px}  .nav1,.nav2,.nav3{margin: 0}
   .headteacher img{width: 100%;}
}
</style>
    </head>
    <body  onload="startTime()">
        <section>
            <nav class="">
               
                    <div class="container">
                <div class="nav1 smnone bgcolor">
                        <div class="nav1left"><p>
                        Email: <?php $id = 11;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=11">edit</a>
                          ||  Mob: <?php $id = 10;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=10">edit</a></p></div>
                        <div class="nav1right"><a class="fl-r" href=""> Developer</a></div>
                    </div>                    
                </div>
                    <div class="container">
                <div class="nav2">
                        <div>
                            <div class="logoimg"><img src="https://scontent.fdac24-1.fna.fbcdn.net/v/t1.15752-9/116341489_326979905136710_7709470591531769969_n.jpg?_nc_cat=102&_nc_sid=b96e70&_nc_eui2=AeHsf-vKeVDjSHzSzUNJftfNuTico8y4JIm5OJyjzLgkibbDBAcEWwSLKX-XEiv_FCQhxanAHQHoc4Zgw2OZ8bKO&_nc_ohc=rdGGUK0gg2cAX-S-Vd5&_nc_ht=scontent.fdac24-1.fna&oh=4bf4a1cde516ef8d676c7ccfc7754d28&oe=5F4F68F1" alt=""></div>
                            
                                
                            <div class="logotitle"> 
                                <h2><?php $id = 12;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=12">edit</a></h2>
                                <h4><?php $id = 13;
                        $query = "SELECT * FROM themetext WHERE id=$id";
                        $getData = $db->select($query)->fetch_assoc();
                        echo $getData['text'];?>
                        <a class="edit" target="blank" href="txtedit.php?id=13">edit</a></h4>
                             </div>
                        </div>
                    </div>
                </div>
                    <div class="container">
                <div class="nav3  bgcolor" id="myHeader">
                        <div class="menu smnone" >
                            <a href="index.php">HOME</a>
                            <a href="teachers.php">TEACHERS</a>
                            <a href="students.php">STUDENTS</a>
                            <a href="magazine.php">SCHOOL MAGAZINE</a>
                            <a href="gallery.php">SCHOOL GALLERY</a>
                            <a href="admit.php">ADMISSION</a>
                            <a href="notice.php">NOTICE BORD</a>
                            <a href="result.php">RESULT</a>

                            <a class="fl-r" href="logout.php">logout</a>
                        </div>
                         <div class="menu xnone">
                            <svg style="font-size: 25px;margin: 7px;float: left;" onclick="openNav()" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-text-indent-left mr15 dsp-xsmblock dsp-smblock dsp-mdblock dsp-none" fill="currentColor" xmlns="http://www.w3.org/2000/svg">  <path fill-rule="evenodd" d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path></svg>
                            <a href="#" onclick="openNav()">MENU</a>
                            <a class="fl-r" href="">Login</a>
                            <a class="fl-r" href="">Signup</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <a href="index.php">HOME</a>
                            <a href="teachers.php">TEACHERS</a>
                            <a href="students.php">STUDENTS</a>
                            <a href="magazine.php">SCHOOL MAGAZINE</a>
                            <a href="gallery.php">SCHOOL GALLERY</a>
                            <a href="admit.php">ADMISSION</a>
                            <a href="notice.php">NOTICE BORD</a>
                            <a href="result.php">RESULT</a>

                            <a class="fl-r" href="logout.php">logout</a>
</div>
<style>
body {
  font-family: "Lato", sans-serif;
}
.sidenav {  height: 100%;  width: 0;  position: fixed;  z-index: 1;  top: 0;  left: 0;  background-color: #e6f7e5;
  overflow-x: hidden;  transition: 0.5s;  padding-top: 80px;}
.sidenav a {  padding: 8px 8px 8px 32px;  text-decoration: none;  color: #000;  display: block;  transition: 0.3s;}

.sidenav a:hover {  color: #f1f1f1;}

.sidenav .closebtn {  position: absolute;  top: 0;  right: 25px;  font-size: 36px;  margin-left: 50px;  padding-top: 50px;}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
        </section>


<script>
window.onscroll = function() {myFunction()};
var header = document.getElementById("myHeaderooo");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

