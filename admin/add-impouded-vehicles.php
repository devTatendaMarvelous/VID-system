<?php
require 'includes/db.php';
if(isset($_POST['btn_impounded'])){

    $owner_name = $_POST['owner_name'];
    $owner_surname = $_POST['Owner_lname'];
    $vehicle_name = $_POST['vehicle-name'];
    $vehicle_make= $_POST['vehicle-make'];
    $vehicle_color = $_POST['vehicle-color'];
    $vehicle_plateno = $_POST['vehicle-plateno'];
    //$date_impounded = $_POST['date-impounded'];
    $release_fee = $_POST['release-fee'];
    /*$post_image = "image";
    $post_image = $_FILES['imageupload']['name'];
    $post_image_temp = $_FILES['imageupload']['tmp_name'];
    move_uploaded_file($post_image_temp, "img/$post_image");
*/
    $insert_query = mysqli_query($con, "INSERT INTO impounded_vehicles(owner_name, owner_surname, vehicle_name, vehicle_make, vehicle_color, vehicle_plateno, release_fee) VALUES('$owner_name', '$owner_surname', '$vehicle_name', '$vehicle_make', '$vehicle_color', '$vehicle_plateno', '$release_fee')");

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
    <title>Add Impounded Vehicles | VID </title>
    <?php include 'includes/metadata.php';?>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Add Impounded Vehicles</a></li>
                              
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form method="post" enctype="multipart/form-data" class="needsclick add-professors" id="demo1-upload">
                                                    
                                                                <div class="form-group">
                                                                    <input type="text" name="owner_name" class="form-control" placeholder="Owner First Name" required>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <input type="text" name="Owner_lname" class="form-control" placeholder="Owner Last Name" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="vehicle-name" type="text" class="form-control" placeholder="Vehicle Name" required>
                                                                </div> 
                                                                <div class="form-group">
                                                                    <input type="text" name="vehicle-make" class="form-control" placeholder="Make" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="vehicle-color" class="form-control" placeholder="color" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="vehicle-plateno" type="text" class="form-control" placeholder="Plate Number" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="text" name="release-fee" class="form-control" placeholder="Release amount" required>
                                                                </div>
                                                                 
                                                               
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light" name="btn_impounded">Add Vehicle</button>
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