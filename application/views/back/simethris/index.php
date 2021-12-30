<?php $this->load->view('back/template/meta'); ?>
<!-- ============================================================== -->
<!-- Add Style or custom CSS Here -->
<?php $this->load->view('back/template/header'); ?>
<?php $this->load->view('back/template/sidebar'); ?>
        <div class="page-wrapper">
			<div class="row page-titles">
					<div class="col-md-5 align-self-center">
						<h3 class="text-themecolor">Dashboard SiMETHRIS</h3>
					</div>
					<div class="col-md-7 align-self-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
							<li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
							<li class="breadcrumb-item active">siMeTHRis</li>
						</ol>
					</div>
					<div class="col-md-9">
				<!-- left column -->	
				
						<h5>
							<small class="text-muted">Sistem Monitoring Wajib Tanam Hortikultura Strategis</small>
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
				
				<div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6"> <!-- -->
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-8"><h2><?php echo $get_all_lo2->jml_lo;?> <i class="ti-angle-down font-14 text-danger"></i></h2>
                                        <h6>wajib tanam</h6></div>
                                    <div class="col-4 align-self-center text-right  p-l-0">
                                        <div id="sparklinedash3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6"> <!-- -->
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-8"><h2 class=""><?php if(empty($get_jml_import->vimport)){echo '0';}else{echo number_format($get_jml_import->vimport, 0, ".", ".");} ?> <span><sup style="font-size: 10px"> Ton</sup></span><i class="ti-angle-up font-14 text-success"></i></h2>
                                        <h6>Volume RIPH</h6></div>
                                    <div class="col-4 align-self-center text-right p-l-0">
                                        <div id="sparklinedash"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6"> <!-- -->
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-8"><h2><?php if(empty($get_jml_real_tanam->jmlluas)){echo '0';}else{echo number_format($get_jml_real_tanam->jmlluas, 0, ".", ".");} ?> <span><sup style="font-size: 10px"> Ha</sup></span><i class="ti-angle-up font-14 text-success"></i></h2>
                                        <h6>Realisasi Tanam</h6></div>
                                    <div class="col-4 align-self-center text-right p-l-0">
                                        <div id="sparklinedash2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6"> <!-- -->
                        <div class="card">
                            <div class="card-body">
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-8"><h2><?php if(empty($get_jml_all_produksi->jmlproduksi)){echo '0';}else{echo number_format($get_jml_all_produksi->jmlproduksi, 0, ".", ".");} ?><span><sup style="font-size: 10px"> Ton</sup></span> <i class="ti-angle-down font-14 text-danger"></i></h2>
                                        <h6>Realisasi Produksi</h6></div>
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
										<h6 class="text-muted"><i class="fa fa-circle text-info"></i> Kewajiban</h6>
										<h4 class="m-b-0"><?php if(empty($get_jml_beban_tanam->jmlbeban)){echo '0';}else{echo number_format($get_jml_beban_tanam->jmlbeban, 0, ".", ".");} ?></h4>
									</li>
									<li>
										<h6 class="text-muted"> <i class="fa fa-circle text-success"></i> Realisasi</h6>
										<h4 class="m-b-0"><?php if(empty($get_jml_all_produksi->jmlproduksi)){echo '0';}else{echo number_format($get_jml_all_produksi->jmlproduksi, 0, ".", ".");} ?></h4>
									</li><!--
									<h6 text="center"><small>(Data per Oktober 2021)</small></h6> -->
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
	</script>

    <script>
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
	</script>
      
    <script>
	Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Kewajiban",
            value: <?php if(empty($get_jml_beban_tanam->jmlbeban)){echo '0';}else{echo number_format($get_jml_beban_tanam->jmlbeban, 0, ".", ".");} ?>,
        },{
            label: "Realisasi",
            value: <?php if(empty($get_jml_all_produksi->jmlproduksi)){echo '0';}else{echo number_format($get_jml_all_produksi->jmlproduksi, 0, ".", ".");} ?>
        }],
        resize: true,
        colors:['#1976d2', '#26dad2']
    });
	</script>
 
<script>
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
