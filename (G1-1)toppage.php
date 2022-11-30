<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toppage
    </title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"> 
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>

<!-- header読み込み -->
<?php include_once 'header.php'; ?>


  <!-- ホーム画像スライド -->
<div class="top">

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="" ></button>
    </div>
    <div class="carousel-inner">
      <!-- 一個目 -->
      <div class="carousel-item active">
      <!-- 画像、動画 -->
      <video src="img/hublot_pc.mp4" class="topimg" loop autoplay muted></video>
      

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
      <video src="img/hub-collection-watches-cover.mp4" class="topimg" loop autoplay muted></video> 

        <div class="container">
          <div class="carousel-caption">
            <h1>最高級タイムピースを取り揃えたコレクション</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>

      <!-- 三個目 -->
      <div class="carousel-item">
      <!-- 画像、動画 -->
      <video src="img/video-home-SP37-V5-desktop_3.mp4"  class="topimg" loop autoplay muted></video>

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

</div>

  <!-- 商品表示 -->
<p class="border" style="margin-top:5%;">～おススメの商品をご紹介～</p>
  
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="itemdisplay col-lg-4">
        <?php 
          require_once 'itemcls.php';
          $cls = new item();
          $cls-> funcInfo(1);
        ?>
      </div>
      <div class="itemdisplay col-lg-4">
        <?php 
          require_once 'itemcls.php';
          $cls = new item();
          $cls-> funcInfo(2);
        ?>
      </div>
      <div class="itemdisplay col-lg-4">
        <?php 
          require_once 'itemcls.php';
          $cls = new item();
          $cls-> funcInfo(3);
        ?>
      </div>
    </div><!-- /.row -->

  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>