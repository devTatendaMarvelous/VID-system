<?php
require 'includes/db.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>View Schools | VID </title>
    <?php include 'includes/metadata.php';?>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Schools</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="schedule">School Name</th>
                                                <th data-field="date">Phone No.</th>
                                                <th data-field="time">Email Address</th>
                                                 <th data-field="students" >Physical Address</th>
                                                 
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = mysqli_query($con, "SELECT * FROM driving_schools");
                                            $count = mysqli_num_rows($sql);
                                            if($count > 0){
                                                while ($row = mysqli_fetch_assoc($sql)) {
                                                    $schl_name = $row['school_name'];
                                                    $schl_no = $row['school_contactno'];
                                                    $school_email=$row['email'];
                                                    $physical_address=$row['address'];

                                            echo "<tr>
                                                    <td></td>
                                                    <td>$schl_name</td>
                                                    <td>$schl_no</td>
                                                    <td>$school_email</td>
                                                    <td>$physical_address</td>
                                                    
                                                    
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
    
