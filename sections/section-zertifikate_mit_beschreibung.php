<section class="certificateSlider partnerSl padd partner-slider" id="<?php echo get_sub_field('unique_id');?>"
    data-aos="fade-up" style="background-color: <?php echo get_sub_field('bg');?>;">
    <div class="container flex-container">
    <div class="certSlider" data-aos="fade-up">
        <?php foreach (get_sub_field('slides') as $t):?>
        <div class="partnerSlBlockItem">
            <?php if($t['img']):?>
            <div class="certSlideIttem">
                <?php echo wp_get_attachment_image($t['img']['ID'], 'full');?></div>
            <?php endif;?>
            <?php if($t['zertifikate_title']):?>
            <div class="certSlideIttem certSlideIttemTitle"><?php echo $t['zertifikate_title'];?></div>
            <?php endif;?>
            <?php if($t['zertifikate_text']):?>
            <div class="certSlideIttem certSlideIttemDesc"><?php echo $t['zertifikate_text'];?></div>
            <?php endif;?>
        </div>
        <?php endforeach;?>
    </div>
    <div class="container_left">

        <?php if ($title = get_sub_field('title')): ?>
        <div class="title2" ><?php echo $title; ?></div>
        <div class="blackAdvantagesLine">
           
        </div>
        <div class="cert_content">
            <?php echo get_sub_field('content'); ?>
        </div>
        <?php endif; ?>
    </div>
    </div>
</section>
<script>

    $(document).ready(function (){
        $('#<?php echo get_sub_field('unique_id');?> .certSlider').slick({
            dots: false,
            slidesToShow: 1,
            infinite: true,
            arrows: true,
            speed: 300,
            centerMode: true,
            centerPadding: '60px',
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
     
   
    });
</script>

