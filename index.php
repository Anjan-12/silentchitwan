<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  <link rel="stylesheet" href="styles.css">
    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Silent Adventure Chitwan</title>
  </head>

    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo" style="color:blue">SilentAdventure</a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">Home</a>
            </li>
            <li class="nav__item">
              <a href="#about" class="nav__link ">About</a>
            </li>

            <li class="nav__item">
              <a href="#place" class="nav__link">Activities</a>
            </li>
            <li class="nav__item">
              <a href="#contacts" class="nav__link">Contacts</a>
            </li>
          </ul>

          <div class="nav__dark">
            <!-- Theme change button -->
            <span class="change-theme-name">Dark mode</span>
            <i class="ri-moon-line change-theme" id="theme-button"></i>
          </div>

          <i class="ri-close-line nav__close" id="nav-close"></i>
        </div>

        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-function-line"></i>
        </div>
      </nav>
    </header>

    <main class="main">
       ==================== HOME ====================-->
      <section class="home" id="home">
        <img src="assets/img/finish725_800.jpg" alt="" class="home__img" />

        <div class="home__container container grid">
          <div class="home__data">
            <span class="home__data-subtitle" style="color:black">Choose Your Activities</span>
            <h1 class="home__data-title">
              Explore The <br />
              Best
              <b
                >Beautiful <br />
                Places</b
              >
            </h1>
            <a href="field.html" class="button">Explore</a>
          </div>

          <div class="home__social">
            <a
              href="https://www.facebook.com/"
              target="_blank"
              class="home__social-link"
            >
              <i class="ri-facebook-box-fill"></i>
            </a>
            <a
              href="https://www.instagram.com/"
              target="_blank"
              class="home__social-link"
            >
              <i class="ri-instagram-fill"></i>
            </a>

          </div>

          <div class="home__info">
            <div>
              <span class="home__info-title">Best Places to visit</span>
              <a
                href="5best.html"
                class="button button--flex button--link home__info-button"
              >
                More <i class="ri-arrow-right-line"></i>
              </a>
            </div>

            <div class="home__info-overlay">
              <img src="assets/img/5d5e9bb0f0a68d4ad4f20475.jpeg" alt="" class="home__info-img" />
            </div>
          </div>
        </div>
      </section>


      <!--==================== ABOUT ====================-->
      <section class="about section" id="about">
        <div class="about__container container grid">
          <div class="about__data">
            <h2 class="section__title about__title">
              More Information <br />
              About The Activities
            </h2>
            <p class="about__description">
              You can find the most beautiful and pleasant and thrilling activities at the best
              prices with special discounts, you choose the place we will guide
              you all the way to wait, get your place now.
            </p>
            <a href="#contacts" class="button">Reserve your activities</a>
          </div>

          <div class="about__img">
            <div class="about__img-overlay">
              <img
                src="assets/img/finish725_800.jpg"
                alt=""
                class="about__img-one"
              />
            </div>

            <div class="about__img-overlay">
              <img src="assets/img/58.jpg" alt="" class="about__img-two" />
            </div>
          </div>
        </div>
          <!--==================== DISCOVER ====================-->
      <section class="discover section" id="discover">
        <h2 class="section__title">
          Discover the most <br />
          attractive places
        </h2>

        <div class="discover__container container swiper-container">
          <div class="swiper-wrapper">
            <!--==================== DISCOVER 1 ====================-->
            <div class="discover__card swiper-slide">
              <img
                src=assets/img/tower-night-banner.jpg
                alt=""
                class="discover__img"
              />
              <div class="discover__data">
                <h2 class="discover__title">Tower Night</h2>
                <span class="discover__description"></span>
              </div>
            </div>

            <!--==================== DISCOVER 2 ====================-->
            <div class="discover__card swiper-slide">
              <img
                src="assets/img/bar-looking-over-the.jpg"
                alt=""
                class="discover__img"
              />
              <div class="discover__data">
                <h2 class="discover__title">Tharu HomeStay</h2>
                <span class="discover__description"></span>
              </div>
            </div>



            <!--==================== DISCOVER 3 ====================-->
            <div class="discover__card swiper-slide">
              <img
                src="assets/img/0351e120008u4827s8AD2.jpg"
                alt=""
                class="discover__img"
              />
              <div class="discover__data">
                <h2 class="discover__title">Canoening</h2>
                <span class="discover__description"></span>
              </div>
            </div>
          </div>
        </div>
      </section>

      </section>


      <!--==================== EXPERIENCE ====================-->
      <section class="experience section">
        <h2 class="section__title">
          With Our Experience <br />
          We Will Serve You
        </h2>

        <div class="experience__container container grid">
          <div class="experience__content grid">
            <div class="experience__data">
              <h2 class="experience__number">20</h2>
              <span class="experience__description"
                >Year <br />
                Experience in Guide</span
              >
            </div>

            <div class="experience__data">
              <h2 class="experience__number">275</h2>
              <span class="experience__description"
                >Complete <br />
                tours</span
              >
            </div>

            <div class="experience__data">
              <h2 class="experience__number">20+</h2>
              <span class="experience__description"
                >Local <br />
                Destination</span
              >
            </div>
          </div>


      </section>

      <!--==================== VIDEO ====================-->
      <section class="video section">
        <h2 class="section__title">Video Tour</h2>

        <div class="video__container container">
          <p class="video__description">
            Find out more with our video of the most beautiful and pleasant
            places for you and your family.
          </p>

          <div class="video__content">
            <video id="video-file">
              <source src="assets/video/video-1658561388.mp4" type="video/mp4" />
            </video>

            <button class="button button--flex video__button" id="video-button">
              <i class="ri-play-line video__button-icon" id="video-icon"></i>
            </button>
          </div>
        </div>
      </section>

      <!--==================== PLACES ====================-->
      <section class="place section" id="place">
        <h2 class="section__title">Choose Your Place</h2>

        <div class="place__container container grid">
          <!--==================== PLACES CARD 1 ====================-->
          <div class="place__card">
            <img src="assets/img/58.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number"></span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Jungle Tower</h3>
                <span class="place__subtitle">Sauaraha</span>
                <span class="place__price">Rs 1599</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 2 ====================-->
          <div class="place__card">
            <img src="assets/img/0351e120008u4827s8AD2.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number"></span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Canoeing</h3>
                <span class="place__subtitle">Rapti River</span>
                <span class="place__price">Rs 1200</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 3 ====================-->
          <div class="place__card">
            <img src="assets/img/place3.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number"></span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Jeep Safari</h3>
                <span class="place__subtitle">Chitwan National park</span>
                <span class="place__price">2hrs Rs 4499 </span>
                <span class="place__price"> fullday Rs 5000</span>
                   <span class="place__price"> 2-fullday Rs 5000</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 4 ====================-->
          <div class="place__card">
            <img src="assets/img/5e246b0b992bfa21ce2c9eb5_20000-lake-tours.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number"></span>
              </span>

              <div class="place__data">
                <h3 class="place__title">20000 Lake</h3>
                <span class="place__subtitle">Chitwan National Park</span>
                <span class="place__price">Rs 1200</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 5 ====================-->
          <div class="place__card">
            <img src="assets/img/tower-night-banner.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number"></span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Tower Night Stay</h3>
                <span class="place__subtitle">Inside National park</span>
                <span class="place__price">Rs 4999</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

            <!--==================== PLACES CARD 6 ====================-->
          <div class="place__card">
            <img src="assets/img/finish725_800.jpg" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number"></span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Elephant Safari</h3>
                <span class="place__subtitle">Sauraha</span>
                <span class="place__price">$1999</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>



        </div>

      </section><br>
      <br>
      <br>




  <!--==========Contacts-->


