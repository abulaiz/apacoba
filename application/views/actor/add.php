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
            <h3 class="box-title">Tambah Actor</h3>
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
                            <div class="form-group <?= form_error('nip') ? 'has-error' : null ?>">
                                <label>NIP *</label>
                                <input type="text" name="nip" value="<?= set_value('nip') ?>" class="form-control">
                                <?= form_error('nip') ?>
                            </div>
                            <div class="form-group <?= form_error('nama') ? 'has-error' : null ?>">
                                <label>Nama *</label>
                                <input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control">
                                <?= form_error('nama') ?>
                            </div>
                            <div class="form-group <?= form_error('email') ? 'has-error' : null ?>">
                                <label>Email *</label>
                                <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control">
                                <?= form_error('email') ?>
                            </div> 
                            <div class="form-group <?= form_error('no_hp') ? 'has-error' : null ?>">
                                <label>No HP *</label>
                                <input type="text" name="no_hp" value="<?= set_value('no_hp') ?>" class="form-control">
                                <?= form_error('no_hp') ?>
                            </div>                                                                  
                            <div class="form-group <?= form_error('jabatan') ? 'has-error' : null ?>">
                                <label>Jabatan *</label>
                                <input type="text" name="jabatan" value="<?= set_value('jabatan') ?>" class="form-control">
                                <?= form_error('jabatan') ?>
                            </div>
                            <div class="form-group <?= form_error('unit_kerja') ? 'has-error' : null ?>">
                                <label>Unit Kerja *</label>
                                <input type="text" name="unit_kerja" value="<?= set_value('unit_kerja') ?>" class="form-control">
                                <?= form_error('unit_kerja') ?>
                            </div>
<!--                             <div class="form-group <?= form_error('kemampuan') ? 'has-error' : null ?>">
                                <label>Kemampuan *</label>
                                <input type="text" name="kemampuan" value="<?= set_value('kemampuan') ?>" class="form-control">
                                <?= form_error('kemampuan') ?>
                            </div>   -->

                            <div class="form-group <?= form_error('pengalaman_dibidang_terkait') ? 'has-error' : null ?>">
                                <label>pengalaman_dibidang_terkait *</label>
                                <input type="text" name="pengalaman_dibidang_terkait" value="<?= set_value('pengalaman_dibidang_terkait') ?>" class="form-control">
                                <?= form_error('pengalaman_dibidang_terkait') ?>
                            </div>  
                            <div class="form-group <?= form_error('pengalaman_menyusun_materi') ? 'has-error' : null ?>">
                                <label>pengalaman_menyusun_materi *</label>
                                <input type="text" name="pengalaman_menyusun_materi" value="<?= set_value('pengalaman_menyusun_materi') ?>" class="form-control">
                                <?= form_error('pengalaman_menyusun_materi') ?>
                            </div>  
                            <div class="form-group <?= form_error('sertifikat_pembelajaran_sesuai_bidang') ? 'has-error' : null ?>">
                                <label>sertifikat_pembelajaran_sesuai_bidang *</label>
                                <input type="text" name="sertifikat_pembelajaran_sesuai_bidang" value="<?= set_value('sertifikat_pembelajaran_sesuai_bidang') ?>" class="form-control">
                                <?= form_error('sertifikat_pembelajaran_sesuai_bidang') ?>
                            </div>  
                            <div class="form-group <?= form_error('pendidikan_formal') ? 'has-error' : null ?>">
                                <label>pendidikan_formal *</label>
                                <input type="text" name="pendidikan_formal" value="<?= set_value('pendidikan_formal') ?>" class="form-control">
                                <?= form_error('pendidikan_formal') ?>
                            </div>  
                            <div class="form-group <?= form_error('sertifikat_TCB') ? 'has-error' : null ?>">
                                <label>sertifikat_TCB *</label>
                                <input type="text" name="sertifikat_TCB" value="<?= set_value('sertifikat_TCB') ?>" class="form-control">
                                <?= form_error('sertifikat_TCB') ?>
                            </div>  
                            <div class="form-group <?= form_error('sertifikat_kompetensi_dibidang_pengembangan') ? 'has-error' : null ?>">
                                <label>sertifikat_kompetensi_dibidang_pengembangan *</label>
                                <input type="text" name="sertifikat_kompetensi_dibidang_pengembangan" value="<?= set_value('sertifikat_kompetensi_dibidang_pengembangan') ?>" class="form-control">
                                <?= form_error('sertifikat_kompetensi_dibidang_pengembangan') ?>
                            </div>  


                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Save</button>
                                <button type="reset" class="btn btn-flat">Reset</button>
                        </form>
                    </div>
                </div>

</section>