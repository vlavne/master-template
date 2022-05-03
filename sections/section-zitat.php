<section class="textImg textImgBg zitat" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up"    style="background-color:<?php echo get_sub_field('background_color');?>; background-image:url(<?php echo get_sub_field('img');?>);">
    <div class="container">      
            <div class="textImgBlockContent">              
                <?php if($title=get_sub_field('title')):?>
                    <<?php echo get_sub_field('title_tag');?> class="title2"><?php echo $title;?></<?php echo get_sub_field('title_tag');?>>
                <?php endif;?>
              
                <?php if($text=get_sub_field('text')):?>
                    <div class="textImgBlockContentText zitatText colorGrey"><?php echo $text;?></div>
                <?php endif;?>         
            </div>           
        </div>
    </div>
</section>