 <div class="modal fade" id="add-employee-uang" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Formulir Entry Data Bantuan Uang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
				<form id="add-employee-form-uang" method="post">
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
														<input type="text" id="k_dipa" class="form-control" placeholder="">
														<small class="form-control-feedback"> Diisi Nomor Dipa </small> </div>
												</div>
												<!--/span-->
												<div class="col-md-4">
													<div class="form-group has-success">
														<label class="control-label">Tanggal Dipa</label>
														<input type="date" id="k_dipa_tgl" class="form-control" placeholder="mm/dd/yyyy">
														<small class="form-control-feedback"> Tanggal Dipa. </small> </div>
												</div>
												<!--/span-->
												<div class="col-md-4">
													<div class="form-group has-success">
														<label class="control-label">Kode Kegiatan</label>
														<?php echo form_dropdown('', $get_all_kegiatan, '', $k_kode_kegiatan) ?> 
														<small class="form-control-feedback"> Pilih Kode Kegiatan </small> </div>
												</div>
											</div>
											<!--/row-->
											<div class="row">
												<div class="col-md-4">
													<div class="form-group has-success">
														<label class="control-label">Kode - K R O</label>
														<?php echo form_dropdown('', $get_all_kro, '', $kd_kro) ?>
														<small class="form-control-feedback"> Pilih Kode KRO </small> </div>
												</div>
												<!--/span-->
												<div class="col-md-4">
													<div class="form-group has-success">
														<label class="control-label">Kode - RO</label>
														<?php echo form_dropdown('', $get_all_ro, '', $kd_ro) ?>
														<small class="form-control-feedback"> Pilih Kode RO </small> </div>
												</div>
												<div class="col-md-4">
													<div class="form-group has-success">
														<label class="control-label">Kode Akun</label>
														<?php echo form_dropdown('', $get_all_akun, '', $kd_akun) ?>
														<small class="form-control-feedback"> Pilih Kode Akun </small> </div>
												</div>
												<!--/span-->
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group has-success">
														<label class="control-label">Nomor Kontrak</label>
														<input type="text" id="k_kontrak_nomor" class="form-control" placeholder="">
														<small class="form-control-feedback"> Diisi Nomor Kontrak </small> </div>
												</div>
												<!--/span-->
												<div class="col-md-4">
													<div class="form-group has-success">
														<label class="control-label">Tanggal Kontrak</label>
														<input type="date" id="k_kontrak_tgl" class="form-control" placeholder="mm/dd/yyyy">
														<small class="form-control-feedback"> Diisi Tanggal Kontrak. </small> </div>
												</div>
												<!--/span-->
												<div class="col-md-4">
													<div class="form-group has-success">
														<label class="control-label">Apakah SK ini merupakan HOK?</label>
														<div class="switch">
															<label>Tidak<input type="checkbox"><span class="lever"></span>Ya</label>
														</div>
														<small class="form-control-feedback"> Pilih Ya atau Tidak </small> </div>
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
									Upload Dokumen
									<div class="card-actions">
										<a class="" data-action="collapse"><i class="ti-plus"></i></a>
										<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
									</div>
								</div>
								<div class="card-body collapse">
									<div class="form-body">
										<div class="row">
											<div class="col-lg-6 col-md-6">
												<div class="card">
													<div class="card-body">
														<h4 class="card-title">Dokumen Kontrak</h4>
														<label for="input-file-now">File yang diupload tidak boleh Lebih dari 2MB</label>
														<input type="file" id="input-file-now" class="dropify" />
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
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									Nilai Kontrak
									<div class="card-actions">
										<a class="" data-action="collapse"><i class="ti-plus"></i></a>
										<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
									</div>
								</div>
								<div class="card-body collapse">
									<div class="form-body">
										<div class="row">
											<div class="col-md-12 ">
												<div class="form-group has-success">
													<label>Nilai Kontrak</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>	
									</div>
								</div>
								<div class="card-footer">
									<div class="form-actions">
											<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
											<button type="button" class="btn btn-inverse">Cancel</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
         </div>
                                        <!-- /.modal-content -->
    </div>
                                    <!-- /.modal-dialog -->
</div>