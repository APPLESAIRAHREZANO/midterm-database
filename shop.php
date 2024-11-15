<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coffee Website | CodingNepal</title>
    <!-- Linking Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <!-- Linking Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <!-- Header / Navbar -->
    <header>
      <nav class="navbar">
        <a href="landing_page.php" class="nav-logo">
          <h2 class="logo-text">☕Ple's Coffee</h2>
        </a>

        <ul class="nav-menu">
          <button id="menu-close-button" class="fas fa-times"></button>

          <li class="nav-item">
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#menu" class="nav-link">Menu</a>
          </li>
          <li class="nav-item">
            <a href="#testimonials" class="nav-link">Testimonials</a>
          </li>
          <li class="nav-item">
            <a href="#gallery" class="nav-link">Gallery</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
          <li class="nav-item">
    <a href="index.php" class="nav-link">
      <i class="fas fa-sign-out-alt"></i>
    </a>
  </li>
        </ul>

        <button id="menu-open-button" class="fas fa-bars"></button>
      </nav>
    </header>

    <main>
      <!-- Hero section -->
      <section class="hero-section">
        <div class="section-content">
          <div class="hero-details">
            <h2 class="title">The Best Coffee!</h2>
            <h3 class="subtitle">Enjoy a great start with our coffee!</h3>
            <p class="description">Step into our coffee paradise, where every sip brings warmth and every bean has a story to tell.</p>

            <div class="buttons">
              <a href="#menu" class="button order-now">Order Now</a>
              <a href="#contact" class="button contact-us">Contact Us</a>
            </div>
          </div>
          <div class="hero-image-wrapper">
            <img src="https://wallpapers.com/images/hd/hot-coffee-in-a-coffee-cup-with-coffee-beans-tjr1dy5o0lazx2pc.jpg" />
          </div>
        </div>
      </section>

      <!-- About section -->
      <section class="about-section" id="about">
        <div class="section-content">
          <div class="about-image-wrapper">
            <img src="https://w0.peakpx.com/wallpaper/270/886/HD-wallpaper-cups-with-coffee-latte-art-coffee-grains-black-coffee.jpg" />
          </div>
          <div class="about-details">
            <h2 class="section-title">About Us</h2>
            <p class="text">Welcome to My Coffee Shop, where every cup is made with love and every visit feels special. Whether you're here for a quick pick-me-up or a peaceful retreat, we’ve got the perfect brew and a cozy space waiting for you. Sit back, relax, and savor the moment!</p>
            <div class="social-link-list">
              <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
              <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
              <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
          </div>
        </div>
      </section>

<!-- Menu Section -->
<section class="menu-section" id="menu">
  <h2 class="section-title">Our Menu</h2>
  <div class="section-content">
    <ul class="menu-list">
      <li class="menu-item">
      <img src="https://images.immediate.co.uk/production/volatile/sites/30/2022/04/Iced-Caramel-Macchiato-f4a10f9.jpg?quality=90&resize=556,505" />
        <div class="menu-details">
          <h3 class="name">Cold Beverages</h3>
          <p class="text">Wide range of iced coffee to make you fresh and light.</p>
          <button class="add-to-cart" data-item-id="1" data-item-name="Cold Beverages" data-item-price="95">
            <i class="fa fa-shopping-cart"></i> ₱95 Add to Cart
          </button>
        </div>
      </li>
      <li class="menu-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2JBPXNOTgT8Q5tzhDXcv-3eVG98m0a4Sy0npXKFarNh7_WcaHZDv8d680PsoLBM5yBjM&usqp=CAU" alt="Cold Beverages" class="menu-image" />
        <div class="menu-details">
          <h3 class="name">Refreshment</h3>
          <p class="text">Creamy and frothy cold coffee to make you cool.</p>
          <button class="add-to-cart" data-item-id="2" data-item-name="Refreshment" data-item-price="85">
            <i class="fa fa-shopping-cart"></i> ₱85 Add to Cart
          </button>
        </div>
      </li>
      <li class="menu-item">
        <img src="https://www.tasteofhome.com/wp-content/uploads/2018/01/Mocha-Morning-Drink_EXPS_BMZ17_17904_C10_28_1b.jpg" alt="Refreshment" class="menu-image" />
        <div class="menu-details">
          <h3 class="name">Hot Beverages</h3>
          <p class="text">Fruit and icy refreshing drink to make you feel refreshed.</p>
          <button class="add-to-cart" data-item-id="3" data-item-name="Cold Beverages" data-item-price="95">
            <i class="fa fa-shopping-cart"></i> ₱95 Add to Cart
          </button>
        </div>
      </li>
      <li class="menu-item">
        <img src="https://prettysweetblog.com/wp-content/uploads/2021/01/No-bake-chocolate-hazelnut-dessert-in-a-glass-1-2.jpg" />
        <div class="menu-details">
          <h3 class="name">Dessert</h3>
          <p class="text">Your favorite eating and drinking combinations.</p>
          <button class="add-to-cart" data-item-id="4" data-item-name="Dessert" data-item-price="75">
            <i class="fa fa-shopping-cart"></i> ₱75 Add to Cart
          </button>
        </div>
      </li>
      <li class="menu-item">
        <img src="https://www.tasteofhome.com/wp-content/uploads/2019/05/Fried-Ice-Cream-Dessert-Bars-_EXPS_SDJJ19_232652_B02_06_1b_rms-2.jpg" />
        <div class="menu-details">
          <h3 class="name">Special Combos</h3>
          <p class="text">Satiate your palate with a culinary treat.</p>
          <button class="add-to-cart" data-item-id="5" data-item-name="Special Combos" data-item-price="85">
            <i class="fa fa-shopping-cart"></i> ₱85 Add to Cart
          </button>
        </div>
      </li>
      <li class="menu-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRliXy4u0CtFTEVJgwG6oui4mxd9DyLyuAlFA&s" alt="Burger & French Fries" class="menu-image" />
        <div class="menu-details">
          <h3 class="name">Burger & French Fries</h3>
          <p class="text">Quick bites to satisfy your small hunger.</p>
          <button class="add-to-cart" data-item-id="6" data-item-name="Burger & French Fries" data-item-price="75">
            <i class="fa fa-shopping-cart"></i> ₱75 Add to Cart
          </button>
        </div>
      </li>
    </ul>
  </div>
