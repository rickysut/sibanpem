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

			  <?php echo form_open($action) ?>
			  <?php echo validation_errors() ?>
				<div class="card">
          
				  <div class="card-body">
					<div class="form-group"><label>Usertype</label>
					  <?php echo form_dropdown('', $get_all_combobox_usertype, '', $usertype_id) ?>
					</div>
					<div class="form-group"><label>Menu</label>
					  <?php echo form_dropdown('', $get_all_combobox_menu, '', $menu_id) ?>
					</div>
					<div class="form-group"><label>SubMenu</label>
					  <?php echo form_dropdown('', array(''=>'- Choose Menu First -'), '', $submenu_id) ?>
					</div>
				  </div>
				  <div class="card-footer">
					<button type="submit" name="button" class="btn btn-success"><i class="fa fa-save"></i> <?php echo $btn_submit ?></button>
					<button type="reset" name="button" class="btn btn-danger"><i class="fa fa-refresh"></i> <?php echo $btn_reset ?></button>
				  </div>
				</div>
			  <?php echo form_close() ?>
			</div>
<?php $this->load->view('back/template/footer'); ?>
<?php $this->load->view('back/template/endscript'); ?>
<?php $this->load->view('back/template/footer'); ?>
  <script type="text/javascript">
    function showSubmenu()
    {
      menu_id = document.getElementById("menu_id").value;
      $.ajax({
        url: "<?php echo base_url() ?>submenu/choose_submenu/"+menu_id+"",
        success: function(response){
          $("#submenu_id").html(response);
        },
        dataType: "html"
      });
      return false;
    }
  </script>
<?php $this->load->view('back/template/endbody'); ?>
