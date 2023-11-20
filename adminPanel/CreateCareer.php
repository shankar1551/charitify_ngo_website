<?php

include './isLoggedIn.php';



# Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    //importing th conntion
    require_once "./config.php";


  // ================form valiation=====================
  if (empty(trim($_POST["title"]))) {
    $title_err = "Title is missing";
  } else {
    $title = trim($_POST["title"]);
  }



  if (empty(trim($_POST["sub_title"]))) {
    $sub_title = "";
  } else {
    $sub_title = trim($_POST["sub_title"]);
  }



   //valting the pdf file
   // check if pdf is uploaded or not
  if(file_exists($_FILES['notice']['tmp_name']) || is_uploaded_file($_FILES['notice']['tmp_name']))
  {
    $filecheck = basename($_FILES['notice']['name']);
    $ext = strtolower(substr($filecheck, strrpos($filecheck, '.') + 1));

    if (!$ext == "pdf" )
    {
        $notice_err = "Upload a proper pdf file";
    }
    else
    {
      
       move_uploaded_file($_FILES["notice"]["tmp_name"],"./upload/career/" . $_FILES["notice"]["name"]);
       // echo "Stored in: " . "upload/" . $_FILES["image_1"]["name"];
       $notice = $_FILES["notice"]["name"]; 
    }
  }
  else
  {
    $notice_err = 'upload a pdf file';
  }

   



// ========================Blog part three==============
   

  # checking for error and save the data  
    if(empty($title_err) && empty($notice_err))
    {

        //if no errors store the values in db 
         # Prepare a select statement
        $sql = "INSERT INTO `career` (`title`, `subtitle`, `file_link`, `created_at`)";
        $sql.= "VALUES ('{$title}', '{$sub_title}', '{$notice}', current_timestamp())";


        if (mysqli_query($link, $sql))
        {
          echo "New record created successfully";
        }
         else {
              echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }

        mysqli_close($link);

    }
   

}
?>



