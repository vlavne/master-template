<section class="specialists padd" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up" >
    <div class="container">
        <div class="specialists-wrapper" data-aos="fade-up">
                <?php while( have_rows('specialists_items') ) : the_row(); ?>
                    <div class="specialists-item">         
                        <span><?php echo get_sub_field('item_title');?></span>
                        <p><?php echo get_sub_field('item_text');?></p>
                    </div>
                <?php endwhile; ?>
        </div>
    </div>
</section>