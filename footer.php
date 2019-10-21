<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test_task
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 p-0">
                        <div class="footer-block-1">
                            <h4 class="footer-title">
                                Recent Posts
                            </h4>
                            <ul>
                                <li>
                                    <a href="#" rel="footer">
                                        <i class="fas fa-angle-double-right"></i>
                                        How you can impact your customers.
                                    </a>
                                </li>
                                <li>
                                    <a href="#" rel="footer">
                                        <i class="fas fa-angle-double-right"></i>
                                        Construction is all about quality.
                                    </a>
                                </li>
                                <li>
                                    <a href="#" rel="footer">
                                        <i class="fas fa-angle-double-right"></i>
                                        Is your website user friendly?
                                    </a>
                                </li>
                                <li>
                                    <a href="#" rel="footer">
                                        <i class="fas fa-angle-double-right"></i>
                                        HUGE offers weekly updates & more.
                                    </a>
                                </li>
                                <li>
                                    <a href="#" rel="footer">
                                        <i class="fas fa-angle-double-right"></i>
                                        Your customers should love your web.
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 f-m-p">
                        <div class="footer-block-2">
                            <h4 class="footer-title">
                                Recent News
                            </h4>
                            <div class="post">
                                <?php echo do_shortcode( '[the-post-grid id="67" title=""]' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 f-m-p">
                        <div class="footer-block-3">
                            <h4 class="footer-title">
                                Contact Info
                            </h4>
                            <ul>
                                <li>
                                    <a href="mail:contact@mail.com"><i class="far fa-envelope"></i><span>contact@mail.com </span></a>
                                </li>
                                <li>
                                    <i class="fas fa-phone-volume"></i>
                                    <div class="phone-block">
                                        <a href="tel:3333 222 1111" rel="tel">P: 3333 222 1111</a>
                                        <a href="tel:3333 222 1111" rel="tel">F: 3333 222 1111</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="phone-block">
                                        <span>99 Brand St-Suite 111</span>
                                        <span>United States-GA 2222</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="sociar">
                                <a href="#" rel="facebook"><i class="fab fa-facebook-square"></i></a>
                                <a href="#" rel="skype"><i class="fab fa-skype"></i></a>
                                <a href="#" rel="skype"><i class="fab fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 p-0">
                        <div class="footer-block-4">
                            <h4 class="footer-title">
                                Mailing List
                            </h4>
                            <p>
                                Enter your email address  for our mailing list to keep yourself
                            </p>
                            <div class="form">
                                <?php echo do_shortcode( '[contact-form-7 id="69" title="footer"]' ); ?>
                            </div>
                            <span>
                            We Respect Your Privacy
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <p>© Themexpert 2018</p>
                    </div>
                    <div class="col-lg-4 offset-lg-6 main-menu">
                        <nav id="site-navigation" class="main-navigation">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                            ) );
                            ?>
                        </nav><!-- #site-navigation -->
                    </div>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
