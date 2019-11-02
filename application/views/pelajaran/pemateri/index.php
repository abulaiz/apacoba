<section class="content-header">
    <h1>
        <?= $detail->judul ?>
        <small><?= $detail->kd_pembelajaran ?></small>
    </h1>

</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Daftar Pemateri</h3>
            <div class="pull-right">
                <a href="<?= site_url('pelajaran/add_pemateri/'.$detail->kd_pembelajaran) ?>" class="btn btn-primary btn flat">
                    <i class="fa fa-user-plus"></i> Tambah Pemateri
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="datatables">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Unit Kerja</th>
                        <th>Peran Dalam Tim</th>
                        <th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($row as $key => $data) { ?>
                        <tr>
                            <td><?= $data->actor->nip ?></td>
                            <td><?= $data->actor->nama ?></td>
                            <td><?= $data->actor->unit_kerja ?></td>
                            <td><?= $data->peran->nama_peran ?></td>
                            <td class="text-center" width="160px">
                                <form action="<?= site_url('pelajaran/del_pemateri') ?>" method="post">
                                    <input type="hidden" name="kd_pembelajaran" value="<?= $detail->kd_pembelajaran ?>">
                                    <input type="hidden" name="nip" value="<?= $data->actor->nip ?>">
                                    <input type="hidden" name="id_peran" value="<?= $data->id_peran ?>">
                                    <button onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                            
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>