<div class="contacts " id="contacts" style="margin-top:35px; padding-top:50px">
  <div style="text-align:center">
    <h2 style="margin-bottom:30px">Contact Us</h2>

  </div>


    <div class="column">

 <form id="fcf-form-id" class="fcf-form-class" method="post" action="welcome.php">

        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Your name</label>
            <div class="fcf-input-group">
                <input type="text" id="Name" name="Name" placeholder="your full name"        class="fcf-form-control" required>
            </div>
        </div>
   <div class="fcf-form-group2">
            <label for="phone" >Your Phone Number</label>
            <div class="fcf-input-group2">
                <input type="tel" id="Phone" name="phone" class="fcf-form-control" placeholder="enter phone number ....."    pattern="(\+977)?[9][6-9]\d{8}"     required>
            </div>
        </div>
        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" placeholder="enter email ....."         required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Your message</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
        </div>



    </form>

    </div>

       <div class="shift">
            <a href="mailto:silentadventurechitwan@gmail.com" class="text-indigo-500">silentadventurechitwan@gmail.com</a>
            <p class="leading-normal my-5">Ratnanagar-4 Sauraha Road
              <br>Bagmati province ,Chitwan ,Nepal
              <br>
              <a href="tel:+977-9865104290" class="text-indigo-500">+977-9865104290</a>

            </p>



    </div>

</div>



    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section" style="color:grey">
      <div class="footer__container container grid">


        <div class="footer__rights">
          <p class="footer__copy">
            &#169; 2022 Anjan. All rigths reserved.
          </p>
          <div class="footer__terms">
            <a href="#" class="footer__terms-link">Terms & Agreements</a>
            <a href="#" class="footer__terms-link">Privacy Policy</a>
          </div>
        </div>
      </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="ri-arrow-up-line scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>

  </body>
</html>
