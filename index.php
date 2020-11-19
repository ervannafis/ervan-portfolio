<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">

  <link rel="shortcut icon" href="img/android-icon-36x36.png">

  <title>Portofolio Ervan</title>
  <style type="text/css">
    .bg-ervan{
      background-image: url(https://images.unsplash.com/photo-1598063183638-4ffe7c5f0f8d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80);
    }
    .bg-cf{
      background-color: white;
    }
    .ig-thumbnail{
      width: 100px;
      height: 100px;
      float: left;
      overflow: hidden;
    }

    .ig-thumbnail img{
      width: 100px;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#home">Ervan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid bg-cf">

    <div class="jumbotron bg-ervan" id="home">
      <div class="container">
        <div class="text-center">
          <img src="img/ervan.jpeg" class="rounded-circle img-thumbnail">
          <h1 class="display-4 text-white">Muhammad Ervan Nafis Yuniagy</h1>
          <h3 class="lead text-white">Programmer | Reader | Listener | Football Fans | Anime Lover | KPOPer | Astrophile</h3>
        </div>
      </div>
    </div>


    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10">
            <p>Saya Muhammad Ervan Nafis Yuniagy, Fresh Graduate lulusan Teknik Informatika Universitas Pamulang, Tangerang Selatan tahun 2020. Memiliki pengalaman sebagai Staff Admin di PT. Wacana Bijak Bestari dari tahun 2016 sampai 2020. Saya memiliki minat berkarir sebagai Web Programmer dan memiliki sertifikasi sebagai Programmer dari BNSP. Keahlian yang saya miliki adalah Microsoft Office, PHP, CodeIgniter, MySQL, HTML & CSS, JQuery.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio -->
    <section class="portfolio bg-light" id="portfolio">
      <div class="container">
        <div class="row mb-4">
          <div class="col text-center">
            <h2>Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="https://raw.githubusercontent.com/ervannafis/ervannafis.github.io/master/kelapa.png" alt="Card image cap">
              <div class="card-body">
                <h3>Project UAS</h3>
                <p class="card-text">Aplikasi Penjualan Buah Kelapa</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/ujikom.png" alt="Card image cap">
              <div class="card-body">
                <h3>Project Uji Kompetensi</h3>
                <p class="card-text">Aplikasi Koperasi Simpan Pinjam</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="img/thumbs/sipans.png" alt="Card image cap">
              <div class="card-body">
                <h3>Project Skripsi</h3>
                <p class="card-text">Sistem Informasi Pembayaran Sekolah Berbasis Web dan SMS Gateway</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- Contact -->
    <section class="contact" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h2 class="card-title">Contact Me</h2>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My Home</li>
              <li class="list-group-item">Jl. Mbah Umar, Cangkring, Karanganyar, Demak</li>
              <li class="list-group-item">Central Java, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">

            <form role="form" action="kirim.php" method="post">
            <div class="form-group">
              <input name="nama" type="text" class="form-control" placeholder="Your Name" maxlength="30">
            </div>
            <div class="form-group">
              <input name="usermail" type="text" class="form-control" placeholder="Your Email" maxlength="30">
            </div>
            <div class="form-group">
              <input name="subject" type="text" class="form-control" placeholder="Your Subject" maxlength="40">
            </div>
            <div class="form-group">
              <textarea name="pesan" class="form-control" placeholder="Your Message" rows="10"></textarea>
          </div>

            <button type="submit" class="btn btn-primary">Send Message</button>

          </div>
        </form>

          </div>
        </div>
      </div>
    </section>

  </div>

  <!-- footer -->
  <footer class="bg-primary mt-4 text-white">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <p>Copyright &copy; 2020.</p>
        </div>
      </div>
    </div>
  </footer>









  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
