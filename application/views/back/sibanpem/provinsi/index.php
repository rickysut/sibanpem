<?php $this->load->view('back/template/meta'); ?>
<!-- ============================================================== -->
<!-- Add Style or custom CSS Here -->
<!-- ============================================================== -->
<?php $this->load->view('back/template/header'); ?>
<?php $this->load->view('back/template/sidebar'); ?>
<div class="page-wrapper">
    <?php foreach($get_provinsi as $prov)
			{
				$idProv = $prov->id;
				$logoProv = $prov->id.".png";
				$namaProv = $prov->nama;
			}
			?>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"><?php echo $module ?></h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('sibanpem') ?>"><?php echo $module ?></a></li>
                <li class="breadcrumb-item active"><?php echo $page_title ?></li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row row-card-no-pd">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <img src="<?php echo base_url('assets/images/logo/').$logoProv ?>"><span> Provinsi
                            <?php echo $namaProv; ?></span>
                        <div class="card-actions">
                            <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                            <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                            <a href="<?php echo base_url('sibanpem') ?>" class="btn-close"><i class="ti-close"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="accordion" role="tablist">
                            <div class="card-collapse">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne" class="collapsed">
                                            BAST Berdasarkan Kegiatan
                                            <span class="expand-icon-wrap"><i class="fa fa-angle-down float-right"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="tablekegiatan" class="table display table-hover" cellspacing="0"
                                                style="table-layout: fixed; width: 100%">
                                                <colgroup>
                                                    <col style="width: 51px">
                                                    <col style="width: 372px">
                                                    <col style="width: 149px">
                                                    <col style="width: 116px">
                                                    <col style="width: 133px">
                                                    <col style="width: 137px">
                                                </colgroup>
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">NO</th>
                                                        <th rowspan="2">KEGIATAN</th>
                                                        <th colspan="4">JUMLAH PENERIMAAN BAST</th>
                                                    </tr>
                                                    <tr>
                                                        <th>2018</th>
                                                        <th>2019</th>
                                                        <th>2020</th>
                                                        <th>2021</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                                <tfoot>

                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-collapse">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            BAST Berdasarkan Akun
                                            <span class="expand-icon-wrap"><i class="fa fa-angle-down float-right"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="tableakun" class="table display table-hover" cellspacing="0"
                                                style="table-layout: fixed; width: 100%">
                                                <colgroup>
                                                    <col style="width: 51px">
                                                    <col style="width: 372px">
                                                    <col style="width: 149px">
                                                    <col style="width: 116px">
                                                    <col style="width: 133px">
                                                    <col style="width: 137px">
                                                </colgroup>
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">NO</th>
                                                        <th rowspan="2">AKUN</th>
                                                        <th colspan="4">JUMLAH PENERIMAAN BAST</th>
                                                    </tr>
                                                    <tr>
                                                        <th>2018</th>
                                                        <th>2019</th>
                                                        <th>2020</th>
                                                        <th>2021</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                                <tfoot>

                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-collapse">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed show" data-toggle="collapse" href="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            BAST Berdasarkan Titik Bagi
                                            <span class="expand-icon-wrap"><i class="fa fa-angle-down float-right"
                                                    aria-hidden="true"></i></span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <ul class="nav nav-pills m-t-30 m-b-30">
                                            <li class=" nav-item"> <a href="#navpills-1" class="nav-link"
                                                    data-toggle="tab" aria-expanded="false">2019</a> </li>
                                            <li class=" nav-item"> <a href="#navpills-2" class="nav-link"
                                                    data-toggle="tab" aria-expanded="false">2019</a> </li>
                                            <li class="nav-item"> <a href="#navpills-3" class="nav-link"
                                                    data-toggle="tab" aria-expanded="false">2020</a> </li>
                                            <li class="nav-item"> <a href="#navpills-4" class="nav-link active"
                                                    data-toggle="tab" aria-expanded="true">2021</a> </li>
                                        </ul>
                                        <div class="tab-content br-n pn">
                                            <div id="navpills-1" class="tab-pane">
                                                <div class="row">

                                                </div>
                                            </div>
                                            <div id="navpills-2" class="tab-pane">
                                                <div class="row">

                                                </div>
                                            </div>
                                            <div id="navpills-3" class="tab-pane">
                                                <div class="row">

                                                </div>
                                            </div>
                                            <div id="navpills-4" class="tab-pane active">
                                                <div class="row">
                                                    <div class="table-responsive">
                                                        <table id="table2021" class="table display table-hover"
                                                            cellspacing="0" style="table-layout: fixed; width: 100%">
                                                            <colgroup>
                                                                <col style="width: 51px">
                                                                <col style="width: 100px">
                                                                <col style="width: 400px">
                                                                <col style="width: 140px">
                                                                <col style="width: 100px">
                                                            </colgroup>
                                                            <thead>
                                                                <tr>
                                                                    <th>NO</th>
                                                                    <th>KODE SATKER</th>
                                                                    <th>NAMA SATKER</th>
                                                                    <th>JUMLAH DISALURKAN</th>
                                                                    <th>ACTION</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                            </tbody>
                                                            <tfoot>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('back/template/footer'); ?>
    <div class="modal fade" id="modal_satker_kab" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">
                            Bantuan</span>
                        <span class="fw-light">
                            Pemerintah
                        </span>
                    </h5>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table id="tableSatkerKab" class="table table-striped table-no-bordered table-hover"
                            cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="text-align: center">NO</th>
                                    <th style="text-align: center">NAMA KABUPATEN</th>
                                    <th style="text-align: center">JUMLAH DITERIMA</th>
                                    <th style="text-align: center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    * Data Dengan Status Review Selesai dan Jumlah Disalurkan
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <?php $this->load->view('back/template/endscript'); ?>
    <script src="<?= base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        var idProvinsi = <?php echo $idProv; ?>;
        table1 = $('#tablekegiatan').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "processing": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span>Memuat Data ...!</span> '
            },
            "destroy": true,
            "responsive": true,
            "pageLength": 5,
            "bPaginate": false,
            "bFilter": false,
            "bInfo": false,
            "order": false, //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('sibanpem/ajax_list_kegiatan/')?>" + idProvinsi,
                "type": "POST",
                "error": function(xhr, error, thrown) {
                    alert('Maaf Data Tidak Lengkap, Tidak Bisa Ditampilkan');
                }
            },
            'columnDefs': [{
                    "targets": 2, // your case first column
                    "className": "text-right",
                    render: $.fn.dataTable.render.number('.', ',', 0, '')
                },
                {
                    "targets": 3,
                    "className": "text-right",
                    render: $.fn.dataTable.render.number('.', ',', 0, '')
                },
                {
                    "targets": 4,
                    "className": "text-right",
                    render: $.fn.dataTable.render.number('.', ',', 0, '')
                },
                {
                    "targets": 5,
                    "className": "text-right",
                    render: $.fn.dataTable.render.number('.', ',', 0, '')
                }
            ]
        });

        table2 = $('#tableakun').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "processing": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span>Memuat Data ...!</span> '
            },
            "destroy": true,
            "responsive": true,
            "pageLength": 5,
            "bPaginate": false,
            "bFilter": false,
            "bInfo": false,
            "order": false, //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('sibanpem/ajax_list_akun/')?>" + idProvinsi,
                "type": "POST",
                "error": function(xhr, error, thrown) {
                    alert('Maaf Data Tidak Lengkap, Tidak Bisa Ditampilkan');
                }
            },
            'columnDefs': [{
                    "targets": 2, // your case first column
                    "className": "text-right",
                    render: $.fn.dataTable.render.number('.', ',', 0, '')
                },
                {
                    "targets": 3,
                    "className": "text-right",
                    render: $.fn.dataTable.render.number('.', ',', 0, '')
                },
                {
                    "targets": 4,
                    "className": "text-right",
                    render: $.fn.dataTable.render.number('.', ',', 0, '')
                },
                {
                    "targets": 5,
                    "className": "text-right",
                    render: $.fn.dataTable.render.number('.', ',', 0, '')
                }
            ] //Set column definition initialisation properties
        });

        table3 = $('#table').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "processing": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span>Memuat Data ...!</span> '
            },
            "destroy": true,
            "responsive": true,
            "pageLength": 5,
            "order": [1], //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('sibanpem/ajax_list_kabupaten/')?>" + idProvinsi,
                "type": "POST",
                "error": function(xhr, error, thrown) {
                    alert('Maaf Data Tidak Lengkap, Tidak Bisa Ditampilkan');
                }
            },
            'columnDefs': [{
                    "targets": 2, // your case first column
                    "className": "text-right",
                    render: $.fn.dataTable.render.number('.', ',', 0, '')
                },
                {
                    "targets": 4,
                    "className": "text-right",
                    render: $.fn.dataTable.render.number('.', ',', 0, '')
                },
                {
                    "targets": 6,
                    "className": "text-right",
                    render: $.fn.dataTable.render.number('.', ',', 0, '')
                },
                {
                    "targets": 8,
                    "className": "text-right",
                    render: $.fn.dataTable.render.number('.', ',', 0, '')
                }
            ]
        });

        table4 = $('#table2021').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "processing": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span>Memuat Data ...!</span> '
            },
            "destroy": true,
            "responsive": true,
            "bPaginate": false,
            "bFilter": false,
            "bInfo": false,
            "order": false, //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('sibanpem/ajax_list_satker2021/')?>" + idProvinsi,
                "type": "POST",
                "error": function(xhr, error, thrown) {
                    alert('Maaf Data Tidak Lengkap, Tidak Bisa Ditampilkan');
                }
            },
            'columnDefs': [{
                "targets": 3,
                "className": "text-right",
                render: $.fn.dataTable.render.number('.', ',', 0, '')
            }]
        })
    });

    function view_detail_satker(kdSatker, kdProv, NmSatker) {
        $('#modal_satker_kab').modal('show'); // show bootstrap modal
        $('.modal-title').text('Data Bantuan Satker : ' + NmSatker); // Set Title to Bootstrap modal title
        //var select = document.getElementById('pilihtahun');
        //var option = select.options[select.selectedIndex];
        table = $('#tableSatkerKab').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "destroy": true,
            "responsive": true,
            "bFilter": false,
            "bInfo": false,
            "order": false,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span>Memuat Data ...!</span> '
            },
            "order": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('sibanpem/ajax_list_satker_kab/')?>" + kdSatker + "/" + kdProv,
                "type": "POST",
                "error": function(xhr, error, thrown) {
                    alert('Maaf Data Tidak Lengkap, Tidak Bisa Ditampilkan');
                }
            },
            'columnDefs': [{
                "targets": 2,
                "className": "text-right",
                render: $.fn.dataTable.render.number('.', ',', 0, '')
            }]
        })
    };
    </script>
    <?php $this->load->view('back/template/endbody'); ?>