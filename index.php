<?php
include 'template/head.php';
include 'template/nav-top.php';
include 'template/nav-side.php';

include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM alternatif");
$sql2 = mysqli_query($koneksi, "SELECT * FROM bobot");
$jumlahdata_alternatif = mysqli_num_rows($sql);
$jumlahdata_bobot = mysqli_num_rows($sql2);

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <h3 class="p-2" align="center">Sistem Pendukung Keputusan Karyawan Terbaik UNISKA</h3>
    <h5 align="center">Metode Weighted Product (WP)</h5>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $jumlahdata_alternatif; ?></h3>
                        <p>Jumlah Data Alternatif</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="alternatif.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $jumlahdata_bobot; ?></h3>
                        <p>Jumlah Data Bobot Kriteria</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="bobot.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>Hasil</h3>
                        <p>Perhitungan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="hitung.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->






        
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Fungsi perhitungan -->
<?php
// memanggil fungsi cost dan benefit pada tabel kriteria
function get_costbenefit()
{
    include 'koneksi.php';
    $query = mysqli_query($koneksi, "SELECT * FROM kriteria");
    $i = 0;
    while ($row = $query->fetch_assoc()) {
        @$cost_benefit[$i] = $row['jenis'];
        $i++;
    }
    return $cost_benefit;
}

// menghitung jumlah isi pada tabel kriteria
function jml_kriteria()
{
    include 'koneksi.php';
    $query = mysqli_query($koneksi, "SELECT * FROM kriteria");
    $result = mysqli_num_rows($query);
    return $result;
}

// Mendapatkan nilai kolom bobot pada tabel kriteria
function get_bobot()
{
    include 'koneksi.php';
    $query = mysqli_query($koneksi, "SELECT * FROM kriteria");
    $i = 0;
    while ($row = $query->fetch_assoc()) {
        @$bobot[$i] = $row['bobot'];
        $i++;
    }
    return $bobot;
}

// menghitung jumlah isi pada tabel bobot
function jumlah_tabel_bobot()
{
    include 'koneksi.php';
    $query = mysqli_query($koneksi, "SELECT * FROM bobot");
    $result = mysqli_num_rows($query);
    return $result;
}

// mendapatkan nilai c1 c2 c3 c4 c5 pada tabel bobot
function bobot_setiap_kriteria()
{
    include 'koneksi.php';
    $query = mysqli_query($koneksi, "SELECT * FROM bobot");
    $i = 0;
    while ($row = $query->fetch_assoc()) {
        @$bobot_kriteria[$i][0] = $row['c1'];
        @$bobot_kriteria[$i][1] = $row['c2'];
        @$bobot_kriteria[$i][2] = $row['c3'];
        @$bobot_kriteria[$i][3] = $row['c4'];
        @$bobot_kriteria[$i][4] = $row['c5'];
        $i++;
    }
    return $bobot_kriteria;
}

// mendapatkan nama alternatif dar tabel bobot
function get_alternatif()
{
    include 'koneksi.php';
    $query = mysqli_query($koneksi, "SELECT * FROM bobot a JOIN alternatif b 
                                            ON a.id_alter=b.id_alter");
    $i = 0;
    while ($row = $query->fetch_assoc()) {
        @$col_alternatif[$i][0] = $row['alternatif'];
        @$col_alternatif[$i][1] = $row['code'];
        $i++;
    }
    return $col_alternatif;
}

?>