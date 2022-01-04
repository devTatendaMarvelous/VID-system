<?php 

   include 'includes/db.php';
     /*if (isset($_SESSION['username'])) {
         $username = $_SESSION['username'];
*/
              if (isset($_POST['upload_exam'])) {

    $exam_type = $_POST["exam_type"];
                //Define the directory to store the uploaded PDF
$pdfDirectory = "pdf/";

//Define the directory to store the PDF Preview Image
$thumbDirectory = "pdfimage/";
 
//Get the name of the file (Basename)
$filename = basename( $_FILES['pdfupload']['name'], ".pdf");

// Clean the filename
//Remove all characters from the file name other than letters, numbers, hyphens and underscores
$filename = preg_replace("/[^A-Za-z0-9_-]/", "", $filename).".pdf";
 
//Name the thumbnail image (Same as the pdf file -  You can set custom name)
$thumb = basename($filename, ".pdf");
 
 //Upload the PDF
    if(move_uploaded_file($_FILES['pdfupload']['tmp_name'], $pdfDirectory.$filename)) {
  
    //Set path to the PDF file
    $pdfWithPath = $pdfDirectory.$filename;

    //$sql = mysqli_query($con, "INSERT INTO uploads(bkname) VALUES('$filename')");
    //$bkname = mysqli_escape_string($con, $_POST['bookname']);
    $sql = mysqli_query($con,"INSERT INTO exams(exam, exam_type) VALUES('$filename', '$exam_type')");
     
    //Add the desired extension to the thumbnail
    $thumb = $thumb.".jpg";
     
    //execute imageMagick's 'convert', setting the color space to RGB
    //This will create a jpg having the widthg of 200PX
    exec("convert \"{$pdfWithPath}[0]\" -colorspace RGB -geometry 200 $thumbDirectory$thumb");
         
    // Finally display the image
    echo "<p><a href=\"$pdfWithPath\"><img src=\"pdfimage/$thumb\" alt=\"\" /></a></p>";
    }
    
}

 ?>
 <!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Exam Resources | VID </title>
  <?php include 'includes/metadata.php';?>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Add Resource</a></li>
                              
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form method="post" enctype="multipart/form-data" class="needsclick add-professors" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="file" name="pdfupload" id="pdfupload" class="form-control" >
                                                                </div>
                                                                 
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                
                                                                <div class="form-group">
                                                                    <input type="text" name="exam_type" class="form-control" placeholder="Type">
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light" name="upload_exam">Submit</button>
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