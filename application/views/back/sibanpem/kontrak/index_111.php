<?php $this->load->view('back/template/meta'); ?>
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
			<div class="row page-titles m-b-0">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Entry Bantuan</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Sibanpem</a></li>
                        <li class="breadcrumb-item active">Entry</li>
                    </ol>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="container-fluid">
				<div class="row">
					<div class="col-12 m-t-30 align-self-center">
						<div class="row button-group">
							<div class="col-md-3 col-sm-4">
								<a href="javascript:void(0);" data-toggle="modal" data-target="#add-employee" type="button" class="btn btn-block btn-outline-info"><i class="mdi mdi-cash-multiple"></i> Bantuan Barang</a>
							</div>
							<div class="col-md-3 col-sm-4">
								<a href="javascript:void(0);" data-toggle="modal" data-target="#add-employee-uang" type="button" class="btn btn-block btn-outline-info"><i class="mdi mdi-amplifier"></i> Bantuan Uang</a>
							</div>
							<div class="col-md-3 col-sm-4">
								<button type="button" class="btn btn-block btn-outline-info"><i class="mdi mdi-cash"></i> Tunda Bayar</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 m-t-30">
						<div class="card">
							<div class="card-body">
								<button class="pull-right btn btn-sm btn-rounded btn-info" data-toggle="collapse" data-target="#collapseExample"  aria-expanded="false" aria-controls="collapseExample"><i class="ti-search"></i></button>
								<h4 class="card-title">Daftar Bantuan</h4>
								<h6 class="card-subtitle">Daftar Seluruh Bantuan Derdasarkan Kontrak</h6>
								<div class="collapse" id="collapseExample">
									<div class="card card-body">
										<div class="row">
											<div class="col-lg-12">
												<div class="row">
													<div class="col-lg-12 col-sm-12">
														<div class="form-group">                       
															<input type="text" class="small form-control global_filter" id="global_filter" placeholder="Keyword..">                                       
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-3 col-sm-3">
														<div class="form-group">                        
															<input type="text" class="form-control column_filter" id="name_filter" data-custom_column="1" placeholder="Name">
														</div>
													</div>
													<div class="col-lg-3 col-sm-3">
														<div class="form-group">                        
															<input type="text" class="form-control column_filter" id="email_filter" data-custom_column="2" placeholder="Email">
														</div>
													</div>
													<div class="col-lg-3 col-sm-3">
														<div class="form-group">                        
															<input type="text" class="form-control column_filter" id="contact_filter" data-custom_column="3" placeholder="Contact">
														</div>
													</div>
													<div class="col-lg-3 col-sm-3">
														<div class="form-group">                        
															<input type="text" class="form-control column_filter" id="address_filter" data-custom_column="3" placeholder="Address">
														</div>
													</div>
												</div>                
											</div>
										</div>
									</div>
								</div>
								<div class="table-responsive m-t-40">
									<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>id</th>
												<th>Type</th>
												<th>Nomor Kontrak</th>
												<th>Kd Kegiatan</th>
												<th>Kd Akun</th>
												<th>Kd Output</th>
												<th>Nama Eselon</th>
												<th>Nama Satker</th>
												<th>Nilai Kontrak</th>
												<th>Status</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>id</th>
												<th>Type</th>
												<th>Nomor Kontrak</th>
												<th>Kd Kegiatan</th>
												<th>Kd Akun</th>
												<th>Kd Output</th>
												<th>Nama Eselon</th>
												<th>Nama Satker</th>
												<th>Nilai Kontrak</th>
												<th>Status</th>
											</tr>
										</tfoot>
										<tbody>
												
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php $this->load->view('back/template/footer'); ?>
<?php
$this->load->view('back/sibanpem/kontrak/popup/display');
$this->load->view('back/sibanpem/kontrak/popup/edit');
$this->load->view('back/sibanpem/kontrak/popup/add');
$this->load->view('back/sibanpem/kontrak/popup/add_uang');
$this->load->view('back/sibanpem/kontrak/popup/delete');
?>
<?php $this->load->view('back/template/endscript'); ?>
<script src="<?php echo base_url('assets/') ?>plugins/dropify/dist/js/dropify.min.js"></script>
<script>
    $(document).ready(function() {
		$("#provinsi").change(function (){
		var myuri = $(this).val().split('|');
		var iduri = myuri[0];
        var url = "<?php echo site_url('wilayah/add_ajax_kab');?>/"+iduri;
        $('#kabupaten').load(url);
            return false;
    })
			
	$("#kabupaten").change(function (){
		var myuri = $(this).val().split('|');
		var iduri = myuri[0];
        var url = "<?php echo site_url('wilayah/add_ajax_kec');?>/"+iduri;
        $('#kecamatan').load(url);
        return false;
    })
			
	$("#kecamatan").change(function (){
        var url = "<?php echo site_url('wilayah/add_ajax_des');?>/"+$(this).val();
        $('#desa').load(url);
        return false;
    })
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
<?php $this->load->view('back/template/endbody'); ?>


