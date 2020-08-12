
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Стоматология в Алмате">
  <meta name="author" content="DentalExpert">
  <title>Стоматология</title>
  <!-- Bootstrap core CSS -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"> -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
          <script type="text/javascript">
            var map;

            DG.then(function () {
                map = DG.map('map', {
                    center: [43.237269, 76.93315623],
                    zoom: 13,
					scrollWheelZoom: false
                });

                DG.marker([43.237269, 76.93315623]).addTo(map).bindPopup('стоматология DentalExperts!');
            });
        </script>
  <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="header__body">
        <a href="#" class="header_logo">
          <img src="images/logo.png" alt="">
        </a>
        <div class="header__burger">
          <span></span>
        </div>
        <nav class="header__menu">
          <ul class="header__list">
            <li>
              <a href="#" class="header__link">Главная</a>
            </li>
            <li>
              <a href="#about" class="header__link">О нас</a>
            </li>
            <li>
              <a href="#services" class="header__link">Услуги</a>
            </li>
            <li>
              <a href="#price-list" class="header__link">Цены</a>
            </li>
            <li>
              <a href="#review" class="header__link">Отзовы</a>
            </li>
            <li>
              <a href="#contact" class="header__link">Контакты</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <section class="intro_section page_mainslider ds">
  	<div class="flexvideo">
  		<ul class="video-elements">
  			<li>
          <div class="video-box">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
              <source src="video/Dentist_6.mp4" type="video/mp4">
              <source src="video/Dentist_6.webm" type="video/webm">
              <source src="video/Dentist_6.ogv" type="video/ogv">
            </video>
          </div>
          <div class="container">
    					<div class="row">
    						<div class="col-sm-12">
    							<div class="video_description_wrapper">
    								<div class="video_description">
    									<div class="intro-layer" data-animation="slideExpandUp">
    										<h3>Стоматология Алматы</h3>
    									</div>
    									<div class="intro-layer" data-animation="slideExpandUp">
    										<p class="fontsize_20">Если твоя улыбка тебе не идет, то ты должен идти ко мне! Семейная стоматология с женским акцентом.</p>
    										<a href="" class="btn text-uppercase" data-toggle="modal" data-target="#modalContactForm">Записаться на прием</a>
    									</div>
    								</div> <!-- eof .slide_description -->
    							</div> <!-- eof .slide_description_wrapper -->
    						</div> <!-- eof .col-* -->
    					</div><!-- eof .row -->
    				</div><!-- eof .container -->
  			</li>
  		</ul>
  	</div> <!-- eof flexslider -->
  </section>

<!-- Boxes section -->
<section class="columns_padding_0 columns_margin_0" id="features-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<div class="with_padding maindarker3_bg_color topborder_radius_4 feature-teaser">
				    <img src="images/certification.png" alt="" class="teaser_icon">
				    <p class="fontsize_18 semibold topmargin_15 bottommargin_5">Сертификация</p>
				    <p class="margin_0">
				    	Привет мир!
				    </p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<div class="with_padding maindarker2_bg_color topborder_radius_4 feature-teaser">
				    <img src="images/time.png" alt="" class="teaser_icon">
				    <p class="fontsize_18 semibold topmargin_15 bottommargin_5">24/7 Открыто</p>
				    <p class="margin_0">
				    	Привет мир!
				    </p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<div class="with_padding maindarker1_bg_color topborder_radius_4 feature-teaser">
				    <img src="images/personal.png" alt="" class="teaser_icon">
				    <p class="fontsize_18 semibold topmargin_15 bottommargin_5">Персонал</p>
				    <p class="margin_0">
				          Привет мир!
				    </p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<div class="with_padding main_bg_color topborder_radius_4 feature-teaser">
				    <img src="images/like.png" alt="" class="teaser_icon ">
				    <p class="fontsize_18 semibold topmargin_15 bottommargin_5">Цены</p>
				    <p class="margin_0">
				    	Привет мир!
				    </p>
				</div>
			</div>
		</div>
	</div>
  </section>
