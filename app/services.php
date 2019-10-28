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
    
    <section class="services-single">
      <div class="container">
        <div class="services-single__main">
          <div class="services-single__main__title wow fadeInDownBig">
            <div class="services-single__main__title__text-w-underline">
              <h5>Our</h5>
              <div class="services-single__main__title__text-w-underline__line"></div>
            </div>
            <h2>Services</h2>
          </div>
          <div class="row">
 
            <div class="col-12 col-lg-3 wow fadeInLeftBig">
              <div class="services-single__main__tabs-nav">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">

                  <li class="nav-item ">
                    <a class="nav-link active scrollTo" id="pills-weeding-tab" data-toggle="pill" href="#pills-weeding"
                      role="tab" aria-controls="pills-weeding" aria-selected="true">
                      <div class="tabs-pills-icon">
                        <img src="img/temp/services/weddings-icon.png" alt="Weedings">
                      </div>
                      Weedings
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link scrollTo" id="pills-graduation-tab" data-toggle="pill" href="#pills-graduation"
                      role="tab" aria-controls="pills-graduation" aria-selected="false">
                      <div class="tabs-pills-icon">
                        <img src="img/temp/services/graduation-icon.png" alt="graduation">
                      </div>
                      Graduation Parties
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link scrollTo" id="pills-throwback-tab" data-toggle="pill" href="#pills-throwback"
                      role="tab" aria-controls="pills-throwback" aria-selected="false">
                      <div class="tabs-pills-icon">
                        <img src="img/temp/services/throwback-icon.png" alt="throwback">
                      </div>
                      Throwback Parties
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link scrollTo" id="pills-sweet-tab" data-toggle="pill" href="#pills-sweet" role="tab"
                      aria-controls="pills-sweet" aria-selected="false">
                      <div class="tabs-pills-icon">
                        <img src="img/temp/services/sweet-icon.png" alt="sweet">
                      </div>
                      Sweet 16's
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link scrollTo" id="pills-anniversaries-tab" data-toggle="pill"
                      href="#pills-anniversaries" role="tab" aria-controls="pills-anniversaries" aria-selected="false">
                      <div class="tabs-pills-icon">
                        <img src="img/temp/services/anniversaries-icon.png" alt="anniversaries">
                      </div>
                      Anniversaries
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link scrollTo" id="pills-benefits-tab" data-toggle="pill" href="#pills-benefits"
                      role="tab" aria-controls="pills-benefits" aria-selected="false">
                      <div class="tabs-pills-icon">
                        <img src="img/temp/services/benefits-icon.png" alt="benefits">
                      </div>
                      Benefits
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link scrollTo" id="pills-karaoke-tab" data-toggle="pill" href="#pills-karaoke"
                      role="tab" aria-controls="pills-karaoke" aria-selected="false">
                      <div class="tabs-pills-icon">
                        <img src="img/temp/services/karaoke-icon.png" alt="karaoke">
                      </div>
                      Karaoke
                    </a>
                  </li>

                </ul>
              </div>
            </div>

            <div class="col-12 col-lg-9 wow fadeInUpBig">

              <div class="services-single__main__tabs-content tab-content" id="pills-tabContent">

                <div class="services-single__main__tabs-content__item tab-pane fade show active" id="pills-weeding"
                  role="tabpanel" aria-labelledby="pills-weeding-tab">
                  <div class="services-single__main__tabs-content__item__image">
                    <img src="img/temp/services/tab-weedings.png" alt="Weedings">
                  </div>
                  <div class="services-single__main__tabs-content__item__info">
                    <div class="services-single__main__tabs-content__item__info__text">
                      <p>Congratulations on your engagement and upcoming wedding. This is the second most important day
                        of your life next to the birth of your children.
                      </p>
                      <p>
                        The music itself sets the tone for your entire wedding! Here at Moore 2 Music, we understand the
                        impact that a Wedding DJ can have on your entire day. Craig ensures that your event moves
                        smoothly and fluidly from one flawless moment to the next. More than a big party, your wedding
                        is a celebration of your love and how you got to where you are…together. It is a sequence of
                        special events, each deserving its own special place in time. Craig is known for creating
                        exciting, yet elegant vibes on the dance floor for the entire wedding! Moore 2 Music has the
                        widest variety of music in our collections, ranging from 1940’s Big Band to the Hottest Hits of
                        today and each era in between. We are happy to adhere to any special requests including cultural
                        accommodations and specific song lists. From the ceremony to the first dance, we make sure each
                        moment has its ideal energy. If you’re not sure where to start, we have you covered! In charge
                        of total vibe and pace of the room, Wedding DJ’s create the soundtrack for your wedding. Craig
                        is an expert on the music necessary for a successful evening. We love to see our clients and
                        their guests enjoying oldies, sentimental moments, laughter, family traditions and especially
                        heartfelt moments for the bride and groom. Lists suggestions for the bride and grooms first
                        dance, mother-son dance, father-daughter dance, and the last dance are always provided for our
                        clients. The wedding DJ is the guide for the course of the evening! Craig WILL play a wide
                        variety of music that fit our clients vision and needs perfectly. We want your guests having so
                        much fun they’ll be talking about the music the whole ride home!
                      </p>
                    </div>
                    <div class="services-single__main__tabs-content__item__info__price">
                      <h3>
                        Weddings : $1800.00
                      </h3>
                    </div>
                    <div class="services-single__main__tabs-content__item__info__button">
                      <button type="button" class="btn" data-toggle="modal" data-target="#check-inquire1">
                       INQUIRE
                      </button>
                  </div>
                  <div class="services-single__main__tabs-content__item__info__modal modal fade" id="check-inquire1"
                  tabindex="-1" role="dialog" aria-labelledby="check" aria-hidden="true">
                  <div class="home-header__modal__dialog modal-dialog modal-dialog-centered" role="document">
                    <div class="home-header__modal__dialog__content modal-content">
                      <div class="home-header__modal__dialog__content__head modal-header">
                        <h5 class="home-header__modal__dialog__content__head__title modal-title" id="check-modal-inquire-1">
                          Are We
                          Available?</h5>
                        <button type="button" class="home-header__modal__dialog__content__head__close close"
                          data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <form action="#">
                        <div class="home-header__modal__dialog__content__body modal-body">
                          <div class="home-header__modal__dialog__content__body__description">
                            <p>Choose the date of your event below to immediately find out if your date is available
                            </p>
                          </div>
                          <div class="home-header__modal__dialog__content__body__select">
                            <select id="mounth">
                              <option value="hide">Month</option>
                              <option value="january" rel="icon-temperature">January</option>
                              <option value="february">February</option>
                              <option value="march">March</option>
                              <option value="april">April</option>
                              <option value="may">May</option>
                              <option value="june">June</option>
                              <option value="july">July</option>
                              <option value="august">August</option>
                              <option value="september">September</option>
                              <option value="october">October</option>
                              <option value="november">November</option>
                              <option value="december">December</option>
                            </select>
                            <select id="day">
                              <option>Day</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                            </select>
                            <select id="year">
                              <option>Year</option>
                              <option value="2020">2020</option>
                              <option value="2019">2019</option>
                              <option value="2018">2018</option>
                              <option value="2017">2017</option>
                              <option value="2016">2016</option>
                              <option value="2015">2015</option>
                              <option value="2014">2014</option>
                              <option value="2013">2013</option>
                              <option value="2012">2012</option>
                              <option value="2011">2011</option>
                              <option value="2010">2010</option>
                              <option value="2009">2009</option>
                              <option value="2008">2008</option>
                            </select>
                          </div>
                          <div class="home-header__modal__dialog__content__body__button">
                            <div class="modal-submit-button btn btn-default sn_form_submit"
                            onclick="sn_form_submit('request-form-3','config_email_1')">Check Now
                          </div>
                          </div>
                        </div>
                      </form>
                     
                    </div>
                  </div>
                </div>
                  </div>
                </div>

                <div class="services-single__main__tabs-content__item tab-pane fade" id="pills-graduation"
                  role="tabpanel" aria-labelledby="pills-graduation-tab">
                  <div class="services-single__main__tabs-content__item__image">
                    <img src="img/temp/services/graduation.png" alt="graduation">
                  </div>

                  <div class="services-single__main__tabs-content__item__info">
                    <div class="services-single__main__tabs-content__item__info__text">
                      <p>Congratulations on your brand-new website from www.ait.com! Our highly professional and
                        experienced project managers, designers, and developers have worked together to create your
                        high-quality, customized website. You are seeing this text because we have not received your
                        content!
                      </p>

                      <p>
                        Please submit your content as soon as possible to your project manager so it can be published to
                        your new website! Do you need help writing your content? AIT offers content writing services for
                        $50 per page. Please contact us today at (877) 404-4149 for more information about this service!
                        Congratulations on your brand-new website from www.ait.com! Our highly professional and
                        experienced project managers, designers, and developers have worked together to create your
                        high-quality, customized website. You are seeing this text because we have not received your
                        content!
                      </p>
                      <p>Please submit your content as soon as possible to your project manager so it can be published
                        to your new website! Do you need help writing your content? AIT offers content writing services
                        for $50 per page. Please contact us today at (877) 404-4149 for more information about this
                        service!
                      </p>
                    </div>
                    <div class="services-single__main__tabs-content__item__info__price">
                      <h3>
                        Select the date of your event. Then click on the check availability button to instantly check
                        for our availability.
                      </h3>
                    </div>
                    <div class="services-single__main__tabs-content__item__info__button">
                      <button type="button" class="btn" data-toggle="modal" data-target="#check1">
                        Check availability
                      </button>
                    </div>

                    <div class="services-single__main__tabs-content__item__info__modal modal fade" id="check1"
                      tabindex="-1" role="dialog" aria-labelledby="check" aria-hidden="true">
                      <div class="home-header__modal__dialog modal-dialog modal-dialog-centered" role="document">
                        <div class="home-header__modal__dialog__content modal-content">
                          <div class="home-header__modal__dialog__content__head modal-header">
                            <h5 class="home-header__modal__dialog__content__head__title modal-title" id="check-modal">
                              Are We
                              Available?</h5>
                            <button type="button" class="home-header__modal__dialog__content__head__close close"
                              data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="home-header__modal__dialog__content__body modal-body">
                            <div class="home-header__modal__dialog__content__body__description">
                              <p>Choose the date of your event below to immediately find out if your date is available
                              </p>
                            </div>
                            <div class="home-header__modal__dialog__content__body__select">
                              <select id="mounth">
                                <option value="hide">Month</option>
                                <option value="january" rel="icon-temperature">January</option>
                                <option value="february">February</option>
                                <option value="march">March</option>
                                <option value="april">April</option>
                                <option value="may">May</option>
                                <option value="june">June</option>
                                <option value="july">July</option>
                                <option value="august">August</option>
                                <option value="september">September</option>
                                <option value="october">October</option>
                                <option value="november">November</option>
                                <option value="december">December</option>
                              </select>
                              <select id="day">
                                <option>Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                              </select>
                              <select id="year">
                                <option>Year</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                              </select>
                            </div>
                            <div class="home-header__modal__dialog__content__body__button">
                              <button type="submit">
                                Check Now
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="services-single__main__tabs-content__item tab-pane fade" id="pills-throwback"
                  role="tabpanel" aria-labelledby="pills-throwback-tab">

                  <div class="services-single__main__tabs-content__item__gallery">
                    <div class="row">
                      <div class="col-6 col-lg-4">
                        <figure>
                          <a href="img/temp/services/gallery1.png" data-fancybox="gallery">
                            <img src="img/temp/services/gallery1.png" alt="gallery" />
                          </a>
                        </figure>
                      </div>
                      <div class="col-6 col-lg-4">
                        <figure>
                          <a href="img/temp/services/gallery2.png" data-fancybox="gallery">
                            <img src="img/temp/services/gallery2.png" alt="" />
                          </a>
                        </figure>
                      </div>
                      <div class="col-6 col-lg-4">
                        <figure>
                          <a href="img/temp/services/gallery3.png" data-fancybox="gallery">
                            <img src="img/temp/services/gallery3.png" alt="gallery" />
                          </a>
                        </figure>
                      </div>

                      <div class="col-6 col-lg-4">
                        <figure>
                          <a href="img/temp/services/gallery4.png" data-fancybox="gallery">
                            <img src="img/temp/services/gallery4.png" alt="gallery" />
                          </a>
                        </figure>
                      </div>
                      <div class="col-6 col-lg-4">
                        <figure>
                          <a href="img/temp/services/gallery5.png" data-fancybox="gallery">
                            <img src="img/temp/services/gallery5.png" alt="gallery" />
                          </a>
                        </figure>
                      </div>
                      <div class="col-6 col-lg-4">
                        <figure>
                          <a href="img/temp/services/gallery6.png" data-fancybox="gallery">
                            <img src="img/temp/services/gallery6.png" alt="gallery" />
                          </a>
                        </figure>
                      </div>
                    </div>
                  </div>
                  <div class="services-single__main__tabs-content__item__info">
                    <p>Congratulations on your brand-new website from www.ait.com! Our highly professional and
                      experienced project managers, designers, and developers have worked together to create your
                      high-quality, customized website. You are seeing this text because we have not received your
                      content!
                    </p>
                    <p>Please submit your content as soon as possible to your project manager so it can be published to
                      your new website! Do you need help writing your content? AIT offers content writing services for
                      $50 per page. Please contact us today at (877) 404-4149 for more information about this service!
                    </p>
                  </div>

                  <div class="services-single__main__tabs-content__item__red-text">
                    <h3>Select the date of your event. Then click on the check availability button to instantly check
                      for our availability.
                    </h3>
                  </div>

                  <div class="services-single__main__tabs-content__item__button">
                    <button type="button" class="btn" data-toggle="modal" data-target="#check2">
                      Check availability
                    </button>
                  </div>
                  <div class="services-single__main__tabs-content__item__info__modal modal fade" id="check2"
                    tabindex="-1" role="dialog" aria-labelledby="check" aria-hidden="true">
                    <div class="home-header__modal__dialog modal-dialog modal-dialog-centered" role="document">
                      <div class="home-header__modal__dialog__content modal-content">
                        <div class="home-header__modal__dialog__content__head modal-header">
                          <h5 class="home-header__modal__dialog__content__head__title modal-title" id="check-modal">
                            Are We
                            Available?</h5>
                          <button type="button" class="home-header__modal__dialog__content__head__close close"
                            data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="home-header__modal__dialog__content__body modal-body">
                          <div class="home-header__modal__dialog__content__body__description">
                            <p>Choose the date of your event below to immediately find out if your date is available
                            </p>
                          </div>
                          <div class="home-header__modal__dialog__content__body__select">
                            <select id="mounth">
                              <option value="hide">Month</option>
                              <option value="january" rel="icon-temperature">January</option>
                              <option value="february">February</option>
                              <option value="march">March</option>
                              <option value="april">April</option>
                              <option value="may">May</option>
                              <option value="june">June</option>
                              <option value="july">July</option>
                              <option value="august">August</option>
                              <option value="september">September</option>
                              <option value="october">October</option>
                              <option value="november">November</option>
                              <option value="december">December</option>
                            </select>
                            <select id="day">
                              <option>Day</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                            </select>
                            <select id="year">
                              <option>Year</option>
                              <option value="2020">2020</option>
                              <option value="2019">2019</option>
                              <option value="2018">2018</option>
                              <option value="2017">2017</option>
                              <option value="2016">2016</option>
                              <option value="2015">2015</option>
                              <option value="2014">2014</option>
                              <option value="2013">2013</option>
                              <option value="2012">2012</option>
                              <option value="2011">2011</option>
                              <option value="2010">2010</option>
                              <option value="2009">2009</option>
                              <option value="2008">2008</option>
                            </select>
                          </div>
                          <div class="home-header__modal__dialog__content__body__button">
                            <button type="submit">
                              Check Now
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="services-single__main__tabs-content__item tab-pane fade" id="pills-sweet" role="tabpanel"
                  aria-labelledby="pills-sweet-tab">

                  <div class="services-single__main__tabs-content__item__image">
                    <img src="img/temp/services/sweet.png" alt="sweet">
                  </div>

                  <div class="services-single__main__tabs-content__item__info">
                    <ul>

                      <li>The hottest young fun handsome staff playing the best dance music to keep the dance floor
                        lit all night long.
                      </li>

                      <li>High definition photography formal pictures dancing pictures cake pictures in the sweet 16
                        dress pictures.
                      </li>

                      <li>Visual displays pictures shown of your beautiful daughter during the party that will bring
                        chills to the spine and a tear to your eye.
                      </li>

                      <li>Set the room enhancement with lights lights lights feel and see colors that move with the
                        music.
                      </li>

                      <li>Feel secure with us a professional DJ will make a big difference when all your favorite
                        songs are being heard and danced to at the most important birthday of your life.
                      </li>

                    </ul>

                    <h4>Call us today 518-866-2677 so excited to quote you the cost of this package today’s special.
                    </h4>
                  </div>

                  <div class="services-single__main__tabs-content__item__red-text">
                    <h3>Select the date of your event. Then click on the check availability button to instantly check
                      for our availability.
                    </h3>
                  </div>

                  <div class="services-single__main__tabs-content__item__button">
                    <button type="button" class="btn" data-toggle="modal" data-target="#check3">
                      Check availability
                    </button>
                  </div>

                  <div class="services-single__main__tabs-content__item__info__modal modal fade" id="check3"
                    tabindex="-1" role="dialog" aria-labelledby="check" aria-hidden="true">
                    <div class="home-header__modal__dialog modal-dialog modal-dialog-centered" role="document">
                      <div class="home-header__modal__dialog__content modal-content">
                        <div class="home-header__modal__dialog__content__head modal-header">
                          <h5 class="home-header__modal__dialog__content__head__title modal-title" id="check-modal">
                            Are We
                            Available?</h5>
                          <button type="button" class="home-header__modal__dialog__content__head__close close"
                            data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="home-header__modal__dialog__content__body modal-body">
                          <div class="home-header__modal__dialog__content__body__description">
                            <p>Choose the date of your event below to immediately find out if your date is available
                            </p>
                          </div>
                          <div class="home-header__modal__dialog__content__body__select">
                            <select id="mounth">
                              <option value="hide">Month</option>
                              <option value="january" rel="icon-temperature">January</option>
                              <option value="february">February</option>
                              <option value="march">March</option>
                              <option value="april">April</option>
                              <option value="may">May</option>
                              <option value="june">June</option>
                              <option value="july">July</option>
                              <option value="august">August</option>
                              <option value="september">September</option>
                              <option value="october">October</option>
                              <option value="november">November</option>
                              <option value="december">December</option>
                            </select>
                            <select id="day">
                              <option>Day</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                            </select>
                            <select id="year">
                              <option>Year</option>
                              <option value="2020">2020</option>
                              <option value="2019">2019</option>
                              <option value="2018">2018</option>
                              <option value="2017">2017</option>
                              <option value="2016">2016</option>
                              <option value="2015">2015</option>
                              <option value="2014">2014</option>
                              <option value="2013">2013</option>
                              <option value="2012">2012</option>
                              <option value="2011">2011</option>
                              <option value="2010">2010</option>
                              <option value="2009">2009</option>
                              <option value="2008">2008</option>
                            </select>
                          </div>
                          <div class="home-header__modal__dialog__content__body__button">
                            <button type="submit">
                              Check Now
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="services-single__main__tabs-content__item tab-pane fade" id="pills-anniversaries"
                  role="tabpanel" aria-labelledby="pills-anniversaries-tab">
                  <div class="services-single__main__tabs-content__item__title">
                    <h2>Our Partners</h2>
                  </div>

                  <div class="row partners-block">
                    <div class="col-4 col-md-4 col-lg-4">
                      <div class="services-single__main__tabs-content__item__partner">
                        <img src="img/temp/services/logo1.png" alt="logo">
                      </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-4">
                      <div class="services-single__main__tabs-content__item__partner">
                        <img src="img/temp/services/logo2.png" alt="logo">
                      </div>
                    </div>

                    <div class="col-4 col-md-4 col-lg-4">
                      <div class="services-single__main__tabs-content__item__partner">
                        <img src="img/temp/services/logo3.png" alt="logo">
                      </div>
                    </div>

                    <div class="col-4 col-md-4 col-lg-4">
                      <div class="services-single__main__tabs-content__item__partner">
                        <img src="img/temp/services/logo4.png" alt="logo">
                      </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-4">
                      <div class="services-single__main__tabs-content__item__partner">
                        <img src="img/temp/services/logo5.png" alt="logo">
                      </div>
                    </div>
                  </div>

                  <div class="services-single__main__tabs-content__item__info">
                    <p>Congratulations on your brand-new website from www.ait.com! Our highly professional and
                      experienced project managers, designers, and developers have worked together to create your
                      high-quality, customized website. You are seeing this text because we have not received your
                      content!
                    </p>

                    <p>Please submit your content as soon as possible to your project manager so it can be published to
                      your new website! Do you need help writing your content? AIT offers content writing services for
                      $50 per page. Please contact us today at (877) 404-4149 for more information about this service!
                    </p>

                    <p>Congratulations on your brand-new website from www.ait.com! Our highly professional and
                      experienced project managers, designers, and developers have worked together to create your
                      high-quality, customized website. You are seeing this text because we have not received your
                      content!
                    </p>
                  </div>

                  <div class="services-single__main__tabs-content__item__red-text">
                    <h3>Select the date of your event. Then click on the check availability button to instantly check
                      for our availability.
                    </h3>
                  </div>

                  <div class="services-single__main__tabs-content__item__button">
                    <button type="button" class="btn" data-toggle="modal" data-target="#check4">
                      Check availability
                    </button>
                  </div>

                  <div class="services-single__main__tabs-content__item__modal modal fade" id="check4" tabindex="-1"
                    role="dialog" aria-labelledby="check" aria-hidden="true">
                    <div class="home-header__modal__dialog modal-dialog modal-dialog-centered" role="document">
                      <div class="home-header__modal__dialog__content modal-content">
                        <div class="home-header__modal__dialog__content__head modal-header">
                          <h5 class="home-header__modal__dialog__content__head__title modal-title" id="check-modal">
                            Are We Available?
                          </h5>
                          <button type="button" class="home-header__modal__dialog__content__head__close close"
                            data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="home-header__modal__dialog__content__body modal-body">
                          <div class="home-header__modal__dialog__content__body__description">
                            <p>Choose the date of your event below to immediately find out if your date is available
                            </p>
                          </div>
                          <div class="home-header__modal__dialog__content__body__select">
                            <select id="mounth">
                              <option value="hide">Month</option>
                              <option value="january" rel="icon-temperature">January</option>
                              <option value="february">February</option>
                              <option value="march">March</option>
                              <option value="april">April</option>
                              <option value="may">May</option>
                              <option value="june">June</option>
                              <option value="july">July</option>
                              <option value="august">August</option>
                              <option value="september">September</option>
                              <option value="october">October</option>
                              <option value="november">November</option>
                              <option value="december">December</option>
                            </select>
                            <select id="day">
                              <option>Day</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                            </select>
                            <select id="year">
                              <option>Year</option>
                              <option value="2020">2020</option>
                              <option value="2019">2019</option>
                              <option value="2018">2018</option>
                              <option value="2017">2017</option>
                              <option value="2016">2016</option>
                              <option value="2015">2015</option>
                              <option value="2014">2014</option>
                              <option value="2013">2013</option>
                              <option value="2012">2012</option>
                              <option value="2011">2011</option>
                              <option value="2010">2010</option>
                              <option value="2009">2009</option>
                              <option value="2008">2008</option>
                            </select>
                          </div>
                          <div class="home-header__modal__dialog__content__body__button">
                            <button type="submit">
                              Check Now
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="services-single__main__tabs-content__item tab-pane fade" id="pills-benefits" role="tabpanel"
                  aria-labelledby="pills-benefits-tab">
                  <div class="services-single__main__tabs-content__item__image">
                    <img src="img/temp/services/benefits.png" alt="benefits">
                  </div>

                  <div class="row">
                    <div class="col-12 col-lg-6">
                      <div class="services-single__main__tabs-content__item__info">
                        <p>Craig believes the best way to pay it forward is to be part of a benefit as the
                          entertainment. He has done benefits for cancer patients, dirt racing teams The American Legion
                          and all the way to events for farmers who have lost almost everything in fires. Craig does his
                          best to do all events he is asked. When Moore 2 Music is involved he does his absolute best to
                          help raise the most amount of money possible.
                        </p>
                      </div>
                      <div class="services-single__main__tabs-content__item__red-text">
                        <h3>Call us today 518-866-2677 or</h3>
                      </div>

                      <div class="services-single__main__tabs-content__item__button">
                        <a href="#">
                          Contact us
                        </a>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6">
                      <div class="services-single__main__tabs-content__item__subimage">
                        <img src="img/temp/services/benefits-subimg.png" alt="benefit">
                        <p>Craig Moore on stage with the Korona family during their benefit in 2014.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="services-single__main__tabs-content__item tab-pane fade" id="pills-karaoke" role="tabpanel"
                  aria-labelledby="pills-karaoke-tab">
                  <div class="services-single__main__tabs-content__item__image">
                    <img src="img/temp/services/karaoke.png" alt="karaoke">
                  </div>

                  <div class="services-single__main__tabs-content__item__video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/bCFaIH3T0Zk" frameborder="0"
                      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                  </div>

                  <div class="services-single__main__tabs-content__item__info">
                    <p class="video-first-text">Karaoke:</p>
                    <p>You probably know that karaoke (カラオケ) is a Japanese word. It's a blend of twowords — kara
                      (“empty”) + oke (short for “orchestra”). Karaoke is a form of entertainment where an amateur
                      singer sings along with recorded instrumental music
                    </p>
                    <p>We have offered karaoke since 2014 and use a program that has over 30,000 titles with more
                      updated weekly. This is a fun add on to any event. Ask us for details.
                    </p>
                  </div>

                  <div class="services-single__main__tabs-content__item__button">
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