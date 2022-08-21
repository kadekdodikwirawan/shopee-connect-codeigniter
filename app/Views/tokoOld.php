<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $toko->name; ?> | Shopee Promo Spesial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="<?php echo base_url('/css/toko.css') ?>">
    <script>
        var toko = "<?php echo $toko->account->username; ?>";
    </script>
</head>

<body>
    <?php if (!empty($toko->cover)) { ?>
        <div class="jumbotron cover" style="background-image: url('https://cf.shopee.co.id/file/<?php echo $toko->cover; ?>');"></div>
    <?php } ?>
    <div class="wrapper" style="background-image: linear-gradient(-20deg, #f84d2f 0%, #6944ff 100%);">
        <div class="profile-card js-profile-card">
            <div class="profile-card__img">
                <img src="https://cf.shopee.co.id/file/<?php echo $toko->account->portrait; ?>" alt="profile card">
            </div>

            <div class="profile-card__cnt js-profile-cnt">
                <div class="profile-card__name"><?php echo $toko->name; ?></div>
                <div class="profile-card__txt"><?php echo nl2br($toko->description); ?></div>
                <div class="profile-card-loc">
                    <span class="profile-card-loc__icon">
                        <svg class="icon">
                            <use xlink:href="#icon-location"></use>
                        </svg>
                    </span>

                    <span class="profile-card-loc__txt">
                        <?php echo $toko->shop_location; ?>
                    </span>
                </div>
                <div class="profile-card__txt">
                    <?php echo $toko->address ? $toko->address->state : ''; ?>
                </div>
                <div class="profile-card-ctr mb-5 row">
                    <div class="col">
                        <button disabled class="profile-card__button button--blue js-message-btn"> <i class="fa fa-star"></i> <?php echo number_format($toko->account->total_avg_star, 2); ?> </button>
                    </div>
                    <div class="col">
                        <button data-url="https://shopee.co.id/<?php echo $toko->account->username; ?>" class="profile-card__button button--orange" id="follow"> <img src="https://4.bp.blogspot.com/-ItRaVmM-PoU/XgrlppcnvcI/AAAAAAAABPY/Pbgwlu9Gb7UKLJFekuqk5__OPWQvqq08gCLcBGAsYHQ/s200-c/shopee%2B1.png" width="20%" alt="Shopee">Shopee</button>
                    </div>
                </div>

                <!-- slide profile -->
                <?php if (!empty($toko->shop_covers)) { ?>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach ($toko->shop_covers as $index => $row) { ?>
                                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                    <img class="d-block w-100" src="https://cf.shopee.co.id/file/<?php echo $row->image_url; ?>" alt="First slide">
                                </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                <?php
                } ?>
                <!-- slide  -->

                <?php if (!empty($voucher->data->voucher_list)) { ?>
                    <!-- slide voucher  -->
                    <div class="slider mt-5">
                        <?php foreach ($voucher->data->voucher_list as $row) { ?>
                            <div class="m-2 alert alert-coupon bg-warning">
                                <h4 class="mt-1 text-danger font-weight-bold"><?php if ($row->discount_percentage !== 0) {
                                                                                    echo 'Diskon <br>' . $row->discount_percentage . '%';
                                                                                } elseif ($row->discount_value !== 0) {
                                                                                    echo 'Diskon ' . number_format($row->discount_value  / 100000000) . 'RB';
                                                                                } ?></h4>
                                <hr>
                                <p>Hingga <?php echo date('d-m-Y', $row->end_time); ?></p>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- end voucher  -->
                <?php } ?>
                <?php if (!empty($bestsell->items)) { ?>
                    <hr>
                    <div class="container text-center mt-5">
                        <div class="profile-card__name">Produk Rekomendasi</div>
                    </div>
                    <hr>
                    <div class="row">
                        <?php foreach ($bestsell->items as $row) { ?>
                            <div class="container d-flex justify-content-center">
                                <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"> <img src="https://cf.shopee.co.id/file/<?php echo $row->item_basic->image; ?>"> </a>
                                    <?php // echo ($row->discount && $row->discount !== null) ?  '<div class="bg-warning diskon">Diskon '.$row->discount.'</div>' : '';  
                                    ?>
                                    <figcaption class="info-wrap">
                                        <div class="row">
                                            <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true"><?php echo $row->item_basic->name; ?></a></div>
                                        </div>
                                    </figcaption>
                                    <div class="bottom-wrap-payment">
                                        <figcaption class="info-wrap">
                                            <div class="row">
                                                <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true"> <strong>Rp <?php echo number_format($row->item_basic->price / 100000) ?></strong></a> </div>
                                            </div>
                                        </figcaption>
                                    </div>
                                    <div class="bottom-wrap text-center"> <a href="#" class="beli btn btn-primary" data-abc="true" data-url="https://shopee.co.id/product/<?php echo  $row->item_basic->shopid ?>/<?php echo $row->item_basic->itemid ?>"> Beli Sekarang </a></div>
                                </figure>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <!-- end produk rekomendasi  -->


                <?php if (!empty($hotdeal->data->items)) { ?>
                    <!-- penawaran  -->
                    <hr>
                    <div class="container text-center mt-5">
                        <div class="profile-card__name">Penawaran Terbaik</div>
                    </div>
                    <hr>
                    <div class="row">
                        <?php foreach ($hotdeal->data->items as $row) { ?>
                            <div class="container d-flex justify-content-center">
                                <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"> <img src="https://cf.shopee.co.id/file/<?php echo $row->image; ?>"> </a>

                                    <?php echo ($row->discount !== null) ?  '<div class="bg-warning diskon">Diskon <br>' . $row->discount . '</div>' : '';  ?>
                                    <figcaption class="info-wrap">
                                        <div class="row">
                                            <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true"><?php echo $row->name; ?></a></div>
                                        </div>
                                    </figcaption>
                                    <div class="bottom-wrap-payment">
                                        <figcaption class="info-wrap">
                                            <div class="row">
                                                <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true"> <strong>Rp <?php echo number_format($row->price / 100000) ?></strong></a> </div>
                                            </div>
                                        </figcaption>
                                    </div>
                                    <div class="bottom-wrap text-center"> <a href="#" class="beli btn btn-primary" data-abc="true"> Beli Sekarang </a></div>
                                </figure>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- end penawaran -->
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo base_url('/css/toko.js') ?>"></script>
</body>

</html>