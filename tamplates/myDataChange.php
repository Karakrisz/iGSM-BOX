<!-- Start page content -->
<div id="page-content" class="page-wrapper bg-color-w section">
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
                                    <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Adataim módosítása</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="new-customers">
                                        <div class="p-30">
                                            <div class="alert alert-success inserted-alert-success">
                                                <p id="inserted">
                                                </p>
                                            </div>
                                            <form id="myDataChange" method="POST" action="/myData/edit">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Név" value="<?php esc($myData["name"]) ?>" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="email" id="email" placeholder="Név" value="<?php esc($myData["email"]) ?>" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button class="submit-btn-1 btn mt-30 btn-hover-1" type="submit">módosítás</button>
                                                    </div>
                                                    <?php if (($myData["status"]) == 'didNotBuy') : ?>
                                                        <div class="col-sm-6 text-center">
                                                            <h1>1500 Ft</h1>
                                                            <i>Kedvezmény jár</i>
                                                        </div>
                                                    <?php endif ?>
                                                </div>
                                            </form>
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