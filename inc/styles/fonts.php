<?php
$template_directory = get_template_directory_uri();
$font = get_field('font', 'options');
?>
<link rel="preload" href="<?php echo $template_directory; ?>/fonts/<?php echo $font;?>/static/<?php echo $font;?>-Regular.ttf"
      as="font" crossorigin="anonymous">
<link rel="preload" href="<?php echo $template_directory; ?>/fonts/<?php echo $font;?>/static/<?php echo $font;?>-Medium.ttf"
      as="font" crossorigin="anonymous">
<link rel="preload" href="<?php echo $template_directory; ?>/fonts/<?php echo $font;?>/static/<?php echo $font;?>-SemiBold.ttf"
      as="font" crossorigin="anonymous">
<link rel="preload" href="<?php echo $template_directory; ?>/fonts/<?php echo $font;?>/static/<?php echo $font;?>-Bold.ttf"
      as="font" crossorigin="anonymous">
<link rel="preload" href="<?php echo $template_directory; ?>/fonts/<?php echo $font;?>/static/<?php echo $font;?>-Bold.ttf"
      as="font" crossorigin="anonymous">

<style>
    @font-face {
        font-family: <?php echo $font;?>;
        src: url('<?php echo $template_directory; ?>/fonts/<?php echo $font;?>/static/<?php echo $font;?>-Regular.ttf');
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: <?php echo $font;?>;
        src: url('<?php echo $template_directory; ?>/fonts/<?php echo $font;?>/static/<?php echo $font;?>-Medium.ttf');
        font-weight: 500;
        font-style: normal;
    }
    @font-face {
        font-family: <?php echo $font;?>;
        src: url('<?php echo $template_directory; ?>/fonts/<?php echo $font;?>/static/<?php echo $font;?>-SemiBold.ttf');
        font-weight: 600;
        font-style: normal;
    }
    @font-face {
        font-family: <?php echo $font;?>;
        src: url('<?php echo $template_directory; ?>/fonts/<?php echo $font;?>/static/<?php echo $font;?>-Bold.ttf');
        font-weight: bold;
        font-style: normal;
    }
    body,
    button,
    input,
    select,
    optgroup,
    textarea {
        font-family: <?php echo $font;?>;
        font-size: 1rem;
        line-height: 1.5;
    }
</style>