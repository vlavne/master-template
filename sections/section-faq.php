<section class="faq marg" id="<?php echo get_sub_field('unique_id');?>">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
            <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
        <?php endif; ?>
        <div class="faqBlock">
            <?php foreach (get_sub_field('faq') as $f): ?>
                <div class="faqBlockItem" data-aos="fade-up">
                    <div class="faqBlockItemQ"><?php echo $f['q']; ?>
                        <div class="faqBlockItemOpen">
                            <span class="bgGold"></span><span class="bgGold"></span></div>
                    </div>
                    <div class="faqBlockItemA"><?php echo $f['a']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>