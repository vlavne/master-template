<section class="productBlock marg <?php echo $type;?>" id="<?php echo get_sub_field('unique_id');?>"
         style="background-color:<?php echo get_sub_field('background_color');?>; background-image:url(<?php echo get_sub_field('background_image');?>);">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
        <<?php echo get_sub_field('title_tag'); ?> class="title2 colorMain" data-aos="fade-up"><?php echo $title; ?>
    </<?php echo get_sub_field('title_tag'); ?>>
    <?php endif; ?>
    <div class="productBlockBlock" data-aos="fade-up">
        <?php if( have_rows('productBlockReapeter') ): ?>
            <?php while( have_rows('productBlockReapeter') ): the_row();
                ?>
                <div class="productCategoty">
                    <span class="subtitle"><?php echo get_sub_field('subtitle');?></span>
                    <h3 class="productBlockTitle"><?php echo get_sub_field('productTitle');?></h3>


                    <?php if( have_rows('productPoints') ): ?>
                        <div class="productBlockIttem">
                            <?php while( have_rows('productPoints') ): the_row();
                                ?>
                                <div class="productIttem">
                                    <div class="productLeft">

                                        <div class="product_attributes">
                                            <span class="subtitle"><?php echo get_sub_field('under_title');?></span>
                                            <h3 class="productBlockTitle"><?php echo get_sub_field('product_title');?></h3>
                                            <?php if( have_rows('product_attributes') ): ?>
                                                <?php while( have_rows('product_attributes') ): the_row();
                                                    ?>
                                                    <div class="product_atributes_cont">

                                                        <span><?php echo get_sub_field('attribute_title');?></span>
                                                        <p><?php echo get_sub_field('attribute_description');?></p>
                                                    </div>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="productRight">
                                        <img  class="productImg" src="<?php echo get_sub_field('product_image');?>" alt="">
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    </div>
</section>