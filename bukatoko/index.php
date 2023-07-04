<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" type="text/css" href="style1.css">

    <title>TOMORROW'S</title>
  </head>
  <body id="page-top" >

<!--NAVBAR-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <div class="container">
    <li></li>
    <a class="navbar-brand font-weight-bold" href="#">TOMORROW <i class="fas fa-check"></i></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active js-scroll-trigger" aria-current="page" href="#home">Home</a>
        </li>
     
       <li class="nav-item">
          <a class="nav-link active js-scroll-trigger" aria-current="page" href="katalog.php">Catalog</a>
        </li>
     
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger text-white" href="#about">About Us</a>
        </li>
        <?php if (isset($_SESSION["pelanggan"])):?>
        <li class="nav-item"><a class="nav-link js-scroll-trigger text-white" href="logout.php">logout</a></li>
      <?php else:?>
        <li class="nav-item"><a class="nav-link js-scroll-trigger text-white" href="login.php">login</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger text-white" href="daftar.php">daftar</a></li>
      <?php endif ?>
      </ul>
    </div>
  </div>
</nav>

<!--CAROSEL-->
<div class="container-fluid banner">
  <div class="container text-center">
    <h4 class="display-6"> Welcome</h4>
    <hr class="mx-4 my-4">
    <h3 class="display-1"><b>T O M O R R O W  <br>Streetwear</b></h3>
  </div>
</div>

  <div class="container-fluid home pt-5 pb-5">
    <div class="container text-center">
      <h2 class="display-3" id="home">T O M O R R O W</h2>
      <p>Welcome in website store T O M O R R O W streetwear</p>
      <br>
      <p>Perkenalkan Kami dari T O M O R R O W  streetwear fashion, disini kami melayani di bidang :</p>
      <div class="row pt-4">
        <div class="col-md-6">
          <span class="lingkaran"><i class="fas fa-tshirt fa-5x"></i></span>
          <h3 class="mt-3">Outfit</h3>
          <p>Kami menjual beberapa brand pakaian terkenal dari luar.Tentunya sudah melalui legit check, jadi anda tidak perlu khawatir karena bisa di pastikan keasliannya. ORIGINAL 100%</p>
        </div>

        <div class="col-md-6">
          <span class="lingkaran"><i class="fas fa-cart-plus fa-5x"></i></span>
          <h3 class="mt-3">Request</h3>
          <p>Kami juga melayani request order. Anda dapat menghubungi kami dan request barang apa yang sedang anda cari (ex: Barang yang tidak ada di indonesia atau barang limited yang sudah tidak di produksi). maka sebisa mungkin kami akan mencarikan barang tersebut untuk anda </p>
        </div>
      </div>
    </div>
</div>

<br>
<br>
<br>


<!--About Us-->
<div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container text-center">
    <h2 class="display-3" id="about">ABOUT US</h2>
    <p class="text-center">T O M O R R O W  streetwear fashion</p>
    <p>T O M O R R O W  streetwear fashion merupakan bisnis yang pada awalnya terpikirkan dari pemikiran di mana seseorang bebas berpenampilan, dengan artian seseorang bebas membeli dan memakai barang yang mereka mau. Terlepas dari barang tersebut memiliki anggapan yang terlalu mahal,aneh,jelek,terlalu berlebihan dan anggapan negatif lainnya. karena sejatinya kita memakai pakaian sesuai yang kita inginkan, bukan sesuai penglihatan dan keinginan orang lain. Dengan hadirnya toko ini, berperan sebagai fasilitas untuk seseorang membeli barang yang mereka mau. dan sebagai tempat di mana seseorang bisa request barang apa yang mereka ingin untuk dicarikan. Harapan kami adalah agar orang-orang di luar sana mendapatkan barang-barang fashion yang mereka impikan, dan tentunya puas dengan apa yang mereka dapatkan </p>
  </div>
</div>
<br>

<div class="container-fluid text-center pt-5 pb-5 bg-dark ">
  <span style="color: white;">T O M O R R O W  Streetware &copy; 2021</span>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    </body>
</html>