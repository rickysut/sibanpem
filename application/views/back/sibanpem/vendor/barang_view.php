<?php $this->load->view('back/template/meta'); ?>
<!-- ============================================================== -->
<!-- Add Style or custom CSS Here -->
<!-- ============================================================== -->
<style type="text/css">
   #dt.dataTable.no-footer{
      border-bottom: unset;
    }
    #dt tbody td {
        display: block;
        border: unset;
    }
    #dt>tbody>tr>td{
      border-top: unset;
    }
  </style>
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/dropify/dist/css/dropify.min.css">
<?php $this->load->view('back/template/header'); ?>
<?php $this->load->view('back/template/sidebar'); ?>
<div class="page-wrapper">
	<div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Add, Edit dan Delete Barang</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Tambah Barang</li>
            </ol>
        </div>
    </div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
							<div class="card-header">
								<button class="btn btn-success btn-sm" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Tambah Barang</button>
								<button class="btn btn-default btn-sm" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Refresh Data</button>
								<div class="card-actions">
									<a class="" data-action="collapse"><i class="ti-minus"></i></a>
									<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
								</div>
							</div>
							<div class="card-body collapse show">
                                <div class="table-responsive m-t-40">
                                    <table id="table" class="table w-100">
                                        <thead>
											<tr>
												<th scope="col">Kategori</th>
												<th scope="col">Nama Barang</th>
												<th scope="col">Deskripsi</th>
												<th scope="col">Spesifikasi</th>
												<th scope="col">Harga Satuan</th>
												<th scope="col">Qty</th>
												<th scope="col">Photo Barang</th>
												<th scope="col">Action</th>
											</tr>
										</thead> 
										<tbody> 
										</tbody> 
                                    </table>
                                </div>
                            </div>
                        </div>
				</div>
			</div>
		
		</div>
		<!-- modal Form -->
		<div class="modal fade rotate" id="modal_form" style="display:none;">
			<div class="modal-dialog modal-lg"> 
					<div class="modal-content panel panel-primary">
						<div class="modal-header panel-heading">
							<h4 class="modal-title -remove-title">Tambah Barang</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body form">
							<form action="#" id="form" class="form-horizontal">
								<input type="hidden" value="" name="id"/> 
								<div class="row">
									<div class="col-lg-12">
												<div class="form-body">
													<div class="row p-t-20">
														<div class="col-md-6">
															<div class="form-group has-success">
																<label class="control-label">Kategori Barang</label>
																<select name="kategori_barang" id="kategori_barang" class="form-control input-emp-kategori_barang" data-placeholder="Pilih Kategori Barang">
																	<option value="1">Alsintan</option>
																	<option value="2">Benih</option>
																	<option value="3">Pupuk</option>
																	<option value="4">Pengendali DPI</option>
																	<option value="5">Pengendali OPT</option>
																	<option value="6">Perlengkapan</option>
																	<option value="7">Sarana/Prasarana</option>
																</select>
															</div>
														</div>
														<!--/span-->
														<div class="col-md-6">
															<div class="form-group has-success">
																<label class="control-label">Nama Barang</label>
																<input type="text" name="nama_barang" id="nama_barang" class="form-control input-emp-nama_barang" placeholder="ketik nama barang">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12 col-md-12">
															<div class="card" id="Alsintan" style="display:none;">
																<div class="row">
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Merk</label>
																			<input type="text" name="merk_barang" id="merk_barang" class="form-control input-emp-merk_barang" placeholder="sebutkan nama merk/pabrikan barang">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Type/Model</label>
																			<input type="text" name="type_barang" id="type_barang" class="form-control input-emp-type_barang" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Jenis Alat/Mesin</label>
																			<input type="text" name="jenis_barang" id="jenis_barang" class="form-control input-emp-jenis_barang" placeholder="">
																		</div>
																	</div>
																<!--/span-->
																</div>
																<div class="row">
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Dimensi</label>
																			<input type="text" name="dimensi_barang" id="dimensi_barang" class="form-control input-emp-dimensi_barang" placeholder="ukuran barang PxLxT">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-8 col-md-8">
																		<div class="form-group has-success">
																			<label class="control-label">Data Lain</label>
																			<input type="text" name="data_lain_barang" id="data_lain_barang" class="form-control input-emp-data_lain_barang" placeholder="data lain yang diperlukan">
																		</div>
																	</div>
																	<div class="col-lg-12 col-md-12">
																	<label>*yang termasuk Alat dan Mesin Pertanian: sprayer, planter, traktor, dll</label>
																	</div>
																<!--/span-->
																
																</div>
															</div>
														</div>
													</div>
													<!--End Alsintan
													Start Benih-->
													<div class="row">
														<div class="col-lg-12 col-md-12">
															<div class="card" id="Benih" style="display:none;">
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<div class="form-group has-success">
																			<label class="control-label">Komoditas</label>
																			<input type="text" name="komoditas_barang" id="komoditas_barang" class="form-control input-emp-komoditas_barang" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-6 col-md-6">
																		<div class="form-group has-success">
																			<label class="control-label">Varietas</label>
																			<input type="text" name="varietas_barang" id="varietas_barang" class="form-control input-emp-varietas_barang" placeholder="">
																		</div>
																	</div>
																<!--/span-->
																</div>
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<div class="form-group has-success">
																			<label class="control-label">Kelas Benih</label>
																			<input type="text" name="kelas_barang" id="kelas_barang" class="form-control input-emp-kelas_barang" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-6 col-md-6">
																		<div class="form-group has-success">
																			<label class="control-label">Jenis Benih</label>
																			<input type="text" name="Jenis_benih" id="Jenis_benih" class="form-control input-emp-Jenis_benih" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<div class="row">
																	<div class="col-lg-12 col-md-12">
																		<div class="form-group has-success">
																			<label class="control-label">Data Lain</label>
																			<input type="text" name="data_lain_barang_benih" id="data_lain_barang_benih" class="form-control input-emp-data_lain_barang_benih" placeholder="data lain yang diperlukan">
																		</div>
																	</div>
																<!--/span-->
																</div>
															</div>
														</div>
													</div>
													<!--End Benih
													Start Pupuk-->
													<div class="row">
														<div class="col-lg-12 col-md-12">
															<div class="card" id="Pupuk" style="display:none;">
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<div class="form-group has-success">
																			<label class="control-label">Jenis Pupuk</label>
																			<input type="text" name="jenis_pupuk" id="jenis_pupuk" class="form-control input-emp-jenis_pupuk" placeholder="Organik / Non Organik">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-6 col-md-6">
																		<div class="form-group has-success">
																			<label class="control-label">Bentuk</label>
																			<input type="text" name="bentuk_barang" id="bentuk_barang" class="form-control input-emp-bentuk_barang" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<div class="form-group has-success">
																			<label class="control-label">Kandungan</label>
																			<input type="text" name="kandungan_pupuk" id="kandungan_pupuk" class="form-control input-emp-kandungan_pupuk" placeholder="kandungan utama atau zat aktif">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-6 col-md-6">
																		<div class="form-group has-success">
																			<label class="control-label">Kemasan</label>
																			<input type="text" name="kemasan_pupuk" id="kemasan_pupuk" class="form-control input-emp-kemasan_pupuk" placeholder="">
																		</div>
																	</div>
																<!--/span-->
																</div>
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<div class="form-group has-success">
																			<label class="control-label">Merk</label>
																			<input type="text" name="merk_pupuk" id="merk_pupuk" class="form-control input-emp-merk_pupuk" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-6 col-md-6">
																		<div class="form-group has-success">
																			<label class="control-label">Data Lain</label>
																			<input type="text" name="data_lain_pupuk" id="data_lain_pupuk" class="form-control input-emp-data_lain_pupuk" placeholder="data lain yang diperlukan">
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!--End Pupuk
													Start OPT-->
													<div class="row">
														<div class="col-lg-12 col-md-12">
															<div class="card" id="PengendaliOPT" style="display:none;">
																<div class="row">
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			 <label class="control-label">Jenis Pengendali OPT</label>
																			<input type="text" name="jenis_pengendali" id="jenis_pengendali" class="form-control input-emp-jenis_pengendali" placeholder="Insektisida/Pestisida/Fung...">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Merk</label>
																			<input type="text" name="merk_pupuk_pengendali" id="merk_pupuk_pengendali" class="form-control input-emp-merk_pupuk_pengendali" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Bentuk</label>
																			<input type="text" name="bentuk_opt_pengendali" id="bentuk_opt_pengendali" class="form-control input-emp-bentuk_opt_pengendali" placeholder="">
																		</div>
																	</div>
																</div>
																<div class="row">
																	<!--/span-->
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Kandungan</label>
																			<input type="text" name="kandungan_opt_pengendali" id="kandungan_opt_pengendali" class="form-control input-emp-kandungan_opt_pengendali" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Kemasan</label>
																			<input type="text" name="kemasan_opt_pengendali" id="kemasan_opt_pengendali" class="form-control input-emp-kemasan_opt_pengendali" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Data Lain</label>
																			<input type="text" name="data_lain_pengendali" id="data_lain_pengendali" class="form-control input-emp-data_lain_pengendali" placeholder="data lain yang diperlukan">
																		</div>
																	</div>
																	<!--/span-->
																</div>
															</div>
														</div>
													</div>
													<!--End OPT
													Start DPI-->
													<div class="row">
														<div class="col-lg-12 col-md-12">
															<div class="card" id="PengendaliDPI" style="display:none;">
																<div class="row">
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			 <label class="control-label">Jenis Pengendali DPI</label>
																			<input type="text" name="jenis_pengendali_dpi" id="jenis_pengendali_dpi" class="form-control input-emp-jenis_pengendali_dpi" placeholder="...">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Merk</label>
																			<input type="text" name="merk_pengendali_dpi" id="merk_pengendali_dpi" class="form-control input-emp-merk_pengendali_dpi" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Bentuk</label>
																			<input type="text" name="bentuk_pengendali_dpi" id="bentuk_pengendali_dpi" class="form-control input-emp-bentuk_pengendali_dpi" placeholder="">
																		</div>
																	</div>
																</div>
																<div class="row">
																<!--/span-->
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Ukuran</label>
																			<input type="text" name="ukuran_pengendali_dpi" id="ukuran_pengendali_dpi" class="form-control input-emp-ukuran_pengendali_dpi" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-8 col-md-8">
																		<div class="form-group has-success">
																			<label class="control-label">Data Lain</label>
																			<input type="text" name="data_lain_dpi" id="data_lain_dpi" class="form-control input-emp-data_lain_dpi" placeholder="data lain yang diperlukan">
																		</div>
																	</div>
																	<!--/span-->
																</div>
															</div>
														</div>
													</div>
													<!--End DPI
													Start Perlengkapan-->
													<div class="row">
														<div class="col-lg-12 col-md-12">
															<div class="card" id="Perlengkapan" style="display:none;">
																<div class="row">
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Jenis Perlengkapan</label>
																			<input type="text" name="jenis_perlengkapan" id="jenis_perlengkapan" class="form-control input-emp-jenis_perlengkapan" placeholder="...">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Merk</label>
																			<input type="text" name="merk_perlengkapan" id="merk_perlengkapan" class="form-control input-emp-merk_perlengkapan" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Data / Spesifikasi Lain</label>
																			<input type="text" name="data_lain_perlengkapan" id="data_lain_perlengkapan" class="form-control input-emp-data_lain_perlengkapan" placeholder="">
																		</div>
																	</div>
																	<H6>
																		<label>*Perlengkapan dapat berupa barang yang tidak secara langsung berkaitan dengan Pertanian (laptop, komputer dll)</label>
																	</H6>
																<!--/span-->
																</div>
															</div>
														</div>
													</div>
													<!--End Perlengkapan
													Start Sarpras-->
													<div class="row">
														<div class="col-lg-12 col-md-12">
															<div class="card" id="Infrastruktur" style="display:none;">
																<div class="row">
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Jenis Sarana/Prasarana</label>
																			<input type="text" name="jenis_sarana" id="jenis_sarana" class="form-control input-emp-jenis_sarana" placeholder="sarana, prasarana">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Kapasitas</label>
																			<input type="text" name="kapasitas_sarana" id="kapasitas_sarana" class="form-control input-emp-kapasitas_sarana" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-4 col-md-4">
																		<div class="form-group has-success">
																			<label class="control-label">Data / Spesifikasi Lain</label>
																			<input type="text" name="data_lain_sarana" id="data_lain_sarana" class="form-control input-emp-data_lain_sarana" placeholder="">
																		</div>
																	</div>
																<!--/span-->
																</div>
															</div>
														</div>
													</div>
													<!--End Sarpras
													Unggah Foto Barang-->
													<div class="row">
														<div class="col-lg-6 col-md-6">
															<div class="col-lg-6 col-md-6">
																<div class="form-group" id="photo-preview">
																	<label class="control-label col-md-3">Photo</label>
																	<div class="col-md-9">
																		(No photo)
																		<span class="help-block"></span>
																	</div>
																</div>
															</div>
															<div class="card">
																<div class="card-body">
																	<h4 class="card-title">Photo Barang</h4>
																	<label for="photo_barang">File yang diupload tidak boleh Lebih dari 2MB</label>
																	<input type="file" name="photo_barang" id="photo_barang" class="dropify" />
																</div>
															</div>
														</div>
													</div>	
													<!--End Foto Barang
													Start Harga-->
													<div class="row">
														<div class="col-lg-12 col-md-12">
															<div class="card">
																<div class="row">
																	<div class="col-lg-6 col-md-6">
																		<div class="form-group has-success">
																			 <label class="control-label">Harga Satuan</label>
																			<input type="text" name="harga_satuan" id="harga_satuan" class="form-control input-emp-harga_satuan" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-3 col-md-3">
																		<div class="form-group has-success">
																			<label class="control-label">QTY Barang</label>
																			<input type="text" name="qty_barang" id="qty_barang" class="form-control input-emp-qty_barang" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-lg-3 col-md-3">
																		<div class="form-group has-success">
																			<label class="control-label">Satuan</label>
																			<input type="text" name="satuan" id="satuan" class="form-control input-emp-satuan" placeholder="">
																		</div>
																	</div>
																	<!--/span-->
																</div>
															</div>
														</div>
													</div>
												</div>
										</div>
								</div>
							</form>
						</div>
						<div class="modal-footer panel-footer">
							<button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
						</div>
					</div>
					
			</div>
		</div>
		<?php $this->load->view('back/template/footer'); ?>
    </div>
