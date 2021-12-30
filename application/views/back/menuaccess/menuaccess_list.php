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
						Menu Access</li>
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
						  <th style="text-align: center">Usertype</th>
						  <th style="text-align: center">Menu</th>
						  <th style="text-align: center">SubMenu</th>
						  <th style="text-align: center">Action</th>
						</tr>
					  </thead>
					  <tbody>
						<?php $no = 1; foreach($get_all as $menu_access){
						  // action
						  $edit = '<a href="'.base_url('menuaccess/update/'.$menu_access->id_menu_access).'" class="btn btn-warning"><i class="fa fa-pencil"></i></a>';
						  $delete = '<a href="'.base_url('menuaccess/delete/'.$menu_access->id_menu_access).'" onClick="return confirm(\'Are you sure?\');" class="btn btn-danger"><i class="fa fa-trash"></i></a>';
						?>
						  <tr>
							<td style="text-align: center"><?php echo $no++ ?></td>
							<td style="text-align: left"><?php echo $menu_access->usertype_name ?></td>
							<td style="text-align: center"><?php echo $menu_access->menu_name ?></td>
							<td style="text-align: center"><?php echo $menu_access->submenu_name ?></td>
							<td style="text-align: center"><?php echo $edit ?> <?php echo $delete ?></td>
						  </tr>
						<?php } ?>
					  </tbody>
					  <tfoot>
						<tr>
						  <th style="text-align: center">No</th>
						  <th style="text-align: center">Usertype</th>
						  <th style="text-align: center">Menu</th>
						  <th style="text-align: center">SubMenu</th>
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