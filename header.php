<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Master_Template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php require_once('inc/styles/fonts.php');?>
    <?php wp_head(); ?>
    <?php require_once('inc/styles/style.php');?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site" <?php if($bg=get_field('bg')):?>style="background-color: <?php echo $bg;?>;" <?php endif;?>>
    <header id="masthead" class="siteHeader">
        <?php if (get_field('header_top', 'options') == 'yes'): ?>
            <div class="siteHeaderTop bgBlack colorMain" style="background-color: #ffffff;">
                <div class="containerMax">
                    <div class="siteHeaderTopContacts">
                        <?php if ($address = get_field('address', 'options')): ?>
                            <div class="siteHeaderTopContactsItem" style="color: <?php echo get_field('a-color', 'options');?>;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 20.9998C10.7369 19.9224 9.56619 18.7413 8.5 17.4688C6.9 15.5578 5 12.7118 5 9.99981C4.99858 7.16735 6.70425 4.6132 9.32107 3.5292C11.9379 2.44521 14.9501 3.04505 16.952 5.04881C18.2685 6.35941 19.0059 8.14219 19 9.99981C19 12.7118 17.1 15.5578 15.5 17.4688C14.4338 18.7413 13.2631 19.9224 12 20.9998ZM12 6.99981C10.9282 6.99981 9.93782 7.5716 9.40193 8.49981C8.86603 9.42801 8.86603 10.5716 9.40193 11.4998C9.93782 12.428 10.9282 12.9998 12 12.9998C13.6569 12.9998 15 11.6567 15 9.99981C15 8.34295 13.6569 6.99981 12 6.99981Z"
                                          fill="<?php echo get_field('svg-color', 'options');?>"/>
                                </svg>
                                <?php echo $address; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($phone = get_field('phone', 'options')): $tel_link = preg_replace('![^0-9+]!', '', $phone); ?>
                            <a href="tel:<?php echo $tel_link; ?>" class="siteHeaderTopContactsItem" style="color: #B38876;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.9975 20C10.4659 20.0121 3.99088 13.4595 4.00001 5.00251C4.00001 4.45023 4.44773 4 5.00001 4H7.63937C8.13494 4 8.55593 4.36413 8.6287 4.85433C8.80311 6.0292 9.14517 7.17297 9.64448 8.2507L9.74725 8.4725C9.89013 8.78091 9.79328 9.14734 9.51668 9.34487C8.6993 9.92859 8.38692 11.1036 9.0237 12.0204C9.82278 13.1708 10.8301 14.1779 11.9803 14.9766C12.897 15.6132 14.0718 15.3009 14.6555 14.4836C14.8532 14.2069 15.2198 14.11 15.5284 14.2529L15.7492 14.3552C16.827 14.8545 17.9708 15.1966 19.1458 15.371C19.636 15.4437 20 15.8647 20 16.3603V19C20 19.5523 19.5512 20 18.9989 20L18.9975 20Z"
                                          fill="<?php echo get_field('svg-color', 'options');?>"/>
                                </svg>
                                <?php echo $phone; ?>
                            </a>
                        <?php endif; ?>
                        <?php if ($email = get_field('email', 'options')): ?>
                            <a href="mailto:<?php echo $email; ?>" class="siteHeaderTopContactsItem" style="color: <?php echo get_field('a-color', 'options');?>;">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M1.8335 16.4998C1.8335 17.5124 2.65431 18.3332 3.66683 18.3332H18.3335C19.346 18.3332 20.1668 17.5124 20.1668 16.4998V5.49984C20.1668 4.48732 19.346 3.6665 18.3335 3.6665H3.66683C2.68465 3.66558 1.87622 4.43884 1.8335 5.42009V16.4998ZM3.64391 16.9582L4.10225 7.7915L4.5835 6.4165H17.4168L17.8522 7.7915L18.3106 16.9582H3.64391Z"
                                          fill="<?php echo get_field('svg-color', 'options');?>"/>
                                    <path d="M4.5835 6.4165L11.0689 10.3582L17.4168 6.4165H4.5835Z" fill="<?php echo get_field('svg-color', 'options');?>"/>
                                    <path d="M4.10225 7.7915L3.64391 16.9582H18.3106L17.8522 7.7915L10.9772 12.5582L4.10225 7.7915Z"
                                          fill="<?php echo get_field('svg-color', 'options');?>"/>
                                </svg>
                                <?php echo $email; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php echo get_template_part('template-parts/header', get_field('header_type', 'options'));?>
    </header><!-- #masthead -->
