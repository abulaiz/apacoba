<section class="content-header">
    <h1>
        Tabels
        <small>hello</small>
    </h1>

</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambah Data</h3>
            <div class="pull-right">
                <a href="<?= site_url('tabel') ?>" class="btn btn-warning btn flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <?php //echo validation_errors() 
                    ?>
                    <form action="" method="post">
                        <div class="form-group <?= form_error('order') ? 'has-error' : null ?>">
                            <label>Order *</label>
                            <input type="text" name="order" value="<?= set_value('order') ?>" class="form-control">
                            <?= form_error('order') ?>
                        </div>
                        <div class="form-group <?= form_error('namapesan') ? 'has-error' : null ?>">
                            <label>Nama Pesanan *</label>
                            <input type="text" name="namapesan" value="<?= set_value('namapesan') ?>" class="form-control">
                            <?= form_error('namapesan') ?>
                        </div>
                        <div class="form-group <?= form_error('pelaksana') ? 'has-error' : null ?>">
                            <label>Pelaksana *</label>
                            <input type="text" name="pelaksana" value="<?= set_value('pelaksana') ?>" class="form-control">
                            <?= form_error('pelaksana') ?>
                        </div>
                        <div class="form-group <?= form_error('finish') ? 'has-error' : null ?>">
                            <label>Finish *</label>
                            <input type="date" name="finish" value="<?= set_value('finish') ?>" class="form-control">
                            <?= form_error('finish') ?>
                        </div>
                        <div class="form-group <?= form_error('detail') ? 'has-error' : null ?>">
                            <label>Detail *</label>
                            <!-- <textarea name="detail" value="<?= set_value('detail') ?>" class="form-control"></textarea>
                            <?= form_error('detail') ?>
                             -->

                             <textarea name="detail" value="<?= set_value('detail') ?>" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                          <?= form_error('detail') ?>
                        </div>
                        <div class="form-group <?= form_error('jenis_order') ? 'has-error' : null ?>">
                            <label>Jenis Order *</label>
                            <select name="jenis_order" class="form-control">
                                <option>- Pilih -</option>
                                <option value="1" <?= set_value('jenis_order') == 1 ? "selected" : null ?>>CO</option>
                                <option value="2" <?= set_value('jenis_order') == 2 ? "selected" : null ?>>EO</option>
                                <option value="3" <?= set_value('jenis_order') == 3 ? "selected" : null ?>>PO</option>
                                <option value="4" <?= set_value('jenis_order') == 4 ? "selected" : null ?>>TO</option>
                            </select>
                            <?= form_error('jenis_order') ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">Save</button>
                            <button type="Reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>