<section class="blackAdvantages process_horizontal" id="<?php //echo get_sub_field('unique_id');?>" data-aos="fade-up"
    style="background-color:<?php echo get_sub_field('bgColor');?>; background-image:url(<?php echo get_sub_field('bgImage');?>);">
    <div class="containerMax">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
        <div class="blackAdvantagesSubtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if($title=get_sub_field('title')):?>
        <<?php echo get_sub_field('title_tag');?> class="process_horizontalTitle" data-aos="fade-up"><?php echo $title;?>
        </<?php echo get_sub_field('title_tag');?>>
        <div class="txtImgBg_divider"></div>
        <?php endif;?>
        <?php if ($subtitle = get_sub_field('text')): ?>
        <div class="blackAdvantagesText colorGrey" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <div class="blackAdvantagesBlock">
            <?php foreach (get_sub_field('advantages') as $a):?>
            <div class="blackAdvantagesBlockItem">
                <div class="AdvantageUndertitle">
                <?php echo $a['under_title'];?>
                </div>
            
                <div class="blackAdvantagesBlockItemContent">
                    <div class="blackAdvantagesBlockItemContentTitle"><?php echo $a['title'];?></div>
                    <div class="blackAdvantagesBlockItemContentText colorGrey"><?php echo $a['text'];?></div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>