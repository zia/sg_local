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
                            <i class="fa fa-list" aria-hidden="true"></i> Inbox <small>(List Of Messages)</small>
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
                        <i class="fa fa-table"></i> Tables
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
            <div class="col-lg-12">
                <div class="panel panel-info">
                    
                    <div class="panel-heading">
                        <h3 class="panel-title"><a data-toggle="collapse" href="#collapse"><i class="fa fa-plus-square fa-fw"></i></a> Inbox</h3>
                    </div>
                    <div id="collapse" class="panel-collapse collapse in">
                        <div class="panel-body">
                        <div class="table-responsive">
                            <?php
                                $this->table->set_heading('SL.', 'From', 'Message', 'Date','Action');
                                $cnt=0;

                                foreach($messages as $row) {
                                    $link = anchor('admin/d_m/'.$row->id , '<span class="glyphicon glyphicon-remove"></span> Delete',array('class' => 'btn btn-danger btn-xs'));
                                    $link_1 = anchor('#','<span class="glyphicon glyphicon-share"></span> Reply',
                                        array(
                                            'class' => 'btn btn-success btn-xs',
                                            'data-toggle'=>'modal',
                                            'data-target'=>'#m'.$row->id)
                                    );
                                    if(!$row->stat){
                                        $link_2 = anchor('admin/inbox/'.$row->id , '<span class="glyphicon glyphicon-envelope"></span> Open',array('class' => 'btn btn-primary btn-xs'));
                                    }
                                    else{
                                        $link_2 = anchor('admin/inbox/'.$row->id , '<span class="glyphicon glyphicon-envelope"></span> Open',array('class' => 'btn btn-warning btn-xs'));
                                    }

                                    $msg = word_limiter($row->msg,5);

                                    $this->table->add_row(
                                        ++$cnt+$page,
                                        $row->name.'<br>'.$row->phone.'<br>'.$row->email,
                                        $msg.'<br>'. $link_2,
                                        $row->date,
                                        $link. '&nbsp;'. $link_1
                                    );

                                ?>

                                    <!-- Modal -->
                                    <div id="m<?=$row->id?>" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header" style="background-color:#002233;color:#fff;">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><i class="fa fa-reply" aria-hidden="true"></i> Reply <?=$row->name?></h4>
                                          </div>
                                          <div class="modal-body" style="background-color:#527a7a;">
                                            <?=form_open('admin/r_m/'.$row->id, 'role="form"');?>
                                              <div class="form-group">
                                                <label for="from" style="color:#f2f2f2;"><strong>*From :</strong></label>
                                                <input type="text" class="form-control" name="from" value="admin@salmagroup.com" required="required" disabled>
                                              </div>
                                              <div class="form-group">
                                                <label for="to" style="color:#f2f2f2;"><strong>*To :</strong></label>
                                                <input type="text" class="form-control" name="to" value="<?=$row->email?>" required="required" disabled>
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

                                    <?php

                                }

                                $template = array(
                                        'table_open'            => '<table class="table table-bordered table-hover table-striped table-responsive">',

                                        'thead_open'            => '<thead>',
                                        'thead_close'           => '</thead>',

                                        'heading_row_start'     => '<tr>',
                                        'heading_row_end'       => '</tr>',
                                        'heading_cell_start'    => '<th style="text-align:center">',
                                        'heading_cell_end'      => '</th>',

                                        'tbody_open'            => '<tbody>',
                                        'tbody_close'           => '</tbody>',

                                        'row_start'             => '<tr>',
                                        'row_end'               => '</tr>',
                                        'cell_start'            => '<td align="center" style="vertical-align:middle">',
                                        'cell_end'              => '</td>',

                                        'row_alt_start'         => '<tr>',
                                        'row_alt_end'           => '</tr>',
                                        'cell_alt_start'        => '<td align="center" style="vertical-align:middle">',
                                        'cell_alt_end'          => '</td>',

                                        'table_close'           => '</table>'
                                );

                                $this->table->set_template($template);
                                echo $this->table->generate();
                            ?>
                        </div>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <div align="center">
            <?=$pagination?>
        </div>
        <?=br(10)?>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->