<!-- Boxes section end -->

<!-- About section -->
<section class="about section_padding_110" id="about">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="side-item about-item">
					<div class="row display_table_md">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 display_table_cell_md mb-5" data-aos="fade-right">
							<div class="with_backing">
								<img src="./images/about.jpg" alt="" class="border_radius_4">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 display_table_cell_md" data-aos="fade-left">
							<div class="item-content">
								<h2 class="section_header margin_0">Мы DentalExpert</h2>
								<hr class="main_bg_color-about dividersize_2_70 inline-block">
								<p>
									Главный критерий для нас это гигиена и соблюдение санитарных норм.
									Мы используем двухэтапное обезболивание лучшими анестетиками последнего
									поколения.
									Для лечения и протезирования используются новейшие сертифицированные препараты и
									материалы производства Германии, Франции и США.
									При пломбировании зубов в клинике используются только светоотверждаемые
									гелиоматериалы, производится полная косметическая реставрация зубов, восстановление
									разрушенных зубов на штифтах.
									В нашей клинике безболезненно снимаются зубные отложения и налет с помощью
									скайлера Kavo, аппарата фирмы Profiflex и эффективное отбеливание зубов препаратами
									фирмы Beyond.
									Команда ортодонтов трудится над созданием идальных улыбок, при помощи брекетов и
									элайнеров по современным протоколам, обновляя метологию.
									Лечение в наших клиниках направленно на максимальное сохранение живых зубов
									пациентов.
									Каждый день мы направляем все усилия на то чтобы, помочь Вам преодолеть душевный
									дискомфорт перед посещением стоматолога, вне зависимости от Вашего возраста!.
								</p>
								<p class="bold text-uppercase bottommargin_2">
									Стоматологическая профилактика
									<span class="bold pull-right">75%</span>
								</p>
								<div class="progress">
								  <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="75">
								  </div>
								</div>

								<p class="bold text-uppercase bottommargin_2">
									Обработка фтором
									<span class="bold pull-right">50%</span>
								</p>
								<div class="progress">
								  <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="50">
								  </div>
								</div>

								<p class="bold text-uppercase bottommargin_2">
									Удаление зуба
									<span class="bold pull-right">90%</span>
								</p>
								<div class="progress">
								  <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="90">
								  </div>
								</div>

								<p class="bold text-uppercase bottommargin_2">
									Заполнение полости
									<span class="bold pull-right">85%</span>
								</p>
								<div class="progress">
								  <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="85">
								  </div>
								</div>

								<!-- <a href="about.html" class="theme_button color1 topmargin_10">learn about us</a> -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About section end -->

