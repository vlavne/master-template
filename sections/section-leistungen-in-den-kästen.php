<?php
$btn = get_sub_field( 'btn' );
?>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<section class="servicesWI marg leistungenKasten" id="<?php echo get_sub_field('unique_id');?>">
=======
<section class="servicesWI marg leistungenKasten" id="<?php echo get_sub_field('unique_id');?>" style="background-image:url(<?php echo get_sub_field('background_image');?>); background-color:<?php echo get_sub_field('background_color');?>">
>>>>>>> Stashed changes
=======
<section class="servicesWI marg leistungenKasten" id="<?php echo get_sub_field('unique_id');?>" style="background-image:url(<?php echo get_sub_field('background_image');?>); background-color:<?php echo get_sub_field('background_color');?>">
>>>>>>> Stashed changes
    <div class="container">
    <?php if ($title = get_sub_field('title')): ?>
            <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
        <?php endif; ?>
        <div class="txtImgBg_divider"></div>
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>

<<<<<<< Updated upstream
<<<<<<< Updated upstream
        <div class="servicesWIBlock" data-aos="fade-up">
=======
        <div class="servicesWIBlock <?php echo get_sub_field('slider_type');?>" data-aos="fade-up">
>>>>>>> Stashed changes
=======
        <div class="servicesWIBlock <?php echo get_sub_field('slider_type');?>" data-aos="fade-up">
>>>>>>> Stashed changes
            <?php foreach (get_sub_field('services') as $s): ?>
                <div class="servicesWIBlockItemWrap">
                    <a href="<?php echo $s['link']['url']; ?>"
                       <?php if ($s['link']['target']): ?>target="<?php echo $s['link']['target']; ?>"<?php endif; ?>
                       class="servicesWIBlockItem">
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                        
                        <div class="servicesWIBlockItemImg" style="background:url(<?php echo $s['img']; ?>)">
                        
                        </div>
                        
                        <div class="servicesWIBlockItemContent colorBlack"> 
=======
=======
>>>>>>> Stashed changes

                        <div class="servicesWIBlockItemImg" style="background:url(<?php echo $s['img']; ?>)">

                        </div>

                        <div class="servicesWIBlockItemContent colorBlack">
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
                            <span class="servicesWIBlockItemContentTitle"><?php echo $s['title']; ?></span>
                            <?php if ($s['info']): ?>
                            <span class="servicesWIBlockItemContentInfo"><?php echo $s['info']; ?></span>
                            <?php endif; ?>
                            <?php if ($s['price']): ?>
                           <p class="servicesWIBlockItemContentprice"><span><?php echo $s['price']; ?></span> / Sitzung</p>
                            <?php endif; ?>
                        </div>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                    
=======

>>>>>>> Stashed changes
=======

>>>>>>> Stashed changes
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
   
=======

>>>>>>> Stashed changes
=======

>>>>>>> Stashed changes
    <?php if ($btn): ?>
    <div class="btn" data-aos="fade-up" onclick="location.href='<?php echo $btn['url']; ?>';" ><?php echo $btn['title']; ?></div>
    <?php endif; ?>
    </div>
</section>
<script>
$(document).ready(function () {
<<<<<<< Updated upstream
<<<<<<< Updated upstream
            $('#<?php echo get_sub_field('unique_id');?> .servicesWIBlock').slick({
=======
            $('#<?php echo get_sub_field('unique_id');?> .Ja').slick({
>>>>>>> Stashed changes
=======
            $('#<?php echo get_sub_field('unique_id');?> .Ja').slick({
>>>>>>> Stashed changes
                slidesToShow: 3,
				slideToScroll:1,
                infinite: true,
                nextArrow: '<div class="slider-btn slider-btn-right hideOnMob" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-light-right.svg" alt=""></div>',
                prevArrow: '<div class="slider-btn slider-btn-left hideOnMob" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/img//arrow-light-left.svg" alt=""></div>',
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                responsive: [ 
=======
                responsive: [
>>>>>>> Stashed changes
=======
                responsive: [
>>>>>>> Stashed changes
            {
              breakpoint: 800,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
<<<<<<< Updated upstream
<<<<<<< Updated upstream
               
=======

>>>>>>> Stashed changes
=======

>>>>>>> Stashed changes
              }
            },
            {
              breakpoint: 500,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,

              }
            }
                  ]

                    });

            });

</script>

