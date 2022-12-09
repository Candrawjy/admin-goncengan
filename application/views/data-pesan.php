                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?=$title?></h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Semua <?=$title?></h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Pesan</th>
                                                    <th>Tanggal Pesan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; foreach ($pesan as $data) : ?>
                                                <tr>
                                                    <th><?=$no++;?></th>
                                                    <td><?=ucfirst($data->nama)?></td>
                                                    <td><?=ucfirst($data->pesan)?></td>
                                                    <td><?= date('D, d-m-Y', strtotime($data->created_at)) ?></td>
                                                </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>