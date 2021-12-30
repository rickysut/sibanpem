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

    <!-- Content Wrapper. Contains page content -->

    <div class="container-fluid">
        <!-- Main content -->
        <div style="padding-top:20px"
            class="row justify-content-center align-items-center d-flex-row text-center h-100">

            <section class="content">
                <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>

                <?php echo form_open($action) ?>
                <?php echo validation_errors() ?>
                <div class="box box-primary">
                    <div class="box-body">
                        <?php if(is_superadmin()){ ?>
                        <div class="form-group" style="text-align:left"><label>User (*)</label>
                            <?php echo form_dropdown('', $get_all_users, '', $user_id) ?>
                        </div>
                        <?php } ?>
                        <div class="form-group" style="text-align:left"><label>New Password (*)</label>
                            <?php echo form_password($new_password) ?>
                        </div>
                        <div class="form-group" style="text-align:left"><label>Confirm New Password</label>
                            <?php echo form_password($confirm_new_password) ?>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" name="button" class="btn btn-success"><i class="fa fa-save"></i>
                            <?php echo $btn_submit ?></button>
                        <button type="reset" name="button" class="btn btn-danger"><i class="fa fa-refresh"></i>
                            <?php echo $btn_reset ?></button>
                    </div>
                </div>
                <?php echo form_close() ?>

            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view('back/template/footer'); ?>
    <?php $this->load->view('back/template/endscript'); ?>
    <?php $this->load->view('back/template/endbody'); ?>