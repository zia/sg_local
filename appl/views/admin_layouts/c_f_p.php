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
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Create <small>(Profile)</small>
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

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Profiles</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th style="text-align:center;">#</th>
                                <th style="text-align:center;">Facts</th>
                                <th style="text-align:center;">Details</th>
                                <th style="text-align:center;">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                                $query = $this->db->get_where('f_profile',array('blog_id' => $this->uri->segment(3)));
                                $c = 1;
                                foreach($query->result() as $profile){
                            ?> 
                                  <tr>
                                    <td align="center"><?=$c?></td>
                                    <td align="center"><?=$profile->heading?></td>
                                    <td align="center"><?=$profile->info?></td>
                                    <td align="center">
                                        <a href="<?=base_url()?>admin/d_f_p/<?=$profile->id?>" type="button" class="btn btn-danger">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                            Remove
                                        </a>
                                    </td>
                                  </tr>
                            <?php $c++; } ?>

                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-primary" id="thatcher"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add More</button>
                            <?php
                                echo br(2);
                                $attributes = array('role' => 'form','class' => 'form','id' => 'thatcher_effect');
                                echo form_open_multipart('admin/a_f_p/'.$this->uri->segment(3), $attributes);
                            ?>

                                <div class="form-group">
                                    <label>Facts*</label>
                            
                                    <input type="text" name="title" value="" class="form-control"  placeholder="Enter text" required="required">
                            
                                    <p class="help-block">Content For The Facts Column</p>
                                </div>

                                <div class="form-group">
                                    <label>Detail*</label>
                            
                                    <input type="text" name="detail" value="" class="form-control"  placeholder="Enter text" required="required">
                            
                                    <p class="help-block">Content For The Details Column</p>
                                </div>


                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add</button>
                                <button type="reset" class="btn btn-danger"><i class="fa fa-minus-circle" aria-hidden="true"></i> Reset</button>
                            <?php
                                echo form_close();
                            ?>
                    </div>
                </div>
                <?=br(3)?>
            </div>
        </div>

        <?php if($this->session->flashdata('error')){?>

        <div class="row">
            <div class="col-lg-2"></div>
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
            <div class="col-lg-2"></div>
            <div class="col-lg-6">
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success !</strong> <?php echo $this->session->flashdata('success'); ?>
                </div>
            </div>
        </div>

        <?php } ?>

    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->