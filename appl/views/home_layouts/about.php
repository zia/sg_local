<!-- CONTENT -->
<section id="content">
<ul> 
	<!--page_home -->          
  <li id="page_home" class="no_disp"></li>
  <!--page_about -->
  <li id="page_about">
	 <div class="gray-block-phone">
	 <div class="container_12">
	 <div class="grid_7">
    <?php foreach($intros as $intro){?>
	   <p class="foot-text color-2"><?= $intro->title; ?></p>

     <p class="text-3"><?= $intro->subtitle; ?></p>

	   <p class="color-1 tt13"><?= $intro->content; ?></p>
    </div>
    <div class="grid_5">
      <div class="ccontainer">
        <div class="aaxis">
          <div class="ffront"><img src="<?=base_url();?>assets/images/<?= $intro->img_path; ?>" height="70px" width="200px" style="padding-top:65px"></div>
          <div class="bback"><img src="<?=base_url();?>assets/images/<?= $intro->img_path; ?>" height="70px" width="200px" style="padding-top:65px"></div>
          <div class="lleft"><img src="<?=base_url();?>assets/images/<?= $intro->img_path; ?>" height="70px" width="200px" style="padding-top:65px"></div>
          <div class="rright"><img src="<?=base_url();?>assets/images/<?= $intro->img_path; ?>" height="70px" width="200px" style="padding-top:65px"></div>
          <div class="ttop"><img src="<?=base_url();?>assets/images/<?= $intro->img_path; ?>" height="70px" width="200px" style="padding-top:65px"></div>
          <div class="bbottom"><img src="<?=base_url();?>assets/images/<?= $intro->img_path; ?>" height="70px" width="200px" style="padding-top:65px"></div>
        </div>
      </div>
    </div>
  <?php } ?>
	</div>
  <div class="clear"></div>
	</div>
  <div class="clear"></div>
    <div class="white-block-phone">
      <div class="container_12">
        <div class="grid_7">
          <?php foreach($infos as $info){?>
            <p class="foot-text color-2"><?= $info->title; ?></p>

            <p class="text-3"><?= $info->name; ?></p>

            <p class="color-1 tt13"><?= $info->content; ?></p>
        </div>
        <div class="grid_5">
          <figure class="snip1206">
            <img src="<?= base_url();?>assets/images/<?= $info->img_path; ?>" alt="sample74" height="373" width="572">
            <figcaption>
              <h3><p class="foot-text color-2"><?= $info->name; ?></p></h3>
              <h3><p><?= $info->title; ?></p></h3>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
      <?php } ?>
  </div>
  <div class="clear"></div>        
  </div>

	<div class="gray-block2 marg11">
  	<div class="container_12">
      <div class="grid_12">
        <p class="foot-text color-2">Some Words About Our Business</p>
      </div>
    <div class="clear"></div>
      <?php foreach($testimonials as $testimonial){?>

        <div class="grid_4">
          <div class="marg3 left">
            <div class="img-indent"><img src="<?=base_url();?>assets/images/<?= $testimonial->img_path; ?>" alt="" class=""></div>
            <p class="text-3"><?= $testimonial->content; ?></p>
            <p class="text-2"><?= $testimonial->name; ?><br><?= $testimonial->designation; ?>,<br><?= $testimonial->address; ?><br>Date:<?= $testimonial->date; ?></p>
          </div>
        </div>
        
      <?php } ?>
    <div class="clear"></div></div>
	</div>

	<div class="container_12">
	<div class="grid_6">
	<p class="text-6 marg24">Why Choose Us?</p>

	<ul class="list2">
		<?php $count=6; foreach($policies as $policy){?>
      <li><a class="col-<?=$count;?>" href="#"><span><?=$policy->feature;?> </span> <strong> <img alt="" class="img-indent4" src="<?=base_url();?>assets/images/<?=$policy->img_path;?>" /> <span><?=$policy->feature;?><span></span></span> </strong> </a></li>
    <?php $count--;}?>

	</ul>
	</div>

	<div class="grid_6 left">
	<p class="text-6 marg24">Our Clients</p>

  <?php echo br(2); $count=0; foreach($clients as $client){?>

    <?php if($count % 3 == 0){?>

      <a class="marg0 box-logo" href="#"><img alt="" src="<?=base_url();?>assets/images/<?=$client->img_path;?>" /> </a>

    <?php } else{?>

      <a class="box-logo" href="#"> <img alt="" src="<?=base_url();?>assets/images/<?=$client->img_path;?>" /> </a>

  <?php } $count++; } ?>

	<div class="clear"></div>
	</div>

	<div class="clear"></div>

	<div class="clear"></div>
	</div>

	<div class="gray-block2 marg11">
	<div class="container_12">
	<div class="grid_12">
	<h2>Promote Your Business</h2>

	<h4 style="text-align: center;"><strong>For Advertisement Please&nbsp;</strong><a class="link5" href="<?=base_url()?>assets/images/add.jpg" target="_blank">Download</a>&nbsp;Salma Group Features. <a href="<?=base_url()?>assets/images/demo.jpg" style="color:black" target="_blank">Click here to see demo</a></div>

	<div class="clear"></div>

	<div class="clear"></div>
	</div>
	</div>
	&nbsp; &nbsp; &nbsp; &nbsp;</li>
