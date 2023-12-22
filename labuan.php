<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Labuan Bajo</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Caprasimo&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/subhal2.css">

</head>

<body>
  <!-- NAV BAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
      <img src="poster/Asset.png" width="30" height="40">
      Pesona Warisan
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="danautoba.php">Danau Toba</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="candiborobudur.php">Candi Borobudur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="labuan.php">Labuan Bajo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mandalika.php">Mandalika</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="likupang.php">Likupang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tanjung.php">Tanjung Kelayang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bromo.php">Bromo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="wakatobi.php">Wakatobi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="morotai.php">Morotai</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rajaampat.php">Raja Ampat</a>
      </li>
    </ul>
  </div>
</nav>

<!-- ISI -->
<div class="container-fluid">
  <h1 class="text-center">Labuan Bajo</h1>
  <div class="row pt-2">
    <div class="kartu mx-auto col-12 col-lg-4">
      <input type="checkbox" id="card1" class="more" aria-hidden="true">
      <div class="content">
        <div class="front"
        style="background-image: url('poster/taricaci.jpg')">
        <div class="inner">
          <h2>Tarian</h2>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <label for="card1" class="button" aria-hidden="true">
            Details
          </label>
        </div>
      </div>
      <div class="back">
        <div class="inner">
          <div class="description">
            <p>Tari Caci adalah salah satu kesenian tradisional yang sakral dengan konsep tarian perang. Menukil
              sejarahnya, tarian ini terinspirasi dari adu kekuatan para pemuda antar-wilayah yang turun temurun
              dilakukan, hingga kemudian menjadi salah satu bagian kultur dan seni budaya sakral di pulau Flores.
              Pelakon tarian ini terdiri atas dua orang laki-laki yang bertarung menggunakan cambuk berbahan kulit,
              dan perisai yang terbuat dari kulit kerbau. Saat keduanya berlaga, musik tak henti bertabuh diiringi
            sorakan penonton.</p>
          </div>
          <div class="location">Tari Caci</div>
          <label for="card1" class="button return" aria-hidden="true">
            <i>Return</i>
          </label>
        </div>
      </div>
    </div>
  </div>

  <div class="kartu mx-auto col-12 col-lg-4">
    <input type="checkbox" id="card2" class="more">
    <div class="content">
      <div class="front"
      style="background-image: url('poster/labuan1.jpg')">
      <div class="inner">
        <h2>Fauna</h2>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <i class="far fa-star"></i>
        </div>
        <label for="card2" class="button" aria-hidden="true">
          Details
        </label>
      </div>
    </div>
    <div class="back">
      <div class="inner">

        <div class="description">
          <p>
          Komodo adalah hewan kadal raksasa yang panjangnya dapat mencapai 3 meter dengan berat antara 45-85 kg. Komodo merupakan satwa langka yang tak pernah ditemukan di tempat lain di dunia ini, selain di Pulau komodo dan sebagian pulau Flores.</p>
        </div>
        <div class="location">Komodo, Vera nus Komodoensis</div>
        <label for="card2" class="button return" aria-hidden="true">
          <i>Return</i>
        </label>
      </div>
    </div>
  </div>
</div>

<div class="kartu mx-auto col-12 col-lg-4">
  <input type="checkbox" id="card3" class="more">
  <div class="content">
    <div class="front"
    style="background-image: url('poster/labuanbatik.jpg')">
    <div class="inner">
      <h2>Batik</h2>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <label for="card3" class="button" aria-hidden="true">
        Details
      </label>
    </div>
  </div>
  <div class="back">
    <div class="inner">
      <div class="description">
        <p>Keunikan motif batik Kupang NTT tak lepas dari inspirasi motif tenun ikat karena budaya menenun merupakan salah satu identitas bagi masyarakat lokal di Nusa Tenggara. Kain tenun yang dihasilkan dari alat tenun bukan mesin (ATBM) oleh para pengrajin disebut kain ikat.
        Sementara itu untuk menghias batik, batik khas Nusa Tenggara Timur mengembangkan inspirasi dari kehidupan sekitar yakni memasukkan unsur-unsur dari alam, tumbuhan, hewan, tokoh mitologi, serta harapan baik. Keunikan motif ini pun semakin kaya dengan ciri khas setiap etnis atau budaya di berbagai pulau di provinsi ini.</p>
        <p>Motif Liris Kupang ditandai dengan garis-garis geometris dan hiasan tenun ikat di ujungnya. Motif geometris bisa berupa garis beralur vertikal, horizontal, maupun diagonal atau miring. Makna batik ini melambangkan ketabahan dan solidaritas masyarakat NTT.</p>
      </div>
      <div class="location">Batik Motif Liris Kupang</div>
      <label for="card3" class="button return" aria-hidden="true">
        <i>Return</i>
      </label>
    </div>
  </div>
