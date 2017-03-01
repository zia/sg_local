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
                            <i class="fa fa-list" aria-hidden="true"></i> Activities List <small>(Statistics Overview)</small>
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
                        <h3 class="panel-title"><a data-toggle="collapse" href="#collapse"><i class="fa fa-plus-square fa-fw"></i></a> Activities Panel</h3>
                    </div>
                    <div id="collapse" class="panel-collapse collapse in">
                        <div class="panel-body">
                        <div class="table-responsive">
                            <?php

                                $query = $this->db->get_where('a_n_e');

                                $this->table->set_heading('SL.', 'Title', 'Image', 'Content','Type','Date','Action');

                                $cnt=1;

                                foreach($query->result() as $row) {
                                    $link = anchor('admin/d_n_e/'.$row->id , '<span class="glyphicon glyphicon-trash"></span> Delete',array('class' => 'btn btn-danger btn-xs'));
                                    $link_1 = anchor('admin/activity/'.$row->id , '<span class="glyphicon glyphicon-tasks"></span> Details',array('class' => 'btn btn-primary btn-xs'));
                                    if(!$row->type){
                                        $type = 'News';
                                    }
                                    else if($row->type == 1){
                                        $type = 'Event';
                                    }
                                    else if($row->type == 2){
                                        $type = 'Future Plan';
                                    }
                                    else{
                                        $type = 'Job Vacancy';
                                    }

                                    $content = word_limiter($row->content, 25);
                                    $image_properties = array(
                                        'src'       => 'assets/images/'.$row->img_path,
                                        'alt'       => '',
                                        'class'     => '',
                                        'display'   => 'block',
                                        'max-width'     => '100%',
                                        'height'    => 'auto',
                                        'title'     => '',
                                        'rel'       => ''
                                    );
                                    $img = img($image_properties);
                                    $this->table->add_row(
                                        $cnt,
                                        $row->title,
                                        $img,
                                        $content,
                                        $type,
                                        $row->date,
                                        $link .'&nbsp;'. $link_1
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