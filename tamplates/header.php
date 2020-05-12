<!-- START HEADER AREA -->
<header class="header-area header-wrapper">
    <!-- header-top-bar -->
    <div id="sticky-header-top-bar" class="header-top-bar plr-185">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-none d-md-block">
                    <div class="call-us">
                        <p class="mb-0 roboto">(+36) 707794867</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="top-link clearfix">
                        <ul class="link f-right">
                            <?php if ($a_user["aloggedIn"] == false) : ?>
                                <?php if ($user["loggedIn"]) : ?>
                                    <li>
                                        <span class="login_data"><?php esc($user["name"]) ?></span>
                                    </li>
                                    <li>
                                        <a href="/myData">
                                            <i class="zmdi zmdi-account"></i>
                                            Adataim
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/logout">
                                            <i class="zmdi zmdi-face"></i>
                                            Kijelentkezés
                                        </a>
                                    </li>
                                <?php else : ?>
                                    <li>
                                        <span class="login_data">Jelentkezz be</span>
                                    </li>
                                    <li>
                                        <a href="/login">
                                            <i class="zmdi zmdi-lock"></i>
                                            Bejelentkezés / Regisztráció
                                        </a>
                                    </li>
                                <?php endif ?>
                            <?php else : ?>
                                <?php if ($a_user["aloggedIn"]) : ?>
                                    <li>
                                        <span class="login_data">A <?php esc($a_user["aUserName"]) ?></span>
                                    </li>
                                    <li>
                                        <a href="/adminlogout">
                                            <i class="zmdi zmdi-face"></i>
                                            Kijelentkezés
                                        </a>
                                    </li>
                                <?php else : ?>
                                    <li>
                                        <span class="login_data">Jelentkezz be</span>
                                    </li>
                                    <li>
                                        <a href="/login">
                                            <i class="zmdi zmdi-lock"></i>
                                            Bejelentkezés
                                        </a>
                                    </li>
                                <?php endif ?>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle-area -->
    <div id="sticky-header" class="header-middle-area">
        <div class="container-fluid">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <!-- logo -->
                    <div class="container col-lg-2 col-md-4">
                        <div class="img-decoration">
                            <img id='gear' src='data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMjQiIHdpZHRoPSI4OTYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8y%0D%0AMDAwL3N2ZyI+CiAgPHBhdGggZD0iTTQ0Ny45MzggMzUwQzM1OC41MzEgMzUwIDI4NiA0MjIuNTMx%0D%0AIDI4NiA1MTJjMCA4OS4zNzUgNzIuNTMxIDE2Mi4wNjIgMTYxLjkzOCAxNjIuMDYyIDg5LjQzOCAw%0D%0AIDE2MS40MzgtNzIuNjg4IDE2MS40MzgtMTYyLjA2MkM2MDkuMzc1IDQyMi41MzEgNTM3LjM3NSAz%0D%0ANTAgNDQ3LjkzOCAzNTB6TTc3Mi42MjUgNjA1LjA2MmwtMjkuMTg4IDcwLjMxMiA1Mi4wNjIgMTAy%0D%0ALjI1IDYuODc1IDEzLjUtNzIuMTg4IDcyLjE4OEw2MTEuNzUgODA3LjM3NWwtNzAuMzEyIDI4Ljg3%0D%0ANUw1MDUuNzUgOTQ1LjVsLTQuNTYyIDE0LjVIMzk5LjE1NkwzNTUgODM2LjY4OGwtNzAuMzEyLTI5%0D%0ALTEwMi40MDQgNTEuOTM4LTEzLjUgNi43NS03Mi4xNTYtNzIuMTI1IDU1Ljg3NS0xMTguNS0yOC45%0D%0ANjktNzAuMjVMMTQuNDY5IDU2OS44NzUgMCA1NjUuMTg4VjQ2My4yMTlMMTIzLjQwNiA0MTlsMjgu%0D%0AOTY5LTcwLjE4OC01MS45MDYtMTAyLjQ2OS02Ljg0NC0xMy40MzggNzIuMDYyLTcyLjA2MiAxMTgu%0D%0ANTk0IDU1Ljg0NCA3MC4yMTktMjkuMDMxIDM1LjY1Ni0xMDkuMTg4TDM5NC43NSA2NGgxMDJsNDQu%0D%0AMTg4IDEyMy40NjkgNzAuMTI1IDI5LjAzMUw3MTMuNSAxNjQuNTMwOTk5OTk5OTk5OTVsMTMuNjI1%0D%0ALTYuODQ0IDcyLjEyNSA3Mi4wNjItNTUuODc1IDExOC40MDZMNzcyLjI1IDQxOC41bDEwOS4zNzUg%0D%0AMzUuNjU2TDg5NiA0NTguNzV2MTAxLjkzOEw3NzIuNjI1IDYwNS4wNjJ6IiAvPgo8L3N2Zz4K' height="50">
                        </div>
                        <div class="logo">
                            <a href="/">
                                <img src="img/logo/logoigb.png" alt="main logo">
                            </a>
                        </div>
                    </div>
                    <!-- primary-menu -->
                    <div class="col-lg-10 d-none d-lg-block">
                        <nav id="primary-menu">
                            <ul class="main-menu text-center">
                                <li><a class="scroll" href="./#about-us">rólunk</a></li>
                                <li><a class="scroll" href="./#new-mobile">mobiltelefonok</a>
                                </li>
                                <li><a class="scroll" href="./#mobile-case">tokok</a> </li>
                                <li><a class="scroll" href="./#mobile-glass">kijelző védők</a>
                                </li>
                                <li><a class="scroll" href="./#special-offe">havi akció</a></li>
                                <li><a href="/monthly-offer">havi ajánlatunk</a></li>
                                <li><a class="scroll" href="./#contact">kapcsolat</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER AREA -->
