<section class="content-header">
    <h1>
        Tabels
    </h1>

</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Actor</h3>
            <div class="pull-right">
                <a href="<?= site_url('actor/add') ?>" class="btn btn-primary btn flat">
                    <i class="fa fa-user-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="datatables">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Jabatan</th>
                        <th>Unit Kerja</th>
                        <th>Action</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($row as $key => $data) { ?>
                        <tr>
                            <td><?= $data->nip ?>.</td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->email ?></td>
                            <td><?= $data->no_hp ?></td>
                            <td><?= $data->jabatan ?></td>
                            <td><?= $data->unit_kerja ?></td>
                            <td class="text-center" width="160px">
                                <form action="<?= site_url('actor/del') ?>" method="post">
                                    <a href="<?= site_url('actor/pembelajaran/' . $data->nip) ?>" class="btn btn-success btn-xs">
                                        <i class="fa fa-sign-in"></i> Kelas
                                    </a>                                        
                                    <a href="<?= site_url('actor/edit/' . $data->nip) ?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i> Update
                                    </a>
                                    <input type="hidden" name="nip" value="<?= $data->nip ?>">
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