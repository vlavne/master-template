<section class="textImg marg" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
    <div class="container">
        <div class="textImgBlock <?php echo get_sub_field('text_position');?>">
            <div class="textImgBlockContent">
                <?php if($subtitle=get_sub_field('subtitle')):?>
                    <div class="subtitle colorMain"><?php echo $subtitle;?></div>
                <?php endif;?>
                <?php if($title=get_sub_field('title')):?>
                    <<?php echo get_sub_field('title_tag');?> class="title2"><?php echo $title;?></<?php echo get_sub_field('title_tag');?>>
                <?php endif;?>
                <?php if (get_field('underline', 'option') === 'true'): ?>
                    <div class="textImgBlockContentLine bgMain"></div>
                <?php endif; ?>
                <?php if($text=get_sub_field('text')):?>
                    <div class="textImgBlockContentText colorGrey"><?php echo $text;?></div>
                <?php endif;?>
                <?php if ($btn = get_sub_field('btn')): ?>
                    <a href="<?php echo $btn['url']; ?>" class="btn"
                       <?php if ($btn['target']): ?>target="<?php echo $btn['target']; ?>"<?php endif; ?>><?php echo $btn['title']; ?></a>
                <?php endif; ?>
            </div>
            <?php if($img=get_sub_field('img')):?>
                <div class="textImgBlockImg"><?php echo wp_get_attachment_image($img['ID'], 'full');?></div>
            <?php endif;?>
        </div>
    </div>
</section>
