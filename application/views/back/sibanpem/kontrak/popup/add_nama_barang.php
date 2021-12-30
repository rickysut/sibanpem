<div class="modal fade" id="modal_form_data_barang" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Barang</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form-data-barang" class="form-horizontal">
                    <div class="row">
						<div class="col-lg-12">
							<div class="card card-outline-info">
								<div class="card-header">
									<h4 class="m-b-0 text-white">Tambah Data Barang</h4>
								</div>
								<div class="card-body">
									<div class="form-body">
										<div class="row p-t-20">
											<div class="col-md-6">
												<div class="form-group has-success">
													<label class="control-label">Kategori Barang</label>
													<select id="kategori_barang" class="form-control" data-placeholder="Pilih Kategori Barang">
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
													<input type="text" id="nama_vendor" class="form-control" placeholder="ketik nama barang">
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
																<input type="text" id="merk_barang" class="form-control" placeholder="sebutkan nama merk/pabrikan barang">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-4 col-md-4">
															<div class="form-group has-success">
																<label class="control-label">Type/Model</label>
																<input type="text" id="type_barang" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-4 col-md-4">
															<div class="form-group has-success">
																<label class="control-label">Jenis Alat/Mesin</label>
																<input type="text" id="jenis_barang" class="form-control" placeholder="">
															</div>
														</div>
													<!--/span-->
													</div>
													<div class="row">
														<div class="col-lg-4 col-md-4">
															<div class="form-group has-success">
																<label class="control-label">Dimensi</label>
																<input type="text" id="dimensi_barang" class="form-control" placeholder="ukuran barang PxLxT">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-8 col-md-8">
															<div class="form-group has-success">
																<label class="control-label">Data Lain</label>
																<input type="text" id="data_lain_barang" class="form-control" placeholder="data lain yang diperlukan">
															</div>
														</div>
														<H6>
														<label>*yang termasuk Alat dan Mesin Pertanian: sprayer, planter, traktor, dll</label>
														</H6>
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
																<input type="text" id="komoditas_barang" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-6 col-md-6">
															<div class="form-group has-success">
																<label class="control-label">Varietas</label>
																<input type="text" id="varietas_barang" class="form-control" placeholder="">
															</div>
														</div>
													<!--/span-->
													</div>
													<div class="row">
														<div class="col-lg-6 col-md-6">
															<div class="form-group has-success">
																<label class="control-label">Kelas Benih</label>
																<input type="text" id="kelas_barang" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-6 col-md-6">
															<div class="form-group has-success">
																<label class="control-label">Jenis Benih</label>
																<input type="text" id="Jenis_benih" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->
													</div>
													<div class="row">
														<div class="col-lg-12 col-md-12">
															<div class="form-group has-success">
																<label class="control-label">Data Lain</label>
																<input type="text" id="data_lain_barang" class="form-control" placeholder="data lain yang diperlukan">
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
																<select id="kategori_barang" class="form-control custom-select" data-placeholder="Pilih Jenis Pupuk" tabindex="1">
																	<option value="1">Organik</option>
																	<option value="2">Non Organik</option>
																</select>
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-6 col-md-6">
															<div class="form-group has-success">
																<label class="control-label">Bentuk</label>
																<input type="text" id="bentuk_barang" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->
													</div>
													<div class="row">
														<div class="col-lg-6 col-md-6">
															<div class="form-group has-success">
																<label class="control-label">Kandungan</label>
																<input type="text" id="kandungan_pupuk" class="form-control" placeholder="kandungan utama atau zat aktif">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-6 col-md-6">
															<div class="form-group has-success">
																<label class="control-label">Kemasan</label>
																<input type="text" id="kemasan_barang" class="form-control" placeholder="">
															</div>
														</div>
													<!--/span-->
													</div>
													<div class="row">
														<div class="col-lg-6 col-md-6">
															<div class="form-group has-success">
																<label class="control-label">Merk</label>
																<input type="text" id="merk_pupuk" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-6 col-md-6">
															<div class="form-group has-success">
																<label class="control-label">Data Lain</label>
																<input type="text" id="data_lain_barang" class="form-control" placeholder="data lain yang diperlukan">
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
																<input type="text" id="jenis_pengendali" class="form-control" placeholder="Insektisida/Pestisida/Fung...">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-4 col-md-4">
															<div class="form-group has-success">
																<label class="control-label">Merk</label>
																<input type="text" id="merk_pupuk" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-4 col-md-4">
															<div class="form-group has-success">
																<label class="control-label">Bentuk</label>
																<input type="text" id="bentuk_barang" class="form-control" placeholder="">
															</div>
														</div>
													</div>
													<div class="row">
														<!--/span-->
														<div class="col-lg-4 col-md-4">
															<div class="form-group has-success">
																<label class="control-label">Kandungan</label>
																<input type="text" id="kandungan_pupuk" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-4 col-md-4">
															<div class="form-group has-success">
																<label class="control-label">Kemasan</label>
																<input type="text" id="kemasan_barang" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-4 col-md-4">
															<div class="form-group has-success">
																<label class="control-label">Data Lain</label>
																<input type="text" id="data_lain_barang" class="form-control" placeholder="data lain yang diperlukan">
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
																<input type="text" id="jenis_pengendali" class="form-control" placeholder="...">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-4 col-md-4">
															<div class="form-group has-success">
																<label class="control-label">Merk</label>
																<input type="text" id="merk_pupuk" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-4 col-md-4">
															<div class="form-group has-success">
																<label class="control-label">Bentuk</label>
																<input type="text" id="bentuk_barang" class="form-control" placeholder="">
															</div>
														</div>
													</div>
													<div class="row">
													<!--/span-->
														<div class="col-lg-4 col-md-4">
															<div class="form-group has-success">
																<label class="control-label">Ukuran</label>
																<input type="text" id="ukuran" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-8 col-md-8">
															<div class="form-group has-success">
																<label class="control-label">Data Lain</label>
																<input type="text" id="data_lain_barang" class="form-control" placeholder="data lain yang diperlukan">
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
																<input type="text" id="jenis_perlengkapan" class="form-control" placeholder="...">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-4 col-md-4">
															<div class="form-group has-success">
																<label class="control-label">Merk</label>
																<input type="text" id="merk_pupuk" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-4 col-md-4">
															<div class="form-group has-success">
																<label class="control-label">Data / Spesifikasi Lain</label>
																<input type="text" id="data_lain_barang" class="form-control" placeholder="">
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
																<input type="text" id="jenis_sarana" class="form-control" placeholder="sarana, prasarana">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-4 col-md-4">
															<div class="form-group has-success">
																<label class="control-label">Kapasitas</label>
																<input type="text" id="kapasitas" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-4 col-md-4">
															<div class="form-group has-success">
																<label class="control-label">Data / Spesifikasi Lain</label>
																<input type="text" id="data_lain_barang" class="form-control" placeholder="">
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
											<div class="col-lg-12 col-md-12">
												<div class="card">
													<div class="card-body">
														<h4 class="card-title">Photo Barang</h4>
														<label for="photo_barang">File yang diupload tidak boleh Lebih dari 2MB</label>
														<input type="file" id="photo_barang" class="dropify" />
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
																<input type="text" id="harga_satuan" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->
														<div class="col-lg-6 col-md-6">
															<div class="form-group has-success">
																<label class="control-label">Satuan</label>
																<input type="text" id="Satuan" class="form-control" placeholder="">
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
						</div>
					</div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" name="btnSaveBarang" class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-inverse" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->