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
				  <?php echo form_open_multipart($action) ?>
				  <?php echo validation_errors() ?>
					<div class="card">
					  <div class="card-body">
						<div class="form-group"><label>Company Name (*)</label>
						  <?php echo form_input($company_name, $company->company_name, $company_name) ?>
						</div>
						<div class="form-group"><label>Description (*)</label>
						  <?php echo form_textarea($company_desc, $company->company_desc, $company_desc) ?>
						</div>
						<div class="form-group"><label>Address (*)</label>
						  <?php echo form_textarea($company_address, $company->company_address, $company_address) ?>
						</div>
						<div class="form-group"><label>Maps (*)</label>
						  <!--?php echo form_textarea($company_maps, $company->company_maps, $company_maps) ?-->
						  <br>
						  <p><?php echo $company->company_maps ?></p>
						</div>
						<div class="row">
						  <div class="col-lg-4">
							<div class="form-group"><label>Phone (*)</label>
							  <?php echo form_input($company_phone, $company->company_phone, $company_phone) ?>
							</div>
						  </div>
						  <div class="col-lg-4">
							<div class="form-group"><label>Phone 2 (*)</label>
							  <?php echo form_input($company_phone2, $company->company_phone2, $company_phone2) ?>
							</div>
						  </div>
						  <div class="col-lg-4">
							<div class="form-group"><label>Fax</label>
							  <?php echo form_input($company_fax, $company->company_fax, $company_fax) ?>
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-lg-4">
							<div class="form-group"><label>Email</label>
							  <?php echo form_input($company_email, $company->company_email, $company_email) ?>
							</div>
						  </div>
						  <div class="col-lg-4">
							<div class="form-group"><label>Gmail</label>
							  <?php echo form_input($company_gmail, $company->company_gmail, $company_gmail) ?>
							</div>
						  </div>
						  <div class="col-lg-4">
							<div class="form-group"><label>Gmail Password</label>
							  <?php echo form_password($new_company_gmail_pass, '', $new_company_gmail_pass) ?>
							</div>
						  </div>
						</div>
						<div class="form-group"><label>Current Logo</label>
						  <p><img src="<?php echo base_url('assets/images/company/'.$company->company_photo_thumb) ?>" alt="current photo"></p>
						</div>
						<div class="form-group"><label>New Logo</label>
						  <input type="file" name="photo" id="photo" onchange="photoPreview(this,'preview')"/>
						  <p class="help-block">Maximum file size is 2Mb</p>
						  <b>Logo Preview</b><br>
						  <img id="preview" width="350px"/>
						</div>
					  </div>
					  <?php echo form_input($id_company, $company->id_company) ?>
					  <div class="card-footer">
						<button type="submit" name="button" class="btn btn-success"><i class="fa fa-save"></i> <?php echo $btn_submit ?></button>
						<button type="reset" name="button" class="btn btn-danger"><i class="fa fa-refresh"></i> <?php echo $btn_reset ?></button>
					  </div>
					</div>
				  <?php echo form_close() ?>
			</div>
<?php $this->load->view('back/template/footer'); ?>
<?php $this->load->view('back/template/endscript'); ?>
<script type="text/javascript">
    function photoPreview(photo,idpreview)
    {
      var gb = photo.files;
      for (var i = 0; i < gb.length; i++)
      {
        var gbPreview = gb[i];
        var imageType = /image.*/;
        var preview=document.getElementById(idpreview);
        var reader = new FileReader();
        if (gbPreview.type.match(imageType))
        {
          //jika tipe data sesuai
          preview.file = gbPreview;
          reader.onload = (function(element)
          {
            return function(e)
            {
              element.src = e.target.result;
            };
          })(preview);
          //membaca data URL gambar
          reader.readAsDataURL(gbPreview);
        }
          else
          {
            //jika tipe data tidak sesuai
            alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
          }
      }
    }
  </script>
<?php $this->load->view('back/template/endbody'); ?>
