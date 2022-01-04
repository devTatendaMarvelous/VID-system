<?php
require 'includes/db.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Schedules | VID</title>
     <?php include 'includes/metadata.php'; ?>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Schedules</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                         <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="schedule">Day</th>
                                                <th data-field="date" >8:00-8:30</th>
                                                <th data-field="time" >8:30-10:00</th>
                                                <th data-field="t2" >10:00-10:30</th>
                                                <th data-field="t3" >10:30-1:00</th>
                                                <th data-field="t4" >1:00-2:00</th>
                                                <th data-field="t5" >2:00-2:30</th>
                                                <th data-field="t6" >2:30-4:00</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $sql = mysqli_query($con, "SELECT * FROM schedules");
                                            $count = mysqli_num_rows($sql);
                                            if($count > 0){

                                                while($row = mysqli_fetch_assoc($sql)){
                                                    $day = $row['day'];
                                                    $t1= $row['8:00-8:30'];
                                                    $t2 = $row['8:30-10:00'];
                                                    $t3 = $row['10:00-10:30'];
                                                    $t4 = $row['10:30-1:00'];
                                                    $t5 = $row['1:00-2:00'];
                                                    $t6 = $row['2:00-2:30'];
                                                    $t7 = $row['2:30-4:00'];

                                                    echo "<tr>
                                                        <td></td>
                                                        <td>$day</td>
                                                        <td>$t1</td>
                                                        <td>$t2</td>
                                                        <td>$t3</td>
                                                        <td>$t4</td>
                                                        <td>$t5</td>
                                                        <td>$t6</td>
                                                        <td>$t7</td> 
                                                        
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
<?php include 'includes/footer.php'; ?>