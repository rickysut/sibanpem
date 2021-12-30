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
	body{
    margin-top:20px;
    background:#eee;
}

body {
    background-color: #eee
}

.mt-70 {
    margin-top: 70px
}

.mb-70 {
    margin-bottom: 70px
}

.card {
    box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
    border-width: 0;
    transition: all .2s
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(26, 54, 126, 0.125);
    border-radius: .25rem
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem
}

.vertical-timeline {
    width: 100%;
    position: relative;
    padding: 1.5rem 0 1rem
}

.vertical-timeline::before {
    content: '';
    position: absolute;
    top: 0;
    left: 67px;
    height: 100%;
    width: 4px;
    background: #e9ecef;
    border-radius: .25rem
}

.vertical-timeline-element {
    position: relative;
    margin: 0 0 1rem
}

.vertical-timeline--animate .vertical-timeline-element-icon.bounce-in {
    visibility: visible;
    animation: cd-bounce-1 .8s
}

.vertical-timeline-element-icon {
    position: absolute;
    top: 0;
    left: 60px
}

.vertical-timeline-element-icon .badge-dot-xl {
    box-shadow: 0 0 0 5px #fff
}

.badge-dot-xl {
    width: 18px;
    height: 18px;
    position: relative
}

.badge:empty {
    display: none
}

.badge-dot-xl::before {
    content: '';
    width: 10px;
    height: 10px;
    border-radius: .25rem;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -5px 0 0 -5px;
    background: #fff
}

.vertical-timeline-element-content {
    position: relative;
    margin-left: 90px;
    font-size: .8rem
}

.vertical-timeline-element-content .timeline-title {
    font-size: .8rem;
    text-transform: uppercase;
    margin: 0 0 .5rem;
    padding: 2px 0 0;
    font-weight: bold
}

.vertical-timeline-element-content .vertical-timeline-element-date {
    display: block;
    position: absolute;
    left: -90px;
    top: 0;
    padding-right: 10px;
    text-align: right;
    color: #adb5bd;
    font-size: .7619rem;
    white-space: nowrap
}

.vertical-timeline-element-content:after {
    content: "";
    display: table;
    clear: both
}
  </style>
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/dropify/dist/css/dropify.min.css">
<?php $this->load->view('back/template/header'); ?>
<?php $this->load->view('back/template/sidebar'); ?>
<div class="page-wrapper">
	<!-- HEADER BREADCRUMB -->
	<div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Daftar Pesanan</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Daftar Pesanan</li>
            </ol>
        </div>
    </div>
