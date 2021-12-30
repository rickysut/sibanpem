<div class="modal fade" id="modal_form_penerima_barang" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Data Penerima Bantuan Barang</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form-penerima-barang" class="form-horizontal">
                    <div class="row">
						<div class="col-lg-12">
							<div class="card card-outline-info">
								<div class="card-header">
									<h4 class="m-b-0 text-white">Personal Data</h4>
								</div>
								<div class="card-body">
										<div class="form-body">
											<div class="row p-t-20">
												<div class="col-md-6">
													<div class="form-group has-success">
														 <label class="control-label">N I K</label>
														 <input type="text" id="nik" class="form-control" placeholder="NIK">
													</div>
												</div>
												<!--/span-->
												<div class="col-md-6">
													<div class="form-group has-success">
														<label class="control-label">Nama Lengkap</label>
														<input type="text" id="nama_lengkap" class="form-control" placeholder="nama">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group has-success">
														<label class="control-label">Provinsi</label>
														<?php echo form_dropdown('', $get_all_combobox_provinsi, '', $provinsi) ?>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group has-success">
														<label class="control-label">Kabupaten</label>
														<select name="kabupaten" class="form-control" id="kabupaten"> <!-- onchange="setpetakota(this.options[this.selectedIndex].value)"> -->
															<option value=''>- Pilih Kabupaten</option>
														</select>
													</div>
												</div>
											</div>	
											<div class="row">
												<div class="col-md-6">
													<div class="form-group has-success">
														<label class="control-label">Kecamatan</label>
														<select name="kecamatan" class="form-control" id="kecamatan"> <!-- onchange="setpetakota(this.options[this.selectedIndex].value)"> -->
															<option value=''>- Pilih Kecamatan</option>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group has-success">
														<label class="control-label">Desa</label>
														<select name="desa" class="form-control" id="desa"> <!-- onchange="setpetakota(this.options[this.selectedIndex].value)"> -->
															<option value=''>- Pilih Desa</option>
														</select>
													</div>
												</div>
											</div>	
											<div class="row">
												<div class="col-md-8">
													<div class="form-group has-success">
														<label class="control-label">Alamat</label>
														<input type="text" id="alamat" class="form-control" placeholder="alamat lengkap">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group has-success">
														<label class="control-label">No Handphone/WA</label>
														<input type="text" id="no_kontak" class="form-control" placeholder="nomor HP/WA">
													</div>
												</div>
											</div>		
											<div class="row">
												<div class="col-lg-12 col-md-12">
													<div class="card">
														<div class="card-body">
															<h4 class="card-title">Dokumen KTP Penerima</h4>
															<label for="input-file-now-custom-1">File yang diupload tidak boleh Lebih dari 2MB</label>
															<input type="file" id="file_ktp" class="dropify" />
														</div>
													</div>
												</div>
											</div>	
										</div>
								</div>
							</div>
						</div>
					</div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" name="btnSavePenerima" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->