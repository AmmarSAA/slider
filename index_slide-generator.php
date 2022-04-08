<?php 

/****************************************
* File Name: index_slide-generator.php  *
* Author: Ammar S.A.A                   *
* Output: New slide generating Form     *
****************************************/

require('config.php');
require(WEBSITE_PATH.'./includes/db_connection.php');
require(WEBSITE_PATH.'./includes/session.php');
include(WEBSITE_PATH.'./includes/header.php');
include(WEBSITE_PATH.'./includes/logo.php');
include(WEBSITE_PATH.'./includes/menu.php');

if (isset($_POST['slide-create']))
{

    //getting from posted form
    $fname      = trim("Dr. ".$_POST['fname']);
    $ename      = trim($_POST['ename']);
    $faname     = trim($_POST['mname']);
    $mname      = trim($_POST['faname']);
    $si         = trim($_POST['si']);
    $avl        = $_FILES['file']['tmp_name'];
    
    //Inserting slide into database
    $sql = "INSERT INTO `tblslider`(`slider_img`) 
            VALUES ('{$mname}.jpg')";
    $result = $conn->query($sql);
    
    //If inserted into database then creating slide
    if ($result)
    {
        $save       = "./images/slider/".str_replace(" ","_",$mname).'.jpg';
        $bgpic      = imagecreatefrompng("card.png");
        $textcolor  = imagecolorallocate($bgpic,255,255,255);
        $infcolor   = imagecolorallocate($bgpic,0,0,0);
        $stscolor   = imagecolorallocate($bgpic,0x00,0x55,0x00);
        $ttscolor   = imagecolorallocate($bgpic,255,0,0);
        $font       = WEBSITE_PATH ."/fonts/verdana.ttf";
        $f2         = WEBSITE_PATH ."/fonts/sm.ttf";
        $f3         = WEBSITE_PATH ."/fonts/sign.ttf";
        $f4         = WEBSITE_PATH ."/fonts/avro.ttf";

        imagettftext($bgpic,18, 0,242,150,$infcolor,$f4,$fname);
        imagettftext($bgpic,14, 0,242,185,$infcolor,$font,$ename);
        imagettftext($bgpic,18, 0,242,215,$infcolor,$f4,$faname);
        imagettftext($bgpic,15, 0,242,122,$infcolor,$f4,$mname);
        imagettftext($bgpic,10, 0,35,300,$infcolor,$f3,$si);
      
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
        $msg = "<div class='alert alert-success text-capitalize'>Entry successful! to view total slides click/tap <a href='".WEBSITE_URL."./slide_list.php'>HERE</a>.</div>";
        //redirect($save); 
    }else{
      $msg = "<div class='alert alert-danger text-capitalize'>Errors occured!</div>"; 
    }
}

if (isset($msg)) {
    echo $msg;
}

?>
	        <section id="content">
	            <div class="page-wrapper">
	                <div class="container-fluid">
	                    <div class="row">
	                        <div class="col">
	                            <!--Slide Creation Form-->
	                            <form class="" action="#" method="post" name="slide-create" enctype="multipart/form-data">
	                                <br />
	                                <input type="hidden" name="slide-create" value="slide-create" />
	                                <input type="hidden" name="id" value="<?php //echo $id;?>" />
	                                <span class="f-img fa fa-slideshare fa-4x"></span>
	                                <h2>Slide</h2>
	                                <p>Slide Creation Form</p>
	                                <p class="labelenglish"><b>Doctor's Picture:</b></p>
	                                <input type="file" accept="img/*" value="<?php //echo $slider_img ?>" name="file" class="labelenglish text-uppercase" required />
	                                <p class="labelenglish"><small><b>Note:</b><br /> Your <b class="text-uppercase text-right">Doctor's Picture</b> must not be more than <b>11 MB</b>.</small></p>
	                                <p class="labelenglish"><b>SR#:</b></p>
	                                <input type="number" value="<?php //echo $slide_no ?>" name="faname" class="blank" required />
	                                <p class="labelenglish"><b>Doctor Name:</b></p>
	                                <input type="text" value="<?php //echo $title ?>" name="fname" class="blank" />
	                                <p class="labelenglish"><b>Qualification:</b></p>
	                                <input type="text" value="<?php //echo $title ?>" name="ename" class="blank" />
	                                <p class="labelenglish"><b>Digital Signature:</b></p>
	                                <input type="text" value="<?php //echo $title ?>" name="si" class="blank" />
	                                <p class="labelenglish"><b>Timings:</b></p>
	                                <textarea  class="blank" name="mname"><?php //echo $content ?></textarea>
	                                <div>
	                                    <input type="reset" name="reset" value="Reset"  class="btn btn-success"/>
	                                    <?php 

	                                    if (isset($_GET['id'])) {
	                                        echo "<input type='submit' name='submit' value='Update'  class='btn btn-success' />";
	                                    }
	                                    else{
	                                        echo "<input type='submit' name='submit' value='Create'  class='btn btn-success' />";
	                                    }

	                                    ?>
	                                </div>
	                                <br />
	                            </form>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </section>
	    </div>
	</div>
<?php
include(WEBSITE_PATH.'./includes/footer.php');
?>