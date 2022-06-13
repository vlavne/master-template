<section class="whyus" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up" style="background: url(<?php echo get_sub_field('bg-img');?>) no-repeat;">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if($title=get_sub_field('title')):?>
            <h2 class="title2 colorBlack" data-aos="fade-up"><?php echo $title;?></h2>
        <?php endif;?>
        <?php if ($text = get_sub_field('text')): ?>
            <div class="textImgBlockContentText colorGrey" data-aos="fade-up"><?php echo $text; ?></div>
        <?php endif; ?>

        <div class="causes-wrapper <?php $i = count(get_sub_field('causes_items')); if($i > 2){echo 'causes-4';}?>">
            <?php

            if( have_rows('causes_items') ):
                while( have_rows('causes_items') ) : the_row();
                    $title = get_sub_field('item_title');
                    $text = get_sub_field('item_text');
                    ?>
                    <div class="causes-item">
                        <div class="causes-item-left"><img src="<?php echo get_template_directory_uri(); ?>/img/globe-package-shipping.png" alt=""></div>
                        <div class="causes-item-right">
                            <span class="title"><?php echo $title;?></span>
                            <span class="text"><?php echo $text;?></span>
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>

    </div>
    <div class="hiden-bg"><img src="<?php echo get_sub_field('bg-img-mob');?>" alt=""></div>
</section>
