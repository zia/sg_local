<!--page_blog_$blog->id -->
<?php
#The entire blog will come under a loop
foreach($blogs as $blog){
?>

<li id="page_blog_<?=$blog->id?>">
  <div class="google_map">
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=z4_DbNM0FNgo.kpYmjOJy1mr0"  width="1435" height="300" frameborder="0" style="border:0" allowfullscreen>
    </iframe>
  </div> 
  <div class="gray-block-phone">
    <div class="container_12">
      <div class="grid_7">
        <p class="foot-text color-2"><?=$blog->title?></p>
        <p class="color-1 tt13">
          <?=$blog->content?>
        </p>
      </div>
      <div class="grid_5">
        <div class="ccontainer">
          <div class="aaxis">
            <div class="ffront"><img src="<?=base_url();?>assets/images/<?=$blog->img_path?>" alt="Salma Group" style="width:200px;height:70px;padding-top:65px">
            </div>
            <div class="bback"><img src="<?=base_url();?>assets/images/<?=$blog->img_path?>" alt="Salma Group" style="width:200px;height:70px;padding-top:65px"></div>
            <div class="lleft"><img src="<?=base_url();?>assets/images/<?=$blog->img_path?>" alt="Salma Group" style="width:200px;height:70px;padding-top:65px"></div>
            <div class="rright"><img src="<?=base_url();?>assets/images/<?=$blog->img_path?>" alt="Salma Group" style="width:200px;height:70px;padding-top:65px"></div>
            <div class="ttop"><img src="<?=base_url();?>assets/images/<?=$blog->img_path?>" alt="Salma Group" style="width:200px;height:70px;padding-top:65px"></div>
            <div class="bbottom"><img src="<?=base_url();?>assets/images/<?=$blog->img_path?>" alt="Salma Group" style="width:200px;height:70px;padding-top:65px"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  
  <div class="white-block-phone">
    <div class="container_12">
      <center><p class="foot-text color-2">Factory Profile</p><center>
      <table class="table-fill">
        <thead>
          <tr>
            <th class="text-left">Facts</th>
            <th class="text-left">Detail</th>
          </tr>
        </thead>
        <tbody class="table-hover">
          <?php
            $query = $this->db->get_where('f_profile',array('blog_id' => $blog->id));
            foreach($query->result() as $result){
          ?>

            <tr>
              <td class="text-left"><?=$result->heading?></td>
              <td class="text-left"><?=$result->info?></td>
            </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</li>


<?php
  }
?>