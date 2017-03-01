<!--page_products-->

<!--recent activites -->
<li id="page_blog">
  <div class="gray-block3">
    <div class="container_12">
      <div class="grid_12"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
    <div class="container_12 ">
      <div class="grid_9">
        
        <?php
          foreach($recents as $recent){
        ?>

          <div class="wrap marg26">
            <img src="<?=base_url();?>/assets/images/<?=$recent->img_path;?>" alt="" width="300px" height="300px" class=" img-indent8">
            <div class="extra-wrap">
              <p class="foot-text color-2"><?=$recent->title?></p>
              <p class="marg10"><?=word_limiter($recent->content,25)?></p>
              <div class="marg6"><a href="#!/page_blog_<?=$recent->id?>A" class="link">Read More ></a></div>
            </div>
          </div>
          <div class="clear"></div>
          <div class="line-2"></div>

        <?php }?>
        
        <div class="wrap marg28">
          <div class="extra-wrap"></div>
        </div>
        <div class="clear"></div>
      </div>
      
      <div class="grid_3">
        <div class="wrap marg30">
          <div class="extra-wrap"></div>
        </div>
      <div class="clear"></div>
      <div class="wrap marg31">
        <div class="extra-wrap"></div>
      </div>
      <div class="clear"></div>
      <div class="wrap marg31">
        <div class="extra-wrap"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>

  <div class="clear"></div>
    <div class="gray-block4">
      <div class="container_12">
        <div class="grid_12">
          <div class="clear"></div>
        </div>
</li>
<!--recent activites!-->


<!--recent activity details -->
<!--recent activites one!-->
<?php
  foreach($recents as $recent){
?>
<li id="page_blog_<?=$recent->id?>A">

  <div class="clear"></div>
  <div class="container_12">
    <div class="grid_12"></div>
  </div>
  <div class="container_12 ">
    <div class="grid_12">
      <div class="slider">
        <div class="btnLeft"></div><!--end btnLeft-->
        <div class="btnRight"></div><!--end btnRight-->
        <div class="info"></div><!--end info-->
        <div class="hidden">
          <!-- This Portion Needs To be Dynamic -->
          <img src="<?=base_url();?>assets/images/ra1a.jpg">
          <img src="<?=base_url();?>assets/images/ra1b.jpg">
          <img src="<?=base_url();?>assets/images/ra1c.jpg">
          <img src="<?=base_url();?>assets/images/ra1d.jpg">
          <img src="<?=base_url();?>assets/images/ra1e.jpg">
          <img src="<?=base_url();?>assets/images/ra1f.jpg">
          <img src="<?=base_url();?>assets/images/ra1g.jpg">

        </div><!--end hidden-->
      </div><!--end slider-->


      <p class="foot-text color-2"><?=$recent->title?></p>
      <p class="marg16"><?=$recent->content?></p>


      <div class="clear"></div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
</li>
<?php
  }
?>
<!--recent activites one end!-->


<!--recent activity details -->


<!--news_and_events-->
<li id="page_blog_3NEWS">
  <div class="gray-block3">
    <div class="container_12">
      <div class="grid_12">
        <p class="foot-text color-2">News & Events</p>
      </div>
      <div class="holder">
        <ul id="ticker01">
          <?php
            foreach($n_es as $n_e){
          ?>
            <li>
              <span>
                <strong><?=$n_e->date;?></strong>
                <?php
                  if(!$n_e->type){
                    echo '[News]';
                  }
                  else{
                    echo '[Event]';
                  }
                ?>
              </span>
              <hr/>
              <a href="#">
                <img class="media-object" src="<?=base_url();?>assets/images/<?=$n_e->img_path?>" width="50" height="50" alt="">&nbsp;<?=$n_e->title;?><hr/><?=$n_e->content;?>
              </a>
            </li>
          <?php } ?>


        </ul>
      </div>
      <div class="clear"></div>
      <div class="line-2"></div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
</li>
<!--news_and_events-->



<!--JOB VACANCY!-->
<li id="page_blog_3job">
  <div class="gray-block3">
    <div class="container_12">
      <div class="grid_12">
        <p class="foot-text color-2">News & Events</p>
      </div>
      <div class="holder">
        <ul id="ticker01">
          <?php
            foreach($j_vs as $j_v){
          ?>
          <li>
              <span>
                <strong><?=$j_v->date;?></strong>
                [Job Vacancy]
              </span>
              <hr/>
              <a href="#">
                <img class="media-object" src="<?=base_url();?>assets/images/<?=$j_v->img_path?>" width="50" height="50" alt="">&nbsp;<?=$j_v->title;?><hr/><?=$j_v->content;?>
              </a>
            </li>
          <?php }?>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="line-2"></div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
</li>
<!--JOB VACANCY!-->



<!--Future Plan-->
<li id="page_blog_3A">
  <div class="gray-block3">
    <div class="container_12">
      <div class="grid_12">
        <p class="color-1 tt13"></p>
      </div>
    </div>
    <div class="clear"></div></div>
    <div class="clear"></div>
    <div class="container_12 ">
      <div class="grid_12">
        
        <?php
          foreach($f_ps as $f_p){
        ?>

          <div class="wrap marg26">
            <img src="<?=base_url();?>/assets/images/<?=$f_p->img_path;?>" alt="" class=" img-indent8">
            <div class="extra-wrap">
              <p class="foot-text color-2"><?=$f_p->title?></p>
              <p class="marg10"><?=$f_p->content?></p>
            </div>
          </div>
          <div class="clear"></div>
          <div class="line-2"></div>

        <?php }?>

      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
</li>
<!--Future Plan-->