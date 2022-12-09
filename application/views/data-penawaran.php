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
                                                    <th>Nama Driver</th>
                                                    <th>Fakultas Tujuan/Jemput</th>
                                                    <th>Lokasi Jemput/Tujuan Pulang</th>
                                                    <th>Waktu Berangkat</th>
                                                    <th>Waktu Pulang</th>
                                                    <th>Gender Penumpang</th>
                                                    <th>Tipe Penawaran</th>
                                                    <th>Status</th>
                                                    <th>Booking</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; foreach ($penawaran as $data) : ?>
                                                <tr>
                                                    <th><?=$no++;?></th>
                                                    <td><?=ucfirst($data->nama)?></td>
                                                    <td>
                                                        <?php if($data->lokasi_awal == "sekolah-bisnis"){echo "Sekolah Bisnis";}elseif($data->lokasi_awal == "sekolah-vokasi"){echo "Sekolah Vokasi";}?>
                                                    </td>
                                                    <td>
                                                        <a href="https://www.google.com/maps/search/?api=1&query=<?=$data->lokasi_tujuan?>" class="btn btn-sm btn-primary" target="_blank">Lihat Lokasi</a>
                                                    </td>
                                                    <td><?=$data->waktu_berangkat?> WIB</td>
                                                    <td><?=$data->waktu_pulang?> WIB</td>
                                                    <td><?=ucfirst($data->gender)?></td>
                                                    <td><?=ucfirst($data->type)?></td>
                                                    <td>
                                                        <?php if($data->is_active == "0"){echo "Tidak Aktif";}elseif($data->is_active == "1"){echo "Aktif";}?>
                                                    </td>
                                                    <td>
                                                        <?php if($data->is_booked == "0"){echo "Tidak";}elseif($data->is_booked == "1"){echo "Ya";}?>
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