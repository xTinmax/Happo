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
      if(!empty(get_field('contact')['facebook'])) { ?> 
        <li>
          <a href="<?= get_field('contact')['facebook']; ?>" target="_blank" rel="noopener">
          <?php include('image/sns_facebook.php'); ?>
          </a>
        </li>
        <?php } 
        if(!empty(get_field('contact')['instagram'])) { ?>
        <li>
          <a href="<?= get_field('contact')['instagram']; ?>" target="_blank" rel="noopener">
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
          wp_nav_menu( 
            array(
              'theme_location' => 'menu-2',
              'menu_id'        => 'secundary-menu',
              'container'            => 'li',
         ));
          ?>
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
     <section class="about" id="about">
       <div class="inner about scrollAnimation fadeIn">
       <?php
         if(!empty($itemsArray['0']['title'])){ ?>
         <p class="sec_num">01</p>
         <?php } ?>
         <h2><?= get_field('about')['about_title']; ?></h2>
         <p class="about_read">
           <?= get_field('about')['about_text']; ?>
         </p>
       </div>
       <?php  
        if(!empty(get_field('about')['about_img']) || !empty(get_field('about')['about_info'])) { ?>
       <div class="about_infoBox about" style="background: url(<?= get_field('about')['about_img']['sizes']['2048x2048'];?>) center / cover no-repeat">
         <div class="scrollAnimation fadeIn c"><?= get_field('about')['about_info']; ?></div>
       </div>
       <?php } ?>
     </section>

     <section class="facilities" id="section1">
       <div class="scrollAnimation fadeIn">
        <?php
         if(!empty($itemsArray['1']['title'])){ ?>
         <p class="sec_num">02</p>
         <h2 class="sec_ttl"><?= $itemsArray['1']['title']; ?></h2>
         <?php } ?>
       </div>
       <?php
       if(!empty(get_field('section_1_type_a'))) {
       $section1TypeA= get_field('section_1_type_a');
        foreach($section1TypeA as $section) { ?>
            
          <section class="saving facilities_sec inner-pc">
            <div class="facilities_imgBox">
              <picture>
                <source media="(max-width:767px)" srcset="<?= $section['type_a_image']['sizes']['large']; ?>">
                <img class="js_rellax scrollAnimation fadeIn02" src="<?= $section['type_a_image']['sizes']['large']; ?>" alt="">
              </picture>
            </div>

            <div class="facilities_textBox scrollAnimation fadeIn">
              <h3 class="facilities_contTtl"><?= $section['type_a_title']; ?></h3>
              <ul class="facilities_point scrollAnimation">
                <?php
                if(!empty($section['type_a_list'])) { 
                $itemList= $section['type_a_list']; 
                foreach($itemList as $item) { 
                  if(!empty($item['item'])) { ?>
                <li><?= $item['item']; ?></li>
                <?php }}} ?>
              </ul>
            </div>
          </section>
       <?php } }
       if(!empty(get_field('section_1_type_b'))) {
       $section1TypeB= get_field('section_1_type_b');
        foreach($section1TypeB as $section) { ?>           
       <section class="nonContact facilities_sec inner-pc">
         <div class="facilities_imgBox">
           <img class="js_rellax scrollAnimation fadeIn02" src="<?= $section['type_b_image']['sizes']['large']; ?>" alt="">
         </div>

         <div class="facilities_textBox scrollAnimation fadeIn">
           <h3 class="facilities_contTtl"><?= $section['type_b_title']; ?></h3>
           <ul class="facilities_point scrollAnimation">
           <?php
           if(!empty($section['type_b_list'])) {
                $itemList= $section['type_b_list']; 
                foreach($itemList as $item) { 
                  if(!empty($item['item'])) {?>
                <li><?= $item['item']; ?></li>
                <?php }}} ?>
           </ul>
         </div>
       </section>
       <?php } } ?>

       <ul class="facilities_feature inner scrollAnimation fadeIn">
         <?php 
            $section1Icons= get_field('section_1_icons');
            if(!empty($section1Icons)) {
              foreach($section1Icons as $iconContent) { ?>
              <li>
              <?php  
                if(!empty($iconContent['icon'])) { ?>
                <img src="<?= $iconContent['icon']['sizes']['large']; ?>" alt="">
                <?php } ?>
                <p><?= $iconContent['icon_title']; ?></p>
                <p><?= $iconContent['icon_text']; ?></p>
              </li>
          <?php } } ?>
       </ul>
     </section>
  
     <section class="roomType" id="section2">
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
              $section2TypeA= get_field('section_2_type_a');
              if(!empty($section2TypeA)){
                foreach($section2TypeA as $section) { ?>
                  <li class="scrollAnimation fadeIn">
                    <div>
                    <?php
                      $gallery= $section['type_a_gallery'];
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
                          <p class="roomType_list_subTtl"><?= $section['type_a_sub_title']; ?></p>
                          <h3 class="roomType_list_contTtl"><?= $section['type_a_title_content']; ?></h3>
                          <p><?= $section['type_a_text']; ?></p>
                    </div>
                      <div class="roomType_list_infoBox">
                        <p><?= $section['type_a_info_box']; ?></p>
                        <?php
                        if(!empty($section['boton_1'])){ ?>
                          <a class="linkBtn" href="<?= $section['boton_1']['url']; ?>" target="_blank" rel="noopener"><?= $section['boton_1']['title']; ?></a>
                          <?php }
                        if(!empty($section['boton_2'])){ ?> 
                          <a class="linkBtn" href="<?= $section['boton_2']['url']; ?>" target="_blank" rel="noopener"><?= $section['boton_2']['title']; ?></a>
                          <?php } ?>
                      </div>
                    </li>
            <?php } } 
              $section2TypeB= get_field('section_2_type_b');
              if(!empty($section2TypeB)){
                foreach($section2TypeB as $section) { ?>
                  <li class="_sweet scrollAnimation fadeIn">
                  <?php
                  $gallery= $section['type_b_gallery'];
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
                      <p class="roomType_list_subTtl"><?= $section['type_b_sub_title']; ?></p>
                      <h3 class="roomType_list_contTtl"><?= $section['type_b_title_content']; ?></h3>
                      <p><?= $section['type_b_text']; ?></p>
                      <div class="roomType_list_infoBox">
                        <p><?= $section['type_b_info_box']; ?></p>
                        <?php
                        if(!empty($section['boton_1'])){ ?>
                        <a class="linkBtn" href="<?= $section['boton_1']['url']; ?>" target="_blank" rel="noopener"><?= $section['boton_1']['title']; ?></a>
                        <?php }
                        if(!empty($section['boton_1'])){ ?>
                        <a class="linkBtn" href="<?= $section['boton_2']['url']; ?>" target="_blank" rel="noopener"><?= $section['boton_2']['title']; ?></a>
                        <?php } ?>
                      </div>
                    </div>
                  </li>
             <?php } } ?>
         </ul>
         <div class="scrollAnimation fadeIn">
                         
           <section class="roomType_amenities">
             <h3><?= get_field('list_container')['list_title']; ?></h3>
             <div class="roomType_amenities_container inner-sp">
               <ul class="roomType_amenities_list">
                <?php 
                $listContainer=get_field('list_container')['list'];
                if(!empty($listContainer)){
                foreach($listContainer as $item) { ?>
                 <li><?= $item['item'] ?></li>
                 <?php } } ?>
               </ul>
             </div>
           </section>
           <?php 
           if(!empty(get_field('google_map')['google_map_adress'])) { ?>
            <section class="roomType_access">
             <h3><?= get_field('google_map')['google_map_title']; ?></h3>
             <div class="roomType_access_map inner-sp">
               <iframe src="<?= get_field('google_map')['google_map_adress']; ?>" width="770" height="352" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             </div>
             <?php 
             if(!empty(get_field('section_footer')['google_map'])) { ?>
             <p class="roomType_access_mapLink inner-sp"><a href="<?= get_field('section_footer')['google_map']; ?>" target="_blank" rel="noopener">Google Map</a></p>
             <?php } ?>
            </section>
           <?php } ?>
         </div>
       </div>
     </section>

     <section class="foodDrink inner" id="section3">
       <div class="scrollAnimation fadeIn">
       <?php
         if(!empty($itemsArray['3']['title'])){ ?>
         <p class="sec_num">04</p>
         <h2 class="sec_ttl"><?= $itemsArray['3']['title']; ?></h2>
         <?php } ?>
       </div>

       <?php
         $section3TypeA= get_field('section_3_type_a');
         if(!empty($section3TypeA)) {
         foreach($section3TypeA as $section) { ?>
            <section class="foodDrink_sec food scrollAnimation">
              <?php 
              if(!empty($section['type_a_image'])) { ?>
              <div class="foodDrink_imgBox">
                <img class="js_rellax scrollAnimation fadeIn02" src="<?= $section['type_a_image']['sizes']['large'];  ?>" alt="">
              </div>
              <?php } ?>
              <div class="foodDrink_contBox scrollAnimation fadeIn">
                <h3><img src="<?= $section['type_a_title_image']['sizes']['large'];  ?>" alt=""></h3>
                <div class="foodDrink_textBox">
                  <p><?= $section['type_a_text_1'];  ?></p>
                  <p><?= $section['type_a_text_2'];  ?></p>
                  <p></p>
                  <?php 
                  if(!empty($section['boton'])) { ?>
                  <a class="linkBtn" href="<?= $section['boton']['url'];  ?>" target="_blank" rel="noopener"><?= $section['boton']['title'];  ?></a>
                  <?php } ?>
                </div>
              </div>
            </section>
        <?php } } ?>
        <?php
        $section3TypeB= get_field('section_3_type_b');
        if(!empty($section3TypeB)) { 
        foreach($section3TypeB as $section) { ?>  
            <section class="foodDrink_sec drink scrollAnimation">
              <div class="foodDrink_imgBox">
                <div class="owl-carousel owl-theme js_rellax scrollAnimation fadeIn02">
                  <?php
                  $gallery = $section['type_b_gallery'];
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
                  <h2 class="sec_ttl text-left"><?= $section['type_b_title'] ?></h2>
                  <div class="foodDrink_textBox">
                    <p><?= $section['type_b_text_1'] ?></p>
                    <p><?= $section['type_b_text_2'] ?></p>
                  </div>
                </div>
              </div>
            </section>
        <?php } }?>    
     </section>

     <section class="activities" id="section4">
       <div class="scrollAnimation fadeIn">
       <?php
         if(!empty($itemsArray['4']['title'])){ ?>
         <p class="sec_num">05</p>
         <h2 class="sec_ttl"><?= $itemsArray['4']['title']; ?></h2>
         <?php } ?>
         <p class="activities_read inner"><?= get_field('section_4')['section_4_text']; ?></p>
       </div>

       <div class="activities_sliderWrap">
         <div class="activities_slider swiper-container">
           <div class="swiper-wrapper">
            <?php
            $gallerySlide = get_field('section_4')['section_4_gallery'];
            if(!empty($gallerySlide)) {
            foreach($gallerySlide as $image) { ?>
             <div class="swiper-slide"><img src="<?=  $image['sizes']['large']; ?>" alt=""></div>
             <?php } } ?>
           </div>
         </div>
       </div>
        <?php 
        if(!empty(get_field('section_4')['section_4_link'])) { ?>
       <a class="activities_link" href="<?= get_field('section_4')['section_4_link']; ?>" target="_blank" rel="noopener"><?= get_field('section_4')['section_4_link_text']; ?></a>
        <?php } ?>
      </section>

     <section class="booking">
       <div class="booking_contBox scrollAnimation fadeIn">
         <div class="booking_contBox_inner">
           <h2 class="booking_ttl"><?= get_field('section_booking')['title']; ?></h2>
           <p class="booking_read"><?= get_field('section_booking')['text_1']; ?> <a href="mailto:<?= get_field('section_booking')['mail']; ?>"><?= get_field('section_booking')['mail']; ?></a> <?= get_field('section_booking')['text_2']; ?></p>
           <?php 
           if(!empty(get_field('section_booking')['boton'])) {  ?>
           <a class="linkBtn" href="<?= get_field('section_booking')['boton']['url']; ?>" target="_blank" rel="noopener"><?= get_field('section_booking')['boton']['title']; ?></a>
           <?php } ?>
          </div>
       </div>
       <?php 
       if(!empty(get_field('section_booking')['image_left'])) { ?>
       <div class="booking_imgBox01"><img src="<?= get_field('section_booking')['image_left']['sizes']['large']; ?>" alt=""></div>
       <?php }
       if(!empty(get_field('section_booking')['image_right'])) { ?>
       <div class="booking_imgBox02"><img src="<?= get_field('section_booking')['image_right']['sizes']['large']; ?>" alt=""></div>
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
            if(!empty(get_field('contact')['facebook'])) { ?>
           <li>
             <a href="<?= get_field('contact')['facebook']; ?>" target="_blank" rel="noopener">
               FACEBOOK
             </a>
           </li>
           <?php }
           if(!empty(get_field('contact')['instagram'])) { ?>
           <li>
             <a href="<?= get_field('contact')['instagram']; ?>" target="_blank" rel="noopener">
               INSTAGRAM
             </a>
           </li>
           <?php } ?>
         </ul>
       </nav>

       <div class="footer_container">
         <div class="footer_cont01">
         <?php 
          if(!empty(get_field('section_footer')['footer_logo'])) { ?>
           <p class="footer_logo"><a href="#main"><img src="<?= get_field('section_footer')['footer_logo']['sizes']['large']; ?>" alt=""></a></p>
           <?php } ?>
           <address class="footer_address">
             <p><?= get_field('section_footer')['footer_text']; ?></p>
             <?php 
              if(!empty(get_field('section_footer')['google_map'])) { ?>
             <p><a class="underline" href="<?= get_field('section_footer')['google_map']; ?>" target="_blank" rel="noopener">(Google Map)</a></p>
             <?php }
             if(!empty(get_field('section_footer')['phone'])) { ?>
             <p class="footer_tel"><a href="tel:">Tel : <?= get_field('section_footer')['phone']; ?></a></p>
             <?php }
             if(!empty(get_field('section_footer')['mail'])) { ?>
             <p><a href="mailto:<?= get_field('section_footer')['mail']; ?>">Mail : <?= get_field('section_footer')['mail']; ?></a></p>
             <?php } ?>
           </address>
         </div>

         <div class="footer_cont02">
           <p><?= get_field('section_footer')['footer_text_2']; ?></p>
           <?php
             if(!empty(get_field('section_footer')['footer_boton'])) { ?>
           <a class="linkBtn" href="<?= get_field('section_footer')['footer_boton']['url']; ?>" target="_blank" rel="noopener"><?= get_field('section_footer')['footer_boton']['title']; ?></a>
           <?php } ?>
          </div>

         <ul class="footer_sns sp">
          <?php 
          if(!empty(get_field('contact')['facebook'])) { ?>
           <li>
             <a href="<?= get_field('contact')['facebook']; ?>" target="_blank" rel="noopener">
              <?php include('image/sns_facebook.php'); ?>
             </a>
           </li>
            <?php }
            if(!empty(get_field('contact')['instagram'])) { ?>
           <li>
             <a href="<?= get_field('contact')['instagram']; ?>" target="_blank" rel="noopener">
             <?php include('image/sns_instagram.php'); ?>
             </a>
           </li>
           <?php } ?>
         </ul>

         <ul class="footer_linkBox">
          <?php
          $ExternalLogo= get_field('external_logo_link');
          if(!empty($ExternalLogo)) {
          foreach($ExternalLogo as $logo){ ?>
            <?php 
            if(!empty($logo['external_logo'])) { ?>
           <li>
             <a href="<?= $logo['external_link']['url']; ?>" target="_blank" rel="noopener">
               <img src="<?= $logo['external_logo']['sizes']['medium']; ?>" alt="">
             </a>
           </li>
           <?php } } }?>
         </ul>
       </div>
     </footer>
   </div>
 </div>


<?php get_footer(); ?>
