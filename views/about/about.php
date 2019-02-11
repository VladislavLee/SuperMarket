<?php require_once ROOT . '/views/layouts/header.php' ?>


<div class="main-content">
    <div class="about-top">
        <div class="container">
            <div class="breadcrumb-sidebar">
                <div class="breadcrumb-wrap">
                    <nav class="breadcrumb-trail breadcrumbs">

                    </nav>
                </div>
            </div>

            <section class="offer-section" style="margin-bottom: 60px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 wow fadeInDown animated ">
                            <h2>Добро пожаловать в <b>G</b>uitar<b>W</b>orld</h2>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row">
            <?php foreach ($list  as $about) : ?>



                <div class="col-md-4">
                    <div class="about-top1">
                        <div class="about-top1">

                            <h3 >Контактные данные: </h3>
                            <h4 style="margin-top: 20px; margin-bottom: 20px;" >Телефон: <span><?php echo( $about{'contact'}); ?></span> </h4>
                            <h4 style="margin-bottom: 20px;">Email: <span><?php echo( $about{'email'}); ?></span> </h4 >
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="about-top2">
                        <p class="title-left">&nbsp;</p>
                        <p><?php echo( $about{'description'}); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>


        </div>
    </div>

</div>


<?php require_once ROOT . '/views/layouts/footer.php' ?>