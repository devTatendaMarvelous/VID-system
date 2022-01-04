<?php 
    include 'includes/db.php';
    require_once 'includes/autoloader.php';

    if (isset($_POST['book'])) {
    
 

    $name = $_POST['firstname'];
    $surname = $_POST['surname'];
    $mobile = $_POST['mobileno'];
    $email = $_POST['email'];
    $type = $_POST['typ'];

    $paynow = new Paynow\Payments\Paynow(
    '10967',
    'eb19e71f-18ed-48eb-84cf-62ab2a030dea',

    'http://localhost/vid-system/admin/add-bookings.php?payment='.$name,

    'http://localhost/vid-system/add-bookings.php');


    $insert = mysqli_query($con, "INSERT INTO bookings(firstname, lastname, contactno, email, _type) VALUES('$name', '$surname', '$mobile', '$email','$type')");

  
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
                                <li class="active"><a href="#description">Add Booking</a></li>
                              
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
                                                                    <input name="firstname" type="text" class="form-control" placeholder="First Name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="surname" type="text" class="form-control" placeholder="Surname">
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <input name="mobileno" type="text" class="form-control" placeholder="Mobile no.">
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <input name="email" type="email" class="form-control" placeholder="Email Address">
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <select name="typ" class="form-control">
                                                                            <option value="none" selected="" disabled="">Type</option>
                                                                            <option value="provisional">provisional</option>
                                                                            <option value="drivetest">drive test</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light" name="book">Create Book</button>
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