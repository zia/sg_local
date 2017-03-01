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
                            <i class="fa fa-list" aria-hidden="true"></i> Gallery Images <small>(Listing)</small>
                        </div>
                        <div class="col-sm-6" align="right">
                            
                        </div>
                    </div>
                </h1>

                <?php if($this->session->flashdata('error')){?>
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
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
                        <div class="col-lg-10">
                            <div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Success !</strong> <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?=base_url();?>/admin/xQzMe">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-image"></i> Gallaery Informations
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <!-- Content -->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a data-toggle="collapse" href="#collapse1"><i class="fa fa-plus-square fa-fw"></i></a> DABIRUDDIN SPINNING MILLS LTD.</h3>
                        
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                        <div class="table-responsive">
                            <?php

                                $query = $this->db->get_where('a_i',array('section' => 'DABIRUDDIN SPINNING MILLS LTD.'));

                                $this->table->set_heading('SL.', 'Title', 'Image', 'Delete');

                                $cnt=1;

                                foreach($query->result() as $row) {
                                    $link = anchor('admin/d_i/'.$row->id , '<span class="glyphicon glyphicon-remove"></span> Del',array('class' => 'btn btn-danger'));
                                    $img = img('assets/images/'.$row->s_img_path, TRUE);
                                    $this->table->add_row(
                                        $cnt,
                                        $row->title,
                                        $img,
                                        $link
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
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!--Image Listing Ends-->

        
        <!--Image Listing-->
        <!-- Page Heading -->
        
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <!-- Content -->
                <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><a data-toggle="collapse" href="#collapse2"><i class="fa fa-plus-square fa-fw"></i></a> TAMIJUDDIN TEXTILE MILLS LTD.</h3>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <?php

                                        $query = $this->db->get_where('a_i',array('section' => 'TAMIJUDDIN TEXTILE MILLS LTD.'));

                                        $this->table->set_heading('SL.', 'Title', 'Image', 'Delete');

                                        $cnt=1;

                                        foreach($query->result() as $row) {
                                            $link = anchor('admin/d_i/'.$row->id , '<span class="glyphicon glyphicon-remove"></span> Del',array('class' => 'btn btn-danger'));
                                            $img = img('assets/images/'.$row->s_img_path, TRUE);
                                            $this->table->add_row(
                                                $cnt,
                                                $row->title,
                                                $img,
                                                $link
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
                        </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!--Image Listing Ends-->

        
        <!--Image Listing-->
        <!-- Page Heading -->
        <div class="row">
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <!-- Content -->
                <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><a data-toggle="collapse" href="#collapse3"><i class="fa fa-plus-square fa-fw"></i></a> BSB SPINNING MILLS LTD.</h3>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                            <div class="table-responsive">
                                <?php

                                    $query = $this->db->get_where('a_i',array('section' => 'BSB SPINNING MILLS LTD.'));

                                    $this->table->set_heading('SL.', 'Title', 'Image', 'Delete');

                                    $cnt=1;

                                    foreach($query->result() as $row) {
                                        $link = anchor('admin/d_i/'.$row->id , '<span class="glyphicon glyphicon-remove"></span> Del',array('class' => 'btn btn-danger'));
                                        $img = img('assets/images/'.$row->s_img_path, TRUE);
                                        $this->table->add_row(
                                            $cnt,
                                            $row->title,
                                            $img,
                                            $link
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
                        </div>

                </div>
            </div>
        </div>
        <!-- /.row -->
        <!--Image Listing Ends-->

        <br>

        <!--Info Listing -->
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Gallery Infos <small>(Listing)</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?=base_url();?>">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i> Tables
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a data-toggle="collapse" href="#collapse4"><i class="fa fa-plus-square fa-fw"></i></a>  Gallery Infornations</h3>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                        <div class="table-responsive">
                            <?php

                                $query = $this->db->get('g_info');

                                $this->table->set_heading('Id', 'Title', 'Subtitle', 'Section','Edit','Delete');

                                foreach($query->result() as $row) {
                                    $link1  = anchor('admin/c_g_update/'.$row->id ,'<span class="glyphicon glyphicon-edit"></span> Edit',array('class' => 'btn btn-primary'));
                                    $link2 = anchor('admin/c_g_delete/'.$row->id , '<span class="glyphicon glyphicon-remove"></span> Del',array('class' => 'btn btn-danger'));

                                    $this->table->add_row(
                                        $row->id,
                                        $row->title,
                                        $row->subtitle,
                                        $row->section,
                                        $link1,
                                        $link2
                                    );
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
                                        'cell_start'            => '<td>',
                                        'cell_end'              => '</td>',

                                        'row_alt_start'         => '<tr>',
                                        'row_alt_end'           => '</tr>',
                                        'cell_alt_start'        => '<td>',
                                        'cell_alt_end'          => '</td>',

                                        'table_close'           => '</table>'
                                );

                                $this->table->set_template($template);
                                echo $this->table->generate();
                            ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!--Info Listing Ends-->

        <?=br()?>


        </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->