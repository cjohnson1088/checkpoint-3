<?php
/*
Template Name: Spa Packages
*/
get_header(); ?>

<div class="spa-packages-background-wrapper">
  <!-- NAVIGATION -->
    <nav class="pages-nav centered red">
      <ul>
        <li><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/allure-alt-logo-red.png"/></a></li>
        <?php html5blank_nav_left(); ?>
        <?php html5blank_nav_right(); ?>
      </ul>

      <!-- SOCIAL MEDIA LINKS -->
      <div class="sub-page-social-media">
        <a href="#"><svg class="icon icon-facebook red"><use xlink:href="#icon-facebook"></use></svg></a>
        <a href="#"><svg class="icon icon-instagram red"><use xlink:href="#icon-instagram"></use></svg></a>
        <a href="#"><svg class="icon icon-twitter red"><use xlink:href="#icon-twitter"></use></svg></a>
      </div>
    </nav>

    <div class="spa-packages-heading animated slideInLeft">
      <h1 id="spa-packages-heading"><span class="spa-packages-heading_spa">SPA</span> <span class="special-heading red">Packages</span></h1>
    </div>

    <main id="spa-packages-main">

      <div class="margin-auto">
        <div class="card-package-wrapper">

          <?php if(have_posts()):
            while(have_posts()):
              the_post(); ?>

          <!-- BRIDAL PACKAGE -->
          <div class="package-wrapper maroon">
            <div class="package">
              <div class="package-image">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="package-content">
                <h2><?php the_title(); ?></h2>
                <div class="pink-divider"></div>
                <div class="cenetered"><?php the_content(); ?></div>

                <!-- BOOK NOW BUTTON -->
                <div class="pink-book-now-wrapper">
                  <button type="button" class="pink-book-now">BOOK NOW</button>
                </div>
              </div>
            </div>
          </div>

        <?php endwhile; endif; ?>


        <article class="centered">
          <p>We also provide certain in-home services, such as Henna, Makeup, and Formal Style for the bride or groups of more than 5.</p>
          <h3>Check out OUR <span class="special"><a href="<?php bloginfo('url'); ?>/blog" alt="link to blog">Blog</a></span></h3>
          <p>to see examples of our previous up-do styles and makeup.</p>
        </article>
      </div>
    </main>

    <footer class="sub-page-footer red-footer">

      <!-- LOCATION & HOURS -->
      <div class="padding centered">
        <p>646 S Frontenac St unit 101,
          Aurora, IL 60504</p>
        <p>PHONE: (630) 499-8260</p>
      </div>

      <div class="grid centered">
        <p>TUES - SAT</p><p class="bold">10AM to 7PM</p>
        <p>SUNDAY</p><p class="bold">12PM to 5PM</p>
        <p>MONDAY</p><p class="bold">CLOSED</p>
      </div>

      <p class="copywrite">ALLURE SALON & SPA &#169; <?= date('Y'); ?> | DESIGNED BY CAITLIN JOHNSON DESIGNS</p>

    </footer>
</div>

<?php get_footer(); ?>
