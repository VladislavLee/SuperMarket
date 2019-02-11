<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>GuitarWorld</title>
    <link rel='stylesheet' href='/assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='/assets/css/owl.carousel.min.css'>
    <link rel='stylesheet' href='/assets/css/animated.css'>

    <link rel='stylesheet' href='/assets/css/font-awesome.css'>
    <link rel='stylesheet' href='/assets/css/ui.css'>
    <link rel='stylesheet' href='/assets/css/jquery.mmenu.all.css'>
    <link rel='stylesheet' href='/assets/css/flaticon.css'>
    <link rel='stylesheet' href='/assets/css/style.css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i;Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">









    <!--    option  -->

    <link href="/templates/option/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Custom Theme files -->
    <!--theme style-->
    <link href="/templates/option/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="/templates/option/js/jquery.min.js"></script>

    <!--//theme-style-->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- start menu -->
    <script src="/templates/option/js/simpleCart.min.js"> </script>
    <!-- start menu -->
    <link href="/templates/option/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="/templates/option/js/memenu.js"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
    <!-- /start menu -->






    <link rel="icon" href="/templates/images/favicon.png">

    <link rel="stylesheet" href="/templates/css/style.css">

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
    <![endif]-->




</head>
<body class="categories-page product-detail">
<header class="header header-style2">


    <section class="header-top-section">
        <div class="container">
            <div class="row">
                <div  class="col-md-6">
                    <div class="header-top-content">
                        <ul class="nav nav-pills navbar-left">
                            <li><a href="/user/login/"><i class="pe-7s-lock"></i>Вход/Регистрация</a></li>
                        </ul>
                    </div>
                </div>
                <div  class="col-md-6">
                    <div class="header-top-menu">
                        <ul class="nav nav-pills navbar-right">
                            <li><a href="/account">Мой аккаунт</a></li>
                            <li><a href="/cart">Корзина</a></li>
                            <li><a href="/cart">Заказы</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <header class="header-section">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><b>G</b>uitar<b>W</b>orld</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Главная</a></li>
                        <li><a href="/list/page-1">Товары</a></li>
                        <li><a href="/about">О нас</a></li>
                        <li><a href="#">Магазин</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right cart-menu">
                        <li><a href="#" class="search-btn"><i class="flaticon-search"></i></a></li>
                        <li><a href="/cart"><span> Корзина  &nbsp;</span> <span class="shoping-cart"><?php echo Cart::countItems(); ?></span></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </header>

    <section class="search-section">
        <div class="container">
            <div class="row subscribe-from">
                <div class="col-md-12">
                    <form class="form-inline col-md-12 wow fadeInDown animated">
                        <div class="form-group">
                            <input type="email" class="form-control subscribe" id="email" placeholder="Поиск...">
                            <button class="suscribe-btn" ><i class="pe-7s-search"></i></button>
                        </div>
                    </form><!-- end /. form -->
                </div>
            </div><!-- end of/. row -->
        </div><!-- end of /.container -->
    </section><!-- end of /.news letter section -->






</header>

<section>
    <div class="container">
        <div class="row" >

            <br/>


            <h4>Просмотр заказа #<?php  echo $order['id']; ?></h4>
            <br/>




            <h5 style="margin-bottom: 20px">Информация о заказе</h5>
            <table class="table-admin-small table-bordered table-striped table">
                <tr>
                    <td>Номер заказа</td>
                    <td><?php echo $order['id']; ?></td>
                </tr>
                <tr>
                    <td>Имя клиента</td>
                    <td><?php echo $order['user_name']; ?></td>
                </tr>
                <tr>
                    <td>Телефон клиента</td>
                    <td><?php echo $order['user_phone']; ?></td>
                </tr>
                <tr>
                    <td>Комментарий к заказу</td>
                    <td><?php echo $order['user_comment']; ?></td>
                </tr>

                <tr>
                    <td>Дата заказа</td>
                    <td><?php echo $order['date']; ?></td>
                </tr>
            </table>

            <h5 style="margin-bottom: 10px;">Товары в заказе</h5>

            <table class="table-admin-medium table-bordered table-striped table ">
                <tr>

                    <th>Название</th>
                    <th>Цена</th>
                    <th>Количество</th>
                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>

                        <td><?php echo $product['name']; ?></td>
                        <td>$<?php echo $product['price']; ?></td>
                        <td><?php echo $productsQuantity[$product['id']]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>


</section>





<footer class="footer" style="background-color: #ffffff; margin-top: 4%;">
    <div class="container">
        <div class="footer-bottom">
            <ul class="menu-footer-bottom">
                <li class="menu-footer-bottom-item"><a href="/">Наш магазин</a></li>
                <li class="menu-footer-bottom-item"><a href="/list/page-1">Товары</a></li>
                <li class="menu-footer-bottom-item"><a href="/about">О нас</a></li>

            </ul>
            <div class="copyright">
                <i class="fa fa-copyright" aria-hidden="true"></i>
                2018 <a href="#">Bookworm</a>
            </div>
        </div>
    </div>

</footer>
<!--end footer-->
<script type='text/javascript' src='/assets/js/jquery.min.js'></script>
<script type='text/javascript' src='/assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='/assets/js/wow.min.js'></script>
<script type='text/javascript' src='/assets/js/owl.carousel.min.js'></script>
<script type='text/javascript' src='/assets/js/jquery.appear.min.js'></script>
<script type='text/javascript' src='/assets/js/jquery.countTo.js'></script>
<script type='text/javascript' src='/assets/js/ui.js'></script>
<script type='text/javascript' src='/assets/js/jquery.bxslider.min.js'></script>
<script type='text/javascript' src='/assets/js/jquery.mmenu.all.min.js'></script>
<script type='text/javascript' src='/assets/js/chosen.jquery.min.js'></script>
<script type='text/javascript' src='/assets/js/jquery.countdown.js'></script>
<script type='text/javascript' src='/assets/js/frontend.js'></script>


<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (cart) {
                $(".shoping-cart").html(cart);
            });
            return false;
        });
    });
</script>

<script src="/templates/js/vendor/jquery-1.11.2.min.js"></script>
<script src="/templates/js/vendor/bootstrap.min.js"></script>
<script src="/templates/js/isotope.pkgd.min.js"></script>
<script src="/templates/js/owl.carousel.min.js"></script>
<script src="/templates/js/wow.min.js"></script>
<script src="/templates/js/custom.js"></script>















</body>
</html>
