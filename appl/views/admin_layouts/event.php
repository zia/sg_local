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
                                    <i class="fa fa-calendar" aria-hidden="true"></i> Events on <?=$dt?>
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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-search-plus fa-fw"></i> Events..</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <?php
                                            if($events){
                                        ?>
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;">Order #</th>
                                                <th style="text-align:center;">Title</th>
                                                <th style="text-align:center;">Type</th>
                                                <th style="text-align:center;">Link</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $cnt = 0;
                                                foreach ($events as $event) {
                                                    $cnt++;
                                            ?>
                                                <tr>
                                                    <td align="center">
                                                        <?=$cnt?>
                                                    </td>
                                                    <td align="center">
                                                        <?=$event->title?>
                                                    </td>
                                                    <td align="center">
                                                       <?php
                                                            if($event->type == '0'){echo 'News';}
                                                            else if($event->type == '1'){echo 'Event';}
                                                            else if($event->type == '2'){echo 'Future Plan';}
                                                            else{echo 'Job Vacancy';}
                                                        ?> 
                                                    </td>
                                                    <td align="center">
                                                        <button type="button" class="btn btn-primary btn-xs">Details</button>
                                                        <button type="button" class="btn btn-danger btn-xs">Delete</button>
                                                    </td>
                                                </tr>
                                            <?php
                                                }
                                                $this->benchmark->mark('code_end');
                                            ?>
                                        </tbody>
                                        <?php
                                            }
                                        else{
                                            $cnt = 0;
                                        ?>
                                            <tr>
                                                <td align="center">
                                                    No Result Found !
                                                </td>
                                                
                                            </tr>
                                        <?php
                                            }
                                            $this->benchmark->mark('code_end');
                                        ?>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <pre><?=$cnt?> Events Found in <?=$this->benchmark->elapsed_time('code_start', 'code_end')?> seconds.</pre>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->