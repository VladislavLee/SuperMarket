

<?php require_once ROOT . '/views/layouts/header.php' ?>


<section>
    <div class="container" >
        <div class="row" style=" margin: 10px;">
            <h3>Личный кабинет пользователя - <?php foreach ($orderList as $order): ?><?php echo $order['user_name']; ?> <?php endforeach; ?></h3>

            <?php  if(AdminBase::checkAdmin()) :  ?>


                <a href="/admin/product"><h2 style="padding: 5px; background: #1abc9c; color: white; width: auto; text-align: center;">Перейти в админпанель</h2></a>


            <?php endif; ?>


            <section>
                <div class="container">
                    <div class="row">

                        <div class="col-sm-4 col-sm-offset-4 padding-right" style="margin: 0; padding: 0;">

                            <?php if ($result): ?>
                                <p>Данные отредактированы!</p>
                            <?php else: ?>
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <div class="signup-form"><!--sign up form-->
                                    <h2 style="margin-top: 20px;">Редактирование данных</h2>
                                    <form action="#" method="post">
                                        <p>Имя:</p>
                                        <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>

                                        <p>Пароль:</p>
                                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                                        <br/>
                                        <input style="margin-top: 20px; background: #1abc9c; color: white !important;" type="submit" name="submit" class="btn btn-default" value="Сохранить" />
                                    </form>
                                </div><!--/sign up form-->

                            <?php endif; ?>
                            <br/>
                            <br/>
                        </div>
                    </div>
                </div>
            </section>



            <h4 style="margin-top: 20px">Список заказов</h4>

            <br/>
            <?php if(isset($orderList) and $orderList!=[]): ?>

            <table class="table-bordered table-striped table" style="background:#1abc9c;">
                <tr>
                    <th>ID заказа</th>
                    <th>Имя покупателя</th>
                    <th>Телефон покупателя</th>
                    <th>Дата оформления</th>
                    <th>Статус</th>
                    <th></th>
                </tr>
                <?php foreach ($orderList as $order): ?>
                    <tr>
                        <td>
                            <a href="/account/order/view/<?php echo $order['id']; ?>" style="text-decoration: none; color: white; ">
                                <?php echo $order['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $order['user_name']; ?></td>
                        <td><?php echo $order['user_phone']; ?></td>
                        <td><?php echo $order['date']; ?></td>
                        <td><?php echo Order::getStatusText($order['status']); ?></td>
                        <td><a href="/account/order/view/<?php echo $order['id']; ?>" title="Смотреть" style="text-decoration: none; color: white; ">Подробнее</a></td>



                    </tr>
                <?php endforeach; ?>
            </table>
            <?php else: ?>
                <p>Заказы отсутсвуют</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<style>
    td{
        background: #1abc9c;
        color: white;

    }

</style>



<?php require_once ROOT . '/views/layouts/footer.php' ?>