<?php require_once ROOT.'/views/layouts/header.php' ?>


<body class="blog-page sidebar-left">
<div class="main-content ">
    <div class="container">
        <!--  <div class="breadcrumb-sidebar">
              <div class="breadcrumb-wrap">
                  <nav class="breadcrumb-trail breadcrumbs">
                      <ul class="trail-items">
                          <li class="trail-item trail-begin">
                              <a href="#"><span>Home</span></a>
                          </li>
                          <li class="trail-item trail-end">
                              <span>Electronic</span>
                          </li>
                      </ul>
                  </nav>
              </div>
          </div>-->
        <div class="row" style="display: flex; align-content: center; align-items: center; margin-left: 18%">
            <div class="content blog-content col-md-9 ">
                <h5 class="title-page">Отзывы</h5>

                <?php foreach ($reviewsList as $reviewItem ): ?>
                <div class="blog-box">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="post-media">
                                <figure><a href="#"><img src="http://www.printimpression.in/images/cat2.jpg" alt="blog1" height="237" width="370"></a></figure>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="blog-content-left">
                                <h4 class="blog-box-title"><a href="#"><?php echo($reviewItem{'title'}); ?></a></h4>
                                <div class="blog-box-date">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <?php echo($reviewItem{'date'}); ?>
                                </div>
                                <div class="blog-box-desc">
                                    <?php echo($reviewItem{'short_content'}); ?>
                                </div>
                                <div class="blog-post-meta">
                                    <a href="#">10 коментариев</a>
                                    <a href="#"><?php echo($reviewItem{'author_name'}); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>


                <div class="page-nav">
                    <div class="page-nav-item active">1</div>
                    <div class="page-nav-item">2</div>
                    <div class="page-nav-item">3</div>
                    <div class="page-nav-item"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>

</div>



<?php require_once ROOT.'/views/layouts/footer.php' ?>
