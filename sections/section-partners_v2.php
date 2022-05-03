<section class="partners partners_v2 padd" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up" style="background-color:<?php echo get_sub_field('bgColor');?>; background-image:url(<?php echo get_sub_field('bgImage');?>);">
    <div class="containerMax">
        <div class="title">
            <h2><?php echo get_sub_field('title');?></h2>
            <div class="blackAdvantagesLine">
           
           </div>
        </div>
        <div class="partnersBlock">
            <?php foreach (get_sub_field('partners') as $p):?>
                <div class="partner_v2_img">
                <?php echo wp_get_attachment_image($p['logo']['ID'], 'full');?>
                </div>
                
            <?php endforeach;?>
        </div>
    </div>
</section>