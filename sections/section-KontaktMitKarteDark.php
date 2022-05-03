<section class="darkForm padd bgBlack darkColor darkContactAndMap"
    style="background-image:url(<?php echo get_sub_field('background');?>);">
    <div class="container">
        <div class="darkFormContent">

            <?php if($title=get_sub_field('title')):?>
            <<?php echo get_sub_field('title_tag');?> class="title2 colorLight"><?php echo $title;?>
            </<?php echo get_sub_field('title_tag');?>>
            <?php endif;?>
            <?php if($text=get_sub_field('text')):?>
            <div class="darkFormContentText colorLight"><?php echo $text;?></div>
            <?php endif;?>
            <div class="darkMap_Contacts">
                <?php if($phone=get_sub_field('phone')):?>
                <div class="phone "><svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.165 23.3327C12.2115 23.3468 4.65733 15.7021 4.66798 5.83561C4.66798 5.19128 5.19031 4.66602 5.83465 4.66602H8.9139C9.49206 4.66602 9.98322 5.09083 10.0681 5.66273C10.2716 7.03341 10.6707 8.36781 11.2532 9.62517L11.3731 9.88394C11.5398 10.2437 11.4268 10.6712 11.1041 10.9017C10.1505 11.5827 9.78605 12.9535 10.5289 14.0231C11.4612 15.3653 12.6364 16.5402 13.9783 17.4721C15.0478 18.2148 16.4184 17.8504 17.0994 16.8969C17.33 16.5741 17.7577 16.461 18.1178 16.6278L18.3753 16.7471C19.6328 17.3296 20.9673 17.7287 22.3381 17.9321C22.91 18.017 23.3346 18.5081 23.3346 19.0863V22.166C23.3346 22.8103 22.811 23.3327 22.1667 23.3327L22.165 23.3327Z"
                            fill="white" />
                    </svg>
                    <?php echo $phone;?></div>
                <?php endif;?>
                <?php if($email=get_sub_field('email')):?>
                <div class="email"><svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1.91602 17.2497C1.91602 18.3082 2.77414 19.1663 3.83268 19.1663H19.166C20.2246 19.1663 21.0827 18.3082 21.0827 17.2497V5.74968C21.0827 4.69113 20.2246 3.83301 19.166 3.83301H3.83268C2.80586 3.83204 1.96068 4.64045 1.91602 5.6663V17.2497ZM3.80872 17.7288L4.28789 8.14551L4.79102 6.70801H18.2077L18.6629 8.14551L19.1421 17.7288H3.80872Z"
                            fill="white" />
                        <path d="M4.79102 6.70801L11.5712 10.8288L18.2077 6.70801H4.79102Z" fill="white" />
                        <path
                            d="M4.28789 8.14551L3.80872 17.7288H19.1421L18.6629 8.14551L11.4754 13.1288L4.28789 8.14551Z"
                            fill="white" />
                    </svg>
                    <?php echo $email;?></div>
                <?php endif;?>
                <?php if($adress=get_sub_field('adress')):?>
                <div class="adress"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 20.9998C10.7369 19.9224 9.56619 18.7413 8.5 17.4688C6.9 15.5578 5 12.7118 5 9.99981C4.99858 7.16735 6.70425 4.6132 9.32107 3.5292C11.9379 2.44521 14.9501 3.04505 16.952 5.04881C18.2685 6.35941 19.0059 8.14219 19 9.99981C19 12.7118 17.1 15.5578 15.5 17.4688C14.4338 18.7413 13.2631 19.9224 12 20.9998ZM12 6.99981C10.9282 6.99981 9.93782 7.5716 9.40193 8.49981C8.86603 9.42801 8.86603 10.5716 9.40193 11.4998C9.93782 12.428 10.9282 12.9998 12 12.9998C13.6569 12.9998 15 11.6567 15 9.99981C15 8.34295 13.6569 6.99981 12 6.99981Z"
                            fill="white" />
                    </svg>
                    <?php echo $adress;?></div>
                <?php endif;?>
            </div>
        </div>
        <div class="darkFormMap">

            <?php if($frame=get_sub_field('map_frame')):?>
            <?php echo do_shortcode($frame);?>
            <?php endif;?>
        </div>
    </div>
</section>