<section class="cta padd" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
    <?php echo wp_get_attachment_image(get_sub_field('bg')['ID'],'full');?>
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle subtitle-cta" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if($title=get_sub_field('title')):?>
            <<?php echo get_sub_field('title_tag');?> class="title3" data-aos="fade-up"><?php echo $title;?></<?php echo get_sub_field('title_tag');?>>
        <?php endif;?>
        <?php if($text=get_sub_field('text')):?>
            <div class="ctaText" data-aos="fade-up"><?php echo $text;?></div>
        <?php endif;?>
        <?php if ($btn = get_sub_field('btn')): 
            if (get_sub_field('typebtn') == "Square"): ?>
            <a href="<?php echo $btn['url']; ?>" class="btn" data-aos="fade-up"
               <?php if ($btn['target']): ?>target="<?php echo $btn['target']; ?>"<?php endif; ?>><?php echo $btn['title']; ?></a>
        <?php 
        endif; 
        if (get_sub_field('typebtn') == "Round"): ?>
        <a href="<?php echo $btn['url']; ?>" class="btn-round" data-aos="fade-up"
               <?php if ($btn['target']): ?>target="<?php echo $btn['target']; ?>"<?php endif; ?>> 
                <svg width="20" height="26" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.5833 19.6025L17.2675 13.9342L19.5 16.1667L10 25.6667L0.5 16.1667L2.7325 13.9342L8.41667 19.6025V0.33334H11.5833V19.6025Z" fill="white"/>
</svg>
            </a>
        <?php
        endif;
            endif;
        ?>
    </div>
</section>