<!-- START MOBILE MENU AREA -->
<div class="mobile-menu-area d-block d-lg-none section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a class="scroll" href="./#about-us">rólunk</a></li>
                            <li><a class="scroll" href="./#new-mobile">mobiltelefonok</a>
                            </li>
                            <li><a class="scroll" href="./#mobile-case">tokok</a> </li>
                            <li><a class="scroll" href="./#mobile-glass">kijelző védők</a>
                            </li>
                            <li><a class="scroll" href="./#special-offe">havi akció</a></li>
                            <!-- <li><a href="/monthly-offer">havi ajánlatunk</a></li> -->
                            <li><a class="scroll" href="./#contact">kapcsolat</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MOBILE MENU AREA -->
<!-- Modal -->
<div class="modal fade col-xl-12" id="CookieModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-product clearfix">
                    <div class="cookie-product-info">
                        <div class="cookie-product-info-first-phase">
                            <form method="POST" action="/">
                                <div class="form-group">
                                    <label for="title">A kényelmed érdekében sütiket használunk.</label>
                                </div>
                                <button type="submit" name="cookies" id="cookies" class="btn cookie-product-info-first-phase-btn-okay">Elfogadom</button>
                                <button type="submit" name="not-accepted-cookies" id="not-accepted-cookies" class="btn cookie-product-info-first-phase-btn-not-accepted">Nem fogadom el</button>
                            </form>
                            <button class="btn cookie-product-info-first-phase-btn-overview">Áttekintés</button>
                        </div>
                        <div class="cookie-product-info-second-phase">
                            <button class="btn"><i class="zmdi zmdi-arrow-left"></i></button>
                            <h1>Adatvédelmi áttekintés</h1>
                            <div class="quick-desc">
                                Ez a weboldal sütik segítségével javítja az Ön élményét, miközben Ön a weblapon navigál. Ezek közül a sütik közül a szükséges kategóriába sorolt sütik az Ön böngészőjében tárolódnak, mivel nélkülözhetetlenek az alapvető működésheza weboldal funkciói. Ezenkívül harmadik féltől származó sütiket is használunk, amelyek segítenek nekünk elemezni és megérteni, hogyan használja ezt a weboldalt. Ezeket a sütiket csak az Ön hozzájárulásával tárolja az Ön böngészőjében. Önnek lehetősége van ezeknek a sütiknek a letiltására is. Ezeknek a sütiknek a letiltása azonban hatással lehet a böngészési élményre.
                            </div>
                        </div>
                        <div class="not-accepted-cookie-product-info-second-phase">
                            <h1>Biztos nem fogadod el?</h1>
                            <div class="quick-desc">
                                Ha nem fogadod el, nem fogod látni a regisztrációhoz - bejelentkezéshez tartozó felületet. Nem tudsz majd regisztrálni, továbbá rontja a felhasználói élményt! Biztosan ezt szeretnéd? </div> <br>
                            <form method="POST" action="/iGSM-PHP-DEMO">
                                <button type="submit" name="not-accepted-cookies-true" id="not-accepted-cookies-true" class="btn cookie-product-info-first-phase-btn-okay">igen</button>
                                <button type="submit" name="not-accepted-cookies-false" id="not-accepted-cookies-false" class="btn cookie-product-info-first-phase-btn-not-accepted">Nem</button>
                            </form>
                        </div>
                    </div><!-- .product-info -->
                </div><!-- .modal-product -->
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div>
<!-- END Modal -->