<div class="container pt-5">
    <a href="<?= base_url('Penulis/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Penulis</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat Penulis</th>
                            <th>Instagram</th>
                            <th>Facebook</th>
                            <th>E-mail</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getPenulis as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama_penulis'];?></td>
                                <td><?= $isi['alamat'];?></td>
                                <td><a href="http://www.instagram.com/<?= $isi['instagram'];?>"><?= $isi['instagram'];?></a></td>
                                <td><a href="http://www.facebook.com/<?= $isi['facebook'];?>"><?= $isi['facebook'];?></a></td>
                                <td><a href="mail:to<?= $isi['email'];?>"><?= $isi['email'];?></a></td>
                                <td>
                                    <a href="<?= base_url('Penulis/edit/'.$isi['id_penulis']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('Penulis/hapus/'.$isi['id_penulis']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')"
                                    class="btn btn-danger">
                                    Hapus</a>
                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>