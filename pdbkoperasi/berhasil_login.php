<?php 
 
session_start();
 
if (!isset($_SESSION['login'])) {
    header("Location: idxanggota.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="ooo.css">
    <link rel="stylesheet" type="text/css" href="">
    <title>Berhasil Login</title>
    <center>
    <div class="container p-5 my-5 bg-primary text-white">
        <h1 style="" font= verdana >SELAMAT DATANG DI KOPERASI KONOHA</h1>
        <p>"Teman sejati akan selalu menemukan cara untuk membantumu. Teman palsu akan selalu mencari alasan. untuk itulah koperasi ada demi mewujudkan nilai persaudaraan"</p>
    </div>
    </center>
      
</head>
<body background="oke.jpg">
        
<center>
<!-- Collect the nav links, forms, and other content for toggling -->

<div >
          <ul class="nav navbar-nav navbar-right">
   <div class="container-fluid">
   <nav id="menu">
        <ul>
            
                    <li>
                    <a href="berhasil_login.php">Home</a>
                    </li>
                    <li>
                        <a href="idxanggota.php">Data Anggota</a>
                    </li>
                    <li>
                        <a href="idxsimpanan.php">Simpanan</a>
                    </li>
                    <li>
                        <a href="idxpinjaman.php">Pinjaman</a>  
                    </li>
                    <li>
                        <a href="idxkaryawan.php">Petugas </a>
                    
                    </li>

<form class="form-inline" method="GET">
        <div class="form-group mx-sm-3 mb-2">
            <label for="nama_anggota" class="sr-only">Nama</label>
            <input type="nama" class="form-control" id="nama_anggota" placeholder="Masukan Nama" name="nama">
        </div>
        <input type="submit" class="btn btn-primary mb-2" value="Cari">
</form>
                 </div>
            </div>
        </ul>
    </nav>
</center>


    <div class="container p-5 my-5 bg-primary text-black">
  <h1></h1>
</div>
<tbody>
   <!-- Konten halaman web -->

   <p style='background-color: white; color: red; align :center;'>Koperasi adalah organisasi bisnis yang dimiliki dan dikendalikan oleh anggotanya sendiri.
												Tujuannya adalah untuk membantu anggota memenuhi kebutuhan ekonomi dan sosial mereka melalui pengelolaan usaha bersama.
												Anggota koperasi berkontribusi dengan modal dan bekerja sama untuk mencapai tujuan bersama.
												Koperasi juga sering memfokuskan pada prinsip-prinsip seperti solidaritas, demokrasi, dan keadilan.</p>
   <footer style="background-color: black; color: white; padding: 20px; position: fixed; bottom: 0; width: 100%;">
      <p>powerby: myhuminsanainggolan@gmail.com &copy; 2023 - hahahahah</p>
   </footer>
</tbody>
<section id="portfolio" class="light">
      <header class="title">
        <h2>Portfolio</h2>
        <p>Lorem ipsum Cupidatat sit irure nostrud ut deserunt ad enim id laboris. Lorem ipsum Enim proident et eu et minim voluptate eiusmod ullamco commodo aliqua amet.</p>
      </header>

      <div class="container-fluid">
        <div class="row">
          <ul id="filters" class="list-inline">
            <li data-filter="all" class="filter">All</li>
            <li data-filter=".branding" class="filter">Branding</li> 
            <li data-filter=".graphic" class="filter">Graphic</li> 
            <li data-filter=".printing" class="filter">Printing</li> 
            <li data-filter=".video" class="filter">Video</li> 
          </ul>
        </div>

        <div class="row">
          <div class="container-portfolio">
            <!-- PORTFOLIO OBJECT -->
            <script type="text/javascript">
            var portfolio = [
                    {
                      category : "branding",
                      image : "koperasi.png",
                      title : "Charming <span>Roxy</span>",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    },
                    {
                      category : "graphic",
                      image : "koperasi.png",
                      title : "Fresh <span>Bubba</span>",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    },
                    {
                      category : "graphic",
                      image : "koperasi.png",
                      title : "Wild <span>Romeo</span>",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    },
                    {
                      category : "video",
                      image : "koperasi.png",
                      title : "Strange <span>Dexter</span>",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    },
                    {
                      category : "branding",
                      image : "koperasi.png",
                      title : "Free <span>Sarah</span>",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    },
                    {
                      category : "printing",
                      image : "koperasi.png",
                      title : "Chico <span>Silly</span>",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    },
                    {
                      category : "printing",
                      image : "koperasi.png",
                      title : "IG <span>Shop</span>",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    },
                    {
                      category : "printing",
                      image : "koperasi.png",
                      title : "Tana <span>Samawa</span>",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    }
                ];
            </script>
          </div>
        </div>
      </div>
    </section>

    <section id="team" class="light">
      <header class="title">
        <h2>Creative <span>Team</span></h2>
        <p>Lorem ipsum Dolor et reprehenderit laborum deserunt aliquip incididunt tempor id non. Lorem ipsum Fugiat anim labore cupidatat consequat non in sit dolore anim anim consequat nisi.</p>
      </header>
      
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 text-center">
            <div class="wrap animated" data-animate="fadeInDown">
              <div class="img-team">
                <img src="images/team-1.png" alt="" class="img-circle">
              </div>

              <h3>John Doe</h3>
              <h5>Creative Director</h5>

              <p>Lorem ipsum Proident incididunt sint dolor cupidatat pariatur dolore magna pariatur in ea aliqua.</p>

              <div class="team-social">
                <ul class="list-inline social-list">
                  <li><a href="#" class="fa fa-twitter"></a></li>
                  <li><a href="#" class="fa fa-linkedin"></a></li>
                  <li><a href="#" class="fa fa-facebook"></a></li>
                  <li><a href="#" class="fa fa-google-plus"></a></li>
                </ul> 
              </div>                
            </div>
          </div>

          <div class="col-md-3 col-sm-6 text-center">
            <div class="wrap animated" data-animate="fadeInDown"> 
              <div class="img-team">
                <img src="images/team-2.png" alt="" class="img-circle">
              </div>

              <h3>Ellie Morgan</h3>
              <h5>Designer</h5>

              <p>Lorem ipsum Proident incididunt sint dolor cupidatat pariatur dolore magna pariatur in ea aliqua.</p>

              <div class="team-social">
                <ul class="list-inline social-list">
                  <li><a href="#" class="fa fa-twitter"></a></li>
                  <li><a href="#" class="fa fa-linkedin"></a></li>
                  <li><a href="#" class="fa fa-facebook"></a></li>
                  <li><a href="#" class="fa fa-google-plus"></a></li>
                </ul> 
              </div>                
            </div>
          </div>

          <div class="col-md-3 col-sm-6 text-center">
            <div class="wrap animated" data-animate="fadeInDown"> 
              <div class="img-team">
                <img src="images/team-3.png" alt="" class="img-circle">
              </div>

              <h3>Elche</h3>
              <h5>Developer</h5>

              <p>Lorem ipsum Proident incididunt sint dolor cupidatat pariatur dolore magna pariatur in ea aliqua.</p>

              <div class="team-social">
                <ul class="list-inline social-list">
                  <li><a href="#" class="fa fa-twitter"></a></li>
                  <li><a href="#" class="fa fa-linkedin"></a></li>
                  <li><a href="#" class="fa fa-facebook"></a></li>
                  <li><a href="#" class="fa fa-google-plus"></a></li>
                </ul> 
              </div>                
            </div>
          </div>

          <div class="col-md-3 col-sm-6 text-center">
            <div class="wrap animated" data-animate="fadeInDown"> 
              <div class="img-team">
                <img src="images/team-4.png" alt="" class="img-circle">
              </div>

              <h3>JF Thiago</h3>
              <h5>Commerce</h5>

              <p>Lorem ipsum Proident incididunt sint dolor cupidatat pariatur dolore magna pariatur in ea aliqua.</p>

              <div class="team-social">
                <ul class="list-inline social-list">
                  <li><a href="#" class="fa fa-twitter"></a></li>
                  <li><a href="#" class="fa fa-linkedin"></a></li>
                  <li><a href="#" class="fa fa-facebook"></a></li>
                  <li><a href="#" class="fa fa-google-plus"></a></li>
                </ul> 
              </div>                
            </div>
          </div>
        </div>
      </div> <!-- /.container -->
    </section>
	
	    <!-- INFO -->

    <section id="info" class="dark">
      <header class="title">
        <h2>Our <span>Experties</span></h2>
        <p>Lorem ipsum Nulla in incididunt esse tempor dolore ad voluptate aliquip magna sed in.</p>
      </header>

      <div class="container experties">
        <div class="row">
          <div class="col-md-6">
            <div class="skill">
              <ul class="skill-bar list-unstyled">
                <li><span class="percentage" data-value="50%"></span><em>Branding</em></li>
                <li><span class="percentage" data-value="95%"></span><em>Development</em></li>
                <li><span class="percentage" data-value="22%"></span><em>Social</em></li>
              </ul>
            </div>
          </div>

          <div class="col-md-6">
            <div class="skill">
              <ul class="skill-bar list-unstyled">
                <li><span class="percentage" data-value="63%"></span><em>Graphic Design</em></li>
                <li><span class="percentage" data-value="90%"></span><em>Consulting</em></li>
                <li><span class="percentage" data-value="43%"></span><em>Logo</em></li>
              </ul>
            </div>
          </div>
        </div>
      </div> <!-- /.container -->
    </section>	
	

</body>
</html>
<php
if (isset($_GET['nama_anggota'])) {
        $nama_dicari = $_GET['nama_anggota'];
        $pesan_masuk = mysqli_query($conn, "SELECT * FROM anggota WHERE nama LIKE '%$nama_dicari%' ORDER BY users ASC");
    } else {
        $pesan_masuk = mysqli_query($conn, "SELECT * FROM anggota ORDER BY users ASC");
    }
?>