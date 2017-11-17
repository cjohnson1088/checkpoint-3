<?php
/*
Template Name: Salon Services
*/
get_header(); ?>

<div class="salon-services-background-wrapper">

    <!-- NAVIGATION -->
    <nav class="pages-nav centered">
      <ul>
        <li><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/allure-alt-logo-maroon.png"/></a></li>
        <?php html5blank_nav_left(); ?>
        <?php html5blank_nav_right(); ?>
      </ul>

      <!-- SOCIAL MEDIA LINKS -->
      <div class="sub-page-social-media">
        <a href="http://www.facebook.com"><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg></a>
        <a href="http://www.instagram.com"><svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg></a>
        <a href="http://www.twitter.com"><svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg></a>
      </div>
    </nav>

    <!-- SALON SERVICES -->
    <div class="salon-services-wrapper">
      <h1 class="centered">SALON SERVICES</h1>
      <div class="pink-divider"></div>

      <div class="salon-services-column">
        <?php $haircuts = get_field('haircuts_&_styling');
          if ($haircuts) { ?>
        <h2>HAIRCUTS & STYLING</h2>
        <ul>
            <?php foreach($haircuts as $one) { ?>
          <li><?php echo $one['service'] ?> -  <?php echo $one['price']; ?></li>
          <?php } ?>
        </ul>
        <?php } ?>

        <?php $color = get_field('color');
          if ($color) { ?>
        <h2>COLOR</h2>
        <ul>
            <?php foreach($color as $one) { ?>
          <li><?php echo $one['service'] ?> -  <?php echo $one['price']; ?></li>
          <?php } ?>
        </ul>
        <?php } ?>

        <?php $treatments = get_field('treatments');
          if ($treatments) { ?>
        <h2>TREATMENTS</h2>
        <ul>
            <?php foreach($treatments as $one) { ?>
          <li><?php echo $one['service'] ?> -  <?php echo $one['price']; ?></li>
          <?php } ?>
        </ul>
        <?php } ?>
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

      <p class="copywrite centered">ALLURE SALON & SPA &#169; <?= date('Y'); ?> | DESIGNED BY CAITLIN JOHNSON DESIGNS</p>

    </footer>
  </div>
<?php get_footer(); ?>
