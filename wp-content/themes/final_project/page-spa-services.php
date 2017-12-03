<?php
/*
Template Name: Spa Services
*/
get_header(); ?>

<div class="spa-services-background-wrapper">

<!-- NAVIGATION -->
    <nav class="pages-nav centered">
      <ul>
        <li><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/allure-alt-logo-pink.png"/></a></li>
        <?php html5blank_nav_left(); ?>
        <?php html5blank_nav_right(); ?>
      </ul>

      <!-- SOCIAL MEDIA LINKS -->
      <div class="sub-page-social-media">
        <a href="http://www.facebook.com"><svg class="icon icon-facebook pink"><use xlink:href="#icon-facebook"></use></svg></a>
        <a href="http://www.instagram.com"><svg class="icon icon-instagram pink"><use xlink:href="#icon-instagram"></use></svg></a>
        <a href="http://www.twitter.com"><svg class="icon icon-twitter pink"><use xlink:href="#icon-twitter"></use></svg></a>
      </div>
    </nav>

    <!-- SALON SERVICES -->
    <div class="spa-services-wrapper">
      <h1 class="centered">SPA SERVICES</h1>
      <div class="pink-divider"></div>

      <div class="spa-services-column-wrapper">

        <ul class="spa-services-column">
          <h2>HAIR REMOVAL</h2>
          <li>Eyebrow Threading -  $5</li>
          <li>Eyebrow Waxing -  $6</li>
          <li>Upper Lip -  $3</li>
          <li>Chin -  $4 & Up</li>
          <li>Sideburns -  $7</li>
          <li>Forehead -  $4</li>
          <li>Full Face -  $20</li>
          <li>Under Arms -  $8</li>
          <li>Half Arms -  $15</li>
          <li>Full Arms -  $20</li>
          <li>Half Legs -  $20</li>
          <li>Full Legs -  $35</li>
          <li>Bikini Line -  $15</li>
          <li>Brazilian -  $40</li>
          <li>Stomach -  $20</li>
          <li>Full Back -  $25</li>
          <li>Full Body & Bikini -  $140</li>
          <li>Men's Chest -  $40</li>
          <li>Men's Back & Shoulders -  $40</li>
        </ul>

        <ul class="spa-services-column">
          <h2>FACIALS</h2>
          <li>Herbal Facial -  $30</li>
          <li>Fruit Facial -  $30</li>
          <li>Back Facial -  $50</li>
          <li>Anti-Acne Facial -  $50</li>
          <li>Anti-Aging -  $60</li>
          <li>Vitamin C Facial -  $60</li>
          <li>Four Layer Facial -  $60</li>
          <li>Janssen Whitening Facial -  $60</li>
          <li>Shahnaz Men's Facial -  $45</li>
          <li>Shahnaz Gold -  $45</li>
          <li>Shahnaz Neem -  $35</li>
          <li>Shahnaz Diamond -  $50</li>
          <li>Shahnaz Pearl -  $50</li>

          <h2>ADDITIONAL SERVICES</h2>
          <li>Face Polish -  $10</li>
          <li>30 Minute Massage -  $40 & Up</li>
          <li>Henna Tattoos -  $5 & Up</li>
          <li>Party Makeup & Formal Style -  $75</li>
          <li>Ear or Nose Piercing -  $15</li>
        </ul>
      </div>

      <!-- BOOK NOW BUTTON -->
      <div class="red-book-now-wrapper centered">
        <button type="button" class="red-book-now">BOOK NOW</button>
      </div>
    </div>

    <footer class="sub-page-footer pink-footer">

      <!-- LOCATION & HOURS -->
      <div class="padding centered">
        <p>646 S Frontenac St unit 101,
          Aurora, IL 60504</p>
        <p class="phone">PHONE: (630) 499-8260</p>
      </div>

      <div class="grid centered">
        <p>TUES - SAT</p><p class="bold">10AM to 7PM</p>
        <p>SUNDAY</p><p class="bold">12PM to 5PM</p>
        <p>MONDAY</p><p class="bold">CLOSED</p>
      </div>

      <p class="copywrite centered">ALLURE SALON & SPA &#169; <?= date('Y'); ?> | DESIGNED BY CAITLIN JOHNSON DESIGNS</p>

    </footer>
</div>

<?php get_footer(); ?>
