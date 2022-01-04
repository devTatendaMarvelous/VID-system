<?php
require 'includes/db.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Impounded Vehicles | VID</title>
<?php include 'includes/metadata.php'; ?>
        <!-- Static Table Start -->
         <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Impounded Vehicles</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="fname">Owner Name</th>
                                                <th data-field="lname">Owner Surname</th>
                                                <th data-field="mobileno">Phone No.</th>
                                                <th data-field="vname">Vehicle Name</th>
                                                
                                                 <th data-field="vcolor">Vehicle Color</th>
                                                 <th data-field="vplate" >Vehicle PlateNo.</th>
                                                 <th data-field="date">Date Impounded</th>
                                                 <th data-field="rfee">Release Fee</th>
                                                 <th data-field="rvehicle">Release Vehicle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = mysqli_query($con, "SELECT * FROM impounded_vehicles");
                                            $count = mysqli_num_rows($sql);
                                            if($count > 0){
                                                while ($row = mysqli_fetch_assoc($sql)) {
                                                    $vehicle_id=$row['vehicle_id'];
                                                    $fname = $row['owner_name'];
                                                    $lname = $row['owner_surname'];
                                                    $phone = $row['contactno'];
                                                    $vname = $row['vehicle_name'];
                                                    $vmake = $row['vehicle_make'];
                                                    $vcolor = $row['vehicle_color'];
                                                    $vplate = $row['vehicle_plateno'];
                                                    $date = $row['date_impounded'];
                                                    $rfee = $row['release_fee'];



                                            echo "<tr>
                                                    <td></td>
                                                    <td>$fname</td>
                                                    <td>$lname</td>
                                                    <td>$phone</td>
                                                    <td>$vname $vmake</td>
                               
                                                    <td>$vcolor</td>
                                                    <td>$vplate</td>
                                                    <td>$date</td>
                                                    <td>$rfee</td>
                                                    <td><a href='view-impounded-vehicles.php?delete=$vehicle_id' class='btn btn-success'>Release</a></td>   
                                                </tr>";
                                                }
                                            }
                                            ?>
                                                                                        
                                        </tbody>
                                    </table>


                    <?php

                        if(isset($_GET['delete'])) {

                            $del_vehicle_id = $_GET['delete'];

                            $delete_vehicle_query = mysqli_query($con, "DELETE FROM impounded_vehicles WHERE vehicle_id = $del_vehicle_id");
                            echo "<script>alert('Vehicle released successfully')</script>";
                            echo "<script type='text/javascript'>window.top.location='http://localhost/vid-system/admin/view-impounded-vehicles.php';</script>"; exit;

                        }

                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include 'includes/footer.php'; ?>