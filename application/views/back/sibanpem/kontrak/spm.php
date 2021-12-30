<?php $this->load->view('back/template/meta'); ?>
<!-- ============================================================== -->
<!-- Add Style or custom CSS Here -->
<!-- ============================================================== -->
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/dropify/dist/css/dropify.min.css">
<?php $this->load->view('back/template/header'); ?>
<?php $this->load->view('back/template/sidebar'); ?>
	<div class="page-wrapper">
		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h3 class="text-themecolor">DETAIL KONTRAK</h3>
			</div>
			<div class="col-md-7 align-self-center">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
					<li class="breadcrumb-item"><a href="<?php echo base_url('kontrak') ?>">Kontrak</a></li>
					<li class="breadcrumb-item active">Detail Kontrak</li>
				</ol>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
                    <!-- Column -->
                    <div class="col-lg-2 col-md-4">
                        <a href="<?php echo base_url('bast/detail') ?>" type="button" class="btn btn-rounded btn-block btn-outline-success">DATA KONTRAK</a>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-2 col-md-4">
                        <a href="<?php echo base_url('bast/penyaluran') ?>" type="button" class="btn btn-rounded btn-block btn-outline-success">PENYALURAN</a>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-2 col-md-4">
                        <a href="<?php echo base_url('bast/bast') ?>" type="button" class="btn btn-rounded btn-block btn-outline-success">BAST</a>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-2 col-md-4">
                        <a href="<?php echo base_url('bast/spm') ?>" type="button" class="btn btn-rounded btn-block btn-outline-success">SPM</a>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-2 col-md-4">
                        <a href="<?php echo base_url('bast/catsatker') ?>" type="button" class="btn btn-rounded btn-block btn-outline-success">CATATAN SATKER</a>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-2 col-md-4">
                        <a href="<?php echo base_url('bast/akreview') ?>" type="button" class="btn btn-rounded btn-block btn-outline-success">AKTIVITAS REVIEW</a>
                    </div>
            </div>
			<div class="row">
				<hr>
			</div>
			<div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="card">
							<div class="card-header">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">Detail Kontrak</h4>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-wrap">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <!-- Column -->
                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">TAMBAH SPM</h4>
                            </div>
                            <div class="card-body collapse show">
								<div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group has-success">
                                                <label class="control-label">Nomor SPM</label>
                                                <input type="text" id="k_dipa" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-4">
                                            <div class="form-group has-success">
                                                <label class="control-label">Tanggal SPM</label>
												<input type="date" id="k_dipa_tgl" class="form-control" placeholder="">
                                            </div>
                                        </div>
										
                                        <!--/span-->
                                        <div class="col-md-4">
                                            <div class="form-group has-success">
                                                <label class="control-label">Nilai SPM</label>
												<input type="text" id="k_dipa_tgl" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group has-success">
                                                <label class="control-label">Nomor SP2D</label>
                                                <input type="text" id="k_dipa" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-4">
                                            <div class="form-group has-success">
                                                <label class="control-label">Tanggal SP2D</label>
												<input type="date" id="k_dipa_tgl" class="form-control" placeholder="">
                                            </div>
                                        </div>
										
                                        <!--/span-->
                                        <div class="col-md-4">
                                            <div class="form-group has-success">
                                                <label class="control-label">Nilai SP2D</label>
												<input type="text" id="k_dipa_tgl" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Kode Kegiatan</label>
                                                    <?php echo form_dropdown('', $get_all_kegiatan, '', $k_kode_kegiatan) ?> 
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Kode - K R O</label>
                                                    <?php echo form_dropdown('', $get_all_kro, '', $kd_kro) ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Kode - RO</label>
                                                    <?php echo form_dropdown('', $get_all_ro, '', $kd_ro) ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Kode Akun</label>
                                                    <?php echo form_dropdown('', $get_all_akun, '', $kd_akun) ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
								</div>
                            </div>
							<div class="card-footer">
								<div class="form-actions">
									<button type="submit" class="btn btn-success" data-addempid="" id="add-emp"> <i class="fa fa-check"></i> Simpan</button>
									<button type="reset" class="btn btn-inverse" data-dismiss="modal">Batal</button>
								</div>
							</div>
                        </div>
						<!-- Column -->
                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">CATATAN</h4>
                            </div>
                            <div class="card-body collapse show">
								<div class="table-responsive">
													<table id="tablecatatan" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
													  <thead>
														<tr>
														  <th style="text-align: center">TANGGAL</th>
														  <th style="text-align: center">CATATAN</th>
														  <th style="text-align: center">PEMBUAT</th>
														  <th style="text-align: center">AKSI</th>
														</tr>
													  </thead>
													  <tbody>
														
													  </tbody>
													  <tfoot>
															<tr>
																<th colspan="5" style="text-align:right">Total:</th>
																<th></th>
															</tr>
														</tfoot>
													</table>
												</div>
                            </div>
                        </div>
                    </div>
                </div>
		</div>
		<!--- batas Fluid -->
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
	var idkontrak ="1";
	tablespm = $('#tablespm').DataTable({ 
			"Retrieve": true,
			"destroy": true,
			"searching": false,
			"processing": true, //Feature control the processing indicator.
			"serverSide": true, //Feature control DataTables' server-side processing mode.

				// Load data for the table's content from an Ajax source
			"ajax": {
				"url": "<?php echo site_url('kontrak/ajax_list_penerima/'); ?>"+idkontrak,
				"type": "POST",
				"cache":false,
			},

				//Set column definition initialisation properties.
			"columnDefs": [
				{ 
					"targets": [ -1 ], //last column
					"orderable": false, //set not orderable
				},
				{
					"targets": 0, // your case first column
					"className": "text-center"
				},
				{
					"targets": 1, // your case first column
					"className": "text-left"
				},
				{
					"targets": 2, // your case first column
					"className": "text-left"
				},
				{
					"targets": 3, // your case first column
					"className": "text-left"
				}
			],
		});

	function formatRupiah(angka, prefix){
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
		split   		= number_string.split(','),
		sisa     		= split[0].length % 3,
		rupiah     		= split[0].substr(0, sisa),
		ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
	 
				// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if(ribuan){
			separator = sisa ? '.' : '';
			upiah += separator + ribuan.join('.');
		}
	 
		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}

	function reload_table_penerima()
	{
		tablepenerima.ajax.reload(null,false); //reload datatable ajax 
	}
</script>
<?php $this->load->view('back/template/endbody'); ?>


