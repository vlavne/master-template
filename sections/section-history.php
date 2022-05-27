<?php
$type = 'slider';
?>
<section class="history marg <?php echo $type;?>" id="<?php echo get_sub_field('unique_id');?>">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
            <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
        <?php endif; ?>
        <div class="historyBlock" data-aos="fade-up">
            <?php foreach (get_sub_field('history_items') as $s): ?>
                <div class="historyBlockItemWrap">
                    <span class=""><?php echo $s['title']; ?></span>
                    <div class="historyCircle"></div>
                    <p><?php echo $s['info']; ?></p>
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
            $('#<?php echo get_sub_field('unique_id');?>.slider .historyBlock').slick({
                
                infinite: true,
                arrows: true,
                speed: 300,
                slidesToShow: 3,
                centerMode: true,
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
                        },
                        
                        
                    },
                ]
            });
            if($(window).width() >=1024){
                $('#<?php echo get_sub_field('unique_id');?>.slider .historyBlock').slick('slickGoTo', 1);
            }
        });
    </script>
<?php endif;?>
