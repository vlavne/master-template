<section class="book-meeting " id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
<div class="book-meeting-left" style="background: url(<?php echo get_sub_field('bg-img');?>) no-repeat;">
        <?php if ($title = get_sub_field('title')): ?>
            <div class="title" data-aos="fade-up"><?php echo $title; ?></div>
        <?php endif; ?>
        <?php if ($text = get_sub_field('text')): ?>
            <p class="text" data-aos="fade-up"><?php echo $text; ?></p>
        <?php endif; ?>
        <?php if ($link = get_sub_field('link')): ?>
            <a class="link" href="<?php echo $link['url'];?>"><?php echo $link['title'];?>
            <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.4812 14.61L21.4812 8.01875L14.8899 8.01875L14.8899 9.57209L18.8293 9.57209L7.96901 20.4324L9.06755 21.5309L19.9279 10.6706L19.9279 14.61L21.4812 14.61Z" fill="white" stroke="white" stroke-width="0.5"/>
</svg>
            </a>
        <?php endif; ?>
</div>
<div class="book-meeting-right">
        <?php echo do_shortcode(get_sub_field('shortcode_form'));?>
</div>
</section>