<!-- Services <section> -->
<div class="services-background">
  <section class="services" id="services">
    <div class="container services-boxes">
      <h2 class="text-center">Наши услуги</h2>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <div class="services-box text-center" data-aos="fade-up">
            <img src="images/tooth-1.png" alt="">
            <h3>Базальная имплантация</h3>
            <p>Привет мир! Месси Лучший игрок мира.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <div class="services-box" data-aos="fade-left">
            <img src="images/tooth-2.png" alt="">
            <h3>Брекеты</h3>
            <p>Привет мир! Месси Лучший игрок мира.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <div class="services-box text-center" data-aos="fade-down">
            <img src="images/tooth-3.png" alt="">
            <h3>Виниры</h3>
            <p>Привет мир! Месси Лучший игрок мира.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-122">
          <div class="services-box" data-aos="fade-right">
            <img src="images/tooth-4.png" alt="">
            <h3>Зуб мудрости</h3>
            <p>Привет мир! Месси Лучший игрок мира.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <div class="services-box" data-aos="fade-left">
            <img src="images/tooth-5.png" alt="">
            <h3>Имплантация</h3>
            <p>Привет мир! Месси Лучший игрок мира.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <div class="services-box" data-aos="fade-up-right">
            <img src="images/tooth-6.png" alt="">
            <h3>Капа для выравнивания зубов</h3>
            <p>Привет мир! Месси Лучший игрок мира.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <div class="services-box" data-aos="fade-up-left">
            <img src="images/tooth-7.png" alt="">
            <h3>Корейские импланты</h3>
            <p>Привет мир! Месси Лучший игрок мира.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <div class="services-box" data-aos="fade-down-right">
            <img src="images/tooth-8.png" alt="">
            <h3>Лазерная имплантация</h3>
            <p>Привет мир! Месси Лучший игрок мира.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <div class="services-box" data-aos="fade-down-left">
            <img src="images/tooth-9.png" alt="">
            <h3>Ортодонт</h3>
            <p>Привет мир! Месси Лучший игрок мира.</p>
          </div>
        </div>
		    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <div class="services-box" data-aos="fade-right">
            <img src="images/tooth-10.png" alt="">
            <h3>Пломба</h3>
            <p>Привет мир! Месси Лучший игрок мира.</p>
          </div>
        </div>
		    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <div class="services-box" data-aos="fade-left">
            <img src="images/tooth-11.png" alt="">
            <h3>Протез</h3>
            <p>Привет мир! Месси Лучший игрок мира.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <div class="services-box" data-aos="fade-left">
            <img src="images/tooth-12.png" alt="">
            <h3>Удаление</h3>
            <p>Привет мир! Месси Лучший игрок мира.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
<!-- Services section end -->

<!-- Price section -->
<section id = "price-list" class="pricing py-5">
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h2 class="display-4">Цена</h2>
  <hr class="main_bg_color dividersize_2_70 inline-block">
</div>
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 col-sm-12 col-xs-122">
        <div class="card mb-5 mb-lg-0" data-aos="fade-up">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Чистка зубов</h4>
          </div>
            <div class="card-price-boxe">
              <h6 class="card-price text-center">15.000 тенге</h6>
              <p class="text-center"><span class="period">3 этапа</span></p>
            </div>
            <div class="card-body">
            <ul class="fa-ul mt-2 ml-0 mr-0">
              <li><i class="fa fa-check"></i>ультразвуковая чистка</li>
              <hr>
              <li><i class="fa fa-check"></i>Airflow</li>
              <hr>
              <li><i class="fa fa-check"></i></i>Полировка</li>
              <hr>
              <li><i class="fa fa-check"></i></i>Фторирование зубов</li>
            </ul>
            <div class="btn-card text-center">
              <a href="" class="btn text-uppercase" data-toggle="modal" data-target="#modalContactForm">Заказать</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
        <div class="card mb-5 mb-lg-0" data-aos="fade-up">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Лечение кариеса</h4>
          </div>
            <div class="card-price-boxe">
              <h6 class="card-price text-center">от 7500 тенге</h6>
              <p class="text-center"><span class="period">любой сложности</span></p>
            </div>
            <div class="card-body">
            <ul class="fa-ul mt-2 ml-0 mr-0">
              <li><i class="fa fa-check"></i>Коффердам</li>
              <hr>
              <li><i class="fa fa-check"></i>Пломбирование</li>
              <hr>
              <li><i class="fa fa-check"></i>Лечение каналов</li>
              <hr>
              <li><i class="fa fa-check"></i>Лечение осложнений</li>
            </ul>
            <div class="btn-card text-center">
              <a href="" class="btn text-uppercase" data-toggle="modal" data-target="#modalContactForm">Заказать</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
        <div class="card mb-5 mb-lg-0" data-aos="fade-up">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Брекеты</h4>
          </div>
            <div class="card-price-boxe">
              <h6 class="card-price text-center">от 50.000 тенге</h6>
              <p class="text-center"><span class="period">все виды</span></p>
            </div>
            <div class="card-body">
            <ul class="fa-ul mt-2 ml-0 mr-0">
              <li><i class="fa fa-check"></i>Лигатурные</li>
              <hr>
              <li><i class="fa fa-check"></i>Самолигирующие</li>
              <hr>
              <li><i class="fa fa-check"></i>Каппы для выравнивания зубов</li>
              <hr>
              <li><i class="fa fa-check"></i>Пластинки для выравнивания зубов</li>
            </ul>
            <div class="btn-card text-center">
              <a href="" class="btn text-uppercase" data-toggle="modal" data-target="#modalContactForm">Заказать</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
        <div class="card mb-5 mb-lg-0" data-aos="fade-up">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Импланты</h4>
          </div>
            <div class="card-price-boxe">
              <h6 class="card-price text-center">10.000 тенге</h6>
              <p class="text-center"><span class="period">любой сложности</span></p>
            </div>
            <div class="card-body">
            <ul class="fa-ul mt-2 ml-0 mr-0">
              <li><i class="fa fa-check"></i>Базальная</li>
              <hr>
              <li><i class="fa fa-check"></i>Лазерная</li>
              <hr>
              <li><i class="fa fa-check"></i>Широкий выбор произволителей</li>
              <hr>
              <li><i class="fa fa-check"></i>All_in-4</li>
            </ul>
            <div class="btn-card text-center">
              <a href="" class="btn text-uppercase" data-toggle="modal" data-target="#modalContactForm">Заказать</a>
            </div>
          </div>
        </div>
      </div>
