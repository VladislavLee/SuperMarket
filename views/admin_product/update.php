<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/product">Управление товарами</a></li>
                    <li class="active">Редактировать товар</li>
                </ol>
            </div>


            <h4>Редактировать товар #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Название товара</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>">

                        <p> Колличество</p>
                        <input type="text" name="count" placeholder="" value="<?php echo $product['count']; ?>">

                        <p>Стоимость, $</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>">

                        <p>Категория</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>" 
                                        <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        
                        <br/><br/>

                        <p>Краткое описание</p>
                        <textarea name="preview"><?php echo $product['preview']; ?></textarea>

                        <br/><br/>

                        <p>Детальное описание</p>
                        <textarea name="description"><?php echo $product['description']; ?></textarea>

                        <br/><br/>

                        <p>Наличие на складе</p>
                        <select name="available">
                            <option value="1" <?php if ($product['available'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['available'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>

                        <br/><br/>



                        <p>Рекомендуемые</p>
                        <select name="is_recommended">
                            <option value="1" <?php if ($product['is_recommended'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['is_recommended'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>

                        <br/><br/>

                        <p>Статус</p>
                        <select name="products_status">
                            <option value="1" <?php if ($product['products_status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($product['products_status'] == 0) echo ' selected="selected"'; ?>>Скрыт</option>
                        </select>

                        <br/><br/>




                        <p>Изображение товара</p>
                        <img src="<?php echo Products::getImage($product['id']); ?>" width="200" alt="" />
                        <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>">
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                        
                        <br/><br/>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

