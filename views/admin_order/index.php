<?php include ROOT . '/views/layouts/header_admin.php'; ?>



<div id="container">
    <div class="shell">

        <!-- Small Nav -->
        <div class="small-nav">
            <a href="/admin/product">Главная</a>
            <span>&gt;</span>
            Категории
        </div>

        <br />
        <!-- Main -->
        <div id="main">
            <div class="cl">&nbsp;</div>

            <!-- Content -->
            <div id="content">

                <!-- Box -->
                <div class="box">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2 class="left">Список заказов</h2>

                    </div>
                    <!-- End Box Head -->

                    <!-- Table -->
                    <div class="table">
                        <table class="table-bordered table-striped table">
                            <tr>
                                <th>ID заказа</th>
                                <th>Имя покупателя</th>
                                <th>Телефон покупателя</th>
                                <th>Дата оформления</th>
                                <th>Статус</th>
                                <th>Заказ</th>
                                <th width="180" class="ac">Изменение/Удаление</th>
                            </tr>
                            <?php foreach ($ordersList as $order): ?>
                                <tr>
                                    <td>
                                        <a href="/admin/order/view/<?php echo $order['id']; ?>">
                                            <?php echo $order['id']; ?>
                                        </a>
                                    </td>
                                    <td><?php echo $order['user_name']; ?></td>
                                    <td><?php echo $order['user_phone']; ?></td>
                                    <td><?php echo $order['date']; ?></td>
                                    <td><?php echo Order::getStatusText($order['status']); ?></td>
                                    <td><a href="/admin/order/view/<?php echo $order['id']; ?>">Подробнее</a></td>
                                    <td>
                                        <a href="/admin/order/update/<?php echo $order['id']; ?>" class="ico edit">Изменить</a>
                                        <a href="/admin/order/delete/<?php echo $order['id']; ?>" class="ico del">Удалить</a>
                                    </td>
                                    </tr>
                            <?php endforeach; ?>
                        </table>

                    </div>

                </div>

            </div>



            <div class="cl">&nbsp;</div>
        </div>
        <!-- Main -->
    </div>
</div>












<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

