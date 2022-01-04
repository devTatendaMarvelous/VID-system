<?php
require 'includes/db.php';

if(isset($_POST['btn_add_schl'])){
    $schl_name = $_POST['school_name'];
    $mobileno = $_POST['mobileno'];
    $em = $_POST['email'];
    $address = $_POST['physical_address'];

    $insert_query = mysqli_query($con, "INSERT INTO driving_schools(school_name, school_contactno, email, address) VALUES('$schl_name', '$mobileno', '$em', '$address')");
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Driving School | VID </title>
    <?php include 'includes/metadata.php';?>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Add Driving School</a></li>
                              
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form method="post" class="needsclick add-professors" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="school_name" type="text" class="form-control" placeholder="School Name" required>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <input name="email" type="email" class="form-control" placeholder="Email Address" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="mobileno" type="text" class="form-control" placeholder="Mobile no." required>
                                                                </div>
                                                               
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea name="physical_address" placeholder="School address" required></textarea>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" name="btn_add_schl" class="btn btn-primary waves-effect waves-light">Add School</button>
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