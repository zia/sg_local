<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <?php if($this->session->tempdata('error')){ ?>
                    <div class="alert alert-danger fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Warning !</strong> <?=$this->session->tempdata('error')?>
                    </div>
                <?php } ?>
                <h1 class="page-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <i class="fa fa-inbox" aria-hidden="true"></i> Admin <small>(Profile)</small>
                        </div>
                        <div class="col-sm-6" align="right">
                            
                        </div>
                    </div>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?=base_url();?>/admin/xQzMe">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Forms
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <?php if($this->session->flashdata('error')){?>

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Warning !</strong> <?php echo $this->session->flashdata('error'); ?>
                </div>
            </div>
        </div>

        <?php } ?>

        <?php if($this->session->flashdata('success')){?>

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success !</strong> <?php echo $this->session->flashdata('success'); ?>
                </div>
            </div>
        </div>

        <?php } ?>

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <i class="fa fa-user" aria-hidden="true"></i> Name &nbsp;&nbsp;&nbsp;: <strong><?=$profile->name?></strong>
                <br>
                <i class="fa fa-phone" aria-hidden="true"></i> Phone &nbsp;&nbsp;:
                <strong>
                    <?=$profile->phone?>
                </strong>
                <br>
                <i class="fa fa-envelope" aria-hidden="true"></i> Email &nbsp;&nbsp;&nbsp;:
                <strong>
                    <?=$profile->email?>
                </strong>
                <br>
                <i class="fa fa-calendar" aria-hidden="true"></i> From &nbsp;&nbsp;&nbsp;:
                <strong>
                    <?php
                        $unix = mysql_to_unix($profile->created);
                        $datestring = "%d.%m.%Y";
                        echo mdate($datestring, $unix);
                    ?>
                </strong>
                <br>
                <i class="fa fa-clock-o" aria-hidden="true"></i> Role&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <strong>
                <?php
                    if($profile->role){
                        echo 'Super Admin';
                    }
                    elseif (!$profile->role) {
                        echo 'Sub Admin';
                    }
                ?></strong>
                <br>
                <i class="fa fa-clipboard" aria-hidden="true"></i> Note &nbsp;&nbsp;&nbsp;&nbsp;:
                <br>
                <blockquote>
                    <?=$profile->notes?>
                </blockquote>
                <hr>
                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#edit_admin"><i class="fa fa-edit" aria-hidden="true"></i> Edit Info
                </button>
                <?php
                    if($_SESSION['role']){
                ?>
                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#add_admin"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Admin
                </button>
                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_admin"><i class="fa fa-times" aria-hidden="true"></i> Delete Admin
                </button>
                <?php } ?>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <?=br(6)?>
                <img class="img-responsive img-thumbnail" style="opacity:0.5;" src="<?=base_url()?>assets/images/q.jpg" alt="Logo">
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
    <?=br(2)?>

</div>
<!-- /#page-wrapper -->