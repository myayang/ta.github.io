<div class="container p-5">
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('Login/add');?>">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">E-Mail</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>