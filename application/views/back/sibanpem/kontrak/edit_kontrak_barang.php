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
				<h3 class="text-themecolor">Tambah Kontrak Barang</h3>
			</div>
			<div class="col-md-7 align-self-center">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
					<li class="breadcrumb-item"><a href="<?php echo base_url('kontrak') ?>">Kontrak</a></li>
					<li class="breadcrumb-item active">Tambah Kontrak</li>
				</ol>
			</div>
		</div>
		<div class="container-fluid">
				<div class="row">
                    <div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								Data Kontrak
								<div class="card-actions">
									<a class="" data-action="collapse"><i class="ti-minus"></i></a>
									<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
								</div>
							</div>
							<div class="card-body collapse show">
								<div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Nomor Dipa</label>
                                                    <input type="text" id="k_dipa" class="form-control" placeholder="Nomor Dipa">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Tanggal Dipa</label>
													<input type="date" id="k_dipa_tgl" class="form-control" placeholder="mm/dd/yyyy">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Kode Kegiatan</label>
                                                    <?php echo form_dropdown('', $get_all_kegiatan, '', $k_kode_kegiatan) ?> 
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Kode - K R O</label>
                                                    <?php echo form_dropdown('', $get_all_kro, '', $kd_kro) ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Kode - RO</label>
                                                    <?php echo form_dropdown('', $get_all_ro, '', $kd_ro) ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Kode Akun</label>
                                                    <?php echo form_dropdown('', $get_all_akun, '', $kd_akun) ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
										<div class="row">
											<div class="col-lg-8 col-md-8">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Nomor Kontrak</label>
                                                    <input type="text" id="k_kontrak_nomor" class="form-control" placeholder="Nomor Kontrak">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Tanggal Kontrak</label>
													<input type="date" id="k_kontrak_tgl" class="form-control" placeholder="mm/dd/yyyy">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
										<div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Titik Bagi</label>
														<select id="titikbagi" class="form-control custom-select" data-placeholder="Pilih Titik Bagi" tabindex="1">
															<option value="1">Provinsi</option>
															<option value="2">Kabupaten</option>
															<option value="3">Kecamatan</option>
															<option value="4">Desa</option>
														</select>
                                                </div>
                                            </div>
											<div class="col-lg-6 col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Bantuan Untuk</label>
														<select id="penerima" class="form-control custom-select" data-placeholder="Pilih Penerima" tabindex="1">
															<option value="1">Dinas</option>
															<option value="2">Gapoktan/Poktan/Dll</option>
															<option value="3">BPTP</option>
														</select>
                                                    </div>
                                            </div>
										</div>
										<div class="row">
											<div class="col-md-5">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Kontrak ini menggunakan ongkir terpisah?</label>
                                                    <div class="switch">
														<label>Tidak<input type="checkbox"><span class="lever"></span>Ya</label>
													</div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-3">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Kontrak ini Swakelola?</label>
                                                    <div class="switch">
														<label>Tidak<input type="checkbox"><span class="lever"></span>Ya</label>
													</div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Kontrak ini Pembelian Langsung ?</label>
                                                    <div class="switch">
														<label>Tidak<input type="checkbox"><span class="lever"></span>Ya</label>
													</div>
                                                </div>
                                            </div>
										</div>			
                                    </div>
							</div>
							<div class="card-footer">
									<button type="submit" class="btn btn-success" data-addempid="" id="add-emp"> <i class="fa fa-check"></i> Simpan</button>
									<button type="reset" class="btn btn-inverse" data-dismiss="modal">Batal</button>
							</div>
						</div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								Upload Dokumen
								<div class="card-actions">
									<a class="" data-action="collapse"><i class="ti-minus"></i></a>
									<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
								</div>
							</div>
							<div class="card-body collapse show">
								<div class="row">
                                    <div class="col-lg-6 col-md-6">
												
										<div class="card">
											<div class="card-body">
												<h4 class="card-title">Dokumen Kontrak</h4>
												<label for="k_kontrak_dokumen">File yang diupload tidak boleh Lebih dari 2MB</label>
												<input type="file" id="k_kontrak_dokumen" class="dropify" />
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="card">
											<div class="card-body">
												<h4 class="card-title">Dokumen CPCL</h4>
												<label for="input-file-now-custom-1">File yang diupload tidak boleh Lebih dari 2MB</label>
												<input type="file" id="input-file-now2" class="dropify" />
											</div>
										</div>
									</div>
                                </div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
                    <div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								Nilai Kontrak
								<div class="card-actions">
									<a class="" data-action="collapse"><i class="ti-minus"></i></a>
									<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
								</div>
							</div>
							<div class="card-body collapse show">
								<div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Nilai Kontrak</label>
                                            <input type="text" id="k_kontrak_nilai" class="form-control">
                                        </div>
                                    </div>
                                </div>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
                    <div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								Data Vendor
								<div class="card-actions">
									<a class="" data-action="collapse"><i class="ti-minus"></i></a>
									<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
								</div>
							</div>
							<div class="card-body collapse show">
								<div class="row">
                                    <div class="col-lg-4 col-md-6">
										<div class="form-group">
											<label class="control-label">Vendor</label>
											<?php echo form_dropdown('', $get_all_vendor, '', $k_vendor_nama) ?>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="form-group">
											<label class="control-label">NPWP Vendor</label>
											<input type="text" name="k_vendor_npwp" id="k_vendor_npwp" class="form-control" placeholder="NPWP">
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
                                        <div class="form-group">
											<label class="control-label">Untuk Menambah Vendor</label>
											<a class="btn btn-block btn-outline-info" href="javascript:void(0)" id="tombolTambahSaprodi" title="Isi / Tambah Vendor" onclick="add_vendor()"><i class="mdi mdi-cash"></i> Tambah Vendor</a>
                                        </div>
									</div>
                                </div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
                    <div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								Pemesanan Barang
								<div class="card-actions">
									<a class="" data-action="collapse"><i class="ti-plus"></i></a>
									<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
								</div>
							</div>
							<div class="card-body collapse">
								<a class="pull-right btn btn-sm btn-rounded btn-info" href="javascript:void(0)" id="tombolTambahBarang" title="Isi / Tambah Barang" onclick="add_barang()"><i class="mdi mdi-cash"></i> Tambah Barang</a>
                                <h4 class="card-title">Pemesanan Barang</h4>
                                <h6 class="card-subtitle">Daftar Pemesanan Barang Derdasarkan Kontrak</h6>
                                <div class="form-body">
                                    <div class="row">
										<div class="col-12 m-t-30">
											<div class="card-deck">
												<?php
													foreach($dataBarang as $barang){ ?>
														<div class="card">
															<img class="card-img-top img-responsive" src="" alt="Card image cap">  <!-- file Gambar Barang -->
															<div class="card-body">
																<h4 class="card-title"> </h4> <!-- Nama Barang --> 
																<p class="card-text"> </p> <!-- Deskripsi Barang --> 
																<p class="card-text"><h5 class="text-muted"> </h5></p> <!-- Harga Barang --> 
															</div>
														</div>
												<?php } ?>
											</div>
										</div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
                    <div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								Penerima Barang
								<div class="card-actions">
									<a class="" data-action="collapse"><i class="ti-minus"></i></a>
									<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
								</div>
							</div>
							<div class="card-body collapse show">
								<a class="pull-right btn btn-sm btn-rounded btn-info" href="javascript:void(0)" id="tombolTambahPenerima" title="Isi / Tambah Penerima Barang" onclick="add_penerima()"><i class="mdi mdi-cash"></i> Tambah Penerima</a>
                                <h4 class="card-title">Data Penerima Barang</h4>
                                <h6 class="card-subtitle">Daftar Penerima Bantuan Barang Derdasarkan Kontrak</h6>
                                <div class="form-body">
                                    <div class="row">
										<div class="col-12 m-t-30">
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
								</div>
							</div>
						</div>
					</div>
				</div>
