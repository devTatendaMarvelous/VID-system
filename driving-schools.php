<?php
require 'admin/includes/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	 <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/style(2).css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />


	<title>DRIVING SCHOOLS| VEHICLE INSPECTORATE DEPARTMENT</title>
	
</head>
<body class="stretched has-plugin-isotope has-plugin-parallax" >
	<div id="wrapper" class="clearfix">

<header id="header" class="full-header transparent-header sticky-header dark" data*sticky-class="not-dark">
	<div id="header-wrap" class="not-dark">
		<div class="container">
			<div class="header-row top-search-parent">
				<div class="logo">
					<a class="standard-logo" href="" style="height: 100px ;data-dark-logo="images/logo.png">
						<img src="images/logo.png">
					</a>
				</div>
				<div class="mobile"  style="margin-right: 2%; margin-left: 2%;">
					<h2>VEHICLE INSPECTORATE DEPARTMENT</h2>
				</div><br>
				<nav class="primary-menu">
					<div >
						<ul class="loogin" >
							<li class="menu-item sub-menu">
								<a class="menu-link" href="student/index.php" style="padding-top: 5px; padding-bottom: 5px;">
									<div>
										Login
										<i class="icon-angle-down"></i>
									</div>
								</a>
								
							</li>
						</ul>
					</div>
					<div >
						<ul class="loogin" >
							<li class="menu-item sub-menu">
								<a class="menu-link" href="admin/index.php" style="padding-top: 5px; padding-bottom: 5px;">
									<div>
										 Admin Login
										<i class="icon-angle-down"></i>
									</div>
								</a>
								
							</li>
						</ul>
					</div>
					<div >
						<ul class="loogin" >
							<li class="menu-item sub-menu">
								<a class="menu-link" href="driving-school/index.php" style="padding-top: 5px; padding-bottom: 5px;">
									<div>
										Driving school Login
										<i class="icon-angle-down"></i>
									</div>
								</a>
								
							</li>
						</ul>
					</div>
					<div >
						<ul class="loogin" >
							<li class="menu-item sub-menu">
								<a class="menu-link" href="Contact.php" style="padding-top: 5px; padding-bottom: 5px;">
									<div>
										Contact Us
										<i class="icon-angle-down"></i>
									</div>
								</a>
								
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>


	<section  style="background-image: url(images/cones.jpg); background-size: cover;padding: 10%;">
		

                                <div  >
                                    
                                    <table border="red" style="text-align: center; color: #fff; width: 100%;" align="center" >
                                        <thead style="background-color: green; padding: 10px; ">
                                            <tr>
                                                
                                                <th data-field="schedule">School Name</th>
                                                <th data-field="date">Phone No.</th>
                                                <th data-field="time">Email Address</th>
                                                 <th data-field="students" >Physical Address</th>
                                                 
                                                
                                            </tr>
                                        </thead>
                                        <tbody style="background-color: #c8d9eb; color: #333333">
                                            <?php
                                            $sql = mysqli_query($con, "SELECT * FROM driving_schools");
                                            $count = mysqli_num_rows($sql);
                                            if($count > 0){
                                                while ($row = mysqli_fetch_assoc($sql)) {
                                                    $schl_name = $row['school_name'];
                                                    $schl_no = $row['school_contactno'];
                                                    $school_email=$row['email'];
                                                    $physical_address=$row['address'];

                                            echo "<tr>
                                                    
                                                    <td>$schl_name</td>
                                                    <td>$schl_no</td>
                                                    <td>$school_email</td>
                                                    <td>$physical_address</td>
                                                    
                                                    
                                                </tr>";
                                                }
                                            }
                                            ?>
                                                                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>

</section>
	</div>
	<footer>
		<div class="footer">
			<p><p>Copyright © 2020. All rights reserved. Vehicle Inspectorate Department</p></p>
		</div>
	</footer>
</body>
</html>