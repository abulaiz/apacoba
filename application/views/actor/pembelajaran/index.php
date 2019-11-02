<section class="content-header">
    <h1>
        <?= $info->nama ?> - <?= $info->nip ?>
    </h1>

</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Pembelajaran</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="datatables">
                <thead>
                    <tr>
                        <th>Kode Pembelajaran</th>
                        <th>Judul</th>
                        <th>Peran dalam Tim</th>
                        <th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($row as $key => $data) { ?>
                        <tr>
                            <td><?= $data->kd_pembelajaran ?>.</td>
                            <td><?= $data->pelajaran->judul ?></td>
                            <td><?= $data->peran->nama_peran ?></td>
                            <td class="text-center" width="160px">
                                <form action="<?= site_url('actor/del_pembelajaran') ?>" method="post">
                                    <input type="hidden" name="nip" value="<?= $data->nip ?>">
                                    <input type="hidden" name="kd_pembelajaran" value="<?= $data->kd_pembelajaran ?>">
                                    <input type="hidden" name="id_peran" value="<?= $data->id_peran ?>">
                                    <button onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash"></i> Keluarkan
                                    </button>
                                </form>
                            </td>
                            
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>

</section>