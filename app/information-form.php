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

    <section class="information-form">
      <div class="container">
        <div class="information-form__main">
          <div class="information-form__main__title wow fadeInDownBig">
            <div class="information-form__main__title__text-w-underline">
              <h5>Moore 2 music</h5>
              <div class="information-form__main__title__text-w-underline__line"></div>
            </div>
            <h2>Information Request Form</h2>
          </div>
          <div class="information-form__main__form">
            <form action="#">
              <div class="information-form__main__form__subtitle wow fadeInLeftBig">
                <h3>Good News! The date you selected is available!</h3>
              </div>
              <div class="information-form__main__form__date wow fadeInRightBig">
                <h4>Date Of Event*</h4>
                <p>Sunday, June 7, 2020</p>
              </div>
              <div class="row wow fadeInLeftBig">

                <div class="col-12 col-lg-4">
                  <div class="information-input">
                    <label for="f_name">Fast Name*</label>
                    <input type="text" id="f_name">
                  </div>
                </div>

                <div class="col-12 col-lg-4">
                  <div class="information-input">
                    <label for="l_name">Last Name*</label>
                    <input type="text" id="l_name">
                  </div>
                </div>

                <div class="col-12 col-lg-4">
                  <div class="information-input">
                    <label for="email-input">Email Address*</label>
                    <input type="email" id="email-input">
                  </div>
                </div>

                <div class="col-12 col-lg-4">
                  <div class="information-input">
                    <label for="mailing-input">Mailing Address*</label>
                    <input type="text" id="mailing-input">
                  </div>
                </div>

                <div class="col-12 col-lg-4">
                  <div class="information-input">
                    <label for="mailing-input-2">Mailing Address Line 2</label>
                    <input type="text" id="mailing-input-2">
                  </div>
                </div>

                <div class="col-12 col-lg-4">
                  <div class="information-input">
                    <label for="city-input">City*</label>
                    <input type="text" id="city-input">
                  </div>
                </div>

                <div class="col-12 col-lg-3">
                  <div class="information-input">
                    <label for="state-input">State*</label>
                    <input type="text" id="state-input">
                  </div>
                </div>

                <div class="col-12 col-lg-2">
                  <div class="information-input">
                    <label for="zipcode-input">Zipcode*</label>
                    <input type="number" id="zipcode-input">
                  </div>
                </div>

                <div class="col-12 col-lg-3">
                  <div class="information-input">
                    <label for="tel-input">Telephone*</label>
                    <input type="tel" id="tel-input">
                  </div>
                </div>

                <div class="col-12 col-lg-4">
                  <div class="information-input">
                    <label for="time-input">Best Time to Reach You</label>
                    <input type="text" id="time-input">
                  </div>
                </div>

                <div class="col-12 col-lg-2">
                  <div class="information-input">
                    <label for="guest-input">Guest Count</label>
                    <input type="number" id="guest-input">
                  </div>
                </div>

                <div class="col-12 col-lg-2">
                  <div class="information-input">
                    <label for="start-time-input">Start Time</label>
                    <input type="number" id="start-time-input">
                  </div>
                </div>

                <div class="col-12 col-lg-2">
                  <div class="information-input">
                    <label for="end-time-input">End Time</label>
                    <input type="number" id="end-time-input">
                  </div>
                </div>

                <div class="col-12 col-lg-6">
                  <div class="information-input">
                    <label for="event-loc-input">Event Location (venue)*</label>
                    <select id="event-loc-input">
                      <option value="0">Pleasd see ect a Vanue</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>
                </div>

              </div>
              <div class="information-form__main__form__other-form-description wow fadeInRightBig">
                <p>If your event location is not listed above please fill in the following</p>
              </div>
              <div class="row wow fadeInUpBig">
                <div class="col-12 col-lg-4">
                  <div class="information-input">
                    <label for="event-loc-other">Event Location (Venue)</label>
                    <input type="text" id="event-loc-other">
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="information-input">
                    <label for="event-loc-city">Event Location (City)</label>
                    <input type="text" id="event-loc-city">
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <div class="information-input">
                    <label for="event-loc-state">Event Location (State)</label>
                    <input type="text" id="event-loc-state">
                  </div>
                </div>
                <div class="col-12 col-lg-6">
                  <div class="information-input">
                    <label for="type-of-even">Type Of Even:*</label>
                    <select id="type-of-even">
                      <option value="0">Pleasd select</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-lg-6">
                  <div class="information-input">
                    <label for="desired-package">Package Desired</label>
                    <select id="desired-package">
                      <option value="0">Select a Package</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-lg-12">
                  <div class="information-input">
                    <label for="information-question">Additional Questions Or Event Details</label>
                    <textarea name="information-question" id="information-question" style="resize: none;"></textarea>
                  </div>
                </div>
                <div class="col-12 col-lg-12">
                  <div class="information-input">
                    <label for="hear-about">How did you hear about us?</label>
                    <input type="text" id="hear-about"></input>
                  </div>
                </div>
              </div>
              <div class="information-form__main__form__submit">
                <!-- <input type="submit" value="SUBMIT"> -->
                <div class="information-form__main__form__submit__button btn btn-default sn_form_submit" onClick="sn_form_submit('request-form','config_email_1')">SUBMIT</div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main>
  <?php require ("tpl/footer.php");?>
</body>

</html>