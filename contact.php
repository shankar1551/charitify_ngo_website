<?php


# Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    //importing th conntion
    require_once "./adminPanel/config.php";


  // ================form valiation=====================
  if (empty(trim($_POST["name"]))) {
    $name_err = "Type Your Name To write Message";
  } else {
    $name = trim($_POST["name"]);
  }



  if (empty(trim($_POST["email"]))) {
    $email = "";
  } else {
    $email = trim($_POST["email"]);
  }


if (empty(trim($_POST["message"]))) {
    $message_err = "Message can not be empty";
  } else {
    $message = trim($_POST["message"]);
  }



   

  # checking for error and save the data  
    if(empty($name_err) && empty($message_err))
    {

        //if no errors store the values in db 
         # Prepare a select statement
        $sql = "INSERT INTO `messages` (`name`, `email`, `Message`,`created_at`)";
        $sql.= "VALUES ('{$name}', '{$email}', '{$message}', current_timestamp())";


        session_start();
        if (mysqli_query($link, $sql))
        {
           $_SESSION["session_message_success"] = "Message sent successfully";
        }
         else {
            $_SESSION["session_message_error"] = "Error: " . $sql . "<br>" . mysqli_error($link);
        }


    }
   

}
?>





















<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content>
    <meta name="author" content="DynamicLayers">
    <title>Charitify || NGO/Charity/Fundraising Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/themify-icons.css">

    <link rel="stylesheet" href="css/elegant-font-icons.css">

    <link rel="stylesheet" href="css/elegant-line-icons.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/venobox/venobox.css">

    <link rel="stylesheet" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/slicknav.min.css">

    <link rel="stylesheet" href="css/css-animation.min.css">

    <link rel="stylesheet" href="css/nivo-slider.css">

    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>

    <!-- <div class="site-preloader-wrap">
        <div class="spinner"></div>
    </div> -->
    <header id="header" class="header-section">
        <div class="top-header">
            <div class="container">
                <div class="top-content-wrap row">
                    <div class="col-sm-8">
                        <ul class="left-info">
                            <li><a href="#"><i class="ti-email"></i><span class="__cf_email__" data-cfemail="4e072028210e17213b3c0a21232f2720602d2123">info@himal-i.org</span></a></li>
                            <li><a href="#"><i class="ti-mobile"></i>+977-9847012909</a></li>
                        </ul>
                    </div>
                    <!-- =============================== Social Media ============================= -->
                    <div class="col-sm-4 d-none d-md-block">
                        <ul class="right-info">
                            <li><a href="https://www.facebook.com/HIFSRS" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!-- =============================== Social Media ============================= -->
                </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div class="bottom-content-wrap row">
                    <div class="col-sm-4">
                        <div class="site-branding">
                            <a href="index.html"><img src="img/logo.png" alt="Brand"></a>
                            <p>For Sustainable And Resilient Society</p>
                        </div>
                    </div>
                    <div class="col-sm-8 text-right">
                        <ul id="mainmenu" class="nav navbar-nav nav-menu">
                            <li class="active"> <a href="index.php">Home</a>

                            </li>
                            <li><a href="about.php">About</a>
                                <ul>
                                    <li><a href="./about.php#executives">Executive Board</a></li>
                                    <li><a href="./about.php#staff">Staff </a></li>
                                    <li><a href="./about.php#advisors">Advisor </a></li>
                                    <li><a href="./about.php#coverage">Coverage </a></li>
                                    <li><a href="./about.php#implementing">Implementing Partners </a></li>
                                </ul>
                            </li>
                            <li><a href="stories.php">Impact of Stories</a></li>


                            <li><a href="area1.php">Strategic Areas</a>
                                <ul>
                                    <li><a href="area1.php">Strategic Area 1</a></li>
                                    <li><a href="area2.php">Strategic Area 2</a></li>
                                    <li><a href="area3.php">Strategic Area 3</a></li>
                                </ul>
                            </li>
                            <li> <a href="knowledge-hub.php">Knowledge Hub</a></li>
                             
                            <li> <a href="contact.php">Contact</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header-height"></div>
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Contact With Us</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>
    </div>
    <section class="contact-section padding">
        <div id="google_map"></div>
        <div class="container">
            <div class="row contact-wrap">
                <div class="col-md-6 xs-padding">
                    <div class="contact-info">
                        <h3>Get in touch</h3>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.</p>
                        <p>The secret to happiness lies in helping others. Never underestimate the difference.</p>
                        <ul>
                            <li><i class="ti-location-pin"></i> Head Office: Gharapjhong-4, Mustang, <br> Program Coordination Office: Kathmandu, Nepal</li>
                            <li><i class="ti-mobile"></i> +977 9847012909</li>
                            <li><i class="ti-email"></i> <a href="https://html.dynamiclayers.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a7fec8d2d5c2cac6cecbe7c4c8cad7c6c9dec9c6cac289c4c8ca">info@himal-i.org</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="contact-form">
                        <h3>Drop us a line</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-horizontal">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="submit" class="default-btn" type="submit">Send Message</button>
                                </div>
                            </div>
                            <?php if(isset($_SESSION["session_message_success"])){
                            ?>
                             <div  class="alert alert-success" role="alert">
                                 <?php echo $_SESSION["session_message_success"] ?>
                             </div>
                            <?php
                                unset($_SESSION['views']);
                                } 
                            ?>
                             <?php if(isset($_SESSION["session_message_error"])){
                            ?>
                             <div  class="alert alert-danger" role="alert">
                                 <?php echo $_SESSION["session_message_error"] ?>   
                             </div>
                            <?php
                                unset($_SESSION['"session_message_error']);
                                } 
                            ?>
                            <!-- <div id="form-messages" class="alert" role="alert"></div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

   <?php include("./footer.php");?>