
<?php require_once ROOT.'/views/layouts/header.php' ?>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.html">Главная</a></li>
        <li class="active">Регистрация</li>
    </ol>
    <div class="registration">
        <div class="registration_left">
            <h2>Создать аккаунт </h2>
            <!-- [if IE]
               < link rel='stylesheet' type='text/css' href='ie.css'/>
            [endif] -->

            <!-- [if lt IE 7]>
               < link rel='stylesheet' type='text/css' href='ie6.css'/>
            <! [endif] -->
            <script>
                (function() {
                    // Create input element for testing
                    var inputs = document.createElement('input');
                    // Create the supports object
                    var supports = {};
                    supports.autofocus   = 'autofocus' in inputs;
                    supports.required    = 'required' in inputs;
                    supports.placeholder = 'placeholder' in inputs;

                    // Fallback for autofocus attribute
                    if(!supports.autofocus) {

                    }
                    // Fallback for required attribute
                    if(!supports.required) {

                    }
                    // Fallback for placeholder attribute
                    if(!supports.placeholder) {

                    }
                    // Change text inside send button on submit
                    var send = document.getElementById('register-submit');
                    if(send) {
                        send.onclick = function () {
                            this.innerHTML = '...Sending';
                        }
                    }
                })();
            </script>
            <div class="registration_form">
                <!-- Form -->
                <form action="#" method="post">
                    <?php if ($result): ?>
                        <p style=" color: #fff; ">Вы зарегистрированы!</p>
                    <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>


                        <ul style="display: flex; flex-direction: column; justify-content: center;width: 100%; background: rgba(15, 16, 15, 0.89);">
                            <?php foreach ($errors as $error): ?>
                                <li style=" color: #fff ;    "> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>

                    <?php endif; ?>
                    <div>
                        <label>
                            <h5>Логин</h5>
                            <input type="text" name="name" placeholder="Логин" tabindex="1" value="<?php echo $name; ?>"/>
                        </label>
                    </div>

                    <div>
                        <label>
                            <h5>Email</h5>
                            <input type="email" name="email" placeholder="Email" tabindex="2" value="<?php echo $email; ?>"/>
                        </label>
                    </div>


                    <div>
                        <label>
                            <h5>Пароль</h5>
                            <input type="password" name="password" placeholder="Пароль" tabindex="3" value="<?php echo $password; ?>"/>
                        </label>
                    </div>

                    <div>
                        <input type="submit" name="submit" id="register-submit" value="Зарегистрироваться" />
                    </div>

                    <?php endif; ?>
                </form>




                <!-- /Form -->
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
<!---->


<?php require_once ROOT.'/views/layouts/footer.php' ?>