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
                            <i class="fa fa-inbox" aria-hidden="true"></i> Message <small>(id # <?=$message->id?>)</small>
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
                <i class="fa fa-user" aria-hidden="true"></i> From &nbsp;&nbsp;&nbsp;: <strong><?=$message->name?></strong> &lt; <u><?=$message->email?></u> &gt;
                <br>
                <i class="fa fa-phone" aria-hidden="true"></i> Phone &nbsp;: <?=$message->phone?>
                <br>
                <i class="fa fa-lock" aria-hidden="true"></i> To &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Admin &lt; <u>admin@salmagroup.com</u> &gt;
                <br>
                <i class="fa fa-clock-o" aria-hidden="true"></i> Date&nbsp;&nbsp;&nbsp;&nbsp;: <strong><?=$message->date?></strong>
                <hr>
                <h3>Message:</h3>
                <p align="justify">
                    <?=$message->msg?>
                </p>
                <hr>
                <a href="#" data-toggle="modal" data-target="#m<?=$message->id?>" type="button" class="btn btn-primary btn-xs"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                <a type="button" href="<?=base_url()?>admin/d_m/<?=$message->id?>" class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-star" aria-hidden="true"></i> Bookmark</button>

                <!-- Reply Modal -->
                <div id="m<?=$message->id?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header" style="background-color:#002233;color:#fff;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-reply" aria-hidden="true"></i> Reply <?=$message->name?></h4>
                      </div>
                      <div class="modal-body" style="background-color:#527a7a;">
                        <?=form_open('admin/r_m/'.$message->id, 'role="form"');?>
                          <div class="form-group">
                            <label for="from" style="color:#f2f2f2;"><strong>*From :</strong></label>
                            <input type="text" class="form-control" name="from" value="admin@salmagroup.com" required="required" disabled>
                          </div>
                          <div class="form-group">
                            <label for="to" style="color:#f2f2f2;"><strong>*To :</strong></label>
                            <input type="text" class="form-control" name="to" value="<?=$message->email?>" required="required" disabled>
                          </div>

                          <div class="form-group">
                            <label for="reply" style="color:#f2f2f2;"><strong>* Reply</strong></label>
                            <textarea name="rep" class="form-control" rows="10"></textarea>
                          </div>

                          <div class="row">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary">Reply <i class="fa fa-reply" aria-hidden="true"></i></button>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel &times;</button>
                            </div>
                          </div>
                          
                        <?=form_close()?>
                      </div>
                      <div class="modal-footer" style="background-color:#f0f5f5;">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="pull-left">Be Aware Of Scams !</p>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Close &times;</button>
                            </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- Modal Ends -->
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