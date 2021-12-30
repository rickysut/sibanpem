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
                                <h4 class="card-title m-b-0">TAMBAH BAST</h4>
                            </div>
                            <div class="card-body collapse show">
								<div class="form-body">
									<div class="row p-t-20">
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label class="control-label">Apakah BAST digunakan lebih dari satu penerima ?</label>
                                                <div class="switch">
													<label>Tidak<input type="checkbox"><span class="lever"></span>Ya</label>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group has-success">
                                                <label class="control-label">Nomor BAST</label>
                                                <input type="text" id="k_dipa" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-4">
                                            <div class="form-group has-success">
                                                <label class="control-label">Tanggal BAST</label>
												<input type="date" id="k_dipa_tgl" class="form-control" placeholder="">
                                            </div>
                                        </div>
										
                                        <!--/span-->
                                        <div class="col-md-4">
                                            <div class="form-group has-success">
                                                <label class="control-label">Nilai BAST</label>
												<input type="text" id="k_dipa_tgl" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="card">
											<div class="card-body">
												<h4 class="card-title">Dokumen BAST</h4>
												<label for="k_bast_dokumen">File yang diupload tidak boleh Lebih dari 2MB</label>
												<input type="file" id="k_bast_dokumen" class="dropify" />
											</div>
										</div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group has-success">
                                                <label class="control-label">Penerima Barang/Uang</label>
												<select id="penerima" class="form-control custom-select" data-placeholder="Pilih Penerima" tabindex="1">
															<option value="1">Dinas</option>
															<option value="2">Gapoktan/Poktan/Dll</option>
															<option value="3">BPTP</option>
												</select>
                                            </div>
                                        </div>
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
                                <h4 class="card-title m-b-0">HASIL BAST</h4>
                            </div>
                            <div class="card-body collapse show">
								<div class="table-responsive">
													<table id="tableBAST" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
													  <thead>
														<tr>
														  <th style="text-align: center">NO</th>
														  <th style="text-align: center">NOMOR BAST</th>
														  <th style="text-align: center">NILAI</th>
														  <th style="text-align: center">TANGGAL</th>
														  <th style="text-align: center">DOKUMEN</th>
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
	jQuery(document).ready(function () {
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
        });
    });
	
	var idkontrak ="1";
	tableBAST = $('#tableBAST').DataTable({ 
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


