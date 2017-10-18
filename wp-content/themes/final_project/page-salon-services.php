<?php
/*
Template Name: Salon Services
*/
get_header(); ?>

<!-- NAVIGATION -->
<nav class="pages-nav centered">
  <a href="http://www.caitlinaudreyjohnson.com/allure/index.html"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/allure-alt-logo-maroon.png" alt="Allure Salon & Spa" title="Allure Salon & Spa"></a>
  <ul>
    <li><a href="http://www.caitlinaudreyjohnson.com/allure/salon-services.html" id="current-page">Salon Services</a></li>
    <li><a href="http://www.caitlinaudreyjohnson.com/allure/spa-services.html">Spa Services</a></li>
    <li><a href="http://www.caitlinaudreyjohnson.com/allure/spa-packages.html">Spa Packages</a></li>
    <li><a href="http://www.caitlinaudreyjohnson.com/allure/our-blog.html">Our Blog</a></li>
  </ul>

  <!-- SOCIAL MEDIA LINKS -->
  <div class="sub-page-social-media">
    <a href="http://www.facebook.com"><svg class="icon icon-facebook"><use xlink:href="<?php bloginfo('template_url'); ?>#icon-facebook"></use></svg></a>
    <a href="http://www.instagram.com"><svg class="icon icon-instagram"><use xlink:href="<?php bloginfo('template_url'); ?>#icon-instagram"></use></svg></a>
    <a href="http://www.twitter.com"><svg class="icon icon-twitter"><use xlink:href="<?php bloginfo('template_url'); ?>#icon-twitter"></use></svg></a>
  </div>
</nav>

<!-- SALON SERVICES -->
<div class="salon-services-wrapper">
  <h1 class="centered">SALON SERVICES</h1>
  <div class="pink-divider"></div>

  <div class="salon-services-column">
    <h2>HAIRCUTS & STYLING</h2>
    <ul>
      <li>Women's Haircut -  $15 & Up</li>
      <li>Men's Haircut -  $12</li>
      <li>Kid's Haircut -  $8</li>
      <li>Shampoo and Haircut -  $20 & Up</li>
      <li>Shampoo, Cut and Style -  $40</li>
      <li>Shampoo, Blow-Dry and Style -  $30</li>
      <li>Scalp Massage -  $25</li>
      <li>Scalp Massage w/ Shampoo -  $30</li>
      <li>Formal Style -  $30 & Up</li>
    </ul>

    <h2>COLOR</h2>
    <ul>
      <li>Color Change -  $50 & Up</li>
      <li>Full Hair Color -  $40 & Up</li>
      <li>Color Touch-up -  $30</li>
      <li>Henna Color -  $35</li>
      <li>Partial Highlights -  $45 & Up</li>
      <li>Full Highlights -  $75 & Up</li>
      <li>Men's Color -  $25</li>
    </ul>

    <h2>TREATMENTS</h2>
    <ul>
      <li>Permanent Straightening -  $80 & Up</li>
    </ul>
  </div>

  <!-- BOOK NOW BUTTON -->
  <div class="red-book-now-wrapper centered">
    <button type="button" class="red-book-now">BOOK NOW</button>
  </div>
</div>

<footer class="sub-page-footer maroon-footer">

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

  <p class="copywrite centered">ALLURE SALON & SPA &#169; 2017 | DESIGNED BY CAITLIN JOHNSON DESIGNS</p>

</footer>

<?php get_footer(); ?>
