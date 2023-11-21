
    <section class="widget-section padding">
        <div class="container">
            <div class="widget-wrap row">
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <img src="img/logo-light.png" alt="logo">
                        <p>Himalayan Initiatives for Sustainable and Resilient Society (Himal-I) is a non-governmental and non-profit making organization established in 2020 A.D (2077 B.S.). It is registered in District Administration Office (Reg. No. 237)
                            of Mustang district and affiliated in Social Welfare Council, Lalitpur (Affiliation No. 52069). </p>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <h3>Career</h3>
                        <ul class="widget-link">

                            <?php
                                 require_once "./adminPanel/config.php";
 
                                $sql = "SELECT * FROM career  ORDER BY id DESC LIMIT 1";
                                 $result = $link->query($sql);
                                 $data = $result->fetch_assoc();
                                 if ($result->num_rows > 0) {
                                  // output data of each row   
                            ?>
                                       
                                <h4 class="text-light"> 
                                    <?php   echo  $data['title']; ?>
                                </h4>
                                <p><?php   echo  $data['subtitle']; ?> </p>
                                <li>
                                    <a class="btn btn-success " style="width:50%" target="_blank" href="adminPanel/upload/career/<?php  echo $data['file_link'];
                                        ?>">View PDF
                                    </a>
                                </li>
                            <?php
                                }else
                                {
                            ?>

                                <h4>Notice Board is empty</h4>
                            <?php 
                                }
                             ?>
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
        <script src="js/vendor/captionbox.js"></script>


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
            var js = "window['__CF$cv$params']={r:'8187d5d969389884',t:'MTY5NzcwNjA3Ni4wMTQwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/b/scripts/jsd/7ff8d35b/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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

<!-- Mirrored from html.dynamiclayers.net/dl/charitify/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Oct 2023 09:01:35 GMT -->

</html>