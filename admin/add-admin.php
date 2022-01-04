<?php
//session_start();
require 'includes/db.php';
error_reporting(0);

    if(isset($_POST['btn_admin'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $idnum = $_POST['idnum'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $pword = $_POST['pword'];
    $error_pword ="";   
    //$post_image = "image";
    $post_image = $_FILES['imageupload']['name'];
    $post_image_temp = $_FILES['imageupload']['tmp_name'];
    move_uploaded_file($post_image_temp, "img/$post_image");

    if(strlen($fname) < 2){
        $error_name = "First name should be greater than 2";

    } elseif (strlen($lname) < 2 || preg_match('/[^0-9]/', $fname)) {
        $error_lname = "Last name should be greater than 2 and should only contain english letters";
    } elseif (strlen($idnum) !=13 || preg_match('/[^0-9]/', $lname)) {
        $error_id = "Id number should be eaqual to 13 and should only contain english letters";
    } elseif(strlen($mobileno)!=10){
        $error_mobile = "mobile number should be equal 10";
    } elseif(strlen($pword)< 6){
        $error_pword = "Password should be greater equal to 6 characters";
    } else{
          $insert_query = mysqli_query($con, "INSERT INTO admin(firstname, lastname, dob, idnumber, email, contactno, password, image) VALUES('$fname', '$lname', '$dob', '$idnum', '$email', '$mobileno', '$pword', '$post_image')");

        if(!$insert_query) {

            die("Query Failed " . mysqli_error($con));
        }
    }

}



?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Admin | VID </title>
 <?php include 'includes/metadata.php';?>

        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Add Admin</a></li>
                              
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form method="post" enctype="multipart/form-data" class="needsclick add-professors" id="demo1-upload">
                                                    
                                                                <div class="form-group">
                                                                    <input type="text" name="fname" class="form-control" placeholder="First Name">
                                                                </div>
                                                                <?php
                                                                    if($error_name != "")
                                                                        echo $error_name;
                                                                ?>
                                                                
                                                                <div class="form-group">
                                                                    <input type="text" name="lname" class="form-control" placeholder="Last Name">
                                                                </div>
                                                                <?php
                                                                    if($error_lname != "")
                                                                        echo $error_lname;
                                                                ?>
                                                                <div class="form-group">
                                                                    <input name="dob" type="date" class="form-control">
                                                                </div> 
                                                                <div class="form-group">
                                                                    <input type="text" name="idnum" class="form-control" placeholder="ID Number">
                                                                </div>
                                                                <?php
                                                                    if($error_id != "")
                                                                        echo $error_id;
                                                                ?>
                                                                <div class="form-group">
                                                                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="mobileno" type="text" class="form-control" placeholder="Mobile no.">
                                                                </div>

                                                                <?php
                                                                    if($error_mobile != "")
                                                                        echo $error_mobile;
                                                                ?>

                                                                <div class="form-group">
                                                                    <input type="password" name="pword" class="form-control" placeholder="Password" required>
                                                                </div>
                                                                <?php
                                                                    if($error_pword != "")
                                                                        echo $error_pword;
                                                                ?>
                                                                 <div class="form-group">
                                                                    <input name="imageupload" type="file" class="form-control">
                                                                </div> 
                                                               
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light" name="btn_admin">Add Admin</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><?php include 'includes/footer.php';?>