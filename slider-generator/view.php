<!--<!DOCTYPE html>
<html>
<head>
  <title>Slide Generator</title>
  <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrap.min.js"></script>
    <style>
    </style>
</head>-->

<?php

require('config.php');
require(WEBSITE_PATH.'./includes/db_connection.php');
require(WEBSITE_PATH.'./includes/session.php');
include(WEBSITE_PATH.'./includes/header.php');
include(WEBSITE_PATH.'./includes/logo.php');
include(WEBSITE_PATH.'./includes/menu.php');

$title = isset($_POST['title']) ? htmlentities($_POST['title']) : "Slide Generator";

$fname = "Dr. ".$_POST['fname'] ;
$ename = $_POST['ename'] ;
$faname = $_POST['mname'];
$mname = $_POST['faname'];
//$dname = $_POST['dname'];
//$nid = $_POST['nid'];
$si=$_POST['si'];
$save = 'C:/xampp/htdocs/slider/images/slider/'.str_replace(" ","_",$mname).'.jpg';
$_SESSION['card']=$save; 
$bgpic = imagecreatefrompng("card.png");
$textcolor = imagecolorallocate($bgpic,255,255,255);
$infcolor = imagecolorallocate($bgpic,0,0,0);
$stscolor = imagecolorallocate($bgpic,0x00,0x55,0x00);
$ttscolor = imagecolorallocate($bgpic,255,0,0);
$font=__DIR__ ."/fonts/verdana.ttf";
$f2=__DIR__ ."/fonts/sm.ttf";
$f3=__DIR__ ."/fonts/sign.ttf";
$f4=__DIR__ ."/fonts/avro.ttf";
//imagestring($bgpic,7,30,5,$title,$textcolor);
//echo($f4);

imagettftext($bgpic,18, 0,242,150,$infcolor,$f4,$fname);
imagettftext($bgpic,14, 0,242,185,$infcolor,$font,$ename);
imagettftext($bgpic,18, 0,242,215,$infcolor,$f4,$faname);
imagettftext($bgpic,15, 0,242,122,$infcolor,$f4,$mname);
//imagettftext($bgpic,15, 0,291,278,$ttscolor,$font,$dname);
//imagettftext($bgpic,15, 0,254,311,$ttscolor,$font,$nid);
imagettftext($bgpic,10, 0,35,300,$infcolor,$f3,$si);

$avl = $_FILES['file']['tmp_name'];
if(trim($avl!=""))
{
  $imgi = getimagesize($avl);
  if($imgi[0]>0)
  {
      if($imgi[2]==1)
      {
        $av = imagecreatefromgif($avl);
        imagecopyresized($bgpic, $av,39,152,0,0,100,120,$imgi[0], $imgi[1]);
      }else if($imgi[2]==2)
      {
        $av = imagecreatefromjpeg($avl);
        imagecopyresized($bgpic, $av,39,152,0,0,100,120,$imgi[0], $imgi[1]);
      }else if($imgi[2]==3)
      {
        $av = imagecreatefrompng($avl);
        imagecopyresized($bgpic, $av,39,152,0,0,100,120,$imgi[0], $imgi[1]);
      }
  }
}
imagepng($bgpic,$save);
imagedestroy($bgpic);
$sql = "INSERT INTO `tblslider`(`slider_img`) 
        VALUES ('{$mname}.jpg')";
$result = $conn->query($sql);
if (isset($result))
{
  header("Location: ".$save); 
  $msg = "<div class='alert alert-success text-capitalize'>created successfully!</div>";
}else{
  $msg = "<div class='alert alert-danger text-capitalize'>Errors occured!</div>"; 
}


echo $msg;

?>

<body>
  <center><img src="<?php  echo($save);  ?>"/></center>
</body>

<?php
include(WEBSITE_PATH.'./includes/footer.php');
?>