<?php $this->load->view('back/template/meta'); ?>
<!-- ============================================================== -->
<!-- Add Style or custom CSS Here -->
<!-- ============================================================== -->

	<link rel="stylesheet" href="<?= base_url('assets/peta/')?>css/MarkerCluster.css" />
	<link rel="stylesheet" href="<?= base_url('assets/peta/')?>css/MarkerCluster.Default.css" />
	<link rel="stylesheet" href="<?= base_url('assets/peta/')?>css/leaflet.groupedlayercontrol.min.css" />
	
	<link rel="stylesheet" href="<?= base_url('assets/')?>plugins/leaflet/dist/leaflet.css" />
	<link rel="stylesheet" href="<?= base_url('assets/peta/')?>css/leaflet-geoman.css" />
	<link rel="stylesheet" href="<?= base_url('assets/peta/')?>css/L.Control.Locate.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/peta/')?>css/MarkerCluster.css" />
	<link rel="stylesheet" href="<?= base_url('assets/peta/')?>css/MarkerCluster.Default.css" />
	<link rel="stylesheet" href="<?= base_url('assets/peta/')?>css/leaflet-measure-path.css" />
	<link rel="stylesheet" href="<?= base_url('assets/peta/')?>css/mapbox-gl.css" />
	<link rel="stylesheet" href="<?= base_url('assets/peta/')?>css/leaflet.groupedlayercontrol.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/peta/')?>css/peta.css">
<?php $this->load->view('back/template/header'); ?>
<?php $this->load->view('back/template/sidebar'); ?>
		<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
			<?php
			//	$geojson = array('type' => 'FeatureCollection', 'features' => array());
				
			//	foreach($get_wilayah as $mypoly)
			//	{
			//		$properties = $mypoly;
			//		unset($properties['lat']);
			//		unset($properties['lng']);
			//		$feature = array(
			//			'type'	=> 'Feature',
			//			'geometry' => array(
			//				'type' => 'Point',
			//				'coordinates' => 
			//						$mypoly['lat'],
			//						$mypoly['lng']
									
			//				),
			//			'properties' => $properties
			//		);
			//		array_push($geojson['features'], $feature);
			//	}
			//var myJson = <?= json_encode($geojson,JSON_NUMERIC_CHECK); 
			?>
            <div class="row page-titles">
				<div class="col-md-5 align-self-center">
					<h3 class="text-themecolor">Dashboard SiBANPEM</h3>
				</div>
				<div class="col-md-7 align-self-center">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
				<div class="col-md-9">
				<!-- left column -->	
				
						<h5>
							<small class="text-muted">Sistem Informasi Bantuan Pemerintah untuk Hortikultura</small>
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
			<div
			</div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
				<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
				<?php $this->load->view('back/sibanpem/dashboard/record'); ?>
			</div>
