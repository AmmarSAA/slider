<?php

/************************************
* File Name: index.php 				*
* Author: Ammar S.A.A 				*
* Output: Admin/User Login Form 	*
************************************/

require('config.php');
require(WEBSITE_PATH.'./includes/db_connection.php');
require(WEBSITE_PATH.'./includes/session.php');
include(WEBSITE_PATH.'./includes/header.php');
include(WEBSITE_PATH.'./includes/logo.php');
include(WEBSITE_PATH.'./includes/menu.php');

$action='';

if (isset($_GET['action'])) {
		$action = $_GET['action'];
	}
switch ($action) {
	case 'users':
		// perform user-login validation for user
		if (isset($_POST['name']))
		{
			
			$user_name 	= trim($_POST['name']);
			$password 	= ($_POST['password']);

			if (!empty($user_name) && !empty($password)){

				$login_sql = "SELECT * FROM tblusers 
					where user_name 	= '{$user_name}'
					and password 		= '{$password}' ";

				$result = $conn->query($login_sql);
				if ($result && $result->num_rows > 0)
				{ 
					$_SESSION['user_name'] = $user_name;
					redirect("dashboard.php");
				}else{
					$msg = "Invalid User Name or Password";	
				}
			}else{
				$msg = "User Name or Password can not be empty";		
			}
		}
	break;
	default:
		// perform login validation for admin
		if (isset($_POST['name']))
		{
			
			$admin_name = trim($_POST['name']);
			$password 	= $_POST['password'];

			if (!empty($admin_name) && !empty($password)){

				$sql = "SELECT * FROM admin 
					where user_name='{$admin_name}'
					and password = '{$password}' ";

				$result = $conn->query($sql);
				if ($result && $result->num_rows > 0)
				{ 
					$_SESSION['user_name'] = $admin_name;
					echo redirect("dashboard.php");
				}else{
					$msg = "Invalid Admin Name or Password.";	
				}
			}else{
				$msg = "Admin Name or Password can not be empty.";		
			}
		}
	break;

}

if (isset($msg))
{
echo '<div class="alert alert-danger">';
echo $msg;
echo '</div>';
}
?>     							
			<section id="content">
				<div class="page-wrapper">
					<div class="container-fluid">
						<div class="row">
							<div class="col">
								<!--Login Form-->
								<form class="form login-form" name="login" method="post" action="">
									<br />
									<img src="images/form-man.png"/>
									<h2>
									<?php 
									if (isset($_GET['action'])) {
											$action = $_GET['action'];
									}
									switch ($action) {
										case 'users':
											echo "User";
										break;
										default:
											echo "Admin";
										break;

									} ?>		
									</h2>
									<p class="labelenglish"><b>
									<?php 
									if (isset($_GET['action'])) {
											$action = $_GET['action'];
									}
									switch ($action) {
										case 'users':
											echo "User";
										break;
										default:
											echo "Admin";
										break;

									} ?>
									Name:</b></p>
									<input type="text" name="name" class="blank" />  
									<p class="labelenglish"><b>Password:</b></p> 
									<input type="password" name="password" class="blank" />
									<div>
										<input type="reset" name="reset" value="Reset"  class="btn btn-success"/>
										<input type="submit" name="submit" value="Login"  class="btn btn-success"/>
									</div>
									<br />
								</form>
							</div>
						</div>
					</div>
					<!--<h2>SAA's Easiest Game</h2>--><small>-Advertisement</small>
					<!--<iframe width="1280" height="721" src="https://www.youtube.com/embed/9nNhI3n2f9U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
				    <div class="container-fluid p-3 my-3 text-white">
				        <iframe class="col-12 center-block" width="1280" height="721" src="https://www.youtube.com/channel/UCKygqnNps6LH4qJ3_wdD7Dw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				        <!--<iframe class="col-12 center-block " src="https://scratch.mit.edu/projects/424956627/embed" allowtransparency="true" width="485" height="402" frameborder="0" scrolling="no" allowfullscreen></iframe>-->
			        </div>
				</div>
			</section>
		</div>
	</div>
<?php
	include(WEBSITE_PATH.'./includes/footer.php');
?>