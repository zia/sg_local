<!-- FOOTER -->

<footer>
<div class="container_12">
<div class="grid_3">
<p class="foot-text">Recent Tweets</p>

<div class="foot-tweet marg1"><img alt="" class="img-indent-tweet" src="<?php echo base_url(); ?>assets/images/tweet_ic.png" />
<div class="extra-wrap">
<p class="foot-tweet-text"><span>@amandawells</span> Sed cursus tur pis tortor <a href="#">http://w.yp/7v7d</a><br />
<em>11 days ago</em></p>
</div>
</div>

<div class="clear"></div>

<div class="foot-tweet"><img alt="" class="img-indent-tweet" src="<?php echo base_url(); ?>assets/images/tweet_ic.png" />
<div class="extra-wrap">
<p class="foot-tweet-text"><span>@johnsmith</span> Nec odio et ante tincidunt tem <a href="#">http://i.op/7i8o</a><br />
<em>25 days ago</em></p>
</div>
</div>

<div class="clear"></div>
</div>

<div class="grid_3">
<p class="foot-text">Our Concern</p>

<ul class="list1">
  <?php
    $query = $this->db->get('blogs');
    foreach ($query->result() as $blog) {
    
  ?>

	 <li><a href="#!/page_blog_<?=$blog->id?>"><?=$blog->title?></a></li>

  <?php
    }
  ?>
</ul>
</div>

<div class="grid_3">
    <p class="foot-text">Contact Person</p>
    <div class="headoffice">
        <p>
            <b>
                A group of young, energetic and talented marketing professionals are standby round the clock to receive and timely delivery of your orders. They are available at corporate cell numbers  of the group like- 01755555606, 01755555605, 01755555607, 01755555611.
            </b>
        </p>
    </div>
    <div class="clear"></div>
</div>

<div class="grid_3">
<p class="foot-text">Stay Connected</p>

<ul class="soc_icons-foot">
	<li class="f-ic-01"><a href="#">Like us on Facebook</a></li>
	<li class="f-ic-02"><a href="#">Foolow us on Twitter</a></li>
	<li class="f-ic-03"><a href="#">Follow us on LinkedIn</a></li>
	<li class="f-ic-04"><a href="#">Like us on Google Plus</a></li>
</ul>
</div>

<div class="clear"></div>
</div>

<div class="clear"></div>
<div class="footholder">
<div class="container_12">
<center><div class="grid_6">
<p class="fott-text2">Developed By <a href="#">i3intelligence</a></p>
</div></center>

<div class="grid_6">
<div class="pagin">
<p class="active">​</p>
</div>
</div>
</div>
</div>
</footer>
        <!-- END FOOTER -->
</div>
<script>
  (function(){
    $(document).ready(function(){

    var slider = function(){
      
      var backImg = [];
      backImg[0] = "<?=base_url()?>assets/images/ra1a.jpg";
      backImg[1] = "<?=base_url()?>assets/images/ra1b.jpg";
      backImg[2] = "<?=base_url()?>assets/images/ra1c.jpg";
	    backImg[3] = "<?=base_url()?>assets/images/ra1d.jpg";
	    backImg[4] = "<?=base_url()?>assets/images/ra1e.jpg";
	    backImg[5] = "<?=base_url()?>assets/images/ra1f.jpg";
	    backImg[6] = "<?=base_url()?>assets/images/ra1g.jpg";
      
      var i = 0;
      var x = (backImg.length) - 1;
      var int = 3500;
      
      var initialize = function() {
        attachEvents();
      };
      
      var attachEvents = function() {
        $('.btnLeft').click(function() {
          left();
        });

        $('.btnRight').click(function() {
          right();
        });
      };

      var changeImg = function() {
        $('.slider').css('background-image', 'url(' + backImg[i] + ')');
      }

      var left = function() {
        (i <= 0) ? i = 3 : i--;
        changeImg(i);
      };

      var right = function() {
        (i >= x) ? i = 0 : i++;
        changeImg(i);
      };

      window.setInterval(right, int);

      changeImg(i);
      return initialize();
    }

    slider();
  });
  
  })();

  </script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     
</body>
</html>