<?php
$this->load->view('back/sibanpem/kontrak/popup/vendor');
$this->load->view('back/sibanpem/kontrak/popup/add_nama_barang');
$this->load->view('back/sibanpem/kontrak/popup/add_penerima');
?>
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
		
		//$('.modal').on('hidden.bs.modal', function (e) {
		//	$('body').addClass('modal-open');
		//});
		
		$("#provinsi").change(function (){
			var myuri = $(this).val().split('|');
			var iduri = myuri[0];
			var url = "<?php echo site_url('wilayah/add_ajax_kab');?>/"+iduri;
			$('#kabupaten').load(url);
				return false;
		});
			
		$("#kabupaten").change(function (){
			var myuri = $(this).val().split('|');
			var iduri = myuri[0];
			var url = "<?php echo site_url('wilayah/add_ajax_kec');?>/"+iduri;
			$('#kecamatan').load(url);
			return false;
		});
			
		$("#kecamatan").change(function (){
			var url = "<?php echo site_url('wilayah/add_ajax_des');?>/"+$(this).val();
			$('#desa').load(url);
			return false;
		});
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
		
		$("#Alsintan").show();
    });
	
	$("#k_vendor_nama").change(function (){
		var myvendor = $(this).val().split('|');
		var npwpvendor = myvendor[0];
		var namavendor = myvendor[1];
		$('[id="k_vendor_npwp"]').val(npwpvendor);
    });
	
	function add_vendor()
	{
		save_method = 'add';
		$('#form-vendor')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string 
		$('[name="btnSaveVendor"]').attr('onclick','save_vendor()');
		$('#modal_form_vendor').modal('show'); // show bootstrap modal
		$('.modal-title').text('Tambah Vendor'); // Set Title to Bootstrap modal title
	}

	function edit_vendor(id)
	{
		save_method = 'update';
		$('#form-vendor')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string
		//Ajax Load data from ajax
		$.ajax({
			url : "<?php echo site_url('kontrak/ajax_edit_vendor')?>/" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{
				$('[name="id"]').val(data.id);
				$('[name="no_npwp"]').val(data.no_npwp);
				$('[name="nama_vendor"]').val(data.nama_vendor);
				$('[name="provinsi"]').val(data.provinsi);
				$('[name="kabupaten"]').val(data.kabupaten);
				$('[name="kecamatan"]').val(data.kecamatan);
				$('[name="desa"]').val(data.desa);
				$('[name="alamat"]').val(data.alamat2);
				$('[name="nama_direktur"]').val(data.nama_direktur);
				$('[name="nomor_kontak"]').val(data.nomor_kontak);
				$('[name="email"]').val(data.email);
				$('[name="file_npwp"]').val(data.file_npwp);
				$('#modal_form_vendor').modal('show'); // show bootstrap modal when complete loaded
				$('.modal-title').text('Edit Data Petani'); // Set title to Bootstrap modal title
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});
	}

	function save_vendor()
	{
		$('#btnSaveProdi').text('saving...'); //change button text
		$('#btnSaveProdi').attr('disabled',true); //set button disable 
		if(save_method == 'add') {
			url = "<?php echo site_url('kontrak/ajax_add_vendor')?>";
		} else {
			url = "<?php echo site_url('kontrak/ajax_update_vendor')?>";
		}
		// alert(url);
		// ajax adding data to database
		$.ajax({
			url : url,
			type: "POST",
			data: $('#form-vendor').serialize(),
			dataType: "JSON",
			success: function(data)
			{

				if(data.status) //if success close modal and reload ajax table
				{
					$('#modal_form_vendor').modal('hide');
				}
				else
				{
					for (var i = 0; i < data.inputerror.length; i++) 
					{
						$('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
						$('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
					}
				}
				$('#btnSaveVendor').text('save'); //change button text
				$('#btnSaveVendor').attr('disabled',false); //set button enable 
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error adding / update data');
				$('#btnSaveVendor').text('save'); //change button text
				$('#btnSaveVendor').attr('disabled',false); //set button enable 

			}
		});
	}

	function delete_vendor(id)
	{
		if(confirm('Are you sure delete this data?'))
		{
			// ajax delete data to database
			$.ajax({
				url : "<?php echo site_url('kontrak/ajax_delete_vendor')?>/"+id,
				type: "POST",
				dataType: "JSON",
				success: function(data)
				{
					//if success reload ajax table
					$('#modal_form').modal('hide');
					reload_table();
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					alert('Error deleting data');
				}
			});

		}
	}
	
	// ----- Barang ---
	function add_barang()
	{
		save_method = 'add';
		$('#form-data-barang')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string 
		$('[name="btnSaveBarang"]').attr('onclick','save_barang()');
		$('#modal_form_data_barang').modal('show'); // show bootstrap modal
		$('.modal-title').text('Tambah Barang'); // Set Title to Bootstrap modal title
	}

	function edit_barang(id)
	{
		save_method = 'update';
		$('#form-barang')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string
		//Ajax Load data from ajax
		$.ajax({
			url : "<?php echo site_url('kontrak/ajax_edit_barang')?>/" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{
				$('[name="id"]').val(data.id);
				$('[name="kategori_barang"]').val(data.kategori_barang);
				$('[name="nama_barang"]').val(data.nama_barang);
				$('[name="deskripsi"]').val(data.deskripsi);
				$('[name="spek_barang"]').val(data.spek_barang);
				$('[name="harga_satuan"]').val(data.harga_satuan);
				$('[name="satuan"]').val(data.satuan);
				$('[name="qty"]').val(data.qty);
				$('[name="photo_barang"]').val(data.photo_barang);
				$('#modal_form_barang').modal('show'); // show bootstrap modal when complete loaded
				$('.modal-title').text('Edit Data Petani'); // Set title to Bootstrap modal title
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});
	}

	function save_barang()
	{
		$('#btnSaveBarang').text('saving...'); //change button text
		$('#btnSaveBarang').attr('disabled',true); //set button disable 
		if(save_method == 'add') {
			url = "<?php echo site_url('kontrak/ajax_add_barang')?>";
		} else {
			url = "<?php echo site_url('kontrak/ajax_update_barang')?>";
		}
		// alert(url);
		// ajax adding data to database
		$.ajax({
			url : url,
			type: "POST",
			data: $('#form-barang').serialize(),
			dataType: "JSON",
			success: function(data)
			{

				if(data.status) //if success close modal and reload ajax table
				{
					$('#modal_form_barang').modal('hide');
				}
				else
				{
					for (var i = 0; i < data.inputerror.length; i++) 
					{
						$('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
						$('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
					}
				}
				$('#btnSaveBarang').text('save'); //change button text
				$('#btnSaveBarang').attr('disabled',false); //set button enable 
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error adding / update data');
				$('#btnSaveBarang').text('save'); //change button text
				$('#btnSaveBarang').attr('disabled',false); //set button enable 

			}
		});
	}

	function delete_barang(id)
	{
		if(confirm('Are you sure delete this data?'))
		{
			// ajax delete data to database
			$.ajax({
				url : "<?php echo site_url('kontrak/ajax_delete_barang')?>/"+id,
				type: "POST",
				dataType: "JSON",
				success: function(data)
				{
					//if success reload ajax table
					$('#modal_form_barang').modal('hide');
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					alert('Error deleting data');
				}
			});

		}
	}
	// -- end barang ---
	$('#kategori_barang').on('change',function(){
		if( $(this).val()==1){
			$("#Alsintan").show();
			$("#Benih").hide();
			$("#Pupuk").hide();
			$("#PengendaliOPT").hide();
			$("#PengendaliDPI").hide();
			$("#Perlengkapan").hide();
			$("#Infrastruktur").hide();
		}
		else if( $(this).val()==2){
			$("#Alsintan").hide();
			$("#Benih").show();
			$("#Pupuk").hide();
			$("#PengendaliOPT").hide();
			$("#PengendaliDPI").hide();
			$("#Perlengkapan").hide();
			$("#Infrastruktur").hide();
		}
		else if( $(this).val()==3){
			$("#Alsintan").hide();
			$("#Benih").hide();
			$("#Pupuk").show();
			$("#PengendaliOPT").hide();
			$("#PengendaliDPI").hide();
			$("#Perlengkapan").hide();
			$("#Infrastruktur").hide();
		}
		else if( $(this).val()==4){
			$("#Alsintan").hide();
			$("#Benih").hide();
			$("#Pupuk").hide();
			$("#PengendaliOPT").hide();
			$("#PengendaliDPI").show();
			$("#Perlengkapan").hide();
			$("#Infrastruktur").hide();
		}
		else if( $(this).val()==5){
			$("#Alsintan").hide();
			$("#Benih").hide();
			$("#Pupuk").hide();
			$("#PengendaliOPT").show();
			$("#PengendaliDPI").hide();
			$("#Perlengkapan").hide();
			$("#Infrastruktur").hide();
		}
		else if( $(this).val()==6){
			$("#Alsintan").hide();
			$("#Benih").hide();
			$("#Pupuk").hide();
			$("#PengendaliOPT").hide();
			$("#PengendaliDPI").hide();
			$("#Perlengkapan").show();
			$("#Infrastruktur").hide();
		}
		else{
			$("#Alsintan").hide();
			$("#Benih").hide();
			$("#Pupuk").hide();
			$("#PengendaliOPT").hide();
			$("#PengendaliDPI").hide();
			$("#Perlengkapan").hide();
			$("#Infrastruktur").show();
		}
	});
	
	
	//add penerima
	
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
		
	function add_penerima()
	{
		save_method = 'add';
		$('#form-penerima-barang')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string 
		$('[name="no_kontrak"]').val();
		$('[name="btnSavePenerima"]').attr('onclick','save_penerima()');
		$('#modal_form_penerima_barang').modal('show'); // show bootstrap modal
		$('.modal-title').text('Tambah Penerima'); // Set Title to Bootstrap modal title
	}

	function edit_penerima(id)
	{
		save_method = 'update';
		$('#form-penerima-barang')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string
		//Ajax Load data from ajax
		$.ajax({
			url : "<?php echo site_url('kontrak/ajax_edit_penerima')?>/" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{
				$('[name="id_saprodi"]').val(data.id_saprodi);
				$('[name="id_cpcl"]').val(data.id_cpcl);
				$('[name="id_poktan"]').val(data.id_poktan);
				$('[name="komponen"]').val(data.komponen);
				$('[name="qty"]').val(data.qty);
				$('[name="satuan"]').val(data.satuan);
				$('[name="harga"]').val(data.harga);
				TotalHarga = data.qty * data.harga;
				$('[name="total_harga"]').val(TotalHarga);
				$('#modal_form_penerima_barang').modal('show'); // show bootstrap modal when complete loaded
				$('.modal-title').text('Edit Data Petani'); // Set title to Bootstrap modal title
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		})
	}

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

	function save_penerima()
	{
		$('#btnSavePenerima').text('saving...'); //change button text
		$('#btnSavePenerima').attr('disabled',true); //set button disable 
		if(save_method == 'add') {
			url = "<?php echo site_url('kontrak/ajax_add_penerima')?>";
		} else {
			url = "<?php echo site_url('kontrak/ajax_update_penerima')?>";
		}
		// alert(url);
		// ajax adding data to database
		$.ajax({
			url : url,
			type: "POST",
			data: $('#form-penerima-barang').serialize(),
			dataType: "JSON",
			success: function(data)
			{

				if(data.status) //if success close modal and reload ajax table
				{
					$('#modal_form_penerima_barang').modal('hide');
					reload_table_penerima();
				}
				else
				{
					for (var i = 0; i < data.inputerror.length; i++) 
					{
						$('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
						$('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
					}
				}
				$('#btnSavePenerima').text('save'); //change button text
				$('#btnSavePenerima').attr('disabled',false); //set button enable 
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error adding / update data');
				$('#btnSavePenerima').text('save'); //change button text
				$('#btnSavePenerima').attr('disabled',false); //set button enable 

			}
		})
	}

	function delete_penerima(id)
	{
		if(confirm('Are you sure delete this data?'))
		{
			// ajax delete data to database
			$.ajax({
				url : "<?php echo site_url('kontrak/ajax_delete_penerima')?>/"+id,
				type: "POST",
				dataType: "JSON",
				success: function(data)
				{
					//if success reload ajax table
					$('#modal_form_penerima_barang').modal('hide');
					reload_table();
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					alert('Error deleting data');
				}
			});

		}
	}
</script>
<?php $this->load->view('back/template/endbody'); ?>


