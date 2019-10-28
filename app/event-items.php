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

    <section class="single-event">
      <div class="container">
        <div class="single-event__main">
          <div class="single-event__main__button wow fadeInDownBig">
            <a href="#">Back to events</a>
          </div>
          <div class="row">
            <div class="col-12 col-lg-7 wow fadeInLeftBig">
              <div class="single-event__main__image">
                <img src="img/temp/event-items/item.png" alt="item">
              </div>
            </div>
            <div class="col-12 col-lg-4 wow fadeInUpBig">
              <div class="single-event__main__info">
                <div class="single-event__main__info__title">
                  <h2>Robin's Nest</h2>
                </div>
                <div class="single-event__main__info__block">
                  <div class="single-event__main__info__block__item">
                    <h2>Date:</h2>
                    <p>October 18, 2019</p>
                  </div>
                  <div class="single-event__main__info__block__item">
                    <h2>Time:</h2>
                    <p>8PM - 12AM</p>
                  </div>
                  <div class="single-event__main__info__block__item flex-dir-c">
                    <h2>Location:</h2>
                    <p>Robin's Nest</p>
                    <p>230 stevers mill rd, Broadalbin, New York 12025</p>
                  </div>
                  <div class="single-event__main__info__block__item">
                    <h2>Additional info:</h2>
                    <p>Karaoke Dancing and Pool</p>
                  </div>
                  <div class="single-event__main__info__block__button">
                    <a href="#">Contact Us</a>
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