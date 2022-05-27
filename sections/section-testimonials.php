<section class="testimonials padd" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up" style="background-color: #fff;" >
    <div class="">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle subtitle-2 colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
            <<?php echo get_sub_field('title_tag'); ?> class="title2 title-2" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
        <?php endif; ?>
    </div>
    <div class="testimonialsBlock" data-aos="fade-up">
        <?php foreach (get_sub_field('testimonials') as $t):?>
            <div class="testimonialsBlockItem">
                <?php if($t['img']):?>
                    <div class="testimonialsBlockItemImg"><?php echo wp_get_attachment_image($t['img']['ID'], 'full');?></div>
                <?php endif;?>
                <div class="testimonialsBlockItemName"><?php echo $t['name'];?></div>
                <?php if($t['position'] !== ''):?>
                    <div class="testimonialsBlockItemPosition colorGrey"><?php echo $t['position'];?></div>
                <?php endif;?>
                <div class="testimonialsBlockItemText"><?php echo $t['text'];?></div>
                <div class="quote" style="background: url(<?php echo get_template_directory_uri();?>/img/Icon.png);"></div>
            </div>
        <?php endforeach;?>
    </div>
</section>
<script>
    $(document).ready(function (){
        $('#<?php echo get_sub_field('unique_id');?> .testimonialsBlock').slick({
            infinite: true,
            arrows: true,
            speed: 300,
            centerMode: true,
            variableWidth: true,
            dots: true,
                dotsClass: 'custom_paging',
                        customPaging: function (slider, i) {
                            //FYI just have a look at the object to find available information
                            //press f12 to access the console in most browsers
                            //you could also debug or look in the source
                            console.log(slider);
                            return  (i + 1) + '/' + slider.slideCount;
                        },
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: 20,
                    }
                },
            ]
        });
        if($(window).width() >=1024){
            $('#<?php echo get_sub_field('unique_id');?> .testimonialsBlock').slick('slickGoTo', 1);
        }
    });
</script>