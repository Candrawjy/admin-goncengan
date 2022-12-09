                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?=$title?></h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><?=$title?></h6>
                                    <a href="<?=base_url('data-pengguna')?>" class="btn btn-primary waves-effect btn-sm float-right ml-3">Kembali</a>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data" id="form">
                                        <input type="hidden" name="id" value="<?=$pengguna['id'] ?>">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <input class="form-control" type="text" name="nama" value="<?=$pengguna['nama'] ?>">
                                                    <small class="text-danger"><?=form_error('nama') ?></small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>NIM (Nomor Induk Mahasiswa)</label>
                                                    <input class="form-control" type="text" name="nim" value="<?=$pengguna['nim'] ?>">
                                                    <small class="text-danger"><?=form_error('nim') ?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Email (@apps.ipb.ac.id)</label>
                                                    <input class="form-control" type="text" name="email" value="<?=$pengguna['email'] ?>" pattern="[a-z0-9A-Z._%+-]+@apps.ipb.ac.id" onkeydown="validation()" id="email">
                                                    <small id="text" class="text-danger"></small>
                                                    <small class="text-danger"><?=form_error('email') ?></small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label>
                                                    <select name="jenis_kelamin" class="form-control">
                                                        <option value="<?=$pengguna['jenis_kelamin'] ?>">-- Tidak Ada Perubahan --</option>
                                                        <option value="laki-laki">Laki-Laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                    </select>
                                                    <small class="text-danger"><?=form_error('jenis_kelamin') ?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Status Pengguna</label>
                                                    <select name="is_active" class="form-control">
                                                        <option value="<?=$pengguna['is_active'] ?>">-- Tidak Ada Perubahan --</option>
                                                        <option value="1">Aktif</option>
                                                        <option value="0">Tidak Aktif</option>
                                                    </select>
                                                    <small class="text-danger"><?=form_error('is_active') ?></small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Status Banned</label>
                                                    <select name="is_banned" class="form-control">
                                                        <option value="<?=$pengguna['is_banned'] ?>">-- Tidak Ada Perubahan --</option>
                                                        <option value="0">Tidak</option>
                                                        <option value="1">Banned</option>
                                                    </select>
                                                    <small class="text-danger"><?=form_error('is_banned') ?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Akses Admin</label>
                                                    <select name="is_admin" class="form-control">
                                                        <option value="<?=$pengguna['is_admin'] ?>">-- Tidak Ada Perubahan --</option>
                                                        <option value="1">Ya</option>
                                                        <option value="0">Tidak</option>
                                                    </select>
                                                    <small class="text-danger"><?=form_error('is_admin') ?></small>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" type="password" name="password">
                                                    <small class="text-danger"><?=form_error('password') ?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm">Edit Data</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>