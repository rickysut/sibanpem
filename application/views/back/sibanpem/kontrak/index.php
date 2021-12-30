<?php $this->load->view('back/template/meta'); ?>
<style>
.numericCol {
    float: right;
}
</style>
<style>
.dataTables_filter {
    display: none;
}

.dataTables_wrapper {
    font-family: "Poppins", sans-serif;
    font-size: 14px;
    position: relative;
    clear: both;
    *zoom: 1;
    zoom: 1;
}

.dataTables_wrapper .dt-buttons {
    float: right;
    text-align: center;
    font-size: 12px;
}

.dataTables_paginate {
    font-size: 10px;
    margin-bottom: 5px;
}

.dataTables_length {
    font-size: 12px;
    margin-bottom: 5px;
}

.dataTables_info {
    font-size: 12px;
}
</style>
<!-- ============================================================== -->
<!-- Add Style or custom CSS Here -->
<!-- ============================================================== -->
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/dropify/dist/css/dropify.min.css">
<?php $this->load->view('back/template/header'); ?>
<?php $this->load->view('back/template/sidebar'); ?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"><?php echo $page_title ?></h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    SIBANPEM</li>
                <li class="breadcrumb-item active"><?php echo $page_title ?></li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <div class="card">
                    <div class="card-body">
                        <div class="row button-group">
                            <div class="col-md-4 col-sm-4">
                                <!-- <a href="javascript:void(0);" data-toggle="modal" data-target="#add-employee" type="button" class="btn btn-block btn-outline-info"><i class="mdi mdi-cash-multiple"></i> Bantuan Barang</a> -->
                                <a class="btn btn-block btn-outline-info" href="javascript:void(0)"
                                    id="tomboladd-employee" title="Isi / Tambah Data Bantuan Barang"
                                    onclick="add_employee()"><i class="mdi mdi-cash-multiple"></i> Bantuan Barang</a>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <!-- <a href="javascript:void(0);" data-toggle="modal" data-target="#add-employee-uang" type="button" class="btn btn-block btn-outline-info"><i class="mdi mdi-amplifier"></i> Bantuan Uang</a> -->
                                <a class="btn btn-block btn-outline-info" href="javascript:void(0)"
                                    id="tomboladd-employee-uang" title="Isi / Tambah Data Bantuan Uang"
                                    onclick="add_employee_uang()"><i class="mdi mdi-amplifier"></i> Bantuan Uang</a>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <a href="kontrak/create_tunda" class="btn btn-block btn-outline-info"><i
                                        class="mdi mdi-cash"></i> Tunda Bayar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <button class="pull-right btn btn-sm btn-rounded btn-info" data-toggle="collapse"
                            data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i
                                class="ti-search"></i></button>
                        <h4 class="card-title">Daftar Bantuan</h4>
                        <h6 class="card-subtitle">Daftar Seluruh Bantuan Derdasarkan Kontrak</h6>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" class="small form-control global_filter"
                                                        id="global_filter" placeholder="Keyword..">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-3">
                                                <div class="form-group">
                                                    <select id="name_filter" class="form-control"
                                                        data-custom_column="1">
                                                        <option value="Barang">Barang</option>
                                                        <option value="Uang">Uang</option>
                                                        <option value="Tunda Bayar">Tunda Bayar</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-sm-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control column_filter"
                                                        id="email_filter" data-custom_column="2"
                                                        placeholder="Nomor Kontrak">
                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-sm-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control column_filter"
                                                        id="contact_filter" data-custom_column="3"
                                                        placeholder="Nama Satker">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-3">
                                                <div class="form-group">
                                                    <select id="address_filter" class="form-control"
                                                        data-custom_column="4">
                                                        <option value="null">Belum Diajukan</option>
                                                        <option value="menunggu">Menunggu</option>
                                                        <option value="perbaikan">Perbaikan</option>
                                                        <option value="review">Review</option>
                                                        <option value="sesuai">Sesuai</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive m-t-40">
                            <table id="render-datatable"
                                class="display nowrap table table-hover table-striped table-bordered" cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Type</th>
                                        <th>Nomor SK CPCL</th>
                                        <th>Nomor Kontrak</th>
                                        <th>Tgl Kontrak</th>
                                        <th>Kegiatan</th>
                                        <th>Kd Akun</th>
                                        <th>Nama Eselon</th>
                                        <th>Nama Satker</th>
                                        <th>Nilai Kontrak</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>Type</th>
                                        <th>Nomor SK CPCL</th>
                                        <th>Nomor Kontrak</th>
                                        <th>Tgl Kontrak</th>
                                        <th>Kegiatan</th>
                                        <th>Kd Akun</th>
                                        <th>Nama Eselon</th>
                                        <th>Nama Satker</th>
                                        <th>Nilai Kontrak</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
