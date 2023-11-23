
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
                    //define total number of results you want per page  
                $results_per_page = 9;  
              
                //find the total number of results stored in the database  
                $query = "select * from gallery ORDER BY 'id' ASC";  
                $result = mysqli_query($link, $query);  
                $number_of_result = mysqli_num_rows($result);  
              // echo $number_of_result;
                //determine the total number of pages available  
                $number_of_page = ceil ($number_of_result / $results_per_page);  
              
                //determine which page number visitor is currently on  
                if (!isset ($_GET['page']) ) {  
                    $page = 1;  
                } else {  
                    $page = $_GET['page'];  
                }  

                // //determine the sql LIMIT starting number for the results on the displaying page  
                $page_first_result = ($page-1) * $results_per_page;  
              
                // //retrieve the selected results from database   
                $query = "SELECT *FROM gallery ORDER BY id DESC LIMIT " . $page_first_result . ',' . $results_per_page; 
                // die($query); 
                $result = mysqli_query($link, $query);  
                  
                //display the retrieved result on the webpage  
                  if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_array($result)) { 

                        ?>

                            <div class="col-lg-4 col-sm-6 single-item branding design mb-4">
                                <div class="gallery-wrap" style="text-align:center;">
                                    <img src="./adminPanel/upload/gallery/<?php echo $row['file_link'] ?>" alt="gallery">
                                    <strong class="" style="font-size: 12px;"><?php echo $row['caption'] ?></strong>
                                    <div class="hover">
                                        <a class="img-popup" data-gall="galleryimg" href="./adminPanel/upload/gallery/<?php echo $row['file_link']?>"><i class="ti-image"></i></a>
                                    </div>
                                </div>
                            </div>




                        <?php
                        }  
                          
              
                //display the link of the pages in URL  
                
            } else{
            ?>

                            <div class="col-md-12 padding-15">
                                <div class="blog-post">
                                    <h3>No Gallery Imaes for now. Stay Tuned..</h3>
                                </div>
                            </div>

        <?php
            }

             ?>
            </div>



        <ul class="pagination_wrap align-center mt-30">
            <?php
                if (!isset ($_GET['page']) ) {  
                    $activePage = 1;  
                } else {  
                    $activePage = $_GET['page'];  
                } 


                for($page = 1; $page<= $number_of_page; $page++) { 
                    if($page ==$activePage)
                      echo '<li><a class="active" href = "./knowledge-hub.php?page=' . $page . '">' . $page . ' </a></li>';   
                    else
                    echo '<li><a class="" href = "./knowledge-hub.php?page=' . $page . '">' . $page . ' </a></li>';  
                    }
            ?>
                   
         </ul>

        </div>
    </section>


<?php include("./footer.php");?>