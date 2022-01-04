<?php
include 'includes/db.php';

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    
    ?>


<!doctype html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Forum | VID</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
     <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="css/summernote/summernote.css">

    <script src="chatroom/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="chatroom/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="chatroom/style.css">
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <?php
include 'includes/header.php';
?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        
                    </div>
                </div>
            </div>
        </div>

            <?php include 'includes/nav.php'; ?>
            
            <!-- Mobile Menu end -->
          
        </div>
        <br>
        <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="basic-form-element">
    
    
    <div class="top_menu">
        
        <div class="title">Discussion Forum</div>
    </div>
    
   <div >
       
     <ul class="messages" >
        
        <?php


       //sending message
        if (isset($_GET['snd_sms'])) {
            
            $Sent_sms = mysqli_escape_string($con,$_GET['sms']);
            

            $query = mysqli_query($con,"INSERT INTO chats (message,message_from) VALUES('$Sent_sms', '$username')" );


        }


        // displaying message

          $get_message = mysqli_query($con, 'SELECT  * FROM  chats');
          while ($details = mysqli_fetch_Assoc($get_message)) {



            $ID = $details['id'];
            $SMS = $details['message'];
            $SENDER = $details['message_from'];

            echo '

            
        <li class="message left appeared">
        <div class="avatar"></div>
        <div class="text_wrapper">
          <label >'.$SENDER.'</label>
            <div class="text" style="margin-top:10px">'.$SMS.' </div>

            

        </div>
    </li>';





              
          }




        ?>

   </ul>

   </div>
   
   
    
  </div> 
</div>
</div>
</div>
</div>
<div class="breadcome-area" style="margin-top: 90px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="basic-form-element">
                         <form method="GET" action="">

        <div class="bottom_wrapper clearfix">
        <div class="message_input_wrapper">
            <input class="message_input" name="sms" placeholder="Type your message here..." />
        </div>
        <input type="submit" name="snd_sms" value="Send Message"class="send_message">
        
    </div>
        
    </form>
    
</div>
</div>
</div>
</div>
</div>


<?php include 'includes/footer.php'; ?>
                  
        <!-- Single pro tab review Start-->
        
    <!-- jquery
		============================================ -->

        <script src="chatroom/script.js"></script>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
      <!-- summernote JS
        ============================================ -->
    <script src="js/summernote/summernote.min.js"></script>
    <script src="js/summernote/summernote-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
   
</body>

</html>

 <?php   
}else{
    header('location:index.php');
}
?>