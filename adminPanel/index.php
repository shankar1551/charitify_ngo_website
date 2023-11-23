<?php include("./adminNavbar.php"); ?>


    <!-- =============================== Header Section ============================= -->
    <div class="header-height"></div>


    <!-- ===============admin menu cards========================== -->
    <div class="row" >
      <div class="col-lg-10 m-auto">
 
      <div class="row justify-content-center" style="height: 70vh;" >

        <div class="col-12 bg-light justify-content-center mt-4" style="height:10vh;">
                <h3 class="p-2 text-center">
                    Welcome Admin 
                </h3>
        </div>





        <div class="col-md-3 col-sm-2 col-lg-3 p-2 m-4">
            <div class="card justify-content-center" >
            <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
            <i class="fa fa-wrench" aria-hidden="true" style="height: 100%; width: 100%; font-size: 80px; padding-left: 40%;"></i>

            <div class="card-body">
              <h3 class="card-title text-center">Blogs/Stories</h3>
              <!-- <p class="text to build on the card title and make up the bulk of the card's content.</p> -->
              <div class="text-center"><a href="./blogs.php" class="btn btn-primary text-center">Manage</a> </div>
            </div>
          </div>
        </div>


        <div class=" col-md-3 p-2 col-sm-2 m-4" style="height:90px !important">
           <div class="card">
            <i class="fa fa-wrench" aria-hidden="true" style="height: 100%; width: 100%; font-size: 80px; padding-left: 40%;"></i>
            <div class="card-body">
              <h3 class="card-title text-center">Carrier</h3>
              <!-- <p class="card-text">Some  to build on the card title and make up the bulk of the card's content.</p> -->
              <div class="text-center"><a href="./career.php" class="btn btn-primary text-center">Manage</a> </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 p-2 col-sm-2 m-4" style="height:90px">
           <div class="card" >
                <i class="fa fa-wrench" aria-hidden="true" style="height: 100%; width: 100%; font-size: 80px; padding-left: 40%;"></i>            <div class="card-body">
              <h3 class="card-title text-center">Gallery</h3>
              <!-- <p class="card-text">Some to build on the card title and make up the bulk of the card's content.</p> -->
              <div class="text-center"><a href="gallery.php" class="btn btn-primary text-center">Manage</a> </div>
            </div>
          </div>
        </div>

      </div>

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




