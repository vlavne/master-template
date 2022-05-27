<section class="process marg" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
    <div class="containerMax">
        <div class="processBlock">
            <div class="processBlockTitle">
                <?php if ($subtitle = get_sub_field('subtitle')): ?>
                    <div class="subtitle colorMain"><?php echo $subtitle; ?></div>
                <?php endif; ?>
                <?php if ($title = get_sub_field('title')): ?>
                    <<?php echo get_sub_field('title_tag'); ?> class="title2"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
                <?php endif; ?>
                <?php if ($btn = get_sub_field('btn')): ?>
                    <a href="<?php echo $btn['url']; ?>" class="btn btn-desk"
                       <?php if ($btn['target']): ?>target="<?php echo $btn['target']; ?>"<?php endif; ?>><?php echo $btn['title']; ?></a>
                <?php endif; ?>
            </div>
            <div class="processBlockContent">
                <?php $i=1; foreach (get_sub_field('process') as $p):?>
                    <div class="processBlockContentItem">
                        <div class="processIcon"><img src="/wp-content/uploads/2022/04/icon_10.png"></div>
                        <div>
                            <div class="processBlockContentItemTitle"><?php echo $p['title'];?></div>
                            <div class="processBlockContentItemText colorGrey"><?php echo $p['text'];?></div>
                        </div>
                    </div>
                <?php $i++; endforeach;?>
            </div>
            <?php if ($btn = get_sub_field('btn')): ?>
                    <a href="<?php echo $btn['url']; ?>" class="btn btn-mob"
                       <?php if ($btn['target']): ?>target="<?php echo $btn['target']; ?>"<?php endif; ?>><?php echo $btn['title']; ?></a>
                <?php endif; ?>
        </div>
    </div>
</section>