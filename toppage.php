<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plottype</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"> 
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>


<!-- 全画面フォーマット -->
<div id="var">
  <!-- タイトルとボタン -->
  <div class="row bg-light">
    <div class="col-4">
    <h2 class="title">ChronoSky</h2>
    </div>

    <div class="col-8"  style="text-align:right;">
    <a href="https://www.google.co.jp"><button class="btn btn-light"><i class="bi bi-house-fill" style="  font-size:20px;"></i></button></a>
    <a href="https://www.google.co.jp"><button class="btn btn-light"><i class="bi bi-person-circle" style="  font-size:20px;"></i></button></a>
    <a href="https://www.google.co.jp"><button class="btn btn-light" style="margin-right:30px;"><i class="bi bi-cart-check-fill" style="  font-size:20px;"></i></button></a>
    </div>
</div> 

<!-- ナビゲーションバー -->
<nav class="navbar navbar-light bg-light" aria-label="First navbar example">

    <div class="container-fluid">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExample01" style="">
        <ul class="navbar-nav  me-auto mb-2">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">商品一覧</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">商品一覧</a></li>
              <li><a class="dropdown-item" href="#">メンズ</a></li>
              <li><a class="dropdown-item" href="#">レディース</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">特集ページ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">トップページ</a>
          </li>
        </ul>
        
      </div>
      <form role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
  </nav>
</div>


  <!-- ホーム画像スライド -->

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
    </div>
    <div class="carousel-inner">
      <!-- 一個目 -->
      <div class="carousel-item active">
      <!-- 画像、動画 -->
      <video src="img/hublot_pc.mp4" style="width:100%; height:750px; object-fit: cover;" loop autoplay muted></video>
      

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>

      <!-- 二個目 -->
      <div class="carousel-item">
      <!-- 画像、動画 -->
      <video src="img/hublot_pc.mp4" style="width:100%; height:750px; object-fit: cover;" loop autoplay muted></video> 

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>

      <!-- 三個目 -->
      <div class="carousel-item ">
      <!-- 画像、動画 -->
      <video src="img/video-home-SP37-V5-desktop_3.mp4"  style="width:100%; height:750px; object-fit: cover;" loop autoplay muted></video>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>