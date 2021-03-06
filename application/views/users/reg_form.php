 <?php echo validation_errors(); ?>
 <?php echo form_open('users/register'); ?> <!-- to upload file(multipart) -->
 
  

    <div class="panel">
      <div class="panel-body">
        <h2 class="text-center"><b><?= $title?></b></h2>
          <div class="col-md-4">    
             <strong>Sign up as</strong>
             <?php foreach($categories as $category): ?>
              <div class="radio">
                <label><input type="radio" name="user" value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></label>
              </div>
             <?php endforeach; ?>
              <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control"  placeholder="First Name" name="fname" value="<?php echo set_value('fname'); ?>" >
             </div>
             <div class="form-group">
                <label>Last name</label>
                <input type="text" class="form-control"  placeholder="Last Name" name="lname" value="<?php echo set_value('lname'); ?>">
             </div>
             <div class="form-group">
                <label>Contact</label>
                <input type="text" class="form-control"  placeholder="contact" name="contact" value="<?php echo set_value('contact'); ?>">
             </div>
            
    </div>
    <div class="col-md-4">
      <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control"  placeholder="Email" name="email" value="<?php echo set_value('email'); ?>">
            </div>
       <div class="form-group">
        <label>Local Address</label>
        <input type="text" class="form-control"  placeholder="Local Address" name="l_add" value="<?php echo set_value('l_add'); ?>">
      </div>
       <div class="form-group">
        <label>State</label>
        <input type="text" class="form-control"  placeholder="state" name="state" value="<?php echo set_value('state'); ?>">
      </div>
        <div class="form-group">
          <label>Country</label>
          <input type="text" class="form-control"  placeholder="country" name="country" value="<?php echo set_value('country'); ?>">
        </div>
        <div class="form-group">
          <label>Pincode</label>
          <input type="text" class="form-control"  placeholder="pincode" name="pincode" value="<?php echo set_value('pincode'); ?>">
        </div>
      </div>

    <div class="col-md-4">    
       <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control"  placeholder="username" name="username" value="<?php echo set_value('username'); ?>">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control"  placeholder="password" name="password" value="<?php echo set_value('password'); ?>">
        </div>
        <div class="form-group">
          <label>Password Confirmation</label>
          <input type="password" class="form-control"  placeholder="password confirmation" name="passconf" value="<?php echo set_value('passconf'); ?>">
        </div>
      </div>
    <button type="submit" class="btn btn-success btn-block">Submit</button>
   </div>
 </div>

<?php echo form_close(); ?>

