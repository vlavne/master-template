<section class="partnerSl padd partner-slider" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up" style="background-color: <?php echo get_sub_field('bg');?>;" >
    <div class="container">

        <?php if ($title = get_sub_field('title')): ?>
            <div class="title2" data-aos="fade-up"><?php echo $title; ?></div>
        <?php endif; ?>
    </div>
    <div class="partnerSlBlock" data-aos="fade-up">
        <?php foreach (get_sub_field('slides') as $t):?>
            <div class="partnerSlBlockItem">
                <?php if($t['img']):?>
                    <div class="partnerSlBlockItemImg"><?php echo wp_get_attachment_image($t['img']['ID'], 'full');?></div>
                <?php endif;?>                
            </div>
        <?php endforeach;?>
    </div>
</section>
<script>
    $(document).ready(function (){
        $('#<?php echo get_sub_field('unique_id');?> .partnerSlBlock').slick({
            dots: false,
            infinite: true,
            arrows: true,
            speed: 300,
            centerMode: true,
            variableWidth: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        variableWidth: false,
                        centerPadding: '35px',
                    }
                },
            ]
        });
        if($(window).width() >=1024){
            $('#<?php echo get_sub_field('unique_id');?> .partnerSlBlock').slick('slickGoTo', 1);
        }
      
        $('.slick-next').toggleClass('colorMain');
       
   
    });
</script>

