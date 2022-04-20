<section class="contactInfo marg" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
    <div class="container">
        <div class="contactInfoBlock <?php echo get_sub_field('text_position');?>">
            <div class="contactInfoBlockContent">
                <?php if($subtitle=get_sub_field('subtitle')):?>
                    <div class="subtitle colorMain"><?php echo $subtitle;?></div>
                <?php endif;?>
                <?php if($title=get_sub_field('title')):?>
                <<?php echo get_sub_field('title_tag');?> class="title2"><?php echo $title;?></<?php echo get_sub_field('title_tag');?>>
            <?php endif;?>
            <div class="contactInfoBlockContentLine bgMain"></div>
            <?php if ($time = get_field('work-time', 'option')): ?>
                <div class="contactInfoBlockContentSingle">
                    <img src="/wp-content/themes/master-template/img/contactBlockTime.svg" alt="">
                    <?php echo $time; ?>
                </div>
            <?php endif; ?>
            <?php if($name=get_sub_field('name')):?>
                <div class="contactInfoBlockContentText colorMain"><?php echo $name;?></div>
            <?php endif;?>
            <?php if ($phone = get_field('phone', 'option')): ?>
                <div class="contactInfoBlockContentSingle">
                    <img src="/wp-content/themes/master-template/img/contactBlockPhone.svg" alt="">
                    <a href="tel:<?php echo $phone; ?>" class="colorBlack">
                        <?php echo $phone; ?>
                    </a>
                </div>
            <?php endif; ?>
            <?php if ($email = get_field('email', 'option')): ?>
                <div class="contactInfoBlockContentSingle">
                    <img src="/wp-content/themes/master-template/img/contactBlockLetter.svg" alt="">
                    <a href="mailto:<?php echo $email; ?>" class="colorBlack">
                        <?php echo $email; ?>
                    </a>
                </div>
            <?php endif; ?>

        </div>
        <?php if($img=get_sub_field('img')):?>
            <div class="contactInfoBlockImg"><?php echo wp_get_attachment_image($img['ID'], 'full');?></div>
        <?php endif;?>
    </div>
    </div>
</section>
