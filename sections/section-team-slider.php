<section class="TeamSlider marg" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
            <<?php echo get_sub_field('title_tag'); ?> class="TeamSliderTitle" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
        <?php endif; ?>
       <div class="TeamSliderBlock">
            <?php $i=0; foreach (get_sub_field('team') as $t):?>
                <div class="TeamSliderBlockItem" data-aos="fade-up" data-aos-delay="<?php echo $i;?>">
                    
                    <div class="TeamSliderBlockItemImg">
                        <img src="<?php echo $t['img']['url'];?>" alt="<?php echo $t['img']['alt'];?>">
                    </div>
                    <div class="TeamSliderBlockItemInfo">
                        <div class="TeamSliderBlockItemInfoName"><?php echo $t['name'];?></div>
                        <div class="TeamSliderBlockItemInfoPosition colorGrey">
                            <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8329 3.16992V2.32682C13.8329 1.40766 13.0854 0.660156 12.1663 0.660156H8.83293C7.91376 0.660156 7.16626 1.40766 7.16626 2.32682V3.16992H2.79167C1.525 3.16992 0.5 4.19492 0.5 5.46159V7.36992L10.3 10.6366C10.3667 10.6616 10.4333 10.6699 10.5 10.6699C10.5667 10.6699 10.6333 10.6616 10.7 10.6366L20.5 7.36992V5.46159C20.5 4.19492 19.475 3.16992 18.2083 3.16992H13.8329ZM8.83293 3.16992H12.1663V2.32682H8.83293V3.16992Z" fill="#E4653D"/>
                            <path d="M11.0917 11.8111C10.9417 11.8694 10.725 11.9111 10.5 11.9111C10.275 11.9111 10.0583 11.8694 9.85833 11.7944L0.5 8.67773V15.0361C0.5 16.3027 1.525 17.3277 2.79167 17.3277H18.2083C19.475 17.3277 20.5 16.3027 20.5 15.0361V8.67773L11.0917 11.8111Z" fill="#E4653D"/>
                            </svg>
                            &shy; <?php echo $t['position'];?></div>
                    </div>
                </div>
            <?php $i+=100; endforeach;?>
        </div>
    </div>
</section>

<script>
    $(document).ready(function (){
        $('#<?php echo get_sub_field('unique_id');?> .TeamSliderBlock').slick({
            dots: false,
            infinite: false,
            arrows: true,
            nextArrow: '<div class="slider-btn slider-btn-right" aria-hidden="true"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_10_160)"><path d="M15.1419 0.5L4 12.5L15.1419 24.5L17 22.5002L7.71354 12.5L17 2.49976L15.1419 0.5Z" fill="#D5474E"/></g><defs><clipPath id="clip0_10_160"><rect width="24" height="24" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg></div>',
            prevArrow: '<div class="slider-btn slider-btn-left" aria-hidden="true"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_10_201)"><path d="M8.85808 0.5L20 12.5L8.85808 24.5L7 22.5002L16.2865 12.5L7 2.49976L8.85808 0.5Z" fill="#D5474E"/></g><defs><clipPath id="clip0_10_201"><rect width="24" height="24" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg></div>',
            speed: 300,
            centerMode: false,
            variableWidth: true,
            slidesToShow: 3,
            slideToScroll: 1,
            responsive: [
                
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slideToScroll: 1,
                        variableWidth: false,
                    }
                },
                
                {
                    breakpoint: 960,
                    settings: {
                        slideToScroll: 1,
                        slidesToShow: 3,
                        variableWidth: false,
                    }
                },
                
                {
                    breakpoint: 750,
                    settings: {
                        slideToScroll: 1,
                        slidesToShow: 2,
                        variableWidth: false,
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slideToScroll: 1,
                        slidesToShow: 1,
                        variableWidth: false,
                        centerMode: true,
                        infinite: true,
                        centerPadding: '35px',
                    }
                },
            ]
        });
       
   
    });
</script>

