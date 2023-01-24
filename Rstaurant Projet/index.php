<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <title>Shaif's Cuisine</title>
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="./globalStyles.css">
  <link rel="stylesheet" href="./components.css">
  <!-- aos library css  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Add your custom css -->
  <link rel="stylesheet" href="./home.css">
</head>

<body>
  <!-- Nav Section -->
   <?php include('includes/nav.php') ?>
  <!-- End Nav Section -->
  <!-- Hero Section -->
  <section id="hero">
    <div class="container">
      <div class="hero__wrapper">
        <div class="hero__left" data-aos="fade-left">
          <div class="hero__left__wrapper">

            <h1 class="hero__heading">The flavor of tradition</h1>
            <p class="hero__info">
              We are a multi-cuisine restaurant offering a wide variety of food experience in both casual and fine
              dining
              environment.
            </p>
            <div class="button__wrapper">
              <a href="http://localhost/workspace/Rstaurant%20Projet/menu.php" class="btn primary-btn">Explore Menu</a>
              <a href="http://localhost/workspace/Rstaurant%20Projet/booking.php" class="btn">Book Table</a>
            </div>
          </div>
        </div>
        <div class="hero__right" data-aos="fade-right">
          <div class="hero__imgWrapper">
            <img src="./images/heroImg.png">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->
  <!-- Store Info Section -->
  <section id="storeInfo" data-aos="fade-up">
    <div class="container">
      <div class="storeInfo__wrapper">
        <div class="storeInfo__item">
          <div class="storeInfo__icon">
            <img src="./images/wall-clock-icon.svg" alt="clock icon">
          </div>
          <h3 class="storeInfo__title">
            10 AM - 7 PM
          </h3>
          <p class="storeInfo__text">
            Opening Hour
          </p>
        </div>
        <div class="storeInfo__item">
          <div class="storeInfo__icon">
            <img src="./images/address-icon.svg" alt="clock icon">
          </div>
          <h3 class="storeInfo__title">
            GEC, Chittagong
          </h3>
          <p class="storeInfo__text">
            Address
          </p>
        </div>
        <div class="storeInfo__item">
          <div class="storeInfo__icon">
            <img src="./images/phone-icon.svg" alt="clock icon">
          </div>
          <h3 class="storeInfo__title">
            +880123443
          </h3>
          <p class="storeInfo__text">
            Call Now
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Store Info Section -->
  <!-- Our Specials Section -->
  <section id="ourSpecials" data-aos="fade-up">
    <div class="container">
      <div class="ourSpecials__wrapper">
        <div class="ourSpecials__left">
          <div class="ourSpecials__item">
            <div class="ourSpecials__item__img">
              <img src="./images/food-3.png" alt="food img">
            </div>
            <h2 class="ourSpecials__item__title">
              Sweet Potato Fries Bowl
            </h2>
            <h3 class="ourSpecials__item__price">
              $18
            </h3>
            <div class="ourSpecials__item__stars">
              <img src="./images/3star.png" alt="3 stars">
            </div>
            <p class="ourSpecials__item__text">
              These Sweet Potato Fries bowl are a glorious, messy plate of goodness. Crispy sweet potato fries loaded
              with lots of fresh summer vegetables and a lime ranch. By adding a seasoning blend with chipotle powder,
              garlic, and onion, these spicy sweet potato fries are full of flavor.
            </p>
          </div>
          <div class="ourSpecials__item">
            <div class="ourSpecials__item__img">
              <img src="./images/food-1.png" alt="food img">
            </div>
            <h2 class="ourSpecials__item__title">
              Vegan Salad bowl
            </h2>
            <h3 class="ourSpecials__item__price">
              $18
            </h3>
            <div class="ourSpecials__item__stars">
              <img src="./images/3star.png" alt="3 stars">
            </div>
            <p class="ourSpecials__item__text">
              Vegan salad bowl are immensely satisfying with any combination of whole grains, pulses, noodles, raw or
              cooked fruits, and veggies all topped off with a delicious sauce or dressing – each bite is an explosion
              of flavors and textures.
            </p>
          </div>
        </div>
        <div class="ourSpecials__right">
          <h2 class="ourSpecials__title">
            Our Specials
          </h2>
          <p class="ourSpecials__text">
            All of our food is prepared daily at our restaurants to ensure the highest quality, freshest meals are
            delivered to our customers
          </p>
          <a href="http://localhost/workspace/Rstaurant%20Projet/booking.php" class="btn primary-btn">Book Table</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Specials Section -->
  <!-- Top Dishes -->
  <section id="dishGrid" data-aos="fade-up">
    <div class="container">
      <h2 class="dishGrid__title">
        Top Dishes
      </h2>
      <div class="dishGrid__wrapper">
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-1.png" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              Vegan Salad bowl
            </h3>
            <h3 class="dishGrid__item__price">$12</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-2.png" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              Vegan Pesto Zoodles
            </h3>
            <h3 class="dishGrid__item__price">$12</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-7.png" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              Hot Green Bowl
            </h3>
            <h3 class="dishGrid__item__price">$12</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Top Dishes -->
  <!-- Discount Section -->
  <section id="discount" data-aos="fade-up">
    <div class="container">
      <div class="discount__wrapper">
        <div class="discount__images">
          <div class="discount__img1">
            <img src="./images/food-5.png" alt="Food img">
          </div>
          <div class="discount__img2">
            <img src="./images/food-4.png" alt="Food img">
          </div>
          <div class="discount__img3">
            <img src="./images/food-3.png" alt="Food img">
          </div>
        </div>
        <div class="discount__info">
          <h3 class="discount__text">20% OFF</h3>
          <h3 class="discount__title">Demo Dish For Discount</h3>
          <h3 class="discount__price">
            <span class="discount__oldPrice">$45</span>
            <span class="discount__newPrice">$35</span>
          </h3>
          <div class="discount__stars">
            <img src="./images/3star.png" alt="3 stars">
          </div>
          <a class="btn primary-btn" href="http://localhost/workspace/Rstaurant%20Projet/booking.php">Book Table</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Discount Section -->
  <!-- Events Media -->
  <section id="eventsMedia" data-aos="fade-up">
    <div class="container">
      <div class="eventsMedia__wrapper">
        <div class="eventsMedia__1">
          <img src="./images/eventsMedia1.png" alt="events">
          <a href="#" class="eventsMedia__1__playButton">
            <img src="./images/playIcon.svg" alt="play button">
          </a>
        </div>
        <div class="eventMedia__2">
          <img src="./images/eventsMedia2.png" alt="events">
        </div>
      </div>
    </div>
  </section>
  <!-- End Events Media -->
  <!-- Events Info -->
  <section id="eventsInfo" data-aos="fade-up">
    <div class="container">
      <div class="eventsInfo__wrapper">
        <div class="eventsInfo__left">
          <div class="eventsInfo__item">
            <div class="eventsInfo__item__img">
              <img src="./images/event-corporate.png" alt="corporate events">
            </div>
            <div class="eventsInfo__item__info">
              <h2 class="eventsInfo__item__title">Corporate Events</h2>
              <p class="eventsInfo__item__text">
                Shaif's Cuisine is the perfect venue for your corporate events. We specialize in private parties.
              </p>
            </div>
          </div>
          <div class="eventsInfo__item">
            <div class="eventsInfo__item__img">
              <img src="./images/event-weedings.png" alt="wedding events">
            </div>
            <div class="eventsInfo__item__info">
              <h2 class="eventsInfo__item__title">Weddings</h2>
              <p class="eventsInfo__item__text">
                Shaif's Cuisine offers an intimately unique wedding experience set in a spectacular setting that is
                sophisticated and comfortable.
              </p>
            </div>
          </div>
        </div>
        <div class="eventsInfo__right">
          <h2 class="eventsInfo__title">Book For Events</h2>
          <p class="eventsInfo__text">Book your private event or corporate function at Shaif's cuisine to experience a
            truly unique experience.</p>
          <a href="http://localhost/workspace/Rstaurant%20Projet/contact.php" class="btn primary-btn">Contact Now</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Events Info -->
  <!-- Why Us section -->
  <section id="whyUs">
    <div class="container">
      <div class="whyUs__wrapper">
        <div class="whyUs__left" data-aos="fade-right">
          <h2 class="whyUs__title">
            Why Choose Our Food
          </h2>
          <p class="whyUs__text">
            Quality of Service, Food, Ambiance, and Value of Money are the primary elements for choosing a restaurant.
            Shaif's Cuisine is one of the most exquisite fine-dinning restaurant in Chittagong cities with a captivating
            view of GEC Hills, perfect ambiance, and scrumptious food.
          </p>
        </div>
        <div class="whyUs__right" data-aos="fade-left">
          <div class="whyUs__items__wrapper">
            <div class="whyUs__item">
              <div class="whyUs__item__icon">
                <img src="./images/whyUs-icon1.svg" alt="quality Food">
              </div>
              <p class="whyUs__item__text">Quality Food</p>
            </div>
            <div class="whyUs__item">
              <div class="whyUs__item__icon">
                <img src="./images/whyUs-icon2.svg" alt="Classical taste">
              </div>
              <p class="whyUs__item__text">Classical taste</p>
            </div>
            <div class="whyUs__item">
              <div class="whyUs__item__icon">
                <img src="./images/whyUs-icon3.svg" alt="Skilled chef">
              </div>
              <p class="whyUs__item__text">Skilled chef</p>
            </div>
            <div class="whyUs__item">
              <div class="whyUs__item__icon">
                <img src="./images/whyUs-icon4.svg" alt="Best service">
              </div>
              <p class="whyUs__item__text">Best service</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Why Us section -->
  <!-- Testimonial Section -->
  <section id="testimonial">
    <div class="container">
      <div class="testimonial__wrapper" data-aos="fade-up">
        <h2 class="testimonial__title">What Our Customers Say</h2>
        <div class="testimonial__items__wrapper">
          <div class="testimonial__item">
            <div class="testimonial__item__img">
              <img src="./images/testimonial_img1.png" alt="Sayed Ahmed">
            </div>
            <div class="testimonial__item__info">
              <h3 class="testimonial__item__name">Sayed Ahmed</h3>
              <div class="testimonial__item__stars">
                <img src="./images/3star.png" alt="3 star">
              </div>
              <p class="testimonial__item__text">
                “Visited Shaif’s Cuisine with friends last Sunday. Really lovely meal and very warm welcome – we would
                recommend this lovely restaurant and will try to go back again”
              </p>
            </div>
          </div>
          <div class="testimonial__item">
            <div class="testimonial__item__img">
              <img src="./images/testimonial_img1.png" alt="Sayed Ahmed">
            </div>
            <div class="testimonial__item__info">
              <h3 class="testimonial__item__name">Arfan</h3>
              <div class="testimonial__item__stars">
                <img src="./images/3star.png" alt="3 star">
              </div>
              <p class="testimonial__item__text">
                "from start to finish, lovely experience. Hostess very pleasant, wait staff john was wonderful and
                attentive, food plentiful and delicious, desserts out of this world"
              </p>
            </div>
          </div>
          <div class="testimonial__item">
            <div class="testimonial__item__img">
              <img src="./images/testimonial_img1.png" alt="Sayed Ahmed">
            </div>
            <div class="testimonial__item__info">
              <h3 class="testimonial__item__name">Fahim & Nishat</h3>
              <div class="testimonial__item__stars">
                <img src="./images/3star.png" alt="3 star">
              </div>
              <p class="testimonial__item__text">
                “A warm and friendly welcome with fantastic customer service. Always great, tasty food served piping
                hot- just the way we love it . Would definitely recommend. We have been repeatedly and it's consistently
                exceeded our expectations"
              </p>
            </div>
          </div>
          <div class="testimonial__item">
            <div class="testimonial__item__img">
              <img src="./images/testimonial_img1.png" alt="Sayed Ahmed">
            </div>
            <div class="testimonial__item__info">
              <h3 class="testimonial__item__name">Hussain</h3>
              <div class="testimonial__item__stars">
                <img src="./images/3star.png" alt="3 star">
              </div>
              <p class="testimonial__item__text">
                “I would just like to say thank you for the excellent service we received in your restaurant last night.
                Although the place was very busy we still had an excellent time and really appreciated the live
                entertainment too!“
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Testimonial Section -->
  <!-- Newsletter Section -->
  <section id="newsletter" data-aos="fade-up">
    <div class="container">
      <div class="newsletter__wrapper">
        <div class="newsletter__info">
          <h3 class="newsletter__title">Join Newsletter</h3>
          <p class="newsletter__text">
            Get notified with the latest news and recent offers from the “Shaif’s Cuisine”
          </p>
        </div>
        <div class="newsletter__form">
          <form action="">
            <label for="email">
              <input type="email" placeholder="Your Email Address">
            </label>
            <button type="submit">Join</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Newsletter Section -->

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__col1">
          <div class="footer__logo">
            <img src="./images/logo.svg" alt="shaif's cuisine">
          </div>
          <p class="footer__desc">
            Fresh and delicious traditional Bangladeshi food to delight the whole family.
          </p>
          <div class="footer__socials">
            <h4 class="footer__socials__title">Follow us</h4>
            <ol class="footer__socials__list">
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-facebook">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-instagram">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-twitter">
                    <path
                      d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                  </svg>
                </a>
              </li>
            </ol>
          </div>
        </div>
        <div class="footer__col2">
          <h3 class="footer__text__title">
            Links
          </h3>
          <ol class="footer__text">
            <li>
              <a href="http://localhost/workspace/Rstaurant%20Projet/index.php">Home</a>
            </li>
            <li>
              <a href="http://localhost/workspace/Rstaurant%20Projet/menu.php">Menu</a>
            </li>
            <li>
              <a href="http://localhost/workspace/Rstaurant%20Projet/booking.php">Book Table</a>
            </li>
            <li>
              <a href="http://localhost/workspace/Rstaurant%20Projet/about.php">About Us</a>
            </li>
            <li>
              <a href="http://localhost/workspace/Rstaurant%20Projet/contact.php">contact Us</a>
            </li>
            <li>
              <a href="#">Privacy Policy</a>
            </li>
          </ol>
        </div>
        <div class="footer__col3">
          <h3 class="footer__text__title">
            Support
          </h3>
          <ol class="footer__text">
            <li>
              <a href="#">Contact</a>
            </li>
            <li>
              <a href="#">Support Center</a>
            </li>
            <li>
              <a href="#">Feedback</a>
            </li>
          </ol>
        </div>
        <div class="footer__col4">
          <h3 class="footer__text__title">
            Contact
          </h3>
          <ol class="footer__text">
            <li>
              <a href="#">+880123</a>
            </li>
            <li>
              <a href="#">webcifar@gmail.com</a>
            </li>
            <li>
              <a href="#">GEC Circle, Chittagong, Bangladesh</a>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </footer>
  <div id="copyright">
    <div class="container">
      <p class="copyright__text">
        © copyright 2021 Shaif’s Cuisine | All rights reserved
      </p>
    </div>
  </div>
  <!-- End Footer -->

  <!-- aos script -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- custom script -->
  <script src="./main.js"></script>
</body>

</html>