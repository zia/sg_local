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
                            <i class="fa fa-list" aria-hidden="true"></i> Admin <small>(List Of Admins)</small>
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
                        <h3 class="panel-title"><a data-toggle="collapse" href="#collapse"><i class="fa fa-plus-square fa-fw"></i></a> Admin List</h3>
                    </div>
                    <div id="collapse" class="panel-collapse collapse in">
                        <div class="panel-body">
                        <div class="table-responsive">
                            <?php
                                $this->table->set_heading('SL.', 'Name', 'Email', 'Phone','Notes','Role','@','Last Login','Action');
                                $cnt=0;

                                foreach($admins as $row) {
                                    $link = anchor('#','<span class="glyphicon glyphicon-trash"></span> Delete',
                                        array(
                                            'class' => 'btn btn-danger btn-xs',
                                            'data-toggle'=>'modal',
                                            'data-target'=>'#m'.$row->id)
                                    );

                                    $row->role == 1 ? $role ='Super Admin' : $role = 'Sub Admin';

                                    $notes = word_limiter($row->notes,20);

                                    $unix = mysql_to_unix($row->created);
                                    $datestring = '%d.%m.%Y';
                                    $date = mdate($datestring,$unix);

                                    $unix = mysql_to_unix($row->last_login);
                                    $datestring = '%d.%m.%Y';
                                    $last = mdate($datestring,$unix);

                                    $this->table->add_row(
                                        ++$cnt,
                                        $row->name,
                                        $row->email,
                                        $row->phone,
                                        $notes,
                                        $role,
                                        $date,
                                        $last,
                                        $link
                                    );

                                ?>

                                    <!-- Modal -->
                                    <div id="m<?=$row->id?>" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header" style="background-color:#002233;color:#fff;">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><i class="fa fa-trash" aria-hidden="true"></i> Delete <?=$row->name?> ?</h4>
                                          </div>
                                          <div class="modal-body" style="background-color:#527a7a;">
                                          </div>
                                          <div class="modal-footer" style="background-color:#f0f5f5;">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="pull-left">Once Deleted can't be restored. !</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    
                                                    <?php if($row->id == 1)
                                                        {
                                                    ?>
                                                    <a href="<?=base_url()?>admin/delete_admin/<?=$row->id?>" type="button" class="btn btn-danger disabled">Delete <i class="fa fa-trash" aria-hidden="true"></i></a>

                                                    <?php
                                                    }
                                                    else{
                                                    ?>

                                                    <a href="<?=base_url()?>admin/delete_admin/<?=$row->id?>" type="button" class="btn btn-danger">Delete <i class="fa fa-trash" aria-hidden="true"></i></a>

                                                    <?php } ?>

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
                        <div class="table-responsive">

                        </div>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
        <?=br(10)?>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->