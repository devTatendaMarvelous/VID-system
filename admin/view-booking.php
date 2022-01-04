<?php
require 'includes/db.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Booking | VID</title>
    <?php include 'includes/metadata.php';?>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Bookings</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                  
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="fname">First Name</th>
                                                <th data-field="lname" >Surname</th>
                                                <th data-field="contactno" >Phone No.</th>
                                                <th data-field="email" >Email</th>
                                                <th data-field="emal" >Driving School</th>
                                                <th data-field="type">Type</th>
                                                <th data-field="dat">Date</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $sql = mysqli_query($con, "SELECT * FROM bookings");
                                            $count = mysqli_num_rows($sql);
                                            if($count > 0){
                                                while ($row = mysqli_fetch_assoc($sql)) {
                                                    $fname = $row['firstname'];
                                                    $surname = $row['lastname'];
                                                    $mobileno = $row['contactno'];
                                                    $email =$row['email'];
                                                    $driving_school =$row['driving_school'];
                                                    $typ =$row['_type'];
                                                    $dat = $row['_date'];

                                            echo "<tr>
                                                    <td></td>
                                                    <td>$fname</td>
                                                    <td>$surname</td>
                                                    <td>$mobileno</td>
                                                    <td>$email</td>
                                                    <td>$driving_school</td>
                                                    <td>$typ</td>
                                                    <td>$dat</td>
                                                    
                                                </tr>";
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
        <?php include 'includes/footer.php';?>