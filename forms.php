<section role="main" class="content-body">
    <!-- START HEADER PAGE -->
    <header class="page-header">
        <h2>Input Laporan</h2>
        
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Input Laporan</span></li>
            </ol>
                    
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- END HEADER PAGE -->

    <!-- START PAGE FORM -->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <!-- START HEADER FORM -->
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>
                        
                    <h2 class="panel-title"><strong>Input</strong> Laporan</h2>
                </header>
                <!-- END HEADER FORM -->

                <div class="panel-body">
                    <form id="postForm" method="post" action="proses-simpan-lhp.php" class="form-horizontal form-bordered">
                        <!-- START FORM -->
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tanggal</label>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                    <input type="date" name="tgl_lhp" class="form-control">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Nomor</label>
                            <div class="col-md-6">
                                <input type="text" name="no_lhp" class="form-control" id="inputDefault">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Hal</label>
                            <div class="col-md-6">
                                <input type="text" name="hal_lhp" class="form-control" id="inputDefault">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Pelaksana Tugas</label>
                            <div class="col-md-6">
                                <input class="form-control mb-md" name="" type="text" placeholder="Nama Pelaksana 1">
                                <input class="form-control mb-md" type="text" placeholder="Nama Pelaksana 2">
                                <input class="form-control mb-md" type="text" placeholder="Nama Pelaksana 3">
                                <input class="form-control mb-md" type="text" placeholder="Nama Pelaksana 4">
                                <input class="form-control mb-md" type="text" placeholder="Nama Pelaksana 5">
                                <input class="form-control mb-md" type="text" placeholder="Nama Pelaksana 6">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Isi</label>
                            <div class="col-md-9">
                                <textarea class="summernote" name="isi_lhp" data-plugin-summernote></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Dokumentasi</label>
                            <div class="col-md-6">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="input-append">
                                        <div class="uneditable-input">
                                            <i class="fa fa-file fileupload-exists"></i>
                                            <span class="fileupload-preview"></span>
                                        </div>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileupload-exists">Ubah</span>
                                            <span class="fileupload-new">Pilih File</span>
                                            <input type="file" id="img" name="" multiple="" class="form-control-file">
                                        </span>
                                        <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END FORM -->
                        <br>

                        <!-- START FOOTER FORM -->
                        <footer class="panel-footer">
                            <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </footer>
                        <!-- END FOOTER FORM -->
                    </form>
                </div>
            </section>
        </div>
    </div>
    <!-- END PAGE FORM -->
</section>