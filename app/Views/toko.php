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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js" integrity="sha512-P0Ms+SM3w8aSbPa5U/nFoprxlUzG2FSz9h/A+2xhhE1hcH6RmGYK3dImFCvcSYuioM3UbbAtMbAopAuHLr94pA==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
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
                                <div class="col-md-8 col-lg-8 products-number-sort">
                                    <form class="form-inline d-block d-lg-flex justify-content-between flex-column flex-md-row">
                                        <div class="products-number" x-data='{categories : <?php echo json_encode($category->data->shop_categories); ?>}'>
                                            <template x-for="cat in categories">
                                                <a href="#" class="btn btn-sm btn-primary" x-text="cat.display_name"></a>
                                            </template>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-4 col-lg-4 text-right">
                                    <hr class="d-md-block d-lg-none">
                                    <button class="btn btn-sm btn-primary btn-lg p-1" data-bs-toggle="modal" data-bs-target="#cartModal"><i class="fa fa-heart fa-2x"></i> <span x-data x-text="$store.favorite.favorited.length"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row products">
                            <?php
                            if (isset($bestsell->data->sections[0]->data->item)) {
                                foreach ($bestsell->data->sections[0]->data->item as $key) {
                            ?>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="product">
                                            <div class="flip-container">
                                                <div class="flipper">
                                                    <div class="front">
                                                        <a href="detail.html"><img src="https://cf.shopee.co.id/file/<?php echo $key->images[0]; ?>" alt="" class="img-fluid" /></a>
                                                    </div>
                                                    <div class="back">
                                                        <a href="detail.html"><img src="https://cf.shopee.co.id/file/<?php echo $key->images[1]; ?>" alt="" class="img-fluid" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="detail.html" class="invisible"><img src="https://cf.shopee.co.id/file/<?php echo $key->images[0]; ?>" alt="" class="img-fluid" /></a>
                                            <div class="text">
                                                <h3><a href="detail.html"><?php echo $key->name; ?></a></h3>
                                                <p class="price"><del></del><?php echo number_format($key->price / 100000); ?></p>
                                                <p class="buttons">
                                                    <button x-data x-on:click='$store.favorite.setFav(<?php echo json_encode(
                                                                                                            array(
                                                                                                                'itemid' => $key->itemid,
                                                                                                                'name' => $key->name
                                                                                                            )
                                                                                                        ); ?>)' class="btn btn-primary"><i class="fa fa-heart"></i></button>
                                                <form action="/" method="POST">
                                                    <input type="hidden" name="link" value="https://shopee.co.id/product/<?php echo $toko->shopid; ?>/<?php echo $key->itemid; ?>">
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Beli Sekarang</button>
                                                </form>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                        <div class="pages">
                            <p class="loadMore">
                                <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                            </p>
                            <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">??</span><span class="sr-only">Previous</span></a>
                                    </li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item">
                                        <a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">??</span><span class="sr-only">Next</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal  -->
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">My Favorite</h5>
                </div>
                <div class="modal-body" x-data="{data: $store.favorite.favorited}">
                    <template x-if="data.length != 0">
                        <ul>
                            <template x-for="fav in $store.favorite.favorited">
                                <li x-text="fav.name"></li>
                            </template>
                        </ul>
                    </template>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal  -->
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-2 mb-lg-0">
                    <p class="text-center text-lg-left">?? 2019 Pro Website</p>
                </div>
                <div class="col-lg-6">
                    <p class="text-center text-lg-right">Template design by <a href="#">Me</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('favorite', {
                favorited: JSON.parse(localStorage.getItem('favorited')) || [],
                setFav(produk) {
                    let produks = []
                    if (localStorage.getItem('favorited')) {
                        produks = JSON.parse(localStorage.getItem('favorited'))
                        produks.push(produk);
                        localStorage.setItem('favorited', JSON.stringify(produks))
                    } else {
                        produks.push(produk)
                        localStorage.setItem('favorited', JSON.stringify(produks))
                    }
                    this.favorited = produks
                }
            })
        })
    </script>
</body>

</html>