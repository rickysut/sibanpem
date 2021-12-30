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
					<li class="breadcrumb-item">
					SubMenu Management</li>
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
					<div class="card-header"><a href="<?php echo $add_action ?>" class="btn btn-primary"><i class="fa fa-plus"></i> <?php echo $btn_add ?></a> </div>
					<!-- /.box-header -->
					<div class="card-body">
					  <div class="table-responsive">
						<table id="dataTable" class="table table-bordered table-striped">
						  <thead>
							<tr>
							  <th style="text-align: center">No</th>
							  <th style="text-align: center">SubMenu Name</th>
							  <th style="text-align: center">URL</th>
							  <th style="text-align: center">Order No</th>
							  <th style="text-align: center">Menu Name</th>
							  <th style="text-align: center">Action</th>
							</tr>
						  </thead>
						  <tbody>
							<?php $no = 1; foreach($get_all as $data){
							  // action
							  $edit = '<a href="'.base_url('submenu/update/'.$data->id_submenu).'" class="btn btn-warning"><i class="fa fa-pencil"></i></a>';
							  $delete = '<a href="'.base_url('submenu/delete/'.$data->id_submenu).'" onClick="return confirm(\'Are you sure?\');" class="btn btn-danger"><i class="fa fa-trash"></i></a>';
							?>
							  <tr>
								<td style="text-align: center"><?php echo $no++ ?></td>
								<td style="text-align: left"><?php echo $data->submenu_name ?></td>
								<td style="text-align: center"><?php echo $data->submenu_url ?></td>
								<td style="text-align: center"><?php echo $data->order_no ?></td>
								<td style="text-align: left"><?php echo $data->menu_name ?></td>
								<td style="text-align: center"><?php echo $edit ?> <?php echo $delete ?></td>
							  </tr>
							<?php } ?>
						  </tbody>
						  <tfoot>
							<tr>
							  <th style="text-align: center">No</th>
							  <th style="text-align: center">SubMenu Name</th>
							  <th style="text-align: center">URL</th>
							  <th style="text-align: center">Order No</th>
							  <th style="text-align: center">Menu Name</th>
							  <th style="text-align: center">Action</th>
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

