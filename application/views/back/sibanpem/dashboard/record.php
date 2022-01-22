<style>
.bg-1b {
    background-color: #A2ABDC;
}
</style>
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header bg-success">
                <div class="card-actions">
                    <a class=" text-white" data-action="collapse" data-toggle="tooltip" title="sembunyikan"><i
                            class="ti-minus"></i></a>
                    <a class="btn-minimize text-white" data-action="expand" data-toggle="tooltip" title="layar penuh"><i
                            class="mdi mdi-arrow-expand"></i></a>
                    <a class="btn-close text-white" data-action="close" data-toggle="tooltip" title="tutup"><i
                            class="ti-close"></i></a>
                </div>
                <h4 class="card-title m-b-0 text-white"><a class="btn-minimize text-white" data-toggle="tooltip"
                        title="lihat di dashboard terpisah"><i class="mdi mdi-collage"></i>
                        Pemantauan Alokasi
                        Anggaran</a></h4>
            </div>
            <div class="row card-body">
                <!-- widget Gerdal OPT -->


                <div class="col-lg-4 col-md-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <span id="Widget1Title" class="font-weight-bolder">Total Anggaran</span>
                        </div>
                        <div class="card-body">
                            <!-- Row -->
                            <div class="row">
                                <div class="col-4 align-self-center text-right  p-l-0">
                                    <img class="img" id="" src="<?php echo base_url('/images/icon/money-bag.png') ?>"
                                        style="width:48px;" alt="">
                                </div>
                                <div class="col-8" id="Widget3Total">
                                    <h6 id="Widget1Text">Anggaran Tahun 2022</h6>
                                    <h3 class="text-info font-bold">373.185.388.571</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mt-2">
                                        <small>
                                            <p class="text-muted mb-0">0%</p>
                                        </small>
                                        <small>
                                            <p class="text-muted mb-0">100%</p>
                                        </small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 100%; height: 10px;" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                    <small><i class="text-muted mb-0"></i>Total Anggaran Kegiatan Tahun ini</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- widget Gerdal OPT -->

                <div class="col-lg-4 col-md-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <span id="Widget1Title" class="font-weight-bolder">Total Bantuan Barang</span>
                        </div>
                        <div class="card-body">
                            <!-- Row -->
                            <div class="row">
                                <div class="col-4 align-self-center text-right  p-l-0">
                                    <img class="img" id="" src="<?php echo base_url('/images/icon/boxes.png') ?>"
                                        style="width:48px;" alt="">
                                </div>
                                <div class="col-8" id="Widget3Total">
                                    <h6 id="Widget1Text">Realisasi Penyaluran</h6>
                                    <h3 class="text-success font-bold">298.548.310.857</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mt-2">
                                        <small>
                                            <p class="text-muted mb-0">Data: 31 Jan</p>
                                        </small>
                                        <small>
                                            <p class="text-muted mb-0">80%</p>
                                        </small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: 80%; height: 10px;" aria-valuenow="80" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                    <small><i class="text-muted mb-0"></i>Dari total alokasi anggaran</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- widget Gerdal OPT -->

                <div class="col-lg-4 col-md-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <span id="Widget1Title" class="font-weight-bolder">Total Bantuan Uang</span>
                        </div>
                        <div class="card-body">
                            <!-- Row -->
                            <div class="row">
                                <div class="col-4 align-self-center text-right  p-l-0">
                                    <img class="img" id="" src="<?php echo base_url('/images/icon/money.png') ?>"
                                        style="width:48px;" alt="">
                                </div>
                                <div class="col-8" id="Widget3Total">
                                    <h6 id="Widget1Text">Realisasi Penyaluran</h6>
                                    <h3 class="text-warning font-bold">149.274.155.428</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mt-2">
                                        <small>
                                            <p class="text-muted mb-0">Data: 30 Jun</p>
                                        </small>
                                        <small>
                                            <p class="text-muted mb-0">50%</p>
                                        </small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                            style="width: 50%; height: 10px;" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                    <small><i class="text-muted mb-0"></i>Dari total alokasi anggaran</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <h6 class="card-title m-b-0" style="text-align: right;"><small>Sumber: App. Pengendalian Anggaran
                        2022</small></h6>
            </div>
        </div>
    </div>
</div>
<!-- App Anggaran -->

