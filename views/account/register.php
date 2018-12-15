<!DOCTYPE html>
<html>
<head>
    <title>Форма регистрации</title>
    <!-- metatags-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Transitive register form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Meta tag Keywords -->
    <link href="../../assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="../../assets/css/font-awesome.css"><!--font_wesome_icons-->
    <link href="//fonts.googleapis.com/css?family=Exo+2" rel="stylesheet"><!--online fonts-->
    <link href="//fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet"><!--online fonts-->
</head>
<body style="background:url('https://ewejsciowki.pl/api/images/8a2ccb33-5568-452d-909c-6f10b45a1ffe'),no-repeat; background-size: cover;
  background-attachment: fixed;">


<div class="w3ls-headding">
    <h1> <span>Ф</span>орма <span>Р</span>егистрации</h1>
</div>



<div class="agile-main">

    <div class="agile-right">
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

            <div class="agile-right-h2">
                <h2>Регистрация</h2>
            </div>
            <div class="w3l-name">
                <span><i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
            </div>
            <div class="clear"></div>
            <div class="w3l-email">
                <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
            </div>
            <div class="clear"></div>
            <div class="w3l-psw">
                <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
            </div>


            <div class="clear"></div>

            <div class="w3l-submit">
                <input type="submit" name="submit" class="btn btn-default" value="Регистрация" />
            </div>
            <?php endif; ?>
        </form>

    </div>
    <div class="clear"></div>



</div>


<footer>
    <p>&copy; Bookwarm</p>
</footer>

</body>

</html>