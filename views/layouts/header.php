<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Product Detail</title>
    <link rel='stylesheet' href='/assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='/assets/css/owl.carousel.min.css'>
    <link rel='stylesheet' href='/assets/css/animated.css'>

    <link rel='stylesheet' href='/assets/css/font-awesome.css'>
    <link rel='stylesheet' href='/assets/css/ui.css'>
    <link rel='stylesheet' href='/assets/css/jquery.mmenu.all.css'>
    <link rel='stylesheet' href='/assets/css/flaticon.css'>
    <link rel='stylesheet' href='/assets/css/style.css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i;Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>
<body class="categories-page product-detail">
<header class="header header-style2">
    <div class="header-mid">
        <div class="container">
            <?php if(User::isGuest()) : ?>
            <div class="header-mid-left">
                <p class="wellcome-to">Добро пожаловать на  Bookworm</p>
                <p class="register-or-login">
                    <a href="#" class="register">Регистрация</a>
                    или

                    <a href="/user/login/" class="login">Войти</a>

                </p>
            </div>
            <?php else:  ?>
            <div class="header-mid-right">

                <div class="header-mid-right-content">
                    <a href="/account/">
                        <i class="flaticon-user-outline"></i>
                        Мой аккаунт
                    </a>
                </div>

                <div class="header-mid-right-content">
                    <a href="#">
                        <i class="flaticon-like"></i>
                        Избранное
                    </a>
                </div>

                <div class="header-mid-right-content">
                    <a href="/user/logout/">
                        <i class="fa fa-sign-out" ></i>
                        Выйти
                    </a>
                </div>

            </div>

            <?php endif; ?>
        </div>
    </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-bottom-left">
                <h1 class="logo">
                    <a href="/main/">
                        <img src="../../assets/images/bookwarm.png" alt="logo">
                    </a>
                </h1>
                <div class="header-search">
                    <form action="form.php" class="form form-search-header">

                        <input type="text" style="margin-top: 0;" placeholder="Поиск...">
                        <button class="button-search"><i class="flaticon-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="header-bottom-right">
                <div class="header-bottom-right-content">
                    <a href="#">
                        <i class="flaticon-like"></i>
                        Избранное
                    </a>
                </div>
                <div class="header-bottom-right-content cart-menu-relative">
                    <div class="cart-menu">
                        <a href="/cart/">
                            <i class="flaticon-commerce"></i>
                            Корзина
                            <p class="cart-amount"><?php echo Cart::countItems(); ?></p>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="menu-primary">
        <div class="container">
            <a href="#categories-menu" class="menu-button categories-menu-button">
                Категории<span class="flaticon-bars"></span>
            </a>
            <nav class="menu-item has-mega-menu" id="categories-menu">
                <ul class="menu">
                    <li class="menu-item">
                        <a href="#">Категории</a>
                        <span class="click-categories flaticon-bars"></span>
                        <div class="category-drop-list">
                            <div class="category-drop-list-inner">
                                <ul class="sub-menu sub-menu-open">
                                    <?php $cp = Category::GetCategoriesList(); foreach ($cp  as $CP) : ?>
                                        <li class="menu-item"><a href="/category/<?php echo($CP{'id'}); ?> "><?php echo( $CP{'name'} ); ?></a></li>
                                    <?php endforeach; ?>
                                </ul>

                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <a href="#primary-navigation" class="menu-button primary-navigation-button">
                <span class="flaticon-bars"></span>Меню
            </a>
            <nav id="primary-navigation" class="site-navigation main-menu">
                <ul id="primary-menu" class="menu">
                    <li class="menu-item active"><a href="">Главная</a></li>
                    <li class="menu-item"><a href="/products/">Товары</a></li>
                    <li class="menu-item"><a href="#">Контакты</a></li>
                    <li class="menu-item "><a href="#">О нас</a></li>
                    <li class="menu-item"><a href="blog.html">Отзывы</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>