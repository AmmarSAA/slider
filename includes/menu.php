<?php  

/***********************************
* File Name: menu.php              *
* Author: Ammar S.A.A              *
* Output: User/Admin Menu/Navbar   *
***********************************/

include (WEBSITE_PATH.'./includes/functions.php');

if (IfIsUser($conn)) {
	if (isset($_SESSION['user_name'])) {
		//Getting things out from user session query
		$sql_select = "SELECT * FROM tblusers WHERE user_name = '{$_SESSION['user_name']}' ";
		    
	  $sql = $conn->query($sql_select);
	    
	  while($row = mysqli_fetch_array($sql)) {
	    
	    $user_id        	= $row['id'];
	    $full_name        = $row['full_name'];
	    $email_id         = $row['email_id'];
	    $user_name        = $row['user_name'];
	    $password         = $row['password'];
	    $mobile_no        = $row['mobile_no'];
	    $status 					= $row['status'];
	    $profile_picture 	= $row['profile_picture'];
	    $reg_date         = $row['reg_date'];
	    $updation_date    = $row['updation_date'];
		}
	}
}else{
	if (isset($_SESSION['user_name'])) {
		//Getting things out from admin session query
		$sql_select = "SELECT * FROM admin WHERE user_name = '{$_SESSION['user_name']}' ";
		    
	  $sql = $conn->query($sql_select);
	    
	  while($row = mysqli_fetch_array($sql)) {
	    
	    $user_id        	= $row['id'];
	    $full_name        = $row['full_name'];
	    $email_id         = $row['admin_email'];
	    $user_name        = $row['user_name'];
	    $password         = $row['password'];
	    $reg_date         = $row['reg_date'];
	    $updation_date    = $row['updation_date'];
	    $status 					= $row['status'];
	    $profile_picture 	= $row['profile_picture'];
		}
	}
}

?>

        <div class="row">
					<div class="col" id="bs-example-navbar-collapse-1">
						<!--Navbar Start-->
						<nav class="site-header sticky-top py-1 navbar nav-hover navbar-expand-lg navbar-light bg-light" height="250px">
 							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    						<span class="fa fa-2x fa-circle-o fa-spin text-dark"></span>
  						</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
  							<ul class="navbar-nav mr-auto">
                  <!--User Menu/Nav Start-->
                  <?php if(!empty($_SESSION['user_name'])){ if (IfIsUser($conn)) { ?>
                  <li class="nav-item">
                    <a class="nav-link" href="dashboard.php"><b>Dashboard</b></a>
                  </li>
									<li class="nav-item">
										<a class="nav-link" href="profile.php">
											<img class="img-responsive fixed-circle" width="20px" src="<?php echo WEBSITE_URL; ?>/images/profile_pictures/<?php if(!empty($profile_picture)){echo $profile_picture;}else{echo "MonitorMLMS.png";} ?>" /><b> Profile</b>
										</a>
									</li>
                  <!--User Menu/Nav End-->
                  <?php }else{ ?>
                  <li class="nav-item">
                      <a class="nav-link" href="dashboard.php"><b>Dashboard</b></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="slide_list.php" role="btn btn-success" aria-haspopup="true" aria-expanded="false"><b>Slides</b></a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="slide_add.php">Add Slide</a>
                      <a class="dropdown-item" href="slide_list.php">Slide List</a>
                      <a class="dropdown-item" href="index_slide-generator.php">Generate Slide</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo WEBSITE_URL. 'users.php'?>"><b>Users</b></a>
                  </li>
									<li class="nav-item">
										<a class="nav-link" href="profile.php">
											<img class="img-responsive fixed-circle" width="20px" src="<?php echo WEBSITE_URL; ?>/images/profile_pictures/<?php if(!empty($profile_picture)){echo $profile_picture;}else{echo "MonitorMLMS.png";} ?>" /><b> Profile</b>
										</a>
									</li>
                  <!--<li class="nav-item">
                        <a class="nav-link" href="admin.php"><b>Admins</b></a>
                  </li>-->
                <?php } }else{?>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php"><b>Admin Login</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?action=users"><b>User Login</b></a>
                  </li>
            <!--	<li class="nav-item">
                    <a class="nav-link" href="user-signup.php"><b>User Signup</b></a>
                  </li>	-->
                  <?php }?>
                </ul>
              </div>
            </nav>
            <!--Navbar End-->
          </div>
        </div>
      </section>