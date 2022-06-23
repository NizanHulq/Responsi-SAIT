<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SepatWash - Cuci Sepatu Online</title>

  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

  <!-- My CSS -->
  <link rel="stylesheet" href="css/project1.css" />




</head>

<body>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-light relative bg-orange pt-3 pb-3">
      <div class="container flex-column flex-md-row">
        <a class="navbar-brand roboto-700" href="#">
          <img src="assets/sport-shoe.png" height="50" width="50"> <big>SepatWash</big>
        </a>
        <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0 flex-row bukan-tombol">
          <li class="nav-item">
            <a class="nav-link roboto-300" href="#home">Home</a>
          </li>
          <li class="nav-item ms-3">
            <a class="nav-link roboto-300" href="#about">About Us</a>
          </li>
          <li class="nav-item ms-3">
            <a class="nav-link roboto-300" href="#paket">Paket</a>
          </li>

          <li class="nav-item ms-3">
            <a class="nav-link roboto-300" href="#contact">Contact Us</a>
          </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0 flex-row tombol">
          <li class="nav-item">
            <div class="nav-link btn btn-warning daftar rounded-pill ps-3 pe-3" id="button">Cuci Sekarang
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- End of Header -->

  <!-- Hero -->
  <section class="hero" id="home">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 text-hero">
          <h1 class="display-3 roboto-900">SepatWash</h1>
          <p class="display-6 roboto-500">Bersih Bening Seperti Sepatu Baru</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Hero -->

  <!-- About -->
  <section class="about" id="about">
    <div class="container p-3">
      <div class="row">
        <div class="col-12 text-center">
          <div>
            <span class="badge bg-warning text-dark ps-5 pe-5 pt-3 pb-3 rounded-pill mb-3">
              ABOUT
            </span>
          </div>
          <p>
            Kami memberikan pelayanan terbaik untuk pelanggan kami dimanapun anda berada.
            Cukup kirimkan alamat rumah anda maka kami akan jemput sepatu anda, lalu akan kami bersihkan dengan sangat berisih sehingga terlihat
            seperti anda membeli sepatu baru. Jangan khawatir sepatu anda rusak karena kami selalu menyediakan garansi untuk sepatu kesayangan anda.
        </div>
      </div>
    </div>
  </section>
  <!-- End of About -->


  <!-- paket -->
  <section class="menu" id="paket">
    <div class="container p-5">
      <div class="row">
        <div class="col-12 text-center mt-5 mb-5">
          <span class="badge bg-warning text-dark ps-5 pe-5 pt-3 pb-3 rounded-pill mb-3">
            Paket
          </span>
        </div>

        <div class="col-12 col-md-6 col-lg-4 text-center p-3">
          <div class="custom-menu">
            <img src="assets/fast-cleaning.jpg" alt="" width="75%" />
            <br />
            <br />
            <div class="harga">
              <p class="price">Rp. 30.000</p>
            </div>
            <h2>Fast Cleaning</h2>
            <p>
              Cukup waktu 20 menit saja untuk membersihkan sepatu anda yang kotor.
            </p>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 text-center p-3">
          <div class="custom-menu">
            <img src="assets/deep-cleaning.jpg" alt="" width="75%" />
            <br />
            <br />
            <div class="harga">
              <p class="price">Rp. 70.000</p>
            </div>
            <h2>Deep Cleaning</h2>
            <p>
              Dapat membersihkan semua tipe sepatu seperti sneakers, boots, mountain boots, sport shoes dan lain-lain.
              Dijamin bersih sampai ke akar-akarnya.
            </p>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 text-center p-3">
          <div class="custom-menu">
            <img src="assets/unyellowing.jpg" alt="M" width="75%" />
            <br />
            <br />
            <div class="harga">
              <p class="price">Rp. 100.000</p>
            </div>
            <h2>Unyellowing</h2>
            <p>
              Memutihkan sepatumu yang sudah menguning. Dijamin putih seperti baru.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of paket -->

  <!-- Jumlah Total Pemesan -->

  <section class="about" id="about">
    <div class="container p-3">
      <div class="row">
        <div class="col-12 text-center">
          <div>
            <span class="badge bg-warning text-dark ps-5 pe-5 pt-3 pb-3 rounded-pill mb-3">
              Total Pemesanan
            </span>

          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Paket</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sumber = file_get_contents('http://192.168.56.10/sepatWash/api_cucisepatu.php');
              $konten = utf8_encode($sumber);
              $data = json_decode($konten, true);
              // var_dump($data);
              $no = 1;
              foreach ($data['data'] as $key => $value) {
              ?>
                <tr>
                  <th scope='row'><?php echo $no ?></th>
                  <td><?php echo $value['nama'] ?></td>
                  <td><?php echo $value['paket'] ?></td>
                  <td>
                    <a href="hapus.php?id=<?php echo $value['id'] ?>" class="btn btn-danger">Hapus</a>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $value['id'] ?>">
                      Edit
                    </button>
        </div>
        </td>
        </tr>
      <?php
                echo $no++;
                include 'edit.php';
              }
      ?>
      </tbody>
      </table>
      </div>
    </div>
    </div>
  </section>

  <!-- End Total Pemesan -->

  <!-- Jumlah Total Pemesan -->

  <section class="about" id="about">
    <div class="container p-3">
      <div class="row">
        <?php
        require 'vendor/autoload.php';

        use GuzzleHttp\Client;

        $client = new Client();
        $response = $client->request('GET', 'https://newsapi.org/v2/top-headlines?category=sports&apiKey=a073c3dd3c1e4849a09b6b53814230de');
        $body = $response->getBody();
        $data = json_decode($body, true);
        // var_dump($data);
        $no = 1;


        foreach ($data['articles'] as $value) {
          if ($no < "7") {
        ?>
            <div class="col-4 text-center mt-5 mb-5">
              <div class="card m-2 h-auto d-inline-block" style="">
                <img src="<?php echo $value['urlToImage'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $value['title'] ?></h5>
                  <h6 class="card-title"><?php echo $value['author'] ?></h6>
                  <p class="card-text"><?php echo $value['description'] ?></p>
                  <a href="<?php echo $value['url'] ?>" class="btn btn-primary">View Article</a>
                </div>
              </div>
            </div>
        <?php }
          $no++;
        } ?>
      </div>
    </div>
    </div>
  </section>

  <!-- End Total Pemesan -->


  <!-- Contact  -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <span class="badge bg-warning text-dark ps-5 pe-5 pt-3 pb-3 rounded-pill mb-5">
            CONTACT
          </span>
        </div>
        <div class="col-6 col-sm-3 col-md-2 text-center">
          <a href="https://wa.me/6281225371638"><img src="assets/whatsapp.png" alt="whatsapp" width="50%"></a>
          <br>
          <br>
          <a href="https://wa.me/6281225371638" class="contact-menu">
            WHATSAPP
          </a>
        </div>
        <div class="col-6 col-sm-3 col-md-2 text-center">
          <a href="https://instagram.com/"><img src="assets/instagram.png" alt="instagram" width="50%"></a>
          <br>
          <br>
          <a href="https://instagram.com/" class="contact-menu">
            INSTAGRAM
          </a>
        </div>
        <div class="col-6 col-sm-3 col-md-2 text-center">
          <a href="https://www.facebook.com/"><img src="assets/facebook.png" alt="facebook" width="50%"></a>
          <br>
          <br>
          <a href="https://www.facebook.com/" class="contact-menu">
            FACEBOOK
          </a>
        </div>
        <div class="col-6 col-sm-3 col-md-2 text-center">
          <a href="mailto:nizandiaulhaq@gmail.com"><img src="assets/mail.png" alt="email" width="50%"></a>
          <br>
          <br>
          <a href="mailto:nizandiaulhaq@gmail.com" class="contact-menu">
            EMAIL
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Contact  -->

  <!-- Footer -->
  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <p>&copy; Powered by Nizan Dhiaulhaq (20/464400/SV/18719)</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End of footer -->

  <!-- modal -->
  <!-- cuci sekarang -->
  <!-- create -->
  <div class="modal-bg">
    <div class="modal-content">
      <div class="close">x</div>
      <form action="insert.php" method="POST" id="form">
        <div class="container">
          <center>
            <h2>Formulir Pemesanan Jasa</h2>
          </center>

          <label for="nama"><b>Nama :</b></label>
          <input type="text" placeholder="Nama" name="nama" id="nama">

          <label for="noHp"><b>Nomor Handphone :</b></label>
          <input type="text" placeholder="Nomor Handphone" name="noHp" id="noHp">

          <label for="email"><b>Email :</b></label>
          <input type="text" placeholder="Email" name="email" id="email">

          <label for="alamat"><b>Alamat :</b></label>
          <input type="text" placeholder="Alamat Lengkap" name="alamat" id="alamat">

          <label for="paket"><b>Pilih Paket :</b></label>
          <select name="paket" placeholder="paket" class="option">
            <option selected hidden value="">Pilih Paket</option>
            <option value="Fast Cleaning">Fast Cleaning</option>
            <option value="Deep Cleaning">Deep Cleaning</option>
            <option value="Unyellowing">Unyellowing</option>
          </select>
          <button type="submit" class="pesan" name="submit">Pesan</button>
        </div>
      </form>
    </div>
  </div>
  <!--End cuci sekarang -->


  <!-- My Javascript -->
  <script src="js/project1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>