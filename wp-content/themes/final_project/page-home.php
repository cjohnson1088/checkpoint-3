<?php
/*
Template Name: Home
*/
get_header(); ?>

<!-- MOBILE NAVIGATION -->
    <nav class="mobile-home-nav">
      <ul>
        <li><a href="http://www.caitlinaudreyjohnson.com/allure/index.html"><img src="assets/dist/img/allure-main-logo.png" alt="Allure Salon & Spa" title="Allure Salon & Spa"></a></li>
        <li><a href="http://www.caitlinaudreyjohnson.com/allure/salon-services.html">Salon Services</a></li>
        <li><a href="http://www.caitlinaudreyjohnson.com/allure/spa-services.html">Spa Services</a></li>
        <li><a href="#">Spa Packages</a></li>
        <li><a href="#">Our Blog</a></li>
      </ul>
    </nav>

    <!-- BACKGROUND IMAGE -->
    <img class="background background" src="<?php bloginfo('template_url'); ?>/assets/dist/img/red-hair-bg.jpg" alt="hello gorgeous" title="hello gorgeous">

    <!-- NAVIGATION -->
    <nav class="home-nav">
      <ul>
        <li><a href="http://www.caitlinaudreyjohnson.com/allure/salon-services.html">Salon Services</a></li>
        <li><a href="http://www.caitlinaudreyjohnson.com/allure/spa-services.html">Spa Services</a></li>
        <li><a href="http://www.caitlinaudreyjohnson.com/allure/index.html"><img src="assets/dist/img/allure-main-logo.png" alt="Allure Salon & Spa" title="Allure Salon & Spa"></a></li>
        <li><a href="http://www.caitlinaudreyjohnson.com/allure/spa-packages.html">Spa Packages</a></li>
        <li><a href="http://www.caitlinaudreyjohnson.com/allure/our-blog.html">Our Blog</a></li>
      </ul>
    </nav>

    <div class="homepage-heading-wrapper animated slideInLeft">
      <h1 id="homepage-heading"><span class="homepage-heading_hello">Hello</span> <span class="special-heading">Gorgeous</span></h1>
    </div>

    <!-- WELCOME -->
    <main id="home-main">
      <h2 class="centered">WELCOME</h2>
      <div class="pink-divider"></div>
      <div class="column-wrapper">
        <p class="column">Allure Salon, ideally situated in Aurora, between Naperville and Oswego, has been serving the western suburbs of Chicago since 2006. We offer traditional services such as Threading and Henna/Mehndi application, as well as Waxing, Facials, and a broad range of Hair services. </p>
        <p class="column">For hair, we use Redken and Matrix products and also have Biolage and Schwarzkopf products for sale in the salon. Feel free to browse the site and become familiar with our various salon and spa services.</p>
      </div>
    </main>

    <!-- THREADING -->
    <div class="card-wrapper threading">
      <div class="card">
        <div class="card-image">
          <img src="/assets/dist/img/threading-girl.jpg" alt="brow threading" title="brow threading">
        </div>
        <div class="card-content">
          <h3 class="centered">What is Threading?</h3>
          <div class="pink-divider"></div>
          <p>Threading is an ancient method of hair removal with origins in Arabia and South Asia. It is very delicate procedure, making it suitable for even the most sensitive skin. Threading is more effective and less painful than tweezing; hair re-growth becomes finer and sparser after regular treatments; and the top layers of skin are not peeled or traumatized in the process. Threading makes it easy to create a sharp and defined shape. Come in and try it today!</p>
        </div>
      </div>
    </div>

    <!-- BOOK TODAY -->
    <div class="card-wrapper booking">
      <div class="card">
        <div class="card-content">
          <h3 class="centered">BOOK your service TODAY!</h3>
          <div class="pink-divider"></div>
          <p>For more details in regards to booking a spa party or packages or to schedule an appointment, please call at (630) 499-8260 or e-mail at <a href="mailto:info@AllureSalonInAurora.com">info@AllureSalonInAurora.com»</a></p>
          <p class="centered">GIFT CERTIFICATES AVAILABLE IN STORE!</p>
        </div>
        <div class="card-image">
          <img src="/assets/dist/img/fun-pink-hair.jpg" alt="pink hair" title="pink hair">
        </div>
      </div>
    </div>

    <footer>
      <div class="grid">

    <!-- NEWSLETTER SIGN UP -->
        <form class="centered">
          <h4><span class="fancy">Sign up today</span> to recieve special deals!</h4>

          <div class="form-field">
            <div class="names">
              <label for="name" class="centered">FIRST NAME</label>
              <input class="centered" type="text" name="first name">
            </div>

            <div class="names">
              <label for="name" class="centered">LAST NAME</label>
              <input class="centered" type="text" name="last name">
            </div>
            <div class="email-wrapper">
              <label for="email" class="centered">E-MAIL</label>
              <input class="centered" type="email" name="e-mail">
            </div>

            <div class="submit-btn">
              <input type="submit" value="Submit">
            </div>
          </div>
        </form>

      <!-- LOCATION & HOURS -->
        <div class="location">
          <p class="centered">646 S Frontenac St unit 101</p>
              <p class="centered">Aurora, IL 60504</p>
          <p class="centered phone">PHONE: (630) 499-8260</p>
          <div class="times centered">
            <p>TUES - SAT</p><p>10AM to 7PM</p>
            <p>SUNDAY</p><p>12PM to 5PM</p>
            <p>MONDAY</p><p>CLOSED</p>
          </div>
        </div>

        <!-- SOCIAL MEDIA LINKS -->
        <div class="social-media-wrapper">
          <div class="social-media">
            <a href="http://www.facebook.com"><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg></a>
            <a href="http://www.instagram.com"><svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg></a>
            <a href="http://www.twitter.com"><svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg></a>
          </div>
        </div>
      </div>
          <p class="copywrite centered">ALLURE SALON & SPA &#169; 2017 | DESIGNED BY CAITLIN JOHNSON DESIGNS</p>
    </footer>

<?php get_footer(); ?>
