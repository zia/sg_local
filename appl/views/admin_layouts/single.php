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
                            <i class="fa fa-inbox" aria-hidden="true"></i> Blog <small>(id # <?=$blog->id?>)</small>
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
                <i class="fa fa-header" aria-hidden="true"></i> Title &nbsp;&nbsp;&nbsp;: <strong><?=$blog->title?></strong>
                <br>
                <i class="fa fa-location-arrow" aria-hidden="true"></i> From &nbsp;&nbsp;: <?=$blog->location?>
                <br>
                <i class="fa fa-clock-o" aria-hidden="true"></i> Date&nbsp;&nbsp;&nbsp;: <strong><?=$blog->date?></strong>
                <hr>
                <h3>Content:</h3>
                <p align="justify">
                    <?=$blog->content?>
                </p>
                <hr>
                <a type="button" href="<?=base_url()?>admin/update_blog/<?=$blog->id?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</a>
                
                <a type="button" href="<?=base_url()?>admin/d_b/<?=$blog->id?>" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
    <?=br(2)?>

</div>
<!-- /#page-wrapper -->