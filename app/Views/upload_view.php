<div class="container">
        <div class="card">
            <div class="card-header">
                Form Upload Berkas
            </div>
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url(); ?>/Berkas/save" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="berkas" class="form-label">Cover</label>
                        <input type="file" class="form-control" id="cover" name="berkas">
                    </div>
                    <div class="mb-3">
                        <label for="berkas" class="form-label">File</label>
                        <input type="file" class="form-control" id="file" name="berkas">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-info" value="Upload" />
                    </div>
                </form>
            </div>
        </div>
    </div>