</section>
<!-- Price ection end -->


<!-- Portfolio section -->
<section class="page_portfolio columns_padding_0 columns_margin_0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="isotope_container isotope row masonry-layout">

					<div class="isotope-item col-lg-3 col-md-4 col-sm-6">
						<div class="vertical-item gallery-item">
							<div class="item-media media-image-1">
								<!-- <img src="images/dentist-01.jpg" alt=""> -->
								<div class="media-links">
									<div class="links-wrap">
										<a class="p-view prettyPhoto " title="" rel="prettyPhoto[pp_gal]" href="images/dentist-01.jpg"></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="isotope-item col-lg-3 col-md-4 col-sm-6">
						<div class="vertical-item gallery-item">
							<div class="item-media media-image-2">
								<!-- <img src="images/dentist-02.jpg" alt=""> -->
								<div class="media-links">
									<div class="links-wrap">
										<a class="p-view prettyPhoto " title="" rel="prettyPhoto[pp_gal]" href="images/dentist-02.jpg"></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="isotope-item col-lg-3 col-md-4 col-sm-6">
						<div class="vertical-item gallery-item">
							<div class="item-media media-image-3">
								<!-- <img src="images/dentist-03.jpg" alt=""> -->
								<div class="media-links">
									<div class="links-wrap">
										<a class="p-view prettyPhoto " title="" rel="prettyPhoto[pp_gal]" href="images/dentist-03.jpg"></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="isotope-item col-lg-3 col-md-4 col-sm-6">
						<div class="vertical-item gallery-item">
							<div class="item-media media-image-4">
								<!-- <img src="images/dentist-04.jpg" alt=""> -->
								<div class="media-links">
									<div class="links-wrap">
										<a class="p-view prettyPhoto " title="" rel="prettyPhoto[pp_gal]" href="images/dentist-04.jpg"></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="isotope-item col-lg-6 col-md-8 col-sm-12">
						<div class="vertical-item gallery-item">
							<div class="item-media media-image-5">
								<!-- <img src="images/dentist-01.jpg" alt=""> -->
								<div class="media-links">
									<div class="links-wrap">
										<a class="p-view prettyPhoto " title="" rel="prettyPhoto[pp_gal]" href="images/dentist-05.jpg"></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="isotope-item col-lg-3 col-md-4 col-sm-6">
						<div class="vertical-item gallery-item">
							<div class="item-media media-image-6">
								<!-- <img src="images/dentist-01.jpg" alt=""> -->
								<div class="media-links">
									<div class="links-wrap">
										<a class="p-view prettyPhoto " title="" rel="prettyPhoto[pp_gal]" href="images/dentist-06.jpg"></a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- Portfolio section end -->

