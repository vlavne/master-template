<section class="numbers marg" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
    <div class="numbers-left" style="background: url(<?php echo get_sub_field('bg-img');?>) no-repeat;">

    </div>
    <div class="numbers-right">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
            <h2 class="" data-aos="fade-up"><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php if ($text = get_sub_field('text')): ?>
            <p><?php echo $text;?></p>
        <?php endif; ?>

        <div class="numbers-wrapper">
            <?php
            if( have_rows('number_items') ):
                while( have_rows('number_items') ) : the_row();
                    $num = get_sub_field('item_number');
                    $title = get_sub_field('item_title');
                    ?>
                    <div class="number-item">
                        <span class="num"><?php echo $num;?></span>
                        <span class="num-title"><?php echo $title;?></span>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>