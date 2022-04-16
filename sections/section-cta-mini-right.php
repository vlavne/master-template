<section class="CtaMiniRight" id="<?php echo get_sub_field('unique_id');?>">
        <div class="CtaMiniRightBlock" style="background-color:<?php if($background_color = get_sub_field('background-color')){ echo $background_color ; } ?>" 
             onClick='location.href=" <?php if($link = get_sub_field('link')){ echo $link['url'] ; } ?>" ;  '>

            <img src="<?php echo get_template_directory_uri(); ?>/img/Intersect.svg" alt="intersect">
            <p class="CtaMiniRightBlockTitle">
                <?php if($text = get_sub_field('text')){ echo $text ; } ?>
            </p>
            <div class="CtaMiniRightBlockLink">
                <?php if($link = get_sub_field('link')){ echo $link['title'] ; } ?> &nbsp;<img src="<?php echo get_template_directory_uri(); ?>/img/short_right-white.svg" alt="short_right">
            </div>

        </div>
    <div class="btnHide" onClick="$('.CtaMiniRight').hide() ;">
        &#215;
    </div>
</section>