<!doctype html>
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content>
    <meta name="author" content="DynamicLayers">
    <title>Himal-I || Admin Panel || Impact of Stories</title>
    <link rel="shortcut icon" type="../image/x-icon" href="img/favicon.png">

    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/themify-icons.css">

    <link rel="stylesheet" href="../css/elegant-font-icons.css">

    <link rel="stylesheet" href="../css/elegant-line-icons.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/venobox/venobox.css">

    <link rel="stylesheet" href="../css/owl.carousel.css">

    <link rel="stylesheet" href="../css/slicknav.min.css">

    <link rel="stylesheet" href="../css/css-animation.min.css">

    <link rel="stylesheet" href="../css/nivo-slider.css">

    <link rel="stylesheet" href="../css/main.css">

    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" type="text/css" href="./adminCss/admin.css">
    <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    <div class="site-preloader-wrap">
        <div class="spinner"></div>
    </div>
    <header id="header" class="header-section">
        <div class="top-header">
            <div class="container">
                <div class="top-content-wrap row">
                    <div class="col-sm-8">
                        <ul class="left-info">
                            <li><a href="index.html"><i class="ti-email"></i><span class="__cf_email__" data-cfemail="31785f575e71685e4443755e5c50585f1f525e5c">info@himal-i.org</span></a></li>
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

        <!-- =============================== Header Section ============================= -->
        <div class="bottom-header">
            <div class="container">
                <div class="bottom-content-wrap row">
                    <div class="col-sm-4">
                        <div class="site-branding">
                            <a href="index.html"><img src="../img/logo.png" alt="Brand"></a>
                            <p>For Sustainable And Resilient Society</p>
                        </div>
                    </div>
                    <div class="col-sm-8 text-right">
                        <ul id="mainmenu" class="nav navbar-nav nav-menu">
                            <li class="active"> <a href="index.html">Home</a></li>
                            <li><a href="stories.html">Impact of Stories Create/ Delete</a></li>
                            <li> <a href="contact.html">Logout</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- =============================== Header Section ============================= -->
    <div class="header-height"></div>


    <!-- ===============admin menu cards========================== -->
    <div class="row">
      <div class="col-10 m-auto">
        <section class="blog-listing gray-bg">
                <div class="row justify-content-center p-3 m-2">
                     <div class="col-12">
                     <div class="row bg-light justify-content-center">
                        <div class="col-sm-4 text-center"><h2 class="mt-3">New Career Notice</h2></div>
                    </div>
                     
                 </div> 
                    

                    <!-- Form start -->
                    <div class="col-lg-10">
                        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate enctype="multipart/form-data">
                          
                          <div class="form-group mt-2">
                            <h4 class=" alert-danger" role="alert">
                              <?php
                                  if (!empty($title_err)) 
                                      echo $title_err ;
                              ?>
                            </h4>
                            <label for="title">Title Of career notice</label>
                            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter The  Title">
                          </div>

                          <div class="form-group mt-2">
                            <h4 class=" alert-danger" role="alert">
                              <?php
                                    if (!empty($sub_title_err)) 
                                      echo $sub_title_err ;
                              ?>
                            </h4>
                            <label for="title">Sub-title Of career notice</label>
                            <input type="textbox" class="form-control" id="sub_title" name="sub_title" aria-describedby="emailHelp" placeholder="Enter The  subtitle">
                          </div>
                          <br><br>
                  
                          <div class="form-group">
                            <h4 class=" alert-danger" role="alert">
                                <?php
                                    if (!empty($notice_err)) 
                                      echo $notice_err ;
                              ?>
                            </h4>
                            <label for="exampleFormControlFile1">Upload pdf file</label>
                            <input type="file" class="form-control-file" id="notice" name="notice">
                          </div>
                          <br><br>


                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <!-- Form End -->







                    </div>
                </div>

              
            </section>  
              
        </div>
    </div>







            <!-- ====================================Footer Section========================== -->
             <footer class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 sm-padding">
                            <div class="copyright">Copyright © 2023 : Goldweb International | All Rights Reserved. </div>
                        </div>
                        <div class="col-md-6 sm-padding">
                            <ul class="footer-social">
                                <li><a href="#">Orders</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Report Problem</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

            <!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
            <script src="../js/vendor/jquery-1.12.4.min.js"></script>

            <script src="../js/vendor/bootstrap.min.js"></script>

            <script src="../js/vendor/tether.min.js"></script>

            <script src="../js/vendor/imagesloaded.pkgd.min.js"></script>

            <script src="../js/vendor/owl.carousel.min.js"></script>

            <script src="../js/vendor/jquery.isotope.v3.0.2.js"></script>

            <script src="../js/vendor/smooth-scroll.min.js"></script>

            <script src="../js/vendor/venobox.min.js"></script>

            <script src="../js/vendor/jquery.ajaxchimp.min.js"></script>

            <script src="../js/vendor/jquery.counterup.min.js"></script>

            <script src="../js/vendor/jquery.waypoints.v2.0.3.min.js"></script>

            <script src="../js/vendor/jquery.slicknav.min.js"></script>

            <script src="../js/vendor/jquery.nivo.slider.pack.js"></script>

            <script src="../js/vendor/letteranimation.min.js"></script>

            <script src="../js/vendor/wow.min.js"></script>

            <script src="../js/contact.js"></script>

            <script src="../js/main.js"></script>
            <script>
                (function() {
                    var js = "window['__CF$cv$params']={r:'8187d5d969389884',t:'MTY5NzcwNjA3Ni4wMTQwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/7ff8d35b/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
                    var _0xh = document.createElement('iframe');
                    _0xh.height = 1;
                    _0xh.width = 1;
                    _0xh.style.position = 'absolute';
                    _0xh.style.top = 0;
                    _0xh.style.left = 0;
                    _0xh.style.border = 'none';
                    _0xh.style.visibility = 'hidden';
                    document.body.appendChild(_0xh);

                    // function handler() {
                    //     var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                    //     if (_0xi) {
                    //         var _0xj = _0xi.createElement('script');
                    //         _0xj.innerHTML = js;
                    //         _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                    //     }
                    // }
                    if (document.readyState !== 'loading') {
                        handler();
                    } else if (window.addEventListener) {
                        document.addEventListener('DOMContentLoaded', handler);
                    } else {
                        var prev = document.onreadystatechange || function() {};
                        document.onreadystatechange = function(e) {
                            prev(e);
                            if (document.readyState !== 'loading') {
                                document.onreadystatechange = prev;
                                handler();
                            }
                        };
                    }
                })();
            </script>
</body>
</html>



<!-- ==============handling the submission of form============== -->