<!-- Review section -->
<section class="review section_padding_110" id="review">
	<div class="container">
		<div class="row topmargin_-5">
			<div class="col-sm-12 text-center">
				<h2 class="section_header margin_0">Что говорят наши пациенты</h2>
				<hr class="main_bg_color dividersize_2_70 inline-block">

                <div class="owl-carousel testimonials-owl-carousel topmargin_50"
                    data-margin="30"
                    data-items="9"
                    data-loop="true"
                    data-dots="true"
                    data-nav="false"
                    data-autoplay="false"
                    data-responsive-xs="1"
                    data-responsive-sm="2"
                    data-responsive-md="3"
                    data-responsive-lg="3"
                >

                    <div class="vertical-item testimonial-item">
                        <div class="item-media bottommargin_25">
                            <div class="with_backing small">
                            	<img src="images/face01.jpg" alt="">
                            </div>
                        </div>
                        <div class="item-content">
                        	<blockquote>
                        		"Месси лучший игрок в истории футбола"
                        		<div class="item-meta">
                        			<h6>Оралбекова Жадыра</h6>
                        			<div class="signature signature-signature3"></div>
                        		</div>
                        	</blockquote>
                        </div>
                    </div>

                    <div class="vertical-item testimonial-item">
                        <div class="item-media bottommargin_25">
                            <div class="with_backing small">
                            	<img src="images/face02.jpg" alt="">
                            </div>
                        </div>
                        <div class="item-content">
                        	<blockquote>
                        		"Отличная стоматология, профессионалы. Я очень довольна результатом. Спасибо что дарите улыбки."
                        		<div class="item-meta">
                        			<h6>Оспанова Асем</h6>
                        			<div class="signature signature-signature2"></div>
                        		</div>
                        	</blockquote>
                        </div>
                    </div>

                    <div class="vertical-item testimonial-item">
                        <div class="item-media bottommargin_25">
                            <div class="with_backing small">
                            	<img src="images/face03.jpg" alt="">
                            </div>
                        </div>
                        <div class="item-content">
                        	<blockquote>
                        		"Месси лучший игрок в истории футбола"
                        		<div class="item-meta">
                        			<h6>Хэнри Джеймс</h6>
                        			<div class="signature signature-signature1"></div>
                        		</div>
                        	</blockquote>
                        </div>
                    </div>

                    <div class="vertical-item testimonial-item">
                        <div class="item-media bottommargin_25">
                            <div class="with_backing small">
                            	<img src="images/face01.jpg" alt="">
                            </div>
                        </div>
                        <div class="item-content">
                        	<blockquote>
                        		"Месси лучший игрок в истории футбола"
                        		<div class="item-meta">
                        			<h6>Белла Франклин</h6>
                        			<div class="signature signature-signature3"></div>
                        		</div>
                        	</blockquote>
                        </div>
                    </div>

                    <div class="vertical-item testimonial-item">
                        <div class="item-media bottommargin_25">
                            <div class="with_backing small">
                            	<img src="images/face02.jpg" alt="">
                            </div>
                        </div>
                        <div class="item-content">
                        	<blockquote>
                        		"Месси лучший игрок в истории футбола"
                        		<div class="item-meta">
                        			<h6>Камил Атурк</h6>
                        			<div class="signature signature2"></div>
                        		</div>
                        	</blockquote>
                        </div>
                    </div>

                    <div class="vertical-item testimonial-item">
                        <div class="item-media bottommargin_25">
                            <div class="with_backing small">
                            	<img src="images/face03.jpg" alt="">
                            </div>
                        </div>
                        <div class="item-content">
                        	<blockquote>
                        		"Месси лучший игрок в истории футбола"
                        		<div class="item-meta">
                        			<h6>Хэнри Джеймс</h6>
                        			<div class="signature signature1"></div>
                        		</div>
                        	</blockquote>
                        </div>
                    </div>

                    <div class="vertical-item testimonial-item">
                        <div class="item-media bottommargin_25">
                            <div class="with_backing small">
                            	<img src="images/face01.jpg" alt="">
                            </div>
                        </div>
                        <div class="item-content">
                        	<blockquote>
                        		"Месси лучший игрок в истории футбола"
                        		<div class="item-meta">
                        			<h6>Белла Франклин</h6>
                        			<div class="signature signature3"></div>
                        		</div>
                        	</blockquote>
                        </div>
                    </div>

                    <div class="vertical-item testimonial-item">
                        <div class="item-media bottommargin_25">
                            <div class="with_backing small">
                            	<img src="images/face02.jpg" alt="">
                            </div>
                        </div>
                        <div class="item-content">
                        	<blockquote>
                        		"Месси лучший игрок в истории футбола"
                        		<div class="item-meta">
                        			<h6>Камил Ататурк</h6>
                        			<div class="signature signature-signature2"></div>
                        		</div>
                        	</blockquote>
                        </div>
                    </div>

                    <div class="vertical-item testimonial-item">
                        <div class="item-media bottommargin_25">
                            <div class="with_backing small">
                            	<img src="images/face03.jpg" alt="">
                            </div>
                        </div>
                        <div class="item-content">
                        	<blockquote>
                        		"Месси лучший игрок в истории футбола"
                        		<div class="item-meta">
                        			<h6>Henry James</h6>
                        			<div class="signature signature-signature1"></div>
                        		</div>
                        	</blockquote>
                        </div>
                    </div>

                </div><!-- .owl-carousel -->
			</div>
		</div>
	</div>
