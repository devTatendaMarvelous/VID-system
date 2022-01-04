<?php
session_start();
if(isset($_SESSION["email"])){
session_destroy();
}
include_once '../includes/db.php';
$ref=@$_GET['q'];
$email = $_POST['email'];
$password = $_POST['password'];

$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password); 
$password = addslashes($password);
//$password= md5($password); 
        $select_exam_key = mysqli_query($con, "SELECT exam_key FROM exam_key WHERE key_id = '1'");
        $key = mysqli_num_rows($select_exam_key);
        if ($key == 1) {
            $exam = mysqli_fetch_array($select_exam_key);
            $exam_pword = $exam['exam_key'];

            $result = mysqli_query($con,"SELECT * FROM students WHERE email = '$email'") or die('Error');
			$count=mysqli_num_rows($result);
			if($count==1){
				while($row = mysqli_fetch_array($result)) {
					$name = $row['firstname'];
				}
				$_SESSION["name"] = $name;
				$_SESSION["email"] = $email;
				header("location:account.php?q=1");
			}
			else
			header("location:$ref?w=Wrong Username or Password");
			}


?>