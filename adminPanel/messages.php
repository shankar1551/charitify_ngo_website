<?php include("./adminNavbar.php"); ?>



    <!-- =============================== Header Section ============================= -->
    <div class="header-height"></div>


    <!-- ===============admin menu cards========================== -->
    <div class="row">
      <div class="col-10 m-auto">
        <section class="blog-listing gray-bg">
                <div class="container">
                    <div class="row bg-light justify-content-center">
                        <div class="col-sm-4 text-center"><h1 class="mt-3">Messages</h1></div><br>

                       
                    </div>
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <div class="row">
                                
                                    
                 <!-- ===============single blog========= -->
                                <?php
                                 $sql = "SELECT * from messages ORDER BY id DESC";
                                 $result = $link->query($sql);

                                if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {

                                ?>

                                <div class="col-sm-4 mb-5 mt-5">
                                    <div class="card" style="width: 18rem;">
                                      <div class="card-body">
                                        <h4 class="card-title">
                                            <img src="./assets/face.png" style="height: 50px;">
                                            <?php echo $row['name'] ?>
                                        </h4>
                                        <p class="card-text"> <?php echo $row['message'] ?></p>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                      </div>
                                    </div>
                                </div>



                            <?php 
                             }
                            } else {

                            ?>
                                 <div class="col-sm-4 mb-5 mt-5">
                                    <div class="card" style="width: 18rem;">
                                      <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's contome quick example text to build on the card title and make up the bulk of the card's contome quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                      </div>
                                    </div>
                                </div>
                            <?php
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




