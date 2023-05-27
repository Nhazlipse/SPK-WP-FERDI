<?php
include "../layout/header.php";
?>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="#" class="simple-text logo-normal">
          SPK | UNISKA
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./alternatif.php">
              <i class="material-icons">person</i>
              <p>Data Alternatif & Kriteria</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./bobot.php">
              <i class="material-icons">content_paste</i>
              <p>Data Bobot & Kriteria</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./perhitungan.php">
              <i class="material-icons">library_books</i>
              <p>Perhitungan WP</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>


    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          

          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">

              
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->


      <br>
    <h3 class="p-2" align="center">Sistem Pendukung Keputusan Karyawan Terbaik UNISKA</h3>
    <h5 align="center">Metode Weighted Product (WP)</h5>


        <div class="container-fluid">
        <div class="page-content">
                    <section class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Weight Product</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                        SPK Aplikasi Penerimaan Mahasiswa Baru Menggunakan Metode Weight
                                        </p>
                                        <hr>
                                        <p class="card-text">SPK (Sistem Pendukung Keputusan) Aplikasi Penerimaan Mahasiswa Baru menggunakan metode Weight Product adalah sebuah sistem yang dirancang untuk membantu dalam pengambilan keputusan dalam proses penerimaan mahasiswa baru di sebuah institusi pendidikan.
                                        </p>
                                        <br>
                                        <p class="card-text">Metode Weight Product (WP) adalah metode pengambilan keputusan yang menggunakan pembobotan terhadap kriteria-kriteria yang relevan untuk menentukan peringkat alternatif. Dalam konteks ini, kriteria-kriteria tersebut dapat mencakup nilai akademik, prestasi ekstrakurikuler, tes masuk, atau kriteria lainnya yang relevan dalam proses seleksi.
                                        </p>
                                        <br>
                                        <p class="card-text">SPK ini memungkinkan pihak yang bertanggung jawab dalam penerimaan mahasiswa baru, seperti panitia seleksi atau staf administrasi, untuk menginput data dan bobot kriteria yang diperlukan. Selanjutnya, SPK akan melakukan perhitungan berdasarkan metode Weight Product untuk memberikan peringkat atau skor kepada setiap calon mahasiswa baru.
                                        </p>
                                        <br>
                                        <p class="card-text">Dengan menggunakan metode Weight Product, SPK ini dapat membantu memudahkan proses seleksi mahasiswa baru dengan memberikan hasil yang lebih objektif dan terukur. Dalam hal ini, keputusan akhir tentang penerimaan mahasiswa baru masih bergantung pada pihak yang bertanggung jawab, namun SPK ini dapat menjadi alat yang berharga dalam membantu mereka dalam proses pengambilan keputusan yang lebih efisien dan konsisten.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>




          
                    

    </div>
  </div>
  
  <?php
  include "../layout/footer.php";
  ?>