

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
$today=date("Y/m/d");

if (isset($_GET['id'])){
    $sql="select * from promosi where id=".$_GET['id']; 

 //echo $sql;
}else if (!(isset($_GET['id']))){
    $sql="select * from promosi where statusdate='".$today."'";
}
        if ($result=$virtual_con->query($sql)){
            $row=$result->fetch_assoc();
            $title1=$row['title'];
            $urlpic=$row['picture'];
            $fblink=$row['fblink'];;
            $xlink=$row['xlink'];
            $email=$row['email'];
            $soon=$row['soon'];
        }
else{
$urlpic="images/restaurant.jpg";
$fblink="fblink.com";
$xlink="xlink";
$email="sheikhnasir@vsc.com";
$soon="Promosi terkini";

}
$join="Sila langgani promosi dan masukkan email";
$find="Cari kan kami di Tiktok dan Mudah";
$footer="Website Links";
?>