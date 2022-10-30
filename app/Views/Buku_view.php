<div class="container pt-5">
    <a href="<?= base_url('buku/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Buku</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Buku</th>
                            <th>Jenis Buku</th>
                            <th>Penerbit</th>
                            <th>Penulis</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getBuku as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['judul_buku'];?></td>
                                <td><?= $isi['jenis_buku'];?></td>
                                <td><?= $isi['penerbit'];?></td>
                                <td><?= $isi['penulis'];?></td>
                                <td>
                                    <a href="<?= base_url('buku/edit/'.$isi['id_buku']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('buku/hapus/'.$isi['id_buku']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')"
                                    class="btn btn-danger">
                                    Hapus</a>
                                    <a href="<?= base_url('buku/upload/'.$isi['id_buku']);?>" 
                                    class="btn btn-primary">
                                    Edit</a>
                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>