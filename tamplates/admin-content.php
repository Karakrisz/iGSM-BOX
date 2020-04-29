<?php if ($a_user["aloggedIn"]) : ?>

    <!-- Start page content -->
    <div id="page-content" class="page-wrapper section">

        <!-- SHOP SECTION START -->
        <div class="shop-section bg-color-w mt-60 mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 order-lg-2 order-1">
                        <div class="shop-content">
                            <!-- shop-option start -->
                            <div class="shop-option box-shadow mt-30 mb-30 clearfix">
                                <!-- Nav tabs -->
                                <ul class="nav shop-tab f-left" role="tablist">
                                    <li>
                                        <a href="#grid-view" data-toggle="tab"><i class="zmdi zmdi-view-module"></i>Felhasználók</a>
                                    </li>
                                    <li>
                                        <a class="active" href="#list-view" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i>Üzenetek</a>
                                    </li>
                                </ul>
                                <!-- showing -->
                                <div class="showing f-right text-right">
                                    <span></span>
                                </div>
                            </div>
                            <!-- shop-option end -->
                            <!-- Tab Content start -->
                            <div class="tab-content">
                                <!-- grid-view -->
                                <div id="grid-view" class="tab-pane" role="tabpanel">
                                    <div class="row">
                                        <!-- product-item start -->
                                        <?php foreach ($getUsersContent as $Users) : ?>

                                            <div class="col-lg-4 col-md-6">
                                                <div class="product-item">
                                                    <div class="product-img">
                                                        <a href="/user/<?php esc($Users["id"]) ?>">
                                                            <img src="img/product/7.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <h6 class="product-title">
                                                            <a><?php esc($Users["name"]) ?> </a>
                                                        </h6>
                                                        <div class="pro-rating">
                                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                            <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                        </div>
                                                        <h3 class="pro-price"><?php esc($Users["email"]) ?></h3>
                                                        <ul class="action-button">
                                                            <li>
                                                                <a><i class="zmdi zmdi-favorite"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <!-- product-item end -->
                                    </div>
                                </div>
                                <!-- list-view -->
                                <div id="list-view" class="tab-pane active show" role="tabpanel">
                                    <div class="row">
                                        <!-- product-item start -->
                                        <?php foreach ($getUsersMessages as $MessagesData) : ?>
                                            <div class="col-lg-12">
                                                <div class="shop-list product-item">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/7.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="clearfix">
                                                            <h6 class="product-title f-left">
                                                                <a href="single-product.html"><?php esc($MessagesData["userName"]) ?> </a>
                                                            </h6>
                                                            <div class="pro-rating f-right">
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                                <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                            </div>
                                                        </div>
                                                        <h3 class="pro-price"><?php esc($MessagesData["userEmail"]) ?></h3>
                                                        <p><?php esc($MessagesData["message"]) ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <!-- product-item end -->
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Content end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOP SECTION END -->

    </div>
    <!-- End page content -->
<?php endif ?>