<?php

require 'includes/db.php';
if(isset($_POST['btn_notice'])){

    $desc = $_POST['description'];

    //$post_image = $_FILES['imageupload']['name'];
    //$post_image_temp = $_FILES['imageupload']['tmp_name'];
    //move_uploaded_file($post_image_temp, "img/$post_image");

    $insert_query = mysqli_query($con, "INSERT INTO notice(notice) VALUES('$desc')");

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
    <title>Add Notice | VID </title>
    <?php include 'includes/metadata.php';?>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Add Notice</a></li>
                              
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form method="post" class="needsclick add-professors" id="demo1-upload">
                                                        <div class="row">
        
                                                            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                                            
                                                            <div class="form-group">
                                                                    <textarea name="description" class="form-control" placeholder="Description" required></textarea>
                                                            </div>
                                                            
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="form-control" class="btn btn-primary waves-effect waves-light" name="btn_notice">Post Notice</button>
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