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

    <section class="event">
      <div class="container">
        <div class="event__main">
          <div class="event__main__title wow fadeInDownBig">
            <div class="event__main__title__text-w-underline">
              <h5>Our</h5>
              <div class="event__main__title__text-w-underline__line"></div>
            </div>
            <h2>Events</h2>
          </div>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-6 wow fadeInLeftBig">
              <div class="event__main__item">
                <div class="event__main__item__image">
                  <img src="img/temp/event/item-1.png" alt="item">
                </div>
                <div class="event__main__item__info">
                  <div class="event__main__item__info__date">
                    <p>18</p>
                    <p>oct</p>
                  </div>
                  <div class="event__main__item__info__description">
                    <h2>Robin's Nest</h2>
                    <p>230 stevers mill rd, Broadalbin, New York 12025</p>
                    <a href="#">view details
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-6 wow fadeInRightBig">
              <div class="event__main__item">
                <div class="event__main__item__image">
                  <img src="img/temp/event/item-2.png" alt="item">
                </div>
                <div class="event__main__item__info">
                  <div class="event__main__item__info__date">
                    <p>25</p>
                    <p>oct</p>
                  </div>
                  <div class="event__main__item__info__description">
                    <h2>Robin's Nest</h2>
                    <p>230 stevers mill rd, Broadalbin, New York 12025</p>
                    <a href="#">view details
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-6 wow fadeInUpBig">
              <div class="event__main__item">
                <div class="event__main__item__image">
                  <img src="img/temp/event/item-3.png" alt="item">
                </div>
                <div class="event__main__item__info">
                  <div class="event__main__item__info__date">
                    <p>26</p>
                    <p>oct</p>
                  </div>
                  <div class="event__main__item__info__description">
                    <h2>Robin's Nest</h2>
                    <p>230 stevers mill rd, Broadalbin, New York 12025</p>
                    <a href="#">view details
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-6 wow fadeInDownBig">
              <div class="event__main__item">
                <div class="event__main__item__image">
                  <img src="img/temp/event/item-4.png" alt="item">
                </div>
                <div class="event__main__item__info">
                  <div class="event__main__item__info__date">
                    <p>25</p>
                    <p>apr</p>
                  </div>
                  <div class="event__main__item__info__description">
                    <h2>Robin's Nest</h2>
                    <p>230 stevers mill rd, Broadalbin, New York 12025</p>
                    <a href="#">view details
                      <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                  </div>
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