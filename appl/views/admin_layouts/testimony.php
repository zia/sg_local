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
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Testimonials <small>(About Us)</small>
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
                    $query = $this->db->get('testimonial');
                    $count = $query->num_rows();
                    $row = $query->row();
                    $attributes = array('role' => 'form');
                    echo form_open_multipart('admin/add_testimony_validation', $attributes);
                ?>

                    <div class="form-group">
                        <label>Title*</label>
                        <input type="text" name="title" value="" class="form-control"  placeholder="Enter text" required="required">
                        <p class="help-block">Title of the Testimonial portion For 'About us' section.</p>
                    </div>

                    <div class="form-group">
                        <label>Testimonial-Image (Max: 22 x 15)</label>
                        <input type="file" name="testimony_img">
                        <p class="help-block">Testimonial Image For 'About us' section.</p>
                    </div>

                    <div class="form-group">
                        <label>Content*</label>
                        <textarea name="content" id="cont" class="form-control" rows="10"  placeholder="Enter text"  required="required"></textarea>
                        <p class="help-block">Testimonial content For 'About us' section.</p>
                    </div>

                    <div class="form-group">
                        <label>Name*</label>
                        <input type="text" name="nome" value="" class="form-control"  placeholder="Enter text" required="required">
                        <p class="help-block">Name of the Testimonial person For 'About us' section.</p>
                    </div>

                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" value="" class="form-control"  placeholder="Enter text" required="">
                        <p class="help-block">Designation of the Testimonial person For 'About us' section.(If any)</p>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" id="cont" class="form-control" rows="10"  placeholder="Enter text"  required=""></textarea>
                        <p class="help-block">Person's Address For 'About us' section.</p>
                    </div>

                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" name="date" value="" class="form-control"  placeholder="Enter date" required="">
                        <p class="help-block">Date (dd/mm/yyyy) of the Testimonial gained For 'About us' section.(e.g. 22/07/2016)</p>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
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