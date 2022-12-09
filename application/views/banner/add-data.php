                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?=$title?></h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><?=$title?></h6>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label>Nama Banner</label>
                                                <input class="form-control" type="text" name="nama_banner" value="<?=set_value('nama_banner')?>">
                                                <small class="text-danger"><?=form_error('nama_banner') ?></small>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label>Foto Banner <small class="text-danger">(Format : jpg/png, Max. 3mb)</small></label>
                                                <input class="form-control" type="file" name="userfile[]">
                                                <small class="text-danger"><?=form_error('userfile') ?></small>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm">Upload Banner</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>