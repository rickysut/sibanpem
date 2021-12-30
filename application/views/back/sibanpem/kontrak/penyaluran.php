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
                                <h4 class="card-title m-b-0">Rincian Penerima Bantuan</h4>
                            </div>
                            <div class="card-body collapse show">
								<div class="card-deck">
												<div class="table-responsive">
													<table id="tablepenerima" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
													  <thead>
														<tr>
														  <th style="text-align: center">NO</th>
														  <th style="text-align: center">NIK</th>
														  <th style="text-align: center">NAMA LENGKAP</th>
														  <th style="text-align: center">NAMA_BARANG</th>
														  <th style="text-align: center">DESKRIPSI</th>
														  <th style="text-align: center">QTY</th>
														  <th style="text-align: center">JUMLAH UANG</th>
														  <th style="text-align: center">ACTION</th>
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
						<!-- Column -->
                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                                </div>
                                <h4 class="card-title m-b-0">Monitoring Penerima Bantuan</h4>
                            </div>
                            <div class="card-body collapse show">
								<div class="card-deck">
												<div class="table-responsive">
													<table id="tablemonitor" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
													  <thead>
														<tr>
														  <th style="text-align: center">NO</th>
														  <th style="text-align: center">NIK</th>
														  <th style="text-align: center">NAMA LENGKAP</th>
														  <th style="text-align: center">NAMA_BARANG</th>
														  <th style="text-align: center">DESKRIPSI</th>
														  <th style="text-align: center">QTY</th>
														  <th style="text-align: center">JUMLAH UANG</th>
														  <th style="text-align: center">ACTION</th>
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
	tablepenerima = $('#tablepenerima').DataTable({ 
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
				},
				{
					"targets": 4, // your case first column
					"className": "text-left"
				},
				{
					"targets": 5,
					"className": "text-right"
				},
				{
					"targets": 6,
					"className": "text-right"
				},
				{
					"targets": 7,
					"className": "text-center"
				}
			],
			"footerCallback": function ( row, data, start, end, display ) {
				var api = this.api(), data;
		 
					// Remove the formatting to get integer data for summation
				var intVal = function ( i ) {
					return typeof i === 'string' ?
						i.replace(/[\$,]/g, '')*1 :
						typeof i === 'number' ?
							i : 0;
				};
		 
				// Total over all pages
				total = api
					.column(6)
					.data()
					.reduce( function (a, b) {
						return intVal(a) + intVal(b);
					}, 0 );
		 
				// Total over this page
				pageTotal = api
					.column(6, { page: 'current'} )
					.data()
					.reduce( function (a, b) {
						return intVal(a) + intVal(b);
					}, 0 );
		 
				// Update footer
				$( api.column(1).footer() ).html(
					'Total halaman ini : Rp. '+pageTotal +' ( Total Semua : Rp. '+ total +')'
				);
			},
		});
		
	tablepenerima2 = $('#tablemonitor').DataTable({ 
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
				},
				{
					"targets": 4, // your case first column
					"className": "text-left"
				},
				{
					"targets": 5,
					"className": "text-right"
				},
				{
					"targets": 6,
					"className": "text-right"
				},
				{
					"targets": 7,
					"className": "text-center"
				}
			],
			"footerCallback": function ( row, data, start, end, display ) {
				var api = this.api(), data;
		 
					// Remove the formatting to get integer data for summation
				var intVal = function ( i ) {
					return typeof i === 'string' ?
						i.replace(/[\$,]/g, '')*1 :
						typeof i === 'number' ?
							i : 0;
				};
		 
				// Total over all pages
				total = api
					.column(6)
					.data()
					.reduce( function (a, b) {
						return intVal(a) + intVal(b);
					}, 0 );
		 
				// Total over this page
				pageTotal = api
					.column(6, { page: 'current'} )
					.data()
					.reduce( function (a, b) {
						return intVal(a) + intVal(b);
					}, 0 );
		 
				// Update footer
				$( api.column(1).footer() ).html(
					'Total halaman ini : Rp. '+pageTotal +' ( Total Semua : Rp. '+ total +')'
				);
			},
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


