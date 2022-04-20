<section class="ListOfServises marg" id="<?php echo get_sub_field('unique_id');?>" data-aos="fade-up">
    <div class="container">
    
        <?php if ($subtitle = get_sub_field('subtitle')): ?>
            <div class="subtitle colorMain" data-aos="fade-up"><?php echo $subtitle; ?></div>
        <?php endif; ?>
        <?php if ($title = get_sub_field('title')): ?>
            <<?php echo get_sub_field('title_tag'); ?> class="title2" data-aos="fade-up"><?php echo $title; ?></<?php echo get_sub_field('title_tag'); ?>>
        <?php endif; ?>
                
        <div class="ListOfServisesBlock"> 
    
        <?php foreach (get_sub_field('services') as $s): ?>
            <div class="ListOfServisesBlockItem" data-aos="fade-up">
            <div class="ListOfServisesBlockItemImg"><?php if($s['icon']){ ?><img src="<?php echo $s['icon']['url'] ;?>" alt="<?php echo $s['icon']['title'] ;?>"><?php } ?></div>
            <div class="ListOfServisesBlockItemTitle">
                <?php if($s['title']){  echo $s['title'] ; } ?>
                </div>
                
                <?php if($s['list']){ ?>
            <div class="ListOfServisesBlockItemList">
                 <ul>
                <?php foreach ($s['list'] as $l): ?>
               <li><?php echo $l['text'] ?></li>
                <?php endforeach; ?>
                </ul>    
                </div>   
                
        <?php } ?>
        </div>
        <?php endforeach; ?>
    
    </div>        
    
    </div>
    
</section>
