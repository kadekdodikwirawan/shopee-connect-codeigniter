<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php echo $toko->name; ?></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="all,follow" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" />
    <link rel="stylesheet" href="<?php echo base_url('/css/style.default.css') ?>" id="theme-stylesheet" />
</head>

<body>
    <div id="all">
        <div id="content">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <h1><?php echo $toko->name; ?></h1>
                            <p><?php echo nl2br($toko->description); ?></p>
                            <strong><?php echo $toko->shop_location; ?></strong>
                        </div>
                        <div class="box info-bar">
                            <div class="row">
                                <div class="col-md-12 col-lg-7 products-number-sort">
                                    <form class="form-inline d-block d-lg-flex justify-content-between flex-column flex-md-row">
                                        <div class="products-number"><a href="#" class="btn btn-sm btn-primary">12</a><a href="#" class="btn btn-outline-secondary btn-sm">24</a><a href="#" class="btn btn-outline-secondary btn-sm">All</a><span>products</span></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row products">
                            <?php foreach ($bestsell->data->sections[0]->data->item as $key => $value) { ?>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="flip-container">
                                            <div class="flipper">
                                                <div class="front">
                                                    <a href="detail.html"><img src="img/product1.jpg" alt="" class="img-fluid" /></a>
                                                </div>
                                                <div class="back">
                                                    <a href="detail.html"><img src="img/product1_2.jpg" alt="" class="img-fluid" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="detail.html" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid" /></a>
                                        <div class="text">
                                            <h3><a href="detail.html">Fur coat with very but very very long name</a></h3>
                                            <p class="price"><del></del>$143.00</p>
                                            <p class="buttons">
                                                <a href="detail.html" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </p>
                                        </div>
                                        <!-- /.text-->
                                    </div>
                                    <!-- /.product            -->
                                </div>
                            <?php } ?>
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <a href="detail.html"><img src="img/product2.jpg" alt="" class="img-fluid" /></a>
                                            </div>
                                            <div class="back">
                                                <a href="detail.html"><img src="img/product2_2.jpg" alt="" class="img-fluid" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="detail.html" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid" /></a>
                                    <div class="text">
                                        <h3><a href="detail.html">White Blouse Armani</a></h3>
                                        <p class="price"><del>$280</del>$143.00</p>
                                        <p class="buttons">
                                            <a href="detail.html" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </p>
                                    </div>
                                    <!-- /.text-->
                                    <div class="ribbon sale">
                                        <div class="theribbon">SALE</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon-->
                                    <div class="ribbon new">
                                        <div class="theribbon">NEW</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon-->
                                    <div class="ribbon gift">
                                        <div class="theribbon">GIFT</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon-->
                                </div>
                                <!-- /.product            -->
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <a href="detail.html"><img src="img/product3.jpg" alt="" class="img-fluid" /></a>
                                            </div>
                                            <div class="back">
                                                <a href="detail.html"><img src="img/product3_2.jpg" alt="" class="img-fluid" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="detail.html" class="invisible"><img src="img/product3.jpg" alt="" class="img-fluid" /></a>
                                    <div class="text">
                                        <h3><a href="detail.html">Black Blouse Versace</a></h3>
                                        <p class="price"><del></del>$143.00</p>
                                        <p class="buttons">
                                            <a href="detail.html" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </p>
                                    </div>
                                    <!-- /.text-->
                                </div>
                                <!-- /.product            -->
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <a href="detail.html"><img src="img/product3.jpg" alt="" class="img-fluid" /></a>
                                            </div>
                                            <div class="back">
                                                <a href="detail.html"><img src="img/product3_2.jpg" alt="" class="img-fluid" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="detail.html" class="invisible"><img src="img/product3.jpg" alt="" class="img-fluid" /></a>
                                    <div class="text">
                                        <h3><a href="detail.html">Black Blouse Versace</a></h3>
                                        <p class="price"><del></del>$143.00</p>
                                        <p class="buttons">
                                            <a href="detail.html" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </p>
                                    </div>
                                    <!-- /.text-->
                                </div>
                                <!-- /.product            -->
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <a href="detail.html"><img src="img/product2.jpg" alt="" class="img-fluid" /></a>
                                            </div>
                                            <div class="back">
                                                <a href="detail.html"><img src="img/product2_2.jpg" alt="" class="img-fluid" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="detail.html" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid" /></a>
                                    <div class="text">
                                        <h3><a href="detail.html">White Blouse Versace</a></h3>
                                        <p class="price"><del></del>$143.00</p>
                                        <p class="buttons">
                                            <a href="detail.html" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </p>
                                    </div>
                                    <!-- /.text-->
                                    <div class="ribbon new">
                                        <div class="theribbon">NEW</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon-->
                                </div>
                                <!-- /.product            -->
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <a href="detail.html"><img src="img/product1.jpg" alt="" class="img-fluid" /></a>
                                            </div>
                                            <div class="back">
                                                <a href="detail.html"><img src="img/product1_2.jpg" alt="" class="img-fluid" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="detail.html" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid" /></a>
                                    <div class="text">
                                        <h3><a href="detail.html">Fur coat</a></h3>
                                        <p class="price"><del></del>$143.00</p>
                                        <p class="buttons">
                                            <a href="detail.html" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </p>
                                    </div>
                                    <!-- /.text-->
                                    <div class="ribbon gift">
                                        <div class="theribbon">GIFT</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon-->
                                </div>
                                <!-- /.product            -->
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <a href="detail.html"><img src="img/product2.jpg" alt="" class="img-fluid" /></a>
                                            </div>
                                            <div class="back">
                                                <a href="detail.html"><img src="img/product2_2.jpg" alt="" class="img-fluid" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="detail.html" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid" /></a>
                                    <div class="text">
                                        <h3><a href="detail.html">White Blouse Armani</a></h3>
                                        <p class="price"><del>$280</del>$143.00</p>
                                        <p class="buttons">
                                            <a href="detail.html" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </p>
                                    </div>
                                    <!-- /.text-->
                                    <div class="ribbon sale">
                                        <div class="theribbon">SALE</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon-->
                                    <div class="ribbon new">
                                        <div class="theribbon">NEW</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon-->
                                    <div class="ribbon gift">
                                        <div class="theribbon">GIFT</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                                    <!-- /.ribbon-->
                                </div>
                                <!-- /.product            -->
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <a href="detail.html"><img src="img/product3.jpg" alt="" class="img-fluid" /></a>
                                            </div>
                                            <div class="back">
                                                <a href="detail.html"><img src="img/product3_2.jpg" alt="" class="img-fluid" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="detail.html" class="invisible"><img src="img/product3.jpg" alt="" class="img-fluid" /></a>
                                    <div class="text">
                                        <h3><a href="detail.html">Black Blouse Versace</a></h3>
                                        <p class="price"><del></del>$143.00</p>
                                        <p class="buttons">
                                            <a href="detail.html" class="btn btn-outline-secondary">View detail</a><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </p>
                                    </div>
                                    <!-- /.text-->
                                </div>
                                <!-- /.product            -->
                            </div>
                            <!-- /.products-->
                        </div>
                        <div class="pages">
                            <p class="loadMore">
                                <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                            </p>
                            <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a>
                                    </li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item">
                                        <a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /.col-lg-9-->
                </div>
            </div>
        </div>
    </div>
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-2 mb-lg-0">
                    <p class="text-center text-lg-left">© 2019 Pro Website</p>
                </div>
                <div class="col-lg-6">
                    <p class="text-center text-lg-right">Template design by <a href="#">Bootstrapious</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>