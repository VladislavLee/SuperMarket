



<footer class="footer" style="background-color: #ffffff; margin-top: 4%;">
    <div class="container">
        <div class="footer-bottom">
            <ul class="menu-footer-bottom">
                <li class="menu-footer-bottom-item"><a href="/">Наш магазин</a></li>
                <li class="menu-footer-bottom-item"><a href="/list/page-1">Товары</a></li>
                <li class="menu-footer-bottom-item"><a href="/about">О нас</a></li>

            </ul>
            <div class="copyright">
                <i class="fa fa-copyright" aria-hidden="true"></i>
                2018 <a href="#">GuitarWorld</a>
            </div>
        </div>
    </div>

</footer>
<!--end footer-->
<script type='text/javascript' src='/assets/js/jquery.min.js'></script>
<script type='text/javascript' src='/assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='/assets/js/wow.min.js'></script>
<script type='text/javascript' src='/assets/js/owl.carousel.min.js'></script>
<script type='text/javascript' src='/assets/js/jquery.appear.min.js'></script>
<script type='text/javascript' src='/assets/js/jquery.countTo.js'></script>
<script type='text/javascript' src='/assets/js/ui.js'></script>
<script type='text/javascript' src='/assets/js/jquery.bxslider.min.js'></script>
<script type='text/javascript' src='/assets/js/jquery.mmenu.all.min.js'></script>
<script type='text/javascript' src='/assets/js/chosen.jquery.min.js'></script>
<script type='text/javascript' src='/assets/js/jquery.countdown.js'></script>
<script type='text/javascript' src='/assets/js/frontend.js'></script>


<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (cart) {
                $(".shoping-cart").html(cart);
            });
            return false;
        });
    });
</script>

<script src="../../templates/js/vendor/jquery-1.11.2.min.js"></script>
<script src="../../templates/js/vendor/bootstrap.min.js"></script>
<script src="../../templates/js/isotope.pkgd.min.js"></script>
<script src="../../templates/js/owl.carousel.min.js"></script>
<script src="../../templates/js/wow.min.js"></script>
<script src="../../templates/js/custom.js"></script>















</body>
</html>