<!-- jenis barang -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header bg-1b">
                <div class="card-actions">
                    <a class=" text-white" data-action="collapse" data-toggle="tooltip" title="sembunyikan"><i
                            class="ti-minus"></i></a>
                    <a class="btn-minimize text-white" data-action="expand" data-toggle="tooltip" title="layar penuh"><i
                            class="mdi mdi-arrow-expand"></i></a>
                    <a class="btn-close text-white" data-action="close" data-toggle="tooltip" title="tutup"><i
                            class="ti-close"></i></a>
                </div>
                <h4 class="card-title m-b-0 text-white"><a class="btn-minimize text-white" data-toggle="tooltip"
                        title="lihat di dashboard terpisah"><i class="mdi mdi-collage"></i>
                        Bantuan Berdasarkan Jenis Barang</a></h4>
            </div>
            <div class="row card-body">

                <div class="col-lg-3 col-md-6">
                    <div class="card card-default ">
                        <div class="card-header">
                            <span id="Widget1Title" class="font-weight-bolder">Alsintan</span>
                        </div>
                        <div class="card-body">
                            <!-- Row -->
                            <div class="row">


                                <div class="col-4 align-self-center text-right  p-l-0">
                                    <img class="img" id="" src="<?php echo base_url('/images/icon/fertilizer.png') ?>"
                                        style="width:48px;" alt="">
                                </div>
                                <div class="col-8" id="Widget3Total">
                                    <h6 id="Widget1Text">Nominal</h6>
                                    <h6 class="text-info font-bold">373.185.388.571</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mt-2">
                                        <small>
                                            <p class="text-muted mb-0">0%</p>
                                        </small>
                                        <small>
                                            <p class="text-muted mb-0">70%</p>
                                        </small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 100%; height: 10px;" aria-valuenow="70" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                    <small><i class="text-muted mb-0"></i>Dari total alokasi anggaran</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- widget Gerdal OPT -->


                <div class="col-lg-3 col-md-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <span id="Widget1Title" class="font-weight-bolder">Benih</span>
                        </div>
                        <div class="card-body">
                            <!-- Row -->
                            <div class="row">
                                <div class="col-4 align-self-center text-right  p-l-0">
                                    <img class="img" id="" src="<?php echo base_url('/images/icon/seeding.png') ?>"
                                        style="width:48px;" alt="">
                                </div>
                                <div class="col-8" id="Widget3Total">
                                    <h6 id="Widget1Text">Nominal</h6>
                                    <h6 class="text-success font-bold">298.548.310.857</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mt-2">
                                        <small>
                                            <p class="text-muted mb-0">0%</p>
                                        </small>
                                        <small>
                                            <p class="text-muted mb-0">80%</p>
                                        </small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: 80%; height: 10px;" aria-valuenow="80" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                    <small><i class="text-muted mb-0"></i>Dari total alokasi anggaran</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <span id="Widget1Title" class="font-weight-bolder">Pupuk</span>
                        </div>
                        <div class="card-body">
                            <!-- Row -->
                            <div class="row">
                                <div class="col-4 align-self-center text-right  p-l-0">
                                    <img class="img" id="" src="<?php echo base_url('/images/icon/seed.png') ?>"
                                        style="width:48px;" alt="">
                                </div>
                                <div class="col-8" id="Widget3Total">
                                    <h6 id="Widget1Text">Nominal</h6>
                                    <h6 class="text-warning font-bold">149.274.155.428</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mt-2">
                                        <small>
                                            <p class="text-muted mb-0">0%</p>
                                        </small>
                                        <small>
                                            <p class="text-muted mb-0">50%</p>
                                        </small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                            style="width: 50%; height: 10px;" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                    <small><i class="text-muted mb-0"></i>Dari total alokasi anggaran</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <span id="Widget1Title" class="font-weight-bolder">Sarpras</span>
                        </div>
                        <div class="card-body">
                            <!-- Row -->
                            <div class="row">
                                <div class="col-4 align-self-center text-right  p-l-0">
                                    <img class="img" id="" src="<?php echo base_url('/images/icon/sarpras.png') ?>"
                                        style="width:48px;" alt="">
                                </div>
                                <div class="col-8" id="Widget3Total">
                                    <h6 id="Widget1Text">Nominal</h6>
                                    <h6 class="text-danger font-bold">149.274.155.428</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mt-2">
                                        <small>
                                            <p class="text-muted mb-0">0%</p>
                                        </small>
                                        <small>
                                            <p class="text-muted mb-0">90%</p>
                                        </small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger" role="progressbar"
                                            style="width: 50%; height: 10px;" aria-valuenow="90" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                    <small><i class="text-muted mb-0"></i>Dari total alokasi anggaran</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <h6 class="card-title m-b-0" style="text-align: right;"><small>Sumber: App. Pengendalian Anggaran
                        2022</small></h6>
            </div>
        </div>
    </div>
</div>
<!-- jenis barang -->

<div class="row row-card-no-pd">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Sebaran Bantuan Barang berdasarkan Satker
                <div class="card-actions"><a class="" data-action="collapse"><i class="ti-minus"></i></a><a
                        class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                    <!-- //<a class="btn-close" data-action="close"><i class="ti-close"></i></a>//-->

                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="table-responsive table-hover table-sales">
                            <table id="dataTable" class="table no-border">
                                <thead>
                                    <tr>
                                        <th>Logo</th>
                                        <th>Nama Provinsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($get_wilayah as $wilayah) {?>
                                    <tr>
                                        <td style="width:30px"><a
                                                href="<?php echo base_url('dashboard/View_detail_prov/').$wilayah['id'] ?>"><img
                                                    src="<?php echo base_url('assets/images/logo/').$wilayah['id'].'.png' ?>"
                                                    alt="logo" /></a></td>
                                        <td><a
                                                href="<?php echo base_url('dashboard/View_detail_prov/').$wilayah['id'] ?>">
                                                <?php echo $wilayah['nama'];?> </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div id="visitfromworld" style="width:100%!important; height:410px; z-index:1">
                            <div class="leaflet-bottom leaflet-left">
                                <div class="panel-body-lg"><a href="< ?php echo base_url() ?>"
                                        class="logo d-flex align-items-center"><img
                                            src="< ?php echo base_url('assets/images/') ?>logo-light-text.png"
                                            alt="navbar brand" class="navbar-brand" height="45px"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>