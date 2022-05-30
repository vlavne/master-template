<section class="pdf marg" id="<?php echo get_sub_field('unique_id');?>">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain <?php if($type !== "slider"){ echo 'title-center'; }?>" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
        <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
    <?php endif; ?>
    <div class="pdfBlock" data-aos="fade-up">
        <?php foreach (get_sub_field('pdf') as $s): ?>
            <div class="pdfBlockItemWrap">

                <?php echo wp_get_attachment_image($s['img']['ID'], 'service'); ?>
                <span class="pdfBlockItemContent">
                        <span class="pdfBlockItemContentTitle"><?php echo $s['title']; ?></span>
                        <?php if ($s['info']): ?>
                            <span class="pdfBlockItemContentInfo"><?php echo $s['info']; ?></span>
                        <?php endif; ?>
                        <span class="pdfBlockItemContentLink link"><?php echo $s['link']['title']; ?><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.35142 3.94514L9.3579 8.5926L11.1858 8.5926V0.814422H3.40759V2.64229L8.05505 2.64878L0.166688 10.5371L1.46305 11.8335L9.35142 3.94514Z" fill="#234255"/>
</svg></span>
                    </span>

            </div>
        <?php endforeach; ?>
    </div>
    </div>
</section>