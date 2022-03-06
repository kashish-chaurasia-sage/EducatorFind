
 <?php $this->load->view('layout/header');?>
    <!--PRICING DETAILS-->
    <section class="login-reg">
        <div class="container">
            <div class="row">
                <div class="login-main">
                    <div class="log-bor">&nbsp;</div>
                   
                    <div class="log log-1">
                        <div class="login">
                            <h4>Create an account</h4>
                            <center><h8>Don't have an account?</h8> <br>
                               <h8>It's take less then a 5 minutes</h8></center>
                            <br>
                           		   <?php  
                                    if(!empty($success_msg)){ 
                                             echo '<p class="status-msg success">'.$success_msg.'</p>'; 
                                             } 
											 elseif(!empty($error_msg)){ 
                                              echo '<p class="status-msg error">'.$error_msg.'</p>'; 
                                       } 
                                    
                                    ?>
						   <form name="register_form" id="register_form" method="POST" action="<?php echo base_url('registration'); ?>">
                               
                              

                                <div class="form-group">
                                    <input type="text" autocomplete="off" name="name" id="first_name"
                                           class="form-control" placeholder="Name" value="">
										   <?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="email" autocomplete="off" name="email" id="email_id"
                                           class="form-control" placeholder="Email id*" value=""
                                           required>
										   <?php echo form_error('email','<p class="help-block">','</p>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="phone" autocomplete="off" name="phone" id="phone"
                                           class="form-control" placeholder="Phone Number*" value=""
                                           required>
										   <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
                                </div>

                                <div class="form-group">

                                    <select name="user_type" id="user_type" class="form-control" required>
                                    <option value="" selected="selected">---Select user type*---</option>
                                        <option value="educator">Educator</option>
                                        <option value="learner">Learner</option>
                                        
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control"
                                           placeholder="Password*" value="" required>
										   
										    <?php echo form_error('password','<p class="help-block">','</p>'); ?>
                                </div>

                                <div class="form-group">
                                    <input type="password" name="conf_password" id="confpassword" class="form-control"
                                           placeholder="Confirm Password*" value="" required>
										   <?php echo form_error('conf_password','<p class="help-block">','</p>'); ?>
                                </div>

                                <div>
                                By creating an account you agree to our <a href="<?php echo base_url('/privacy-policy');?>" target="_blank" style="color:dodgerblue">Privacy Policy</a> and <a href="<?php echo base_url('/terms-and-conditions');?>" target="_blank" style="color:dodgerblue">Terms & Conditions</a>.
                                    </div>
<br>
                                <input type="submit" name="signupSubmit"
                                        class="btn btn-primary" value="Register Now">
                            <!-- SOCIAL MEDIA LOGIN -->
                            <div class="soc-log">
                                <ul>
                                    <li>
                                        <div class="g-signin2" data-onsuccess="onSignIn"></div>

                                    </li>
                                <!--<li>
{{--                                        <a href="javascript:void(0);" onclick="fbLogin();" class="login-fb"><img
{{--                                                src="images/icon/facebook.png"> Continue with Facebook</a>
{{--                                    </li>-->

                                </ul>

                            </div>
                            <!-- END SOCIAL MEDIA LOGIN -->
                        </div>
                    </div>
                   
                    <div class="log-bot">
                        <ul>
                            <li>
                                <a href="<?php echo base_url('login');?>"><span>Login?</span></a>
                            </li>
                            
                            <li>
                                <a href="<?php echo base_url('login');?>"><span>Forgot password?</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END PRICING DETAILS-->


    <section>
        <div class="pop-ups pop-quo">
            <!-- The Modal -->
            <div class="modal fade" id="quote">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <!-- Modal Header -->
                        <div class="quote-pop">
                            <h4>Get quote</h4>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter name*" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter email*"
                                           pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                           title="Invalid email address" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter mobile number *"
                                           pattern="[7-9]{1}[0-9]{9}"
                                           title="Phone number starting with 7-9 and remaining 9 digit with 0-9" required>
                                </div>
                                <div class="form-group">
                                <textarea class="form-control" rows="3"
                                          placeholder="Enter your query or message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <?php $this->load->view('layout/footer');?>
