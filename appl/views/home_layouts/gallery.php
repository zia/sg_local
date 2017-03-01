<!-- Gallery Section -->

<!--Gallery Home -->
<li id="page_services">
  <div class="gray-block">
    <div class="container_12">
      <div class="grid_12">
        <?php
          $query = $this->db->get_where('g_info',array('section' => 'Home'));
          foreach($query->result() as $home_info){
        ?>
        <!--Title-->
          <h2><?=$home_info->title;?></h2>

          <!--SubTitle-->
          <p class="color-1 tt13">
            <?=$home_info->subtitle;?>
          </p>
        <?php } ?>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="gallery" align="center">
    <div class="thumbnails">
      <?php
          $c = 1;
          $this->db->limit(3);
          $this->db->order_by('id','desc');
          $query = $this->db->get_where('a_i',array('section' => 'Home'));
          foreach($query->result() as $img_info){
      ?>
        <a href="#!/<?=$img_info->url;?>"><img onmouseover="preview.src=img<?=$c;?>.src" name="img<?=$c;?>" src="<?=base_url();?>assets/images/<?=$img_info->s_img_path;?>" alt=""/></a>
      <?php $c++; } ?>
    </div>
    <br/>
    <div class="preview" align="center">
      <?php
        #To Load The First Preview Image.
        $this->db->order_by('id','desc');
        $query = $this->db->get_where('a_i',array('section' => 'DABIRUDDIN SPINNING MILLS LTD.'));
        $f_img = $query->row();
      ?>
      <img name="preview" src="<?=base_url()?>assets/images/<?=$f_img->l_img_path?>" alt=""/>

    </div>
  </div>
</li>

<!--page_servicesDSM -->
<li id="page_products_3DSM">
  <div class="gray-block">
    <div class="container_12">
      <div class="grid_12">
        <?php
          $query = $this->db->get_where('g_info',array('section' => 'DABIRUDDIN SPINNING MILLS LTD.'));
          foreach($query->result() as $home_info){
        ?>
        <!--Title-->
          <h2><?=$home_info->title;?></h2>

          <!--SubTitle-->
          <p class="color-1 tt13">
            <?=$home_info->subtitle;?>
          </p>
        <?php } ?>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="container_12 ">
    <div class="grid_12">
      
      <?php $count=0; foreach($dsm_galaries as $g_item){?>

        <?php if($count % 3 == 0){?>
          <div class="box-4 marg0">
            <a class="fancyPic" rel="Appendix" href="<?=base_url();?>assets/images/<?=$g_item->l_img_path?>"><span class="zoomSp"></span><img src="<?=base_url();?>assets/images/<?=$g_item->s_img_path?>" alt></a>
          </div>

        <?php } else{?>
          <div class="box-4">
            <a class="fancyPic" rel="Appendix" href="<?=base_url();?>assets/images/<?=$g_item->l_img_path?>"><span class="zoomSp"></span><img src="<?=base_url();?>assets/images/<?=$g_item->s_img_path?>" alt></a>
          </div>
          <?php if($count%3 == 2){?>
            <div class="clear"></div>
            <div class="line-3"></div>
          <?php }?>
      <?php } $count++; } ?> 


      <div class="clear"></div>
      <div class="line-3"></div>  
      <div class="clear"></div>
      <div class="clear"></div>      
    </div>
    <div class="grid_12">
        <div class="padbottom">&nbsp;</div>
    </div>
  </div>
</li>
<!--page_servicesDSM -->

<!--page_servicesBSM -->
<li id="page_products_3BSM">
              <div class="gray-block">
                  <div class="container_12">
                      <div class="grid_12">
                        <?php
                          $query = $this->db->get_where('g_info',array('section' => 'BSB SPINNING MILLS LTD.'));
                          foreach($query->result() as $home_info){
                        ?>
                        <!--Title-->
                          <h2><?=$home_info->title;?></h2>

                          <!--SubTitle-->
                          <p class="color-1 tt13">
                            <?=$home_info->subtitle;?>
                          </p>
                        <?php } ?>
                      </div>
                  </div>
                  <div class="clear"></div>
                </div>
                <div class="container_12 ">
                    
                    <div class="grid_12">
                       
                       <?php $count=0; foreach($ssb_galaries as $g_item){?>

                        <?php if($count % 3 == 0){?>
                          <div class="box-4 marg0">
                            <a class="fancyPic" rel="Appendix" href="<?=base_url();?>assets/images/<?=$g_item->l_img_path?>"><span class="zoomSp"></span><img src="<?=base_url();?>assets/images/<?=$g_item->s_img_path?>" alt></a>
                          </div>

                        <?php } else{?>
                          <div class="box-4">
                            <a class="fancyPic" rel="Appendix" href="<?=base_url();?>assets/images/<?=$g_item->l_img_path?>"><span class="zoomSp"></span><img src="<?=base_url();?>assets/images/<?=$g_item->s_img_path?>" alt></a>
                          </div>
                          <?php if($count%3 == 2){?>
                            <div class="clear"></div>
                            <div class="line-3"></div>
                          <?php }?>
                      <?php } $count++; } ?> 
                       
                       <div class="clear"></div>
                       <div class="line-3"></div>  
                       <div class="clear"></div>
                       <div class="clear"></div>      
                      
                    </div>
                    <div class="grid_12">
                      <div class="padbottom">&nbsp;</div>
                    </div>
                </div>
</li>
<!--page_servicesBSM -->

<!--page_servicesTSM -->
<li id="page_products_3TSM">
  <div class="gray-block">
      <div class="container_12">
          <div class="grid_12">
            <?php
              $query = $this->db->get_where('g_info',array('section' => 'TAMIJUDDIN TEXTILE MILLS LTD.'));
              foreach($query->result() as $home_info){
            ?>
            <!--Title-->
              <h2><?=$home_info->title;?></h2>

              <!--SubTitle-->
              <p class="color-1 tt13">
                <?=$home_info->subtitle;?>
              </p>
            <?php } ?>
          </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="container_12 ">
        
        <div class="grid_12">
           
           <?php $count=0; foreach($tsm_galaries as $g_item){?>

            <?php if($count % 3 == 0){?>
              <div class="box-4 marg0">
                <a class="fancyPic" rel="Appendix" href="<?=base_url();?>assets/images/<?=$g_item->l_img_path?>"><span class="zoomSp"></span><img src="<?=base_url();?>assets/images/<?=$g_item->s_img_path?>" alt></a>
              </div>

            <?php } else{?>
              <div class="box-4">
                <a class="fancyPic" rel="Appendix" href="<?=base_url();?>assets/images/<?=$g_item->l_img_path?>"><span class="zoomSp"></span><img src="<?=base_url();?>assets/images/<?=$g_item->s_img_path?>" alt></a>
              </div>
              <?php if($count%3 == 2){?>
                <div class="clear"></div>
                <div class="line-3"></div>
              <?php }?>
          <?php } $count++; } ?> 
           
           <div class="clear"></div>
           <div class="line-3"></div>  
           <div class="clear"></div>
           <div class="clear"></div>      
          
        </div>
        <div class="grid_12">
          <div class="padbottom">&nbsp;</div>
        </div>
    </div>
</li>
<!--page_servicesTSM -->





<!-- Gallery Section Ends -->

