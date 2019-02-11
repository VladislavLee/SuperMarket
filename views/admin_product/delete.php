<?php include ROOT . '/views/layouts/header_admin.php'; ?>


<section>
    <div class="content" style="width: 43%; margin: 50px auto; ">
        <div class="box" >
            <div class="box-head">
                <h2 class="left">Добавление товара #<?php echo $id; ?></h2>

            </div>




            <p style="margin-top: 15px; margin-left: 18px; ">Вы действительно хотите удалить этот товар?</p>

            <form method="post" style="display: flex; flex-direction: row; justify-content: space-between; align-items: center; padding: 20px; width: 25%;">
                <input type="submit" name="submit" value="Удалить"  style="height: 26px;
	background:#1abc9c;
	color: white;"/>
                <p style="height: 26px; background:#1abc9c; width: 69px; display: flex; justify-content: center; align-items: center; padding: 0; margin: 10px 0 ; font-size: 13px;"><a href="#" style="text-decoration: none; color: white !important;">Отменить</a></p>
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>


