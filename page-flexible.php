<?php /* Template Name: Flexible Inhalte */

get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="siteMain">
            <?php if (have_rows("content")) :
                $elementCount = 1;
                while (have_rows("content")) : the_row();
                    if ($layout = get_row_layout()) {
                        get_template_part("sections/section", $layout);
                    }
                    $elementCount++;
                endwhile;
            endif; ?>
        </main><!-- #main -->
    </div>
<?php
get_footer();