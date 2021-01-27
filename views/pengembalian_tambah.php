<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background-color:#06124a">
                    <h3 class="panel-title">Form Tambah Data Pengembalian Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="no_buku" class="col-sm-3 control-label">Nomor Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_buku" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Buku" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="tgl_pengembalian" class="col-sm-3 control-label">Tanggal Pengembalian</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_pengembalian" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Pengembalian" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="judul_buku" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul_buku" class="form-control" id="inputEmail3" placeholder="Inputkan Judul Buku" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pengarang" class="col-sm-3 control-label">Pengarang</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengarang"class="form-control" id="inputEmail3" placeholder="Inputkan Pengarang" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success" style="background-color:#06124a">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pengembalian&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Buku
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nama=$_POST['nama'];
  $no_buku=$_POST['no_buku'];
  $tgl_pengembalian=$_POST['tgl_pengembalian'];
  $judul_buku=$_POST['judul_buku'];
	$pengarang=$_POST['pengarang'];
    //buat sql
    $sql="INSERT INTO tb_pengembalian VALUES ('','$nama','$no_buku','$tgl_pengembalian','$judul_buku','$pengarang')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=pengembalian&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
