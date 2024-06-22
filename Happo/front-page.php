<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<?php get_header(); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no,address=no,email=no">

  <title>THE HAPPO by Hakuba Hotel Group</title>
  <meta name="description" content="Sophisticated Onsen Retreat in the Centre of Happo in Nagano. THE HAPPO is Hakuba’s newest and most modern hotel–designed with the active, modern traveler in mind. Centrally located only two hundred meters from Happo One Resort, adventure is calling; and it is so close.">
  <link rel="icon" href="/image/favicon.svg" type="image/svg+xml">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,400;0,500;0,600;1,300&family=Poppins:wght@300&display=swap" rel="stylesheet">

  <!-- style CSS -->
  <link rel="stylesheet" href="/css/style.css?v=apr-16">

  <!-- OGP設定 -->
  <meta property="og:url" content="https://the-happo.hakuba.com/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="THE HAPPO by Hakuba Hotel Group">
  <meta property="og:description" content="Sophisticated Onsen Retreat in the Centre of Happo in Nagano. THE HAPPO is Hakuba’s newest and most modern hotel–designed with the active, modern traveler in mind. Centrally located only two hundred meters from Happo One Resort, adventure is calling; and it is so close.">
  <meta property="og:image" content="https://the-happo.hakuba.com/image/ogp.png">
  <meta property="og:site_name" content="THE HAPPO">

</head>

