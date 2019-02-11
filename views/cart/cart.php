<?php require_once ROOT.'/views/layouts/header.php' ?>


    <div class="main-content container ">
        <div class="container">
            <?php if(isset($productsInCart) and $productsInCart!=0 ): ?>
            <div class="check-sec">

                <div class="col-md-12 cart-items">
                    <h1 style="margin-top: 0;">Моя корзина</h1>
                    <script>$(document).ready(function(c) {
                            $('.close1').on('click', function(c){
                                $('.cart-header').fadeOut('slow', function(c){
                                    $('.cart-header').remove();
                                });
                            });
                        });
                    </script>

                    <?php foreach ($productsInCart  as $id=>$count): ?>
                    <?php  $products = Products::getProductItemById($id)?>
                    <div class="cart-header">
                        <a  href="/cart/delete/<?php echo $products['id']; ?>"><div class="close1"> </div></a>
                        <div class="cart-sec simpleCart_shelfItem">
                            <div class="cart-item cyc">
                                <img src="<?php echo Products::getImage($products['id']); ?>" class="img-responsive" alt=""/>
                            </div>
                            <div class="cart-item-info">
                                <h2><a href="/products/<?php echo $products['id'];?>"><?php echo( $products{'name'} ); ?></a></h2>
                                <h3 class="amount">Цена $<?php echo $products['price']?></h3>

                                <h3> Количество &nbsp;
                                    <a class="sign minus" href="/cart/down/<?php echo $id ?>"><i class="fa fa-minus" aria-hidden="true"></i></a>
                                    <input type="text" size="1" class="input-text qty text" title="Qty" value="<?php echo $count ?>">
                                    <a class="sign plus" href="/cart/up/<?php echo $id ?>"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </h3>
                                <h3 class="amount">Общая стоимость &nbsp; $<?php echo $products['price']*$count?></h3>



                            </div>
                            <div class="clearfix"></div>

                        </div>
                    </div>
                    <?php endforeach; ?>

                    <div class="col-md-4 cart-total" style="margin-top: ">
                        <a class="continue" href="/list/page-1">Продолжить покупки</a>
                    </div>
                    <div class="col-md-4 cart-total" style="margin-top: ">

                        <a class="continue" href="/cart/checkout">Оформить заказ</a>

                    </div>
                    <div class="col-md-4 cart-total" style="margin-top: ">
                        <a class="continue" href="/cart/clear">Очистить корзину</a>


                    </div>

                </div>
                <div class="clearfix"> </div>
            </div>
            <?php else: ?>
                <p>Корзина пуста</p>
            <?php endif; ?>
        </div>
        <!-- //check out -->
        <!---->



        <?php require_once ROOT.'/views/layouts/footer.php' ?>
