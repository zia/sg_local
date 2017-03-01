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
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Introduction <small>(About Us)</small>
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

                <?php
                    $query = $this->db->get('intro');
                    $count = $query->num_rows();
                    $row = $query->row();
                    $attributes = array('role' => 'form');
                    echo form_open_multipart('admin/add_intro_validation', $attributes);
                ?>

                    <div class="form-group">
                        <label>Title *</label>
                        <input type="text" name="title" value="<?= $row->title; ?>" class="form-control"  placeholder="Enter text" required="required">
                        <p class="help-block">Introduction Heading For 'About us' section.</p>
                    </div>

                    <div class="form-group">
                        <label>Sub-Title</label>
                        <input type="text" name="subtitle" value="<?= $row->subtitle; ?>" class="form-control"  placeholder="Enter text">
                        <p class="help-block">Introduction Sub-Heading For 'About us' section.(If any)</p>
                    </div>

                    <div class="form-group">
                        <label>Content *</label>
                        <textarea name="content" id="cont" class="form-control" rows="10"  placeholder="Enter text"  required="required"><?= $row->content; ?></textarea>
                        <p class="help-block">Introduction content For 'About us' section.</p>
                    </div>

                    <div class="form-group">
                        <label>Featured-Image (Max: 270 x 120)</label>
                        <input type="file" name="intro_img">
                        <p class="help-block">Featured Image For 'About us' introduction section.</p>
                    </div>

                    <?php if(!$count){ ?>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <?php }else{?>
                    <button type="submit" class="btn btn-success">Update</button>
                    <?php } ?>
                    
                    <button type="reset" class="btn btn-danger">Reset</button>
                <?php
                    echo form_close();
                ?>
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

</div>
<!-- /#page-wrapper -->