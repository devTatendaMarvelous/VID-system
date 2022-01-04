<?php
require 'includes/db.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Resources | VID</title>
     <?php include 'includes/metadata.php'; ?>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Resources</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="schedule">Exam Name</th>
                                                <th data-field="date" data-editable="">Type</th>
                                                <th data-field="time" data-editable="">Exam File</th>

                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = mysqli_query($con, "SELECT * FROM exams");
                                            $count = mysqli_num_rows($sql);
                                            if($count > 0){
                                                while ($row = mysqli_fetch_assoc($sql)) {
                                                    $exam = $row['exam'];
                                                    $exam_type = $row['exam_type'];
                                                    $path = $row['pdfpath'];

                                            echo "<tr>
                                                    <td></td>
                                                    <td>$exam</td>
                                                    <td>$exam_type</td>
                                                    <td><a href='pdf/$path' class='file-download' download>Download<i class='fa fa-download'></i></a></td>

                                                    
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