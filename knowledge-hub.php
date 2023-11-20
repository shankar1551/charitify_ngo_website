
<?php 
    require_once "./adminPanel/config.php";
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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="site-preloader-wrap">
        <div class="spinner"></div>
    </div>
    <header id="header" class="header-section">
        <div class="top-header">
            <div class="container">
                <div class="top-content-wrap row">
                    <div class="col-sm-8">
                        <ul class="left-info">
                            <li><a href="#"><i class="ti-email"></i><span class="__cf_email__" data-cfemail="cd84a3aba28d94a2b8bf89a2a0aca4a3e3aea2a0">info@himal-i.org</span></a></li>
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
                            <a href="index.php"><img src="img/logo.png" alt="Brand"></a>
                            <p>For Sustainable And Resilient Society</p>
                        </div>
                    </div>
                    <div class="col-sm-8 text-right">
                        <ul id="mainmenu" class="nav navbar-nav nav-menu">
                            <li class="active"> <a href="index.php">Home</a>

                            </li>
                            <li><a href="about.html">About</a>
                                <ul>
                                    <li><a href="./about.php#executives">Executive Board</a></li>
                                    <li><a href="./about.php#staff">Staff </a></li>
                                    <li><a href="./about.php#advisors">Advisor </a></li>
                                    <li><a href="./about.php#coverage">Coverage </a></li>
                                    <li><a href="./about.php#implementing">Implementing Partners </a></li>
                                </ul>
                            </li>
                            <li><a href="stories.html">Impact of Stories</a></li>


                            <li><a href="area1.html">Strategic Areas</a>
                                <ul>
                                    <li><a href="area1.php">Strategic Area 1</a></li>
                                    <li><a href="area2.php">Strategic Area 2</a></li>
                                    <li><a href="area3.php">Strategic Area 3</a></li>
                                </ul>
                            </li>
                            <li> <a href="knowledge-hub.php">Knowledge Hub</a></li>
                            <li> <a href="get-involved.php">Get Involved</a></li>
                            <li> <a href="contact.php">Contact</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- =============================== Header Section ============================= -->

    <div class="header-height"></div>
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Knowledge Hub</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Knowledge Hub</li>
                </ol>
            </div>
        </div>
    </div>
    <section class="gallery-section bg-grey bd-bottom padding">
        <div class="container">
           <!--  <div class="row">
                <ul class="gallery-filter align-center mb-30">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".branding">Branding</li>
                    <li data-filter=".design">Design</li>
                    <li data-filter=".wordpress">Wordpress</li>
                    <li data-filter=".marketing">Marketing</li>
                </ul>
            </div> -->
            <div class="gallery-items row">
                

                            <?php

                                $sql = "SELECT * from gallery";
                                 $result = $link->query($sql);

                                if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                            ?>


                <div class="col-lg-4 col-sm-6 single-item branding design">
                    <div class="gallery-wrap">
                        <img src="./adminPanel/upload/gallery/<?php echo $row['file_link'] ?>" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="./adminPanel/upload/gallery/<?php echo $row['file_link'] ?>"><i class="ti-image"></i></a>
                        </div>
                    </div>
                </div>





                            <?php 
                             }
                                }else 
                                {
                               
                            ?>



                            <div class="col-md-12 padding-15">
                                <div class="blog-post">
                                    <h3>No Gallery Imaes for now. Stay Tuned..</h3>
                                </div>
                            </div>






                            <?php

                                } 
                            ?>



                <!-- <div class="col-lg-4 col-sm-6 single-item marketing wordpress">
                    <div class="gallery-wrap">
                        <img src="img/gallery-2.jpg" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="img/gallery-2.jpg"><i class="ti-image"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 single-item wordpress design branding">
                    <div class="gallery-wrap">
                        <img src="img/gallery-3.jpg" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="img/gallery-3.jpg"><i class="ti-image"></i></a>
                        </div>
                    </div>
                </div> -->
<!--                 <div class="col-lg-4 col-sm-6 single-item design branding wordpress">
                    <div class="gallery-wrap">
                        <img src="img/gallery-4.jpg" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="img/gallery-4.jpg"><i class="ti-image"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 single-item branding marketing">
                    <div class="gallery-wrap">
                        <img src="img/gallery-5.jpg" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="img/gallery-5.jpg"><i class="ti-image"></i></a>
                        </div>
                    </div>
                </div> -->
               <!--  <div class="col-lg-4 col-sm-6 single-item marketing design">
                    <div class="gallery-wrap">
                        <img src="img/gallery-6.jpg" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="img/gallery-6.jpg"><i class="ti-image"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>



    <section class="widget-section padding">
        <div class="container">
            <div class="widget-wrap row">
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <img src="img/logo-light.png" alt="logo">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor</p>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <h3>Recent Campaigns</h3>
                        <ul class="widget-link">
                            <li><a href="#">First charity activity of this summer. <span>-1 Year Ago</span></a></li>
                            <li><a href="#">Big charity: build school for poor children. <span>-2 Year Ago</span></a></li>
                            <li><a href="#">Clean-water system for rural poor. <span>-2 Year Ago</span></a></li>
                            <li><a href="#">Nepal earthqueak donation campaigns. <span>-3 Year Ago</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <h3>Charitify Location</h3>
                        <ul class="address">
                            <li><i class="ti-email"></i> <a href="https://html.dynamiclayers.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a3eacdc5cce3faccd6d1e7cccec2cacd8dc0ccce">info@himal-i.org</a></li>
                            <li><i class="ti-mobile"></i> +977 9847012909</li>
                            <li><i class="ti-world"></i> www.himal-i.org</li>
                            <li><i class="ti-location-pin"></i> Head Office: Gharapjhong-4, Mustang<br>Program Coordination Office: Kathmandu, Nepal</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/vendor/tether.min.js"></script>

    <script src="js/vendor/imagesloaded.pkgd.min.js"></script>

    <script src="js/vendor/owl.carousel.min.js"></script>

    <script src="js/vendor/jquery.isotope.v3.0.2.js"></script>

    <script src="js/vendor/smooth-scroll.min.js"></script>

    <script src="js/vendor/venobox.min.js"></script>

    <script src="js/vendor/jquery.ajaxchimp.min.js"></script>

    <script src="js/vendor/jquery.counterup.min.js"></script>

    <script src="js/vendor/jquery.waypoints.v2.0.3.min.js"></script>

    <script src="js/vendor/jquery.slicknav.min.js"></script>

    <script src="js/vendor/jquery.nivo.slider.pack.js"></script>

    <script src="js/vendor/letteranimation.min.js"></script>

    <script src="js/vendor/wow.min.js"></script>

    <script src="js/contact.js"></script>

    <script src="js/main.js"></script>
    <script>
        (function() {
            var js = "window['__CF$cv$params']={r:'8187d6055fb39884',t:'MTY5NzcwNjA4Mi40NDcwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/b/scripts/jsd/7ff8d35b/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
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

<!-- Mirrored from html.dynamiclayers.net/dl/charitify/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Oct 2023 09:02:33 GMT -->

</html>