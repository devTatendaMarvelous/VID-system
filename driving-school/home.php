<?php
//error_reporting(0);
require 'includes/db.php';

if(isset($_SESSION['username'])){
 
    $sql = mysqli_query($con, "SELECT * FROM driving_schools");
    $count_driving_schools = mysqli_num_rows($sql);
    $sql = mysqli_query($con, "SELECT * FROM Students");
    $count_students = mysqli_num_rows($sql);
     $sql = mysqli_query($con, "SELECT * FROM instructors");
    $count_instructors = mysqli_num_rows($sql);
   
        
                                                  

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Admin Dashboard  | VID</title>
    <?php include 'includes/metadata.php';?>

        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject"><b>Notice Board</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp graph-rp-dl">
                                            <p>All Anouncemence</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         <?php
                            $sql = mysqli_query($con, "SELECT * FROM notice ORDER BY date_tym DESC");
                            $count = mysqli_num_rows($sql);
                            if($count > 0){
                                while ($row = mysqli_fetch_assoc($sql)) {
                                    $notice = $row['notice'];
                                    $posted_tym = $row['date_tym'];

                                    echo "<p>$notice</p>
                                        <p style='font-size: 10px; font-style: italic;'>$posted_tym</p>
                                    <hr>";
                                }

                            }
                        ?>


                            <div id="extra-area-chart" style="height: 356px;"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


<?php include 'includes/footer.php'; ?>
<?php } else {
header('Location: home.php');
} 