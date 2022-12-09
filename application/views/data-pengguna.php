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
                                                    <th>NIM</th>
                                                    <th>No Whatsapp</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Foto</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                    <th>Banned</th>
                                                    <th>Akses Admin</th>
                                                    <th>Mode Saat ini</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; foreach ($pengguna as $data) : ?>
                                                <tr>
                                                    <th><?=$no++;?></th>
                                                    <td><?=ucfirst($data->nama)?></td>
                                                    <td><?=ucfirst($data->nim)?></td>
                                                    <td><?=$data->no_wa?></td>
                                                    <td><?=ucfirst($data->jenis_kelamin)?></td>
                                                    <td>
                                                        <img src="https://goncengan.com/assets/images/profil/<?=$data->profile_picture?>" width="45" class="rounded-3 p-1 bg-white" alt="">
                                                    </td>
                                                    <td><?=ucfirst($data->email)?></td>
                                                    <td>
                                                        <?php if($data->is_active == "0"){echo "Tidak Aktif";}elseif($data->is_active == "1"){echo "Aktif";}?>
                                                    </td>
                                                    <td>
                                                        <?php if($data->is_banned == "0"){echo "Tidak";}elseif($data->is_banned == "1"){echo "Ya";}?>
                                                    </td>
                                                    <td>
                                                        <?php if($data->is_admin == "0"){echo "Tidak";}elseif($data->is_admin == "1"){echo "Ya";}?>
                                                    </td>
                                                    <td><?=ucfirst($data->role)?></td>
                                                    <td>
                                                        <a href="<?=base_url('data-pengguna/edit/').$data->id;?>" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="<?=base_url('data-pengguna/delete/').$data->id;?>" class="btn btn-sm btn-danger" id="btn-hapus">Hapus</a>
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