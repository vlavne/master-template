<section class="cta padd" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
    <?php echo wp_get_attachment_image(get_sub_field('bg')['ID'],'full');?>
    <div class="container">
        <?php if($title=get_sub_field('title')):?>
            <<?php echo get_sub_field('title_tag');?> class="title3" data-aos="fade-up"><?php echo $title;?></<?php echo get_sub_field('title_tag');?>>
        <?php endif;?>
        <?php if($text=get_sub_field('text')):?>
            <div class="ctaText" data-aos="fade-up"><?php echo $text;?></div>
        <?php endif;?>
        <?php if ($btn = get_sub_field('btn')): ?>
            <a href="<?php echo $btn['url']; ?>" class="btn btnWhite" data-aos="fade-up"
               <?php if ($btn['target']): ?>target="<?php echo $btn['target']; ?>"<?php endif; ?>><?php echo $btn['title']; ?></a>
        <?php endif; ?>
    </div>
</section>