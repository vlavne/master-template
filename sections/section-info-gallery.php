<section class="infoGallery marg" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
    <div class="container">
        <div class="infoGalleryBlock">
            <div class="infoGalleryBlockContent">
                <?php if($title=get_sub_field('title')):?>
                    <<?php echo get_sub_field('title_tag');?> class="title2"><?php echo $title;?></<?php echo get_sub_field('title_tag');?>>
                <?php endif;?>
                <?php if($price=get_sub_field('prise')):?>
                    <div class="infoGalleryBlockContentPrice colorGrey"><?php echo $price;?></div>
                <?php endif;?>
                <?php if (get_field('underline', 'option') === 'true'): ?>
                    <div class="infoGalleryBlockContentLine bgMain"></div>
                <?php endif; ?>
                <?php if($text=get_sub_field('text')):?>
                    <div class="infoGalleryBlockContentText colorGrey"><?php echo $text;?></div>
                <?php endif;?>
                <?php if ($btn = get_sub_field('btn')): ?>
                    <a href="<?php echo $btn['url']; ?>" class="btn"
                       <?php if ($btn['target']): ?>target="<?php echo $btn['target']; ?>"<?php endif; ?>><?php echo $btn['title']; ?></a>
                <?php endif; ?>
            </div>
            <div class="infoGalleryBlockGallery">
                <?
                if (get_sub_field('img')):  $gallery = get_sub_field('img');  endif;
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
    </div>
</section>
<script>
    $(document).ready(function () {
        $('#<?php echo get_sub_field('unique_id');?> .bigGalleryBlockItem').slick({
            slidesToShow: 1,
            slideToScroll: 1,
            centerMode: false,
            arrows: false,
            infinite: true,
            dots: true,
            //nextArrow: '<div class="slider-btn slider-btn-right" aria-hidden="true"><img src="<?php //echo get_template_directory_uri(); ?>///img/arrow-light-right.svg" alt=""></div>',
            //prevArrow: '<div class="slider-btn slider-btn-left" aria-hidden="true"><img src="<?php //echo get_template_directory_uri(); ?>///img/arrow-light-left.svg" alt=""></div>',
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
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
    })

</script>
