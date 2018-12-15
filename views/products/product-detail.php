<?php require_once ROOT.'/views/layouts/header.php' ?>
<div class="categories main-content">
    <div class="container">
        <div class="breadcrumb-sidebar">
            <div class="breadcrumb-wrap">
                <nav class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items">
                        <li class="trail-item trail-begin">
                            <a href="#"><span>Home</span></a>
                        </li>
                        <li class="trail-item trail-end">
                            <span>Electronic</span>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="product-box product-box-primary">
            <div class="product-box-content">
                <div class="row">
                    <div class="col-md-5">
                        <figure class="img-product">
                            <img src="../../assets/images/img-detail.jpg" alt="product" height="536" width="467">
                            <div class="img-room"><img src="../../assets/images/room.jpg" alt="room" height="32" width="32"></div>
                        </figure>
                        <div class="featue-slide supermartket-owl-carousel" data-number="3" data-margin="15" data-navcontrol="yes">
                            <div class="feature-slide-item">
                                <figure><img src="../../assets/images/sli-dt1.jpg" alt="feature" width="126" height="143"></figure>
                            </div>
                            <div class="feature-slide-item">
                                <figure><img src="../../assets/images/sli-dt2.jpg" alt="feature" width="126" height="143"></figure>
                            </div>
                            <div class="feature-slide-item">
                                <figure><img src="../../assets/images/sli-dt3.jpg" alt="feature" width="126" height="143"></figure>
                            </div>
                            <div class="feature-slide-item">
                                <figure><img src="../../assets/images/sli-dt2.jpg" alt="feature" width="126" height="143"></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="single-product-content">
                            <h3 class="product-title"><?php echo($productsItem{'name'}); ?></h3>
                            <a href="#" class="write">Оставить отзыв</a>
                            <p class="product-cost">$<?php echo($productsItem{'price'}); ?></p>
                            <p class="stock">В наличие:<span><i class="fa fa-check-square-o" aria-hidden="true"></i>есть</span></p>
                            <div class="desc-product-title">Краткое описание</div>
                            <div class="desc-product"><?php echo( $productsItem{'preview'} ); ?>
                            </div>

                            <div class="product-box-bottom">
                                <div class="quanlity-product">
                                    <span>Колличество:</span>
                                    <div class="quantity buttons_added">
                                        <a class="sign minus" href="#"><i class="fa fa-minus" aria-hidden="true"></i></a>
                                        <input type="text" size="1" class="input-text qty text" title="Qty" value="1">
                                        <a class="sign plus" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="button-detail">
                                    <a href="#" data-id="<?php echo $productsItem['id']; ?> " class="add-to-cart"><i class="flaticon-commerce"></i>В корзину</a>
                                    <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                    <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-products product-tabs">
            <ul  class="nav nav-pills">
                <li class="active">
                    <a  href="#1a" data-toggle="tab">Описание</a>
                </li>
                <li>
                    <a href="#3a" data-toggle="tab">Отзывы</a>
                </li>

            </ul>
            <div class="product-tabs-content tab-content clearfix">
                <div class="tab-pane active" id="1a">
                    <?php echo( $productsItem{'description'} ); ?>
                </div>

                <div class="tab-pane" id="3a">
                    <div id="reviews">
                        <div id="comments">
                            <h2 class="review-title">2 reviews for ArchitectMade Oscar Figure</h2>
                            <ol class="commentlist">
                                <li class="comment">
                                    <div class="comment_container">
                                        <img alt="rev" src="assets/images/p1.jpg" width="100" height="100" class="avatar">
                                        <div class="comment-text">
                                            <div class="meta">
                                                <strong>Stuart</strong>-
                                                <time  datetime="2013-06-07T13:01:25+00:00">June 7, 2013</time>
                                                <div class="rating" title="Rated 5 out of 5">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p>This will go great with my Hoodie that I ordered a few weeks ago.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="comment_container">
                                        <img alt="rev" src="assets/images/p2.jpg" width="100" height="100" class="avatar">
                                        <div class="comment-text">
                                            <div class="meta">
                                                <strong>Stuart</strong>-
                                                <time  datetime="2013-06-07T13:01:25+00:00">June 7, 2013</time>
                                                <div class="rating" title="Rated 5 out of 5">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p>This will go great with my Hoodie that I ordered a few weeks ago.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div id="review_form">
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Add a review</h3>
                                <form class="comment-form">
                                    <p>
                                        <label>Name</label>
                                        <input type="text">
                                    </p>
                                    <p>
                                        <label>Email</label>
                                        <input type="email">
                                    </p>
                                    <p>
                                        <label>Comment</label>
                                        <textarea rows="3"></textarea>
                                    </p>
                                    <p>
                                        <a class="button orange" href="#">Submit</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-slide relates">
            <h3 class="title-detail-slide">Другие товары</h3>
            <div class="supermartket-owl-carousel" data-number="5" data-margin="30" data-navcontrol="yes">

                <?php foreach ($sliderProducts as $sliderItem): ?>
                <div class="product-box">
                    <div class="product-box-content">
                        <figure class="img-product">
                            <img src="../../assets/images/p1.jpg" alt="product" height="207" width="175">
                            <a href="#" class="flaticon-search"></a>
                        </figure>
                        <div class="product-box-text">
                            <a href="#" class="product-name"><?php echo($sliderItem{'name'}); ?></a>
                            <p class="product-cost">$<?php echo $sliderItem['price']; ?></p>
                            <div class="product-box-bottom">
                                <a href="#" data-id="<?php echo $sliderItem['id']; ?> " class="add-to-cart"><i class="flaticon-commerce"></i>В корзину</a>
                                <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>



            </div>
        </div>





        <?php require_once ROOT.'/views/layouts/icon-box.php' ?>

    </div>
</div>






<?php require_once ROOT.'/views/layouts/footer.php' ?>



