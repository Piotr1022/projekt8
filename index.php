<?php include('site/header.php'); ?>

<style>
        *{
            margin: 0;
            padding: 0;
        }
        header{
            height: 480px;
            overflow: hidden;
            position: relative;
        }

        #zdj1,#zdj2,#zdj3{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-height: 100%;
            min-width: 100%;
            opacity: 0;
            animation: slider 15s infinite linear;
        }
        #zdj1{
          animation-delay: 0s;
        }
        #zdj2{
            animation-delay: 5s;
        }
        #zdj3{
            animation-delay: 10s;
        }
        #zd1,#zd2,#zd3{
            position: absolute;
            font-size: 60px;
            color: #fff;
            background-color: rgba(0, 0, 0, .6);
            padding: 20px 40px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            top: 30%;
            left: 10%;
            opacity: 0;
            animation: txt 15s infinite linear;
        }
        #zd1{
            left: 5%;
            top: 5%;
        }
        #zd2{
            animation-delay: 5s;
        }
        #zd3{
            animation-delay: 10s;
            left: 60%;
            bottom: 5%;
        }
        @keyframes slider{
            0%{
                opacity: 0;
            }
            5%{
                opacity: 1;
            }
            33.33%{
                opacity: 1;
            }
            38.33%{
                opacity: 0;
            }
            100%{
                opacity: 0;
            }
        }
        @keyframes txt{
            0%{
                opacity: 0;
            }
            5%{
                opacity: 1;
            }
            33.33%{
                opacity: 1;
            }
            38.33%{
                opacity: 0;
            }
            100%{
                opacity: 0;
            }
        }
    </style>
    <header>
        <img src="img/image1.jpg" alt="img1" id="zdj1">
        <img src="img/image2.jpg" alt="img2" id="zdj2">
        <img src="img/image3.jpg" alt="img3" id="zdj3">
        <h1 id="zd1">Lorem, ipsum dolor.</h1>
        <h1 id="zd2">Lorem ipsum dolor sit.</h1>
        <h1 id="zd3">Lorem ipsum dolor sit amet.</h1>
    </header>
<!-- 
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1">
      <img src="https://picsum.photos/1600/400?grayscale&random=3" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/1600/400?grayscale&random=2" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/1600/400?grayscale&random=1" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->

</div>


















<div class="container" > 
    <div class="row">
      <div class="col text-center box-margin">
        <h1>Oferta kursów</h1>
      </div>
    </div> 
    <div class="row" >
      <div class="col-md box-margin" >
      <div class="card" style="width: 18rem;">
      <img src=" https://picsum.photos/200/300?random=1"class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
        </div>
        <div class="col-md box-margin" >
        <div class="card" style="width: 18rem;">
  <img src=" https://picsum.photos/200/300?random=2"class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
        </div>
</div>
        <div class="col-md box-margin" >
        <div class="card" style="width: 18rem;">
  <img src=" https://picsum.photos/200/300?random=3"class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
        </div>
    </div>
</div>













<div class="container">
     <div class="row">
        <div class="col-md-4 offset-md-1 box-margin"><div class="card" style="">
  <div class="card-body">
    <h5 class="card-title">Zarejestruj się</h5>
    <h6 class="card-subtitle mb-2 text-muted">Jeśli nie masz konta załóż je...</h6>
    <p class="card-text">Utwórz konto aby móć korzystać z pełni strony.</p>
    <a href="signup.php" class="card-link">Zarejestruj</a>

  </div>
</div></div>
        <div class="col-md-4 offset-md-2 box-margin"><div class="card" style="">
  <div class="card-body">
    <h5 class="card-title">Zaloguj się</h5>
    <h6 class="card-subtitle mb-2 text-muted">Zaloguj się do strony internetowej</h6>
    <p class="card-text">Kiedy zalogujesz się do strony, będziesz miał dostęp do wszystkich informacji na stronie.</p>
    <a href="login.php" class="card-link">Zaloguj się</a>
  </div>
</div></div>
    </div>
</div>

<div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Custom jumbotron</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Example button</button>
      </div>

      <div class="container">
        <div class="row">
            <div class="col">
            <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    The current link item
  </a>
  <a href="#" class="list-group-item list-group-item-action">A second link item</a>
  <a href="#" class="list-group-item list-group-item-action">A third link item</a>
  <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
  <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
</div>
            </div>
            <div class="col">
            <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    The current link item
  </a>
  <a href="#" class="list-group-item list-group-item-action">A second link item</a>
  <a href="#" class="list-group-item list-group-item-action">A third link item</a>
  <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
  <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
</div>
            </div>
            <div class="col">
            <h3>
              Fancy display heading
              <small class="text-body-secondary">With faded secondary text</small>
              </h3>
            </div>
        </div>
      </div>


      <!-- jawjkfkajhawfk -->
<?php
    include('site/footer.php');
?>