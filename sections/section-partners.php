<section class="partners marg" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
    <div class="containerMax">
        <div class="partnersBlock borderLine">
            <?php foreach (get_sub_field('partners') as $p):?>
                <?php if($p['website']):?>
                    <a class="partnersBlockItem" href="<?php echo $p['website'];?>" rel="nofollow" target="_blank"><span><?php echo wp_get_attachment_image($p['logo']['ID'], 'full');?></span></a>
                <?php else:?>
                    <div class="partnersBlockItem"><span><?php echo wp_get_attachment_image($p['logo']['ID'], 'full');?></span></div>
                <?php endif;?>
            <?php endforeach;?>
        </div>
    </div>
</section>