$this->load->view('back/sibanpem/kontrak/popup/display');
$this->load->view('back/sibanpem/kontrak/popup/edit');
$this->load->view('back/sibanpem/kontrak/popup/add');
$this->load->view('back/sibanpem/kontrak/popup/add_uang');
$this->load->view('back/sibanpem/kontrak/popup/delete');
$this->load->view('back/sibanpem/kontrak/popup/vendor');
$this->load->view('back/sibanpem/kontrak/popup/add_nama_barang');
$this->load->view('back/sibanpem/kontrak/popup/add_penerima');
?>

    </div>

    <?php $this->load->view('back/template/footer'); ?>
</div>
</div>
<?php $this->load->view('back/template/endscript'); ?>
<script src="<?php echo base_url('assets/') ?>plugins/dropify/dist/js/dropify.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {

    var dt = jQuery('#render-datatable').dataTable({
        "paging": true,
        "processing": false,
        "serverSide": true,
        "order": [],
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url() ?>kontrak/getAllData",
            "type": "POST",
            "data": function(data) {
                data.k_type = $('#name_filter').val();
                data.k_nomor_kontrak = $('#email_filter').val();
                data.k_satker_nama = $('#contact_filter').val();
                data.k_kontrak_status_review = $('#address_filter').val();
            }
        },
        dom: 'lBfrtip',
        buttons: [{
                extend: 'excel',
                text: '<i class="far fa-file-excel" aria-hidden="true"></i> Excel Export',
                filename: 'members',
                title: '',
                exportOptions: {
                    modifier: {
                        search: 'applied',
                        order: 'applied',
                        page: 'current'
                    },
                    columns: [1, 2, 3]
                }
            },
            {
                extend: 'csv',
                text: '<i class="far fa-csv"></i> Export CSV',
                filename: 'members',
                title: '',
                exportOptions: {
                    modifier: {
                        search: 'applied',
                        order: 'applied',
                        page: 'current'
                    },
                    columns: [1, 2, 3, 4, 5]
                }
            },
            {
                extend: 'pdf',
                text: '<i class="far fa-file-pdf" aria-hidden="true"></i> PDF',
                filename: 'members',
                title: '',
                exportOptions: {
                    modifier: {
                        search: 'applied',
                        order: 'applied',
                        page: 'current'
                    },
                    columns: [1, 2, 3, 4, 5]
                }
            },
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],

        "columns": [{
                "bVisible": false,
                "targets": [0]
            },
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            {
                "className": "text-center",
                "orderable": false,


                // render action button
                mRender: function(data, type, row) {
                    var bindHtml = '';
                    bindHtml +=
                        '<a data-toggle="modal" data-target="#display-employee" href="javascript:void(0);" title="View" class="display-emp ml-1 btn-ext-small btn btn-sm btn-info"  data-geteid="' +
                        row[0] + '"><i class="mdi mdi-eye"></i></a>';
                    bindHtml +=
                        '<a data-toggle="modal" data-target="#update-employee" href="javascript:void(0);" title="Edit" class="update-emp-details ml-1 btn-ext-small btn btn-sm btn-primary"  data-geteid="' +
                        row[0] + '"><i class="mdi mdi-pencil"></i></a>';
                    bindHtml +=
                        '<a data-toggle="modal" data-target="#delete-employee" href="javascript:void(0);" title="Delete" class="delete-em-details ml-1 btn-ext-small btn btn-sm btn-danger" data-geteid="' +
                        row[0] + '"><i class="mdi mdi-delete"></i></a>';
                    return bindHtml;
                }
            }
        ],
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
            $(nRow).attr('id', aData[0]);
        }
    });

    // define method global search
    function filterGlobal(v) {
        jQuery('#render-datatable').DataTable().search(
            v,
            false,
            false
        ).draw();
    }

    // filter keyword
    jQuery('input.global_filter').on('keyup click', function() {
        var v = jQuery(this).val();
        filterGlobal(v);
    });

    jQuery('input.column_filter').on('keyup click', function() {
        jQuery('#render-datatable').DataTable().ajax.reload();
    });
});

function add_employee() {
    //$('#add-employee-form')[0].reset(); // reset form on modals
    //$('.form-group').removeClass('has-error'); // clear error class
    //$('.help-block').empty(); // clear error string 
    //$('#add-employee').modal('show'); // show bootstrap modal
    var href = "<?php echo site_url('kontrak/create_barang')?>";
    window.location = href;
}

function add_employee_uang() {
    //$('#add-employee-form-uang')[0].reset(); // reset form on modals
    //$('.form-group').removeClass('has-error'); // clear error class
    //$('.help-block').empty(); // clear error string 
    //$('#add-employee-uang').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Formulir Entry Data Bantuan Uang');
    var href = "<?php echo site_url('kontrak/create_uang')?>";
    window.location = href;
}

function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
        separator = sisa ? '.' : '';
        upiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}
</script>
<?php $this->load->view('back/template/endbody'); ?>