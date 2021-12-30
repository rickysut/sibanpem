<?php $this->load->view('back/template/meta'); ?>
<!-- ============================================================== -->
<!-- Add Style or custom CSS Here -->
<?php $this->load->view('back/template/header'); ?>
<?php $this->load->view('back/template/sidebar'); ?>

<div class="page-wrapper">
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Dashboard SiPedas (mockup)</h3>
		</div>
		<div class="col-md-7 align-self-center">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
				<li class="breadcrumb-item active">SiPedas</li>
			</ol>
		</div>
		<div class="col-md-9">
		<!-- left column -->	
	
			<h5>
				<small class="text-muted">Sistem Penyediaan Data Satistik Pertanian Hortikultura</small>
			</h5>
		
		</div>
	<div class="col-md-3"><!-- right column -->	
		<ol class="breadcrumb">
			<h6>
				<li><small class="text-muted">(Data per Oktober 2021)</small></li>
			</h6>
		</ol>
	</div>
</div>
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
<div class="container-fluid">
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->		
	<div class="row"><!-- Pengumuman -->
		<?php $this->load->view('back/public_message'); ?>
	</div>
	
	<div class="row"><!-- Ringkasan -->
				<!-- Column -->
				<div class="col-lg-3 col-md-6">
					<div class="card">
						<div class="card-body">
							<!-- Row -->
							<div class="row">
								<div class="col-8"><h3 class="">300.000 <span><sup style="font-size: 10px"> ton</sup></span><i class="ti-angle-up font-14 text-success"></i></h3>
									<h6>Ijin Impor</h6></div>
								<div class="col-4 align-self-center text-right  p-l-0">
									<div id="sparklinedash3"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="col-lg-3 col-md-6">
					<div class="card">
						<div class="card-body">
							<!-- Row -->
							<div class="row">
								<div class="col-8"><h3 class="">30 <span><sup style="font-size: 10px">SK </sup></span><i class="ti-angle-up font-14 text-success"></i></h3>
									<h6>Penerbitan</h6></div>
								<div class="col-4 align-self-center text-right p-l-0">
									<div id="sparklinedash"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="col-lg-3 col-md-6">
					<div class="card">
						<div class="card-body">
							<!-- Row -->
							<div class="row">
								<div class="col-8"><h3 class="">30 <span><sup style="font-size: 10px">komoditas </sup></span><i class="ti-angle-up font-14 text-success"></i></h3>
									<h6>Hortikultura</h6></div>
								<div class="col-4 align-self-center text-right p-l-0">
									<div id="sparklinedash2"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Column -->
				<div class="col-lg-3 col-md-6">
					<div class="card">
						<div class="card-body">
							<!-- Row -->
							<div class="row">
								 <div class="col-8"><h3 class="">6759 <span><sup style="font-size: 10px">ha </sup></span><i class="ti-angle-up font-14 text-success"></i></h3>
									<h6>Wajib Tanam</h6></div>
								<div class="col-4 align-self-center text-right p-l-0">
									<div id="sparklinedash4"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

	<!-- Row -->
	<div class="row">
		<div class="col-lg-8 col-md-7">
			<div class="card">
				<div class="card-body">
					<div class="d-flex flex-wrap">
						<div>
							<h4 class="card-title">Grafik Realisasi</h4>
						</div>
						<div class="ml-auto">
							<ul class="list-inline">
								<li>
									<h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Tanam</h6> </li>
								<li>
									<h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Produksi</h6> </li>
									
							</ul>
						</div>
					</div>
					<div id="morris-area-chart2" style="height: 405px;"></div>
					
				</div>
				
			</div>
			<div class="card card-default"> <!-- Daftar Komoditas -->
				<div class="card-header">
					<div class="card-actions">
						<a class="" data-action="collapse"><i class="ti-minus"></i></a>
						<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
						<a class="btn-close" data-action="close"><i class="ti-close"></i></a>
					</div>
					<h4 class="card-title m-b-0">Product Overview</h4>
				</div>
				<div class="card-body collapse show">
					<div class="row">
						<div class="col-md-4">
							<ul class="nav nav-pills nav-pills-rose flex-column" role="tablist">
								<li class="nav-item">
								  <a class="nav-link" data-toggle="tab" href="#link4" role="tablist">
									Kelengkeng
								  </a>
								</li>
								<li class="nav-item">
								  <a class="nav-link" data-toggle="tab" href="#link5" role="tablist">
									Pear/Pir
								  </a>
								</li>
								<li class="nav-item">
								  <a class="nav-link" data-toggle="tab" href="#link6" role="tablist">
									Bawang Putih
								  </a>
								</li>
								<li class="nav-item">
								  <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
									Bawang Bombai
								  </a>
								</li>
							</ul>
						</div>
						<div class="col-md-8">
					<div class="tab-content">
						<div class="tab-pane active" id="link4">
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<td>1</td>
											<td>PT. ABC</td>
											<td class="text-right">
												334.411.303.774,98
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>PT. XYZ</td>
											<td class="text-right">
												121.396.461.500,00
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>PT. MNO</td>
											<td class="text-right">
												32.079.220.999,76
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>PT. DEF</td>
											<td class="text-right">
												31.891.999.999,98
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>PT. XXL</td>
											<td class="text-right">
												19.443.759.998,40
											</td>
										</tr>
										<tr>
											<td>6</td>
											<td>PT ZXC</td>
											<td class="text-right">
												18.899.999.998,11
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane" id="link5">
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<td>1</td>
											<td>PT. DEF</td>
											<td class="text-right">
												209.371.348.437,62
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>PT. MNO</td>
											<td class="text-right">
												111.566.249.207,69
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>PT. ABC</td>
											<td class="text-right">
												83.098.855.024,75
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>PT. XYZ</td>
											<td class="text-right">
												76.540.042.603,98
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>PT. JKL</td>
											<td class="text-right">
												76.324.863.791,94
											</td>
										</tr>
										<tr>
											<td>6</td>
											<td>PT. PQR</td>
											<td class="text-right">
												76.232.834.134,97
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane" id="link6">
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<td>1</td>
											<td>PT. RST</td>
											<td class="text-right">
												31.387.524.310,-
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>PT. DEF</td>
											<td class="text-right">
												23.604.065.572,-
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>PT. ABC</td>
											<td class="text-right">
												19.774.429.784,-
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>PT. XYZ</td>
											<td class="text-right">
												16.385.312.863,-
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>PT. QWE</td>
											<td class="text-right">
												14.356.302.024,-
											</td>
										</tr>
										<tr>
											<td>6</td>
											<td>FGH</td>
											<td class="text-right">
												12.803.927.383,-
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane" id="link7">
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<td>1</td>
											<td>PT ZXC</td>
											<td class="text-right">
												15.429.905.573,48
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>PT ASD</td>
											<td class="text-right">
												14.476.791.113,42
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>PT RST</td>
											<td class="text-right">
												10.795.219.263,71
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>PT BNM</td>
											<td class="text-right">
												9.750.294.228,77
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>PT SDF</td>
											<td class="text-right">
												8.609.398.079,67
											</td>
										</tr>
										<tr>
											<td>6</td>
											<td>PT WER</td>
											<td class="text-right">
												8.231.094.451,81
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-5">
			<!-- Column -->
			<div class="card card-default">
				<div class="card-header">
					<div class="card-actions">
						<a class="" data-action="collapse"><i class="ti-minus"></i></a>
						<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
						<a class="btn-close" data-action="close"><i class="ti-close"></i></a>
					</div>
					<h4 class="card-title m-b-0">Statistik Produksi</h4>
				</div>
				<?php
					$BP
				?>
				<div class="card-body collapse show">
				<div id="morris-donut-chart" class="ecomm-donute" style="height: 317px;"></div>
					<ul class="list-inline m-t-20 text-center">
					<li >
						<h6 class="text-muted"><i class="fa fa-circle text-info"></i> Ijin Import</h6>
						<h4 class="m-b-0">300.000<span><sup style="font-size: 10px"> Ton</sup></span></h4>
					</li>
					<li>
						<h6 class="text-muted"> <i class="fa fa-circle text-success"></i> Realisasi Import</h6>
						<h4 class="m-b-0">127.000<span><sup style="font-size: 10px"> Ton</sup></span></h4>
					</li>
				</ul>

				</div>
			</div>
			<!-- Column -->
			
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End PAge Content -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Right sidebar -->
	<!-- ============================================================== -->
	<!-- .right-sidebar -->
	
	<!-- ============================================================== -->
	<!-- End Right sidebar -->
	<!-- ============================================================== -->
