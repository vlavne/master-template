<?php

// COLORS
$black = get_field('color_black', 'options');
$light = get_field('color_light', 'options');
$main = get_field('color_main', 'options');
$grey = get_field('color_grey', 'options');
$light_grey = get_field('color_light_grey', 'options');

// DISTANCES
$outer_padding_desk = get_field('outer_padding_desk', 'options');
$outer_padding_mob = get_field('outer_padding_mob', 'options');

// HEADINGS
$h1 = get_field('h1', 'options');
$h2 = get_field('h2', 'options');
$h3 = get_field('h3', 'options');
$h4 = get_field('h4', 'options');
$h5 = get_field('h5', 'options');

?>
<style>
    /* DISTANCES */
    .marg{
        margin: <?php echo $outer_padding_desk;?>px 0;
    }
    .margBot{
        margin-bottom: <?php echo $outer_padding_desk;?>px;
    }
    .padd{
        padding: <?php echo $outer_padding_desk;?>px 0;
    }
    @media (max-width: 1024px){
        .marg{
            margin: <?php echo $outer_padding_mob;?>px 0;
        }
        .margBot{
            margin-bottom: <?php echo $outer_padding_mob;?>px;
        }
        .padd{
            padding: <?php echo $outer_padding_mob;?>px 0;
        }
    }

    /* COLORS */
    .bgBlack{
        background: <?php echo $black;?>;
    }
    .bgMain{
        background: <?php echo $main;?>;
    }
    .colorMain{
        color: <?php echo $main;?>;
    }
    .colorBlack{
        color: <?php echo $black;?>;
    }
    .colorGrey{
        color: <?php echo $grey;?>;
    }
    .borderColorMain{
        border-color: <?php echo $main;?>;
    }

    body,
    button,
    input,
    select,
    optgroup,
    textarea {
        color: <?php echo $black;?>;
        font-size: 1rem;
        line-height: 1.5;
    }
    svg path[fill="#7EE62A"]{
        fill: <?php echo $main;?>;
    }
    a, a:visited, a:hover, a:focus, a:active, .siteNavigation > ul > li > a:hover {
        color: <?php echo $main;?>;
    }
    .siteNavigation > ul > li > a, .btn, .btn:hover{
        color: <?php echo $black;?>;
    }
    .page-template-default article p{
        color: <?php echo $grey;?>;
    }
    .btn{
        border-color: <?php echo $main;?>;
    }
    .btn, .testimonials .slick-arrow:hover{
        background: <?php echo $main;?>;
    }
    @media (max-width: 768px){
        .testimonialsBlockItemText, .faqBlockItemA{
            color: <?php echo $grey;?>;
        }
    }
    #burger span{
        background: <?php echo $black;?>;
    }
    .siteNavigationContacts{
        border-color: <?php echo $light;?>;
    }


    /* HEADINGS */
    h1, .title{
        font-size: <?php echo $h1['desk'];?>px;
    }
    h2, .title2{
        font-size: <?php echo $h2['desk'];?>px;
    }
    h3, .title3{
        font-size: <?php echo $h3['desk'];?>px;
    }
    h4, .title4{
        font-size: <?php echo $h4['desk'];?>px;
    }
    h5, .title5{
        font-size: <?php echo $h5['desk'];?>px;
    }
    @media (max-width: 1024px){
        h1, .title{
            font-size: <?php echo $h1['mob'];?>px;
        }
        h2, .title2{
            font-size: <?php echo $h2['mob'];?>px;
        }
        h3, .title3{
            font-size: <?php echo $h3['mob'];?>px;
        }
        h4, .title4{
            font-size: <?php echo $h4['mob'];?>px;
        }
        h5, .title5{
            font-size: <?php echo $h5['mob'];?>px;
        }
    }
</style>