</section>
<!-- Review section end -->

<!-- Banner section -->

<section class="page_banner section_padding_50 texture_bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="banner border_radius_4 scheme_background">
					<div class="banner-content border_radius_4 text-center">
					    <div class="icon scheme_background"></div>
						<p class="fontsize_24 regular bottommargin_10">Стоматология для людей, которые любят улыбаться</p>
						<p class="semibold highlight2 size_normal">+ 7 (702) 231 95 91</p>
						<div class="scheme_background">
							<a href="" class="btn text-uppercase" data-toggle="modal" data-target="#modalContactForm">Записаться на прием</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner section end -->

<!-- map -->
<div class="container-fluid">
  <div id="map" style="width:100%; height:400px"></div>
</div>
<!-- end map -->

<!-- Contact section -->
<section id="contact" class="contact">
	<div class="container">
		<div class="row">

			<div class="col-md-8 to_animate" data-animation="scaleAppear">

				<h4 class="bottommargin_30">Форма обратной связи</h4>

				<form class="contact-form row columns_padding_5">


						<div class="col-sm-6">
							<div class="contact-form-name">
								<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control mb-3 form__name" placeholder="Имя">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="contact-form-phone">
								<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control form__phone" placeholder="Телефон">
							</div>
						</div>


						<div class="col-sm-12">
							<div class="contact-form-submit topmargin_30">
								<button type="button" class="btn btn-unique mb-5 sendMail">Отправить сообщение <i class="fa fa-paper-plane-o" aria-hidden="true" id="sendMail-contact"></i></button>
                <div class="ajax_response"></div>
							</div>
						</div>

				</form>
			</div>

			<div class="col-md-4 to_animate" data-animation="scaleAppear">
				<h4 class="bottommargin_30">Контактная информация</h4>
				<div class="widget widget_text topmargin_20">
					<div class="media">
						<div class="media-left">
							<i class="fa fa-map-marker highlight fontsize_18"></i>
						</div>
						<div class="media-body">
								г. Алматы, Сатпаева 22б
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<i class="fa fa-clock-o highlight fontsize_18"></i>
						</div>
						<div class="media-body">
							09:00 - 22:00
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<i class="fa fa-phone highlight fontsize_18"></i>
						</div>
						<div class="media-body">
							+7 (702) 231 95 91
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Contact section end -->

