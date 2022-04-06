<?php
$btn = get_sub_field( 'btn' );
?>
<section class="portfolio marg" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
  <div class="container">
    <?php if ($subtitle = get_sub_field('subtitle')): ?>
    <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
    <?php endif; ?>
    <?php if ($title = get_sub_field('title')): ?>
    <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
    <?php endif; ?>
    <?php
    if ( get_sub_field( 'portfolio_type' ) == "blocks" ) {
      ?>
    <div class="portfolioBlock <?php 
			
			echo get_sub_field('portfolio_type');
			
			?> 
			<?php if (!$btn): ?>showAll<?php endif; ?>" data-aos="fade-up">
      <?php
      $portfolio = get_sub_field( 'portfolio' );
      $portfolioItems = array_chunk( $portfolio, 3 );
      foreach ( $portfolioItems as $item ): ?>
      <div class="portfolioBlockWrap">
        <?php foreach ($item as $p): ?>
        <a href="<?php echo $p['img']['url']; ?>" class="portfolioBlockItem"
                           data-fancybox="<?php echo get_sub_field('unique_id');?>" data-caption="<strong><?php echo $p['title']; ?></strong><?php if ($p['info'] !== ''): ?><br><?php echo $p['info']; ?><?php endif; ?>"> <?php echo wp_get_attachment_image($p['img']['ID'], 'large'); ?> <span class="portfolioBlockItemContent"> <span class="portfolioBlockItemContentTitle"><?php echo $p['title']; ?></span>
        <?php if ($p['info'] !== ''): ?>
        <span class="portfolioBlockItemContentText"><?php echo $p['info']; ?></span>
        <?php endif; ?>
        </span> </a>
        <?php endforeach; ?>
      </div>
      <?php endforeach; ?>
    </div>
    <?php 	} ?>
    <?php
    if ( get_sub_field( 'portfolio_type' ) == "slider" ) {
      ?>
    <div class="portfolioBlock <?php 
			
			echo get_sub_field('portfolio_type');
			
			?>  ">
      <?php foreach (get_sub_field('portfolio') as $p):?>
      <div class="portfolioBlockSliderItem"> <a href="<?php echo $p['img']['url']; ?>"
                       data-fancybox="<?php echo get_sub_field('unique_id');?>2" data-caption="<strong><?php echo $p['title']; ?></strong><?php if ($p['info'] !== ''): ?><br><?php echo $p['info']; ?><?php endif; ?>"> <?php echo wp_get_attachment_image($p['img']['ID'], 'large'); ?> </a>
        <div class="portfolioBlockItemContentTitle"><?php echo $p['title']; ?></div>
        <?php if ($p['info'] !== ''): ?>
        <div class="portfolioBlockItemContentText colorGrey"><?php echo $p['info']; ?></div>
        <?php endif; ?>
      </div>
      <?php endforeach;?>
    </div>
    <?php 	} ?>
    <?php if ($btn): ?>
    <div class="btn" data-aos="fade-up" onclick="$(this).hide();$(this).prev('.portfolioBlock').addClass('showAll');"><?php echo $btn; ?></div>
    <?php endif; ?>
	
	<?php
    if ( get_sub_field( 'portfolio_type' ) == "blocks" ) {
      ?>
	
    <div class="portfolioBlockMob <?php 
			echo get_sub_field('portfolio_type');
			?>">
      <?php foreach (get_sub_field('portfolio') as $p):?>
      <div class="portfolioBlockMobItem"> <a href="<?php echo $p['img']['url']; ?>"
                       data-fancybox="<?php echo get_sub_field('unique_id');?>2" data-caption="<strong><?php echo $p['title']; ?></strong><?php if ($p['info'] !== ''): ?><br><?php echo $p['info']; ?><?php endif; ?>"> <?php echo wp_get_attachment_image($p['img']['ID'], 'large'); ?> </a> </div>
      <?php endforeach;?>
		
	<?php 	} ?>
		
		<?php
    if ( get_sub_field( 'portfolio_type' ) == "slider" ) {
      ?>
    <div class="portfolioBlockMob <?php 
			
			echo get_sub_field('portfolio_type');
			
			?>  ">
      <?php foreach (get_sub_field('portfolio') as $p):?>
      <div class="portfolioBlockMobItem"> <a href="<?php echo $p['img']['url']; ?>"
                       data-fancybox="<?php echo get_sub_field('unique_id');?>2" data-caption="<strong><?php echo $p['title']; ?></strong><?php if ($p['info'] !== ''): ?><br><?php echo $p['info']; ?><?php endif; ?>"> <?php echo wp_get_attachment_image($p['img']['ID'], 'large'); ?> </a>
        <div class="portfolioBlockItemContentTitle"><?php echo $p['title']; ?></div>
        <?php if ($p['info'] !== ''): ?>
        <div class="portfolioBlockItemContentText colorGrey"><?php echo $p['info']; ?></div>
        <?php endif; ?>
      </div>
        
      <?php endforeach;?>
        </div>
     <div class="portfolioBlockMobNav  <?php 
			
			echo get_sub_field('portfolio_type');
			
			?>">   
    <?php
        foreach (get_sub_field('portfolio') as $p):?>    
            <div class="sliderNavs"></div>
    <?php endforeach;?>
         </div>
        
    <?php if ($btn): ?>
    <div class="btn <?php 
			
			echo get_sub_field('portfolio_type');
			
			?>" data-aos="fade-up" onclick="$(this).hide();$('.portfolioBlockMob').addClass('showAll');$('.portfolioBlockMobNav').addClass('showAll');"><?php echo $btn; ?></div>
    <?php endif; ?>
        
    <?php 	} ?>
		
        
		
    </div>
  </div>



</section>
<script>
    $(document).ready(function () {
        if ($(document).width() <= 768) {
            $('#<?php echo get_sub_field('unique_id');?> .portfolioBlockMob.blocks').slick({
                dots: false,
                infinite: false,
                arrows: true,
                speed: 300,
                slidesToShow: 1,
                centerMode: true,
                centerPadding: '35px',
            });
            $('#<?php echo get_sub_field('unique_id');?> .portfolioBlock').slick('slickGoTo', 1);
        }
    });
	
	$(document).ready(function () {
        if ($(document).width() <= 768) {
           		
        $('#<?php echo get_sub_field('unique_id'); ?> .portfolioBlockMob.slider').slick({
                            dots: false,
                            focusOnSelect: false,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: true,
                            nextArrow: '<div class="slider-btn slider-btn-right" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-light-left.svg" alt=""></div>',
                            prevArrow: '<div class="slider-btn slider-btn-left" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-light-right.svg" alt=""></div>',
                            asNavFor: '#<?php echo get_sub_field('unique_id'); ?> .portfolioBlockMobNav.slider'
                        });
       
                        $('#<?php echo get_sub_field('unique_id'); ?> .portfolioBlockMobNav.slider').slick({
                            dots: false,
                            slidesToShow: '<? echo(count(get_sub_field('portfolio'))); ?>',
                            focusOnSelect: true,
                            arrows: false,
                            
                            asNavFor: '#<?php echo get_sub_field('unique_id'); ?> .portfolioBlockMob.slider'
                        });    
            
        }
    });
	
	$(document).ready(function () {
        
            $('#<?php echo get_sub_field('unique_id');?> .portfolioBlock.slider').slick({
                slidesToShow: 3,
				slideToScroll:1,
				
            });
        
    });
	
</script>

