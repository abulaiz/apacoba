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
            <h3 class="box-title">Edit Data</h3>
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
                            <label>Order</label> <small>(Biarkan kosong jika tidak diganti)</small>
                            <input type="hidden" name="id_tabel" value="<?= $row->id_tabel?>">
                            <input type="text" name="order" value="<?= $this->input->post('order') ?>" class="form-control">
                            <?= form_error('order') ?>
                        </div>
                        <div class="form-group <?= form_error('namapesan') ? 'has-error' : null ?>">
                            <label>Nama Pesanan</label> <small>(Biarkan kosong jika tidak diganti)</small>
                            <input type="text" name="namapesan" value="<?= $this->input->post('namapesan') ?>" class="form-control">
                            <?= form_error('namapesan') ?>
                        </div>
                        <div class="form-group <?= form_error('pelaksana') ? 'has-error' : null ?>">
                            <label>Pelaksana</label> <small>(Biarkan kosong jika tidak diganti)</small>
                            <input type="text" name="pelaksana" value="<?= $this->input->post('pelaksana') ?>" class="form-control">
                            <?= form_error('pelaksana') ?>
                        </div>
                        <div class="form-group <?= form_error('finish') ? 'has-error' : null ?>">
                            <label>Finish *</label>
                            <input type="date" name="finish" value="<?= $this->input->post('finish') ?? $row->finish ?>" class="form-control">
                            <?= form_error('finish') ?>
                        </div>
                        <div class="form-group <?= form_error('detail') ? 'has-error' : null ?>">
                            <label>Detail *</label>
                            <textarea name="detail" value="<?= $this->input->post('detail') ?? $row->detail ?>" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $this->input->post('detail') ?? $row->finish ?></textarea>
                            <?= form_error('detail') ?>
                        </div>
                        <div class="form-group <?= form_error('jenis_order') ? 'has-error' : null ?>">
                            <label>Jenis Order</label> <small>(Biarkan kosong jika tidak diganti)</small>
                            <select name="jenis_order" class="form-control">
                            <?php $jenis_order = $this->input->post('jenis_order') ? $this->input->post('jenis_order') : $row->jenis_order ?>
                                <option value="1">CO</option>
                                <option value="2" <?= $jenis_order == 2 ? 'selected' : null ?>>EO</option>
                                <option value="3" <?= $jenis_order == 3 ? 'selected' : null ?>>PO</option>
                                <option value="4" <?= $jenis_order == 4 ? 'selected' : null ?>>TO</option>
                            </select>
                            <?= form_error('jenis_order') ?>
                        </div>
                        <div class="form-group">
                            <label>Progress</label>
                            <br>
                            <input type="checkbox" name="proses1" value="1">Q<br/>
                            <input type="checkbox" name="proses2" value="1">RFQ<br/>
                            <input type="checkbox" name="proses3" value="1">CO/EO/PO/TO<br/>
                            <input type="checkbox" name="proses4" value="1">DO<br/>
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