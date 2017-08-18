<footer id="footer" class="bc-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8 site-info">
                <div class="branding">
                    <div class="logo">
                        <a href="<?php bloginfo('siteurl'); ?>/"
                           title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                                 alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" class="img-responsive">
                        </a>
                    </div>
                </div>
                <p>
                    <?php echo esc_attr(get_option('footer_address_1')); ?><br>
                    <?php echo esc_attr(get_option('footer_address_2')); ?><br>
                    <a href="tel:<?php echo esc_attr(get_option('footer_contact')); ?>"><?php echo esc_attr(get_option('footer_contact')); ?></a><br>
                    <a href="mailto:<?php echo esc_attr(get_option('footer_email')); ?>"><?php echo esc_attr(get_option('footer_email')); ?></a>
                </p>
                <p>
                    Copyright © <?php echo date("Y"); ?> Woodvale Vintners<br>
                    <small>Website by <a href="http://creatistic.com.au/" target="_blank">Creatistic</a></small>
                </p>
            </div>
            <div class="col-md-4 facebook-wdiget">
                <?php echo get_option('facebook_widget'); ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>