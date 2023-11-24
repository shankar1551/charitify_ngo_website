<?php
require_once "./adminPanel/config.php";

   
$story_slug = $_GET['title'];
$sql = "SELECT * from blogs where title='{$story_slug}'";
 $result = $link->query($sql);
 $data = $result->fetch_assoc()
// die();
?>




<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                            <li><a href="#"><i class="ti-email"></i><span class="__cf_email__" data-cfemail="d29bbcb4bd928bbda7a096bdbfb3bbbcfcb1bdbf">info@himal-i.org</span></a></li>
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

        <!-- =============================== Top Heading ============================= -->
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
    <!-- =============================== Top Heading ============================= -->


    <div class="header-height"></div>

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2 class="" style="line-height: 65px;"><?php echo $data['subtitle'] ?><h2>
                <p></p>
                <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Strategic Area 1:</li>
                </ol> -->
            </div>
        </div>
    </div>

    <!-- =============================== BODY Part ============================= -->
    <section class="blog-section bg-grey padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 sm-padding">
                    <div class="blog-items single-post row">
                        <div class="col-12 m-2">
                            
                            <h2 style="line-height: 65px;">
                                <?php echo $data['subtitle']  ?>
                            </h2>
                        </div>

                        <div class="col-12 m-2">
                            <img class="p-4" src="./adminPanel/upload/<?php echo $data['image1']  ?>" alt="blog post">
                        </div>

                        <div class="col-12 m-2">
                             <p> <?php echo $data['para1']; ?> </p>
                        </div>
                        <div class="col-12">
                            
                            <?php
                                 if(!empty($data['image2']))
                                 {
                            ?>
                                    <br>
                                    <img class="p-4" src="./adminPanel/upload/<?php echo $data['image2']  ?>" alt="blog post">
                            <?php  } ?>
                        </div>

                        <div class="col-12 m-2">
                            
                             <?php
                                 if(!empty($data['para2']))
                                 {
                                ?>                                    
                                    <p> <?php echo $data['para2']; ?></p>

                                <?php  } ?>

                        </div>

                        <div class="col-12 m-3">
                            
                            <?php
                                if(!empty($data['image3'])){
                            ?>
                                <img class="p-4" src="./adminPanel/upload/<?php echo $data['image3']  ?>" alt="blog post">
                            <?php  } ?>
                        </div>

                        <div class="col-12">
                            <?php
                         if(!empty($data['para3'])) {
                        ?>
                            <p> <?php echo $data['para3']; ?> </p>
                        <?php } ?>
                        </div>
                           
                    


                    
                            </div>
                        </div>
                    </div>
                </div>

                <!-- =============================== Related Projects ============================= -->
               <!--  <div class="col-lg-3 sm-padding">
                    <div class="sidebar-wrap">
                        <div class="sidebar-widget mb-50">
                            <h4>Related Projects</h4>
                            <ul class="recent-posts">
                                <li>
                                    <img src="img/Building Resiliance (2).jpeg" alt="blog post">
                                    <div>
                                        <h4><a href="building-resilience.html">Building Resilience of Urban Community in Nepal</a></h4>
                                        <span class="date"><i class="fa fa-clock-o"></i> Jan - July 2022</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="img/Winter support.jpeg" alt="blog post">
                                    <div>
                                        <h4><a href="wintersupporting.html">Winter Support to Flood Affected Community of Mustang</a></h4>
                                        <span class="date"><i class="fa fa-clock-o"></i> Feb - March 2022</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="img/Covid.jpeg" alt="blog post">
                                    <div>
                                        <h4><a href="covidrespons.html">COVID Response Project</a></h4>
                                        <span class="date"><i class="fa fa-clock-o"></i> April - Jun 2021</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                     =============================== Related Projects ============================= -->

                    </div>
                </div> 
    </section>
    <!-- =============================== BODY Part ============================= -->


<div >


    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "177517895442914");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script> 
</div>

<?php include("./footer.php");?>
