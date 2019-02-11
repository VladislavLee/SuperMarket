<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row" style="display: flex; flex-direction: column; justify-content: flex-start; margin: 40px 0 0 200px ; ">


                <div class="col-sm-9 padding-right">
                    <div class="features_items">

                        <h2 class="title text-center" style="display: flex; justify-content: flex-start; padding-left: 15px;">Оформление заказа</h2>


                        <?php if ($result): ?>
                            <p style="margin-top: 30px;">Заказ оформлен. Нам менеджер свяжется с вами в ближайшее время.</p>
                        <?php else: ?>

                            <p style="padding-left: 15px; padding-right: 15px; margin-top: 20px">Выбрано товаров: <?php echo $totalQuantity; ?> на сумму: <?php echo $totalPrice; ?> $</p><br/>

                            <?php if (!$result): ?>

                                <div class="col-sm-12">
                                    <?php if (isset($errors) && is_array($errors)): ?>
                                        <ul>
                                            <?php foreach ($errors as $error): ?>
                                                <li> - <?php echo $error; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <h5 style="margin-bottom: 20px;" >Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</h5>

                                    <div class="login-form">
                                        <form action="#" method="post">

                                            <p>Ваше имя</p>
                                            <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>

                                            <p>Номер телефона</p>
                                            <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>

                                            <p>Комментарий к заказу</p>
                                            <input type="text" name="userComment" placeholder="" value="<?php echo $userComment; ?>"/>

                                            <br/>
                                            <br/>
                                            <input type="submit" style="background: #1abc9c; color: white !important;" name="submit" class="btn btn-default" value="Оформить" />
                                            <a href="/cart"> <input type="button" style="margin-left: 5px; background: #1abc9c; color: white !important;"  class="btn btn-default" value="Отменить" /></a>
                                        </form>
                                    </div>
                                </div>

                            <?php endif; ?>

                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>