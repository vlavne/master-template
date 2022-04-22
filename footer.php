<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Master_Template
 */
?>
<?php $footer_type = get_field('footer_type', 'options') ?>
<?php if($footer_type == '1') {?>
<footer id="colophon" class="siteFooter bgBlack">
    <div class="container">
        <div class="siteFooterTop">
            <div class="siteFooterTopInfo">
                <?php if ($footer_logo = get_field('footer_logo', 'options')): ?>
                    <a href="<?php echo get_site_url(); ?>"
                       class="siteFooterTopInfoLogo"><?php echo wp_get_attachment_image($footer_logo['ID'], 'full'); ?></a>
                <?php endif; ?>
                <?php if ($footer_text = get_field('footer_text', 'options')): ?>
                    <div class="siteFooterTopInfoText"><?php echo $footer_text; ?></div>
                <?php endif; ?>
            </div>
            <?php if (has_nav_menu('menu-footer')): ?>
                <div class="siteFooterTopMenu">
                    <div class="siteFooterTopMenuTitle">Navigation</div>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'menu-footer',
                            'menu_id' => 'footerMenu',
                            'container' => ''
                        )
                    ); ?>
                </div>
            <?php endif; ?>
            <div class="siteFooterTopContacts">
                <div class="siteFooterTopContactsTitle">Kontakt Information</div>
                <?php if ($address = get_field('address', 'options')): ?>
                    <div class="siteFooterTopContactsItem siteFooterTopContactsItemAddress"><?php echo $address; ?></div><br>
                <?php endif; ?>
                <?php if ($phone = get_field('phone', 'options')): $tel_link = preg_replace('![^0-9+]!', '', $phone); ?>
                    <a href="tel:<?php echo $tel_link; ?>"
                       class="siteFooterTopContactsItem siteFooterTopContactsItemPhone"><?php echo $phone; ?></a>
                <?php endif; ?>
                <?php if ($fax = get_field('fax', 'options')): $fax_link = preg_replace('![^0-9+]!', '', $fax); ?>
                    <a href="tel:<?php echo $fax_link; ?>"
                       class="siteFooterTopContactsItem siteFooterTopContactsItemFax"><?php echo $fax; ?></a>
                <?php endif; ?>
                <?php if ($email = get_field('email', 'options')): ?>
                    <br><a href="mailto:<?php echo $email; ?>"
                       class="siteNavigationContactsItem siteFooterTopContactsItemEmail"><?php echo $email; ?></a>
                <?php endif; ?>
            </div>

        </div>
        <div class="siteFooterBottom">
            <?php if ($copyright = get_field('copyright', 'options')): ?>
                <div class="siteFooterBottomCopyright"><?php echo $copyright; ?></div>
            <?php endif; ?>
            <?php if (has_nav_menu('menu-info')): ?>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'menu-info',
                        'menu_id' => 'infoMenu',
                        'container' => ''
                    )
                ); ?>
            <?php endif; ?>
        </div>
    </div>
</footer><!-- #colophon -->

<?php } ?>
<?php if($footer_type == '2') { ?>
<footer id="colophon" class="siteFooterTwo <?php if (get_field('scheme', 'options') === '1' ) { echo 'darkScheme colorLight bgBlack';} ?>">
    <div class="container">
        <div class="siteFooterTwoTop">
            <div class="siteFooterTwoTopMenus">
            <?php if (has_nav_menu('menu-footer')): ?>
                <div class="siteFooterTwoTopMenu">
                    <div class="siteFooterTwoTopMenuTitle">Navigation</div>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'menu-footer',
                            'menu_id' => 'footerMenu',
                            'container' => ''
                        )
                    ); ?>
                </div>
            <?php endif; ?>
            <?php if (has_nav_menu('menu-social')): ?>
                <div class="siteFooterTwoTopMenu">
                    <div class="siteFooterTwoTopMenuTitle">Social</div>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'menu-social',
                            'menu_id' => 'socialMenu',
                            'container' => ''
                        )
                    ); ?>
                </div>
            <?php endif; ?>

            </div>
            <div class="siteFooterTwoTopInfo">
                <?php if ($footer_text = get_field('footer_text', 'options')): ?>
                    <div class="siteFooterTwoTopInfoText"><?php echo $footer_text; ?></div>
                <?php endif; ?>
                <div class="siteFooterTwoTopInfoNews">
<!--                    CODE TO CF7-->
<!--                            <div class="siteFooterTwoTopInfoNewsTitle">Newsletter</div>-->
<!--                            <div class="siteFooterTwoTopInfoNewsForm">[email your-email placeholder "enter you email address"][submit "subscribe"] </div>-->
<!--                    CODE TO CF7-->
                    <?php  if(do_shortcode('[contact-form-7 id="454" title="Footer form"]')){ echo do_shortcode('[contact-form-7 id="454" title="Footer form"]'); } else{
                        ?>
                        <div role="form" class="wpcf7" id="wpcf7-f454-o3" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                            <form action="/#wpcf7-f454-o3" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="454">
                                    <input type="hidden" name="_wpcf7_version" value="5.5.6">
                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f454-o3">
                                    <input type="hidden" name="_wpcf7_container_post" value="0">
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                </div>
                                <div class="siteFooterTwoTopInfoNewsTitle">Newsletter</div>
                                <div class="siteFooterTwoTopInfoNewsForm"><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="enter you email address"></span><input type="submit" value="subscribe" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span> </div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div></form></div>
                    <?php
                    }?>
                </div>
            </div>
        </div>
        <div class="siteFooterTwoBottom">
            <?php if ($copyright = get_field('copyright', 'options')): ?>
                <div class="siteFooterTwoBottomCopyright"><?php echo $copyright; ?></div>
            <?php endif; ?>
        </div>
        <div class="siteFooterTwoPolicy">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'menu-policy',
                    'menu_id' => 'footerPolicy',
                    'container' => ''
                )
            ); ?>
        </div>
    </div>
</footer><!-- #colophon -->
<?php } ?>
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
    $(document).ready(function (){
        AOS.init({
            disable: function() {
                var maxWidth = 768;
                return window.innerWidth < maxWidth;
            }
        });
    });
</script>
</body>
</html>
