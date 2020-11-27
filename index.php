<?php require_once('./config.php') ?>
<?php require_once(ROOT_PATH . '/includes/portfolio_jobs.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Modern & Minimal Resume / CV & vCard Template</title>

    <!--=====================================================
			CSS Stylesheets
		=====================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="bootstrap/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/linea.css" />
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body>
    <!--=====================================================
			Preloader
		=====================================================-->
    <div id="preloader">
      <div class="loader"></div>
      <div class="left"></div>
      <div class="right"></div>
    </div>

    <div class="main-content">
      <!--=====================================================
				Page Borders
			=====================================================-->
      <div class="page-border border-left"></div>
      <div class="page-border border-right"></div>
      <div class="page-border border-top"></div>
      <div class="page-border border-bottom"></div>

      <!--=====================================================
				Menu Button
			=====================================================-->
      <a href="#" class="menu-btn">
        <span class="lines">
          <span class="l1"></span>
          <span class="l2"></span>
          <span class="l3"></span>
        </span>
      </a>

      <!--=====================================================
				Menu
			=====================================================-->
      <div class="menu">
        <div class="inner">
          <ul class="menu-items">
            <li>
              <a href="#" class="section-toggle" data-section="intro"> Home </a>
            </li>

            <!-- <li>
              <a href="#about" class="section-toggle" data-section="about">
                Sobre
              </a>
            </li> -->

            <!-- <li>
              <a href="#resume" class="section-toggle" data-section="resume">
                Resume
              </a>
            </li> -->

            <li>
              <a
                href="#portfolio"
                class="section-toggle"
                data-section="portfolio"
              >
                Portfolio
              </a>
            </li>

            <li>
              <a href="#contact" class="section-toggle" data-section="contact">
                Contato
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="animation-block"></div>

      <!--=====================================================
				Sections
			=====================================================-->
      <div class="sections">
        <!--=====================================================
					Main Section
				=====================================================-->
        <section id="intro" class="section section-main active">
          <div class="container-fluid">
            <div class="v-align">
              <div class="inner">
                <div class="intro-text">
                  <h1>Somos a Luving</h1>

                  <p>Seu Próximo Passo Para Alcançar Pessoas</p>

                  <div class="intro-btns">
                    <a
                      href="#portfolio"
                      class="btn-custom section-toggle"
                      data-section="portfolio"
                    >
                      Veja nossos trabalhos
                    </a>

                    <!-- <a
                      href="#contact"
                      class="btn-custom section-toggle"
                      data-section="contact"
                    >
                      Contrate
                    </a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--=====================================================
					Portfolio Section
				=====================================================-->
        <section id="portfolio" class="section portfolio-section border-d">
          <div class="section-block portfolio-block">
            <div class="container-fluid">
              <div class="section-header">
                <h2>Nossos <strong class="color">Trabalhos</strong></h2>
              </div>

              <ul class="portfolio-filters">
                <li>
                  <a href="#" class="active" data-group="all"> All </a>
                </li>
                <li>
                  <a href="#" data-group="moda"> Moda </a>
                </li>
                <li>
                  <a href="#" data-group="tech"> Tech </a>
                </li>
                <li>
                  <a href="#" data-group="photography"> Fotografia </a>
                </li>
              </ul>

              <ul class="portfolio-items">
                <?php while ($rows = mysqli_fetch_assoc($result)){ var_dump($rows)?>
                <li data-groups='<?php echo($rows['tags']); ?>'>
                  <div class="inner">
                    <?php echo($rows['title']); ?>
                    <img src='<?php echo($rows['image_thumb']); ?>' />

                    <div class="overlay">
                      <a href="#popup-<?php echo($rows['id']); ?>" class="view-project"> Ver Projeto </a>

                      <!--project popup-->
                      <div
                        id="popup-<?php echo($rows['id']); ?>"
                        class="popup-box zoom-anim-dialog mfp-hide"
                      >
                        <figure>
                          <!--project popup image-->
                          <img src="<?php echo (isset($rows['main_image'])) 
                          ?
                          $rows['main_image'] : $rows['image_thumb']; ?>" />
                        </figure>
                        <div class="content">
                          <!--project popup title-->
                          <h4><?php echo($rows['title']); ?></h4>

                          <!--project popup description-->
                          <p>
                            <?php echo($rows['description']); ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                  <?php } ?>
        </section>

        <!--=====================================================
					Contact Section
				=====================================================-->
        <section id="contact" class="section contact-section border-d">
          <div class="section-block contact-block">
            <div class="container-fluid">
              <div class="section-header">
                <h2>Fale <strong class="color">Conosco</strong></h2>
              </div>

              <div class="row">
                <div class="col-md-8">
                  <div class="contact-form">
                    <form
                      id="contact-form"
                      data-toggle="validator"
                      method="post"
                      action="mail.php"
                    >
                      <div id="contact-form-result"></div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Nome"
                              name="name"
                              required
                            />
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <input
                              type="email"
                              class="form-control"
                              placeholder="Email"
                              name="email"
                              required
                            />
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Assunto"
                          name="subject"
                          required
                        />
                        <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                        <textarea
                          class="form-control"
                          placeholder="Mensagem"
                          name="message"
                          rows="5"
                          required
                        ></textarea>
                        <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group text-center">
                        <button type="submit" class="btn-custom btn-color">
                          Enviar Mensagem
                        </button>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="contact-info-icons">
                    <div class="contact-info">
                      <i class="ion-ios-telephone-outline"></i>

                      <p>
                        <br />
                        +55 (11) 9 1025-2839
                      </p>
                    </div>

                    <div class="contact-info">
                      <i class="ion-android-globe"></i>

                      <p>
                        <br />
                        www.luving.com.br
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!--=====================================================
			JavaScript Files
		=====================================================-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/validator.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
