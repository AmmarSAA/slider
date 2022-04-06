<?php

/****************************
* File Name: logout.php 	*
* Author: Ammar S.A.A 		*
* Output: Logout Page 		*
****************************/

require('config.php');
require(WEBSITE_PATH.'./includes/db_connection.php');
require(WEBSITE_PATH.'./includes/session.php');
unset($_SESSION['user_name']);
session_destroy();

include(WEBSITE_PATH.'./includes/header.php');
include(WEBSITE_PATH.'./includes/logo.php');
include(WEBSITE_PATH.'./includes/menu.php');
echo '<div class="alert alert-success">';
echo "You have succesfully logged out😀.";
echo '</div>';
?>     							
			
		</div>
	</div>
<?php
	include(WEBSITE_PATH.'./includes/footer.php');
?>