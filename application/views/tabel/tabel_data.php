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
            <h3 class="box-title">Data Tabel</h3>
            <div class="pull-right">
                <a href="<?= site_url('tabel/add') ?>" class="btn btn-primary btn flat">
                    <i class="fa fa-user-plus"></i> Create
                </a>
            </div>

            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Order</th>
                            <th rowspan="2">Nama Pesanan</th>
                            <th rowspan="2">Pelaksana</th>
                            <th rowspan="2">Finish</th>
                            <th rowspan="2">Detail</th>
                            <th rowspan="2">Jenis Order</th>
                            <th rowspan="2">Action</th>
                            <th id="progress" colspan="4">Progress</th>
                            <th rowspan="2">Hasil</th>
                         <tr>
                                <th id="q" scope="col">Q</th>
                                <th id="rfq" scope="col">RFQ</th>
                                <th id="rfq" scope="col">CO/EO/PO/TO</th>
                                <th id="do" scope="col">DO</th>
                            </tr> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?= $no++ ?>.</td>
                                <td><?= $data->order ?></td>
                                <td><?= $data->nama_pesanan ?></td>
                                <td><?= $data->pelaksana ?></td>
                                <td><?= $data->finish ?></td>
                                <td><?= $data->detail ?></td>
                                <td><?php
                                if ($data->jenis_order == 1) {
                                    echo "CO";
                                }elseif ($data->jenis_order == 2) {
                                    echo "EO";
                                }elseif ($data->jenis_order == 3) {
                                    echo "PO";
                                }else{
                                    echo "TO";
                                } 
                                ?></td>
                                <td class="text-center" width="160px">
                                    <form action="<?= site_url('tabel/del') ?>" method="post">
                                        <a href="<?= site_url('tabel/edit/' . $data->id_tabel) ?>" class="btn btn-primary btn-xs">
                                            <i class="fa fa-pencil"></i> Update
                                        </a>
                                        <input type="hidden" name="id_tabel" value="<?= $data->id_tabel ?>">
                                        <button onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                                    <td><?php if ($data->q == 1) {
                                        echo "<p>&radic;</p>";
                                    } ?></td>
                                    <td><?php if ($data->rfq == 1) {
                                        echo "<p>&radic;</p>";
                                    } ?></td>
                                    <td><?php if ($data->co == 1) {
                                        echo "<p>&radic;</p>";
                                    } ?></td>
                                    <td><?php if ($data->do == 1) {
                                        echo "<p>&radic;</p>";
                                    } ?></td>
                                    <td>
                                    <?php 
                                    if ($data->q == 1 && $data->rfq == 0 && $data->co == 0 && $data->do == 0) {
                                        echo "25%";
                                    }elseif ($data->q == 1 && $data->rfq == 1 && $data->co == 0 && $data->do == 0) {
                                        echo "50%";
                                    }elseif ($data->q == 1 && $data->rfq == 1 && $data->co == 1 && $data->do == 0) {
                                        echo "75%";
                                    }elseif ($data->q == 1 && $data->rfq == 1 && $data->co == 1 && $data->do == 1) {
                                        echo "100%";
                                    } ?>
                                    </td>
                                
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

</section>