    </main>
    <!-- rodape !-->
    <footer>
        <div class="container">
            <p>Copyright (c) <?php echo date(Y); ?> Copyright Holder All Rights Reserved - AToca</p>
        </div>
    </footer>
</body>
<script src="<?php bloginfo('template_url'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bower_components/lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bower_components/wow/dist/wow.min.js"></script>
<!--  inicializa o wow !-->
<script>
    var wow = new WOW(
    {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
        // the callback is fired every time an animation is started
        // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null // optional scroll container selector, otherwise use window
    }
    );
    wow.init();
</script>
</html>