<!-- ============================================================== -->
<!-- HEADER BREADCRUMB -->
<!-- ============================================================== -->
	<div class="container-fluid">
		<div class="card">
			<div class="card">
				<!-- Section Kontrak -->
				<div class="card-header">
					<div class="card-actions">
						<a class="btn btn-default btn-sm fa fa-eye" data-toggle="tooltip" title="Lihat Detail" onclick="reload_table()"></a>
						<a class="btn btn-default btn-sm fa fa-rotate-right" data-toggle="tooltip" title="Refresh Data" onclick="reload_table()"></a>
						<a class="" data-action="collapse" data-toggle="tooltip" title="Sembunyi/Tampil"><i class="ti-minus"></i></a>
						<a class="btn-minimize" data-action="expand" data-toggle="tooltip" title="Layar penuh"><i class="mdi mdi-arrow-expand"></i></a>
					</div>
					<h5 class="card-title m-b-0 small">Nomor Kontrak: <a class="font-bold" href="#"> xxx/abc/X/XXXX</a></h5>
				</div>
				<div class="card-body collapse show">
					<div class="row">
						<div class="col-lg-6 col-md-6"> <!-- -->
							<div class="card">
								<div class="card-default">
									<div class="card-header bg-light">
										<div class="card-actions">
											<a class="" data-action="collapse"><i class="ti-minus"></i></a>
											<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
										</div>
										<h4 class="card-title m-b-0 font-bold text-danger">Pesanan Baru</h4>
										<div class="small">
											Anda mendapat pesanan baru dengan No.: <a class="text-success font-bold" href="#">2112036P0DR3G9</a><br></br>
										</div>
										<div class="small text-muted fa fa-clock-o">
											<span>07-12-2021 17.31</span>
										</div>
									</div>
									<div class="card-body collapse show row"><!-- content -->
										
										<div class="col-6 card card-body vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
											<!-- Pengemasan -->
											<div class="vertical-timeline-item vertical-timeline-element">
												<div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot fa fa-cart-arrow-down badge-success"> </i> </span>
													<div class="vertical-timeline-element-content bounce-in text-success">
														<h4 class="timeline-title">Dikemas</h4>
														<p>Persiapan dan Pengemasan barang</p> <span class="vertical-timeline-element-date">6:00 PM</span>
													</div>
												</div>
											</div>
											<!-- Pengiriman -->
											<div class="vertical-timeline-item vertical-timeline-element">
												<div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot fa fa-truck fa-flip-horizontal badge-warning"> </i> </span>
													<div class="vertical-timeline-element-content bounce-in text-warning">
														<h4 class="timeline-title">Dikirim</h4>
														<p>Barang telah dikirimkan dengan SJ No. xxx</p> <span class="vertical-timeline-element-date">6:00 PM</span>
													</div>
												</div>
											</div>
											<!-- Diterima -->
											<div class="vertical-timeline-item vertical-timeline-element">
												<div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot fa fa-check-square-o badge-light"> </i> </span>
													<div class="vertical-timeline-element-content bounce-in text-muted">
														<h4 class="timeline-title">Diterima</h4>
														<p>Barang telah diterima oleh Penerima Barang pada pukul</p> <span class="vertical-timeline-element-date">9:00 AM</span>
													</div>
												</div>
											</div>
											<!-- Konfirmasi -->
											<div class="vertical-timeline-item vertical-timeline-element">
												<div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot fa fa-thumbs-up badge-light"> </i> </span>
													<div class="vertical-timeline-element-content bounce-in text-muted">
														<h4 class="timeline-title">Dikonfirmasi</h4>
														<p>Penerima Barang telah mengkonfirmasi dan menyatakan sesuai <a href="javascript:void(0);" data-abc="true">10:00 AM</a></p> <span class="vertical-timeline-element-date">10:30 PM</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-1"></div>
										<div class="col-5">
										
											<div class="col-12"><!--Section-->
												<h4 class="font-bold">Penerima</h4>
											</div>
											<div id="nama"class="row">		
												<div class="col-1"><i class="fa fa-user"></i></div>
												<div class="col-9">Yedi Dermawan</div>
											</div>
											<div id="NIP"class="row">		
												<div class="col-1"><i class="fa fa-address-card"></i></div>
												<div class="col-9">32.01.01.01012001.0001</div>
											</div>
											<div id="phone"class="row">		
												<div class="col-1"><i class="fa fa-mobile"></i></div>
												<div class="col-9">0812 3456 7890</div>
											</div><p></p>
											<div class="row col-12"><!--Section-->
												<h4 class="font-bold">Alamat Kirim</h4>
											</div>
											<div id="alamat" class="row">		
												<div class="col-1"><i class="fa fa-map-marker"></i></div>
												<div class="col-9">Jl. AUP No. 3, Pasarminggu - Jakarta Selatan</div>
											</div>
											
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6"> <!-- -->
							<div class="card">
								<div class="card-default">
									<div class="card-header bg-light">
										<div class="card-actions">
											<a class="" data-action="collapse"><i class="ti-minus"></i></a>
											<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
										</div>
										<h4 class="card-title m-b-0 font-bold text-danger">Pesanan Baru</h4>
										<div class="small">
											Anda mendapat pesanan baru dengan No.: <a class="text-success font-bold" href="#">2112036P0DR3G9</a><br></br>
										</div>
										<div class="small text-muted fa fa-clock-o">
											<span>07-12-2021 17.31</span>
										</div>
									</div>
									<div class="card-body collapse show"><!-- content -->
										<div class="row col-12"><!--Section-->
											<h4 class="font-bold">Penerima</h4>
										</div>
										<div id="nama"class="row">		
											<div class="col-1"><i class="fa fa-user"></i></div>
											<div class="col-9">Yedi Dermawan</div>
										</div>
										<div id="NIP"class="row">		
											<div class="col-1"><i class="fa fa-address-card"></i></div>
											<div class="col-9">32.01.01.01012001.0001</div>
										</div>
										<div id="phone"class="row">		
											<div class="col-1"><i class="fa fa-mobile"></i></div>
											<div class="col-9">0812 3456 7890</div>
										</div><p></p>
										<div class="row col-12"><!--Section-->
											<h4 class="font-bold">Alamat Kirim</h4>
										</div>
										<div id="alamat" class="row">		
											<div class="col-1"><i class="fa fa-map-marker"></i></div>
											<div class="col-9">Jl. AUP No. 3, Pasarminggu - Jakarta Selatan</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6"> <!-- -->
							<div class="card">
								<div class="card-default">
									<div class="card-header bg-light">
										<div class="card-actions">
											<a class="" data-action="collapse"><i class="ti-minus"></i></a>
											<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
										</div>
										<h4 class="card-title m-b-0 font-bold text-danger">Pesanan Baru</h4>
										<div class="small">
											Anda mendapat pesanan baru dengan No.: <a class="text-success font-bold" href="#">2112036P0DR3G9</a><br></br>
										</div>
										<div class="small text-muted fa fa-clock-o">
											<span>07-12-2021 17.31</span>
										</div>
									</div>
									<div class="card-body collapse show"><!-- content -->
										<div class="row col-12"><!--Section-->
											<h4 class="font-bold">Penerima</h4>
										</div>
										<div id="nama"class="row">		
											<div class="col-1"><i class="fa fa-user"></i></div>
											<div class="col-9">Yedi Dermawan</div>
										</div>
										<div id="NIP"class="row">		
											<div class="col-1"><i class="fa fa-address-card"></i></div>
											<div class="col-9">32.01.01.01012001.0001</div>
										</div>
										<div id="phone"class="row">		
											<div class="col-1"><i class="fa fa-mobile"></i></div>
											<div class="col-9">0812 3456 7890</div>
										</div><p></p>
										<div class="row col-12"><!--Section-->
											<h4 class="font-bold">Alamat Kirim</h4>
										</div>
										<div id="alamat" class="row">		
											<div class="col-1"><i class="fa fa-map-marker"></i></div>
											<div class="col-9">Jl. AUP No. 3, Pasarminggu - Jakarta Selatan</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<button class="btn btn-info btn-sm" onclick="reload_table()" data-toggle="tooltip" title="Anda hanya dapat mengajukan pembayaran jika status pengiriman telah dikonfirmasi oleh Penerima Bantuan"><i class="fa fa-download"></i> Ajukan Pembayaran</button>
				</div>
				
			</div>

<div class="row d-flex justify-content-center mt-70 mb-70">
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">User Timeline</h5>
                
            </div>
        </div>
    </div>
</div>



		</div>
	</div>
</div>
<?php $this->load->view('back/template/footer'); ?>
<?php $this->load->view('back/template/endbody'); ?>
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

<script>
function reload_table()
	{
		dt.ajax.reload(null,false); //reload datatable ajax 
	}
	

</script>