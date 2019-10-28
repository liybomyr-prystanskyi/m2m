<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <title></title>

  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta property="og:image" content="path/to/image.jpg">
  <link rel="icon" href="images/favicon/favicon.ico">
  <meta name="theme-color" content="#000">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato:300i,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.min.css">
</head>

<div id="Load" class="load">
  <div class="load__container">
    <div class="load__animation"></div>
    <div class="load__mask"></div>
  </div>
</div>

<body>
  <main>
    <?php require ("tpl/header.php");?>
    <section class="home-banner">
      <div class="home-banner__main">
        <div class="swiper-container home-banner__main__swiper">
          <div class="swiper-wrapper home-banner__main__swiper__wrapper">
            <div class="swiper-slide home-banner__main__swiper__wrapper__slide"
              style="background-image: url(img/temp/home/banner-slide-1.jpg)">
            </div>
            <div class="swiper-slide home-banner__main__swiper__wrapper__slide"
              style="background-image: url(img/temp/home/banner-slide-2.jpg)">
            </div>
            <div class="swiper-slide home-banner__main__swiper__wrapper__slide"
              style="background-image: url(img/temp/home/banner-slide-3.jpg)">
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="home-banner__main__banner-info wow fadeInRightBig">
          <h5>Welcome to</h5>
          <h2>Moore 2 Music Entertainment</h2>
        </div>
      </div>
    </section>

    <section class="contact">
      <div class="container">
        <div class="contact__main">
          <div class="row justify-content-between">
            <div class="col-lg-5 col-12">
              <div class="contact__main__info">
                <div class="contact__main__info__title wow fadeInUpBig">
                  <div class="contact__main__info__title__text-w-underline">
                    <h5>Moore 2 Music</h5>
                    <div class="contact__main__info__title__text-w-underline__line"></div>
                  </div>
                  <h2>Contact Us</h2>
                </div>

                <div class="contact__main__info__location wow fadeInLeftBig">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Moore 2 Music 112 Town Road Mayfield, NY 12117 US</p>
                </div>

                <div class="contact__main__info__number wow fadeInUpBig">
                  <i class="fas fa-phone-alt"></i>
                  <a href="tel:518-866-2677">518-866-2677</a>
                </div>

                <div class="contact__main__info__social wow fadeInRightBig">
                  <div class="contact__main__info__social__description">
                    <p>Connect with us:</p>
                  </div>
                  <div class="contact__main__info__social__icons">
                    <div class="contact__main__info__social__icons__block">
                      <a href="#">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </div>

                    <div class="contact__main__info__social__icons__block">
                      <a href="#">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </div>

                    <div class="contact__main__info__social__icons__block">
                      <a href="#">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </div>

                    <div class="contact__main__info__social__icons__block">
                      <a href="#">
                        <i class="fab fa-youtube"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contact__main__form-block wow fadeInLeftBig">
                <form class="contact__main__form-block__glob" id="request-form">
                  <div class="contact__main__form-block__glob__title">
                    <h2>We love helping you coordinate your event. Drop us a line.</h2>
                  </div>
                  <p class="">
                    <input data-required="yes" data-title="Name: " type="text" class="sn_form_information" id="name"
                      name="request_Name" required="" placeholder="Name*">
                    <input data-required="yes" data-title="Email: " type="email" class="sn_form_information" id="email"
                      name="request_Email" required="" placeholder="Email*">
                  </p>
                  <p class="">
                    <textarea data-title="Message" data-required="yes" placeholder="Message" required=""
                      style="resize: none;"></textarea>
                  </p>
                  <div class="contact__main__form-block__glob__button btn btn-default sn_form_submit"
                    onClick="sn_form_submit('request-form')">Send Message
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6 col-12 wow fadeInDownBig">
              <div class="contact__main__image">
                <img src="img/temp/contact/form-img.png" alt="form-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="map">
      <div class="container-fluid">
        <div class="row">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2911.5475487726285!2d-74.24558388428571!3d43.135030093799585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89def794f0bc1eb9%3A0xfda93b19a38bea11!2zMTEyIFRvd24gUmQsIE1heWZpZWxkLCBOWSAxMjExNywg0KHQqNCQ!5e0!3m2!1sru!2sua!4v1571132327030!5m2!1sru!2sua"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="">
          </iframe>
        </div>
      </div>

      <div class="container">
        <div class="row wow fadeInUpBig">
          <div class="col-12 col-lg-4">
            <div class="map__info">
              <div class="map__info__title">
                <div class="map__info__title__text-w-underline">
                  <h5>Working</h5>
                  <div class="map__info__title__text-w-underline__line"></div>
                </div>
                <h2>Hours</h2>
              </div>

              <div class="map__info__days">
                <div class="map__info__days__item">
                  <h2>Mon</h2>
                  <p>09:00 am - 07:00 pm</p>
                </div>
                <div class="map__info__days__item">
                  <h2>Tue</h2>
                  <p>09:00 am - 07:00 pm</p>
                </div>
                <div class="map__info__days__item">
                  <h2>Wed</h2>
                  <p>09:00 am - 07:00 pm</p>
                </div>
                <div class="map__info__days__item">
                  <h2>Thu</h2>
                  <p>09:00 am - 07:00 pm</p>
                </div>
                <div class="map__info__days__item">
                  <h2>Fri</h2>
                  <p>09:00 am - 07:00 pm</p>
                </div>
                <div class="map__info__days__item">
                  <h2>Sat</h2>
                  <p>By Appointment</p>
                </div>
                <div class="map__info__days__item">
                  <h2>Sun</h2>
                  <p>By Appointment</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </main>
  <?php require ("tpl/footer.php");?>
</body>

</html>