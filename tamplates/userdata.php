<!-- Start page content -->
<div id="page-content" class="page-wrapper section">

    <!-- USER DATA SECTION START -->
    <div class="login-section mt-80 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="my-account-content" id="accordion">
                        <!-- My Personal Information -->
                        <div class="card mb-15">
                            <div class="card-header" id="headingOne">
                                <h4 class="card-title mt-10">
                                    <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Ügyfél vásárlási státusza</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="new-customers">
                                        <div class="p-30">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h3 class="mt-10"><?php esc($Users["name"]) ?></h3>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h3 class="mt-10"><?php esc($Users["email"]) ?></h3>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h3 class="mt-10"><?php esc($Users["status"]) ?></h3>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form method="POST" action="/user/<?php esc($Users['id']) ?>/edit">
                                                        <button class="submit-btn-1 btn mt-30 btn-hover-1" type="submit">Levásárlás</button>
                                                    </form>
                                                </div>
                                                <?php if (($Users["status"]) == 'didNotBuy') : ?>
                                                    <div class="col-sm-6 text-center">
                                                        <h1>1500 Ft</h1>
                                                        <i>Kedvezmény jár</i>
                                                    </div>
                                                <?php endif ?>
                                                <?php if (($Users["status"]) == 'bought') : ?>
                                                    <div class="col-sm-6 text-center">
                                                        <h1>0 Ft</h1>
                                                        <i>Kedvezmény jár</i>
                                                    </div>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- USERDATA SECTION END -->
</div>
<!-- End page content -->