</div>
</div>

</div>
</div>

<div>
  <h2 class="text-center">Baca yang lainnya</h2>
</div>
<!-- card kecil -->
<div class="container-fluid">

  <div class="row justify-content-md-center p-3">
    <div class="col-12 col-md-3 p-3">
      <a href="rajaampat.php">
        <div class="card" style="width: 18rem;">
          <img src="poster/ampatblur.jpg" class="card-img-top card-img-zoom" alt="...">
        </div>
      </a>
    </div>
    <div class="col-12 col-md-3 p-3">
      <a href="bromo.php">
        <div class="card" style="width: 18rem;">
          <img src="poster/bromoblur.jpg" class="card-img-top card-img-zoom" alt="...">
        </div>
      </a>
    </div>
    <div class="col-12 col-md-3 p-3">
      <a href="wakatobi.php">
        <div class="card" style="width: 18rem;">
          <img src="poster/wakatobiblur.jpg" class="card-img-top card-img-zoom" alt="...">
        </div>
      </a>
    </div>
  </div>


  <div class="row justify-content-md-center p-3">
    <div class="col-12 col-md-3 p-3">
      <a href="candiborobudur.php">
        <div class="card" style="width: 18rem;">
          <img src="poster/candiblur.jpg" class="card-img-top card-img-zoom" alt="...">
        </div>
      </a>
    </div>
    <div class="col-12 col-md-3 p-3">
      <a href="likupang.php">
        <div class="card" style="width: 18rem;">
          <img src="poster/likupangblur.jpg" class="card-img-top card-img-zoom" alt="...">
        </div>
      </a>
    </div>
    <div class="col-12 col-md-3 p-3">
      <a href="mandalika.php">
        <div class="card" style="width: 18rem;">
          <img src="poster/mandalikablur.jpg" class="card-img-top card-img-zoom" alt="...">
        </div>
      </a>
    </div>
  </div>



  <div class="row justify-content-md-center p-3">
    <div class="col-12 col-md-3 p-3">
      <a href="morotai.php">
        <div class="card" style="width: 18rem;">
          <img src="poster/morotaiblur.jpg" class="card-img-top card-img-zoom" alt="...">
        </div>
      </a>
    </div>
    <div class="col-12 col-md-3 p-3">
      <a href="tanjung.php">
        <div class="card" style="width: 18rem;">
          <img src="poster/tanjungblur.jpg" class="card-img-top card-img-zoom" alt="...">
        </div>
      </a>
    </div>
    <div class="col-12 col-md-3 px-3">
      <a href="danautoba.php">
        <div class="card" style="width: 18rem;">
          <img src="poster/tobablur.jpg" class="card-img-top card-img-zoom" alt="...">
        </div>
      </a>
    </div>
  </div>
</div>

</div>

<footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 text-white">
  <div class="col mb-3">
    <a href="" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
      <img src="poster/Asset.png" class="w-50">
    </a>
  </div>

  <div class="col-6 mb-3">
    <h5>Danau Toba</h5>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="danautoba.php" class="nav-link p-0 ">Tarian</a></li>
      <li class="nav-item mb-2"><a href="danautoba.php" class="nav-link p-0 ">Festival</a></li>
      <li class="nav-item mb-2"><a href="danautoba.php" class="nav-link p-0 ">Batik</a></li>
    </ul>
  </div>

  <div class="col-6 mb-3">
    <h5>Candi Borobudur</h5>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="candiborobudur.php" class="nav-link p-0 ">Makanan</a></li>
      <li class="nav-item mb-2"><a href="candiborobudur.php" class="nav-link p-0 ">Festival</a></li>
      <li class="nav-item mb-2"><a href="candiborobudur.php" class="nav-link p-0 ">Batik</a></li>
    </ul>
  </div>

  <div class="col-6 mb-3">
    <h5>Labuan Bajo</h5>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="labuan.php" class="nav-link p-0 ">Tarian</a></li>
      <li class="nav-item mb-2"><a href="labuan.php" class="nav-link p-0 ">Fauna</a></li>
      <li class="nav-item mb-2"><a href="labuan.php" class="nav-link p-0 ">Batik</a></li>
    </ul>
  </div>


  <div class="col-6 mb-3">
    <h5>Mandalika</h5>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="mandalika.php" class="nav-link p-0 ">Tarian</a></li>
      <li class="nav-item mb-2"><a href="mandalika.php" class="nav-link p-0 ">Fauna</a></li>
      <li class="nav-item mb-2"><a href="mandalika.php" class="nav-link p-0 ">Batik</a></li>
    </ul>
  </div>

  <div class="col mb-3">
  </div>

  <div class="col-6 mb-3">
    <h5>Likupang</h5>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="likupang.php" class="nav-link p-0 ">Tarian</a></li>
      <li class="nav-item mb-2"><a href="likupang.php" class="nav-link p-0 ">Makanan</a></li>
      <li class="nav-item mb-2"><a href="likupang.php" class="nav-link p-0 ">Suku</a></li>
    </ul>
  </div>


  <div class="col-6 mb-3">
    <h5>Tanjung Kelayang</h5>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="tanjung.php" class="nav-link p-0 ">Makanan</a></li>
      <li class="nav-item mb-2"><a href="tanjung.php" class="nav-link p-0 ">Tarian</a></li>
      <li class="nav-item mb-2"><a href="tanjung.php" class="nav-link p-0 ">Fauna</a></li>
    </ul>
  </div>


  <div class="col-6 mb-3">
    <h5>Bromo</h5>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="bromo.php" class="nav-link p-0 ">Makanan</a></li>
      <li class="nav-item mb-2"><a href="bromo.php" class="nav-link p-0 ">Festival</a></li>
      <li class="nav-item mb-2"><a href="bromo.php" class="nav-link p-0 ">Batik</a></li>
    </ul>
  </div>


  <div class="col-6 mb-3">
    <h5>Wakatobi</h5>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="wakatobi.php" class="nav-link p-0 ">Makanan</a></li>
      <li class="nav-item mb-2"><a href="wakatobi.php" class="nav-link p-0 ">Festival</a></li>
      <li class="nav-item mb-2"><a href="wakatobi.php" class="nav-link p-0 ">Batik</a></li>
    </ul>
  </div>

  <div class="col mb-3">
  </div>


  <div class="col-6 mb-3">
    <h5>Morotai</h5>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="morotai.php" class="nav-link p-0 ">Tarian</a></li>
      <li class="nav-item mb-2"><a href="morotai.php" class="nav-link p-0 ">Festival</a></li>
      <li class="nav-item mb-2"><a href="morotai.php" class="nav-link p-0 ">Batik</a></li>
    </ul>
  </div>


  <div class="col-6 mb-3">
    <h5>Raja Ampat</h5>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="rajaampat.php" class="nav-link p-0 ">Makanan</a></li>
      <li class="nav-item mb-2"><a href="rajaampat.php" class="nav-link p-0 ">Festival</a></li>
      <li class="nav-item mb-2"><a href="rajaampat.php" class="nav-link p-0 ">Batik</a></li>
    </ul>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
crossorigin="anonymous"></script>

</body>

</html>