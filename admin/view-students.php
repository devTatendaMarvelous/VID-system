<?php

require 'includes/db.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>All Students | VID</title>
    <?php include 'includes/metadata.php'; ?>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>all Students</h1>
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
                                                <th data-field="lname">Last Name</th>
                                                <th data-field="dob">D.O.B</th>
                                                <th data-field="idnum">ID Number</th>
                                                <th data-field="em">Email</th>
                                                <th data-field="dschool">Schol Name</th>
                                                <th data-field="mobileno">Phone No.</th>
                                                 <th data-field="image" >Profile Pic</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = mysqli_query($con, "SELECT * FROM students");
                                            $count = mysqli_num_rows($sql);
                                            if($count > 0){

                                                while($row = mysqli_fetch_assoc($sql)){
                                                    $fname = $row['firstname'];
                                                    $lname = $row['lastname'];
                                                    $dob = $row['dob'];
                                                    $idnum = $row['idnumber'];
                                                    $em = $row['email'];
                                                    $dschool = $row['driving_school'];
                                                    $mobileno = $row['contactno'];
                                                    $image = $row['image'];

                                                    echo "<tr>
                                                        <td></td>
                                                        <td>$fname</td>
                                                        <td>$lname</td>
                                                        <td>$dob</td>
                                                        <td>$idnum</td>
                                                        <td>$em</td>
                                                        <td>$dschool</td>
                                                        <td>$mobileno</td>
                                                        <td><img src='img/$image' style='width: 100px; height:70px;'></td>
                                                        
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
<?php include 'includes/footer.php'; ?>