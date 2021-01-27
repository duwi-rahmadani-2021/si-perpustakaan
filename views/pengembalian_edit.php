<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_pengembalian WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background-color:#06124a">
                    <h3 class="panel-title">Form Update Data Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">No Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_buku" value="<?=$data['no_buku']?>" class="form-control" id="inputEmail3" placeholder="Inputkan No Buku" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Pengembalian</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_pengembalian" value="<?=$data['tgl_pengembalian']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tgl Pengembalian" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_telp" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul_buku" value="<?=$data['judul_buku']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Judul Buku" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Pengarang</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengarang" value="<?=$data['pengarang']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Pengarang" required>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success" style="background-color:#06124a">
                                    <span class="fa fa-edit"></span> Update Data Pengembalian</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pengembalian&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pengembalian
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
     $sql="UPDATE tb_pengembalian SET nama='$nama',no_buku='$no_buku',tgl_pengembalian='$tgl_pengembalian',judul_buku='$judul_buku',pengarang='$pengarang' WHERE id='$id'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=pengembalian&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>



