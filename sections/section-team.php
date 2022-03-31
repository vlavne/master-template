<section class="team marg" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
    <div class="container">
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
            <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
        <?php endif; ?>
        <?php if ($text = get_sub_field('text')): ?>
            <div class="teamText colorGrey" data-aos="fade-up"><?php echo $text; ?></div>
        <?php endif; ?>
        <div class="teamBlock">
            <?php $i=0; foreach (get_sub_field('team') as $t):?>
                <div class="teamBlockItem" data-aos="fade-up" data-aos-delay="<?php echo $i;?>">
                    <div class="teamBlockItemImg"><?php echo wp_get_attachment_image($t['img']['ID'],'full');?></div>
                    <div class="teamBlockItemContent">
                        <div class="teamBlockItemContentName"><?php echo $t['name'];?></div>
                        <?php if($t['position'] !== ''):?>
                            <div class="teamBlockItemContentPosition"><?php echo $t['position'];?></div>
                        <?php endif;?>
                        <?php if($t['info'] !== ''):?>
                            <div class="teamBlockItemContentInfo"><?php echo $t['info'];?></div>
                        <?php endif;?>
                        <div class="teamBlockItemContentSocial">
                            <?php if($t['facebook'] !== ''):?>
                                <a href="<?php echo $t['facebook'];?>" target="_blank" rel="nofollow">
                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.66667 6.34173H5.77778V4.05601C5.77778 3.42516 6.29547 3.48458 6.93333 3.48458H8.08889V0.627441H5.77778C4.85836 0.627441 3.9766 0.988665 3.32647 1.63165C2.67635 2.27463 2.31111 3.1467 2.31111 4.05601V6.34173H0V9.19887H2.31111V15.4846H5.77778V9.19887H7.51111L8.66667 6.34173Z" fill="#7EE62A"/>
                                    </svg>
                                </a>
                            <?php endif;?>
                            <?php if($t['twitter'] !== ''):?>
                                <a href="<?php echo $t['twitter'];?>" target="_blank" rel="nofollow">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.9683 1.98145C15.3814 2.25032 14.6382 2.50268 13.9722 2.58657C14.6495 2.17124 15.7241 1.3062 15.9683 0.523682C15.3355 0.908066 14.1911 1.31858 13.4446 1.46711C12.8485 0.813861 11.9981 0.523682 11.056 0.523682C9.24629 0.523682 7.98413 2.10866 7.98413 3.96182V5.33708C5.32275 5.33708 2.72791 3.24188 1.11312 1.21131C0.82114 1.7231 0.667848 2.30669 0.669336 2.90081C0.669336 4.15161 1.78113 5.42097 2.66138 6.02471C2.12444 6.00752 1.1078 5.58394 0.665344 5.33708V5.37627C0.665344 7.00389 1.77048 8.10891 3.26817 8.41697C2.99471 8.49467 2.66138 8.77522 1.37859 8.77522C1.7951 10.1058 3.88894 10.8092 5.32275 10.8381C4.20098 11.7368 2.20096 12.2134 0.665344 12.2134C0.399872 12.2134 0.256157 12.2285 0 12.1975C1.44912 13.1465 3.4731 13.5886 5.32275 13.5886C11.3488 13.5886 14.6376 8.8316 14.6376 4.39503C14.6376 4.24925 14.6329 3.76104 14.6256 3.61801C15.2696 3.14905 15.5305 2.65808 15.9683 1.98145Z" fill="#7EE62A"/>
                                    </svg>
                                </a>
                            <?php endif;?>
                            <?php if($t['linkedin'] !== ''):?>
                                <a href="<?php echo $t['linkedin'];?>" target="_blank" rel="nofollow">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.98916 4.69266H0.793548V14.051H3.98916V4.69266Z" fill="#7EE62A"/>
                                        <path d="M3.45192 0.325322C3.14736 0.140905 2.78944 0.0424861 2.42331 0.0424805C2.17901 0.0424767 1.93712 0.0863058 1.71156 0.171448C1.48599 0.256589 1.28119 0.381363 1.10894 0.538594C0.93669 0.695824 0.800388 0.882409 0.707872 1.08762C0.615356 1.29283 0.568451 1.51261 0.569855 1.73433C0.571959 2.06662 0.682448 2.3909 0.887384 2.66625C1.09232 2.94161 1.38252 3.15572 1.72137 3.28156C2.06023 3.4074 2.43256 3.43933 2.79139 3.37334C3.15022 3.30734 3.47948 3.14637 3.73762 2.91073C3.99577 2.6751 4.17124 2.37535 4.2419 2.0493C4.31255 1.72326 4.27523 1.38552 4.13464 1.07871C3.99405 0.771891 3.75649 0.509739 3.45192 0.325322Z" fill="#7EE62A"/>
                                        <path d="M9.11873 4.69218H6.04029L6.02964 14.0699H9.22525V9.43903C9.22525 8.2209 9.4809 7.04144 11.1426 7.04144C12.8043 7.04144 12.8043 8.44326 12.8043 9.52604V14.0505H16V8.91698C16 6.3937 15.3502 4.46016 12.1546 4.46016C11.5455 4.43852 10.9414 4.56739 10.4067 4.83301C9.87206 5.09862 9.42689 5.49102 9.11873 5.96832V4.69218Z" fill="#7EE62A"/>
                                    </svg>
                                </a>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            <?php $i+=100; endforeach;?>
        </div>
    </div>
</section>