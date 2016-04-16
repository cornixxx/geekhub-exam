<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container-fluid">
        <div class="site-info">
            <a class="logo" href="<?php echo home_url(); ?>"> <img
                    src="<?php bloginfo('template_directory') ?>/images/logo.png"/> </a>
            <span> 2015 © lawyer. </span>
            <ul class="footer-social-links">
                <li><a class="fa fa-facebook" href="<?php echo get_theme_mod('social_links_facebook'); ?>"> </a></li>
                <li><a class="fa fa-google-plus" href="<?php echo get_theme_mod('social_links_google'); ?>"></a></li>
                <li><a class="fa fa-twitter" href="<?php echo get_theme_mod('social_links_twitter'); ?>"></a></li>
                <li><a class="fa fa-linkedin" href="<?php echo get_theme_mod('social_links_linkedin'); ?>"></a></li>
            </ul>
        </div>

        <div class="footer-nav">
            <h3> <?php _e('Navigation', 'cornix'); ?></h3>
            <ul>
                <li><a class="fa fa-caret-right" href="#"><?php _e('Home', 'cornix'); ?></a></li>
                <li><a class="fa fa-caret-right" href="#about"><?php _e('About us', 'cornix'); ?></a></li>
                <li><a class="fa fa-caret-right" href="#services"><?php _e('Services', 'cornix'); ?></a></li>
                <li><a class="fa fa-caret-right" href="#"><?php _e('Testimonial', 'cornix'); ?></a></li>
                <li><a class="fa fa-caret-right" href="#"><?php _e('Blog', 'cornix'); ?></a></li>
                <li><a class="fa fa-caret-right" href="#contact"><?php _e('Contact us', 'cornix'); ?></a></li>
            </ul>
        </div>

        <div class="contact" id="contact">
            <h3> <?php _e('Quick contact us', 'cornix'); ?></h3>
            <?php echo do_shortcode('[contact-form-7 id="31" title="Contact"]'); ?>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body>
</html>
