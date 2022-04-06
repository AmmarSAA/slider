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
<?php
include(WEBSITE_PATH.'./includes/footer.php');
?>