</div>

	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- footer -->
	<!-- ============================================================== -->
<?php $this->load->view('back/template/footer'); ?>
<?php $this->load->view('back/template/endscript'); ?>
<script src="<?php echo base_url('assets/') ?>plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/raphael/raphael-min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/morrisjs/morris.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		"use strict";
// ============================================================== 
// Product chart
// ============================================================== 
Morris.Area({
	element: 'morris-area-chart2',
	data: [{
		period: 'Mei',
		Tanam: 0,
		Produksi: 0,
		
	}, {
		period: 'Jun',
		Tanam: 130,
		Produksi: 100,
		
	}, {
		period: 'Jul',
		Tanam: 30,
		Produksi: 60,
		
	}, {
		period: 'Agu',
		Tanam: 30,
		Produksi: 200,
		
	}, {
		period: 'Sep',
		Tanam: 200,
		Produksi: 150,
		
	}, {
		period: 'Okt',
		Tanam: 105,
		Produksi: 90,
		
	},
	 {
		period: 'Nov',
		Tanam: 250,
		Produksi: 150,
	   
	}],
	xkey: 'period',
	ykeys: ['Tanam', 'Produksi'],
	labels: ['Tanam', 'Produksi'],
	pointSize: 0,
	fillOpacity: 0.4,
	pointStrokeColors:['#b4becb', '#01c0c8'],
	behaveLikeLine: true,
	gridLineColor: '#e0e0e0',
	lineWidth: 0,
	smooth: true,
	hideHover: 'auto',
	lineColors: ['#b4becb', '#01c0c8'],
	resize: true
	
});
// ============================================================== 
// Morris donut chart
// ==============================================================       
Morris.Donut({
	element: 'morris-donut-chart',
	data: [{
		label: "B.Produksi",
		value: <?php if(empty($get_jml_beban_tanam->jmlbeban)){echo '0';}else{echo number_format($get_jml_beban_tanam->jmlbeban, 0, ".", ".");} ?>,
	},{
		label: "R.Produksi",
		value: <?php if(empty($get_jml_all_produksi->jmlproduksi)){echo '0';}else{echo number_format($get_jml_all_produksi->jmlproduksi, 0, ".", ".");} ?>
	}],
	resize: true,
	colors:['#1976d2', '#26c6da']
});
// ============================================================== 
// sales difference
// ==============================================================

// ============================================================== 
// sparkline chart
// ==============================================================
var sparklineLogin = function() { 
   $('#sparklinedash').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
		type: 'bar',
		height: '50',
		barWidth: '2',
		resize: true,
		barSpacing: '5',
		barColor: '#26c6da'
	});
	 $('#sparklinedash2').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
		type: 'bar',
		height: '50',
		barWidth: '2',
		resize: true,
		barSpacing: '5',
		barColor: '#7460ee'
	});
	  $('#sparklinedash3').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
		type: 'bar',
		height: '50',
		barWidth: '2',
		resize: true,
		barSpacing: '5',
		barColor: '#03a9f3'
	});
	   $('#sparklinedash4').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
		type: 'bar',
		height: '50',
		barWidth: '2',
		resize: true,
		barSpacing: '5',
		barColor: '#f62d51'
	});
   
}
var sparkResize;

	$(window).resize(function(e) {
		clearTimeout(sparkResize);
		sparkResize = setTimeout(sparklineLogin, 500);
	});
	sparklineLogin();
		
	});
</script>

</body>

</html>
