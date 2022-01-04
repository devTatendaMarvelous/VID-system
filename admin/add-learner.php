<?php

require 'includes/db.php';
if(isset($_POST['btn_add'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $idnum = $_POST['idnum'];
    $email = $_POST['email'];
    $dschool = $_POST['dschool'];
    $mobileno = $_POST['mobileno'];
    $pword = $_POST['pword'];
    //$post_image = "image";
    $post_image = $_FILES['imageupload']['name'];
    $post_image_temp = $_FILES['imageupload']['tmp_name'];
    move_uploaded_file($post_image_temp, "img/$post_image");

    $insert_query = mysqli_query($con, "INSERT INTO students(firstname, lastname, dob, idnumber, email, driving_school, contactno, image, password) VALUES('$fname', '$lname', '$dob', '$idnum', '$email', '$dschool', '$mobileno', '$post_image', '$pword')");

    if(!$insert_query) {

        die("Query Failed " . mysqli_error($con));
    }
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Learner | VID </title>
    <?php include 'includes/metadata.php';?>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Add Learner</a></li>
                              
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form method="post" enctype="multipart/form-data" class="needsclick add-professors" id="demo1-upload">
                                                    
                                                                <div class="form-group">
                                                                    <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="date" name="dob" class="form-control" placeholder="Date Of Birth" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="idnum" class="form-control" placeholder="ID Number" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="dschool" class="form-control" placeholder="Driving School Name" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="mobileno" type="text" class="form-control" placeholder="Mobile no." required>
                                                                </div>
                                                                 <div class="form-group">
                                                                    <input name="imageupload" type="file" class="form-control">
                                                                </div> 
                                                                <div class="form-group">
                                                                    <input type="password" name="pword" class="form-control" placeholder="Password" required>
                                                                </div>
                                                               
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light" name="btn_add">Add Learner</button>
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
        </div>
        <?php include 'includes/footer.php';?>