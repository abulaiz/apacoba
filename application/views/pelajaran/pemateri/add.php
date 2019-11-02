<section class="content-header">
    <h1>
        Pembelajaran - <?= $info->kd_pembelajaran ?>
    </h1>
    <p><?= $info->judul ?></p>

</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambah Pemateri</h3>
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
                        <form action="<?= site_url('pelajaran/add_pemateri') ?>" method="post">
                            <input type="hidden" name="kd_pembelajaran" value="<?= $info->kd_pembelajaran ?>">
                            <div class="form-group <?= form_error('nip') ? 'has-error' : null ?>">
                                <label>Actor *</label>
                                <select required name="nip" value="<?= set_value('nip') ?>" class="form-control">
                                    <option value="">--Pilih Actor--</option>
                                    <?php foreach($actor as $item): ?>
                                    <option value="<?= $item->nip ?>"><?= $item->nama ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('nip') ?>
                            </div>
                            <div class="form-group <?= form_error('id_peran') ? 'has-error' : null ?>">
                                <label>Peran dalam Tim *</label>
                                <select required name="id_peran" value="<?= set_value('id_peran') ?>" class="form-control">
                                    <option value="">--Pilih Peran--</option>
                                    <?php foreach($peran as $item): ?>
                                    <option value="<?= $item->id ?>"><?= $item->nama_peran ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('id_peran') ?>
                            </div>                            

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Save</button>
                                <button type="reset" class="btn btn-flat">Reset</button>
                        </form>
                    </div>
                </div>

</section>