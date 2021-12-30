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
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"><?php echo $page_title ?></h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
				Setting & Widget</li>
                <li class="breadcrumb-item active"><?php echo $page_title ?></li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<div class="container-fluid">
		<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
		<div class="card">
			<!-- /.box-header -->
			<div class="card-body">
			<div class="table-responsive">
				<table id="dataTable" class="table table-bordered table-striped">
				<thead>
					<tr>
					<th style="text-align: center">No</th>
					<th style="text-align: center">Time</th>
					<th style="text-align: center">Process</th>
					<th style="text-align: center">Created By</th>
					<th style="text-align: center">IP Address</th>
					<th style="text-align: center">User Agent</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; foreach($get_all as $log){ ?>
					<tr>
						<td style="text-align: center"><?php echo $no++ ?></td>
						<td style="text-align: left"><?php echo $log->created_at ?></td>
						<td style="text-align: left"><?php echo $log->content ?></td>
						<td style="text-align: center"><?php echo $log->created_by ?></td>
						<td style="text-align: center"><?php echo $log->ip_address ?></td>
						<td style="text-align: center"><?php echo $log->user_agent ?></td>
					</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
					<th style="text-align: center">No</th>
					<th style="text-align: center">Query</th>
					<th style="text-align: center">Created By</th>
					<th style="text-align: center">IP Address</th>
					<th style="text-align: center">User Agent</th>
					</tr>
				</tfoot>
				</table>
			</div>
			</div>
			<!-- /.box-body -->
		</div>
	</div>
<?php $this->load->view('back/template/footer'); ?>
<?php $this->load->view('back/template/endscript'); ?>
<script>
  $(document).ready( function () {
    $('#datatable').DataTable();
  } );
  </script>
<?php $this->load->view('back/template/endbody'); ?>
