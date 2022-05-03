<section class="textImg textImgBg textImgBg_v3" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up"  >
<div class="txtImBg_bg" style="background-image:url(<?php echo get_sub_field('img');?>);">  </div>
    <div class="container">
        <div class="textImgBlock ">
        <div class="mobileImg" style="background-image:url(<?php echo get_sub_field('img');?>);">

        </div>
            <div class="textImgBlockContent">
         
                <?php if($title=get_sub_field('title')):?>
                    <<?php echo get_sub_field('title_tag');?> class="title2"><?php echo $title;?></<?php echo get_sub_field('title_tag');?>>
                <?php endif;?>
                <div class="txtImgBg_divider"></div>
                <div class="text_blok_row">
                <?php if($text=get_sub_field('text')):?>
                    <div class="textImgBlockContentText colorGrey"><?php echo $text;?></div>
                <?php endif;?>
                <?php if($text=get_sub_field('text2')):?>
                    <div class="textImgBlockContentText colorGrey"><?php echo $text;?></div>
                <?php endif;?>
                </div>
              
              
            </div>
           
        </div>
    </div>
  
</section>