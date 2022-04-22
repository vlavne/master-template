<?php
$btn = get_sub_field('btn');
?>

<section class="roomList marg" id="<?php echo get_sub_field('unique_id'); ?>" data-aos="fade-up">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
        <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?>
    </<?php echo get_sub_field('title_tag'); ?>>
    <?php endif; ?>

    <?php if ($text = get_sub_field('text')): ?>
        <div class="roomListLine bgMain"></div>
        <div class="roomListText " data-aos="fade-up"><?php echo $text; ?></div>
    <?php endif; ?>
    <div class="roomListBlock" data-aos="fade-up">
        <?php
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
        }
        // List terms
        if (!empty($terms)) {
            ?>
            <div class="roomListBlockTerms">
                <?php
                $i = 0;
                foreach ($terms as $term) {
                    $i++?>
                    <span class="roomListBlockTermsSingle <?php if ($i ===1){ echo 'active bgMain'; } ?>" data-cat="<?php echo $term->slug; ?>"><?php echo $term->name; ?></span>
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
            <div class="roomListBlockItem">
                <?php
                foreach ($myposts as $standorte):
                    $permalink = get_permalink($standorte->ID);
                    $title = get_the_title($standorte->ID);
                    $content = get_post_field('post_content', $standorte->ID);
                    ?>

                    <div class="roomListBlockItemWrap" <?php $terms = get_the_terms($standorte->ID, 'Kategorie Hotelzimmer'); ?>
                         data-cat-single="<?php if ($terms != '') { echo $terms[0]->slug; } ?>">
                        <?php if ($thumbnail = get_the_post_thumbnail_url($standorte->ID, 'postCard')): ?>
                            <img src="<?php echo $thumbnail; ?>" class="listAngebotsSingleWrapImg">
                        <?php endif; ?>
                        <?php echo wp_get_attachment_image($standorte->ID); ?>
                        <div class="roomListBlockItemWrapContent">
                            <?php if ($title): ?>
                                <span class="roomListBlockItemWrapContentTitle"><?php echo $title; ?></span>
                            <?php endif; ?>
                            <?php if ($content): ?>
                                <span class="roomListBlockItemWrapContentInfo"><?php echo $content; ?></span>
                            <?php endif; ?>
                            <?php if ($permalink = get_the_permalink($standorte->ID)): ?>
                                <a class="roomListBlockItemWrapContentLink colorMain"
                                   href="<?php echo esc_url($permalink); ?>">Mehr erfahren <img
                                            src="/wp-content/themes/master-template/img/arrowTopRight.svg" alt=""></a>
                            <?php endif; ?>
                        </div>
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
        var $slickElement = $('.roomListBlockItem');
        $('.roomListBlockTermsSingle').on('click', function (element) {
            let target = $(this).attr('data-cat');
            resetFilterButtons();
            setFilterButtonActive(target);
            $slickElement.slick('slickUnfilter');
            if (target !== "alle") {
                $slickElement.slick('slickFilter', `div[data-cat-single=${target}]`);
            }
        });
        const resetFilterButtons = () => {
            $(".roomListBlockTermsSingle").removeClass("active bgMain")
        };
        const setFilterButtonActive = (target) => {
            $(`span[data-cat=${target}]`).addClass('active bgMain');
        };

        // slick slider
        $('#<?php echo get_sub_field('unique_id');?> .roomListBlockItem').slick({
            slidesToShow: 3,
            slideToScroll: 1,
            centerMode: false,
            // infinite: false,
            nextArrow: '<div class="slider-btn slider-btn-right" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-light-right.svg" alt=""></div>',
            prevArrow: '<div class="slider-btn slider-btn-left" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-light-left.svg" alt=""></div>',
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]

        });

    });

</script>

