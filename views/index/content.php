
<?php require_once ROOT . '/views/layouts/header.php' ?>


<div class="banner banner-home banner-home1">

        <section class="slider-section">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators slider-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/templates/images/slider.jpg" width="1648" height="600" alt="">
                        <div class="carousel-caption">
                            <h2>Прикоснитесь к музыке</h2>

                            <a href="/list/page-1">Купить</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/templates/images/slider1.jpg" width="1648" height="600" alt="">
                        <div class="carousel-caption">
                            <h2>Прикоснитесь к музыке</h2>

                            <a href="/list/page-1">Купить</a>
                        </div>
                    </div>
                    <div class="item ">
                        <img src="/templates/images/slider2.jpg" width="1648" height="600" alt="">
                        <div class="carousel-caption">
                            <h2>Прикоснитесь к музыке</h2>

                            <a href="/list/page-1">Купить</a>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="pe-7s-angle-left glyphicon-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="pe-7s-angle-right glyphicon-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </section>

</div>



<!-- End .banner -->
<div class="main-content">




    <section class="featured-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titie-section wow fadeInDown animated ">
                        <h1>Список товаров</h1>
                    </div>
                </div>
            </div>

            <div class="row featured isotope">

                <?php foreach ($latestProducts as $productRow): ?>
                    <?php foreach ($productRow as $product) :?>
                        <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item">

                            <div class="product-item">
                                <img src="<?php echo Products::getImage($product['id']); ?>" class="img-responsive" width="255" height="322" alt="">

                                <div class="product-hover">
                                    <div class="product-meta">

                                        <a href="#" data-id="<?php echo $product['id']; ?>" class="add-to-cart"><i class="flaticon-commerce"></i>В корзину</a>
                                    </div>
                                </div>
                                <div class="product-title">
                                    <a href="/products/<?php echo $product['id'];?>">
                                        <h3><?php echo( $product{'name'} ); ?></h3>
                                        <span>$<?php echo( $product{'price'} ); ?></span>
                                    </a>
                                </div>
                            </div>

                        </div>

                    <?php endforeach; ?>
                <?php endforeach; ?>


            </div>
        </div>
    </section>


    <section class="offer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInDown animated ">
                    <h1>Огромный асортимент гитар</h1>
                    <h2>Оцените настоящее искуство </h2>
                </div>
            </div>
        </div>
    </section>



</div>


<?php require_once ROOT . '/views/layouts/footer.php' ?>
