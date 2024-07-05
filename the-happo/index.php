<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<?php

require_once(__DIR__ . '/Utils.php');
 get_header(); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no,address=no,email=no">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,400;0,500;0,600;1,300&family=Poppins:wght@300&display=swap" rel="stylesheet">

  

</head>

<body >
  <div class="mainFix">
    <button class="gNavBtn">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <nav class="gNav">
    <?php
    if(has_nav_menu( 'menu-1' )) {
        $menu_items = wp_get_nav_menu_items('menu-1');
        $itemsArray = array();
        foreach($menu_items as $m) {
          $itemsArray[]['title']       =   $m->title;
        }
     wp_nav_menu( 
        array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
          'container'            => 'ul',
          'menu_class'            => 'gNav_main, list-num-2',
     )); 
    }
     if(!empty(get_field('by'))) { ?>  
      <p class="gNav_by">by <br><a href="<?= get_field('by')['url']; ?>" target="_blank" rel="noopener"><?= get_field('by')['title']; ?></a></p>
      <?php } ?>
      <ul class="gNav_sns">
      <?php 
      if(!empty(get_field('facebook', 'options'))) { ?> 
        <li>
          <a href="<?= get_field('facebook', 'options'); ?>" target="_blank" rel="noopener">
          <?php include('image/sns_facebook.php'); ?>
          </a>
        </li>
        <?php } 
        if(!empty(get_field('instagram', 'options'))) { ?>
        <li>
          <a href="<?= get_field('instagram', 'options'); ?>" target="_blank" rel="noopener">
          <?php include('image/sns_instagram.php'); ?>
          </a>
        </li>
        <?php } ?>
      </ul>
      <?php  
        if(!empty(get_field('bottom_fix')['bottom_fix_link'])) { ?>
      <p class="gNav_booking"><a href="<?= get_field('bottom_fix')['bottom_fix_link']['url']; ?>" target="_blank" rel="noopener"><?= get_field('bottom_fix')['bottom_fix_link']['title']; ?></a></p>
      <?php } ?>
    </nav>
    <div class="mainFix_bottomFix">
    <?php  
        if(!empty(get_field('bottom_fix')['bottom_fix_link'])) { ?>
      <p class="mainFix_bottomFix_ttl"><?= get_field('bottom_fix')['footer_title'];?></p>
      <a class="mainFix_bottomFix_booking" href="<?= get_field('bottom_fix')['bottom_fix_link']['url']; ?>" target="_blank" rel="noopener"><?= get_field('bottom_fix')['bottom_fix_link']['title']; ?></a>
      <?php } ?>
    </div>
    <div class="mainFix_topFix">
      <div class="mainFix_topFix_inner">
        <?php  
        if(!empty(get_field('logo_main'))) { ?>
          <a class="mainFix_topFix_symbol" href="#main">
          <img src="<?= get_field('logo_main')['sizes']['large']; ?>);" alt="">
        </a>
          <?php } ?>
        <ul class="mainFix_topFix_language">
          <?php
          if(has_nav_menu( 'menu-2' )) { 
          wp_nav_menu( 
            array(
              'theme_location' => 'menu-2',
              'menu_id'        => 'secundary-menu',
              'container'            => 'li',
         ));
         } ?>
        </ul>
      </div>
    </div>
    <p class="header_mv_catch pc"><?= get_field('bottom_fix')['bottom_fix_title'];?></p>
  </div>
 <div class="main" id="main">
   <div class="container">
     <header class="header">
       <h1 class="header_logoType">
       <?php  
        if(!empty(get_field('logo'))) { ?>
        <img src="<?= get_field('logo')['sizes']['large']; ?>);" alt="">
        <?php } ?>
      </h1>
       <div class="header_mv">
          <div class="hero_video">
             <div class="video">
              <?php 
              $video=get_field('video');
              if(!empty($video)) {
              Utils::vimeoVideo($video);
              } ?>
            </div>
            <nav class="header_mv_nav">
              <?php 
              if(has_nav_menu( 'menu-1' )) {
                  wp_nav_menu(
                  array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'container'            => 'ul',
                    'menu_class'            => 'list-num',
                  ));
                  } ?>
                   
            </nav>
          </div>
        <p class="header_mv_catch"><?= get_field('bottom_fix')['bottom_fix_title'];?></p>
       </div>
     </header>
     <section class="about" id="intro">
       <div class="inner about scrollAnimation fadeIn">
       <?php
         if(!empty($itemsArray['0']['title'])){ ?>
         <p class="sec_num">01</p>
         <?php } ?>
         <h2><?= get_field('intro')['title']; ?></h2>
         <p class="about_read">
           <?= get_field('intro')['text']; ?>
         </p>
       </div>
       <?php  
        if(!empty(get_field('intro')['image']) || !empty(get_field('intro')['description'])) { ?>
       <div class="about_infoBox about" style="background: url(<?= get_field('intro')['image']['sizes']['2048x2048'];?>) center / cover no-repeat">
         <div class="scrollAnimation fadeIn c"><?= get_field('intro')['description']; ?></div>
       </div>
       <?php } ?>
     </section>

     <section class="facilities" id="features">
       <div class="scrollAnimation fadeIn">
        <?php
         if(!empty($itemsArray['1']['title'])){ ?>
         <p class="sec_num">02</p>
         <h2 class="sec_ttl"><?= $itemsArray['1']['title']; ?></h2>
         <?php } ?>
       </div>
       <?php
       if(!empty(get_field('features_right'))) {
       $featuresRight= get_field('features_right');
        foreach($featuresRight as $feature) { ?>
            
          <section class="saving facilities_sec inner-pc">
            <div class="facilities_imgBox">
              <picture>
                <source media="(max-width:767px)" srcset="<?= $feature['image']['sizes']['large']; ?>">
                <img class="js_rellax scrollAnimation fadeIn02" src="<?= $feature['image']['sizes']['large']; ?>" alt="">
              </picture>
            </div>

            <div class="facilities_textBox scrollAnimation fadeIn">
              <h3 class="facilities_contTtl"><?= $feature['title']; ?></h3>
              <ul class="facilities_point scrollAnimation">
                <?php
                if(!empty($feature['feature_list'])) { 
                $itemList= $feature['feature_list']; 
                foreach($itemList as $item) { 
                  if(!empty($item['feature'])) { ?>
                <li><?= $item['feature']; ?></li>
                <?php }}} ?>
              </ul>
            </div>
          </section>
       <?php } }
       if(!empty(get_field('features_left'))) {
       $featuresLeft= get_field('features_left');
        foreach($featuresLeft as $feature) { ?>           
       <section class="nonContact facilities_sec inner-pc">
         <div class="facilities_imgBox">
           <img class="js_rellax scrollAnimation fadeIn02" src="<?= $feature['image']['sizes']['large']; ?>" alt="">
         </div>

         <div class="facilities_textBox scrollAnimation fadeIn">
           <h3 class="facilities_contTtl"><?= $feature['title']; ?></h3>
           <ul class="facilities_point scrollAnimation">
           <?php
           if(!empty($feature['feature_list'])) {
                $itemList= $feature['feature_list']; 
                foreach($itemList as $item) { 
                  if(!empty($item['feature'])) {?>
                <li><?= $item['feature']; ?></li>
                <?php }}} ?>
           </ul>
         </div>
       </section>
       <?php } } ?>

       <ul class="facilities_feature inner scrollAnimation fadeIn">
         <?php 
            $featureIcon= get_field('feature_icon');
            if(!empty($featureIcon)) {
              foreach($featureIcon as $iconContent) { ?>
              <li>
              <?php  
                if(!empty($iconContent['icon'])) { ?>
                <img src="<?= $iconContent['icon']['sizes']['large']; ?>" alt="">
                <?php } ?>
                <p><?= $iconContent['title']; ?></p>
                <p><?= $iconContent['description']; ?></p>
              </li>
          <?php } } ?>
       </ul>
     </section>
  
     <section class="roomType" id="rooms">
       <div class="roomType_inner inner-pc">
         <div class="scrollAnimation scrollAnimation fadeIn">
         <?php
         if(!empty($itemsArray['2']['title'])){ ?>
           <p class="sec_num">03</p>
           <h2 class="sec_ttl"><?= $itemsArray['2']['title']; ?></h2>
           <?php } ?>
           </div>

           <ul class="roomType_list inner-sp">
            <?php 
              $rooms= get_field('rooms');
              if(!empty($rooms)){
                foreach($rooms as $room) { ?>
                  <li class="scrollAnimation fadeIn">
                    <div>
                    <?php
                      $gallery= $room['gallery'];
                      if(!empty($gallery)){ ?>
                        <div class="owl-carousel owl-theme">
                          <?php 
                            foreach($gallery as $image) { ?>
                              <div class="three-two-ratio">
                                  <img src="<?= $image['sizes']['large'];  ?>" alt="">
                              </div>
                          <?php } ?>
                        </div>
                        <?php } ?>
                          <p class="roomType_list_subTtl"><?= $room['type']; ?></p>
                          <h3 class="roomType_list_contTtl"><?= $room['name']; ?></h3>
                          <p><?= $room['description']; ?></p>
                    </div>
                      <div class="roomType_list_infoBox">
                        <p><?= $room['capacity']; ?></p>
                        <?php
                        if(!empty($room['left_button'])){ ?>
                          <a class="linkBtn" href="<?= $room['left_button']['url']; ?>" target="_blank" rel="noopener"><?= $room['left_button']['title']; ?></a>
                          <?php }
                        if(!empty($room['right_button'])){ ?> 
                          <a class="linkBtn" href="<?= $room['right_button']['url']; ?>" target="_blank" rel="noopener"><?= $room['right_button']['title']; ?></a>
                          <?php } ?>
                      </div>
                    </li>
             <?php } } 
              $suit= get_field('suit');
              if(!empty($suit)){
                foreach($suit as $room) { ?>
                  <li class="_sweet scrollAnimation fadeIn">
                  <?php
                  $gallery= $room['gallery'];
                  if(!empty($gallery)){ ?>
                    <div class="owl-carousel owl-theme">
                      <?php 
                            foreach($gallery as $image) { ?>
                              <div class="three-two-ratio">
                                <img src="<?= $image['sizes']['large'];  ?>" alt="">
                              </div>
                      <?php } ?>
                    </div>
                    <?php } ?>
                    <div class="_sweet_textBox">
                      <p class="roomType_list_subTtl"><?= $room['type']; ?></p>
                      <h3 class="roomType_list_contTtl"><?= $room['name']; ?></h3>
                      <p><?= $room['description']; ?></p>
                      <div class="roomType_list_infoBox">
                        <p><?= $room['capacity']; ?></p>
                        <?php
                        if(!empty($room['left_button'])){ ?>
                        <a class="linkBtn" href="<?= $room['left_button']['url']; ?>" target="_blank" rel="noopener"><?= $room['left_button']['title']; ?></a>
                        <?php }
                        if(!empty($room['right_button'])){ ?>
                        <a class="linkBtn" href="<?= $room['right_button']['url']; ?>" target="_blank" rel="noopener"><?= $room['right_button']['title']; ?></a>
                        <?php } ?>
                      </div>
                    </div>
                  </li>
             <?php } } ?>
         </ul>
         <div class="scrollAnimation fadeIn">
                         
           <section class="roomType_amenities">
             <h3><?= get_field('amenities')['title']; ?></h3>
             <div class="roomType_amenities_container inner-sp">
               <ul class="roomType_amenities_list">
                <?php 
                $amenitiesList=get_field('amenities')['amenities_list'];
                if(!empty($amenitiesList)){
                foreach($amenitiesList as $item) { ?>
                 <li><?= $item['amenity'] ?></li>
                 <?php } } ?>
               </ul>
             </div>
           </section>


           <?php 
           if(!empty(get_field('google_map')['adress'])) { ?>
            <section class="roomType_access">
             <h3><?= get_field('google_map')['title']; ?></h3>
             <div class="roomType_access_map inner-sp">
               <iframe src="<?= get_field('google_map')['adress']; ?>" width="770" height="352" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             </div>
             <?php 
             if(!empty(get_field('footer','options')['google_map'])) { ?>
             <p class="roomType_access_mapLink inner-sp"><a href="<?= get_field('footer','options')['google_map']; ?>" target="_blank" rel="noopener">Google Map</a></p>
             <?php } ?>
            </section>
           <?php } ?>
         </div>
       </div>
     </section>

     <section class="foodDrink inner" id="foodDrink">
       <div class="scrollAnimation fadeIn">
       <?php
         if(!empty($itemsArray['3']['title'])){ ?>
         <p class="sec_num">04</p>
         <h2 class="sec_ttl"><?= $itemsArray['3']['title']; ?></h2>
         <?php } ?>
       </div>

       <?php
         $foodDrinks= get_field('food_&_drinks');
         if(!empty($foodDrinks)) {
         foreach($foodDrinks as $foodDrink) { ?>
            <section class="foodDrink_sec food scrollAnimation">
              <?php 
              if(!empty($foodDrink['image'])) { ?>
              <div class="foodDrink_imgBox">
                <img class="js_rellax scrollAnimation fadeIn02" src="<?= $foodDrink['image']['sizes']['large'];  ?>" alt="">
              </div>
              <?php } ?>
              <div class="foodDrink_contBox scrollAnimation fadeIn">
                <h3><img src="<?= $foodDrink['logo']['sizes']['large'];  ?>" alt=""></h3>
                <div class="foodDrink_textBox">
                  <p><?= $foodDrink['text_1'];  ?></p>
                  <p><?= $foodDrink['text_2'];  ?></p>
                  <p></p>
                  <?php 
                  if(!empty($foodDrink['button'])) { ?>
                  <a class="linkBtn" href="<?= $foodDrink['button']['url'];  ?>" target="_blank" rel="noopener"><?= $foodDrink['button']['title'];  ?></a>
                  <?php } ?>
                </div>
              </div>
            </section>
        <?php } } ?>
        <?php
        $foodDrinksGallery= get_field('food_&_drinks_gallery');
        if(!empty($foodDrinksGallery)) { 
        foreach($foodDrinksGallery as $foodDrink) { ?>  
            <section class="foodDrink_sec drink scrollAnimation">
              <div class="foodDrink_imgBox">
                <div class="owl-carousel owl-theme js_rellax scrollAnimation fadeIn02">
                  <?php
                  $gallery = $foodDrink['gallery'];
                  if(!empty($gallery)) { 
                  foreach($gallery as $image) { ?>
                  <div class="cb-ratio">
                    <img src="<?= $image['sizes']['large']; ?>" alt="">
                  </div>
                  <?php } }?>
                </div>
              </div>
              <div class="foodDrink_contBox scrollAnimation fadeIn">
                <div>
                  <h2 class="sec_ttl text-left"><?= $foodDrink['title'] ?></h2>
                  <div class="foodDrink_textBox">
                    <p><?= $foodDrink['text_1'] ?></p>
                    <p><?= $foodDrink['text_2'] ?></p>
                  </div>
                </div>
              </div>
            </section>
        <?php } }?>    
     </section>

     <section class="activities" id="activities">
       <div class="scrollAnimation fadeIn">
       <?php
         if(!empty($itemsArray['4']['title'])){ ?>
         <p class="sec_num">05</p>
         <h2 class="sec_ttl"><?= $itemsArray['4']['title']; ?></h2>
         <?php } ?>
         <p class="activities_read inner"><?= get_field('activities')['info']; ?></p>
       </div>

       <div class="activities_sliderWrap h370">
         <div class="activities_slider swiper-container">
           <div class="swiper-wrapper">
            <?php
            $gallerySlide = get_field('activities')['gallery'];
            $galleryCount = count($gallerySlide);
            if(!empty($gallerySlide)) {
            foreach($gallerySlide as $image) { ?>
             <div class="swiper-slide"><img src="<?=  $image['sizes']['large']; ?>" alt=""></div>
             <?php } } ?>
           </div>
         </div>
       </div>
        <?php 
        if(!empty(get_field('activities')['link'])) { ?>
       <a class="activities_link" href="<?= get_field('activities')['link']; ?>" target="_blank" rel="noopener"><?= get_field('activities')['link_text']; ?></a>
        <?php } ?>
      </section>

     <section class="booking h650">
       <div class="booking_contBox scrollAnimation fadeIn">
         <div class="booking_contBox_inner">
           <h2 class="booking_ttl"><?= get_field('booking')['title']; ?></h2>
           <p class="booking_read"><?= get_field('booking')['text_1']; ?> <a href="mailto:<?= get_field('booking')['mail']; ?>"><?= get_field('booking')['mail']; ?></a> <?= get_field('booking')['text_2']; ?></p>
           <?php 
           if(!empty(get_field('booking')['button'])) {  ?>
           <a class="linkBtn" href="<?= get_field('booking')['button']['url']; ?>" target="_blank" rel="noopener"><?= get_field('booking')['button']['title']; ?></a>
           <?php } ?>
          </div>
       </div>
       <?php 
       if(!empty(get_field('booking')['image_left'])) { ?>
       <div class="booking_imgBox01"><img src="<?= get_field('booking')['image_left']['sizes']['large']; ?>" alt=""></div>
       <?php }
       if(!empty(get_field('booking')['image_right'])) { ?>
       <div class="booking_imgBox02"><img src="<?= get_field('booking')['image_right']['sizes']['large']; ?>" alt=""></div>
       <?php } ?>
     </section>

     <footer class="footer">
       <nav class="footer_nav">
       <?php
        if(has_nav_menu( 'menu-1' )) {
        wp_nav_menu( 
          array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
          'container'            => 'ul',
          )); 
        }?>
         <ul class="footer_nav_sns">
           <?php 
            if(!empty(get_field('facebook', 'options'))) { ?>
           <li>
             <a href="<?= get_field('facebook', 'options'); ?>" target="_blank" rel="noopener">
               FACEBOOK
             </a>
           </li>
           <?php }
           if(!empty(get_field('instagram', 'options'))) { ?>
           <li>
             <a href="<?= get_field('instagram', 'options'); ?>" target="_blank" rel="noopener">
               INSTAGRAM
             </a>
           </li>
           <?php } ?>
         </ul>
       </nav>

       <div class="footer_container">
         <div class="footer_cont01">
         <?php 
          if(!empty(get_field('footer','options')['logo'])) { ?>
           <p class="footer_logo"><a href="#main"><img src="<?= get_field('footer','options')['logo']['sizes']['large']; ?>" alt=""></a></p>
           <?php } ?>
           <address class="footer_address">
           <?php 
              if(!empty(get_field('footer','options')['text'])) { ?>
             <p><?= get_field('footer','options')['text']; ?></p>
             <?php }
              if(!empty(get_field('footer','options')['google_map'])) { ?>
             <p><a class="underline" href="<?= get_field('footer','options')['google_map']; ?>" target="_blank" rel="noopener">(Google Map)</a></p>
             <?php }
             if(!empty(get_field('footer','options')['phone'])) { ?>
             <p class="footer_tel"><a href="tel:<?= get_field('footer','options')['phone']; ?>">Tel : <?= get_field('footer','options')['phone']; ?></a></p>
             <?php }
             if(!empty(get_field('footer','options')['mail'])) { ?>
             <p><a href="mailto:<?= get_field('footer','options')['mail']; ?>">Mail : <?= get_field('footer','options')['mail']; ?></a></p>
             <?php } ?>
           </address>
         </div> 

         <div class="footer_cont02">
         <?php 
              if(!empty(get_field('footer','options')['text_2'])) { ?>
           <p><?= get_field('footer','options')['text_2']; ?></p>
           <?php }
             if(!empty(get_field('footer','options')['button'])) { ?>
           <a class="linkBtn" href="<?= get_field('footer','options')['button']['url']; ?>" target="_blank" rel="noopener"><?= get_field('footer','options')['button']['title']; ?></a>
           <?php } ?>
          </div>

         <ul class="footer_sns sp">
          <?php 
          if(!empty(get_field('facebook', 'options'))) { ?>
           <li>
             <a href="<?= get_field('facebook', 'options'); ?>" target="_blank" rel="noopener">
              <?php include('image/sns_facebook.php'); ?>
             </a>
           </li>
            <?php }
            if(!empty(get_field('instagram', 'options'))) { ?>
           <li>
             <a href="<?= get_field('instagram', 'options'); ?>" target="_blank" rel="noopener">
             <?php include('image/sns_instagram.php'); ?>
             </a>
           </li>
           <?php } ?>
         </ul>

         <ul class="footer_linkBox">
          <?php
          $partners= get_field('partners');
          if(!empty($partners)) {
          foreach($partners as $partner){ ?>
            <?php 
            if(!empty($partner['logo'])) { ?>
           <li>
             <a href="<?= $partner['link']; ?>" target="_blank" rel="noopener">
               <img src="<?= $partner['logo']['sizes']['medium']; ?>" alt="">
             </a>
           </li>
           <?php } } }?>
         </ul>
       </div>
     </footer>
   </div>
 </div>

<script>
  var galleryNumber = <?= $galleryCount;  ?> - 1;
</script>



<?php get_footer(); ?>
