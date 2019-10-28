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

    <section class="about-us wow fadeInDownBig">
      <div class="container">
        <div class="about-us__main">
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="about-us__main__info">
                <div class="about-us__main__info__title">
                  <div class="about-us__main__info__title__text-w-underline">
                    <h5>Who we are</h5>
                    <div class="about-us__main__info__title__text-w-underline__line"></div>
                  </div>
                  <h2>About us</h2>
                </div>
                <div class="about-us__main__info__subtitle">
                  <h3>For your next event call Moore2Music. If some is good, Moore is Better!</h3>
                </div>
                <div class="about-us__main__info__description">
                  <p>
                    Moore 2 Music provides the music you need for ANY event you are having. From graduation parties to
                    weddings and everything in between. See WHY we say "If Some Is Good Moore Is Better"
                  </p>
                  <p>Moore 2 Music is FULLY INSURED.</p>
                </div>
                <div class="about-us__main__info__button">
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="about-us__main__image">
                <img class="about-us__main__image__first-img" src="img/temp/home/about-us.jpg" alt="about-us">
                <img class="about-us__main__image__second-img" src="img/temp/home/about-us-before.jpg" alt="about-us">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="services" style="background-image: url(img/temp/home/services-bg.jpg)">
      <div class="container">
        <div class="services__main">
          <div class="services__main__title wow fadeInLeftBig">
            <div class="services__main__title__text-w-underline">
              <span>Our</span>
              <div class="services__main__title__text-w-underline__line"></div>
            </div>
            <h2>Services</h2>
          </div>
          <div class="services__main__items wow fadeInRightBig">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-3">
                <div class="services__main__items__box">
                  <div class="services__main__items__box__image">
                    <img src="img/temp/home/box-1.png" alt="box-1">
                  </div>
                  <div class="services__main__items__box__title">
                    <h2>Weedings</h2>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="services__main__items__box">
                  <div class="services__main__items__box__image">
                    <img src="img/temp/home/box-2.png" alt="box-2">
                  </div>
                  <div class="services__main__items__box__title">
                    <h2>Graduation Parties</h2>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="services__main__items__box">
                  <div class="services__main__items__box__image">
                    <img src="img/temp/home/box-3.png" alt="box-3">
                  </div>
                  <div class="services__main__items__box__title">
                    <h2>Throwback Parties</h2>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="services__main__items__box">
                  <div class="services__main__items__box__image">
                    <img src="img/temp/home/box-4.png" alt="box-4">
                  </div>
                  <div class="services__main__items__box__title">
                    <h2>Sweet 16's</h2>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="services__main__items__box">
                  <div class="services__main__items__box__image">
                    <img src="img/temp/home/box-5.png" alt="box-5">
                  </div>
                  <div class="services__main__items__box__title">
                    <h2>Anniversaries</h2>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="services__main__items__box">
                  <div class="services__main__items__box__image">
                    <img src="img/temp/home/box-6.png" alt="box-6">
                  </div>
                  <div class="services__main__items__box__title">
                    <h2>Benefits</h2>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="services__main__items__box">
                  <div class="services__main__items__box__image">
                    <img src="img/temp/home/box-7.png" alt="box-7">
                  </div>
                  <div class="services__main__items__box__title">
                    <h2>Karaoke</h2>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="services__main__items__box">
                  <div class="services__main__items__box__image">
                    <img src="img/temp/home/box-8.png" alt="box-8">
                  </div>
                  <div class="services__main__items__box__title">
                    <h2>and more</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="services__main__button wow fadeInRightBig">
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </section>


    <section class="home-testimonials">
      <div class="container">
        <div class="home-testimonials__main">
          <div class="row">
            <div class="col-12">
              <div class="home-testimonials__main__title">
                <h2>See what people are saying</h2>
              </div>
              <div class="swiper-container home-testimonials__main__swiper">
                <div class="swiper-wrapper home-testimonials__main__swiper__wrapper">
                  <div class="swiper-slide home-testimonials__main__swiper__wrapper__slide">
                    <p>
                      There's really not enough I could say about Craig. We met with him months before our wedding and
                      they
                      worked what seems to be non stop for those months, on the phone with Craig around 9-10PM multiple
                      nights before the day, and all the way to 5AM the morning of our wedding finalizing the music and
                      itinerary.
                      They also had to fight the fact that our venue was a place with little to no cell service so the
                      music had to
                      be selected/downloaded in advance.
                    </p>
                  </div>

                  <div class="swiper-slide home-testimonials__main__swiper__wrapper__slide">
                    <p>
                      All the planning, all the effort, and all the talent just was amazing. There wasn't one single
                      song
                      "wrong" or out of place, there wasn't a moment unplanned (not to say he didn't attempt to
                      throw in a nice surprise, but we aren't the easiest crew to accommodate for surprises). He
                      had just about EVERYONE singing to songs, out dancing on the floor, or wiggling in their seats
                      cheerfully. Dana is also a crucial piece to this because she keeps his head on straight and as
                      such deserves the special shout-out :) After what we experienced with these two we
                      wouldn't recommend anyone other than them for your big day or event. And if they are not
                      available, I would only trust their recommendation for who to have instead of them.
                      Thank you, thank you, thank you. You ROCK – Gabriel Citrwell
                    </p>
                  </div>

                  <div class="swiper-slide home-testimonials__main__swiper__wrapper__slide">
                    <p>
                      All the planning, all the effort, and all the talent just was amazing. There wasn't one single
                      song
                      "wrong" or out of place, there wasn't a moment unplanned (not to say he didn't attempt to
                      throw in a nice surprise, but we aren't the easiest crew to accommodate for surprises). He
                      had just about EVERYONE singing to songs, out dancing on the floor, or wiggling in their seats
                      cheerfully. Dana is also a crucial piece to this because she keeps his head on straight and as
                      such deserves the special shout-out :) After what we experienced with these two we
                      wouldn't recommend anyone other than them for your big day or event. And if they are not
                      available, I would only trust their recommendation for who to have instead of them.
                      Thank you, thank you, thank you. You ROCK – Gabriel Citrwell
                    </p>
                  </div>
                </div>
                <div class="swiper-pagination testimonials-pagination"></div>
              </div>
             
            </div>
          </div>
        </div>
    </section>

    <section class="gallery">
      <div class="container">
        <div class="gallery__main">
          <div class="gallery__main__title wow fadeInLeftBig">
            <div class="gallery__main__title__text-w-underline">
              <span>Photo</span>
              <div class="gallery__main__title__text-w-underline__line">
              </div>
            </div>
            <h2>Gallery</h2>
          </div>
          <div class="row wow fadeInRightBig">
            <div class="col-12 col-md-4 col-lg-4">
              <figure>
                <a href="img/temp/home/gallery-1.jpg" data-fancybox="gallery1">
                  <img src="img/temp/home/gallery-1.jpg" alt="gallery-1" />
                </a>
              </figure>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
              <figure>
                <a href="img/temp/home/gallery-3.jpg" data-fancybox="gallery3">
                  <img src="img/temp/home/gallery-3.jpg" alt="gallery-3" />
                </a>
              </figure>
              <figure>
                <a href="img/temp/home/gallery-4.jpg" data-fancybox="gallery4">
                  <img src="img/temp/home/gallery-4.jpg" alt="gallery-4" />
                </a>
              </figure>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
              <figure>
                <a href="img/temp/home/gallery-6.jpg" data-fancybox="gallery6">
                  <img src="img/temp/home/gallery-6.jpg" alt="gallery-6" />
                </a>
              </figure>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
              <figure>
                <a href="img/temp/home/gallery-2.jpg" data-fancybox="gallery2">
                  <img src="img/temp/home/gallery-2.jpg" alt="gallery-2" />
                </a>
              </figure>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
              <figure>
                <a href="img/temp/home/gallery-5.jpg" data-fancybox="gallery5">
                  <img src="img/temp/home/gallery-5.jpg" alt="gallery-5" />
                </a>
              </figure>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
              <figure>
                <a href="img/temp/home/gallery-7.jpg" data-fancybox="gallery7">
                  <img src="img/temp/home/gallery-7.jpg" alt="gallery-7" />
                </a>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php require ("tpl/footer.php");?>
</body>

</html>