<section class="certificates padd" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
    <?php echo wp_get_attachment_image(get_sub_field('bg')['ID'],'full', false, array('class' => 'certificatesBg'));?>
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
            <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
        <?php endif; ?>
        <div class="certificatesBlock" data-aos="fade-up">
            <?php foreach (get_sub_field('certificates') as $c):?>
                <a href="<?php echo $c['url'];?>" data-fancybox="<?php echo get_sub_field('unique_id');?>"><?php echo wp_get_attachment_image($c['ID'], 'full');?></a>
            <?php endforeach;?>
        </div>
    </div>
</section>
<script>
    $(document).ready(function (){
        if($(window).width() <= 768){
            $('#<?php echo get_sub_field('unique_id');?> .certificatesBlock').slick({
                dots: false,
                infinite: false,
                arrows: true,
                speed: 300,
                slidesToShow: 1,
                centerMode: true,
                centerPadding: '35px',
            });
            $('#<?php echo get_sub_field('unique_id');?> .certificatesBlock').slick('slickGoTo', 1);
        }
    });
</script>