<?php
require 'includes/db.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Payments | VID</title>
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
                                                <th data-field="fname">Student ID</th>
                                                <th data-field="email" >Email</th>
                                                <th data-field="type">Type</th>
                                                <th data-field="dat">Payment Date</th>
                                                <th data-field="del">Remove Payment</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $sql = mysqli_query($con, "SELECT * FROM payments");
                                            $count = mysqli_num_rows($sql);
                                            if($count > 0){
                                                while ($row = mysqli_fetch_assoc($sql)) {
                                                    $id = $row['id'];
                                                    $stud_id = $row['student_id'];
                                                    $email =$row['email'];
                                                    $typ =$row['_type'];
                                                    $dat = $row['payment_date'];

                                            echo "<tr>
                                                    <td></td>
                                                    <td>$stud_id</td>
                                                    <td>$email</td>
                                                    <td>$typ</td>
                                                    <td>$dat</td>
                                                    <td><a href='view-payments.php?delete=$id' class='btn btn-success'>Remove</a></td> 
                                                </tr>";
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                    <?php

                        if(isset($_GET['delete'])) {

                            $del_payment_id = $_GET['delete'];

                            $delete_vehicle_query = mysqli_query($con, "DELETE FROM payments WHERE id = $del_payment_id");
                            echo "<script>alert('Payment Successifuly removed')</script>";
                            echo "<script type='text/javascript'>window.top.location='http://localhost/vid-system/admin/view-payments.php';</script>"; exit;

                        }

                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
        <?php include 'includes/footer.php';?>