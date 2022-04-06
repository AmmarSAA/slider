<?php 

/**************************
* File Name: slider.php   *
* Author: Ammar S.A.A     *
* Output: Carousel        *
**************************/

$id               = '';
$slide_no         = '';
$title            = '';
$slider_img       = '';
$content          = '';
$creation_date    = '';
$updation_date    = '';

if (isset($_GET['slide_no']))
{
  $slide_no = $_GET['slide_no'];
  if ($slide_no < 1) {
    $slide_no = GetTotal($conn,TBLSLIDER) ;
  }elseif ($slide_no > GetTotal($conn,TBLSLIDER)) {
    $slide_no = 1 ;
  }
  
$sql = "SELECT * FROM `tblslider` WHERE slide_no={$slide_no}";
$result = $conn->query($sql);
  if ($result && $result->num_rows > 0){
    $row = $result->fetch_assoc();
    $id               = $row['id'];
    $slide_no         = $row['slide_no'];
    $title            = $row['title'];
    $slider_img       = $row['slider_img'];
    $content          = $row['content'];
    $creation_date    = $row['creation_date'];
    $updation_date    = $row['updation_date'];
  };    
}else{
$sql= "SELECT * FROM tblslider";

$result = $conn->query($sql);
  if ($result && $result->num_rows > 0){
    $row = $result->fetch_assoc();
    $id               = $row['id'];
    $slide_no         = $row['slide_no'];
    $title            = $row['title'];
    $slider_img       = $row['slider_img'];
    $content          = $row['content'];
    $creation_date    = $row['creation_date'];
    $updation_date    = $row['updation_date'];
  };
}

?>                  

<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo WEBSITE_URL; ?>./images/slider/<?php echo $slider_img; ?>" style="width:1000px; height: 500px;">
      <div class="carousel-caption">
        <h3><?php echo $title; ?></h3>
        <p><?php echo $content; ?></p>
      </div>
    </div>
  </div>
  <!-- Left and right controls-->
  <a class="left carousel-control" href="<?php echo WEBSITE_URL; ?>./dashboard.php?slide_no=<?php echo $slide_no-1; ?>" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="<?php echo WEBSITE_URL; ?>./dashboard.php?slide_no=<?php echo $slide_no+1; ?>" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>