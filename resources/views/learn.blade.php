<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Обучение Гарвис и СД</title>

  <!-- Bootstrap core CSS --<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">> -->
  
<link href="{{ asset('css/learn.css') }}" rel="stylesheet">
  <!-- Custom styles for this template <link href="css/small-business.css" rel="stylesheet">-->


</head>

<body>

<img src="{{asset('public/assets/img/garvis')}}" align="right"    alt="rfgb" >

  <!--"public/assets/img/garvis.png "  align="left"> -->

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Главный портал по обучению!</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <!-- <a class="nav-link" href="http://192.168.0.6:8080/default/user.htm">Nine Test -->
            <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="/news.php">Новости
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about.php">Про нас</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/offices.php">Отделы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contacts.php">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



<!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="https://www.google.com/search?q=%D1%82%D0%B5%D0%B3+img+html&rlz=1C1SQJL_ruUA841UA841&source=lnms&tbm=isch&sa=X&ved=0ahUKEwj3jcr2_b7iAhVuBBAIHRZBCQ8Q_AUIDigB&biw=1366&bih=576#imgrc=vAM4j-NvhiLgwM:" width="50px" height="50px"alt="" align="left">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light">Навигация по сайту!</h1>
        <p>Вам необходимо обязательно перейти по ссылке! Здесь содержится вся важная информация, где и чего посмотреть, где и чего почитать!</p>
        <a class="btn btn-primary" href="#">Щелкни и изучай!</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">Знание процесса - уверенность в себе!  </p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Гарвис</h2>
            <p class="card-text">Здесь находятся инструкции для врачей, медсетер, админ персонала, лаборатории и руководителей всех направлений.</p>
          </div>
          <div class="card-footer">
            <a href="{{ asset('garvislearn.blade.php')" class="btn btn-primary btn-sm">Больше информации</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Семейный доктор</h2>
            <p class="card-text">Здесь находятся инструкции для врачей, медсетер, админ персонала,  и руководителей всех направлений.</p>
          </div>
          <div class="card-footer">
            <a href="index1.html" class="btn btn-primary btn-sm">Больше информации</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Сопы</h2>
            <p class="card-text">Здесь находятся инструкции для врачей, медсетер, админ персонала, лаборатории и руководителей всех направлений.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Больше информации</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->



  
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Skrypchenko &copy; My Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

</body>

</html>
