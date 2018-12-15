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
            <div class="header-mid-left">
                <p class="wellcome-to">Добро пожаловать на  Bookworm</p>
                <p class="register-or-login">
                    <a href="#" class="register">Регистрация</a>
                    или
                    <a href="#" class="login">Войти</a>
                </p>
            </div>
            <div class="header-mid-right">
                <div class="header-mid-right-content">
                    <a href="#">
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

            </div>

        </div>
    </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-bottom-left">
                <h1 class="logo">
                    <a href="index.html">
                        <img src="../../assets/images/logo.png" alt="logo">
                    </a>
                </h1>
                <div class="header-search">
                    <form action="form.php" class="form form-search-header">

                        <input type="text" placeholder="Поиск...">
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
                        <a href="#">
                            <i class="flaticon-commerce"></i>
                            Корзина
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                            <p class="cart-amount">6</p>
                        </a>
                    </div>
                    <div class="cart-hover">
                        <div class="cart-hover-title">Ваш заказ <span>Цена</span></div>
                        <ul class="list-hover-cart">
                            <li class="hover-cart-item">
                                <a href="#" class="img-hover-cart">
                                    <img src="../../assets/images/img-hover-cart.jpg" alt="img-hover-cart" width="75" height="89">
                                    <span class="delete-product-hover-cart"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                                </a>
                                <div class="text-hover-cart">
                                    <a href="#" class="name-hover-cart">Men's Skagen Watch</a>
                                    <div class="quantity">
                                        <p class="quanlity-hover-cart">Колличество: <span>1</span></p>
                                    </div>
                                </div>
                                <div class="price-hover-cart">$150</div>
                            </li>
                        </ul>
                        <div class="subtotal-hover-cart">Стоимость <span>$150</span></div>
                        <div class="button-cart-hover">
                            <a href="#" class="go-to-cart button">Перейти к корзине</a>

                        </div>
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
                                    <li class="menu-item"><a href="#">Приключения</a></li>
                                    <li class="menu-item"><a href="#">Поэзия</a></li>
                                    <li class="menu-item"><a href="#">Фэнтези</a></li>
                                    <li class="menu-item"><a href="#">Фантастика</a></li>
                                    <li class="menu-item"><a href="#">Религия</a></li>
                                    <li class="menu-item"><a href="#">Учебная</a></li>
                                    <li class="menu-item"><a href="#">Молодежная</a></li>
                                    <li class="menu-item"><a href="#">Словари</a></li>
                                    <li class="menu-item"><a href="#">История</a></li>
                                    <li class="menu-item"><a href="#">Справочники</a></li>
                                    <li class="menu-item"><a href="#">Кулинария</a></li>
                                </ul>
                                <span class="more-categories open-cate">Больше категорий</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <a href="#primary-navigation" class="menu-button primary-navigation-button">
                <span class="flaticon-bars"></span>Главное меню
            </a>
            <nav id="primary-navigation" class="site-navigation main-menu">
                <ul id="primary-menu" class="menu">
                    <li class="menu-item active"><a href="">Главная</a></li>
                    <li class="menu-item"><a href="#">Товары</a></li>
                    <li class="menu-item"><a href="#">Контакты</a></li>
                    <li class="menu-item "><a href="#">О нас</a></li>
                    <li class="menu-item"><a href="blog.html">Отзывы</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>