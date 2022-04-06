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

  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="true" data-bs-interval="100">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php  
        for ($x = 1; $x <= GetTotal($conn, TBLSLIDER); $x++) {
        ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $x; ?>" class="<?php if ($id == $x){echo "active";} ?>"></li>
      <?php  
      }
      ?>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <!--<div class="item">
        <img src="img_chania.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>-->
    <div class="item active">
      <img src="<?php echo WEBSITE_URL; ?>./images/slider/<?php echo $row['slider_img']; ?>" style="width:1000px; height: 500px;">
      <div class="carousel-caption">
        <p hidden><?php echo $id; ?></p>
        <h3><?php echo $title; ?></h3>
        <p><?php echo $content; ?></p>
      </div>
    </div>
      <!--<div class="item">
        <img src="img_flower.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>

      </div>
      <div class="item">
        <img src="img_chania2.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img_flower2.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
    </div>-->

    <!-- Left and right controls -->
    <a class="left carousel-control" href="<?php echo __DIR__; ?>?pre" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="<?php echo __DIR__; ?>?next" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!--<button onclick="openFullscreen();" class="btn btn-light btn-lg pull-right"><span class="glyphicon glyphicon-fullscreen"></span></button>
<h2 class="strong">SlideShow</h2>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-bs-interval="1000">-->
  <!-- Wrapper for slides -->
  <!--<div class="carousel-inner">
    <div class="item active">
      <img src="<?php //echo WEBSITE_URL; ?>./images/slider/<?php //echo $slider_img; ?>" style="width:1000px; height: 500px;">
      <div class="carousel-caption">
        <h3><?php //echo $title; ?></h3>
        <p><?php //echo $content; ?></p>
      </div>
    </div>
  </div>-->
  <!-- Left and right controls-->
  <!--<a class="left carousel-control" href="<?php //echo WEBSITE_URL; ?>./dashboard.php?slide_no=<?php //echo $slide_no-1; ?>" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="<?php //echo WEBSITE_URL; ?>./dashboard.php?slide_no=<?php //echo $slide_no+1; ?>" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script>
/* Get the element you want displayed in fullscreen */ 
var elem = document.getElementById("myCarousel");

/* Function to open fullscreen mode */
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}
</script>-->