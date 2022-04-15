<section class="TopTwoColumn" id="<?php echo get_sub_field('unique_id');?>">
    <div class="container">
        <div class="TopTwoColumnBlock <?php echo get_sub_field('text_position');?>">
            <div class="TopTwoColumnBlockContent">
                <?php if($subtitle=get_sub_field('subtitle')):?>
                    <div class="subtitle colorMain"><?php echo $subtitle;?></div>
                <?php endif;?>
                <?php if($title=get_sub_field('title')):?>
                <<?php echo get_sub_field('title_tag');?> ><?php echo $title;?></<?php echo get_sub_field('title_tag');?>>
            <?php endif;?>
            <?php if($text=get_sub_field('text')):?>
                <div class="TopTwoColumnBlockContentText colorGrey"><?php echo $text;?></div>
            <?php endif;?>
            <?php if ($btn = get_sub_field('btn')): ?>
                <a href="<?php echo $btn['url']; ?>" class="btn"
                   <?php if ($btn['target']): ?>target="<?php echo $btn['target']; ?>"<?php endif; ?>><?php echo $btn['title']; ?></a>
            <?php endif; ?>
        </div>
        <div class="TopTwoColumnBlockContent">
            <?php if($img=get_sub_field('img')):?>
                <div class="TopTwoColumnBlockImg noexist"><?php echo wp_get_attachment_image($img['ID'], 'full');?></div>
            <?php endif;?>
            <?php if($minicart=get_sub_field('minicart')):?>
                <div class="MiniCart">
                    <div class="MiniCartIcon">
                        <img src="<?php echo $minicart['icon']['url'] ?>" alt="<?php echo $minicart['icon']['title'] ?>">
                    </div>
                    <div class="MiniCartContent">
                        <div class="MiniCartContentTitle">

                            <?php echo $minicart['title'] ?>

                        </div>
                        <div class="MiniCartContentSubTitle">

                            <?php echo $minicart['sub_title'] ?>

                        </div>
                    </div>

                </div>
            <?php endif;?>
        </div>

        <?php if($background_img=get_sub_field('background_img')):?>
            <div class="TopTwoColumnBlockBackground"><img src="<?php echo $background_img['url'] ?>" alt="<?php echo $background_img['title'] ?>"></div>
        <?php endif;?>
    </div>

    </div>


</section>