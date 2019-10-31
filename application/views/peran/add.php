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
            <h3 class="box-title">Tambah Peran</h3>
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
                            <div class="form-group <?= form_error('nama_peran') ? 'has-error' : null ?>">
                                <label>Nama Peran *</label>
                                <input type="text" name="nama_peran" value="<?= set_value('nama_peran') ?>" class="form-control">
                                <?= form_error('nama_peran') ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Save</button>
                                <button type="reset" class="btn btn-flat">Reset</button>
                        </form>
                    </div>
                </div>

</section>