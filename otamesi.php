<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prottype</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>

<!-- タイトルとボタンあいうえお かきくけこ--> 
<div class="row mt-2 bg-light">
    <div class="col-4">
    <h2 class="text-danger" style="margin-left:40px;">ChornoSky</h2>
    </div>

    <div class="col-2 offset-6">
    <a href="https://www.google.co.jp"><button class="btn btn-light"><i class="bi bi-house-fill" style="  font-size:20px;"></i></button></a>
    <a href="https://www.google.co.jp"><button class="btn btn-light"><i class="bi bi-person-circle" style="  font-size:20px;"></i></button></a>
    <a href="https://www.google.co.jp"><button class="btn btn-light"><i class="bi bi-cart-check-fill" style="  font-size:20px;"></i></button></a>
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

  <!-- ジャンボトロン -->
  <div class="bg-img p-5">
    <div class="container">

    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>