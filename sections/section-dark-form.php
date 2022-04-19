<section class="darkForm padd <?php if (get_sub_field('blockColor') === 'dark'){ echo 'bgBlack darkColor';} else { echo 'lightColor';} ?> ">
    <div class="container">
        <div class="darkFormContent">
            <?php if($subtitle=get_sub_field('subtitle')):?>
                <div class="darkFormContentSubtitle colorMain"><?php echo $subtitle;?></div>
            <?php endif;?>
            <?php if($title=get_sub_field('title')):?>
                <<?php echo get_sub_field('title_tag');?> class="title2 colorLight"><?php echo $title;?></<?php echo get_sub_field('title_tag');?>>
            <?php endif;?>
            <?php if($text=get_sub_field('text')):?>
                <div class="darkFormContentText colorLight"><?php echo $text;?></div>
            <?php endif;?>
            <?php if($frame=get_sub_field('frame')):?>
                <?php echo do_shortcode($frame);?>
            <?php endif;?>
        </div>
        <div class="darkFormMap">
            <div class="darkFormMapWrap">
                <?php if ($address = get_field('address', 'option')): ?>
                    <div class="darkFormMapWrapSingle">
                        <div class="darkFormMapWrapSingleImg">
                            <img src="/wp-content/themes/master-template/img/contactPoint.svg" alt="">
                        </div>
                        <div class="darkFormMob">
                            <div class="darkContactTitle">Main office</div>
                            <div class="colorLight"><?php echo $address; ?></div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($email = get_field('email', 'option')): ?>
                    <div class="darkFormMapWrapSingle">
                        <div class="darkFormMapWrapSingleImg">
                            <img src="/wp-content/themes/master-template/img/contactLetter.svg" alt="">
                        </div>
                        <div class="darkFormMob">
                            <div class="darkContactTitle">E-mail</div>
                            <a href="mailto:<?php echo $email; ?>" class="">
                                <?php echo $email; ?>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($phone = get_field('phone', 'option')): ?>
                    <div class="darkFormMapWrapSingle">
                        <div class="darkFormMapWrapSingleImg">
                            <img src="/wp-content/themes/master-template/img/contactPhone.svg" alt="">
                        </div>
                        <div class="darkFormMob">
                            <div class="darkContactTitle">Phone</div>
                            <a href="tel:<?php echo $phone; ?>" class="">
                                <?php echo $phone; ?>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php if($frame=get_sub_field('map_frame')):?>
                <?php echo do_shortcode($frame);?>
            <?php endif;?>
        </div>
    </div>
</section>
