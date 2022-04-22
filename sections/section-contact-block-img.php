<section class="contactBlockWithImg marg" data-aos="fade-up">
    <?php if($img=get_sub_field('img')):?>
        <img class="contactBlockWithImgShow" src="<?php echo wp_get_attachment_image_url($img['ID'], 'full');?>">
    <?php endif;?>
    <div class="container">
        <div class="contactBlockWithImgBlock">
            <div class="contactBlockWithImgBlockContent" <?php if($img=get_sub_field('img')):?> style="background-image: url('<?php echo wp_get_attachment_image_url($img['ID'], 'full');?>')" <?php endif;?>>
                <?php if($title=get_sub_field('title')):?>
                    <<?php echo get_sub_field('title_tag');?> class="title2"><?php echo $title;?></<?php echo get_sub_field('title_tag');?>>
                <?php endif;?>
                <?php if($text=get_sub_field('text')):?>
                    <div class="contactBlockWithImgBlockContentText"><?php echo $text;?></div>
                <?php endif;?>
                <?php if ($btn = get_sub_field('btn')): ?>
                    <a href="<?php echo $btn['url']; ?>" class="contactBlockWithImgBlockContentBtn "
                       <?php if ($btn['target']): ?>target="<?php echo $btn['target']; ?>"<?php endif; ?>><?php echo $btn['title']; ?></a>
                <?php endif; ?>
                <?php if($img=get_sub_field('img')):?>
                    <div class="contactBlockWithImgBlockContentBg" style="background-image: url('<?php echo wp_get_attachment_image_url($img['ID'], 'full');?>')"></div>
                <?php endif;?>
            </div>

            <div class="contactBlockWithImgBlockForm">
                <?php if($frame=get_sub_field('frame')):?>
                    <?php echo do_shortcode($frame);?>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