</section>

 <!-- index.php or your order form file -->

<div id="buyNowModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Order Summary</h2>
      <div id="modalItemDetails"></div>
      
      <!-- Address and Contact Information Form -->
      <div class="form-container">
        <form action="assets/db/orders.php" method="POST"> <!-- Form now submits to orders.php -->
          <div class="form-group">
            <label for="customerName">Full Name</label>
            <input type="text" id="customerName" name="customerName" placeholder="Enter your full name" required />
          </div>
          <div class="form-group">
            <label for="contactNumber">Contact Number</label>
            <input type="text" id="contactNumber" name="contactNumber" placeholder="Enter your contact number" required />
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <textarea id="address" name="address" placeholder="Enter your delivery address" required></textarea>
          </div>
          <div class="form-group">
            <label for="additionalDetails">Additional Details (Optional)</label>
            <textarea id="additionalDetails" name="additionalDetails" placeholder="Add any special requests or details"></textarea>
          </div>
          
          <!-- Buy Now Button -->
          <button type="submit" id="confirmPurchase">Buy Now</button>
        </form>
      </div>
    </div>
</div>




      <!-- Testimonials section -->
      <section class="testimonials-section" id="testimonials">
        <h2 class="section-title">Testimonials</h2>
        <div class="section-content">
          <div class="slider-container swiper">
            <div class="slider-wrapper">
              <ul class="testimonials-list swiper-wrapper">
                <li class="testimonial swiper-slide">
                  <img src="https://scontent.fcgy2-2.fna.fbcdn.net/v/t39.30808-6/396731967_1588758568618398_1931769674980921663_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeE8RIc8Xv6jcQ1Qbj825fesxTZzzsgDrcbFNnPOyAOtxgriZPX4aGUmdFT1XXI1_x_Kf7WKZcr-vrEtojp-4vxj&_nc_ohc=uwmCRmwy03MQ7kNvgHrrplF&_nc_zt=23&_nc_ht=scontent.fcgy2-2.fna&_nc_gid=AXlJ7BzoNenJystVvB0VEv0&oh=00_AYAH85E5yTeAHfi-iMOOyjAKr8wyqkGMeBwi988aJi5RQg&oe=673AC319" alt="User" class="user-image" />
                  <h3 class="name">Angel P. Sortones</h3>
                  <i class="feedback">"Loved the French roast. Perfectly balanced and rich. Will order again!"</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="https://scontent.fmnl4-2.fna.fbcdn.net/v/t39.30808-6/357416257_237886249032957_3370677851442110349_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=f727a1&_nc_eui2=AeGiLwNsv1wG8c1OqOyWvAOzsAmdQ4f-33iwCZ1Dh_7feAmvsz0PvFmxhJIRjSBIciCvdWfrxdxbpNnP9EXzttle&_nc_ohc=E4sMaoGZOyEQ7kNvgFvF40-&_nc_zt=23&_nc_ht=scontent.fmnl4-2.fna&_nc_gid=AhRoDaTJ7d_y9Sb2V1vuFj_&oh=00_AYBRlLNCWVGeJqGwPGmgNvo0Qw_2B9I8maNo-EJs_Y5-hQ&oe=673D229F" alt="User" class="user-image" />
                  <h3 class="name">Alieza Balles</h3>
                  <i class="feedback">"Great espresso blend! Smooth and bold flavor. Fast shipping too!"</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="https://scontent.fmnl9-6.fna.fbcdn.net/v/t39.30808-6/344346018_1264952570783722_895972171493154087_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeHaE8ZqTZJZu2oN7csJxHH5Icvw4A1f8Qkhy_DgDV_xCZsswmdaqvxCu_WUodZ16uEjeaX4SOzrjFdHAP-NGTZ5&_nc_ohc=Ho5KIJlh-mUQ7kNvgHN2bKW&_nc_zt=23&_nc_ht=scontent.fmnl9-6.fna&_nc_gid=AYBPBWxArxQG7zogzj802uM&oh=00_AYDGgcAtzR7DqJQA81Ger_2x0jjIZzE6zmgiLvZVL96Drg&oe=673AB72B" alt="User" class="user-image" />
                  <h3 class="name">Jolina Mata</h3>

                  <i class="feedback">"Fantastic mocha flavor. Fresh and aromatic. Quick shipping!"</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t39.30808-6/361836391_1661169181066780_8634772241870373780_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeFz9VYhGxtd8717qzWryP2fuGutPiwB1pa4a60-LAHWlmF536G2kbghTTCxKd8pE0L9cXPhE8EhUyaQDVZMiZiI&_nc_ohc=hUQ2KRMpAWkQ7kNvgF64DdD&_nc_zt=23&_nc_ht=scontent.fmnl9-1.fna&_nc_gid=AAW96fJJNO8fkoTKnaVEcdO&oh=00_AYAl440xVwPM87-EtTurhtzrWo-hUsmhjaDFcMl7Bv0FBg&oe=673A9F81" alt="User" class="user-image" />
                  <h3 class="name">Analou Bayoc</h3>

                  <i class="feedback">"Excellent quality! Fresh beans and quick delivery. Highly recommend."</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t39.30808-6/308957346_1423362175152726_3889809543817677348_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeG8bVYF-FKsBi8l1T-MFhPj_mcpEvbQr2L-ZykS9tCvYicVrdxXnGDw-tCy_M_3e1DQMvFzBAwlNQ26PcbWNDus&_nc_ohc=P6sO3MUu1XcQ7kNvgEelWPE&_nc_zt=23&_nc_ht=scontent.fmnl9-1.fna&_nc_gid=Az1waXXBXNkbAnKSR_edePb&oh=00_AYDmozeEjzbpnjiu61JPg7HyiT3sI8CDjhj2595uF7ueag&oe=673AA032" alt="User" class="user-image" />
                  <h3 class="name">Jovelyn Benanlao</h3>

                  <i class="feedback">"Best decaf I've tried! Smooth and flavorful. Arrived promptly."</i>
                </li>
              </ul>

              <div class="swiper-pagination"></div>
              <div class="swiper-slide-button swiper-button-prev"></div>
              <div class="swiper-slide-button swiper-button-next"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Gallery section -->
      <section class="gallery-section" id="gallery">
        <h2 class="section-title">Gallery</h2>
        <div class="section-content">
          <ul class="gallery-list">
            <li class="gallery-item">
              <img src="https://chopnotch.com/wp-content/uploads/2020/11/Panna-Cotta-1-500x375.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="https://www.tasteofhome.com/wp-content/uploads/2019/05/Fried-Ice-Cream-Dessert-Bars-_EXPS_SDJJ19_232652_B02_06_1b_rms-2.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="https://nutricia.com.au/fortisip/wp-content/uploads/sites/8/2020/09/Forticreme-Chocolate-Chocolate-Layered-Dessert-1-scaled.jpeg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="https://www.somewhatsimple.com/wp-content/uploads/2022/05/fourth-of-july-drinks-recipe.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="https://cdn.dotpe.in/longtail/store-items/1332303/IX4B7CFe.jpeg" alt="Gallery Image" class="gallery-image" />
            </li>
            <li class="gallery-item">
              <img src="https://img.freepik.com/premium-photo/steaming-hot-coffee-with-creamy-milk-layer_1029375-3734.jpg" alt="Gallery Image" class="gallery-image" />
            </li>
          </ul>
        </div>
      </section>

      <!-- Contact section -->
      <section class="contact-section" id="contact">
        <h2 class="section-title">Contact Us</h2>
        <div class="section-content">
          <ul class="contact-info-list">
            <li class="contact-info">
              <i class="fa-solid fa-location-crosshairs"></i>
              <p>Lingion Manolo Fortich, Bukidnon</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-envelope"></i>
              <p>apple@coffeeweb.com</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-phone"></i>
              <p>09079348616</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Monday - Friday: 7:30 AM - 7:30 PM</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Saturday: 9:30 AM - 6:30 PM</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Sunday: Closed</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-globe"></i>
              <p>www.plescoffee.com</p>
            </li>
          </ul>

          <form action="#" class="contact-form">
            <input type="text" placeholder="Your name" class="form-input" required />
            <input type="email" placeholder="Your email" class="form-input" required />
            <textarea placeholder="Your message" class="form-input" required></textarea>
            <button type="submit" class="button submit-button">Submit</button>
          </form>
        </div>
      </section>

      <!-- Footer section -->
      <footer class="footer-section">
        <div class="section-content">
          <p class="copyright-text">© 2024 Cafe</p>

          <div class="social-link-list">
            <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
          </div>

          <p class="policy-text">
            <a href="#" class="policy-link">Privacy policy</a>
            <span class="separator">•</span>
            <a href="#" class="policy-link">Refund policy</a>
          </p>
        </div>
      </footer>
    </main>

    <!-- Linking Swiper script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Linking custom script -->
    <script src="assets/js/script.js"></script>
  </body>
</html>
