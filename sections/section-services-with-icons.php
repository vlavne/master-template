<?php
$btn = get_sub_field( 'btn' );
?>
<section class="servicesWI marg" id="<?php echo get_sub_field('unique_id');?>">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
            <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
        <?php endif; ?>
        <div class="servicesWIBlock" data-aos="fade-up">
            <?php foreach (get_sub_field('services') as $s): ?>
                <div class="servicesWIBlockItemWrap">
                    <a href="<?php echo $s['link']['url']; ?>"
                       <?php if ($s['link']['target']): ?>target="<?php echo $s['link']['target']; ?>"<?php endif; ?>
                       class="servicesWIBlockItem">
                        
                        <div class="servicesWIBlockItemImg">
                        <?php echo wp_get_attachment_image($s['img']['ID']); ?>
                        </div>
                        
                        <div class="servicesWIBlockItemContent colorBlack"> 
                            <span class="servicesWIBlockItemContentTitle"><?php echo $s['title']; ?></span>
                            <?php if ($s['info']): ?>
                            <span class="servicesWIBlockItemContentInfo"><?php echo $s['info']; ?></span>
                            <?php endif; ?>
                        </div>
                    
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <div class="scroll_bar"><div class="scroll_tape"></div></div>
        
    <?php if ($btn): ?>
    <div class="btn" data-aos="fade-up" onclick="location.href='<?php echo $btn['url']; ?>';" ><?php echo $btn['title']; ?></div>
    <?php endif; ?>
    </div>
</section>
<script>
$(document).ready(function () {
            $('#<?php echo get_sub_field('unique_id');?> .servicesWIBlock').slick({
                slidesToShow: 3,
				slideToScroll:1,
                infinite: false,
                nextArrow: '<div class="slider-btn slider-btn-right" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-light-right.svg" alt=""></div>',
                prevArrow: '<div class="slider-btn slider-btn-left" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/img//arrow-light-left.svg" alt=""></div>',
                responsive: [ 
            {
              breakpoint: 800,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 500,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
                  ]

                    });

            });

</script>

<script>
    
    $(function(){
    
 var $slides = $('#<?php echo get_sub_field('unique_id');?> .servicesWIBlock');   
 var $slides_active = $('#<?php echo get_sub_field('unique_id');?> .slick-active').length;
 var $slides_all = $('#<?php echo get_sub_field('unique_id');?> .slick-slide').length;   
 var $scroll_bar = $('#<?php echo get_sub_field('unique_id');?> .scroll_bar');
 var $scroll_tape = $('#<?php echo get_sub_field('unique_id');?> .scroll_tape');  
 
      $scroll_tape.css('width', $scroll_bar.width()/$slides_all)  
        
    function setProgress(index) {
        var $calc = (($slides_active / $slides_all)*index)*$scroll_bar.width();
        $scroll_tape.css('left', $calc);
}

    $slides.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
  setProgress(nextSlide);
});
    
    });
    

</script>

