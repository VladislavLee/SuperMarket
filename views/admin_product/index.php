


<?php require_once ROOT.'/views/layouts/header_admin.php' ?>

<!-- Container -->
<div id="container">
    <div class="shell">

        <!-- Small Nav -->
        <div class="small-nav">
            <a href="/admin/product">Главная</a>
            <span>&gt;</span>
            Товары
        </div>

        <div id="main">
            <div class="cl">&nbsp;</div>

            <!-- Content -->
            <div id="content">

                <!-- Box -->
                <div class="box">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2 class="left">Список товаров</h2>

                    </div>
                    <!-- End Box Head -->

                    <!-- Table -->
                    <div class="table">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th>ID товара</th>
                                <th>Название товара</th>
                                <th>Цена</th>
                                <th width="180" class="ac">Изменение/Удаление</th>
                            </tr>

                                <?php foreach ($productsListAdmin as $product): ?>
                            <tr>
                                <td><?php echo $product['id']; ?></td>
                                <td><?php echo $product['name']; ?></td>
                                <td><?php echo $product['price']; ?></td>

                                <td>
                                    <a href="/admin/product/delete/<?php echo $product['id']; ?>" class="ico del">Удалить</a>
                                    <a href="/admin/product/update/<?php echo $product['id']; ?>" class="ico edit">Изменить</a>
                                </td>

                            </tr>
                            <?php endforeach; ?>



                        </table>

                    </div>

                </div>

            </div>

            <div id="sidebar">

                <!-- Box -->
                <div class="box">

                    <!-- Box Head -->
                    <div class="box-head">
                        <h2>Добавление</h2>
                    </div>
                    <!-- End Box Head-->

                    <div class="box-content">
                        <a href="/admin/product/create" class="add-button"><span>Добавить новый товар</span></a>
                        <div class="cl">&nbsp;</div>



                    </div>
                </div>
                <!-- End Box -->
            </div>
            <!-- End Sidebar -->

            <div class="cl">&nbsp;</div>
        </div>
        <!-- Main -->
    </div>
</div>
<!-- End Container -->

<?php require_once ROOT.'/views/layouts/footer_admin.php' ?>