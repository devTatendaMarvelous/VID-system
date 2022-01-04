<?php
error_reporting(0);
            include 'includes/db.php';
            $userLoggedIn = $_SESSION['username'];
            require_once 'includes/autoloader.php';
            
	        if(isset($_POST['payment'])){

	        	$_type = $_POST['_type'];

	        	 $paynow = new Paynow\Payments\Paynow(
			    '10967',
			    'eb19e71f-18ed-48eb-84cf-62ab2a030dea',

			    'http://localhost/vid-system/student/payment.php?payment='.$userLoggedIn,

			    'http://localhost/vid-system/add-bookings.php');

    
    $user_details_query = mysqli_query($con, "SELECT * FROM students WHERE email ='$userLoggedIn'");
    while ($user = mysqli_fetch_assoc($user_details_query)) {
        $stud_id = $user['student_id'];
        $fname = $user['firstname'];
        $em = $user['email'];
        $contact = $user['contactno'];
        $dschool = $user['driving_school'];
    }

			    $insert = mysqli_query($con, "INSERT INTO payments(student_id, email, driving_school, _type) VALUES('$stud_id', '$em', '$dschool', '$_type')");

			  
			    if ($insert) {


				    $payment = $paynow->createPayment('Booking', 'brianshumba9@gmail.com');

				     $payment->add('Provisional Test', 100);

				     $payment->setDescription("VID Gweru Provisional");

				     // Initiate a Payment 
				     $response = $paynow->send($payment);
				     ?>

				    <?php if(!$response->success): ?>

				    <h2>An error occured while communicating with Paynow</h2>
				    <p><?= $response->error ?></p>
				    <?php else:?>
				        <?= header('location:'.$response->redirectUrl())?>
				    <?php endif;
			        
			    }
	        }
        ?>