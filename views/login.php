
 <?php $this->load->view('layout/header');?>
    <!--PRICING DETAILS-->
    <section class="login-reg">
        <div class="container">
            <div class="row">
                <div class="login-main">
                    <div class="log-bor">&nbsp;</div>
                    <div class="log log-1">
                        <div class="login">
                            <h4>Member Login</h4>
							   <?php  
                                    if(!empty($success_msg)){ 
                                             echo '<p class="status-msg success">'.$success_msg.'</p>'; 
                                             } 
											 elseif(!empty($error_msg)){ 
                                              echo '<p class="status-msg error">'.$error_msg.'</p>'; 
                                       } 
    ?>
                            <form id="login_form" name="login_form" method="post" action="<?php echo base_url('login'); ?>">
                               
                                <div class="form-group">
                                    <input type="email" autocomplete="off" name="email" id="email_id"
                                           class="form-control" placeholder="Enter email*"
                                           pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                           title="Enter email address" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control"
                                           placeholder="Enter password*" required value="">
                                </div>
                                <button type="submit" name="loginSubmit" value="submit"
                                        class="btn btn-primary">Sign in                           
										</button>
                            </form>

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
                                <a href="<?php echo base_url('registration');?>"><span >Create an account?</span></a>
                            </li>
                            <li>
                              <a href="<?php echo base_url('forgot');?>">  <span >Forgot password?</span></a>
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
