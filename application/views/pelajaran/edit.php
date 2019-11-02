<section class="content-header">
    <h1>
        Users
        <small>hello</small>
    </h1>

</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Edit Pembelajaran</h3>
            <div class="pull-right">
                <a href="<?= site_url('actor') ?>" class="btn btn-warning btn flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <?php // echo validation_errors(); 
                        ?>
                        <form action="" method="post">
                            <div class="form-group <?= form_error('judul') ? 'has-error' : null ?>">
                                <label>Judul *</label>
                                <input type="text" name="judul" value="<?= $row->judul ?>" class="form-control">
                                <input type="hidden" name="kd_pembelajaran" value="<?= $row->kd_pembelajaran ?>" class="form-control">
                                <?= form_error('judul') ?>
                            </div> 
                            <div class="form-group <?= form_error('tahun_pembuatan') ? 'has-error' : null ?>">
                                <label>Tahun Pembuatan *</label>
                                <input type="text" name="tahun_pembuatan" value="<?= $row->tahun_pembuatan ?>" class="form-control">
                                <?= form_error('tahun_pembuatan') ?>
                            </div>                                                                  
                            <div class="form-group <?= form_error('bidang') ? 'has-error' : null ?>">
                                <label>Bidang *</label>
                                <input type="text" name="bidang" value="<?= $row->bidang ?>" class="form-control">
                                <?= form_error('bidang') ?>
                            </div>
                            <div class="form-group <?= form_error('no_sk_tim_pengembang') ? 'has-error' : null ?>">
                                <label>No SK Tim Pengembang *</label>
                                <input type="text" name="no_sk_tim_pengembang" value="<?= $row->no_sk_tim_pengembang ?>" class="form-control">
                                <?= form_error('no_sk_tim_pengembang') ?>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Save</button>
                                <button type="reset" class="btn btn-flat">Reset</button>
                        </form>
                    </div>
                </div>

</section>