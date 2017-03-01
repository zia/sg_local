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
                                    <i class="fa fa-search" aria-hidden="true"></i> Search Result
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
                                <h3 class="panel-title"><i class="fa fa-search-plus fa-fw"></i> Search Results..</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;">Order #</th>
                                                <th style="text-align:center;">Title</th>
                                                <th style="text-align:center;">In</th>
                                                <th style="text-align:center;">Link</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $cnt = 0;
                                                //print_r($s_results['a_n_e']);
                                                foreach ($s_results as $key => $value) {
                                                    foreach ($value as $key_1 => $value_1) {
                                            ?>
                                                <tr>
                                                    <td align="center"><?=++$cnt?></td>
                                                    <td align="center">
                                                        <?php
                                                            if($key != 'msg' && $key != 'f_profile' && $key != 'b_p'){
                                                                    echo $value_1->title;
                                                            }
                                                            else{
                                                                if($key == 'msg'){
                                                                    echo 'Message From <strong id="m'.$value_1->id.'">'.$value_1->name.'</strong><br>';
                                                                    ?>

                                <script>
                                    $(document).ready(function(){
                                        $('#m<?=$value_1->id?>').popover({title: "<h4><?=$value_1->name?></h4>", content: "Email: <?=$value_1->email?> <hr> Phone: <?=$value_1->phone?> <hr> <?=word_limiter($value_1->msg,30)?>", html: true, placement: "right",trigger: "hover",animation: true});
                                    });
                                </script>

                                                                    <?php
                                                                }
                                                                else if($key == 'f_profile'){
                                                                   echo $value_1->heading;
                                                                }
                                                                else{
                                                                    echo $value_1->title.'<br>';
                                                                }

                                                            }
                                                        ?>
                                                    </td>
                                                    <td align="center">
                                                        <?php
                                                            if($key == 'a_n_e'){
                                                                echo 'News & Events';
                                                            }
                                                            else if($key == 'blogs'){
                                                                echo 'Blogs';
                                                            }
                                                            else if($key == 'b_p'){
                                                                echo 'Business Policies';
                                                            }
                                                            else if($key == 'clients'){
                                                                echo 'Clients';
                                                            }
                                                            else if($key == 'f_profile'){
                                                                echo 'Factory Profile';
                                                            }
                                                            else if($key == 'g_info'){
                                                                echo 'Gallery Info';
                                                            }
                                                            else if($key == 'info'){
                                                                echo 'MD & CEO Info';
                                                            }
                                                            else if($key == 'intro'){
                                                                echo 'Introduction';
                                                            }
                                                            else if($key == 'msg'){
                                                                echo 'Messages';
                                                            }
                                                            else{
                                                                echo 'Testimonials';
                                                            }
                                                        ?>
                                                    </td>
                                                    <td align="center">
                                                        <?php if($key == 'msg'){?>

                                                            <a href="inbox/<?=$value_1->id?>" type="button" class="btn btn-danger btn-xs">
                                                                Read It 
                                                                <i class="fa fa-book" aria-hidden="true"></i>
                                                            </a>

                                                        <?php } else{?>
                                                        <button type="button" class="btn btn-primary btn-xs">
                                                            Details <i class="fa fa-plus-square" aria-hidden="true"></i>
                                                        </button>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php
                                                    }
                                                }
                                                $this->benchmark->mark('code_end');
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <pre><?=$cnt?> Results Found in <?=$this->benchmark->elapsed_time('code_start', 'code_end')?> seconds.</pre>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->