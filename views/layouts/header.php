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
                <?php if(User::isGuest()) : ?>
                <div  class="col-md-6" style="float: left;">
                    <div class="header-top-content">
                        <ul class="nav nav-pills navbar-left">
                            <li><a href="/user/login/">Вход</a></li>
                            <li><a href="/user/register">Регистрация</a></li>
                        </ul>
                    </div>
                </div>
                <?php else:  ?>
                <div  class="col-md-6" style="float: right;">
                    <div class="header-top-menu">
                        <ul class="nav nav-pills navbar-right">
                            <li><a href="/account">Аккаунт</a></li>
                            <li><a href="/user/logout">Выйти</a></li>

                        </ul>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <header class="header-section">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="/"><b>G</b>uitar<b>W</b>orld</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Главная</a></li>
                        <li ><a href="/list/page-1">Товары</a></li>
                        <li><a href="/about">О нас</a></li>


                    </ul>
                    <ul class="nav navbar-nav navbar-right cart-menu">
                       
                        <li><a href="/cart"><span> Корзина  &nbsp;</span> <span class="shoping-cart"><?php echo Cart::countItems(); ?></span></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </header>


</header>



