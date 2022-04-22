<section class="SimpleForm"  id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
            <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
        <?php endif; ?>
                
        <?php if ($subtext = get_sub_field('subtext')): ?>
            <div class="subtext" data-aos="fade-up"><?php echo $subtext; ?></div>
        <?php endif; ?>
        
        </div>

            <div class="container SimpleFormContact">
                <?php $form=get_sub_field('form_shortcode'); echo do_shortcode($form); ?>
            </div>
    
</section>