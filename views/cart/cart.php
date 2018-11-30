<?php require_once '../layouts/header.php' ?>

<div class="main-content container ">
    <h4 class="title-page">Корзина</h4>
    <div class="shop-table-content container">
        <form method="post" action="#" class="shoping-form">

            <div class="div-table-cart">
                <table class="shop_table cart">
                    <thead>
                    <tr>
                        <th class="product-thumbnail">&nbsp;Товар</th>
                        <th class="product-name">Название</th>
                        <th class="product-edit">Добавить</th>
                        <th class="product-price">Цена</th>
                        <th class="product-quantity">Колличество</th>
                        <th class="product-subtotal">Окончательная стоимость</th>
                        <th class="product-remove">Удалить&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="cart_item">
                        <td class="product-thumbnail" data-title="">
                            <a href="#"><img height="150" width="185" alt="s_c" class="attachment-shop_thumbnail wp-post-image" src="https://tlum.ru/uploads/3d57aea6c834638539bd6e3031b58183564c71dba4a087ba5cdcaf00f286886e.jpeg"></a>
                        </td>
                        <td class="product-name" data-title="Product Name">
                            <a href="#">Хроники Нарнии: Лев, Колдунья и плотянной шкаф</a>
                        </td>
                        <td class="edit"><a href="#">Добавить</a></td>
                        <td class="product-price" data-title="Unit Price">
                            <span class="amount">$168.00</span>
                        </td>
                        <td class="product-quantity" data-title="Qty">
                            <div class="quantity buttons_added">
                                <input type="text" class="input-text qty text" title="Qty" value="1" name="qty">
                            </div>
                        </td>
                        <td class="product-subtotal" data-title="Subtotal">
                            <span class="amount">$168.00</span>
                        </td>
                        <td class="product-remove" data-title="Remove">
                            <a title="Remove this item" class="remove" href="#">×</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="button-cart">
                    <a class="button button-check-out" href="#">Очистить корзину</a>
                    <a class="button button-check-out" href="#">Обновить корзину</a>
                    <a class="button button-check-out" href="#">Продолжить покупки</a>
                </div>
            </div>

        </form>

    </div>




<?php require_once '../layouts/footer.php.php'?>
