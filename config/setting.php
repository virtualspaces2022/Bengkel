

<?php
$hostname="localhost";
$userdb="root";
$passwd="";
$database="bengkel";

//all setting above is for you to connect to database
//below is to command for connection to db
$virtual_con=new mysqli($hostname,$userdb,$passwd,$database);
 //or trigger_error(mysql_error(),E_USER_ERROR);

 // Check connection
if ($virtual_con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }else{
    //echo "connected";
  }
$conn=$virtual_con;
//isset uji variable wujud atau tidak
if (isset($_GET['id'])){
    $selected=$_GET['id'];
}

//echo $selected;
//$urlpic="images/restaurant.jpg";
$title1="coming soon";
if (isset($_GET['id'])){
    $title1=$title1.$selected;
}
$fblink="fblink.com";
$xlink="xlink";
$email="sheikhnasir@vsc.com";
$soon="Promosi terkini";
$join="Sila langgani promosi dan masukkan email";
$find="Cari kan kami di Tiktok dan Mudah";
$footer="Website Links";

?>