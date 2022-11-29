<!-- 全画面フォーマット -->
<div id="var">
  <!-- タイトルとボタン -->
  <div class="row bg-light">
    <div class="col-4">
    <h2 class="title">ChronoSky</h2>
    </div>

    <div class="col-8"  style="text-align:right;">
    <a href="(G1-1)toppage.php"><button class="btn btn-light"><i class="bi bi-house-fill" style="  font-size:20px;"></i></button></a>
    <a href="(G1-4-1)login.php"><button class="btn btn-light"><i class="bi bi-person-circle" style="  font-size:20px;"></i></button></a>
    <a href="(G1-7)cart.php"><button class="btn btn-light" style="margin-right:30px;"><i class="bi bi-cart-check-fill" style="  font-size:20px;"></i></button></a>
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
            <a class="nav-link dropdown-toggle" href="" data-bs-toggle="dropdown" aria-expanded="false">商品一覧</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="(G1-2-1)itemlist.php">商品一覧</a></li>
              <li><a class="dropdown-item" href="(G1-2-2)men's.php">メンズ</a></li>
              <li><a class="dropdown-item" href="(G1-2-3)ladies.php">レディース</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">特集ページ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="(G1-1)toppage.php">トップページ</a>
          </li>
        </ul>
        
      </div>

      <form action="(G1-9)itemsearch.php" method="post" role="search">
        <div style="display:inline-flex">
          <button type="submit" style="background: transparent; border: none"><i class="bi bi-search" style="font-size:20px;"></i></button>
          <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="itemsearch">
        </div>
          
      </form>
    </div>
  </nav>
</div>
