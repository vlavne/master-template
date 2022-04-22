<?php
$btn = get_sub_field('btn');
?>
<section class="bigGallery marg" id="<?php echo get_sub_field('unique_id'); ?>">
    <div class="mobContainer">
    <div class="bigGalleryBlock" data-aos="fade-up">
        <?
        if (get_sub_field('gallery-full-size-list')):  $gallery = get_sub_field('gallery-full-size-list');  endif;
        if ($gallery) { ?>
            <div class="bigGalleryBlockItem">
                <?php
                foreach ($gallery as $image):
                    $permalink = wp_get_attachment_image_url($image['ID'], 'full');
                    $title = get_the_title($image['ID']);
                    $content = get_post_field('post_content', $image->ID);
                    ?>
                <div class="bigGalleryBlockItemElem">
                    <a href="<?php echo $permalink; ?>" class="" data-caption="<?php echo $image['title']; ?>" data-fancybox="<?php echo get_sub_field('unique_id');?>" >
                        <?php echo wp_get_attachment_image($image['ID'], 'full'); ?>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <?php
        }
        ?>
    </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $('#<?php echo get_sub_field('unique_id');?> .bigGalleryBlockItem').slick({
            slidesToShow: 1,
            slideToScroll: 1,
            centerMode: true,
            infinite: true,
            variableWidth: true,
            dots: true,
            centerPadding: '60px',
            arrows: false,
            //nextArrow: '<div class="slider-btn slider-btn-right" aria-hidden="true"><img src="<?php //echo get_template_directory_uri(); ?>///img/arrow-light-right.svg" alt=""></div>',
            //prevArrow: '<div class="slider-btn slider-btn-left" aria-hidden="true"><img src="<?php //echo get_template_directory_uri(); ?>///img/arrow-light-left.svg" alt=""></div>',
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]

        });

    });

</script>

