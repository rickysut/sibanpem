<?php $this->load->view('back/template/meta'); ?>
<!-- ============================================================== -->
<!-- Add Style or custom CSS Here -->
<!-- ============================================================== -->
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/') ?>dropify/dist/css/dropify.min.css">
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
						User Management</li>
						<li class="breadcrumb-item active"><?php echo $page_title ?></li>
					</ol>
				</div>
			</div>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
				<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>

				  <?php echo form_open_multipart($action) ?>
				  <?php echo validation_errors() ?>
					<div class="card">
					  <div class="card-header">
							PERSONAL
							<div class="card-actions">
								<a class="" data-action="collapse"><i class="ti-minus"></i></a>
								<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
								<a class="btn-close" data-action="close"><i class="ti-close"></i></a>
							</div>
						</div>
					  <div class="card-body collapse show">
						<div class="row">
						  <div class="col-sm-6">
							<div class="form-group"><label>Full Name (*)</label>
							  <?php echo form_input($name) ?>
							</div>
						  </div>
						  <div class="col-sm-6">
							<div class="form-group"><label>Gender</label>
							  <?php echo form_dropdown('', $gender_value, '', $gender) ?>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-lg-4">
							<div class="form-group"><label>Birthplace</label>
							  <?php echo form_input($birthplace) ?>
							</div>
						  </div>
						  <div class="col-lg-4">
							<div class="form-group"><label>Birthdate</label>
							  <?php echo form_input($birthdate) ?>
							</div>
						  </div>
						  <div class="col-lg-4">
							<div class="form-group"><label>Phone No.</label>
							  <?php echo form_input($phone) ?>
							</div>
						  </div>
						</div>
						<div class="form-group"><label>Address</label>
						  <?php echo form_textarea($address) ?>
						</div>
						<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Photo</h4>
                                <label for="input-file-now">Maximum file size is 2Mb</label>
                                <input type="file"  name="photo" id="photo" class="dropify" />
                            </div>
                        </div>
					  </div>
					  <div class="card-footer">
						<button type="submit" name="button" class="btn btn-success"><i class="fa fa-save"></i> <?php echo $btn_submit ?></button>
						<button type="reset" name="button" class="btn btn-danger"><i class="fa fa-refresh"></i> <?php echo $btn_reset ?></button>
					  </div>
					</div>

					<div class="card">
						<div class="card-header">
							AUTH
							<div class="card-actions">
								<a class="" data-action="collapse"><i class="ti-minus"></i></a>
								<a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
								<a class="btn-close" data-action="close"><i class="ti-close"></i></a>
							</div>
						</div>
					  <div class="card-body collapse show">
						<div class="row">
						  <div class="col-sm-6">
							<div class="form-group"><label>Username (*)</label>
							  <?php echo form_input($username) ?>
							</div>
						  </div>
						  <div class="col-sm-6">
							<div class="form-group"><label>Email (*)</label>
							  <?php echo form_input($email) ?>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-sm-6">
							<div class="form-group"><label>Password (*)</label>
							  <?php echo form_password($password) ?>
							</div>
						  </div>
						  <div class="col-sm-6">
							<div class="form-group"><label>Password Confirmation (*)</label>
							  <?php echo form_password($password_confirm) ?>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-sm-6">
							<div class="form-group"><label>Usertype (*)</label>
							  <?php echo form_dropdown('', $get_all_combobox_usertype, '', $usertype) ?>
							</div>
						  </div>
						  <div class="col-sm-6">
							<div class="form-group"><label>Data Access (*)</label>
							  <?php echo form_dropdown('', $get_all_combobox_data_access, '', $data_access_id) ?>
							</div>
						  </div>
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
<!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/') ?>select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/') ?>select2/dist/css/select2-flat-theme.min.css">
  <script src="<?php echo base_url('assets/plugins/') ?>select2/dist/js/select2.full.min.js"></script>

  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/') ?>bootstrap-datepicker/bootstrap-datepicker.min.css">
  <script src="<?php echo base_url('assets/plugins/') ?>bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url('assets/plugins/') ?>dropify/dist/js/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
		
		$('#birthdate').datepicker({
		  autoclose: true,
		  zIndexOffset: 9999
		})

		$("#data_access_id").select2({
		  placeholder: "- Please Choose Data Access -",
		  theme: "flat"
		})
    });
    </script>
<?php $this->load->view('back/template/endbody'); ?>
