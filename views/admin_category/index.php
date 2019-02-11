<?php include ROOT . '/views/layouts/header_admin.php'; ?>


<div id="container">
    <div class="shell">

        <!-- Small Nav -->
        <div class="small-nav">
            <a href="/admin/product">Главная</a>
            <span>&gt;</span>
            Категории
        </div>

        <div id="main">
            <div class="cl">&nbsp;</div>

            <!-- Content -->
            <div id="content">

                <!-- Box -->
                <div class="box">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2 class="left">Список категорий</h2>

                    </div>
                    <!-- End Box Head -->

                    <!-- Table -->
                    <div class="table">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th>ID категории</th>
                                <th>Название категории</th>
                                <th>Порядковый номер</th>
                                <th>Статус</th>
                                <th width="180" class="ac">Изменение/Удаление </th>
                            </tr>
                            <?php foreach ($categoriesList as $category): ?>
                                <tr>
                                    <td><?php echo $category['id']; ?></td>
                                    <td><?php echo $category['name']; ?></td>
                                    <td><?php echo $category['sort_order']; ?></td>
                                    <td><?php echo Category::getStatusText($category['status']); ?></td>
                                    <td>
                                        <a href="/admin/category/update/<?php echo $category['id']; ?>" class="ico edit">Изменить</a>
                                        <a href="/admin/category/delete/<?php echo $category['id']; ?>" class="ico del">Удалить</a>

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
                        <a href="/admin/category/create" class="add-button"><span>Добавить категорию</span></a>
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



<?php include ROOT . '/views/layouts/footer_admin.php'; ?>