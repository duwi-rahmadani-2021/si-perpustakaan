<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pengembalian Buku</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_pengembalian WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Perpustakaan SMKN 1 Kisaran </h2>
                        <h4>Jalan Akasia No. 44 Kisaran<br>
                             Kecamatan Kota Kisaran Barat, Kabupaten Asahan, Provinsi Sumatera Utara Kode Pos 21216</h4>
                        <hr>
                        <h3>DATA PENGEMBALIAN BUKU</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nama</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">No Buku</td> <td><?= $data['no_buku'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pengembalian</td> <td><?= $data['tgl_pengembalian'] ?></td>
                                </tr>
								<tr>
                                    <td>Judul Buku</td> <td><?= $data['judul_buku'] ?></td>
                                </tr>
								<tr>
                                    <td>Pengarang</td> <td><?= $data['pengarang'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
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