<body >
  <div class="mainFix">
    <button class="gNavBtn">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <nav class="gNav">
      <ul class="gNav_main">
        <li><a href="#about"><span class="_num">01</span>About THE HAPPO</a></li>
        <li><a href="#facilities"><span class="_num">02</span>Facilities</a></li>
        <li><a href="#roomType"><span class="_num">03</span>Room Type</a></li>
        <li><a href="#foodDrink"><span class="_num">04</span>Food & Drink</a></li>
        <li><a href="#activities"><span class="_num">05</span>Activities</a></li>
      </ul>
      <p class="gNav_by">by <br><a href="https://www.hakuba.com/" target="_blank" rel="noopener">www.hakuba.com</a></p>
      <ul class="gNav_sns">
        <li>
          <a href="https://www.facebook.com/Hakuba" target="_blank" rel="noopener">
            <img src="../image/sns_facebook.svg" alt="">
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/hakuba/" target="_blank" rel="noopener">
            <img src="/image/sns_instagram.svg" alt="">
          </a>
        </li>
      </ul>
      <p class="gNav_booking"><a href="https://be.synxis.com/?adult=2&chain=31179&hotel=42288&locale=en-US" target="_blank" rel="noopener">BOOKING</a></p>
    </nav>
    <div class="mainFix_bottomFix">
      <p class="mainFix_bottomFix_ttl"><?= get_field('footer_title');?></p>
      <a class="mainFix_bottomFix_booking" href="https://be.synxis.com/?adult=2&chain=31179&hotel=42288&locale=en-US" target="_blank" rel="noopener">BOOKING</a>
    </div>
    <div class="mainFix_topFix">
      <div class="mainFix_topFix_inner">
        <a class="mainFix_topFix_symbol" href="#main"><img src="<?= get_field('logo_main')['sizes']['large']; ?>);" alt=""></a>
        <ul class="mainFix_topFix_language">
          <li>EN</li>
          <li><a href="/jp/">JP</a></li>
          <!-- <li><a href="/ch/">CH</a></li> -->
        </ul>
      </div>
    </div>
    <p class="header_mv_catch pc"><?= get_field('bottom_fix_title');?></p>
  </div>
 <div class="main" id="main">
   <div class="container">
     <header class="header">
       <h1 class="header_logoType"><img src="<?php echo get_field('logo')['sizes']['large']; ?>);" alt="THE HAPPO"></h1>
       <div class="header_mv">
          <div class="hero_video">
             <div class="video">
               <iframe src="https://player.vimeo.com/video/704747174?background=1" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
            <nav class="header_mv_nav">
              <ul>
                <li><a href="#about"><span class="_num">01</span>THE HAPPO</a></li>
                <li><a href="#facilities"><span class="_num">02</span>Features</a></li>
                <li><a href="#roomType"><span class="_num">03</span>Rooms</a></li>
                <li><a href="#foodDrink"><span class="_num">04</span>Food & Drink</a></li>
                <li><a href="#activities"><span class="_num">05</span>Activities</a></li>
              </ul>
            </nav>
          </div>
        <p class="header_mv_catch"><?= get_field('bottom_fix_title');?></p>
       </div>
     </header>
     <section class="about" id="about">
       <div class="inner about scrollAnimation fadeIn">
         <p class="sec_num">*01*</p>
         <h2><?= get_field('about')['about_title']; ?></h2>
         <p class="about_read">
           <?= get_field('about')['about_text']; ?>
         </p>
       </div>
       <div class="about_infoBox about" style="background: url(<?= get_field('about')['about_img']['sizes']['2048x2048'];?>) center / cover no-repeat">
         <div class="scrollAnimation fadeIn c"><?= get_field('about')['about_info']; ?></div>
       </div>
     </section>

     <section class="facilities" id="facilities">
       <div class="scrollAnimation fadeIn">
         <p class="sec_num">*02*</p>
         <h2 class="sec_ttl">*FEATURES*</h2>
       </div>
       <?php
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
                $itemList= $section['type_a_list']; 
                foreach($itemList as $item) { ?>
                <li><?= $item['item']; ?></li>
                <?php } ?>
              </ul>
            </div>
          </section>
       <?php }
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
                $itemList= $section['type_b_list']; 
                foreach($itemList as $item) { ?>
                <li><?= $item['item']; ?></li>
                <?php } ?>
           </ul>
         </div>
       </section>
       <?php } ?>

       <ul class="facilities_feature inner scrollAnimation fadeIn">
         <?php 
            $section1Icons= get_field('section_1_icons');
              foreach($section1Icons as $iconContent) { ?>
              <li>
                <img src="<?= $iconContent['icon']['sizes']['large']; ?>" alt="">
                <p><?= $iconContent['icon_title']; ?></p>
                <p><?= $iconContent['icon_text']; ?></p>
              </li>
          <?php } ?>
       </ul>
     </section>
  
     <section class="roomType" id="roomType">
       <div class="roomType_inner inner-pc">
         <div class="scrollAnimation scrollAnimation fadeIn">
           <p class="sec_num">*03*</p>
           <h2 class="sec_ttl">*ROOM TYPES*</h2>
         </div>

         <ul class="roomType_list inner-sp">
            <?php 
              $section2TypeA= get_field('section_2_type_a');
                foreach($section2TypeA as $section) { ?>
                  <li class="scrollAnimation fadeIn">
                    <div>
                        <div class="owl-carousel owl-theme">
                        <?php 
                        $gallery= $section['type_a_gallery'];
                          foreach($gallery as $image) { ?>
                            <div class="three-two-ratio">
                                <img src="<?= $image['sizes']['large'];  ?>" alt="">
                              </div>
                        <?php } ?>
                          </div>
                          <p class="roomType_list_subTtl"><?= $section['type_a_sub_title']; ?></p>
                          <h3 class="roomType_list_contTtl"><?= $section['type_a_title_content']; ?></h3>
                          <p><?= $section['type_a_text']; ?></p>
                    </div>
                      <div class="roomType_list_infoBox">
                        <p><?= $section['type_a_info_box']; ?></p>
                        <a class="linkBtn" href="<?= $section['boton_1']['url']; ?>" target="_blank" rel="noopener"><?= $section['boton_1']['title']; ?></a>
                        <a class="linkBtn" href="<?= $section['boton_2']['url']; ?>" target="_blank" rel="noopener"><?= $section['boton_2']['title']; ?></a>
                      </div>
                    </li>
            <?php } 
              $section2TypeB= get_field('section_2_type_b');
                foreach($section2TypeB as $section) { ?>
                  <li class="_sweet scrollAnimation fadeIn">
                    <div class="owl-carousel owl-theme">
                      <?php 
                          $gallery= $section['type_b_gallery'];
                            foreach($gallery as $image) { ?>
                              <div class="three-two-ratio">
                                <img src="<?= $image['sizes']['large'];  ?>" alt="">
                              </div>
                      <?php } ?>
                    </div>
                    <div class="_sweet_textBox">
                      <p class="roomType_list_subTtl"><?= $section['type_b_sub_title']; ?></p>
                      <h3 class="roomType_list_contTtl"><?= $section['type_b_title_content']; ?></h3>
                      <p><?= $section['type_b_text']; ?></p>
                      <div class="roomType_list_infoBox">
                        <p><?= $section['type_b_info_box']; ?></p>
                        <a class="linkBtn" href="<?= $section['boton_1']['url']; ?>" target="_blank" rel="noopener"><?= $section['boton_1']['title']; ?></a>
                        <a class="linkBtn" href="<?= $section['boton_2']['url']; ?>" target="_blank" rel="noopener"><?= $section['boton_2']['title']; ?></a>
                      </div>
                    </div>
                  </li>
           <?php } ?>
         </ul>

         <div class="scrollAnimation fadeIn">
           <section class="roomType_amenities">
             <h3><?= get_field('list_container')['list_title']; ?></h3>
             <div class="roomType_amenities_container inner-sp">
               <ul class="roomType_amenities_list">
                <?php 
                $listContainer=get_field('list_container')['list'];
                foreach($listContainer as $item) { ?>
                 <li><?= $item['item'] ?></li>
                 <?php } ?>
               </ul>
             </div>
           </section>

           <section class="roomType_access">
             <h3>Access</h3>
             <div class="roomType_access_map inner-sp">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.89706421681!2d137.84087261528708!3d36.70101137996916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff7cf868115adb3%3A0xd1da5718f5cf3fe4!2sTHE%20HAPPO%20by%20Hakuba%20Hotel%20Group!5e0!3m2!1sen!2sjp!4v1636695102994!5m2!1sen!2sjp" width="770" height="352" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             </div>
             <p class="roomType_access_mapLink inner-sp"><a href="https://goo.gl/maps/9ivVqzoL26VqKSdR6" target="_blank" rel="noopener">Google Map</a></p>
           </section>
         </div>
       </div>
     </section>

     <section class="foodDrink inner" id="foodDrink">
       <div class="scrollAnimation fadeIn">
         <p class="sec_num">*04*</p>
         <h2 class="sec_ttl">*FOOD & DRINK*</h2>
       </div>

       <?php
         $section3TypeA= get_field('section_3_type_a');
         foreach($section3TypeA as $section) { ?>
            <section class="foodDrink_sec food scrollAnimation">
              <div class="foodDrink_imgBox">
                <img class="js_rellax scrollAnimation fadeIn02" src="<?= $section['type_a_image']['sizes']['large'];  ?>" alt="">
              </div>
              <div class="foodDrink_contBox scrollAnimation fadeIn">
                <h3><img src="<?= $section['type_a_title_image']['sizes']['large'];  ?>" alt=""></h3>
                <div class="foodDrink_textBox">
                  <p><?= $section['type_a_text_1'];  ?></p>
                  <p><?= $section['type_a_text_2'];  ?></p>
                  <p></p>
                  <a class="linkBtn" href="<?= $section['boton']['url'];  ?>" target="_blank" rel="noopener"><?= $section['boton']['title'];  ?></a>
                </div>
              </div>
            </section>
        <?php } ?>
        <?php
        $section3TypeB= get_field('section_3_type_b'); 
        foreach($section3TypeB as $section) { ?>  
            <section class="foodDrink_sec drink scrollAnimation">
              <div class="foodDrink_imgBox">
                <div class="owl-carousel owl-theme js_rellax scrollAnimation fadeIn02">
                  <?php
                  $gallery = $section['type_b_gallery']; 
                  foreach($gallery as $image) { ?>
                  <div class="cb-ratio">
                    <img src="<?= $image['sizes']['large']; ?>" alt="">
                  </div>
                  <?php } ?>
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
        <?php } ?>    
     </section>

     <section class="activities" id="activities">
       <div class="scrollAnimation fadeIn">
         <p class="sec_num">*05*</p>
         <h2 class="sec_ttl">*ACTIVITIES*</h2>
         <p class="activities_read inner"><?= get_field('section_4')['section_4_text']; ?></p>
       </div>

       <div class="activities_sliderWrap">
         <div class="activities_slider swiper-container">
           <div class="swiper-wrapper">
            <?php
            $gallerySlide = get_field('section_4')['section_4_gallery'];
            foreach($gallerySlide as $image) { ?>
             <div class="swiper-slide"><img src="<?=  $image['sizes']['large']; ?>" alt=""></div>
             <?php } ?>
           </div>
         </div>
       </div>

       <a class="activities_link" href="<?= get_field('section_4')['section_4_link']; ?>" target="_blank" rel="noopener"><?= get_field('section_4')['section_4_link_text']; ?></a>
     </section>

     <section class="booking">
       <div class="booking_contBox scrollAnimation fadeIn">
         <div class="booking_contBox_inner">
           <h2 class="booking_ttl">BOOKING</h2>
           <p class="booking_read">Click Book Now below to book your Hakuba <br>Holiday today or email us at <br><a href="mailto:bookings@hakubahotelgroup.com">bookings@hakubahotelgroup.com</a> to speak to a member of our team. We look forward to hearing from you.</p>
           <a class="linkBtn" href="https://be.synxis.com/?adult=2&chain=31179&hotel=42288&locale=en-US" target="_blank" rel="noopener">BOOK NOW</a>
         </div>
       </div>
       <div class="booking_imgBox01"><img src="/image/booking01.jpg" alt=""></div>
       <div class="booking_imgBox02"><img src="/image/booking02.jpg" alt=""></div>
     </section>

     <footer class="footer">
       <nav class="footer_nav">
         <ul>
           <li><a href="#about">About Hotel</a></li>
           <li><a href="#facilities">Facilities</a></li>
           <li><a href="#roomType">Room Type</a></li>
           <li><a href="#foodDrink">Food & Drink</a></li>
           <li><a href="#activities">Activities</a></li>
         </ul>
         <ul class="footer_nav_sns">
           <li>
             <a href="https://www.facebook.com/Hakuba" target="_blank" rel="noopener">
               FACEBOOK
             </a>
           </li>
           <li>
             <a href="https://www.instagram.com/hakuba/" target="_blank" rel="noopener">
               INSTAGRAM
             </a>
           </li>
         </ul>
       </nav>

       <div class="footer_container">
         <div class="footer_cont01">
           <p class="footer_logo"><a href="#main"><img src="/image/footer_logo.svg" alt="THE HAPPO"></a></p>
           <address class="footer_address">
             <p>
               THE HAPPO by Hakuba Hotel Group <br>
               5090-1, Hokujo, Hakuba, Kitaazumi District <br>
               Nagano JAPAN 399-9301
             </p>
             <p><a class="underline" href="https://goo.gl/maps/9ivVqzoL26VqKSdR6" target="_blank" rel="noopener">(Google Map)</a></p>
             <p class="footer_tel"><a href="tel:">Tel : 0261-75-5511</a></p>
             <p><a href="mailto:bookings@hakubahotelgroup.com">Mail : bookings@hakubahotelgroup.com</a></p>
           </address>
         </div>

         <div class="footer_cont02">
           <p>Book direct today for the <br>guaranteed best rates at THE HAPPO.</p>
           <a class="linkBtn" href="https://be.synxis.com/?adult=2&chain=31179&hotel=42288&locale=en-US" target="_blank" rel="noopener">BOOKING</a>
         </div>

         <ul class="footer_sns sp">
           <li>
             <a href="https://www.facebook.com/Hakuba" target="_blank" rel="noopener">
               <img src="/image/sns_facebook.svg" alt="">
             </a>
           </li>
           <li>
             <a href="https://www.instagram.com/hakuba/" target="_blank" rel="noopener">
               <img src="/image/sns_instagram.svg" alt="">
             </a>
           </li>
         </ul>

         <ul class="footer_linkBox">
           <li>
             <a href="http://phoenixhotel.jp/" target="_blank" rel="noopener">
               <picture>
                 <source media="(max-width:767px)" srcset="/image/link_phenix_sp.png">
                 <img src="/image/link_phenix.png" alt="">
               </picture>
             </a>
           </li>
           <li>
             <a href="https://hakubahotelgroup.com/" target="_blank" rel="noopener">
               <picture>
                 <source media="(max-width:767px)" srcset="/image/link_hakuba.png">
                 <img src="/image/link_hakuba.png" alt="">
               </picture>
             </a>
           </li>
           <li>
             <a href="https://www.hakuba.com/" target="_blank" rel="noopener">
               <img src="/image/link_hkubacom.png" alt="hkuba.com">
             </a>
           </li>
         </ul>
       </div>
     </footer>
   </div>
 </div>


<?php get_footer(); ?>
