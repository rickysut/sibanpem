<?php $this->load->view('back/template/meta'); ?>
<!-- ============================================================== -->
<!-- Add Style or custom CSS Here -->

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
  </style>
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/dropify/dist/css/dropify.min.css">
<!-- ============================================================== -->

<!-- HEADER  -->
<!-- ============================================================== -->
<?php $this->load->view('back/template/header'); ?>
<!-- ============================================================== -->

<!-- HEADER BREADCRUMB -->
<!-- ============================================================== -->
<?php $this->load->view('back/template/sidebar'); ?>
<!-- ============================================================== -->

<!-- START PAGE WRAPPER -->
<!-- ============================================================== -->
<div class="page-wrapper">
<!-- ============================================================== -->

<!-- PAGE TITLE & BREADCRUMB -->
<!-- ============================================================== -->
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

<!-- SEARCH & FILTER SECTION -->
<!-- ============================================================== -->
<section id="searchFilter" class="container">
	<div class="card-body">
		<div class="row btn-group">
			<div class="col-lg-12 col-md-4">
				<a href="<?php echo base_url('sibanpem') ?>" type="button" class="btn btn-block btn-outline-info"><i class="fa">&#xf019;</i>  <small>Unduh berkas kontrak</small></a>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid row">
		<div class="col-12 m-t-30">
			<div class="card">
				<div class="card-body">
					<div class="card-header bg-white">
					<table class="table-responsive" style="margin-top: 10px">
						<tr>
							<td><a href="<?php echo base_url('sibanpem') ?>" type="button" class="btn btn-block"><small>Data Baru (0)</small></a></td>
							<td><a href="<?php echo base_url('sibanpem') ?>" type="button" class="btn btn-block"><small>Diproses (0)</small></a></td>
							<td><a href="<?php echo base_url('sibanpem') ?>" type="button" class="btn btn-block"><small>Dikirim (0)</small></a></td>
							<td><a href="<?php echo base_url('sibanpem') ?>" type="button" class="btn btn-block"><small>Diterima (0)</small></a></td>
							<td><a href="<?php echo base_url('sibanpem') ?>" type="button" class="btn btn-block"><small>Dikonfirmasi (0)</small></a></td>
							<td><a href="<?php echo base_url('sibanpem') ?>" type="button" class="btn btn-block"><small>Dibayar (0)</small></a></td>
							<td><a href="<?php echo base_url('sibanpem') ?>" type="button" class="btn btn-block"><small>Selesai (0)</small></a></td>
						</tr>
					</table>
					</div>
					<div type="text"class="row col-12">
						<input class="col-4 form-control text-muted" placeholder="cari data"></input>
						<i class="fa">&#xf002;</i>
					</div>
				</div>
			</div>
		</div>
</section>


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