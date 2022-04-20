<?php
$type = get_sub_field('slider');
?>
<section class="assortment marg <?php echo $type;?>" id="<?php echo get_sub_field('unique_id');?>">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
        <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
        <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?>
        </<?php echo get_sub_field('title_tag'); ?>>
        <?php endif; ?>
        <div class="assortmentBlock" data-aos="fade-up">
            <?php foreach (get_sub_field('assortmentReapeter') as $ass): ?>
            <div class="assortmentBlockItemWrap">

                <span class="assortmentBlockItemContent">
                    <span class="assortmentBlockItemContentTitle"><?php echo $ass['title']; ?></span>
                    <?php if ($s['info']): ?>
                    <span class="assortmentBlockItemContentInfo"><?php echo $ass['info']; ?></span>
                    <?php endif; ?>

                </span>

            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php if($type == 'slider'):?>
    <script>
        $(document).ready(function (){
            $pad = 'calc((100vw - 73rem)/2)';
            if($(window).width() <= 1440){
                $pad = '135px';
            }
            if($(window).width() <= 1024){
                $pad = '35px';
            }
            $('#<?php echo get_sub_field('unique_id');?>.slider .assortmentBlock').slick({
                dots: false,
                infinite: true,
                arrows: true,
                speed: 300,
                slidesToShow: 3,
                centerMode: true,
                centerPadding: $pad,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                ]
            });
            if($(window).width() >=1024){
                $('#<?php echo get_sub_field('unique_id');?>.slider .assortmentBlock').slick('slickGoTo', 1);
            }
        });
    </script>
<?php endif;?>