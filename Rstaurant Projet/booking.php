<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <title>Booking | Shaif's Cuisine</title>
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="./globalStyles.css">
  <link rel="stylesheet" href="./components.css">
  <!-- aos library css  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
  <!-- Nav Section -->
   <?php include('includes/nav.php') ?>
  <!-- End Nav Section -->
  <!-- Booking Section -->
  <section id="form" data-aos="fade-up">
    <div class="container">
      <h3 class="form__title">Book Table</h3>
      <div class="form__wrapper">
        <form name="booking" method="POST" netlify>
          <div class="form__group">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="First Name" required>
          </div>
          <div class="form__group">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="Last Name" required>
          </div>
          <div class="form__group">
            <label for="email">Email</label>
            <input type="email" id="email" name="Email" required>
          </div>
          <div class="form__group">
            <label for="tableType">Table Type</label>
            <select name="Table Type" id="tableType" required>
              <option selected disabled>Choose</option>
              <option value="small">Small(2 persons)</option>
              <option value="medium">Small(4 persons)</option>
              <option value="large">large(6 persons)</option>
            </select>
          </div>
          <div class="form__group">
            <label for="guestNumber">Guest Number</label>
            <input type="number" id="guestNumber" name="Guest Number" min="1" max="10" required>
          </div>
          <div class="form__group">
            <label for="placement">Placement</label>
            <select name="Placement" id="placement">
              <option selected disabled>Choose</option>
              <option value="outdoor">Outdoor</option>
              <option value="indoor">Indoor</option>
              <option value="rooftop">rooftop</option>
            </select>
          </div>
          <div class="form__group">
            <label for="date">Date</label>
            <input type="date" id="date" name="Date" required>
          </div>
          <div class="form__group">
            <label for="time">time</label>
            <input type="time" id="time" name="Time" required>
          </div>
          <div class="form__group form__group__full">
            <label for="note">Note</label>
            <textarea name="Note" id="note" rows="4"></textarea>
          </div>
          <button type="submit" class="btn primary-btn">Book Table</button>
        </form>
      </div>
    </div>
  </section>
  <!-- End Booking Section -->
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

  <!-- aos scripts -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- custom scripts -->
  <script src="./main.js"></script>
</body>

</html>