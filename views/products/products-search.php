<?php require_once ROOT.'/views/layouts/header.php' ?>


<div class="categories categories-list1">
    <div class="container">
        <div class="row">
            <div class="content content-categorise col-md-9 has-sidebar-left">
                <div class="banner-categories-grid">
                    <img src="../../upload/images/products/booksList.jpg" alt="banner" height="175" width="1170">
                </div>
                <div class="categories-list">
                    <div class="breadcrumb-sidebar">
                        <div class="breadcrumb-wrap">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin">
                                        <a href="#"><span>Главная</span></a>
                                    </li>
                                    <li class="trail-item trail-end">
                                        <span>Товары</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="panel-categories">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="view-categories">

                                    <div class="click-list color-active">
                                        <i class="flaticon-squares-gallery-grid-layout-interface-symbol"></i>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="products-categories">



                        <?php foreach ($searchProducts as $product) : ?>
                            <div class="product-box">
                                <div class="product-box-content">
                                    <figure class="img-product">
                                        <img src="<?php echo Products::getImage($product['id']); ?>" alt="product" height="309" width="268">
                                        <a href="#" class="flaticon-search"></a>
                                    </figure>
                                    <div class="product-box-text">
                                        <a href="/products/<?php echo $product['id'];?>" class="product-name"><?php echo( $product{'name'} ); ?></a>
                                        <a href="#" class="write">Автор: <?php echo($product{'author'}); ?></a>
                                        <p class="product-cost">$<?php echo( $product{'price'} ); ?></p>
                                        <p class="desc-product"><?php echo( $product{'preview'} ); ?></p>



                                        <div class="product-box-bottom">
                                            <a href="#" data-id="<?php echo $product['id']; ?> " class="add-to-cart"><i class="flaticon-commerce"></i>В корзину</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="panel-categories">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="view-categories">
                                    <div class="click-grid">
                                        <i class="flaticon-four-grid-layout-design-interface-symbol"></i>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="select-categories">

                                </div>
                            </div>
                            <div class="col-md-3">
<!--                                <div class="page-nav">-->
<!--                                    <div class="page-nav-item active">1</div>-->
<!--                                    <div class="page-nav-item">2</div>-->
<!--                                    <div class="page-nav-item">3</div>-->
<!--                                    <div class="page-nav-item"><i class="fa fa-angle-right" aria-hidden="true"></i></div>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar col-md-3">
                <div class="breadcrumb-sidebar">
                    <div class="breadcrumb-wrap">
                        <nav class="breadcrumb-trail breadcrumbs">
                            <ul class="trail-items">
                                <li class="trail-item trail-begin">
                                    <a href="/"><span>Главная</span></a>
                                </li>
                                <li class="trail-item trail-end">
                                    <span>Поиск</span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="sidebar-categories">
                    <div class="shop-sidebar">
                        <div class="sidebar-title">Отсортировать</div>
                        <div class="shop-sidebar-content">
                            <div class="categories-sidebar">
                                <div class="sidebar-title-section">Категории</div>
                                <div class="categories-checkbox">
                                    <ul class="categories-list-wrap">
                                        <?php foreach ($categories as $categoryItem) : ?>
                                            <a href="/category/<?php echo($categoryItem{'id'}); ?> "> <li><label>  <?php echo($categoryItem{'name'}); ?> </label></li> </a>

                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
<!--                            <div class="price-sidebar">-->
<!--                                <div class="sidebar-title-section">Цена</div>-->
<!--                                <div class="price-filter">-->
<!--                                    <div class="slider-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">-->
<!--                                        <div class="filter-top">-->
<!--                                            <span class="amount">$1</span>-->
<!--                                            <span class="amount2">$150</span>-->
<!--                                            <a class="button orange" href="#">Поиск</a>-->
<!--                                        </div>-->
<!--                                        <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>-->
<!--                                        <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;">-->
<!--                                            <span class="amount">1</span>-->
<!--                                        </span>-->
<!--                                        <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;">-->
<!--                                        <span class="amount2">1500</span>-->
<!--                                    </span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->


                        </div>
                    </div>



                </div>
            </div>



            <?php require_once ROOT.'/views/layouts/icon-box.php' ?>

        </div>
    </div>
</div>





<?php require_once ROOT.'/views/layouts/footer.php' ?>
