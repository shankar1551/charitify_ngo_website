<?php

require_once "./config.php";

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
    <div class="row bg-dark">
      <div class="col-10 m-auto">
        <section class="blog-listing gray-bg">
                <div class="container">
                    <div class="row bg-light justify-content-center">
                        <div class="col-sm-4 text-center"><h1 class="mt-3">Blogs</h1></div>

                        <div class="col-lg-12">
                            <a class="btn btn-primary m-2" href="">Create New Blog</a>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <div class="row">
                                
                                    
                 <!-- ===============single blog========= -->

                                <?php
                                 $sql = "SELECT * from blogs";
                                 $result = $link->query($sql);

                                if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {

                                ?>

                                <div class="col-sm-4">
                                    <div class="blog-grid">
                                        <div class="blog-img">
                                            <div class="date">
                                                <span>
                                                    <?php
                                                        echo date("d", strtotime($row["createtd_at"]));
                                                    ?>
                                                </span>
                                                <label>
                                                     <?php
                                                        echo date("F", strtotime($row["createtd_at"]));
                                                    ?>
                                                </label>
                                            </div>
                                            <a href="#">
                                                <img src="./upload/<?php echo $row['image1'];  ?>" title="" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-info">
                                            <h5><a href="#">
                                                <?php
                                                    echo implode(' ', array_slice(str_word_count($row['title'], 2), 0, 6));
                                                    ?>
                                            </a></h5>

                                            <p>
                                                <?php
                                                    echo implode(' ', array_slice(str_word_count($row['subtitle'], 2), 0, 12));
                                                ?>
                                            </p>
                                            <div class="btn-bar">
                                                <a href="#" class="px-btn-arrow m-3">
                                                    <span>Read More</span>
                                                    <i class="arrow"></i>
                                                </a>
                                               
                                                <a href="#" class="px-btn-arrow btn-danger m-3">
                                                    <span>Delete</span>
                                                    <i class="arrow"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                            <?php 
                             }
                            } else {
                              echo "0 results";
                            }

                            ?>
                    <!-- ====================Single Blog end--------- -->
                                
                              

                                <!-- <div class="col-12">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div> -->

                            </div>
                        </div>

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




