
<?php require_once ROOT.'/views/layouts/header.php' ?>


<div class="login_sec">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Главная</a></li>
            <li class="active">Вход</li>
        </ol>

        <div class="col-md-6 log" style="margin: 0;">


            <h2>Вход в аккаунт</h2>
            <form action="#" method="post">

                <?php if (isset($errors) && is_array($errors)): ?>


                    <ul style="display: flex; flex-direction: column; justify-content: center;width: 100%; background: rgba(15, 16, 15, 0.89);">
                        <?php foreach ($errors as $error): ?>
                            <li style=" color: #fff ;    "> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>

                <?php endif; ?>

                <div >
                    <h5>Логин</h5>
                    <input type="text" name="email" placeholder="" value="<?php echo $email; ?>"/>
                </div>
                <div class="clear"></div>
                <div >
                    <h5>Пароль</h5>
                    <input type="password" name="password" placeholder="" value="<?php echo $password; ?>"/>
                </div>
                <div class="clear"></div>


                    <input type="submit" name="submit" value="Войти" style="  color: #fff !important;" />
                <a class="acount-btn" style="  color: #fff !important;" href="/user/register">Зарегистрироваться</a>


            </form>







        </div>

        <div class="clearfix"></div>
    </div>
</div>



<?php require_once ROOT.'/views/layouts/footer.php' ?>