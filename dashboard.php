<?php

/************************************
* File Name: dashboard.php 			*
* Author: Ammar S.A.A 				*
* Output: Dashboard 				*
************************************/

require('config.php');
require(WEBSITE_PATH.'./includes/db_connection.php');
require(WEBSITE_PATH.'./includes/session.php');
include(WEBSITE_PATH.'./includes/header.php');
include(WEBSITE_PATH.'./includes/logo.php');
include(WEBSITE_PATH.'./includes/menu.php');

?>    							
      <section id="content">
				<div class="page-wrapper">
					<div class="container-fluid">
						<div class="row">
							<div class="col">
								<!--FullScreen Button-->
								<button onclick="openFullscreen();" class="btn btn-light btn-md pull-right"><span class="glyphicon glyphicon-fullscreen"></span></button>
								<h1><strong>SlideShow</strong></h1>
								<!--SlideShow-->
								<?php 
									include(WEBSITE_PATH.'./includes/slider.php');
								?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
<script>
var elem = document.getElementById("myCarousel");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}
</script
<?php
include(WEBSITE_PATH.'./includes/footer.php');
?>