<div class="breadcrumbs-section plr-200 mb-80 section">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Login / Register</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS SETCTION END -->

<!-- Start page content -->
<div id="page-content" class="page-wrapper section">

    <!-- LOGIN SECTION START -->
    <div class="login-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="registered-customers">
                        <h6 class="widget-title border-left mb-50">REGISZTRÁLT ÜGYFELEK</h6>
                        <?php if ($containsError) : ?>
                            <div class="alert alert-danger">
                                valami nem ok, próbáld meg újra
                            </div>
                        <?php endif ?>
                        <form method="POST" action="/iGSM-PHP-DEMO/login">
                            <div class="login-account p-30 box-shadow">
                                <p>Ha van fiókja velünk, kérjük, jelentkezzen be.</p>
                                <input type="text" name="email" id="email" placeholder="E-mail cím itt...">
                                <input type="password" name="password" id="password" placeholder="Jelszó">
                                <!-- <p><small><a href="#">Forgot our password?</a></small></p> -->
                                <button class="submit-btn-1 btn-hover-1" type="submit">Bejelentkezés</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- new-customers -->
                <div class="col-lg-6">
                    <div class="new-customers">
                        <form id="Registration_Form_ID" method="POST" action="/iGSM-PHP-DEMO/login/reg">
                            <h6 class="widget-title border-left mb-50">ÚJ VÁSÁRLÓK</h6>
                            <div class="alert alert-success inserted-alert-success">
                                <p id="inserted">
                                </p>
                            </div>
                            <div class="login-account p-30 box-shadow">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input id="register_name" name="register_name" type="text" placeholder="Teljes név">
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="register_email" name="register_email" type="text" placeholder="E-mail cím itt...">
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="register_password" name="register_password" type="password" placeholder="Jelszó">
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="register_password_2" name="register_password_2" type="password" placeholder="Jelszó megerősítése">
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="register_his_job" name="register_his_job" type="text" placeholder="foglalkozása...">
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="register_his_mobile" name="register_his_mobile" type="text" placeholder="milyen telefonja van...?">
                                    </div>
                                    <!-- <div class="col-sm-6">
                                               <select class="custom-select">
                                                   <option value="defalt">Település / Város</option>
                                                   <option value="c-1">Székesfehérvár</option>
                                                   <option value="c-2">Budapest</option>
                                                   <option value="c-3">Kaposvár</option>
                                               </select>
                                           </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit">Regisztráció</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN SECTION END -->
</div>
<!-- End page content -->