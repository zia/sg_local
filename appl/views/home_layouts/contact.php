<!--page_products_4-->
<!--page_pricing-->
<!--page_mail-->
<li id="page_mail">
	<div class="clear"></div>
	<div class="container_12">
		<div class="grid_12">
			<center><p class="foot-text color-2"><?=$contact->page_heading?></p><center>
			<p class="text-12">
	    		<p>
	    			<center>
	    				<h3 style="text-transform: uppercase;">
	    					<b><?=$contact->office_heading?>:</b>
	    					<?=$contact->address?>
							PHONE: <?=$contact->phone?>, FAX: <?=$contact->fax?>
							Email: <?=$contact->email?>
						</h3>
					</center>
				</p>
			</p>
		</div>
	</div>

	<div class="clear"></div>

	<div class="gray-block5">
		<div class="container_12">
			<div class="grid_6">
				<p class="foot-text color-2">Contact Us</p>

				<p class="color-1">We are always glad to receive calls and read new letters from our clients.
				<br/>
				If you have any question for us, want to get involved with Salma Group or maybe
				<br/>
				just going to say hi, you can contact us using this form. Thank you.</p>

				<dl>
					<dd>Telephone: 7122942, 7121997, 7114120</dd>
					<dd><span>FAX: 88-02-7122925</span></dd>
					<dd>E-mail: bsbspintex@salmagroup.com.bd</dd>
				</dl>
			</div>

			<div class="grid_6">
				<?php if($this->session->flashdata('success')){?>
					<div class="success">
						<?php echo $this->session->flashdata('success'); ?>
						<strong>We will be in touch soon.</strong>
					</div>
		        <?php } ?>
		        <?php if($this->session->flashdata('error')){?>
					<div class="success">
						<?php echo $this->session->flashdata('error'); ?>
					</div>
		        <?php } ?>

				<?php
					$attributes = array('class' => '', 'id' => '','role' => 'form');
					echo form_open('home/message', $attributes);
					echo form_fieldset();
				?>
						<div class="form-group">
    						<input type="text" name="name" class="form-control" required="required" placeholder="Name*" style="border-radius: 15px 0px 15px 0px; height:28px;">
  						</div>
						<div class="form-group">
    						<input type="email" name="email" class="form-control" required="required" placeholder="Email*" style="border-radius: 15px 0px 15px 0px; height:28px;">
  						</div>
						<div class="form-group">
    						<input type="text" name="phone" class="form-control" required="required" placeholder="Phone*" style="border-radius: 15px 0px 15px 0px; height:28px;">
  						</div>
						<div class="form-group">
  							<textarea placeholder="Your Message*" name="msg" class="form-control" rows="10" required="required" style="border-radius: 15px 0px 15px 0px;"></textarea>
						</div>

						<input type="hidden" name="date" value="<?=date('Y-m-d')?>">

						<!-- Captcha -->

						<?php
							$this->load->helper('captcha');
							$captcha = array(
						        'word'          => '',
						        'img_path'      => './captcha/',
						        'img_url'       => base_url().'captcha/',
						        'font_path'     => base_url().'admin_assets/fonts/impact.ttf',
						        'img_width'     => '200',
						        'img_height'    => '50',
						        'expiration'    => '7200',
						        'word_length'   => '6',
						        'font_size'     => '20',
						        'img_id'        => 'Imageid',
						        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyz',
						        'colors'        => array(
						                'background' => array(0, 0, 0),
						                'border' => array(255, 255, 255),
						                'text' => array(255, 255, 255),
						                'grid' => array(255, 40, 40)
						        )
							);

							$cap = create_captcha($captcha);
							echo '<br>'.$cap['image'];
							echo br(2);
						?>

						<div class="form-group">
  							<input type="text" name="validation" class="form-control" required="required" placeholder="Captcha*" style="border-radius: 15px 0px 15px 0px; height:28px;">
						</div>

						<input type="hidden" name="captcha" value="<?=$cap['word']?>">

						<div class="clear"></div>

						<div style="padding-left:70%;padding-right:0%" class="">
							<button class="btn msg-btn" type="reset">Clear</button>
							<button class="btn msg-btn" type="submit">Submit</button>
						</div>
					<?=form_fieldset_close()?>
				<?=form_close()?>

				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</li>
<!--page_privacy-->
<!--page_more-->
<!--page_404-->
<!--page_typography-->

</ul>
</section>
<!-- END CONTENT -->