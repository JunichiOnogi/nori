<footer class="footer">
    <small class="copyright">&copy;2024NORICHAN ALL RIGHTS RESERVED</small>
    <a href="#top" class="pagetop">
        <picture>
            <source srcset="<?php echo APP_ASSETS; ?>img/pagetop_sp.svg" media="(max-width:768px)">
            <img src="<?php echo APP_ASSETS; ?>img/pagetop.svg" width="12" height="88" class="p-idx-img" alt="PAGE TOP">
        </picture>
    </a>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/modernizr.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/common.min.js"></script>

<?php /* wp_footer(); */ ?>
<script>
    var ua = navigator.userAgent
    var sp = (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)
    if (sp) new ViewportExtra(375)
</script>