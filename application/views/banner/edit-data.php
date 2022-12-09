                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?=$title?></h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><?=$title?></h6>
                                    <a href="<?=base_url('data-banner')?>" class="btn btn-primary waves-effect btn-sm float-right ml-3">Kembali</a>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <input class="form-control" type="hidden" name="id" value="<?=$banner['id'] ?>">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label>Nama Banner</label>
                                                <input class="form-control" type="text" name="nama_banner" value="<?=$banner['nama_banner'] ?>">
                                                <small class="text-danger"><?=form_error('nama_banner') ?></small>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label>Foto Banner <small class="text-danger">(Format : jpg/png, Max. 3mb)</small></label>
                                                <input class="form-control" type="file" name="foto_banner">
                                                <input type="hidden" name="tmp_foto_banner" value="<?=$banner['foto_banner']?>">
                                                <small class="text-danger"><?= form_error('foto_banner') ?></small>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm">Edit Banner</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>