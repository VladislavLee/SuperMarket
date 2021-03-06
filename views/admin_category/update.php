<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">



            <div class="content" style="width: 43%; margin: 50px auto; ">
                <div class="box" >
                    <div class="box-head">
                        <h2 class="left">Редактировать категорию "<?php echo $category['name']; ?>"</h2>

                    </div>
                    <form action="#" method="post" style="padding: 20px; ">

                        <p>Название</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $category['name']; ?>">

                        <p>Порядковый номер</p>
                        <input type="text" name="sort_order" placeholder="" value="<?php echo $category['sort_order']; ?>">
                        
                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($category['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($category['status'] == 0) echo ' selected="selected"'; ?>>Скрыта</option>
                        </select>

                        <br><br>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить" style="background:#1abc9c;
	color: white;">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

