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
