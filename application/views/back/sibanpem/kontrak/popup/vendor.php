<div class="modal fade" id="modal_form_vendor" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Vendor</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form-vendor" class="form-horizontal">
                    <div class="row">
						<div class="col-lg-12">
							<div class="card card-outline-info">
								<div class="card-header">
									<h4 class="m-b-0 text-white">Tambah Data Vendor</h4>
								</div>
								<div class="card-body">
										<div class="form-body">
											<div class="row p-t-20">
												<div class="col-md-6">
													<div class="form-group has-success">
														<label class="control-label">Nomor NPWP</label>
														<input type="text" id="no_npwp" class="form-control" placeholder="Nomor NPWP">
													</div>
												</div>
												<!--/span-->
												<div class="col-md-6">
													<div class="form-group has-success">
														<label class="control-label">Nama Perusahaan / Vendor</label>
														<input type="text" id="nama_vendor" class="form-control" placeholder="nama">
													</div>
												</div>
											</div>
											<<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">Provinsi</label>
														<?php echo form_dropdown('', $get_all_combobox_provinsi, '', $provinsi) ?>
														<small class="form-control-feedback"> Pilih Provinsi </small> 
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">Kabupaten</label>
															<select name="kabupaten" class="form-control" id="kabupaten"> <!-- onchange="setpetakota(this.options[this.selectedIndex].value)"> -->
																		<option value=''>Pilih Kabupaten</option>
															</select>
														<small class="form-control-feedback"> Pilih Kabupaten </small> 
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">Kecamatan</label>
														<select name="kecamatan" class="form-control" id="kecamatan">
																		<option value=''>Pilih Kecamatan</option>
																	  </select>
														<small class="form-control-feedback"> Pilih Kecamatan </small> 
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">Desa</label>
														<select name="desa" class="form-control" id="desa">
																		<option value=''>Pilih desa</option>
																	  </select>
														<small class="form-control-feedback"> Pilih Desa </small> 
													</div>
												</div>
													<div class="col-md-12 ">
														<div class="form-group">
															<label>Kp|RT|RW</label>
															<input type="text" id="alamat" class="form-control">
														</div>
													</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-md-6">
													<div class="form-group has-success">
														<label class="control-label">Nama Direktur</label>
														<input type="text" id="nama_direktur" class="form-control" placeholder="">
													</div>
												</div>
												<!--/span-->
												<div class="col-lg-3 col-md-3">
													<div class="form-group has-success">
														<label class="control-label">Nomor Kontak</label>
														<input type="text" id="nomor_kontak" class="form-control" placeholder="">
													</div>
												</div>
												<!--/span-->
												<div class="col-lg-3 col-md-3">
													<div class="form-group has-success">
														<label class="control-label">Email</label>
														<input type="text" id="email" class="form-control" placeholder="">
													</div>
												</div>
												<!--/span-->
											</div>
											<!--/row-->
											<h3 class="box-title m-t-40">Upload Dokumen</h3>
											<hr>
											<div class="row">
												<div class="col-lg-12 col-md-12">
													
													<div class="card">
														<div class="card-body">
															<h4 class="card-title">Dokumen NPWP</h4>
															<label for="k_kontrak_dokumen">File yang diupload tidak boleh Lebih dari 2MB</label>
															<input type="file" id="k_kontrak_dokumen" class="dropify" />
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
                <button type="button" name="btnSaveVendor" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->