<footer class="page_footer theme_footer cs section_padding_top_50 section_padding_bottom_65">
	<div class="container">
		<div class="row bottommargin_5">
			<div class="col-md-4 col-sm-6 to_animate" data-animation="scaleAppear">
				<div class="widget widget_text topmargin_5">
					<div class="bottommargin_15"><div class="logo-bottom"></div>
					<h1>DentalExpert</h1></div>
					<p>
						В стоматологии DentalExpert — работают только дипломированные стоматологи, имеющие дополнительное образование в области протезирования зубов.
					</p>
					<div class="page_social_icons inline-block">
						<a class="social-icon" href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a class="social-icon" href="#" title="Google"><i class="fa fa-google" aria-hidden="true"></i></a>
						<a class="social-icon" href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>

				</div>
			</div>
			<div class="col-md-4 col-sm-6 to_animate" data-animation="scaleAppear">
				<div class="widget widget_text topmargin_20">
					<h6>КОНТАКТНАЯ ИНФОРМАЦИЯ</h6>
					<hr class="dividersize_2_35 margin_0">
					<div class="media">
						<div class="media-left">
							<i class="fa fa-map-marker highlight fontsize_18"></i>
						</div>
						<div class="media-body">
							г. Алматы, Сатпаева 22б
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<i class="fa fa-clock-o highlight fontsize_18"></i>
						</div>
						<div class="media-body">
							09:00 - 22:00
						</div>
					</div>
					<div class="media">
						<div class="media-left">
							<i class="fa fa-phone highlight fontsize_18"></i>
						</div>
						<div class="media-body">
							+7 (702) 231 95 91
						</div>
					</div>
				</div>

			</div>
			<div class="col-md-4 col-sm-6 to_animate" data-animation="scaleAppear">
				<div class="widget widget_text topmargin_20">
					<h6>ОТЗЫВЫ</h6>
					<hr class="dividersize_2_35 margin_0">
					<blockquote>
						"Зубные протезы действительно улучшают нашу улыбку и общий внешний вид. Они не только делают нас лучше, но и облегчают нашу жизнь."
					</blockquote>
					<div class="signature signature1"></div>
				</div>
			</div>
			<!-- <div class="col-md-3 col-sm-6 to_animate" data-animation="scaleAppear">
			</div> -->
		</div>
	</div>
</footer>

<section class="page_copyright ls section_padding_25">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center darklinks">
				<p>&copy; 2020 DentalExpert.</p>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Напишите нам</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">

        <form class="contact-form row columns_padding_5">

						<div class="col-lg-12">
							<div class="contact-form-name">
								<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control mb-3 form__name" placeholder="Имя">
							</div>
						</div>

						<div class="col-lg-12">
							<div class="contact-form-phone">
								<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control form__phone" placeholder="Телефон">
							</div>
						</div>


						<div class="col-sm-12">
							<div class="contact-form-submit topmargin_30 text-center">
								<button type="button" class="btn btn-unique mb-5 sendMail">Отправить сообщение <i class="fa fa-paper-plane-o" aria-hidden="true" id="sendMail-contact"></i></button>
                <div class="ajax_response"></div>
							</div>
						</div>

				</form>
      </div>
    </div>
  </div>
</div>

<a href="#" id="toTop">
  <span id="toTopHover"></span>
</a>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"></script> -->
  <script src="js/compressed.js"></script>
  <!-- <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script> -->
  <script src="js/scripts.js"></script>
</body>
</html>
