<?php
    #To identify which tab is currently open.
    $dashboard = $activity = $gallery = $about = $blog = $profile = $contact = $ab_in = $ac_in = $ad_in = $g_in = $bl_in = $exp_msg = $msg_in = $cnt_in ='';
    if($this->uri->segment(2)=='NowAy'){
        $dashboard = 'active';
    }
    else if($this->uri->segment(2)=='add_intro' || $this->uri->segment(2)=='add_info' || $this->uri->segment(2)=='testimony' || $this->uri->segment(2)=='clients' || $this->uri->segment(2)=='policy'){
        $about = 'active';$ab_in = 'in';
    }
    else if($this->uri->segment(2)=='c_g' || $this->uri->segment(2)=='g_i' || $this->uri->segment(2)=='a_i'){
        $gallery = 'active';$g_in = 'in';
    }
    else if($this->uri->segment(2)=='l_o_a' || $this->uri->segment(2)=='a_n_e' || $this->uri->segment(2)=='f_p' || $this->uri->segment(2)=='j_v'){
        $activity = 'active';$ac_in = 'in';
    }
    else if($this->uri->segment(2)=='l_o_b' || $this->uri->segment(2)=='add_blog'){
        $blog = 'active';$bl_in = 'in';
    }
    else if($this->uri->segment(2)=='l_o_m' || $this->uri->segment(2)=='inbox'){
        $exp_msg = 'active';$msg_in = 'in';
    }
    else if($this->uri->segment(2)=='profile' || $this->uri->segment(2)=='add_admin'){
        $profile = 'active';$ad_in = 'in';
    }
    else if($this->uri->segment(2)=='contact_info'){
        $contact = 'active';$cnt_in = 'in';
    }
    else{
        $dashboard = 'active';
    }
?>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="<?=$dashboard?>">
                <a href="<?=base_url()?>admin/NowAy"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>

            <!-- About -->
            <li class="<?=$about?>">
                <a href="javascript:;" data-toggle="collapse" data-target="#about"><i class="fa fa-fw fa-clipboard"></i> About Us Section <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="about" class="collapse <?=$ab_in?>">
                    <li>
                        <a href="<?=base_url()?>admin/add_intro"><i class="fa fa-edit" aria-hidden="true"></i> Add Introduction</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/add_info"><i class="fa fa-info" aria-hidden="true"></i> Add Company Info</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/testimony"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Add Testimonials</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/clients"><i class="fa fa-user" aria-hidden="true"></i> Add Clients</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/policy"><i class="fa fa-support" aria-hidden="true"></i> Add Business Policies</a>
                    </li>
                </ul>
            </li>

            <!-- Blog -->
            <li class="<?=$blog?>">
                <a href="javascript:;" data-toggle="collapse" data-target="#mills"><i class="fa fa-line-chart" aria-hidden="true"></i> Mills (Blog) <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="mills" class="collapse <?=$bl_in?>">
                    <li>
                        <a href="<?=base_url()?>admin/l_o_b"><i class="fa fa-list" aria-hidden="true"></i> Blog Lists</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/add_blog"><i class="fa fa-plus-circle" aria-hidden="true"></i> New Section</a>
                    </li>
                </ul>
            </li>

            <!-- Activity -->
            <li class="<?=$activity?>">
                <a href="javascript:;" data-toggle="collapse" data-target="#activity"><i class="fa fa-anchor" aria-hidden="true"></i> Activities <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="activity" class="collapse <?=$ac_in?>">
                    <li>
                        <a href="<?=base_url()?>admin/l_o_a"><i class="fa fa-list" aria-hidden="true"></i> List Of Activities</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/a_n_e"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Add News & Events</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/f_p"><i class="fa fa-area-chart" aria-hidden="true"></i> Add Future Plans</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/j_v"><i class="fa fa-briefcase" aria-hidden="true"></i> Add Job Vacancy</a>
                    </li>
                </ul>
            </li>

            <!-- Gallery -->
            <li class="<?=$gallery?>">
                <a href="javascript:;" data-toggle="collapse" data-target="#gallery"><i class="fa fa-file-image-o" aria-hidden="true"></i> Gallery <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="gallery" class="collapse <?=$g_in?>">
                    
                    <li>
                        <a href="<?=base_url()?>admin/c_g"><i class="fa fa-check-circle" aria-hidden="true"></i> Current Gallery</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/g_i"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Gallery Info</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/a_i"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Image</a>
                    </li>
                </ul>
            </li>

            <!-- Inbox -->
            <li class="<?=$exp_msg?>">
                <a href="javascript:;" data-toggle="collapse" data-target="#msg"><i class="fa fa-envelope" aria-hidden="true"></i> Inbox <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="msg" class="collapse <?=$msg_in?>">
                    
                    <li>
                        <a href="<?=base_url()?>admin/l_o_m"><i class="fa fa-list" aria-hidden="true"></i> List Of Messages</a>
                    </li>
                    
                </ul>
            </li>

            <!-- Contact -->
            <li class="<?=$contact?>">
                <a href="javascript:;" data-toggle="collapse" data-target="#contact"><i class="fa fa-map-marker" aria-hidden="true"></i> Contact <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="contact" class="collapse <?=$cnt_in?>">
                    
                    <li>
                        <a href="<?=base_url()?>admin/contact_info"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Contact Info</a>
                    </li>    
                </ul>
            </li>

            <!-- Footer -->
            <li class="">
                <a href="javascript:;" data-toggle="collapse" data-target="#footer"><i class="fa fa-bars" aria-hidden="true"></i> Footer <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="footer" class="collapse">
                    
                    <li>
                        <a href="<?=base_url()?>admin/tweets"><i class="fa fa-twitter" aria-hidden="true"></i> Tweets</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/concern"><i class="fa fa-sitemap" aria-hidden="true"></i> Concern</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/contact_person"><i class="fa fa-map-marker" aria-hidden="true"></i> Contact</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/stay_conneted"><i class="fa fa-facebook" aria-hidden="true"></i> Socials</a>
                    </li>
                </ul>
            </li>

            <!-- Admin -->
            <li class="<?=$profile?>">
                <a href="javascript:;" data-toggle="collapse" data-target="#admin"><i class="fa fa-cube" aria-hidden="true"></i> Admin <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="admin" class="collapse <?=$ad_in?>">
                    <li>
                        <a href="<?=base_url()?>admin/profile"><i class="fa fa-user" aria-hidden="true"></i> Admin Profile</a>
                    </li>
                    <?php
                        if($_SESSION['role']){
                    ?>
                    <li>
                        <a href="<?=base_url()?>admin/l_o_ad"><i class="fa fa-users" aria-hidden="true"></i> List Of Admin</a>
                    </li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>