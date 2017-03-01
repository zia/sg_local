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
                            <i class="fa fa-inbox" aria-hidden="true"></i> Activity <small>(id # <?=$activity->id?>)</small>
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
            <div class="col-lg-11">
                <i class="fa fa-user" aria-hidden="true"></i> Title &nbsp;&nbsp;&nbsp;: <strong><?=$activity->title?></strong>
                <br>
                <i class="fa fa-phone" aria-hidden="true"></i> Type &nbsp;:
                <strong>
                    <?php
                        if($activity->type == '0'){echo 'News';}
                        else if($activity->type == '1'){echo 'Event';}
                        else if($activity->type == '2'){echo 'Future Plan';}
                        else{echo 'Job Vacancy';}
                    ?>
                </strong>
                <br>
                <i class="fa fa-clock-o" aria-hidden="true"></i> Date&nbsp;&nbsp;&nbsp;&nbsp;: <strong><?=$activity->date?></strong>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <h3><i class="fa fa-rss" aria-hidden="true"></i> Content:</h3>
                <p align="justify">
                    <?=$activity->content?>
                </p>
                <hr>
                <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-star" aria-hidden="true"></i> Bookmark</button>
            </div>
            <div class="col-lg-4">
                <h3><i class="fa fa-image" aria-hidden="true"></i> Featured Image:</h3>
                <img class="img-responsive img-thumbnail" src="<?=base_url()?>assets/images/<?=$activity->img_path?>" alt="<?=$activity->img_path?>">
                <?=br(2)?>
                <button type="button" class="btn btn-info btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
    <?=br(2)?>

</div>
<!-- /#page-wrapper -->