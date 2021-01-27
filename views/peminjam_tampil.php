<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background-color:#06124a">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Peminjam</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nomor Buku</th>
                                <th>Tanggal Peminjam</th>
                                <th>Judul Buku</th>
                                <th>Pengarang</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_peminjaman";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nama'] ?></td>
									<td><?= $data['no_buku'] ?></td>
									<td><?= $data['tgl_peminjaman'] ?></td>
									<td><?= $data['judul_buku'] ?></td>
                                    <td><?= $data['pengarang'] ?></td>
                                    <td>
                                        <a href="?page=peminjam&actions=detail&id=<?= $data['id'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                                            <a href="?page=peminjam&actions=edit&id=<?= $data['id'] ?>" class="btn btn-warning btn-xs">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a href="?page=peminjam&actions=delete&id=<?= $data['id'] ?>" class="btn btn-danger btn-xs">
                                                <span class="fa fa-remove"></span>
                                            </a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                
                                    <a href="?page=peminjam&actions=tambah" class="btn btn-info btn-sm" style="background-color:#06124a">
                                        Tambah Data

                                    </a>
                                <?php } ?>
                                </td>
                        </tfoot>
                    </table>
                </div>
            </div>

                            </tr>
        </div>
    </div>
</div>

