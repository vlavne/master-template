<section class="ctaHorisontal marg" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up" style="background-image:url(<?php echo get_sub_field('img');?>);">  
    <div class="container">
        <div class="ctaHorisontalBlock <?php echo get_sub_field('text_position');?>">           
                <?php if($text=get_sub_field('text')):?>
                    <div class="ctaHorisontalBlockContentText colorGrey"><?php echo $text;?></div>
                <?php endif;?>       
                <?php if ($btn = get_sub_field('btn')): ?>
                    <a href="<?php echo $btn['url']; ?>" class="btn"
                       <?php if ($btn['target']): ?>target="<?php echo $btn['target']; ?>"<?php endif; ?>><?php echo $btn['title']; ?></a>
            <?php endif; ?>
        </div>  
    </div>
</section>