<!--<section class="blackAdvantages marg " id="--><?php //echo get_sub_field('unique_id');?><!--" data-aos="fade-up" style="--><?php //if ($color = get_sub_field('bgColor')){ echo 'background-color: ' . $color . ';';} ?><!--">-->
<?php if ($color = get_sub_field('bgColor')){ $color = get_sub_field('bgColor'); } else {$color = 'rgba(32,33,41,0.98)'; } ?>
<?php if ($bg = get_sub_field('bgImage')){ $bg = get_sub_field('bgImage')['url']; } else { ' ';}?>
<section class="blackAdvantages" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up" style=" <?php if ($color != '' && $bg != '' ){echo 'background: linear-gradient(0deg, '.$color.', '.$color.'), url('. $bg .');';} ?>">
    <div class="containerMax">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle swartzSubtite" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if($title=get_sub_field('title')):?>
            <<?php echo get_sub_field('title_tag');?> class="blackAdvantagesTitle" data-aos="fade-up"><?php echo $title;?></<?php echo get_sub_field('title_tag');?>>
            <div class="blackAdvantagesLine bgMain"></div>
    <?php endif;?>
        <?php if ($subtitle = get_sub_field('text')): ?>
            <div class="blackAdvantagesText colorGrey" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <div class="blackAdvantagesBlock">
            <?php foreach (get_sub_field('advantages') as $a):?>
                <div class="blackAdvantagesBlockItem">
                    <div class="blackAdvantagesBlockItemImg" style="background-color: <?php echo get_field('color_light', 'options')?>;">
                        <img src="<?php echo $a['icon']['url'];?>" alt="<?php echo $a['icon']['alt'];?>"></div>
                    <div class="blackAdvantagesBlockItemContent">
                        <div class="blackAdvantagesBlockItemContentTitle"><?php echo $a['title'];?></div>
                        <div class="blackAdvantagesBlockItemContentText colorGrey"><?php echo $a['text'];?></div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
