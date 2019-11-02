<section class="content-header">
    <h1>
        Pembelajaran
    </h1>

</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambah Pembelajaran</h3>
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
                            <div class="form-group <?= form_error('kd_pembelajaran') ? 'has-error' : null ?>">
                                <label>Kode Pembelajaran *</label>
                                <input type="text" name="kd_pembelajaran" value="<?= set_value('kd_pembelajaran') ?>" class="form-control">
                                <?= form_error('kd_pembelajaran') ?>
                            </div>
                            <div class="form-group <?= form_error('judul') ? 'has-error' : null ?>">
                                <label>Judul Pelajaran *</label>
                                <input type="text" name="judul" value="<?= set_value('judul') ?>" class="form-control">
                                <?= form_error('judul') ?>
                            </div>
                            <div class="form-group <?= form_error('email') ? 'has-error' : null ?>">
                                <label>Tahun Pembuatan *</label>
                                <input type="text" name="tahun_pembuatan" value="<?= set_value('tahun_pembuatan') ?>" class="form-control">
                                <?= form_error('tahun_pembuatan') ?>
                            </div> 
                            <div class="form-group <?= form_error('no_hp') ? 'has-error' : null ?>">
                                <label>Bidang *</label>
                                <input type="text" name="bidang" value="<?= set_value('bidang') ?>" class="form-control">
                                <?= form_error('bidang') ?>
                            </div>                                                                  
                            <div class="form-group <?= form_error('no_sk_tim_pengembang') ? 'has-error' : null ?>">
                                <label>No SK Tim Pengembang *</label>
                                <input type="text" name="no_sk_tim_pengembang" value="<?= set_value('no_sk_tim_pengembang') ?>" class="form-control">
                                <?= form_error('no_sk_tim_pengembang') ?>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Save</button>
                                <button type="reset" class="btn btn-flat">Reset</button>
                        </form>
                    </div>
                </div>

</section>