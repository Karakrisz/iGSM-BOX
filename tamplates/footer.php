<!-- START FOOTER AREA -->
<footer id="footer" class="footer-area footer-area-contact pt-50 bg-color-w section">
    <div id="contact" class="footer-top">
        <div class="container-fluid">
            <div class="plr-185">
                <div class="footer-top-inner gray-bg footer-box-s">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-4">
                            <div class="single-footer footer-about">
                                <div class="footer-logo">
                                    <img src="img/logo/logoigb.png" alt="">
                                </div>
                                <div class="footer-brief">
                                    <h1>Kövess minket!</h1>
                                    <p>Ha értesülni szeretnél havi akcióinkról, vagy termékeink újítását kísérnéd figyelemmel, akkor kövess minket.</p>
                                    <p>Folyamatosan bővül kínáltunk, legkorszerűbb terméket láthatod a legkedvezőbb áron!</p>
                                </div>
                                <ul class="footer-social">
                                    <li>
                                        <a class="facebook" href="https://www.facebook.com/igsmboxszekesfehervar/" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="instagram" href="https://www.instagram.com/igsmboxszekesfehervar/?hl=hu" title="Instagram">
                                            <i class="zmdi zmdi-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-footer">
                                <h4 class="footer-title border-left">Kérdése van?</h4>
                                <div class="footer-message">
                                    <form method="POST" action="/">
                                        <input type="email" name="mmail" id="mmail" placeholder="Az Ön email címe...">
                                        <textarea class="height-150" name="message" id="message" placeholder="Írja meg üzenetét..."></textarea>
                                        <?php if ($user["loggedIn"]) : ?>
                                            <button class="btn mt-50 submit-btn-1 mt-20 btn-hover-1 smessage-btn" type="submit">üzenet
                                                küldése</button>
                                        <?php else : ?>
                                            <a href="/login" class="btn mt-50 submit-btn-1 mt-20 btn-hover-1 smessageOff-btn">Jeletkezz be</a>
                                        <?php endif ?>
                                        <button class="btn mt-50 submit-btn-1 mt-20 btn-hover-1 cookies-set-btn" type="submit">cookie
                                            beállítások</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom black-bg">
        <div class="container-fluid">
            <div class="plr-185">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright-text">
                                <p>&copy; <a href="#" target="_blank">DevItems</a> 2020. Karakrisz. Minden jog
                                    fenntartva.
                                </p>
                                <a href="/informative">
                                    <p>Adatvédelmi tájékoztató</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="footer-payment text-right">
                                <li>
                                    <a href="#"><img src="img/payment/1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/payment/2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/payment/3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/payment/4.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER AREA -->
<!-- jquery latest version -->
<script src="/js/vendor/jquery-3.1.1.min.js"></script>
<!-- Popper js js -->
<script src="/js/popper.min.js"></script>
<!-- Bootstrap framework js -->
<script src="/js/bootstrap.min.js"></script>
<!-- jquery.nivo.slider js -->
<script src="/lib/js/jquery.nivo.slider.js"></script>
<!-- All js plugins included in this file. -->
<script src="/js/plugins.js"></script>
<!-- Modernizr JS -->
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="/js/main.js"></script>
<!-- Scroll JS -->
<script src="/js/scroll.js"></script>