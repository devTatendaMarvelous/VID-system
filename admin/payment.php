<?php 
    include 'includes/db.php';
    require_once 'includes/autoloader.php';
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Booking | VID </title>
<?php include 'includes/metadata.php';?>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Make Payment</a></li>
                              
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
                                                                    <select name="_type" class="form-control">
                                                                            <option value="none" selected="" disabled="">Type</option>
                                                                            <option value="provisional">provisional</option>
                                                                            <option value="drivetest">drive test</option>
                                                                        </select>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="payment-adress">
                                                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="payment">Make Payment</button>
                                                                        </div>
                                                                    </div>
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
        <?php
            if(isset($_POST['payment'])){

                $_type = $_POST['_type'];

                 $paynow = new Paynow\Payments\Paynow(
                '10967',
                'eb19e71f-18ed-48eb-84cf-62ab2a030dea',

                'http://localhost/vid-system/admin/add-bookings.php?payment='.$userLoggedIn,

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
        <?php include 'includes/footer.php';?>