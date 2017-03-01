<div id="page-wrapper" style="border-bottom:0px;">
  <div align="center">
    <pre><h5>&copy; <strong><?=date('Y')?>-<?=date('Y')+1?></strong> All Rights Resreved By <strong><a href="<?=base_url()?>" target="_blank">Salma Group&reg;</a></strong></h5></pre>
  </div>
</div>

<!-- Password Changing Modal -->
<div id="ch_p" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          
          <div class="modal-header" style="background-color:#002233;color:#fff;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Change Password <i class="fa fa-question-circle" aria-hidden="true"></i></h4>
          </div>

          <div class="modal-body" style="background-color:#527a7a;">
            <?php
                $attributes = array('role' => 'form');
                echo form_open('admin/change_pass', $attributes);
            ?>
              <div class="form-group">
                <label for="username" style="color:#f2f2f2;"><strong>* User Name :</strong></label>
                <input type="text" class="form-control" name="username" placeholder="User Name (Login credential)" required="required">
              </div>
              <div class="form-group">
                <label for="pass_o" style="color:#f2f2f2;"><strong>* Old Password :</strong></label>
                <input type="password" class="form-control" id="pass_o" name="old_password" placeholder="Old Password" required="required">
              </div>
              <div class="form-group">
                <label for="pass_n" style="color:#f2f2f2;"><strong>* New Password :</strong></label>
                <input type="password" class="form-control" id="pass_n" name="new_password" placeholder="Minimum 8 Character In Length" required="required">
              </div>
              <div class="form-group">
                <label for="pass_c" style="color:#f2f2f2;"><strong>* Confirm New Password :</strong></label>
                <input type="password" class="form-control" id="pass_c" name="confirm_password" placeholder="Required To Be Matched With New Password" required="required">
              </div>
              <div class="row">
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-danger">Reset <i class="fa fa-question" aria-hidden="true"></i></button>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel &times;</button>
                </div>
              </div>
              
            <?=form_close()?>
          </div>

          <div class="modal-footer" style="background-color:#f0f5f5;">
            <div class="row">
                <div class="col-sm-6">
                    <p class="pull-left">You Can't Restore Old Password Again !</p>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close &times;</button>
                </div>
            </div>
          </div>
        </div>

      </div>
</div>
<!-- Password Changing Modal -->


<!-- Add Admin Modal -->
<div id="add_admin" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          
          <div class="modal-header" style="background-color:#002233;color:#fff;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Admin <i class="fa fa-plus-circle" aria-hidden="true"></i></h4>
          </div>

          <div class="modal-body" style="background-color:#527a7a;">
            <?php
                $attributes = array('role' => 'form');
                echo form_open('admin/add_admin', $attributes);
            ?>
              <div class="form-group">
                <label for="username" style="color:#f2f2f2;"><strong>* User Name :</strong></label>
                <input type="text" class="form-control" id="username" name="username" placeholder="User Name (Login credential)" required="required">
              </div>
              <div class="form-group">
                <label for="pass" style="color:#f2f2f2;"><strong>* Password :</strong></label>
                <input type="password" class="form-control" id="pass" name="password" placeholder="Password" required="required">
              </div>
              <div class="form-group">
                  <label for="username" style="color:#f2f2f2;"><strong>* Role :</strong></label>
                  <select class="form-control" name="role" required>
                    <option value="">Select Role *</option>
                    <option value="0">Moderator</option>
                    <option value="1">Super Admin</option>
                  </select>
              </div>
              <div class="row">
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">Admin <i class="fa fa-plus-square" aria-hidden="true"></i></button>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel &times;</button>
                </div>
              </div>
              
            <?=form_close()?>
          </div>

          <div class="modal-footer" style="background-color:#f0f5f5;">
            <div class="row">
                <div class="col-sm-7">
                    <p class="pull-left">New Admin Can Update His Info After Login.</p>
                </div>
                <div class="col-sm-5">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close &times;</button>
                </div>
            </div>
          </div>
        </div>

      </div>
</div>
<!-- Add Admin Modal -->

