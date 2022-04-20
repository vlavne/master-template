<section class="assortment marg <?php echo get_sub_field('type');?>" id="<?php echo get_sub_field('unique_id');?>"
         style="background-color:<?php echo get_sub_field('background_color');?>; background-image:url(<?php echo get_sub_field('background_image');?>);">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
        <<?php echo get_sub_field('title_tag'); ?> class="title2 colorMain" data-aos="fade-up"><?php echo $title; ?>
    </<?php echo get_sub_field('title_tag'); ?>>
    <?php endif; ?>
    <div class="assortmentBlock" data-aos="fade-up">
        <?php if( have_rows('assortmentReapeter') ): ?>
            <?php while( have_rows('assortmentReapeter') ): the_row();
                ?>
                <div class="assortmentIttem">
                    <h3 class="colorMain"><?php echo get_sub_field('assortmentTitle');?></h3>
                    <?php if( have_rows('assortmentPoints') ): ?>
                        <?php while( have_rows('assortmentPoints') ): the_row();
                            ?>
                            <li class="colorMain"><?php echo get_sub_field('point');?></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="citate">
        <p class="colorMain"><?php echo get_sub_field('citation');?></p>
    </div>
    </div>
</section>