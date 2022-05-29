<section class="ServicesList" id="<?php echo get_sub_field('unique_id');?>"> 
    <div class="container">
    
    <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
            <<?php echo get_sub_field('title_tag'); ?> data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
        <?php endif; ?>
    
        <?php if($post_type = get_sub_field('post_type')){ 
                
            $my_posts = get_posts( array(
	'numberposts' => 0,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => $post_type,
	'suppress_filters' => true,
) );
?>
    <div class="ServicesListItems">            
                
<?php                
foreach( $my_posts as $post ){
	setup_postdata( $post );
?>
           
      <div class="ServicesListItem">
        
        <div class="ServicesListItemImg">
            <?php if($img = get_field('img', $post->id)){ ?>
            <img src="<?php echo $img['url'] ; ?>" alt="<?php echo $img['alt'] ; ?>">
            <?php } ?>
        </div>
          
          <div class="ServicesListItemTitle"><?php the_title(); ?></div>
          <?php if($text = get_field('text', $post->id)){ ?> 
          <div class="ServicesListItemText colorGrey"><?php echo $text ; ?></div> 
          <?php  } ?>
          <?php if($price_block = get_field('price_block', $post->id)){ ?>
          <div class="ServicesListItemPrice">
              <div class="ServicesListItemPriceTo colorGrey"><?php echo $price_block['to']; ?></div>
              <div class="ServicesListItemPriceCount"><?php echo $price_block['count']; ?></div>
              <div class="ServicesListItemPriceAfter colorGrey"><?php echo $price_block['after']; ?></div>
          </div>
          <?php } ?>
          <div class="ServicesListItemLink colorMain" onClick="location.href='<?php the_permalink(); ?>'"> Mehr Erfahren 
          
              <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.864 6.09103L11.864 0.63621L6.4092 0.636209L6.4092 1.92173L9.66937 1.92173L0.681535 10.9096L1.59067 11.8187L10.5785 2.83087L10.5785 6.09103L11.864 6.09103Z" fill="#D5474E" stroke="#D5474E" stroke-width="0.5"/>
</svg>
          
          </div>
        </div>          
                
                
        <?php } wp_reset_postdata(); ?>
</div>
    
<?php } ?>        
                
                
    </div>
</section>

<script>
$(document).ready(function () {
    
    if($('.ServicesListItem').length > 3){
        var Show = 3;
    }else{
        var Show = $('.ServicesListItem').length;
    }
    
            $('#<?php echo get_sub_field('unique_id');?> .ServicesListItems').slick({
                slidesToShow: Show,
				slideToScroll:1,
                infinite: false,
                centerMode: false,
                nextArrow: '<div class="slider-btn slider-btn-right" aria-hidden="true"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_10_160)"><path d="M15.1419 0.5L4 12.5L15.1419 24.5L17 22.5002L7.71354 12.5L17 2.49976L15.1419 0.5Z" fill="#D5474E"/></g><defs><clipPath id="clip0_10_160"><rect width="24" height="24" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg></div>',
                prevArrow: '<div class="slider-btn slider-btn-left" aria-hidden="true"><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_10_201)"><path d="M8.85808 0.5L20 12.5L8.85808 24.5L7 22.5002L16.2865 12.5L7 2.49976L8.85808 0.5Z" fill="#D5474E"/></g><defs><clipPath id="clip0_10_201"><rect width="24" height="24" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg></div>',
                responsive: [ 
            {
              breakpoint: 800,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 500,
              settings: {
                arrows: false,  
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '20px',
                infinite: true,
              }
            }
                  ]

                    });

            });

</script>

