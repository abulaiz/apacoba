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
            <h3 class="box-title">Data Pelajaran</h3>
            <div class="pull-right">
                <a href="<?= site_url('pelajaran/add') ?>" class="btn btn-primary btn flat">
                    <i class="fa fa-user-plus"></i> Create
                </a>
            </div>

            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Kode Pembelajaran</th>
                            <th rowspan="2">Judul</th>
                            <th rowspan="2">Tahun Pembuatan</th>
                            <th rowspan="2">Bidang</th>
                            <th rowspan="2">No SK Tim Pengembang</th>
                            <th rowspan="2">Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($row as $key => $data) { ?>
                            <tr>
                                <td><?= $no++ ?>.</td>
                                <td><?= $data->kd_pembelajaran ?></td>
                                <td><?= $data->judul ?></td>
                                <td><?= $data->tahun_pembuatan ?></td>
                                <td><?= $data->bidang ?></td>
                                <td><?= $data->no_sk_tim_pengembang ?></td>
                                <td class="text-center" width="160px">
                                    <form action="<?= site_url('pelajaran/del') ?>" method="post">
                                        <a href="<?= site_url('pelajaran/edit/' . $data->kd_pembelajaran) ?>" class="btn btn-primary btn-xs">
                                            <i class="fa fa-pencil"></i> Update
                                        </a>
                                        <input type="hidden" name="kd_pembelajaran" value="<?= $data->kd_pembelajaran ?>">
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