 <div class="modal fade" id="add-employee" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Formulir Entry Data Bantuan Barang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
			<form id="add-employee-form" method="post">
            <div class="modal-body">
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
									<a class="" data-action="collapse"><i class="ti-plus"></i></a>
									<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
								</div>
							</div>
							<div class="card-body collapse">
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
									<a class="" data-action="collapse"><i class="ti-plus"></i></a>
									<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
								</div>
							</div>
							<div class="card-body collapse">
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
								<a class="pull-right btn btn-md btn-rounded btn-info" href="javascript:void(0)" id="tombolTambahBarang" title="Isi / Tambah Barang" onclick="add_barang()"><i class="mdi mdi-cash"></i> Tambah Barang</a>
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
									<a class="" data-action="collapse"><i class="ti-plus"></i></a>
									<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
								</div>
							</div>
							<div class="card-body collapse">
								<a class="pull-right btn btn-md btn-rounded btn-info" href="javascript:void(0)" id="tombolTambahPenerima" title="Isi / Tambah Penerima Barang" onclick="add_penerima()"><i class="mdi mdi-cash"></i> Tambah Penerima</a>
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
			</div>
            <div class="modal-footer">
				<div class="row">
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success" data-addempid="" id="add-emp"> <i class="fa fa-check"></i> Save</button>
                        <button type="button" class="btn btn-inverse" data-dismiss="modal">Close</button>
                    </div>
					</form>   
				</div>
            </div>
         </div>
		</div>
                                        <!-- /.modal-content -->
    </div>