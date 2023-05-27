<?php
include "../layout/header.php";
include "koneksi.php";
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


      <div class="content">
        <div class="container-fluid">
          
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
              </div>
            </div>
          </div>









          <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Alternatif dan Kriteria</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    

    <section class="content">
        <!-- Default box -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabel Alternatif</h3>

                    </div>
                    <!-- Tabel alternatif -->
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#addModal"><i class=""></i> Tambah Data</button>
                        <!-- Modal -->
                        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Alternatif</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="kode">Code</label>
                                                <input type="text" class="form-control" name="kode_alternatif" id="kode" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama">Alternatif</label>
                                                <input type="text" class="form-control" name="nama_alternatif" id="nama" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="add_alternatif" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- tutup modal -->
                        <!-- tabel data -->
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="20px">No.</th>
                                    <th>Code</th>
                                    <th>Alternatif</th>
                                    <th width="120px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'koneksi.php';
                                $no = 1;
                                $sql = mysqli_query($koneksi, "SELECT * FROM alternatif");
                                while ($data = mysqli_fetch_assoc($sql)) {
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data['code']; ?></td>
                                        <td><?= $data['alternatif']; ?></td>
                                        <td align="center">
                                            <button type="button" class="btn btn-warning sm" data-toggle="modal" data-target="#editModal<?= $data['id_alter']; ?>"><i class="fa fa-pencil-square-o"></i></button>
                                            <button type="button" class="btn btn-danger sm" data-toggle="modal" data-target="#deleteModal<?= $data['id_alter']; ?>"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <!--  -->
                                    <!-- modal edit data alternatif -->
                                    <div class="modal fade" id="editModal<?= $data['id_alter']; ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Alternatif</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="id">ID Alternatif</label>
                                                            <input type="text" class="form-control" name="id" id="id" value="<?= $data['id_alter']; ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="kode">Code</label>
                                                            <input type="text" class="form-control" name="kode_alternatif" id="kode" value="<?= $data['code']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama">Alternatif</label>
                                                            <input type="text" class="form-control" name="nama_alternatif" id="nama" value="<?= $data['alternatif']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="edit_alternatif" class="btn btn-primary">Simpan Dan Ubah</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <!-- tutup modal -->
                                    <!-- Modal delete -->
                                    <div class="modal fade" id="deleteModal<?= $data['id_alter']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="<?= $data['id_alter']; ?>">
                                                        <p>Apakah anda Yakin akan menghapus id(<?= $data['id_alter']; ?>) ini ?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="delete_id" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- tutup tabel data -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <br><br><br>
        <!--  -->
        <!-- Default box -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabel Kriteria</h3>
                        
                    </div>
                    <!-- tabel kriteria -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="20px">No.</th>
                                    <th>Code</th>
                                    <th>Kriteria</th>
                                    <th>Jenis</th>
                                    <th>Bobot</th>
                                    <th width="50px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = mysqli_query($koneksi, "SELECT * FROM kriteria");
                                while ($data = mysqli_fetch_assoc($sql)) {
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data['code']; ?></td>
                                        <td><?= $data['kriteria']; ?></td>
                                        <td><?= $data['jenis']; ?></td>
                                        <td><?= $data['bobot']; ?></td>
                                        <td align="center">
                                            <button class="btn btn-warning sm" data-toggle="modal" data-target="#editKriteria<?= $data['id']; ?>"><i class="fa fa-pencil-square-o""></i></button>
                                        </td>
                                    </tr>
                                    <!-- modal edit data kriteria -->
                                    <div class="modal fade" id="editKriteria<?= $data['id']; ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Kriteria</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="id">ID Kriteria</label>
                                                            <input type="text" class="form-control" name="id" id="id" value="<?= $data['id']; ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="kode">Code</label>
                                                            <input type="text" class="form-control" name="kode_kriteria" id="kode" value="<?= $data['code']; ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="kriter">Kriteria</label>
                                                            <input type="text" class="form-control" name="nama_kriteria" id="kriter" value="<?= $data['kriteria']; ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jenis</label>
                                                            <select name="jenis_kriteria" class="form-control">
                                                                <option>benefit</option>
                                                                <option>cost</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Bobot</label>
                                                            <select name="bobot_kriteria" class="form-control">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="edit_kriteria" class="btn btn-primary">Simpan Dan Ubah</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <!-- tutup modal -->
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
</div>

<?php
// Fungsi tambah data alternatif
if (isset($_POST['add_alternatif'])) {
    $code = $_POST['kode_alternatif'];
    $alternatif = $_POST['nama_alternatif'];
    mysqli_query($koneksi, "INSERT INTO alternatif VALUES(NULL,'$code','$alternatif')");

    if (mysqli_affected_rows($koneksi) > 0) {
        echo "<script>
            alert('data berhasil di tambahkan');
            document.location.href = 'alternatif.php';
            </script>";
    } else {
        echo "<script>
            alert('data gagal di tambahkan');
            document.location.href = 'alternatif.php';
            </script>";
    }
}

// Fungsi edit data alternatif
if (isset($_POST['edit_alternatif'])) {
    $id = $_POST['id'];
    $code = $_POST['kode_alternatif'];
    $alternatif = $_POST['nama_alternatif'];
    mysqli_query($koneksi, "UPDATE alternatif SET code='$code', alternatif='$alternatif' WHERE id_alter=$id");
    if (mysqli_affected_rows($koneksi) > 0) {
        echo "<script>
            alert('data berhasil di edit');
            document.location.href = 'alternatif.php';
            </script>";
    } else {
        echo "<script>
            alert('data gagal di edit');
            document.location.href = 'alternatif.php';
            </script>";
    }
}

// fungsi delete tabel alternatif
if (isset($_POST['delete_id'])) {
    $id = $_POST['id'];
    mysqli_query($koneksi, "DELETE FROM alternatif WHERE id_alter=$id");
    if (mysqli_affected_rows($koneksi) > 0) {
        echo "<script>
            alert('data berhasil di hapus');
            document.location.href = 'alternatif.php';
            </script>";
    } else {
        echo "<script>
            alert('data gagal di hapus');
            document.location.href = 'alternatif.php';
            </script>";
    }
}

// fungsi edit kriteria
if (isset($_POST['edit_kriteria'])) {
    $id = $_POST['id'];
    $code = $_POST['kode_kriteria'];
    $kriteria = $_POST['nama_kriteria'];
    $jenis = $_POST['jenis_kriteria'];
    $bobot = $_POST['bobot_kriteria'];
    mysqli_query($koneksi, "UPDATE kriteria SET code='$code', kriteria='$kriteria', jenis='$jenis', bobot=$bobot WHERE id=$id");

    if (mysqli_affected_rows($koneksi) > 0) {
        echo "<script>
            alert('data berhasil di edit');
            document.location.href = 'alternatif.php';
            </script>";
    } else {
        echo "<script>
            alert('data gagal di edit');
            document.location.href = 'alternatif.php';
            </script>";
    }
}
?>
            

             <!-- end of weather widget -->
             </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


          
             
        



    </div>
  </div>
  
  <?php
  include "../layout/footer.php";
  ?>