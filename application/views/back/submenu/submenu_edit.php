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
			  <?php echo validation_errors() ?>
			  <div class="card">
				<?php echo form_open($action) ?>
				  <div class="card-body">
					<div class="form-group"><label>Menu Name (*)</label>
					  <?php echo form_dropdown('', $get_all_combobox_menu, $submenu->menu_id, $menu_id) ?>
					</div>
					<div class="form-group"><label>SubMenu Name (*)</label>
					  <?php echo form_input($submenu_name, $submenu->submenu_name) ?>
					</div>
					<div class="form-group"><label>URL (*)</label>
					  <?php echo form_input($submenu_url, $submenu->submenu_url) ?>
					</div>
					<div class="form-group"><label>Order No (*)</label>
					  <?php echo form_input($order_no, $submenu->order_no) ?>
					</div>
				  </div>
				  <?php echo form_input($id_submenu, $submenu->id_submenu) ?>
				  <div class="card-footer">
					<button type="submit" name="button" class="btn btn-success"><i class="fa fa-save"></i> <?php echo $btn_submit ?></button>
					<button type="reset" name="button" class="btn btn-danger"><i class="fa fa-refresh"></i> <?php echo $btn_reset ?></button>
				  </div>
				  <!-- /.box-body -->
				<?php echo form_close() ?>
			  </div>
			</div>
<?php $this->load->view('back/template/footer'); ?>
<?php $this->load->view('back/template/endscript'); ?>
<?php $this->load->view('back/template/endbody'); ?>