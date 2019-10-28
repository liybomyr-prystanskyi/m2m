<header class="home-header wow fadeInLeftBig">
  <nav class="navbar navbar-expand-md navbar-fixed-top navbar-dark main-nav home-header__content">
    <div class="container">
      <div class="navbar-collapse w-100 collapse nav-content order-2 home-header__content__left">
        <ul class="nav navbar-nav d-flex justify-content-start w-100">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Events</a>
          </li>
        </ul>
      </div>
      <ul class="nav navbar-nav text-nowrap flex-row mx-md-auto order-1 order-md-2" style="z-index: 200">
        <li class="nav-item">
          <a href="#">
            <img class="brand-style" src="img/temp/home/logo.png" alt="image">
          </a>
        </li>
        <button class="navbar-toggler toggle-button" type="button" data-toggle="collapse" data-target=".nav-content"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </ul>
      <div class="navbar-collapse w-100 collapse nav-content order-3 order-md-3 home-header__content__right">
        <ul class=" nav navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Faqs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <div class="home-header__check">
          <button type="button" class="btn" data-toggle="modal" data-target="#check">
            Check availability
          </button>
        </div>
      </div>
      <div class="home-header__modal modal fade" id="check" tabindex="-1" role="dialog" aria-labelledby="check"
        aria-hidden="true">
        <div class="home-header__modal__dialog modal-dialog modal-dialog-centered" role="document">
          <div class="home-header__modal__dialog__content modal-content">
            <div class="home-header__modal__dialog__content__head modal-header">
              <h5 class="home-header__modal__dialog__content__head__title modal-title" id="check-modal">Are We
                Available?</h5>
              <button type="button" class="home-header__modal__dialog__content__head__close close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="#" id="request-form-3">
              <div class="home-header__modal__dialog__content__body modal-body">
                <div class="home-header__modal__dialog__content__body__description">
                  <p>Choose the date of your event below to immediately find out if your date is available</p>
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
  </nav>
</header>