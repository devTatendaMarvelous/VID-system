<?php 
    include 'includes/db.php';
    require_once 'includes/autoloader.php';

    if (isset($_POST['book'])) {
    
 $day=date('d'); 
 $month=date('m');
  $year=date('yy'); 
  $day=$day+1; 
    $date=$year. "-" .$month."-".$day; 

    $name = $_POST['firstname'];
    $surname = $_POST['surname'];
    $mobile = $_POST['mobileno'];
    $email = $_POST['email'];
    $type = $_POST['typ'];

   //$day=$_POST['_day'];
    $timeslot=$_POST['timeslot'];
    $date1 = date('yy-m-d');

    $search_user = mysqli_query($con, "SELECT * FROM students WHERE email = '$email'");
      if(!$search_user) {
                echo "<script>alert('Student does not exist!!!')</script>";
                
            }
            
    $count = mysqli_num_rows($search_user);

    if($count >= 1) {
        $user=mysqli_fetch_array($search_user);
        $username = $user['email'];
        $dschool = $user['driving_school'];
        
        
            $query = mysqli_query($con, "SELECT * FROM sessions WHERE _day = '0' ");
            if(!$query) {

                die("Query Failed " . mysqli_error($con));
            }
            $result = mysqli_num_rows($query);

            if($result >= 1) {
                $row=mysqli_fetch_array($query);
                $tslot = $row['session1'];
                $sess2 = $row['session2'];
                $sess3 = $row['session3'];

                if ($timeslot =="s1" && $tslot <= 20) {
                    $tslot++;
                    $sql = mysqli_query($con, "UPDATE sessions SET  session1 = '$tslot' WHERE _day = '0'");
                    if(!$sql) {

                        die("Query Failed " . mysqli_error($con));
                    }
                    $insert = mysqli_query($con, "INSERT INTO bookings(firstname, lastname, contactno, email, driving_school, _type, session_num, _date) VALUES('$name', '$surname', '$mobile', '$email', '$dschool', '$type', '$timeslot', '$date')");

                    echo "<script>alert('You have succesifully book tommorow session 1')</script>";

                }   else if ($timeslot =="s2" && $sess2 <= 20) {
                    $sess2++;
                    $sql = mysqli_query($con, "UPDATE sessions SET  session2 = '$sess2' WHERE _day = '0'");
                    if(!$sql) {

                        die("Query Failed " . mysqli_error($con));
                    }
                    $insert = mysqli_query($con, "INSERT INTO bookings(firstname, lastname, contactno, email, _type, session_num, _date) VALUES('$name', '$surname', '$mobile', '$email','$type', '$timeslot', '$date')");

                    echo "<script>alert('You have succesifully book tommorow session 2')</script>";

                    } else if ($timeslot =="s3" && $sess3 <= 20) {
                    $sess3++;
                    $sql = mysqli_query($con, "UPDATE sessions SET  session3 = '$sess3' WHERE _day = '0'");
                    if(!$sql) {

                        die("Query Failed " . mysqli_error($con));
                    }
                    $insert = mysqli_query($con, "INSERT INTO bookings(firstname, lastname, contactno, email, _type, session_num, _date) VALUES('$name', '$surname', '$mobile', '$email','$type', '$timeslot', '$date')");

                    echo "<script>alert('You have succesifully book tommorow session 3')</script>";

                    } else{

                        echo "<script>alert('Cannot book for this session today')</script>";
                        //header('Location: t.php');

                   }
                }
            
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
                                                                    <input name="firstname" type="text" class="form-control" placeholder="First Name" required="enter first name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="surname" type="text" class="form-control" placeholder="Surname" required="enter surname">
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <input name="mobileno" type="text" class="form-control" placeholder="Mobile no." required="enter phone number">
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <input name="email" type="email" class="form-control" placeholder="Email Address" required="enter email in the correct format">
                                                                </div>
<!-- 
                                                                <div class="form-group">
                                                                    <input name="_date" type="date" class="form-control" required="enter date">
                                                                </div> -->

                                                                <div class="form-group">
                                                                    <select name="timeslot" class="form-control">
                                                                        <option value="s1">Session 1</option>
                                                                        <option value="s2">Session 2</option>
                                                                        <option value="s3">Session 3</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <select name="typ" class="form-control">
                                                                            <option value="none" selected="" disabled="">Type</option>
                                                                            <option value="provisional">provisional</option>
                                                                            <option value="drivetest">drive test</option>
                                                                        </select>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="payment-adress">
                                                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="book">Create Book</button>
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
        
        <?php include 'includes/footer.php';?>