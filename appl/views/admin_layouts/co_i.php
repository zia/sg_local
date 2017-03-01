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
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Contact <small>(Information)</small>
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
                    $attributes = array('role' => 'form');
                    echo form_open('admin/validate_contact', $attributes);
                ?>

                    <div class="form-group">
                        <label>Page Heading *</label>
                        <input type="text" name="p_h" value="<?= $contact->page_heading; ?>" class="form-control"  placeholder="Enter text" required="required">
                        <p class="help-block">Heading For 'Contact Us' section.</p>
                    </div>

                    <div class="form-group">
                        <label>Office Heading</label>
                        <input type="text" name="o_h" value="<?= $contact->office_heading; ?>" class="form-control"  placeholder="Enter text">
                        <p class="help-block">Heading For Office.(Ex: Head office, Area Office)</p>
                    </div>

                    <div class="form-group">
                        <label>Phone *</label>
                        <textarea name="phone" id="phone" class="form-control" rows="5"  placeholder="Enter text"  required="required"><?= $contact->phone; ?></textarea>
                        <p class="help-block">Seperate with commas,if multiple Phone exists.</p>
                    </div>

                    <div class="form-group">
                        <label>Fax *</label>
                        <textarea name="fax" id="fax" class="form-control" rows="5"  placeholder="Enter text"  required="required"><?= $contact->fax; ?></textarea>
                        <p class="help-block">Seperate with commas,if multiple Fax exists.</p>
                    </div>

                    <div class="form-group">
                        <label>Email *</label>
                        <textarea name="email" id="email" class="form-control" rows="5"  placeholder="Enter text"  required="required"><?= $contact->email; ?></textarea>
                        <p class="help-block">Seperate with commas,if multiple Email exists.</p>
                    </div>

                    <div class="form-group">
                        <label>Address *</label>
                        <textarea name="address" id="address" class="form-control" rows="10"  placeholder="Enter text"  required="required"><?= $contact->address; ?></textarea>
                        <p class="help-block">Adress of the Office.</p>
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