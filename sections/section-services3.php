<?php
$type = get_sub_field('slider');
?>
<section class="services3 marg <?php echo $type;?>" id="<?php echo get_sub_field('unique_id');?>">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain <?php if($type !== "slider"){ echo 'title-center'; }?>" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
            <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
        <?php endif; ?>
        <div class="services3Block" data-aos="fade-up">
            <?php foreach (get_sub_field('services') as $s): ?>
                <div class="services3BlockItemWrap">
                
                       
                 
                        
                        
                        <img class="price-img" src="<?php echo $s['img']['url'];?>" />
                        <div class="price-content">
                        <?php if ($s['title']): ?>
                            <span class="price-title"><?php echo $s['title'];?></span>
                        <?php endif; ?>
                        <?php if ($s['info']): ?>
                            <p class="price-info"><?php echo $s['info'];?></p>
                        <?php endif; ?>
                        <span class="price-text">from <span class="price-num"><?php echo $s['price'];?>$</span> / an hour</span>
                        </div>
                    
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
            $('#<?php echo get_sub_field('unique_id');?>.slider .services3Block').slick({
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
                $('#<?php echo get_sub_field('unique_id');?>.slider .services3Block').slick('slickGoTo', 1);
            }
        });
    </script>
<?php endif;?>
