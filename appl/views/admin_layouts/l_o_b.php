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
                            <i class="fa fa-list" aria-hidden="true"></i> Blog Lists <small>(Statistics Overview)</small>
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
                        <h3 class="panel-title"><a data-toggle="collapse" href="#collapse"><i class="fa fa-plus-square fa-fw"></i></a> Blog Panel</h3>
                    </div>
                    <div id="collapse" class="panel-collapse collapse in">
                        <div class="panel-body">
                        <div class="table-responsive">
                            <?php

                                $query = $this->db->get('blogs');

                                $this->table->set_heading('SL.', 'Title', 'Image', 'Content','Gallery','Profile','Update','Remove');

                                $cnt=1;

                                foreach($query->result() as $row) {
                                    $link1 = anchor('admin/d_b/'.$row->id , '<span class="glyphicon glyphicon-remove"></span> Del',array('class' => 'btn btn-danger btn-xs'));
                                    $link2 = anchor('admin/c_f_p/'.$row->id , '<i class="fa fa-plus-circle" aria-hidden="true"></i> Create',array('class' => 'btn btn-primary btn-xs'));
                                    $link3 = anchor('admin/update_blog/'.$row->id , '<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update',array('class' => 'btn btn-info btn-xs'));
                                    $link4 = anchor('admin/cr_g/'.$row->id , '<i class="fa fa-plus-circle" aria-hidden="true"></i> Create',array('class' => 'btn btn-success btn-xs'));
                                    $link5 = anchor('admin/single/'.$row->id , '<i class="fa fa-rss" aria-hidden="true"></i> Details',array('class' => 'btn btn-warning btn-xs'));

                                    $content = word_limiter($row->content, 10);
                                    $image_properties = array(
                                        'src'   => 'assets/images/'.$row->img_path,
                                        'alt'   => 'Blog Image',
                                        'class' => 'img-responsive img-thumbnail',
                                        'title' => $row->title,
                                    );
                                    $img = img($image_properties);
                                    $this->table->add_row(
                                        $cnt,
                                        $row->title,
                                        $img,
                                        $content.'<br>'.$link5,
                                        $link4,
                                        $link2,
                                        $link3,
                                        $link1
                                    );

                                    $cnt++;
                                }

                                $template = array(
                                        'table_open'            => '<table class="table table-bordered table-hover table-striped">',

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
            <ul class="pagination pagination-md">
                <li><a href="#"><</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">></a></li>
            </ul>
        </div>
        <?=br(10)?>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->