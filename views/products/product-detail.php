<?php require_once ROOT.'/views/layouts/header.php' ?>
<div class="categories main-content">
    <div class="container">
        <div class="breadcrumb-sidebar">
            <div class="breadcrumb-wrap">
                <nav class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items">
                        <li class="trail-item trail-begin">
                            <a href="#"><span>Главная</span></a>
                        </li>

                        <li class="trail-item trail-end">
                            <span><?php echo($productsItem{'name'}); ?></span>
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
                            <img src="<?php echo Products::getImage($productsItem['id']); ?>" alt="product" height="536" width="467">
                        </figure>
<!--                        <div class="featue-slide supermartket-owl-carousel" data-number="3" data-margin="15" data-navcontrol="yes">-->
<!--                            <div class="feature-slide-item">-->
<!--                                <figure><img src="../../assets/images/sli-dt1.jpg" alt="feature" width="126" height="143"></figure>-->
<!--                            </div>-->
<!--                            <div class="feature-slide-item">-->
<!--                                <figure><img src="../../assets/images/sli-dt2.jpg" alt="feature" width="126" height="143"></figure>-->
<!--                            </div>-->
<!--                            <div class="feature-slide-item">-->
<!--                                <figure><img src="../../assets/images/sli-dt3.jpg" alt="feature" width="126" height="143"></figure>-->
<!--                            </div>-->
<!--                            <div class="feature-slide-item">-->
<!--                                <figure><img src="../../assets/images/sli-dt2.jpg" alt="feature" width="126" height="143"></figure>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                    <div class="col-md-7">
                        <div class="single-product-content">
                            <h2 ><?php echo($productsItem{'name'}); ?></h2>
                            <hr style="border-top: 1px solid #999;"/>
                            <h2 class="product-cost">$<?php echo($productsItem{'price'}); ?></h2>
                            <h2 class="stock">
                                <?php if($productsItem{'available'} == ['1']) : ?> <span style="margin: 0;"><i class="fa fa-check-square-o" aria-hidden="true" style="margin-right: 5px;"></i>В наличие</span>
                                <?php else: ?>
                                <span style="margin: 0; color: red;"><i class="fa fa-check-square-o" aria-hidden="true" style="margin-right: 5px;"></i>Нет в наличие</span>
                                <?php endif; ?>
                            </h2>
                            <div class="desc-product-title">Описание</div>
                            <div class="desc-product"><?php echo( $productsItem{'preview'} ); ?>
                            </div>

                            <div class="product-box-bottom">
<!--                                <div class="quanlity-product">-->
<!--                                    <span>Колличество:</span>-->
<!--                                    <div class="quantity buttons_added">-->
<!--                                        <a class="sign minus" href="#"><i class="fa fa-minus" aria-hidden="true"></i></a>-->
<!--                                        <input type="text" size="1" class="input-text qty text" title="Qty" value="1">-->
<!--                                        <a class="sign plus" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="button-detail">
                                    <a href="#" data-id="<?php echo $productsItem['id']; ?> " class="add-to-cart"><i class="flaticon-commerce"></i>В корзину</a>
<!--                                    <a href="#" class="wishlist"><i class="flaticon-like"></i></a>-->
<!--                                    <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-products product-tabs">
            <ul  class="nav nav-pills" style="display: flex; flex-direction: row; justify-content: flex-start;">
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
                            <h2 class="review-title" style="margin-bottom: 20px">Отзывы о <?php echo $productsItem['name']; ?> </h2>
                            <ol class="commentlist">
                                <?php if($reviewsList==[]) : ?>
                                <h5 style="margin-top: 20px; margin-bottom: 20px;">К сожалению, еще нет ни одного отзыва на товар</h5>
                                <?php else:  ?>
                                <?php foreach ($reviewsList as $reviews) :?>

                                <li class="comment">
                                    <div class="comment_container">
<!--                                        <img alt="rev" src="/assets/images/p1.jpg" width="100" height="100" class="avatar">-->
                                        <div class="comment-text">
                                            <div class="meta">
                                                <strong><?php echo ($reviews{'name'}); ?></strong>-
                                                <time ><?php echo ( $reviews{'date'}); ?></time>

                                            </div>
                                            <div class="description">
                                                <p><?php echo ($reviews{'content'}); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <?php endforeach; ?>


                                <?php endif; ?>
                            </ol>
                        </div>
                        <?php if(User::isGuest()) : ?>
                        <p>Оставлять отзывы могут только зарегистрированные пользователи</p>
                        <?php else:  ?>
                        <div id="review_form">
                            <div class="comment-respond">
                                <h3 class="comment-reply-title" style="margin-bottom: 10px"><a href="#" style="color: #1abc9c;">Добавить отзыв</a> </h3>
                                <form class="comment-form" method="post">

                                    <p>
                                        <label>Отзыв на <?php echo $productsItem['name']; ?></label>
                                        <textarea id="comment" rows="3" cols="30" name="content" ></textarea>
                                    </p>
                                    <p style="margin-top: 20px;">
                                        <a class="button orange" href="#"><input style="background:#1abc9c; border: 0; " type="submit" name="submit" value="Отправить" /> </a>
                                    </p>


                                </form>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>





    </div>
</div>






<?php require_once ROOT.'/views/layouts/footer.php' ?>



