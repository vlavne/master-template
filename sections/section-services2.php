<?php
$type = get_sub_field('slider');
?>
<section class="services2 marg <?php echo $type;?>" id="<?php echo get_sub_field('unique_id');?>">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain <?php if($type !== "slider"){ echo 'title-center'; }?>" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
            <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
        <?php endif; ?>
        <div class="services2Block" data-aos="fade-up">
            <?php foreach (get_sub_field('services') as $s): ?>
                <div class="services2BlockItemWrap">
                    <a href="<?php echo $s['link']['url']; ?>"
                       <?php if ($s['link']['target']): ?>target="<?php echo $s['link']['target']; ?>"<?php endif; ?>
                       class="services2BlockItem">
                        <?php echo wp_get_attachment_image($s['img']['ID'], 'service'); ?>
                        <span class="services2BlockItemContent">
                        <span class="services2BlockItemContentTitle"><?php echo $s['title']; ?></span>
                        <?php if ($s['info']): ?>
                            <span class="services2BlockItemContentInfo"><?php echo $s['info']; ?></span>
                        <?php endif; ?>
                        <span class="services2BlockItemContentLink link"><?php echo $s['link']['title']; ?><svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.6558 3.75832L10.6629 8.82828H12.6569V0.342995H4.17165L4.17165 2.33704L9.24161 2.34411L0.63612 10.9496L2.05033 12.3638L10.6558 3.75832Z" fill="white"/></svg></span>
                    </span>
                    </a>
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
                $pad = '0';
            }
            if($(window).width() <= 1024){
                $pad = '0';
            }
            $('#<?php echo get_sub_field('unique_id');?>.slider .services2Block').slick({
                infinite: true,
                arrows: true,
                speed: 300,
                slidesToShow: 3,
                
                centerPadding: $pad,
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
                $('#<?php echo get_sub_field('unique_id');?>.slider .services2Block').slick('slickGoTo', 1);
            }
        });
    </script>
<?php endif;?>
