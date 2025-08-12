        <div class="footer-sns">
            <div class="footer-sns__inner">
                <ul class="footer-sns__list">
                    <li class="footer-sns__item fade fade-up-50">
                        <a href="https://www.instagram.com/jobterrace_saiyo/" target="_blank" rel="noopener noreferrer" class="footer-sns__link instagram">
                            <img src="<?= THEMEIMG; ?>/icon-instagram.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <footer class="footer">
            <div class="footer__inner">
                <h1 class="footer-logo fade fade-up-50">
                    <a href="<?php echo home_url(); ?>" class="footer-logo__link">
                        <img src="<?= get_site_icon_url(); ?>" class="footer-logo__img" alt="Jobterrace">
                    </a>
                </h1>
                <div class="footer-navis">
                    <div class="footer-navis__inner">
                        <?php
                            wp_nav_menu(array( 
                                'container'       => 'nav', 
                                'container_id'    => 'footer-nav1',
                                'container_class' => 'footer-navi1',
                                'menu_class'      => 'footer-navi1__lists fade fade-up-50',
                                'add_li_class'    => 'footer-navi1__list',
                                'add_a_class'     => 'footer-navi1__link',
                                'theme_location'  => 'footer-nav1' 
                            )); 
                        ?>
                        <?php
                            wp_nav_menu(array( 
                                'container'       => 'nav', 
                                'container_id'    => 'footer-nav2',
                                'container_class' => 'footer-navi2',
                                'menu_class'      => 'footer-navi2__lists fade fade-up-50',
                                'add_li_class'    => 'footer-navi2__list',
                                'add_a_class'     => 'footer-navi2__link',
                                'theme_location'  => 'footer-nav2' 
                            )); 
                        ?>
                    </div>
                </div>
                <div class="footer-copyright fade fade-up-50">
                    <p class="footer-copyright__text">
                        Copyright ©jobterrace Co, Ltd.　All rights reserved.
                    </p>
                </div>
            </div>
        </footer>
        <div class="pagetop">
            <a href="#top" class="pagetop__link">
            </a>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>
