<?php require_once ROOT.'/views/layouts/header.php' ?>


    <div class="categories categories-list1">
        <div class="container">
            <div class="row">
                <div class="content content-categorise col-md-12 has-sidebar-left">

                    <div class="categories-list">
                        <div class="breadcrumb-sidebar">
                            <div class="breadcrumb-wrap">
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin">
                                            <a href="/"><span>Главная</span></a>
                                        </li>
                                        <li class="trail-item trail-end">
                                            <span><?php echo ($categoryName{'name'}); ?></span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="sidebar col-md-12">
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
                            <div class="sidebar-categories">
                                <div class="shop-sidebar">

                                    <div class="shop-sidebar-content">
                                        <div class="categories-sidebar">
<!--                                            <div class="sidebar-title-section">Категории</div>-->
                                            <div class="categories-checkbox">
                                                <ul class="menu-main">
                                                    <?php foreach ($categories as $categoryItem) : ?>
                                                        <a href="/category/<?php echo($categoryItem{'id'}); ?> "> <li><label style="margin: 0; !important;">  <?php echo($categoryItem{'name'}); ?> </label></li> </a>
                                                    <?php endforeach; ?>
                                                </ul>


                                            </div>
                                        </div>



                                    </div>



                                    <style>
                                        @import url('https://fonts.googleapis.com/css?family=PT+Sans+Caption');
                                        .menu-main {
                                            list-style: none;
                                            padding: 0 30px;
                                            margin: 0;
                                            font-size: 18px;
                                            text-align: center;
                                            position: relative;
                                            background: white;
                                        }
                                        .menu-main:after {
                                            content: "";
                                            position: absolute;
                                            width: 100%;
                                            height: 20px;
                                            left: 0;
                                            bottom: -20px;
                                            background: radial-gradient(white 0%, white 70%, rgba(255,255,255,0) 70%, rgba(255,255,255,0) 100%) 0 -10px;
                                            background-size: 20px 20px;
                                            background-repeat: repeat-x;
                                        }
                                        .menu-main li {display: inline-block;}
                                        .menu-main a {
                                            text-decoration: none;
                                            display: inline-block;
                                            margin: 0 15px;
                                            padding: 10px 30px;
                                            font-family: 'PT Sans Caption', sans-serif;
                                            color: #777777;
                                            transition: .3s linear;
                                            position: relative;
                                        }

                                        .menu-main a:hover{
                                            color: #1abc9c;
                                        }
                                        .menu-main a:before,
                                        .menu-main a:after {
                                            content: "";
                                            position: absolute;
                                            top: calc(50% - 3px);
                                            width: 6px;
                                            height: 6px;
                                            border-radius: 50%;
                                            background: #1abc9c;
                                            opacity: 0;
                                            transition: .5s ease-in-out;
                                        }
                                        .menu-main a:before {left: 5px;}
                                        .menu-main a:after {right: 5px;}
                                        .menu-main a.current:before,
                                        .menu-main a.current:after,
                                        .menu-main a:hover:before,
                                        .menu-main a:hover:after {opacity: 1;}
                                        .menu-main a.current,
                                        .menu-main a:hover {
                                            color: #1abc9c !important;}
                                        @media(max-width:680px) {
                                            .menu-main li {display: block;}
                                        }
                                    </style>



                                </div>

                            </div>
                        </div>




                        <div class="panel-categories">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="page-nav">
                                        <?php echo $pagination ->get(); ?>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="products-categories">



                            <section class="featured-section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="titie-section wow fadeInDown animated ">
                                                <h1><?php echo ($categoryName{'name'}); ?></h1>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row featured isotope">


                                        <?php foreach ($categoryProducts as $productRow): ?>
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




                        </div>
                        <div class="panel-categories">
                            <div class="row">



                                <div class="col-md-12">
                                    <div class="page-nav">
                                        <?php echo $pagination ->get(); ?>
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





<?php require_once ROOT.'/views/layouts/footer.php' ?>