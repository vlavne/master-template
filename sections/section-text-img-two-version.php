<section class="textImg2ver" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
    <div class="container">
        <div class="textImg2verTitle">
        <?php if($subtitle=get_sub_field('subtitle')):?>
                    <div class="subtitle colorMain"><?php echo $subtitle;?></div>
                <?php endif;?>
        
                <?php if($title=get_sub_field('title')):?>
                    <<?php echo get_sub_field('title_tag');?> class="title2"><?php echo $title;?></<?php echo get_sub_field('title_tag');?>>
                <?php endif;?>
        </div>
        <div class="textImg2verBlock">
            
            <div class="textImg2verBlockImg">
            <?php if($img = get_sub_field('img')){ ?>    
            <img src="<?php echo $img['url'] ;?>" alt="<?php echo $img['title'] ;?>">
            <?php }?>    
            </div>
            <div class="textImg2verBlockText">
            <div class="Text">
            <?php if($text = get_sub_field('text') ){ echo $text ; } ?>
            </div>
            <?php if ($btn = get_sub_field('btn')): ?>
                    <a href="<?php echo $btn['url']; ?>" class="btn"
                       <?php if ($btn['target']): ?>target="<?php echo $btn['target']; ?>"<?php endif; ?>><?php echo $btn['title']; ?></a>
                <?php endif; ?>   
            </div>
            </div> 
            
            <?php if ($btn = get_sub_field('btn')): ?>
                    <a href="<?php echo $btn['url']; ?>" class="btn mobile"
                       <?php if ($btn['target']): ?>target="<?php echo $btn['target']; ?>"<?php endif; ?>><?php echo $btn['title']; ?></a>
                <?php endif; ?>
    </div>
</section>