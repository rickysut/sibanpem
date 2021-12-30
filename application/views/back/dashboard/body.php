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
    <div class="row page-titles m-b-0">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Beranda SIBANPEM</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>

            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- Row -->

    <div class="container-fluid">
        <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
        <?php $this->load->view('back/dashboard/record'); ?>
    </div>
    <?php $this->load->view('back/template/footer'); ?>
    <?php $this->load->view('back/template/endscript'); ?>
    <?php $this->load->view('back/template/endbody'); ?>