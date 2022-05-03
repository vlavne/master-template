<section class="testimonials testimonials_v2 padd" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up" style="background-color: <?php echo get_sub_field('bg');?>;" >
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
            <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
        <?php endif; ?>
        <div class="testimonialsBlock" data-aos="fade-up">
        <?php foreach (get_sub_field('testimonials') as $t):?>
            <div class="testimonialsBlockItem">

                <div class="testimonialsBlockItemText"><?php echo $t['text'];?></div>
               
                <div class="testimonial_client">
       <div class="testimonial_avatar">
       <?php if($t['img']):?>
                    <div class="testimonialsBlockItemImg"><?php echo wp_get_attachment_image($t['img']['ID'], 'full');?></div>
                <?php endif;?>
       </div>
       <div class="client_names">
       <div class="testimonialsBlockItemName"><?php echo $t['name'];?></div>
                <div class="testimonialsBlockItemText2"><?php echo $t['text2'];?></div>
       </div>
   </div>
                
            </div>
        <?php endforeach;?>
    </div>
    </div>

</section>
<script>
    $(document).ready(function (){
        $('#<?php echo get_sub_field('unique_id');?> .testimonialsBlock').slick({
            dots: false,
            infinite: true,
            arrows: true,
            speed: 300,
            centerMode: false,
            variableWidth: true,
            
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        variableWidth: false,
                        centerPadding: '35px',
                        nextArrow: '<div class="slider-btn slider-btn-right hideOndesk" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-light-right.svg" alt=""></div>',
                prevArrow: '<div class="slider-btn slider-btn-left hideOndesk" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/img//arrow-light-left.svg" alt=""></div>',
                    }
                },
            ]
        });
        if($(window).width() >=1024){
            $('#<?php echo get_sub_field('unique_id');?> .testimonialsBlock').slick('slickGoTo', 1);
        }
    });
</script>