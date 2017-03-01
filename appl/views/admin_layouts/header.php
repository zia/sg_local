<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Salma Group - Admin</title>

    

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>admin_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>admin_assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url()?>admin_assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>admin_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style type="text/css">
        td{
            word-wrap:break-word
        }
    </style>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--conditional input -->
    <!-- This script dosen't work on footer. -->
    <!--This script for insering two image in Gallery->add_image section -->
    <script>
        $(document).ready(function(){
            $("#l_img").hide();
            $("#section").change(function(){
                var el = $(this);
                if(el.val() === "Home" ){
                    $("#link").show(1000);
                    $("#l_img").hide(1000);
                }
                else{
                    $("#link").hide(1000);
                    $("#l_img").show(1000);
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#thatcher_effect").hide();
            $("#thatcher").click(function(){
                $("#thatcher_effect").toggle(1000);
            });
        });
    </script>

    <!--TinyMCE Editor -->
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><i class="fa fa-cogs"></i> Admin Panel</a>
            </div>

            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <!--Search Form -->
                <div class="col-sm-6 col-md-6">
                    <?=form_open('admin/search',array('role'=>'search','class'=>'navbar-form'))?>
                    <div class="input-group" style="margin-top:5px;">
                        <div class="input-group-btn">
                            <a class="btn btn-success btn-xs" href="#" title="Save Key"><i class="fa fa-plus"></i></a>
                        </div>
                        <input type="text" name="s_value" style="height:22px;background:#f7ffab;" class="form-control" placeholder="Search" required>
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-xs" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                    <input type="hidden" name="s_url" value="<?=base_url(uri_string())?>">
                    <?=form_close();?>
                </div>
                <!--Search Form -->
                
                <!-- News Event Notification -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                            <?php
                                $count = $this->db->get_where('a_n_e',array('stat' => 0))->num_rows();
                                if($count){
                                    echo '<span class="badge" style="background-color:red;margin-top:-20px;margin-left:-5px;margin-right:-5px;">'.$count.'</span>';
                                }
                            ?>     
                    </a>
                    <ul class="dropdown-menu message-dropdown">
                        <?php 
                            $this->db->limit(3);
                            $this->db->order_by('id','desc');
                            $query = $this->db->get_where('a_n_e',array('stat' => 0));

                            foreach($query->result() as $notification){
                        ?>

                            <li class="message-preview">
                                <a href="<?=base_url();?>admin/activity/<?=$notification->id?>">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="<?=base_url();?>assets/images/<?=$notification->img_path?>" width="50" height="50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>Admin</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-globe" aria-hidden="true"></i> Posted 1
                                                <?php 
                                                    if($notification->type ==0){echo '<strong>News</strong>';}
                                                    if($notification->type ==1){echo '<strong>Event</strong>';}
                                                    if($notification->type ==2){echo '<strong>Future</strong> Plan';}
                                                    if($notification->type ==3){echo '<strong>Job</strong> Vacancy';}

                                                ?> item
                                                    
                                            </p>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> <?=$notification->date;?></p>
                                            <p><?=word_limiter($notification->content, 10);?></p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        <?php } ?>

                        
                        <li class="message-footer">
                            <a href="<?=base_url();?>admin/l_o_a">Read All New Notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- News Event Notification -->

                <!-- New Message Notification -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                            <?php
                                $count = $this->db->get_where('msg',array('stat' => 0))->num_rows();
                                if($count){
                                    echo '<span class="badge" style="background-color:red;margin-top:-20px;margin-left:-2px;margin-right:-5px;">'.$count.'</span>';
                                }
                            ?>
                    </a>
                    <ul class="dropdown-menu message-dropdown">
                        <?php 
                            $this->db->limit(3);
                            $this->db->order_by('id','desc');
                            $query = $this->db->get('msg');

                            foreach($query->result() as $msg){
                        ?>
                            <?php
                                if(!$msg->stat){
                                    echo '<li class="message-preview" style="background-color:#ffffe6;">';
                                }
                                else{
                                    echo '<li class="message-preview">';
                                }
                            ?>
                            
                                <a href="<?=base_url();?>admin/inbox/<?=$msg->id?>">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="media-heading"><i class="fa fa-user" aria-hidden="true"></i> <strong><?=$msg->name?></strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-envelope" aria-hidden="true"></i> Sent a <strong>Message</strong> @ <strong><?=$msg->date?></strong>
                                            </p>
                                            <p><?=word_limiter($msg->msg, 10);?></p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        <?php } ?>

                        
                        <li class="message-footer">
                            <a href="<?=base_url();?>admin/l_o_m">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <!-- New Message Notification -->

                <!-- Admin Menus -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="message-preview">
                            <a href="#" data-toggle="modal" data-target="#ch_p"><i class="fa fa-fw fa-cog"></i> Change Pass</a>
                        </li>
                        <li class="message-preview">
                            <a href="logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                <!-- Admin Menus -->
            </ul>