</div>
<?php $this->load->view('back/template/endscript'); ?>
<script>var baseurl = "<?php echo site_url(); ?>";</script>
<script src="<?php echo base_url('assets/') ?>plugins/dropify/dist/js/dropify.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	var save_method; //for save method string
	var dt;
	var base_url = '<?php echo base_url();?>';
	
    jQuery(document).ready(function () {
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
			else if( $(this).val()==7){
				$("#Alsintan").hide();
				$("#Benih").hide();
				$("#Pupuk").hide();
				$("#PengendaliOPT").hide();
				$("#PengendaliDPI").hide();
				$("#Perlengkapan").hide();
				$("#Infrastruktur").show();
			}
			else{
				$("#Alsintan").show();
				$("#Benih").hide();
				$("#Pupuk").hide();
				$("#PengendaliOPT").hide();
				$("#PengendaliDPI").hide();
				$("#Perlengkapan").hide();
				$("#Infrastruktur").hide();
			}
		});
		
		$("#table thead").hide();
        dt = $('#table').DataTable({
         "processing": true,
		 "serverSide": true,
               "ajax": {"url": "<?php echo site_url('v_add_barang/ajax_list')?>",
               "type": "POST"
					},
              "bInfo": false,
         "pageLength": 8,
       "lengthChange": false,
        "deferRender": true,
         "language": {  
              "paginate": {
                  "previous": "<",
                  "next": ">"
              }
            },
            "columns": [
                {
                    "render": function (data, type, row, meta) { 
                      var html =
                      '<div class="card shadow">'+
											'  <img src="'+row[6]+'" height="250" class="card-img-top">'+
											'  <div class="card-body">'+
                      '    <div class="card-text"><b>Kategori</b>  : '+row[0]+'</div>'+
                      '    <div class="card-text"><b>Nama</b>      : <b>'+row[1]+'</b></div>'+
                      '    <div class="card-text"><b>Deskripsi</b> : '+row[2]+'</div>'+
                      '    <div class="card-text"><b>Spek</b>      : '+row[3]+'</div>'+
                      '    <div class="card-text"><b>Harga</b>     : '+row[4]+'</div>'+
                      '    <div class="card-text"><b>QTY</b>       : '+row[5]+'</div>'+
                      '    <div class="card-text">'+row[7]+'</div>'+
											'  </div>'+
											'</div>';
                      return html;
                    }
                }
            ]
        });

       dt.on('draw', function(data){
        $('#table tbody').addClass('row');
        $('#table tbody tr').addClass('col-lg-4 col-md-4 col-sm-12');
       });
		
        
		
		$('.dropify').dropify({
            messages: {
                default: 'Drag atau drop untuk memilih gambar',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
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
		
		$("input").change(function(){
			$(this).parent().parent().removeClass('has-error');
			$(this).next().empty();
		});
		$("textarea").change(function(){
			$(this).parent().parent().removeClass('has-error');
			$(this).next().empty();
		});
		$("select").change(function(){
			$(this).parent().parent().removeClass('has-error');
			$(this).next().empty();
		});
    });
	
	function add_person()
	{
		save_method = 'add';
		$('#form')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string
		$('#modal_form').modal('show'); // show bootstrap modal
		$('.modal-title').text('Tambah Barang'); // Set Title to Bootstrap modal title

		$('#photo-preview').hide(); // hide photo preview modal

		$('#label-photo').text('Upload Photo'); // label photo upload
	}

	function edit_person(id)
	{
		save_method = 'update';
		$('#form')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string


		//Ajax Load data from ajax
		$.ajax({
			url : "<?php echo site_url('v_add_barang/ajax_edit')?>/" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{

				$('[name="id"]').val(data.id);
				$('[name="nama_barang"]').val(data.nama_barang);
				$('[name="qty_barang"]').val(data.qty_barang);
				$('[name="kategori_barang"]').val(data.kategori_barang);
				$('[name="satuan"]').val(data.satuan);
				$('[name="harga_satuan"]').val(data.harga_satuan);
				$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
				$('.modal-title').text('Edit Barang'); // Set title to Bootstrap modal title

				$('#photo-preview').show(); // show photo preview modal

				if(data.photo)
				{
					$('#label-photo').text('Change Photo'); // label photo upload
					$('#photo-preview div').html('<img src="'+base_url+'upload/'+data.photo+'" class="img-responsive">'); // show photo
					$('#photo-preview div').append('<input type="checkbox" name="remove_photo" value="'+data.photo+'"/> Remove photo when saving'); // remove photo

				}
				else
				{
					$('#label-photo').text('Upload Photo'); // label photo upload
					$('#photo-preview div').text('(No photo)');
				}


			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});
	}

	function reload_table()
	{
		dt.ajax.reload(null,false); //reload datatable ajax 
	}

	function save()
	{
		$('#btnSave').text('saving...'); //change button text
		$('#btnSave').attr('disabled',true); //set button disable 
		var url;

		if(save_method == 'add') {
			url = "<?php echo site_url('v_add_barang/ajax_add')?>";
		} else {
			url = "<?php echo site_url('v_add_barang/ajax_update')?>";
		}

		// ajax adding data to database

		var formData = new FormData($('#form')[0]);
		$.ajax({
			url : url,
			type: "POST",
			data: formData,
			contentType: false,
			processData: false,
			dataType: "JSON",
			success: function(data)
			{

				if(data.status) //if success close modal and reload ajax table
				{
					$('#modal_form').modal('hide');
					reload_table();
				}
				else
				{
					for (var i = 0; i < data.inputerror.length; i++) 
					{
						$('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
						$('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
					}
				}
				$('#btnSave').text('save'); //change button text
				$('#btnSave').attr('disabled',false); //set button enable 


			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error adding / update data');
				$('#btnSave').text('save'); //change button text
				$('#btnSave').attr('disabled',false); //set button enable 

			}
		});
	}

	function delete_person(id)
	{
		if(confirm('Are you sure delete this data?'))
		{
			// ajax delete data to database
			$.ajax({
				url : "<?php echo site_url('v_add_barang/ajax_delete')?>/"+id,
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
</script>
<?php $this->load->view('back/template/endbody'); ?>


