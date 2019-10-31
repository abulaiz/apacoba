<section class="content-header">
    <h1>
        Tabels
    </h1>

</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Peran</h3>
            <div class="pull-right">
                <a href="<?= site_url('peran/add') ?>" class="btn btn-primary btn flat">
                    <i class="fa fa-user-plus"></i> Create
                </a>
            </div>

            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2">Nama Peran</th>
                            <th rowspan="2">Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($row as $key => $data) { ?>
                            <tr>
                                <td><?= $data->nama_peran ?>.</td>
                                <td class="text-center" width="160px">
                                    <form action="<?= site_url('peran/del') ?>" method="post">
                                        <a href="<?= site_url('peran/edit/' . $data->id) ?>" class="btn btn-primary btn-xs">
                                            <i class="fa fa-pencil"></i> Update
                                        </a>
                                        <input type="hidden" name="id" value="<?= $data->id ?>">
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