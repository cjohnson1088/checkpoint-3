<?php
/*
Template Name: Spa Packages
*/
get_header(); ?>

<!-- NAVIGATION -->
  <nav class="pages-nav centered red">
    <a href="http://www.caitlinaudreyjohnson.com/allure/index.html"><img src="/assets/dist/img/allure-alt-logo-red.png" alt="Allure Salon & Spa" title="Allure Salon & Spa"></a>
    <ul>
      <li><a href="http://www.caitlinaudreyjohnson.com/allure/salon-services.html">Salon Services</a></li>
      <li><a href="http://www.caitlinaudreyjohnson.com/allure/spa-services.html">Spa Services</a></li>
      <li><a href="http://www.caitlinaudreyjohnson.com/allure/spa-packages.html" id="current-page">Spa Packages</a></li>
      <li><a href="http://www.caitlinaudreyjohnson.com/allure/our-blog.html">Our Blog</a></li>
    </ul>

    <!-- SOCIAL MEDIA LINKS -->
    <div class="sub-page-social-media">
      <a href="http://www.facebook.com"><svg class="icon icon-facebook red"><use xlink:href="#icon-facebook"></use></svg></a>
      <a href="http://www.instagram.com"><svg class="icon icon-instagram red"><use xlink:href="#icon-instagram"></use></svg></a>
      <a href="http://www.twitter.com"><svg class="icon icon-twitter red"><use xlink:href="#icon-twitter"></use></svg></a>
    </div>
  </nav>

  <div class="spa-packages-heading animated slideInLeft">
    <h1 id="spa-packages-heading"><span class="spa-packages-heading_spa">SPA</span> <span class="special-heading red">Packages</span></h1>
  </div>

  <main id="spa-packages-main">

    <div class="margin-auto">
      <div class="card-package-wrapper">

        <!-- BRIDAL PACKAGE -->
        <div class="package-wrapper maroon">
          <div class="package">
            <div class="package-image">
              <img src="/assets/dist/img/wedding-hair.jpg" alt="wedding hair" title="wedding hair">
            </div>
            <div class="package-content">
              <h2>BRIDAL PACKAGE</h2>
              <div class="pink-divider"></div>
              <p class="cenetered">Toning, Full Face Wax/Thread, Facial, Makeup, Up-do,
                Dupatta/Veil & Jewelry Setting.</p>
              <p class="centered">$250</p>

              <!-- BOOK NOW BUTTON -->
              <div class="pink-book-now-wrapper">
                <button type="button" class="pink-book-now">BOOK NOW</button>
              </div>
            </div>
          </div>
        </div>

        <!-- MEGA BRIDAL PACKAGE -->
        <div class="package-wrapper red">
          <div class="package">
            <div class="package-image">
              <img src="/assets/dist/img/mega-bridal.jpg" alt="wedding hair" title="wedding hair">
            </div>
            <div class="package-content">
              <h2>MEGA BRIDAL PACKAGE</h2>
              <div class="pink-divider"></div>
              <p class="cenetered">Full Body Wax, Gold Facial, Full Face Wax/Thread,
                Toning, Bridal Henna, Makeup, Up-do, Dupatta/Veil,
                and Jewelry Setting.</p>
              <p class="centered">$450</p>

              <!-- BOOK NOW BUTTON -->
              <div class="pink-book-now-wrapper">
                <button type="button" class="pink-book-now">BOOK NOW</button>
              </div>
            </div>
          </div>
        </div>

        <!--BRIDESMAID OR PROM PACKAGES -->
        <div class="package-wrapper maroon">
          <div class="package">
            <div class="package-image">
              <img src="/assets/dist/img/prom.jpeg" alt="prom hair" title="prom hair">
            </div>
            <div class="package-content">
              <h2>BRIDESMAID OR PROM PACKAGES</h2>
              <div class="pink-divider"></div>
              <p class="cenetered">Please contact us at (630) 499-8260</p>

              <!-- BOOK NOW BUTTON -->
              <div class="pink-book-now-wrapper">
                <button type="button" class="pink-book-now">BOOK NOW</button>
              </div>
            </div>
          </div>
        </div>
      </div>


      <article class="centered">
        <p>We also provide certain in-home services, such as Henna, Makeup, and Formal Style for the bride or groups of more than 5.</p>
        <h3>Check out OUR <span class="special"><a href="#" alt="link to blog">Blog</a></span></h3>
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

    <p class="copywrite">ALLURE SALON & SPA &#169; 2017 | DESIGNED BY CAITLIN JOHNSON DESIGNS</p>

  </footer>

  <script>
    $.backstretch("/assets/dist/img/salon-decor.jpeg");
  </script>

<?php get_footer(); ?>
