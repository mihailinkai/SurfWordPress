<footer class="footer">
    <div class="container flex-column-center">

        <!-- LOGO -->
        <div class="footer-logo-wrapper">
            <a href="#!" class="logo">
                <img width="16" src="<?php echo get_template_directory_uri()?>/img/logo/logo.svg">
            </a>
        </div>

        <!-- NAVIGATION -->
        <div class="footer-nav-wrapper">
            <ul class="navigation">
                <li class="navigation__item">
                    <a class="navigation__link" href="#">Stories</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#">Events</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#">Places</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#">Boards</a>
                </li>
            </ul>
        </div>

        <!-- LINKS -->
        <div class="social">
            <a href="#" class="social__item">
                <img src="<?php echo get_template_directory_uri()?>/img/socials/social-tumblr.svg" alt="">
            </a>

            <a href="#" class="social__item">
                <img src="<?php echo get_template_directory_uri()?>/img/socials/social-twitter.svg" alt="">
            </a>

            <a href="#" class="social__item">
                <img src="<?php echo get_template_directory_uri()?>/img/socials/social-vimeo.svg" alt="">
            </a>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
