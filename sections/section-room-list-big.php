<?php
$btn = get_sub_field('btn');
?>

<section class="bigRoomList marg" id="<?php echo get_sub_field('unique_id'); ?> " data-aos="fade-up">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
        <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?>
            </<?php echo get_sub_field('title_tag'); ?>>
            <?php if (get_field('underline', 'option') === 'true'): ?>
                <div class="bigRoomListLine bgMain"></div>
            <?php endif; ?>
        <?php endif; ?>
        <?php if ($text = get_sub_field('text')): ?>

            <div class="bigRoomListText " data-aos="fade-up"><?php echo $text; ?></div>
        <?php endif; ?>


    <div class="bigRoomListBlock" data-aos="fade-up">
        <?
        // Get the posts
        if ($tax = get_sub_field('tax')):  $tax = get_sub_field('tax');  endif;
        if ($post_type = get_sub_field('post_type')):  $post_type = get_sub_field('post_type');  endif;
        if (!empty($post_type)) {
            $my_posts = new WP_Query;
            $myposts = $my_posts->query(array(
                'post_type' => 'hotel_rooms',
                'posts_per_page' => -1,
            ));
        }

        // Get the taxonomy's terms
        if (!empty($tax)){
            $terms = get_terms(
                array(
                    'taxonomy' => $tax,
                    'hide_empty' => false,
                )
            );
            $firstTerm = $terms[0];
        }
        // List terms
        if (!empty($terms)) {
            ?>
            <div class="bigRoomListBlockTerms">
                <?php
                $i = 0;
                foreach ($terms as $term) {
                    $i++?>
                    <span class="bigRoomListBlockTermsSingle <?php if ($i ===1){ echo 'active bgMain'; } ?>" data-cat="<?php echo $term->slug; ?>"><?php echo $term->name; ?></span>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        ?>
        <?php
        // List Post cards
        if ($myposts) { ?>
            <div class="bigRoomListBlockItem">
                <?php
                foreach ($myposts as $standorte):
                    $permalink = get_permalink($standorte->ID);
                    $title = get_the_title($standorte->ID);
                    $content = get_post_field('post_content', $standorte->ID);
                    $roomAdvanteges = get_post_field('roomAdvanteges', $standorte->ID);
                    $price = get_post_field('room_price', $standorte->ID);
                    $terms = get_the_terms($standorte->ID, 'Kategorie Hotelzimmer');
                    ?>
                    <div class="bigRoomListBlockItemWrap <?php if ($firstTerm->slug === $terms[0]->slug){echo 'active';} ?>"
                         data-cat-single="<?php if ($terms != '') { echo $terms[0]->slug; } ?>">
                        <div class="bigRoomListBlockItemWrapContent">
                            <?php if ($title): ?>
                                <span class="bigRoomListBlockItemWrapContentTitle"><?php echo $title; ?></span>
                            <?php endif; ?>
                            <?php if (get_field('underline', 'option') === 'true'): ?>
                                <div class="bigRoomListBlockItemWrapContentLine bgMain"></div>
                            <?php endif; ?>
                            <?php if ($content): ?>
                                <span class="bigRoomListBlockItemWrapContentInfo"><?php echo $content; ?></span>
                            <?php endif; ?>

                            <?php if ($price): ?>
                                <span class="bigRoomListBlockItemWrapContentPrice"><?php echo $price; ?></span>
                            <?php endif; ?>

                            <?php if ($roomAdvanteges): ?>
                                <span class="bigRoomListBlockItemWrapContentList"><?php echo $roomAdvanteges; ?></span>
                            <?php endif; ?>
                            <?php if ($permalink = get_the_permalink($standorte->ID)): ?>
                                <a class="bigRoomListBlockItemWrapContentLink colorMain"
                                   href="<?php echo esc_url($permalink); ?>">Mehr erfahren <img
                                        src="/wp-content/themes/master-template/img/arrowTopRight.svg" alt=""></a>
                            <?php endif; ?>
                        </div>
                        <?php if ($thumbnail = get_the_post_thumbnail_url($standorte->ID, 'bigPostCard')): ?>
                            <img src="<?php echo $thumbnail; ?>" class="listAngebotsSingleWrapImg">
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php
        }
        ?>
    </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        // sort post cards
        // var $slickElement = $('.bigRoomListBlockItem');
        $('.bigRoomListBlockTermsSingle').on('click', function (element) {
            let target = $(this).attr('data-cat');
            resetFilterButtons();
            setFilterButtonActive(target);
        });
        const resetFilterButtons = () => {
            $(".bigRoomListBlockTermsSingle").removeClass("active bgMain")
        };
        const setFilterButtonActive = (target) => {
            $(`span[data-cat=${target}]`).addClass('active bgMain');
            $(`.bigRoomListBlockItem div`).removeClass('active');
            $(`.bigRoomListBlockItem div[data-cat-single=${target}]`).addClass('active');
            $(`.bigRoomListBlockItem div:`).addClass('active');
        };
    });
</script>

