<section class="ctaAndForm marg" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up"
    style="background-color:<?php echo get_sub_field('background_color');?>; background-image:url(<?php echo get_sub_field('background_image');?>);">
    <div class="container ctaAndFormContainer <?php echo get_sub_field('text_position');?>">
        <div class="ctaAndFormContent">
            <div class="ctaAndFormText">
                <?php echo get_sub_field('title');?>
            </div>
            <p>
                <?php echo get_sub_field('content');?>
            </p>
        </div>
        <div class="ctaAndForm_form">
            <div class="contactForm">
                <p class="form_title" ><?php echo get_sub_field('formTitle');?></p>
                <?php $form=get_sub_field('form_shortcode'); echo do_shortcode($form); ?>
            </div>
        </div>
    </div>
</section>