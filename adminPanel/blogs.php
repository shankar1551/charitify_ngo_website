<?php include("./adminNavbar.php"); ?>



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
                            <a class="btn btn-primary m-2" href="./Createblog.php">Create New Blog</a>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <div class="row">
                                
                                    
                 <!-- ===============single blog========= -->

                                <?php
                                 $sql = "SELECT * from blogs ORDER BY id DESC";
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
                                                    echo $row['title'];
                                                    ?>
                                            </a></h5>

                                            <p>
                                                <?php
                                                    echo $row['subtitle'];
                                                ?>
                                            </p>
                                            <div class="btn-bar">
                                            <a href="../story.php?title=<?php echo $row['title'] ?>" class="post-meta">Read More</a>

                                               
                                            <form action="./delete.php" method="POST">
                                                <input type="hidden"  name="delete_blog" value="<?php echo $row['id'] ?>">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                           </form>

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




