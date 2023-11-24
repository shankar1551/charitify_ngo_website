<?php 
    require_once "./adminPanel/config.php";
?>

<!doctype html>
<html class="no-js" lang="en">
<<head>
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
                                <li><a href="#"><i class="ti-email"></i><span class="__cf_email__" data-cfemail="ace5c2cac3ecf5c3d9dee8c3c1cdc5c282cfc3c1">info@himal-i.org</span></a></li>
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
                            <a href="index.php"><img src="img/logo.png" alt="Brand"></a>
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
                    <h2>Blog Grid</h2>
                    <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="blog-section bg-grey padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 xs-padding">
                        
                        <div class="blog-items grid-list row">




                            <?php

                                $sql = "SELECT * from blogs   ORDER BY id DESC;";
                                 $result = $link->query($sql);

                                if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {


                            ?>
                              
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="./adminPanel/upload/<?php echo $row['image1']  ?>" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> 
                                            <?php 
                                                echo date("d-M, Y", strtotime($row["createtd_at"]));
                                            ?>
                                        </span>
                                        <h3>
                                            <a href="#">
                                                <?php 
                                                   echo $row["title"];
                                                ?>
                                            </a>
                                        </h3>
                                        <p>
                                            <?php
                                                    echo implode(' ', array_slice(str_word_count($row['subtitle'], 2), 0, 15));
                                                ?> 
                                        </p>
                                        <a href="./story.php?title=<?php echo $row['title'] ?>" class="post-meta">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <?php 
                             }
                                } else 
                                {
                               
                            ?>



                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <h3>No Stories for now. Stay Tuned..</h3>
                                </div>
                            </div>






                            <?php

                                } 
                            ?>
                           
                        </div>
                     
                    </div>
                </div>
            </div>
        </section>


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
