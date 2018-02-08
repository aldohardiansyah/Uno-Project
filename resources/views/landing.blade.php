<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">

      <!--CSS-->
      <link href="{!! asset('css/bootstrap.css') !!}" media="all" rel="stylesheet" type="text/css" />
      <link href="{!! asset('css/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
      <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
      <title> A Flying Stuka </title>

  </head>
  <body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">A Flying Stuka</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
           <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/kelas">Kelas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Forum</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tentang Kami</a>
              </li>
           </ul>
           <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" placeholder="Cari.." type="text">
              <button class="btn btn-secondary my-2 my-sm-0 mr-sm-3" type="submit">Cari Kelas</button>
              <button class="btn btn-primary my-2 my-sm-0" type="submit">Masuk</button>
           </form>
          </div>
        </div>
      </nav>

    <!--Header-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="second-slide" src="{!! asset('img/header3.jpg') !!}" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h4>Let The Games Begin</h4>
              <p>'Cause all of the stars are fading away, just try not to worry you'll see them some day. Take what you need and be on your way,
                <br> and stop crying your heart out. </p>
              <p><a class="btn btn-lg btn-outline-secondary" href="#" role="button">Lihat Selengkapnya</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="first-slide" src="{!! asset('img/header2.jpg') !!}" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
                <h4>Litle By Litle</h4>
                <p class="font-weight-light">As little by little we gave you everything you ever dreamed of, little by little the wheels of your life have slowly fallen off, little by little you have to give it all in all your life, and all the time I just ask myself why you're really here?</p>
                <p><a class="btn btn-lg btn-outline-secondary" href="#" role="button">Daftar Sekarang</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="{!! asset('img/header3.jpg') !!}" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-right">
              <h4>Go Let It Out</h4>
              <p class="font-weight-light">Paint no illusion, try to click with whatcha got, taste every potion 'cause if yer like yerself a lot, go let it out, go let it in.</p>
              <p><a class="btn btn-lg btn-outline-secondary" href="#" role="button">Lihat Selengkapnya</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Sebelumnya</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Selanjutnya</span>
      </a>
    </div>


    <!--Kabar Terbaru-->
    <main role="main">
    <center><h4> Kabar Terbaru </h4></center>
    <div class="album py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{!! asset('img/post/3.jpg') !!}" width="100px" height="200px" alt="Card image cap">
                <div class="card-body">
                  <h4>Judulnya Dimari</h4>
                  <p class="card-text">Isinya headline-headline terbaru tentang ini itu, yang fungsinya untuk ini itu, biar lebih anu, pokoknya banyak dah ini tulisan</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{!! asset('img/post/1.jpg') !!}" width="100px" height="200px" alt="Card image cap">
                <div class="card-body">
                  <h4>Judulnya Dimari</h4>
                  <p class="card-text">Isinya headline-headline terbaru tentang ini itu, yang fungsinya untuk ini itu, biar lebih anu, pokoknya banyak dah ini tulisan</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{!! asset('img/post/2.jpg') !!}" width="100px" height="200px" alt="Card image cap">
                <div class="card-body">
                  <h4>Judulnya Dimari</h4>
                  <p class="card-text">Isinya headline-headline terbaru tentang ini itu, yang fungsinya untuk ini itu, biar lebih anu, pokoknya banyak dah ini tulisan</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{!! asset('img/post/3.jpg') !!}" width="100px" height="200px" alt="Card image cap">
                <div class="card-body">
                  <h4>Judulnya Dimari</h4>
                  <p class="card-text">Isinya headline-headline terbaru tentang ini itu, yang fungsinya untuk ini itu, biar lebih anu, pokoknya banyak dah ini tulisan</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{!! asset('img/post/1.jpg') !!}" width="100px" height="200px" alt="Card image cap">
                <div class="card-body">
                  <h4>Judulnya Dimari</h4>
                  <p class="card-text">Isinya headline-headline terbaru tentang ini itu, yang fungsinya untuk ini itu, biar lebih anu, pokoknya banyak dah ini tulisan</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{!! asset('img/post/2.jpg') !!}" width="100px" height="200px" alt="Card image cap">
                <div class="card-body">
                  <h4>Judulnya Dimari</h4>
                  <p class="card-text">Isinya headline-headline terbaru tentang ini itu, yang fungsinya untuk ini itu, biar lebih anu, pokoknya banyak dah ini tulisan</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    <!--Kelas-->
    <hr class="my-4">
    <div class="kelas">
      <div class="separator mb-xl-5">
      <center><h4> Kelas </h4></center>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card border-success mb-3 box-shadow text-center" style="max-width: 20rem;">
              <div class="card-header">Kelas A</div>
              <div class="card-body text-success">
                <h4 class="card-title">Web Development</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn-success">Masuk Kelas</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-danger mb-3 box-shadow text-center" style="max-width: 20rem;">
              <div class="card-header">Kelas B</div>
              <div class="card-body text-danger">
                <h4 class="card-title">Software Development</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn-danger">Masuk Kelas</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-info mb-3 box-shadow text-center" style="max-width: 20rem;">
              <div class="card-header">Kelas C</div>
              <div class="card-body text-info">
                <h4 class="card-title">Graphic Design</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn-info">Masuk Kelas</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
    </div>


    <!--Forum-->
    <hr class="my-4">
    <div class="separator mb-xl-5">
    <center><h4> Forum </h4></center>
    </div>



    <!--About-->
    <hr class="my-4">
    <div class="about container">
      <div class="separator mb-xl-5">
      <center><h4> Tentang Kami </h4></center>
      </div>
      <div class="row">
          <div class="col-md-6">
            <img class="rounded-circle" src="{!! asset('img/about/aldobw.jpg') !!}" alt="Generic placeholder image" width="140" height="140">
              <h4 class="mt-xl-3">Aldo Hardiansyah</h4>
              <p>Lahir di Jakarta, 02 Mei 1996, menempuh pendidikan di TU Berlin jurusan Sistem Informasi
              Memulai karir sebagai seorang Graphic Designer dan pernah bekerja di Google dan IBM Indonesia</p>
              <p><a class="btn btn-outline-primary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-md-6 -->
          <div class="col-md-6">
            <img class="rounded-circle" src="{!! asset('img/about/shanibw.jpg') !!}" alt="Generic placeholder image" width="140" height="140">
            <h4 class="mt-xl-3">Shani Indira Natio</h4>
            <p>Lahir di Kebumen, 05 Oktober 1998, mahasiswi di Universitas Tarumanegara jurusan Ilmu Komunikasi
            Memulai karir sebagai model dan sekarang menjadi salah satu founder A Flying Stuka</p>
            <p><a class="btn btn-outline-primary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-md-6 -->
      </div><!-- /.row -->
    </div>

  <!-- FOOTER -->
  <hr class="my-4">
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2018 Apostrof &middot; Aldo Hardiansyah &middot; <a class="blue" href="#">Privacy</a> &middot; <a class="blue" href="#">Terms</a></p>
  </footer>
  <!--JAVASCRIPT-->
  <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('js/popper.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('js/holder.min.js') !!}"></script>
  </body>
</html>
