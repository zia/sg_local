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
                
                <h1 class="page-header">
                    <i class="fa fa-fw fa-dashboard"></i> Dashboard <small>(Statistics Overview)</small>
                </h1>
                
            </div>
        </div>
        <!-- /.row -->


        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-info fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">
                                    <?php
                                        $count = 0;
                                        $tables = array(
                                            'intro' => 'intro',
                                            'info' => 'info',
                                            'testimonial' => 'testimonial',
                                            'clients' => 'clients',
                                            'b_p' => 'b_p'
                                        );
                                        foreach($tables as $key => $value){
                                            $query = $this->db->get($value);
                                            $count = $count + $query->num_rows();
                                        }
                                        echo $count;
                                    ?>
                                </div>
                                <div><strong>About us</strong></div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>#!/page_about" target="_blank">
                        <div class="panel-footer">
                            <span class="pull-left">View Section</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-area-chart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">
                                    <?php
                                        $count = 0;
                                        $tables = array(
                                            'a_n_e' => 'a_n_e'
                                        );
                                        foreach($tables as $key => $value){
                                            $query = $this->db->get($value);
                                            $count = $count + $query->num_rows();
                                        }
                                        echo $count;
                                    ?>
                                </div>
                                <div><strong>Activities</strong></div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>#!/page_blog_3NEWS" target="_blank">
                        <div class="panel-footer">
                            <span class="pull-left">View Section</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-file-image-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">
                                    <?php
                                        $count = 0;
                                        $tables = array(
                                            'a_i' => 'a_i',
                                            'g_info' => 'g_info',
                                        );
                                        foreach($tables as $key => $value){
                                            $query = $this->db->get($value);
                                            $count = $count + $query->num_rows();
                                        }
                                        echo $count;
                                    ?>
                                </div>
                                <div><strong>Gallery</strong></div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>#!/page_services" target="_blank">
                        <div class="panel-footer">
                            <span class="pull-left">View Section</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-envelope fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">
                                    <?php
                                        $count = 0;
                                        $tables = array(
                                            'msg' => 'msg'
                                        );
                                        foreach($tables as $key => $value){
                                            $query = $this->db->get($value);
                                            $count = $count + $query->num_rows();
                                        }
                                        echo $count;
                                    ?>
                                </div>
                                <div><strong>Messages</strong></div>
                            </div>
                        </div>
                    </div>
                    <a href="l_o_m">
                        <div class="panel-footer">
                            <span class="pull-left">View Section</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->


        <!-- /.row -->
        <div class="row">
            <!-- Recent activities -->
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Recent <small>Activities</small>
                        </h1>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-info">
                            
                            <div class="panel-heading">
                                <h3 class="panel-title"><a data-toggle="collapse" href="#collapse"><i class="fa fa-plus-square fa-fw"></i></a> Activities Panel</h3>
                            </div>
                            <div id="collapse" class="panel-collapse collapse in">
                                <div class="panel-body" style="padding-left:5px;padding-right:5px;">
                                <div class="table-responsive">
                                    <?php

                                        $this->db->limit(3);
                                        $this->db->order_by('id','desc');
                                        $query = $this->db->get_where('a_n_e');

                                        $this->table->set_heading('SL.', 'Title', 'Image', 'Content','Type','Date','Action');

                                        $cnt=1;

                                        foreach($query->result() as $row) {
                                            //print_r($row);
                                            $link = anchor('admin/d_n_e/'.$row->id , '<span class="glyphicon glyphicon-remove"></span> Del',array('class' => 'btn btn-xs btn-danger'));
                                            $link_1 = anchor('admin/activity/'.$row->id , '<span class="glyphicon glyphicon-list-alt"></span> Read',array('class' => 'btn btn-xs btn-primary','id' => 'a_'.$row->id));
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
                                                'src'           => 'assets/images/'.$row->img_path,
                                                'alt'           => 'activity_image',
                                                'class'         => 'img-thumbnail img-responsive',
                                                'title'         => '<h4>'.$type.'</h4>',
                                                'id'            => 'i_'.$row->id
                                            );
                                            $img = img($image_properties);
                                            $this->table->add_row(
                                                $cnt,
                                                $row->title,
                                                $img,
                                                $link_1,
                                                $type,
                                                $row->date,
                                                $link
                                            );

                                            $cnt++;
                                            ?>
                                            <script>
                                                $(document).ready(function(){
                                                    $('#a_<?=$row->id?>').popover({title: "<h4>Content</h4>", content: "<?=$content?>", html: true, placement: "right",trigger: "hover",animation: true});
                                                });

                                                $(document).ready(function(){
                                                    $('#i_<?=$row->id?>').popover({title: "<h4>Content</h4>", content: "<img class='img-responsive img-thumbnail' src='<?=base_url()?>assets/images/<?=$row->img_path?>'>", html: true, placement: "right",trigger: "hover",animation: true});
                                                });

                                            </script>
                                        <?php
                                        }

                                        $template = array(
                                                'table_open'            => '<table class="table table-bordered table-responsive table-hover table-striped">',

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
                                                'cell_start'            => '<td align="center" style="vertical-align:middle;">',
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
                                    <div class="text-right">
                                        <a href="<?php echo base_url();?>admin/l_o_a">View All Activities <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent activities -->

            <!-- Scheduler -->
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Scheduler <small>Calendar</small>
                        </h1>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-info">
                            
                            <div class="panel-heading">
                                <h3 class="panel-title"><a data-toggle="collapse" href="#collapse_1"><i class="fa fa-plus-square fa-fw"></i></a> Calendar</h3>
                            </div>
                            <div id="collapse_1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <?=$calendar?>
                                </div>
                                <div class="panel-footer">
                                    <a href="#"><i class="fa fa-list"> Events List</i></a>
                                    <a href="#" class="pull-right">Schedule Event <i class="fa fa-plus-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Scheduler -->
        </div>
        <!-- /.row -->

        <!-- /.row -->
        <div class="row">
            <!-- Recent Posts -->
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Recent <small>Posts</small>
                        </h1>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-info">
                            
                            <div class="panel-heading">
                                <h3 class="panel-title"><a data-toggle="collapse" href="#collapse_3"><i class="fa fa-plus-square fa-fw"></i></a> Blog Panel</h3>
                            </div>
                            <div id="collapse_3" class="panel-collapse collapse in">
                                <div class="panel-body" style="padding-left:5px;padding-right:5px;">
                                <div class="table-responsive">
                                    <?php

                                        $this->db->limit(3);
                                        $this->db->order_by('id','desc');
                                        $query = $this->db->get_where('blogs');

                                        $this->table->set_heading('SL.', 'Title', 'Image', 'Content','Date','Action');

                                        $cnt=1;

                                        foreach($query->result() as $row) {
                                            //print_r($row);
                                            $link = anchor('admin/d_b/'.$row->id , '<span class="glyphicon glyphicon-remove"></span> Del',array('class' => 'btn btn-xs btn-danger'));
                                            $link_1 = anchor('admin/single/'.$row->id , '<span class="glyphicon glyphicon-list-alt"></span> Details',array('class' => 'btn btn-xs btn-primary','id' => 'bc_'.$row->id));

                                            $content = word_limiter($row->content, 25);
                                            $image_properties = array(
                                                'src'           => 'assets/images/'.$row->img_path,
                                                'alt'           => 'blog_image',
                                                'class'         => 'img-thumbnail img-responsive',
                                                'title'         => 'Image',
                                                'id'            => 'b_'.$row->id
                                            );
                                            $img = img($image_properties);
                                            $this->table->add_row(
                                                $cnt,
                                                $row->title,
                                                $img,
                                                $link_1,
                                                $row->date,
                                                $link
                                            );

                                            $cnt++;
                                            ?>
                                            <script>
                                                /* For Blog Post */
                                                $(document).ready(function(){
                                                    $('#bc_<?=$row->id?>').popover({title: "<h4>Content</h4>", content: "<?=$content?>", html: true, placement: "right",trigger: "hover",animation: true});
                                                });


                                                /* For Blog Image */
                                                $(document).ready(function(){
                                                    $('#b_<?=$row->id?>').popover({title: "<h4>Content</h4>", content: "<img class='img-responsive img-thumbnail' src='<?=base_url()?>assets/images/<?=$row->img_path?>'>", html: true, placement: "right",trigger: "hover",animation: true});
                                                });

                                            </script>
                                        <?php
                                        }

                                        $template = array(
                                                'table_open'            => '<table class="table table-bordered table-responsive table-hover table-striped">',

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
                                                'cell_start'            => '<td align="center" style="vertical-align:middle;">',
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
                                    <div class="text-right">
                                        <a href="<?php echo base_url();?>admin/l_o_b">View All Blogs <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Posts -->

            <!-- Recent Messages -->
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Latest <small>Messages</small>
                        </h1>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-info">
                            
                            <div class="panel-heading">
                                <h3 class="panel-title"><a data-toggle="collapse" href="#collapse_4"><i class="fa fa-plus-square fa-fw"></i></a> Inbox</h3>
                            </div>
                            <div id="collapse_4" class="panel-collapse collapse in">
                                <div class="panel-body" style="padding-left:5px;padding-right:5px;">
                                <div class="table-responsive">
                                    <?php

                                        $this->db->limit(4);
                                        $this->db->order_by('id','desc');
                                        $query = $this->db->get_where('msg',array('stat' => '0'));

                                        $this->table->set_heading('SL.', 'From', 'Message','Date','Action');

                                        $cnt=1;

                                        foreach($query->result() as $row) {
                                            //print_r($row);
                                            $link = anchor('admin/d_m/'.$row->id, '<span class="glyphicon glyphicon-remove"></span> Del',array('class' => 'btn btn-xs btn-danger'));
                                            $link_1 = anchor('admin/inbox/'.$row->id, '<span class="glyphicon glyphicon-list-alt"></span> Open',array('class' => 'btn btn-xs btn-primary','id' => 'm_'.$row->id));

                                            $msg = word_limiter($row->msg, 25);
                                            
                                            $this->table->add_row(
                                                $cnt,
                                                $row->name.'<br>'.$row->phone,
                                                $link_1,
                                                $row->date,
                                                $link
                                            );

                                            $cnt++;
                                            ?>
                                            <script>
                                                $(document).ready(function(){
                                                    $('#m_<?=$row->id?>').popover({title: "<h4>Message</h4>", content: "<?=$msg?>", html: true, placement: "right",trigger: "hover",animation: true});
                                                });

                                            </script>
                                        <?php
                                        }

                                        $template = array(
                                                'table_open'            => '<table class="table table-bordered table-responsive table-hover table-striped">',

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
                                                'cell_start'            => '<td align="center" style="vertical-align:middle;">',
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
                                    <div class="text-right">
                                        <a href="<?php echo base_url();?>admin/l_o_m">View All Messages <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Messages -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->