<?php $this->load->view('back/template/footer'); ?>
<?php $this->load->view('back/template/endscript'); ?>
<script src="<?= base_url('assets/')?>plugins/leaflet/dist/leaflet.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/')?>peta/turf.min.js"></script>
<script src="<?= base_url('assets/')?>peta/leaflet-geoman.min.js"></script>
<script src="<?= base_url('assets/')?>peta/leaflet.filelayer.js"></script>
<script src="<?= base_url('assets/')?>peta/leaflet-providers.js"></script>
<script src="<?= base_url('assets/')?>peta/L.Control.Locate.min.js"></script>
<script src="<?= base_url('assets/')?>peta/leaflet.markercluster.js"></script>
<script src="<?= base_url('assets/')?>peta/peta.js"></script>
<script src="<?= base_url('assets/')?>peta/mapbox-gl.js"></script>
<script src="<?= base_url('assets/')?>peta/leaflet-mapbox-gl.js"></script>
<script src="<?= base_url('assets/')?>peta/leaflet.groupedlayercontrol.min.js"></script>
<script src="<?= base_url('assets/')?>peta/leaflet.browser.print.js"></script>
<script src="<?= base_url('assets/')?>peta/leaflet.browser.print.utils.js"></script>
<script src="<?= base_url('assets/')?>peta/leaflet.browser.print.sizes.js"></script>
<script src="<?= base_url('assets/')?>peta/dom-to-image.min.js"></script>
<script src="<?= base_url('assets/')?>plugins/Chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/peta/')?>geojson_indonesia.js"></script>
<script>
	$(document).ready(function() {
		$('#dataTable').dataTable( {
			"filter": false,
			"info" : false,
			"scrollY": "385px",
			"responsive": 'true',
			"paging": false,
			"bSort" : false,
			"fnDrawCallback": function ( oSettings ) {
				$(oSettings.nTHead).hide();
			}
		});
		
		// Maping
		var posisi = [-1.0546279422758742,116.71875000000001];
		var zoom   = 5;
		
		var map = L.map('visitfromworld').setView(posisi, zoom);
		var marker_provinsi = [];
		var baseLayers = getBaseLayers(map, 'pk.eyJ1Ijoic2hpc2hlbXVsIiwiYSI6ImNrdXU2eGk1MzFvODAzMHM3Y2xoZWU2YjMifQ.zdtiMkI6oSi8mfO6NTawiA');
		geoLocation(map);
		cetakPeta(map);
		L.control.scale().addTo(map);
		var mainlayer = L.control.layers(baseLayers, null, {position: 'topleft', collapsed: true}).addTo(map);
		
		function getColor(d) {
		return 	d == 1 ? '#E2F516' :
				d == 2 ? '#6AFB92' :
				d == 3 ? '#046307' :
						   '#F2DBA7';
		}

		function style(feature) {
			return {
				fillColor: getColor(2),
				weight: 1,
				opacity: 1,
				color: 'white',
				dashArray: '0',
				fillOpacity: 0.5
			};
		}

		function highlightFeature(e) {
			var layer = e.target;
			layer.setStyle({
				weight: 1,
				color: '#666',
				dashArray: '',
				fillOpacity: 0.25
			});

			if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
				layer.bringToFront();
			}
			info.update(layer.feature.properties);
		}

		function resetHighlight(e) {
			geojson_indonesia.resetStyle(e.target);
			
			info.update();
		}

		function onEachFeature(feature, layer) {
			layer.on({
				mouseover: highlightFeature,
				mouseout: resetHighlight,
				'click': function (e) {
				  View_modal(e.target);
				}
			});
		}

		geojson_indonesia = L.geoJson(geojson_indonesia, {
			style: style,
			onEachFeature: onEachFeature
		}).addTo(map);

		info = L.control();

		info.onAdd = function (map) {
			this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
			this.update();
			return this._div;
		};

		// method that we will use to update the control based on feature properties passed
		info.update = function (props) {
			this._div.innerHTML = '<b>Provinsi: ' +  (props ?
				'' + props.NAME_1 +
				''  
				: '');
		};

		info.addTo(map);
		
		function View_modal(e) {
			var name =  e.feature.properties.NAME_1;
			var code =  e.feature.properties.KODE;
			window.location = "<?php echo base_url('sibanpem/View_detail_prov/')?>" + code;
		}
		// end maping
		

		
		var ctx2 = document.getElementById("totalIncomeChart").getContext("2d");
		var data2 = {
			labels: ["1771", "1773", "1774", "4581", "5886", "5886"],
			datasets: [
				{
					label: "Total BAST",
					fillColor: "#009efb",
					strokeColor: "#009efb",
					highlightFill: "#009efb",
					highlightStroke: "#009efb",
					data: [78033490278, 3168283190, 48300000, 76032698766,34090981097,20205606089]
				}
			]
		};
		
		var chart2 = new Chart(ctx2).Bar(data2, {
			scaleBeginAtZero : true,
			scaleShowGridLines : true,
			scaleGridLineColor : "rgba(0,0,0,.005)",
			scaleGridLineWidth : 0,
			scaleShowHorizontalLines: true,
			scaleShowVerticalLines: true,
			barShowStroke : true,
			barStrokeWidth : 0,
			tooltipCornerRadius: 2,
			barDatasetSpacing : 3,
			legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
			responsive: true
		});
		
		var ctx3 = document.getElementById("totalAKunChart").getContext("2d");
		var data3 = {
			labels: ["526112", "526113", "526115", "526311", "526321", "526322"],
			datasets: [
				{
					label: "Total BAST",
					fillColor: "#009efb",
					strokeColor: "#009efb",
					highlightFill: "#009efb",
					highlightStroke: "#009efb",
					data: [7941616195, 5570642597, 604625000, 175162288170, 6356922500, 5441852300]
				}
			]
		};
		
		var chart3 = new Chart(ctx3).Bar(data3, {
			scaleBeginAtZero : true,
			scaleShowGridLines : true,
			scaleGridLineColor : "rgba(0,0,0,.005)",
			scaleGridLineWidth : 0,
			scaleShowHorizontalLines: true,
			scaleShowVerticalLines: true,
			barShowStroke : true,
			barStrokeWidth : 0,
			tooltipCornerRadius: 2,
			barDatasetSpacing : 3,
			legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
			responsive: true
		});
		
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
<?php $this->load->view('back/template/endbody'); ?>
