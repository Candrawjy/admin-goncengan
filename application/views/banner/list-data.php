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
                                                    <th>Nama Banner</th>
                                                    <th>Foto Banner</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; foreach ($banner as $data) : ?>
                                                <tr>
                                                    <th><?=$no++;?></th>
                                                    <th><?=ucfirst($data->nama_banner)?></th>
                                                    <td>
                                                        <img src="<?=base_url('')?>assets/images/banner/<?=$data->foto_banner?>" width="50%" class="rounded p-1" alt="">
                                                    </td>
                                                    <td>
                                                        <a href="<?=base_url('data-banner/edit/').$data->id;?>" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="<?=base_url('data-banner/delete/').$data->id;?>" class="btn btn-sm btn-danger" id="btn-hapus">Hapus</a>
                                                    </td>
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