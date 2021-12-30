<?php $this->load->view('back/template/meta'); ?>
<!-- ============================================================== -->
<!-- Add Style or custom CSS Here -->
<!-- ============================================================== -->
<?php $this->load->view('back/template/header'); ?>
<?php $this->load->view('back/template/sidebar'); ?>
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
	
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- Row -->
	<div class="container-fluid">
		<div class="card card-default">
			<div class="card-body bg-white">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Carousel items -->
					<div class="container">
						<div class="col-12">
							<div class="carousel-inner"> <!-- "carousel-inner" -->
								<div class="carousel-item active">
									<?php $this->load->view('back/ews/areachart'); ?>
								</div>
								<div class="carousel-item flex-column">
									<?php $this->load->view('back/ews/prov_list'); ?>
								</div>
								<div class="carousel-item flex-column">
									<?php $this->load->view('back/ews/stat_prod'); ?>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- End PAge Content -->
	</div>
<?php $this->load->view('back/template/footer'); ?>
<?php $this->load->view('back/template/endscript'); ?>
<?php $this->load->view('back/template/endbody'); ?>
</div>


<script src="<?php echo base_url('assets/') ?>plugins/raphael/raphael-min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/morrisjs/morris.min.js"></script>

<script>
  var serries = JSON.parse(`<?php echo $smv_product; ?>`);
  console.log(serries);
  var data = serries,
    config = {
      data: data,
      xkey: ['Z'],
      ykeys: ['Y'],
      labels: ['Bantuan disalurkan'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ef5350'],
      pointStrokeColors: ['black'],
      lineColors:['#007bff','#ef5350']
  };
 
 config.element = 'area-chart';
 Morris.Area(config);
 
 config.element = 'line-chart';
 Morris.Line(config);
</script>
<script>
new Morris.Donut({
  element: "grafis-donat",
  resize: true,

  data: [
    { label: "Banjir", value: 2 },
    { label: "Longsong", value: 5 },
    { label: "Kemarau", value: 3 },
    { label: "Kebakaran", value: 3 },
  ]
});
</script>
