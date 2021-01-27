<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Pengembalian Buku</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pepustakaan SMKN1 Kisaran </h2>
                        <h4>Jalan Akasia No. 44 Kisaran<br>
                             Kecamatan Kota Kisaran Barat, Kabupaten Asahan, Provinsi Sumatera Utara Kode Pos 21216</h4>
                        <hr>
                        <h3>DATA SELURUH PENGEMBALIAN BUKU</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th>
                                    <th width="18%">Nama</th>
                                    <th>No Buku</th>
                                    <th width="10%">Tanggal Peminjam</th>
                                    <th><center>Judul Buku</center></th>
                                    <th><center>Pengarang</center></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_pengembalian";
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
                                    <td><?= $data['tgl_pengembalian'] ?></td>
									<td><?= $data['judul_buku'] ?></td>
									<td><?= $data['pengarang'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                       <u>Duwi Rahmadani<strong></u><br>
                                        NIP.17220045
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>