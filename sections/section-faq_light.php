<section class="faqLight marg" id="<?php echo get_sub_field('unique_id');?>">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="faqLightSubtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
        <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
    <?php endif; ?>

    <?php if ($text = get_sub_field('text')): ?>
        <div class="faqLightLine bgMain"></div>
        <div class="faqLightText " data-aos="fade-up"><?php echo $text; ?></div>
    <?php endif; ?>
    <div class="faqLightBlock">
        <?php foreach (get_sub_field('list_faq') as $f): ?>
            <div class="faqLightBlockItem" data-aos="fade-up">
                <div class="faqLightBlockItemTitle"><?php echo $f['ask_text']; ?> </div>
                <div class="faqLightBlockItemText"><?php echo $f['answer_text']; ?> </div>
            </div>
        <?php endforeach; ?>
    </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        if ($(window).width() <= 1024) {
            $('.faqLightBlockItem').click(function() {
                $(this).stop().toggleClass('active');
                $(this).find('.faqLightBlockItemText').stop().slideToggle();
            });
        }
    });
</script>
