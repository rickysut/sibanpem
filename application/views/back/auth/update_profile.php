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
                    User Management</li>
                <li class="breadcrumb-item active"><?php echo $page_title ?></li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- Row -->
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid">
        <!-- Main content -->

        <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
        <?php echo validation_errors() ?>
        <div class="card">
            <?php echo form_open_multipart($action) ?>
            <div class="card-header">
                PERSONAL
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group"><label>Full Name (*)</label>
                            <?php echo form_input($name, $user->name, $user->name) ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group"><label>Gender</label>
                            <?php echo form_dropdown('', $gender_value, $user->gender, $gender) ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group"><label>Birthplace</label>
                            <?php echo form_input($birthplace, $user->birthplace) ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group"><label>Birthdate</label>
                            <?php echo form_input($birthdate, $user->birthdate) ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group"><label>Phone No.</label>
                            <?php echo form_input($phone, $user->phone) ?>
                        </div>
                    </div>
                </div>
                <div class="form-group"><label>Address</label>
                    <?php echo form_textarea($address, $user->address) ?>
                </div>
                <div class="form-group"><label>Current Photo</label>
                    <p><img src="<?php echo base_url('assets/images/users/'.$user->photo_thumb) ?>" width="200px"
                            alt="current photo"></p>
                </div>
                <div class="form-group"><label>New Photo</label>
                    <input type="file" name="photo" id="photo" onchange="photoPreview(this,'preview')" />
                    <p class="help-block">Maximum file size is 2Mb</p>
                    <b>Photo Preview</b><br>
                    <img id="preview" width="350px" />
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="button" class="btn btn-success"><i class="fa fa-save"></i>
                    <?php echo $btn_submit ?></button>
                <button type="reset" name="button" class="btn btn-danger"><i class="fa fa-refresh"></i>
                    <?php echo $btn_reset ?></button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                AUTH
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group"><label>Username (*)</label>
                            <?php echo form_input($username, $user->username) ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group"><label>Email (*)</label>
                            <?php echo form_input($email, $user->email) ?>
                        </div>
                    </div>
                </div>
                <div class="form-group"><label>Current Data Access (*)</label>
                    <p>
                        <?php
                                    if($get_all_data_access_old == NULL)
                                    {
                                        echo '<button class="btn btn-sm btn-danger">No Data</button>';
                                    }
                                    else
                                    {
                                        foreach($get_all_data_access_old as $data_access)
                                        {
                                            $string = chunk_split($data_access->data_access_name, 9, "</button> ");
                                            echo '<button class="btn btn-sm btn-success">'.$string;
                                        }
                                    }
                                    ?>
                    </p>
                </div>
            </div>
            <?php echo form_input($id_users, $user->id_users) ?>
            <div class="card-footer">
                <button type="submit" name="button" class="btn btn-success"><i class="fa fa-save"></i>
                    <?php echo $btn_submit ?></button>
                <button type="reset" name="button" class="btn btn-danger"><i class="fa fa-refresh"></i>
                    <?php echo $btn_reset ?></button>
            </div>
        </div>
        <?php echo form_close() ?>

    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
<?php $this->load->view('back/template/footer'); ?>
<?php $this->load->view('back/template/endscript'); ?>
<!-- Select2 -->
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/') ?>select2/dist/css/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/') ?>select2/dist/css/select2-flat-theme.min.css">
<script src="<?php echo base_url('assets/plugins/') ?>select2/dist/js/select2.full.min.js"></script>

<!-- bootstrap datepicker -->
<link rel="stylesheet"
    href="<?php echo base_url('assets/plugins/') ?>bootstrap-datepicker/bootstrap-datepicker.min.css">
<script src="<?php echo base_url('assets/plugins/') ?>bootstrap-datepicker/bootstrap-datepicker.min.js">
</script>

<script type="text/javascript">
$('#birthdate').datepicker({
    autoclose: true,
    zIndexOffset: 9999
})

$("#data_access_id").select2({
    placeholder: "- Please Choose Data Access -",
    theme: "flat"
});

function photoPreview(photo, idpreview) {
    var gb = photo.files;
    for (var i = 0; i < gb.length; i++) {
        var gbPreview = gb[i];
        var imageType = /image.*/;
        var preview = document.getElementById(idpreview);
        var reader = new FileReader();
        if (gbPreview.type.match(imageType)) {
            //jika tipe data sesuai
            preview.file = gbPreview;
            reader.onload = (function(element) {
                return function(e) {
                    element.src = e.target.result;
                };
            })(preview);
            //membaca data URL gambar
            reader.readAsDataURL(gbPreview);
        } else {
            //jika tipe data tidak sesuai
            alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
        }
    }
}
</script>


<?php $this->load->view('back/template/endbody'); ?>