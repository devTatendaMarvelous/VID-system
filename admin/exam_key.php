<?php
//session_start();
require 'includes/db.php';

    if(isset($_POST['btn_exam_key'])){

    $exam_key = $_POST['exam_key'];

    $sql = mysqli_query($con, "UPDATE exam_key SET exam_key = '$exam_key' WHERE key_id = '1'");

    if(!$sql) {

        die("Query Failed " . mysqli_error($con));
    }
    echo "<script>alert('exam key seccessifully updated')</script>";
    header('Location:home.php');

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
                                                                    <input type="text" name="exam_key" class="form-control" placeholder="Exam Key">
                                                                </div> 
                                                               
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light" name="btn_exam_key">Add exam key</button>
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