<?php $person = get_sub_field('person');?>
<section class="contactPerson marg" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
    <div class="container">
        <div class="contactPersonBlock">
            <div class="contactPersonBlockPerson">
                <div class="contactPersonBlockPersonImg">
                    <?php echo wp_get_attachment_image($person['img']['ID'],'full');?>
                    <div class="contactPersonBlockPersonName"><?php echo $person['name'];?></div>
                </div>
                <div class="contactPersonBlockPersonContacts">
                    <?php if($person['phone'] !== ''): $tel_link = preg_replace('![^0-9+]!', '', $person['phone']);?>
                        <div class="contactPersonBlockPersonContactsItem">
                            <div class="contactPersonBlockPersonContactsItemTitle">Telefonnummer</div>
                            <a href="tel:<?php echo $tel_link;?>" class="colorBlack"><?php echo $person['phone'];?></a>
                        </div>
                    <?php endif;?>
                    <?php if($person['email'] !== ''):?>
                        <div class="contactPersonBlockPersonContactsItem">
                            <div class="contactPersonBlockPersonContactsItemTitle">E-Mail</div>
                            <a href="mailto:<?php echo $person['email'];?>" class="colorBlack"><?php echo $person['email'];?></a>
                        </div>
                    <?php endif;?>
                </div>
            </div>
            <?php if($form=get_sub_field('form')):?>
                <div class="contactPersonBlockForm">
                    <?php if ($subtitle = get_sub_field('subtitle')): ?>
                        <div class="subtitle colorMain"><?php echo $subtitle; ?></div>
                    <?php endif; ?>
                    <?php if ($title = get_sub_field('title')): ?>
                        <<?php echo get_sub_field('title_tag'); ?> class="title2"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
                    <?php endif; ?>
                    <div class="contactPersonBlockFormWrap"><?php echo do_shortcode($form);?></div>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>