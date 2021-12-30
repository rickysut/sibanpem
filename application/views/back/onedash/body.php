<?php $this->load->view('back/template/meta'); ?>
<!-- ============================================================== -->
<!-- Add Style or custom CSS Here -->
<style>
.myappcontrol{z-index: 10; position: absolute; top: 10px; width: 100%; height: 20px; right: 5px}
ol.carousel-indicators li, ol.carousel-indicators li.active {width: 1rem;height: 1rem;margin: 0;border-radius: 50%;border: 0px; background: transparent;}
ol.carousel-indicators li {background: rgba(0,0,0,0.39);margin-left: .5rem;margin-right: .5rem;}
ol.carousel-indicators li.active {background: teal;}

</style>
<!-- ============================================================== -->
<?php $this->load->view('back/template/header-sample'); ?>
<?php $this->load->view('back/template/sidebar'); ?>

<div class="page-wrapper">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
	
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- Row -->
<!-- Carousel control -->
<div class="container">
	<div class="card card-default">
		<div class="card-body bg-white">
				<div class="myappcontrol">
					<a class="carousel-control carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
						<span class="fa fa-arrow-left text-danger" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control carousel-control-next" href="#myCarousel" role="button" data-slide="next">
						<span class="fa fa-arrow-right text-danger" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<!-- Carousel control Header -->
				<div class="align-self-center text-center text-info font-bold">MONITORING APLIKASI
				</div>
			
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="card-body bg-white">
		<!-- Carousel content -->
		<div id="myCarousel" class="carousel slide" data-interval="false">
			<div class="card card-default">
				<!-- indicators -->
				<!-- Data Slideshow -->
				<div class="carousel-inner">
					<div>
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
					</div>
					<div class="carousel-item active">
						<?php $this->load->view('back/sibanpem/dashboard/record-1'); ?>
					</div>
					<div class="carousel-item">
						<?php $this->load->view('back/onedash/areachart'); ?>
					</div>
					<div class="carousel-item">
						<?php $this->load->view('back/onedash/stat_prod'); ?>
					</div>
					<div class="carousel-item">
						<?php $this->load->view('back/onedash/prov_list'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End PAge Content -->

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

  data: [
    { label: "Banjir", value: 2 },
    { label: "Longsor", value: 5 },
    { label: "Kemarau", value: 3 },
    { label: "Kebakaran", value: 3 },
  ]
});
</script>
