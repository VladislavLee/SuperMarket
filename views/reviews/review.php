<?php require_once '../layouts/header.php' ?>



<div class="main-content">
    <div class="container">
        <div class="breadcrumb-sidebar">
            <div class="breadcrumb-wrap">
                <nav class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items">
                        <li class="trail-item trail-begin">
                            <a href="#"><span>Главная</span></a>
                        </li>
                        <li class="trail-item trail-end">
                            <span>Блог</span>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="content blog-content col-md-12 has-sidebar-left">
                <h4 class="blog-box-title">Ac Tincidunt Suspendisse Malesuada</h4>
                <ul class="blog-post-meta">
                    <li>Отзыв от: <a href="#">Admin</a></li>
                    <li>Дата создания: Mon, Mar 30, 2016</li>
                    <li><a href="#">10 коментариев</a></li>
                </ul>
                <div class="blog-box">
                    <figure><img src="https://pgpb.ru/media/item/2daccc751fdf4be5913eb56c2751e4dc.jpg.1210x480_q85_box-0%2C662%2C2880%2C1805_crop_detail.jpg" alt="blog-post" height="334" width="569"></figure>

                    <div class="blog-content-left">
                        <p class="blog-box-desc">Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna.
                            Euismod euismod Suspendisse tortor ante adipiscing risus Aenean Lorem vitae id. Odio ut pretium
                            ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan morbi tristique
                            auctor Aenean nulla lacinia Nullam elit vel vel. At risus pretium urna tortor metus fringilla interdum mauris tempor congue.<br/><br/>

                            Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus
                            congue tincidunt senectus nibh risus Phasellus tristique justo. Justo Pellentesque
                            Donec lobortis faucibus Vestibulum Praesent mauris volutpat vitae metus. Ipsum cursus
                            vestibulum at interdum Vivamus nunc fringilla Curabitur ac quis. Nam lacinia wisi tortor orci quis vitae.<br/><br/>

                            Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum.
                            Enim ipsum hendrerit Suspendisse turpis laoreet fames tempus ligula pede ac.
                            Et Lorem penatibus orci eu ultrices egestas Nam quam Vivamus nibh.
                            Morbi condimentum molestie Nam enim odio sodales pretium eros sem pellentesque.
                            Sit tellus Integer elit egestas lacus turpis id auctor nascetur ut. Ac elit vitae.<br/><br/>

                            Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus.
                            At Nulla id tincidunt ut sed semper vel Lorem condimentum ornare.
                            Laoreet Vestibulum lacinia massa a commodo habitasse velit Vestibulum tincidunt In.
                            Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla
                            vitae orci convallis condimentum auctor sit dui. Urna pretium elit mauris cursus Curabitur at elit Vestibulum.
                        </p>
                    </div>
                </div>
                <div class="comment-blog">
                    <div class="comment-blog-post">
                        <p class="name-date">
                            <a href="#" class="name-comment">Admin</a>
                            <span>October 9th, 2016 5:55 AM</span>
                        </p>
                        <p class="comment-text">
                            Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus
                        </p>
                        <!--<a href="#" class="comment-reply">Comment Reply</a>-->
                    </div>
                    <div class="comment-blog-post">
                        <p class="name-date">
                            <a href="#" class="name-comment">Michael</a>
                            <span>October 9th, 2016 5:55 AM</span>
                        </p>
                        <p class="comment-text">
                            Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus
                        </p>

                    </div>
                    <div class="comment-blog-post">
                        <p class="name-date">
                            <a href="#" class="name-comment">Admin</a>
                            <span>October 9th, 2016 5:55 AM</span>
                        </p>
                        <p class="comment-text">
                            Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus
                        </p>

                    </div>
                    <div class="comment-blog-post">
                        <p class="name-date">
                            <a href="#" class="name-comment">Michael</a>
                            <span>October 9th, 2016 5:55 AM</span>
                        </p>
                        <p class="comment-text">
                            Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus
                        </p>

                    </div>

                </div>
                <div class="comment-blog-form">
                    <p class="title-left">Оставте свой отзыв</p>
                    <div class="row">
                        <div class="col-md-7">
                            <label>Ваше имя:</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="col-md-12">
                            <label>Ваш отзыв:</label>
                            <textarea name="comment" id="comment" cols="3" rows="2"></textarea>
                            <p class="note">Note: HTML is not translated!</p>
                        </div>

                        <div class="col-md-5">
                            <label>Введите код в поле снизу:</label>
                            <input class="input-captcha" type="text" placeholder="">
                        </div>
                    </div>
                    <input type="text" placeholder="201189eb" style="text-align: center; width: 140px;">
                    <p class="submit-comment"><a class="button orange" href="#">Отправить</a></p>
                </div>
            </div>

        </div>


        <?php require_once '../layouts/icon-box.php' ?>



    </div>



</div>




<?php require_once '../layouts/footer.php' ?>