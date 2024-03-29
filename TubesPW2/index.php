<?php  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UNIKLOH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!--awal navbar-->
 <nav class="navbar navbar-expand-lg navbar-light bg- fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-danger">UNIK</span>LOH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--akhir navbar-->
    <!--awal carousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../TubesPW2/img/coba.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5>Casual</h5>
            <p>“Every morning is destinys way of telling you that your purpose in life is yet to be fulfilled. Good morning.”</p>
            <p><a href="#" class="btn btn-warning mt-3">Check</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../TubesPW2/img/coba2.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5>Elegant</h5>
            <p>“Loving yourself isnt vanity, its sanity.”</p>
            <p><a href="#" class="btn btn-warning mt-3">Check</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../TubesPW2/img/coba3.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5>Aestetic</h5>
            <p>“So many people who love you. Dont focus on the people who dont.”</p>
            <p><a href="#" class="btn btn-warning mt-3">Check</a></p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--akhir carousel-->

    <!--about section-->
    <section id="about" class="about section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img src="img/about.jpg" alt="" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text">
              <h2>We Provide Best Quality <br />Services Ever</h2>
              <p>
                "Our commitment to excellence ensures that we provide the best quality services, surpassing expectations every time." "At [Company Name], we pride ourselves on delivering unparalleled quality services that set us apart from
                the rest." "Customer satisfaction is our top priority, and we strive to provide the best quality services that leave a lasting impression." "Experience the epitome of perfection with our best-in-class quality services that
                redefine excellence." "Our unwavering dedication to delivering the highest standards of quality sets us apart as industry leaders in service excellence."
              </p>
              <a href="#" class="btn btn-warning">Check</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--services section-->
    <section id="services" class="services section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>Our Services</h2>
              <p>
                "Experience the epitome of style and elegance with our exceptional fashion services." "Our fashion services are designed to make you feel confident, beautiful, and empowered." "Discover the art of personal expression through
                our bespoke fashion services."
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-4">
            <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <i class="bi bi-subtract"></i>
                <h3 class="card-title">Best Quality</h3>
                <p class="lead">
                  Excellence: The pursuit of excellence leads to the best quality. Superior: Our products are known for their superior quality. Premium: We offer premium quality products for our customers. Our company is committed
                </p>
                <button class="btn btn-warning text-dark">Read More</button>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4">
            <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <i class="bi bi-globe"></i>
                <h3 class="card-title">InterNasional</h3>
                <p class="lead">
                  Global trends: Stay updated with the latest global fashion trends. Couture: Experience the elegance of international couture fashion. Runway: Witness the mesmerizing designs on the international fashion runways.
                </p>
                <button class="btn btn-warning text-dark">Read More</button>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4">
            <div class="card text-white text-center bg-dark pb-2">
              <div class="card-body">
                <i class="bi bi-person"></i>
                <h3 class="card-title">High Values</h3>
                <p class="lead">
                  Ethical: Embrace the beauty of ethical fashion and sustainable practices. Sustainable: Discover the charm of sustainable fashion and its positive impact. Conscious: Join the movement of conscious fashion a difference.
                </p>
                <button class="btn btn-warning text-dark">Read More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--item section-->

    <section id="item" class="item section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>Our Model</h2>
              <p>
                "Our fashion models embody grace, poise, and the spirit of true elegance." "Experience the beauty of our fashion models as they bring our designs to life on the runway." "Our fashion models are the epitome of style,
                inspiring trends and captivating audiences." "Discover the charisma and versatility of our fashion models, who effortlessly transform every look."
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-4">
            <div class="card text-light text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="../TubesPW2/img/w.jpg" alt="" class="img-fluid" />
                </div>
                <h3 class="card-title">Katsiaryna</h3>
                <p></p>
                <button class="btn btn-warning text-dark">Check</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card text-light text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="../TubesPW2/img/w2.jpg" alt="" class="img-fluid" />
                </div>
                <h3 class="card-title">Andrianne</h3>
                <p></p>
                <button class="btn btn-warning text-dark">Check</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card text-light text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="../TubesPW2/img/w3.jpg" alt="" class="img-fluid" />
                </div>
                <h3 class="card-title">Tamara Bellis</h3>
                <p></p>
                <button class="btn btn-warning text-dark">Check</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--awal item-->

    <section id="item" class="item section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h2>Our Item</h2>
              <p>Item</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-4">
            <div class="card text-light text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="../TubesPW2/img/item.jpg" alt="" class="img-fluid" />
                </div>
                <h3 class="card-title">Cloath</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <button class="btn btn-warning text-dark">Check</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card text-light text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="../TubesPW2/img/item2.jpg" alt="" class="img-fluid" />
                </div>
                <h3 class="card-title">Clock</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <button class="btn btn-warning text-dark">Check</button>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card text-light text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="../TubesPW2/img/item3.jpg" alt="" class="img-fluid" />
                </div>
                <h3 class="card-title">Lips</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <button class="btn btn-warning text-dark">Check</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--akhir item-->

    <!-- awal footer-->
    <footer class="bg-warning p-5 mt-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <a href="#">
              <img src="../TubesPW2/img/logo3.jpg" style="width: 30px" />
            </a>
            <span class="ms-2">Copyright @2023 | Created by Unikloh</span>
          </div>
          <div class="col-md-6 mt-2 mt-md-0">
            <a href="#">
              <img src="../TubesPW2/img/sosialMedia/facebook.png" style="width: 30px" />
            </a>
            <span class="ms-2">UNIKLOH</span>
          </div>
          <div class="col-md-6 mt-2 mt-md-0">
            <a href="#">
              <img src="../TubesPW2/img/sosialMedia/instagram.png" style="width: 30px" />
            </a>
            <span class="ms-2">UNIKLOH</span>
          </div>
          <div class="col-md-6 mt-2 mt-md-0">
            <a href="#">
              <img src="../TubesPW2/img/sosialMedia/linkedin.png" style="width: 30px" />
            </a>
            <span class="ms-2">UNIKLOH</span>
          </div>
          <div class="col-md-6 mt-2 mt-md-0">
            <a href="#">
              <img src="../TubesPW2/img/sosialMedia/twitter.png" style="width: 30px" />
            </a>
            <span class="ms-2">UNIKLOH</span>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>

