<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">






            <div class="content" style="width: 43%; margin: 50px auto; ">
                <div class="box" >
                    <div class="box-head">
                        <h2 class="left">Просмотр заказа #<?php  echo $order['id']; ?> </h2>

                    </div>


                    <div class="table" style="padding: 20px; ">
            <table class="table-admin-small  table-bordered table-striped table" style="padding: 20px;">
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
                    <td>Комментарий клиента</td>
                    <td><?php echo $order['user_comment']; ?></td>
                </tr>
                <?php if ($order['user_id'] != 0): ?>
                    <tr>
                        <td>ID клиента</td>
                        <td><?php echo $order['user_id']; ?></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td><b>Статус заказа</b></td>
                    <td><?php echo Order::getStatusText($order['status']); ?></td>
                </tr>
                <tr>
                    <td><b>Дата заказа</b></td>
                    <td><?php echo $order['date']; ?></td>
                </tr>
            </table>

            <h2 style="margin-bottom: 20px; margin-top: 20px;">Товары в заказе</h2>

            <table class="table-admin-medium table-bordered table-striped table " style="border: 1px solid #555252; margin-bottom: 20px;">
                <tr>
                    <th>ID товара</th>

                    <th>Название</th>
                    <th>Цена</th>
                    <th>Количество</th>
                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>

                        <td><?php echo $product['name']; ?></td>
                        <td>$<?php echo $product['price']; ?></td>
                        <td><?php echo $productsQuantity[$product['id']]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
                </div>

            </div>
        </div>

</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