<!-- Edit Admin Modal -->
<div id="edit_admin" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          
          <div class="modal-header" style="background-color:#002233;color:#fff;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Info <i class="fa fa-edit" aria-hidden="true"></i></h4>
          </div>

          <div class="modal-body" style="background-color:#527a7a;">
            <?php
                $attributes = array('role' => 'form');
                echo form_open('admin/edit_admin/'.$profile->id, $attributes);
            ?>
              <div class="form-group">
                <label for="username" style="color:#f2f2f2;"><strong>* User Name :</strong></label>
                <input type="text" class="form-control" name="username" placeholder="User Name (Login credential)" required="required">
              </div>
              <div class="form-group">
                <label for="n_pass" style="color:#f2f2f2;"><strong>* New Password :</strong></label>
                <input type="password" class="form-control" id="n_pass" name="n_pass" placeholder="Password" required="required">
              </div>
              <div class="form-group">
                <label for="name" style="color:#f2f2f2;"><strong> Name :</strong></label>
                <input type="text" class="form-control" id="name" name="name" value="<?=$profile->name?>" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="phone" style="color:#f2f2f2;"><strong> Phone :</strong></label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?=$profile->phone?>" placeholder="Phone">
              </div>
              <div class="form-group">
                <label for="email" style="color:#f2f2f2;"><strong> Email :</strong></label>
                <input type="email" class="form-control" name="email" value="<?=$profile->email?>" placeholder="Email">
              </div>

              <div class="form-group">
                <label for="notes" style="color:#f2f2f2;"><strong> Notes :</strong></label>
                <textarea name="notes" id="notes" class="form-control" rows="5"  placeholder="Enter Note"><?=$profile->notes?></textarea>
              </div>
              
              <?php
                if($_SESSION['role']){
              ?>
              <div class="form-group">
                  <label for="role" style="color:#f2f2f2;"><strong>* Role :</strong></label>
                  <select class="form-control" name="role" required>
                    <option value="">Select Role *</option>
                    <option value="0">Moderator</option>
                    <option value="1">Super Admin</option>
                  </select>
              </div>
              <?php } ?>

              <div class="form-group">
                <label for="o_pass" style="color:#f2f2f2;"><strong>* Old Password :</strong></label>
                <input type="password" class="form-control" id="ol_pass" name="o_pass" placeholder="Old Password" required="required">
              </div>
              <div class="row">
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-success">Update <i class="fa fa-pencil" aria-hidden="true"></i></button>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel &times;</button>
                </div>
              </div>
              
            <?=form_close()?>
          </div>

          <div class="modal-footer" style="background-color:#f0f5f5;">
            <div class="row">
                <div class="col-sm-7">
                    <p class="pull-left">New Admin Can Update His Info After Login.</p>
                </div>
                <div class="col-sm-5">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close &times;</button>
                </div>
            </div>
          </div>
        </div>

      </div>
</div>
<!-- Edit Admin Modal -->

<!-- Delete Admin Modal -->
<div id="edit_admin" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          
          <div class="modal-header" style="background-color:#002233;color:#fff;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Admin <i class="fa fa-plus-circle" aria-hidden="true"></i></h4>
          </div>

          <div class="modal-body" style="background-color:#527a7a;">
            <?php
                $attributes = array('role' => 'form');
                echo form_open('admin/add_admin', $attributes);
            ?>
              <div class="form-group">
                <label for="username" style="color:#f2f2f2;"><strong>* User Name :</strong></label>
                <input type="text" class="form-control" id="username" name="username" placeholder="User Name (Login credential)" required="required">
              </div>
              <div class="form-group">
                <label for="pass" style="color:#f2f2f2;"><strong>* Password :</strong></label>
                <input type="password" class="form-control" id="pass" name="password" placeholder="Password" required="required">
              </div>
              <div class="form-group">
                  <label for="username" style="color:#f2f2f2;"><strong>* Role :</strong></label>
                  <select class="form-control" name="role" required>
                    <option value="">Select Role *</option>
                    <option value="0">Moderator</option>
                    <option value="1">Super Admin</option>
                  </select>
              </div>
              <div class="row">
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">Admin <i class="fa fa-plus-square" aria-hidden="true"></i></button>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel &times;</button>
                </div>
              </div>
              
            <?=form_close()?>
          </div>

          <div class="modal-footer" style="background-color:#f0f5f5;">
            <div class="row">
                <div class="col-sm-7">
                    <p class="pull-left">New Admin Can Update His Info After Login.</p>
                </div>
                <div class="col-sm-5">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close &times;</button>
                </div>
            </div>
          </div>
        </div>

      </div>
</div>
<!-- Delete Admin Modal -->

</div>
<!-- /#wrapper -->

    <!-- jQuery -->
    
    <script src="<?php echo base_url()?>admin_assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>admin_assets/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url()?>admin_assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url()?>admin_assets/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url()?>admin_assets/js/plugins/morris/morris-data.js"></script>

    <!-- Auto Hiding Alert Boxes -->
    <script type="text/javascript">
      window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
          });
        }, 2000);
    </script>

</body>

</html>
