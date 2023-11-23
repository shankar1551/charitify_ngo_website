<?php

include './isLoggedIn.php';
require_once "./config.php";



# Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    //importing th conntion
    require_once "./config.php";


  // ================form valiation=====================

   //valting the image file
   // check if image is uploaded or not
  if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name']))
  {
    $filecheck = basename($_FILES['image']['name']);
    $ext = strtolower(substr($filecheck, strrpos($filecheck, '.') + 1));

    if (!(($ext == "jpg" || $ext == "gif" || $ext == "png") && ($_FILES["image"]["type"] == "image/jpeg" || $_FILES["image"]["type"] == "image/gif" || $_FILES["image"]["type"] == "image/png")))
    {
        $img_error = "Upload a proper image";
    }
    else
    {
      
       move_uploaded_file($_FILES["image"]["tmp_name"],"./upload/gallery/" . $_FILES["image"]["name"]);
       $img = $_FILES["image"]["name"]; 
    }
  }
  else
  {
    $img_err = 'Pease Upload a Valid Image ';
  }

   
   $caption = trim($_POST["caption"]);



// echo "reachced 45"; die();
  # checking for error and save the data  
    if(empty($img_err))
    {

        //if no errors store the values in db 

        $sql = "INSERT INTO `gallery` (`file_link`,`caption`,`createtd_at`)";
        $sql.= "VALUES ('{$img}','{$caption}', current_timestamp())";

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


<?php include("./adminNavbar.php"); ?>



    <!-- =============================== Header Section ============================= -->
    <div class="header-height"></div>


    <!-- ===============admin menu cards========================== -->
    <div class="row">
      <div class="col-10 m-auto">
        <section class="blog-listing gray-bg">
                <div class="row justify-content-center p-3 m-2">
                 <div class="col-12">
                     <div class="row bg-light justify-content-center">
                        <div class="col-sm-4 text-center"><h2 class="mt-3">Upload Galery Image</h2></div>
                    </div>

                 </div>   
                    

                    <!-- Form start -->
                    <div class="col-lg-10">
                        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate enctype="multipart/form-data">
                          
                          

                          <!-- first part -->
                         
                          <div class="form-group">
                            <h4 class=" alert-danger" role="alert">
                                <?php
                                  if (!empty($image_err)) 
                                      echo $title_err ;
                                ?>  
                            </h4>
                            <label for="exampleFormControlFile1">Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                          </div>

                          <div class="form-group">
                            <h4 class=" alert-danger" role="alert">
                                <?php
                                  if (!empty($image_err)) 
                                      echo $title_err ;
                                ?>  
                            </h4>
                            <label for="exampleFormControlFile1">Caption</label>
                            <input type="text" class="form-control" id="caption" name="caption" placeholder="Write Your  Caption here">
                          </div>

                          <br><br>

                          <!-- Second part -->
                         
                         
                         


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
